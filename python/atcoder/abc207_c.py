n = int(input())
array = []
for i in range(n):
    t, l, r = map(int, input().split())
    if t == 1:
        array.append([l, r])
    elif t == 2:
        array.append([l, r - 0.1])
    elif t == 3:
        array.append([l + 0.1, r])
    else:
        array.append([l + 0.1, r - 0.1])

def has_common_area(a, b):
    if a[1] < b[0] or b[1] < a[0]:
        return False
    else:
        return True

count = 0

for i in range(n):
    for j in range(i + 1, n):
        if has_common_area(array[i], array[j]):
            count += 1

print(count)
