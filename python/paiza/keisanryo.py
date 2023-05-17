import time

# https://www.youtube.com/watch?v=-fksUvaWMFo
# 10 ** 12 未満の偶数桁の数字のうち、半分に分けた時に、左右の数字の和が等しくなるものの個数を求める
# 例： 123123, 234234, 11, 65436543

# bit全探索は、10 ** 8 時点で２秒以上かかるので、10 ** 12 の計算量の時は使えない
time1 = time.time()
count = 0
for i in range(10 ** 8): pass
time2 = time.time()
print('時間ぎれ: ' + str(time2 - time1))

# 条件に合わない数字を無視して、普通に条件に合う数を数えていく必要がある
n = int(input())

time3 = time.time()
t = 1
count = 0
while True:
    num = str(t) + str(t)
    if int(num) <= n:
        count += 1
    else:
        break
    t += 1
print('時間以内に完了: ' + str(count))

time4 = time.time()

print(time4- time3)