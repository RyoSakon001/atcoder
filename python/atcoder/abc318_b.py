n=int(input())
length = 101
field=[[False] * length for _ in range(length)]

# print(field)

for i in range(n):
  a,b,c,d = map(int, input().split())
  for j in range(a,b):
    for k in range(c,d):
      field[j][k] = True

# print(field)

# Trueの数を数える
count=0
for i in range(length):
  for j in range(length):
    if field[i][j]:
      count+=1
print(count)