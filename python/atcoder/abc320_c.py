# 方針：3つのスロットを回す順番は6通りしかないので、1~9までの10種類、トータル60パターンに対して全探索する

def common_digits(s1, s2, s3):
    common_set = set(s1) & set(s2) & set(s3)
    # return sorted(common_set)
    return sorted([int(d) for d in common_set])

def rotate_left(s, n):
    n = n % len(s)  # これは文字列の長さを超える回転を処理するためのものです
    return s[n:] + s[:n]

m = int(input()) # 100文字以内
slot = []
slot.append(input())
slot.append(input())
slot.append(input())

stop_orders = [
    [0, 1, 2],
    [0, 2, 1],
    [1, 0, 2],
    [1, 2, 0],
    [2, 0, 1],
    [2, 1, 0],
]

completable_digits = common_digits(slot[0], slot[1], slot[2])
if completable_digits == []:
    print(-1)
    exit()

ans = 1000000
for i in completable_digits:
    for order in stop_orders:
        time1, time2, time3 = 0, 0, 0
        str1, str2, str3 = slot[order[0]], slot[order[1]], slot[order[2]]

        # 1回目のストップ
        time1 = str1.find(str(i))

        # 2回目のストップ
        str2 = rotate_left(str2, time1)
        time2 = time1 + str2.find(str(i))
        if time2 == time1:
            str2 = rotate_left(str2, 1)
            time2 += str2.find(str(i)) + 1 # 1ずらして、次の文字を探す

        # 3回目のストップ
        str3 = rotate_left(str3, time2)
        time3 = time2 + str3.find(str(i))
        if time3 == time2:
            str3 = rotate_left(str3, 1)
            time3 += str3.find(str(i)) + 1 # 1ずらして、次の文字を探す

        ans = min(ans, time3)

        # print(i, time1, time2, time3)

print(ans)