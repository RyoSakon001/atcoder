n,m,p=map(int,input().split())

if n < m:
    print(0)
    exit()

print(1+((n-m) // p))