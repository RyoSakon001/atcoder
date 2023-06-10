h, w = map(int, input().split())
arr = []
for i in range(h):
    arr.append(list(input()))

for i in range(h):
    for j in range(w):
        if arr[i][j] == '.':
            count = 0
            # 上下左右のチェック
            if i != 0 and arr[i-1][j] == '#':
                count += 1
            if i != h-1 and arr[i+1][j] == '#':
                count += 1
            if j != 0 and arr[i][j-1] == '#':
                count += 1
            if j != w-1 and arr[i][j+1] == '#':
                count += 1
            if count >= 2:
                print(i+1, j+1)
                exit()