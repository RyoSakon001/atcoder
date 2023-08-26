n = int(input())
arr = list(map(int, input().split()))
arr.sort()

# print(n)
# print(arr)

for i in range(n-1):
  if arr[i+1]-arr[i] != 1:
    print(arr[i]+1)
    exit()