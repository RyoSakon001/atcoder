n, m = map(int, input().split())
arr = list(map(int, input().split()))

ans_arr = []
firework_count = 0
for i in range(n):
    today = i+1
    next = arr[firework_count]
    ans_arr.append(next-today)
    if next == today:
        firework_count += 1

for day in ans_arr:
    print(day)
