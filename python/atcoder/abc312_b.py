n, m = map(int, input().split())
arr = []

for i in range(n):
    arr.append(input())

def is_tak_code(y, x):
    if y > (n-9) or x > (m-9):
        return
    is_up_left_tak = arr[y][x:x+4] == '###.' and arr[y+1][x:x+4] == '###.' and arr[y+2][x:x+4] == '###.' and arr[y+3][x:x+4] == '....'
    is_down_right_tak = arr[y+5][x+5:x+9] == '....' and arr[y+6][x+5:x+9] == '.###' and arr[y+7][x+5:x+9] == '.###' and arr[y+8][x+5:x+9] == '.###'

    if is_up_left_tak and is_down_right_tak:
        print(y+1, x+1)

for i in range(n):
    for j in range(m):
        is_tak_code(i, j)