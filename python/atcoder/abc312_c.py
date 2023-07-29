N, M = map(int, input().split())
A = list(map(int, input().split()))
B = list(map(int, input().split()))

A.sort()
B.sort()

def binary_search_greater_or_equal(arr, target):
    left, right = 0, len(arr)
    while left < right:
        mid = (left + right) // 2
        if arr[mid] < target:
            left = mid + 1
        else:
            right = mid
    return len(arr) - left

for i in range(N):
    a = i+1
    b = binary_search_greater_or_equal(B, A[i])
    print(a, b)
    if a >= b:
        if b == 0:
            print(B[-1]+1)
            exit()
        else:
            print(A[i])
            exit()



# seller_amount = len(A)
# for i in range(len(B)):
#     # A[i]が存在しなくなったら終了
#     if i >= seller_amount:
#         break
#     a_num = i + 1
#     b_num = binary_search_greater_or_equal(B, A[i])
#     # print(A[i], "円: 売ってもいい人: ", a_num, " 買ってもいい人: ", b_num)
#     if a_num >= b_num:
#         break

# print(min(A[a_num-1], B[0]+1))
# # for i in range(len(A)):
# #     # A[i]円で売ってもいい人はi+1人
# #     a_num = i + 1
# #     # A[i]円で買っても良い人数を求める
# #     b_num = 0
# #     for j in range(len(B)):
# #         if B[j] < A[i]:
# #             b_num = j
# #             break
# #     if a_num >= b_num:
# #         if b_num == 0:
# #             print(B[0]+1)
# #         else:
# #             print(A[i])
# #         exit()



