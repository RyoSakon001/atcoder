h, w = list(map(int, input().split()))
scores = []

for i in range(h):
    # 両端に-1を追加し、端の処理を簡単にする
    scores.append([-1])
    scores[i] += list(map(int, input().split()))
    scores[i] += [-1]

dp = []
for _ in range(h):
    dp.append([0] * (w + 2)) # 両端の幅を考慮

dp = scores

for y in range(1, h): # 1行目はスキップしてOK
    for x in range(1, w + 1):
        dp[y][x] += max(dp[y - 1][x - 1], dp[y - 1][x], dp[y - 1][x + 1])

max_score = max(dp[h - 1])
print(max_score)