n = int(input())

digit10 = (n // 10) * 10
digit1 = n % 10

if 0 <= digit1 <= 2:
    print(digit10)
elif 3 <= digit1 <= 7:
    print(digit10 + 5)
elif 8 <= digit1 <= 9:
    print(digit10 + 10)