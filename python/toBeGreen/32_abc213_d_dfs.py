import sys
sys.setrecursionlimit(10**6)

N=int(input())
connect=[[] for _ in range(N+1)]
for i in range(N-1):
    A,B=map(int, input().split())
    connect[A].append(B)
    connect[B].append(A)

# 小さい順に回るからソート
for i in range(N+1):
    connect[i].sort()

ans=[]

def DFS(now,pre):
    ans.append(now)
    for to in connect[now]:
        if to != pre:
            DFS(to,now)
            ans.append(now)

DFS(1,-1)

print(*ans)