n = int(input())
work_days = []
for i in range(n):
    start, end = map(int, input().split())
    work_days += range(start, end + 1)

work_days = list(set(work_days))
max_count = 0
count = 0

for i in range(len(work_days) - 1):
    # 数値の差が1ならカウントし、それ以外ならカウントをリセット
    if work_days[i + 1] - work_days[i] == 1:
        count += 1
    else:
        max_count = max(max_count, count)
        count = 0

print(max(max_count, count) + 1) # 最後のカウントを忘れずに