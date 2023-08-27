import sys
sys.setrecursionlimit(10 ** 6)

h,w = map(int, input().split())
connect = []
start = [0, 0]
for i in range(h):
    tmp = input()
    if "s" in tmp:
        start = [i, tmp.index("s")]
    connect.append(list(tmp))

def dfs(x, y):
    if x < 0 or x >= h or y < 0 or y >= w or (connect[x][y] == "#"):
        return

    if connect[x][y] == "g":
        print("Yes")
        exit()

    connect[x][y] = "#"

    dfs(x+1, y)
    dfs(x-1, y)
    dfs(x, y+1)
    dfs(x, y-1)

dfs(start[0], start[1])
print("No")