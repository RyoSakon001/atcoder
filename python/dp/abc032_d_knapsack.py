# https://atcoder.jp/contests/abc032/tasks/abc032_d

N, W = list(map(int, input().split()))
values = [0]
weights = [0]
for i in range(N):
    tmp1, tmp2 = map(int, input().split())
    values.append(tmp1)
    weights.append(tmp2)

dp = [[0] * (W+1) for _ in range(N+1)]


# i番目の品物
for i in range(1, N+1):
    for j in range(1, W+1):
        # まずその品物を選べるかどうか？その重さで入れられないならば、上の値になる
        if j < weights[i]:
            dp[i][j] = dp[i-1][j]
        # 入れることができる場合
        else:
            not_choice_val = dp[i-1][j]
            choice_val = values[i] + dp[i-1][j-weights[i]] # その品物自体の価値＋残った重さでの最大価値
            dp[i][j] = max(not_choice_val, choice_val)

# print(dp)
print(dp[N][W])