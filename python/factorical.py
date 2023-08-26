n = 5

def factorical(n):
    if n == 1:
        return 1
    else:
      return n * factorical(n - 1)

print(factorical(n))