n = int(input())
arr = list(map(int,input().split()))


if len(arr) == 1:
    print(0)
    exit()

max_val = max(arr[1:])

if max_val < arr[0]:
    print(0)
elif max_val == arr[0]:
    print(1)
else:
    print(max_val - arr[0] + 1)