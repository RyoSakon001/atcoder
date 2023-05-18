from collections import deque
def is_goaled(h, w, y, x):
    return y in (0, h-1) or x in (0, w-1)

h, w = map(int, input().split())
maze = []
found_start = False
for i in range(h):
    row = input()
    if not found_start and 'S' in row:
        start = [i, row.index('S')]
        found_start = True
    maze.append(list(row))

queue = deque([start])
directions = [[1, 0], [-1, 0], [0, 1], [0, -1]]
maze[start[0]][start[1]] = "#"

while queue:
    y, x = queue.popleft() # 現在地
    if is_goaled(h, w, y, x):
        print('YES')
        exit()
    for dy, dx in directions:
        ny, nx = y + dy, x + dx # 次の地点
        if maze[ny][nx] == ".":
            queue.append([ny, nx])
            # 移動した地点を # にすることで、同じ地点を複数回通らないようにする。これが幅優先探索の特徴。
            maze[ny][nx] = "#"

print('NO')
