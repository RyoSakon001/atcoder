n = int(input())
work_table = [0] * (10 ** 6 + 1)

# いもす法でマッピング
for i in range(n):
    start, end = list(map(int, input().split()))
    work_table[start - 1] += 1
    work_table[end] -= 1

# データ変換
for i in range(1, len(work_table)):
    work_table[i] += work_table[i - 1]

max_count = 0
count = 0

# 連勤日数をカウント
for i in range(len(work_table)):
    if work_table[i] != 0:
        count += 1
    else:
        max_count = max(max_count, count)
        count = 0

print(max_count)