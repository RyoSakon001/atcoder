h, w = map(int, input().split())
arr = []
for i in range(h):
    arr.append(list(input()))

h = h - 1
w = w - 1

# 長方形の上の行番号を求める
found = False
for i in range(h):
    for j in range(w):
        if arr[i][j] == '#':
            up = i
            found = True
            break
    if found:
        break

# 長方形の下の行番号を求める
found = False
for i in range(h, 0, -1):
    for j in range(w):
        if arr[i][j] == '#':
            down = i
            found = True
            break
    if found:
        break

# 長方形の左の列番号を求める
found = False
for j in range(w):
    for i in range(h):
        if arr[i][j] == '#':
            left = j
            found = True
            break
    if found:
        break

# 長方形の右の列番号を求める
found = False
for j in range(w, 0, -1):
    for i in range(h):
        if arr[i][j] == '#':
            right = j
            found = True
            break
    if found:
        break

for i in range(up, down + 1):
    for j in range(left, right + 1):
        if arr[i][j] == '.':
            print(i + 1, j + 1)
            exit()