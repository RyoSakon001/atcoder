from collections import deque

N = int(input())

S = input()

A = deque([N])

for i in range(N-1, -1, -1):
    if S[i] == 'R':
        A.appendleft(i)
    else:
        A.append(i)

print(*A)