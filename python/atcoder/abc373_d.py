from collections import deque, defaultdict

def find_solution(N, M, conditions):
    # グラフの構築
    graph = defaultdict(list)
    for i, j, k in conditions:
        i -= 1  # 0-based indexing
        j -= 1
        graph[i].append((j, k))
        graph[j].append((i, -k))

    X = [None] * N  # 変数の値を格納するリスト

    for node in range(N):
        if X[node] is None:
            # BFSを使用して値を割り当てる
            queue = deque()
            X[node] = 0  # 開始ノードの値を0に設定
            queue.append(node)
            while queue:
                current = queue.popleft()
                for neighbor, weight in graph[current]:
                    expected_value = X[current] + weight
                    if X[neighbor] is None:
                        X[neighbor] = expected_value
                        queue.append(neighbor)
                    else:
                        if X[neighbor] != expected_value:
                            # 矛盾が発生
                            return "No solution exists due to inconsistency."
    return X



N,M = map(int, input().split())
conditions = []
for i in range(M):
    conditions.append(tuple(map(int, input().split())))

ans = find_solution(N, M, conditions)
print(' '.join(map(str, ans)))
