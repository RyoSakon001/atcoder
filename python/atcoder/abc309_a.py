
a, b = map(int,input().split())


if a % 3 == 0:
    print("No")
    exit()
else:
    if b - a == 1:
        print("Yes")
        exit()
    else:
        print("No")
        exit()