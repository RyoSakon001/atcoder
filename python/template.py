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

