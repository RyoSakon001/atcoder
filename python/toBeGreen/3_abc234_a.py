t = int(input())

def func(t):
    return t**2 + 2 * t + 3

ans = func(func(func(t)+t)+func(func(t)))

print(ans)