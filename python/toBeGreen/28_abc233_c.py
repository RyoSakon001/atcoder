n, x = map(int, input().split())
l = []
arr = []

for i in range(n):
  tmp = list(map(int, input().split()))
  l.append(tmp[0])
  arr.append(tmp[1:])

# l = [3,2]
# arr = [[1,8,4], [10,5]]
print('--------------------------------')

for i in range(1,n):
  results = []
  for j in range(l[i]):
    for k in range(len(arr[i])):
      print(i,j,k, arr[i],arr[j],arr[k])