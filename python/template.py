# 標準入力
n = int(input())
a, b = map(int, input().split())
s = input()
s, t = map(str, input().split())
arr = list(map(int, input().split()))
arr = list(map(str, input().split()))

# 標準入力（複数行）
arr = []
for i in range(n):
    arr.append(int(input()))
    arr.append(input().split())
    arr.append(list(map(int, input().split())))
    arr.append(list(map(str, input().split())))

# 配列作成
arr = [0] * n
arr = [1, 2, 3] + [4, 5, 6]

# 最大最小・絶対値
max(1, 2)
min(1, 2)
abs(-10)