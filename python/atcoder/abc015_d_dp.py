w = int(input())
n, k = map(int, input().split())

arr = [[0] * (w + 1)]
for i in range(n):
    arr.append(list(map(int, input().split())))

dp = [[0] * (w + 1) for _ in range(n + 1)]

# print(dp)

for i in range(1, n+1):
    for j in range(1, w+1):
        # if (arr[i][0] > j):
            dp[i][j] = dp[i-1][j]
        # else:
            dp[i][j] = max(dp[i][j], arr[i][1] + dp[i-1][j - arr[i][1]])

print(dp)


0 0 0 0 0 0 0 0 0 0 0
0 0 0 0 20 20 20 20 20 20 20
0 0 0 0 0 0 0 0 0 0 0
0 0 0 0 0 0 0 0 0 0 0
