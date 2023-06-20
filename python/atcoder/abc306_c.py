N = int(input())
A = list(map(int, input().split()))

# N行の配列を用意する
place_list = [[] for _ in range(N)]

# Aの左から順に取り出して、N[A]に、何番目なのかを追加する
for i in range(len(A)):
    place_list[A[i]-1].append(i)

# Nそれぞれの2列目を配列second_listに入れる
second_list = []
for i in range(N):
    second_list.append([i, place_list[i][1]])

sorted_list = sorted(second_list, key=lambda x:x[1])

ans = []
for i in range(len(sorted_list)):
    ans += [sorted_list[i][0] + 1]

ans2 = ' '.join(str(x) for x in ans)
print(ans2)