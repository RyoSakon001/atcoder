h, w = map(int, input().split())
arr = []
for i in range(h):
    arr.append(list(input()))

h = h - 1
w = w - 1


# 長方形の左上の座標を求める
found = False
for i in range(h):
    for j in range(w):
        if arr[i][j] == '#':
            p1 = [i, j]
            found = True
            break
    if found:
        break

# 長方形の右上の座標を求める
found = False
for i in range(h):
    for j in range(w, 0, -1):
        if arr[i][j] == '#':
            p2 = [i, j]
            found = True
            break
    if found:
        break

# 長方形の左下の座標を求める
found = False
for i in range(h, 0, -1):
    for j in range(w):
        if arr[i][j] == '#':
            p3 = [i, j]
            found = True
            break
    if found:
        break

# 長方形の右下の座標を求める
found = False
for i in range(h, 0, -1):
    for j in range(w, 0, -1):
        if arr[i][j] == '#':
            p4 = [i, j]
            found = True
            break
    if found:
        break

def is_edge_lack(p1, p2, p3, p4):
    return not (p1[0] == p2[0] and p3[0] == p4[0] and p1[1] == p3[1] and p2[1] == p4[1])

def find_lacking_edge(p1, p2, p3, p4):
    if (not p1[0] == p2[0]) or (not p2[1] == p4[1]):
        return [p1[0], p4[1]]
    elif (not p2[1] == p4[1]) or (not p3[0] == p4[0]):
        return [p3[0], p2[1]]
    elif (not p3[0] == p4[0]) or (not p1[1] == p3[1]):
        return [p4[0], p1[1]]
    elif (not p1[1] == p3[1]) or (not p1[0] == p2[0]):
        return [p2[0], p3[1]]

if is_edge_lack(p1, p2, p3, p4):
    p5 = find_lacking_edge(p1, p2, p3, p4)
    print(p5[0] + 1, p5[1] + 1)
    exit()

for i in range(p1[0], p3[0]):
    for j in range(p1[1], p2[1]):
        if arr[i][j] == '.':
            print(i + 1, j + 1)
            exit()
