n, m = map(int, input().split())
s = input()
t = input()

length = len(s)
start, end = t[:length], t[-length:]

if s == start and s == end:
  print(0)
  exit()
elif s == start:
  print(1)
  exit()
elif s == end:
  print(2)
  exit()
else:
  print(3)

