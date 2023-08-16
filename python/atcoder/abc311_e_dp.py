h, w, n = map(int, input().split())
arr = []
for i in range(n):
  arr.append(list(map(int, input().split())))

print('------------------')
print(h, w, n)
print(arr)
print('------------------')

def has_hole(i, j, size):
  for hole in arr:
    if (i <= hole[0] <= i+size) and (j <= hole[1] <= j+size):
      return True
  return False

# 左上を(i,j)とした時の正方形の個数をdp[i][j]とする
dp = [[0 for i in range(w+1)] for j in range(h+1)]
print(dp)

# count = 0

# # 正方形の大きさごとに
# for size in range(1, min(h,w)+1):
#   # print('------------------')
#   # print("size: " + str(size))
#   # 縦のループ
#   for i in range(h):
#     if (i+size > h):
#       break
#     # 横のループ
#     for j in range(w):
#       if (j+size > w):
#         break
#       # print("座標: " + str(i) + " " + str(j))
#       if not has_hole(i, j, size):
#         count += 1

# print(count)










# h, w, n = map(int, input().split())
# arr = []
# for i in range(n):
#   arr.append(list(map(int, input().split())))

# print('------------------')
# print(h, w, n)
# print(arr)
# print('------------------')

# def has_hole(i, j, size):
#   for hole in arr:
#     if (i <= hole[0] <= i+size) and (j <= hole[1] <= j+size):
#       return True
#   return False

# # 左上を(i,j)とした時の正方形の個数をdp[i][j]とする
# dp = [[0 for i in range(w+1)] for j in range(h+1)]
# print(dp)

# count = 0

# # 正方形の大きさごとに
# for size in range(1, min(h,w)+1):
#   # print('------------------')
#   # print("size: " + str(size))
#   # 縦のループ
#   for i in range(h):
#     if (i+size > h):
#       break
#     # 横のループ
#     for j in range(w):
#       if (j+size > w):
#         break
#       # print("座標: " + str(i) + " " + str(j))
#       if not has_hole(i, j, size):
#         count += 1

# print(count)