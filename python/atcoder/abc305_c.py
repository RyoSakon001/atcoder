h, w = map(int, input().split())
arr = []
for i in range(h):
    arr.append(input())

up, down, left, right = float('inf'), float('-inf'), float('inf'), float('-inf')

for i in range(h):
    for j in range(w):
        if arr[i][j] == '#':
            up = min(up, i)
            down = max(down, i)
            left = min(left, j)
            right = max(right, j)

for i in range(up, down+1):
    for j in range(left, right+1):
        if arr[i][j] == '.':
            print(i+1, j+1)
            exit()
