n, m = map(int, input().split())
c = list(map(str, input().split()))
d = list(map(str, input().split()))
p = list(map(int, input().split()))
p_base = p[0]
p.pop(0)

total = 0

for i in range(len(c)):
    if (c[i] in d):
        index = d.index(c[i])
        total += p[index]
    else:
        total+= p_base

print(total)