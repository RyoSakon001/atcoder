from decimal import Decimal
N = int(input())
arr = []

for i in range(N):
    A, B = map(int, input().split())
    arr.append([i+1, Decimal(A) / Decimal(A+B)])

arr.sort(key=lambda x:x[1], reverse=True)

ans = ' '.join(map(lambda sublist: str(sublist[0]), arr))
print(ans)