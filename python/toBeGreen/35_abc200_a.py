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

n, m = map(int, input().split())
uf = UnionFind(n + 1)
requests = [0] * (n + 1) # 隣同士になりたい相手の人数

for i in range(m):
    a, b = map(int, input().split())
    requests[a] += 1
    requests[b] += 1
    if 3 <= requests[a] or 3 <= requests[b]:
        print('No') # ①：隣同士になりたい相手の人数が３人いたら、３人全員と隣になることはできない
        exit()
    if uf.same(a, b):
        print('No') # ②：ループしているため全員が隣になることはできない
        exit()
    uf.merge(a, b)

print('Yes')






