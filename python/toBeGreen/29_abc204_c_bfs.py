# https://atcoder.jp/contests/abc204/tasks/abc204_c


n,m = map(int, input().split())

# 木をつくる
connect = [[] for i in range(n+1)]
for i in range(m):
  a,b = map(int, input().split())
  # 都市aから都市bへ行くことができる
  connect[a].append(b)

# print(connect)

from collections import deque
def BFS(start):
  count=1
  visited = [False]*(n+1)
  visited[start] = True
  que=deque()
  que.append(start)

  while 0<len(que):
    now=que.popleft()

    for to in connect[now]:
      if visited[to]==False:
        count+=1
        visited[to] = True
        que.append(to)

  return count

ans=0

for x in range(1, n+1):
  ans+=BFS(x)
print(ans)