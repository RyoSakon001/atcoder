n, m = map(int, input().split())
arr = []
for i in range(n):
    tmp = list(map(int, input().split()))
    arr.append([tmp[0], tmp[1], set(tmp[2:])]) # 0: price, 1: feature, 2: set of feature

arr.sort(key=lambda x: (-x[0], x[1]))

def price_check(a: int, b: int):
    if a < b:
        return 0
    if a == b:
        return 1
    if a > b:
        return 2
def feature_check(set1: set, set2: set):
    if set1.difference(set2):
        return 0
    if set1 == set2:
        return 1
    if set2.difference(set1):
        return 2

for i in range(n):
    for j in range(i, n):
        if (
            (price_check(arr[i][0], arr[j][0]) == 2 and feature_check(arr[i][2], arr[j][2]) == 2) or
            (price_check(arr[i][0], arr[j][0]) == 1 and feature_check(arr[i][2], arr[j][2]) == 2) or
            (price_check(arr[i][0], arr[j][0]) == 2 and feature_check(arr[i][2], arr[j][2]) == 1)):
            print('Yes')
            exit()

print('No')
