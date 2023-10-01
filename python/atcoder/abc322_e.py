n, k, p = map(int, input().split())
costs = [0]
parameters = [0,0,0]
for i in range(n):
    tmp = list(map(int, input().split()))
    costs.append(tmp[0])
    parameters.append(tmp[1:])

# max_cost = 12
# dp = [[[0] * k] * (max_cost+1) for _ in range(n+1)]
# print(dp)
# for i in range(1, n+1):
#     for j in range(1, max_cost+1):
#         for l in range(k):
