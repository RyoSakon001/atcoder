n = int(input())
arr = list(map(int, input().split()))

count = 0

for i in range(n):
    count += max((arr[i] - 10), 0)

print(count)