def keta_number(n):
  count = 0
  for i in range(1, n+1):
    if (len(str(i)) == len(str(n))):
      count += 1
  return count

N = int(input())

ans = 0
for i in range(1, N+1):
  ans += keta_number(i)
  
print(ans)