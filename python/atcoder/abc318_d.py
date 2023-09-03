import sys
sys.setrecursionlimit(10**6)

n = int(input())
connect = [[0] * n for _ in range(n)]

for i in range(n-1):
    num_list = list(map(int, input().split()))
    for j in range(len(num_list)):
        connect[i][i+1+j] = num_list[j]
        connect[i+1+j][i] = num_list[j]

# print(connect)


visited = [False] * n
ans = 0
i = 0

def dfs(start, total):
    global ans
    global i
    i += 1
    if total > ans: ans = total
    # print(start, total)

    visited[start] = True

    for to in range(n):
        if (not visited[to]) and (connect[start][to] > 0):
            tmp = total
            if (i % 2) == 1:
                tmp += connect[start][to]
            dfs(to, tmp)

    visited[start] = False

for j in range(n):
    dfs(j, 0)

print(ans)