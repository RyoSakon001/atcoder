n = int(input())
numbers = list(map(int, input().split()))
count = 0

# 配列に奇数が含まれているかどうか判定
def has_odd(array):
  for i in array:
    if i % 2 != 0:
      return True
  return False

# 配列の要素を全て２で割る
def halve(num):
  return num / 2

while not has_odd(numbers):
  numbers = [halve(num) for num in numbers]
  count += 1

print(count)
