n,h,x = map(int, input().split())
arr = list(map(int, input().split()))

# print(n,h,x)
# print(arr)

for i in range(n):
    if h + arr[i] >= x:
        print(i+1)
        exit()