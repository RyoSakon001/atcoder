n, k = map(int, input().split())
imos = [0] * (10 ** 9)

for i in range(n):
    a, b = map(int, input().split())
    imos[a] += b

count = 0
for i in range(len(imos)-1, -1, -1):
    if imos[i] == 0:
        continue
    count += imos[i]
    if count > k:
        print(i+1)
        exit()

print(1)

