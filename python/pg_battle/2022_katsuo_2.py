import sys
sys.setrecursionlimit(10 ** 6)

W,H,T = map(int, input().split())
sx,sy = map(int, input().split())
tx,ty = map(int, input().split())

# 縦横の長さがw,hの2次元配列を作成
connect = [[False] * W for _ in range(H)]
# print(connect)

ans = 0

def dfs(x, y, t):
    # print('現在の状況：', x, y, t)
    global ans
    if x < 0 or x > H or y < 0 or y > W or t > T or(connect[x][y] == True):
        return

    # ゴールの判定
    if x == tx and y == ty:
    # if x == tx and y == ty and t == T:
        ans += 1
        print(ans, t)
        exit()

    connect[x][y] = True
    t += 1

    # 反射ロジック
    dfs(x+1, y, t)

dfs(sx, sy, 0)

print(ans)