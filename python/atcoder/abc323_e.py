# 確率mod
MOD=998244353
from fractions import Fraction
# n, x = map(int, input().split())
# times = list(map(int, input().split()))
# print(n,x)
# print(times)

# print((7 // 27) * MOD)


# 7/27の分数を作成
frac = Fraction(7, 27)

# 分数をprint
print(frac)

MOD = 998244353

# xとyの値が必要です。適切な値に置き換えてください。
x = 27
y = 7

# モジュラ逆数を計算する
x_inv = pow(x, MOD - 2, MOD)

# zを計算する
z = (y * x_inv) % MOD

print(z)