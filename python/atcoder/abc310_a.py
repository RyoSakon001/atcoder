n, p, q = map(int, input().split())
min_price = min(list(map(int, input().split())))

print(min(p, q+min_price))