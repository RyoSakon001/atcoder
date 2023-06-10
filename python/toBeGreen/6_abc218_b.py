arr = list(map(int, input().split()))
alphabets = 'abcdefghijklmnopqrstuvwxyz'
ans = ''
for i in arr:
    ans += alphabets[i - 1]

print(ans)