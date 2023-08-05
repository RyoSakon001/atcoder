word = 'chokudai'
s = input()
size = len(s)
dp = [[0] * 9 for _ in range(size + 1)]

for i in range(size + 1):
    dp[i][0] = 1

for i in range(1, size + 1):
    for j in range(1, 9):
        if s[i - 1] == word[j - 1]:
            dp[i][j] = dp[i - 1][j] + dp[i - 1][j - 1]
        else:
            dp[i][j] = dp[i - 1][j]

print(dp[size][8] % (10 ** 9 + 7))