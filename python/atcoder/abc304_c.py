class UnionFind:
    def __init__(self,n):
        self.n=n
        self.parent_size=[-1]*n
    def leader(self,a):
        if self.parent_size[a]<0: return a
        self.parent_size[a]=self.leader(self.parent_size[a])
        return self.parent_size[a]
    def merge(self,a,b):
        x,y=self.leader(a),self.leader(b)
        if x == y: return
        if abs(self.parent_size[x])<abs(self.parent_size[y]):x,y=y,x
        self.parent_size[x] += self.parent_size[y]
        self.parent_size[y]=x
    def same(self,a,b):
        return self.leader(a) == self.leader(b)
    def size(self,a):
        return abs(self.parent_size[self.leader(a)])
    def groups(self):
        result=[[] for _ in range(self.n)]
        for i in range(self.n):
            result[self.leader(i)].append(i)
        return [r for r in result if r != []]

def is_near(p, q, distance):
    return (abs(p[0] - q[0]) ** 2 + abs(p[1] - q[1]) ** 2 ) <= (distance ** 2)

n, d = map(int, input().split())
uf = UnionFind(n)
arr = []
for i in range(n):
    arr.append(list(map(int, input().split())))

# グループ化
for i in range(n):
    for j in range(n):
        if i == j:
            continue
        if is_near(arr[i], arr[j], d):
            uf.merge(i, j)

for i in range(n):
    print('Yes' if uf.same(i, 0) else 'No')