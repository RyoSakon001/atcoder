field = []
sharp_count = 0
for i in range(12):
    field.append(input())
    sharp_count += field[i].count('#')

if sharp_count != 16:
    print('No')
    exit()

# パズルを作れるかどうか

