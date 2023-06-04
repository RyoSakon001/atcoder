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
arr = [2, 4, 6] + ['a', 'b', 'c']

# 配列操作
for i in arr:
    print(i) # 2, 4, 6, 'a', 'b', 'c'

# 文字列操作
s = 'abc'
print(s[0]) # a


# 最大最小・絶対値
max(1, 2)
min(1, 2)
abs(-10)