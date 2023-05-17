def binary_search(arr, target):
    low = 0
    high = len(arr) - 1
    closest = None

    while low <= high:
        mid = (low + high) // 2
        value = arr[mid]

        if value == target:
            return value

        if closest is None or abs(target - value) < abs(target - closest):
            closest = value

        if value < target:
            low = mid + 1
        else:
            high = mid - 1

    return closest

n = int(input())
a = list(map(int, input().split()))
a.sort()
q = int(input())

for i in range(q):
    b = int(input())
    closest_rate = binary_search(a, b)
    print(abs(closest_rate - b))