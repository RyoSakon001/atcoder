# 順列
import math

def compute_permutation_value(n, r):
    permutation_value = math.factorial(n) // math.factorial(n - r)
    return permutation_value

print(compute_permutation_value(5, 3))