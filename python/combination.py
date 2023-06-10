# 組み合わせ
import math
def comb(n, r):
    return math.factorial(n) // (math.factorial(n - r) * math.factorial(r))

print(comb(5, 2))