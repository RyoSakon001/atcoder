n, m = map(int, input().split(' '))
fees = []
for i in range(n):
    fees.append(list(map(int, input().split())))
x = int(input())

p = [[1, 1]] # place
for i in range(1, x + 1): # スタート[1, 1]に追加していく
    p.append(list(map(int, input().split())))

total = 0

for i in range(x):
    line = p[i+1][0] - 1 # 次の路線番号
    station_from = p[i][1] - 1
    station_to = p[i+1][1] - 1
    total += abs(fees[line][station_to] - fees[line][station_from])

print(total)