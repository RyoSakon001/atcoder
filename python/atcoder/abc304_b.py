n = int(input())

def truncate_digit(n):
    if n < 10**3:
        return n
    digit = len(str(n))
    num = int(n / 10**(digit - 3)) * 10**(digit - 3)
    return num

print(truncate_digit(n))