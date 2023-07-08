n=int(input())
arr=[input() for _ in range(n)]

print(arr[1][0]+arr[0][:-1])

for i in range(1,n-1):
  print(arr[i+1][0]+arr[i][1:-1]+arr[i-1][-1])

print(arr[-1][1:]+arr[-2][-1])