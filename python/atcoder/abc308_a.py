num_list = list(map(int, input().split()))

for i in range(len(num_list)):
    if (num_list[i] % 25 != 0 or num_list[i] >675 or num_list[i] < 100):
        print('No')
        exit()

for i in range(1, len(num_list)):
    if (num_list[i] < num_list[i-1]):
        print('No')
        exit()


print('Yes')