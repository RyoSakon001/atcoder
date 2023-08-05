_ = int(input())
numbers = list(map(int,input().split()))

total = sum(numbers)
average = total // len(numbers)
reminder = total % len(numbers)
balanced_numbers = [average] * len(numbers)

# とりあえず大きい数字のところに1を足す
i = 0
while reminder > 0:
    if i == len(numbers):
        break
    if numbers[i] > balanced_numbers[i]:
        balanced_numbers[i] += 1
        reminder -= 1
    i += 1
# その後はどこに足しても良い
i = 0
while reminder > 0:
    if balanced_numbers[i] == average:
        balanced_numbers[i] += 1
        reminder -= 1
    i += 1

count = 0
for j in range(len(numbers)):
    count += abs(numbers[j] - balanced_numbers[j])

print(int(count / 2))
