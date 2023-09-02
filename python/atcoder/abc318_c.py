# n日の旅行。d日分でp円のチケット
n,d,p=map(int,input().split())
fees = list(map(int, input().split()))

fees.sort(reverse=True)

total=0

# n / d の切り上げを出力
max_ticket_num = -(-n//d)

buy = 0
for i in range(max_ticket_num):
    # print(fees[d*i:d*(i+1)])
    if p < sum(fees[d*i:d*(i+1)]):
        buy += 1

# print(buy)

total += p * buy
total += sum(fees[(d*buy):])

print(total)