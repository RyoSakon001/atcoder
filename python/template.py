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
    arr.append([int(x) for x in list(str(input()))]) # 数字の各桁を1文字ずつ格納


# 3 ✖︎ 5 の配列を作成
array = [[False] * 5 for _ in range(3)]
print(array)

# enumerate
fruits = ['apple', 'banana', 'orange']
for index, fruit in enumerate(fruits):
    print(index, fruit)


# #と.のやつ
for i in range(n):
    arr.append(list(input()))

# 配列作成
arr = [0] * n
arr = [2, 4, 6] + ['a', 'b', 'c']

# 配列操作
for i in arr:
    print(i) # 2, 4, 6, 'a', 'b', 'c'

# 文字列操作
s = 'abc'
print(s[0]) # a

# bit演算
print(0b1101)


# 最大最小・絶対値
max(1, 2)
min(1, 2)
abs(-10)

# 約数をすべて求める
def get_divisors(num):
    divisors = []
    for i in range(1, num):
        if num % i == 0:
            divisors.append(i)
    return divisors


# GCD・LCM
import math
print(math.gcd(12, 18, 24))
print(math.lcm(4, 5, 6))


# 三平方の定理
def get_distance(p, q):
    return (abs(p[0] - q[0]) ** 2 + abs(p[1] - q[1]) ** 2) ** 0.5

# UnionFind
from union_find import UnionFind
uf = UnionFind(10)
uf.merge(0, 2)
uf.merge(1, 3)
uf.merge(5, 6)
uf.merge(5, 7)
uf.merge(3, 0)
print(uf.groups())

print(f"isSame: {uf.same(0, 2)}, {uf.same(1, 5)}")
print(f"Size: {uf.size(1)}, {uf.size(5)}")
print(f"Leader: {uf.leader(0)}, {uf.leader(7)}")