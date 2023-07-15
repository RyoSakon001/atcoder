n = int(input())
s = set()
for i in range(n):
    word = input()
    if not word[::-1] in s:
        s.add(word)

print(len(s))