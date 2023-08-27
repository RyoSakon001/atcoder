import sys
sys.setrecursionlimit(10 ** 6)

n,m = map(int, input().split())
connect = [[0] * (n+1) for _ in range(n+1)]

# print(connect)

for i in range(m):
    a,b,c = map(int, input().split())
    connect[a][b] = c
    connect[b][a] = c

# print(connect)

visited = [False] * (n+1)
ans = 0

def dfs(start, total):
    global ans
    if total > ans: ans = total
    visited[start] = True

    for to in range(1, n+1):
        if (not visited[to]) and (connect[start][to] > 0):
            dfs(to, total+connect[start][to])

    visited[start] = False

for i in range(1, n+1):
    dfs(i, 0)

print(ans)




# N,M=map(int,input().split())
# connect=[[0]*(N+1) for _ in range(N+1)]
# for _ in range(M):
#     a,b,c=map(int,input().split())
#     connect[a][b]=c
#     connect[b][a]=c
# ans=0
# visited=[False]*(N+1)

# def DFS(start, total):
#     global ans
#     visited[start] = True

#     if total>ans: ans = total

#     for to in range(1, N+1):
#         if not visited[to] and connect[start][to]: # 訪問したことがなく、また、道の距離が０でない
#             DFS(to, total+connect[start][to])

#     visited[start] = False

# for i in range(1, N+1):
#     DFS(i, 0)

# print(ans)