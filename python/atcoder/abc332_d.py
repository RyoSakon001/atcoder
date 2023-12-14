import itertools
h, w = map(int, input().split())
a = [list(map(int, input().split())) for _ in range(h)]
b = [list(map(int, input().split())) for _ in range(h)]

tate = list(range(h))
yoko = list(range(w))

tate = list(itertools.permutations(tate))
yoko = list(itertools.permutations(yoko))

ans_min = 10000000
aruyo = False

print(tate)

for t in tate:
    for y in yoko:
        # そもそも一致するのか検証
        ans = True
        ai = 0
        aj = 0
        for i in t:
            for j in y:
                if a[ai][aj] != b[i][j]:
                    ans = False
                aj += 1
            aj = 0
            ai += 1
        if ans:
            aruyo = True
            li = [0]*len(t)
            tentou_tate = 0
            for ind in range(len(t)):
                for ind1 in range(ind):
                    if t[ind] < t[ind1]:
                        tentou_tate += 1

            li = [0]*len(t)
            tentou_yoko = 0
            for ind in range(len(y)):
                for ind1 in range(ind):
                    if y[ind] < y[ind1]:
                        tentou_yoko += 1
            ans_min = min(ans_min, tentou_tate + tentou_yoko)

if aruyo:
    print(ans_min)
else:
    print(-1)