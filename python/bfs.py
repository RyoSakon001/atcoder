from collections import deque

# 木構造を表すデータ構造のためのクラス
class TreeNode:
    def __init__(self, val=0, left=None, right=None):
        self.val = val
        self.left = left
        self.right = right

# 今回使用する木（自由に変えてみてください！）
tree = [1, 2, 3, 4, 5, 6]

# 二分木を作成するためのメソッド
def make_tree(tree, node, i, n):
    if n > i:
        if tree[i] is None:
            return None
        temp = TreeNode(tree[i])
        node = temp
        node.left = make_tree(tree, node.left, 2 * i + 1, n)
        node.right = make_tree(tree, node.right, 2 * i + 2, n)

    return node

# 二分木を幅優先探索で探索する
# 答えを入れるためのリスト
ans = []
# 木を作成
root = make_tree(tree, None, 0, len(tree))
# キューというデータ構造にリストを変換
queue = deque([root])
# 幅優先探索の開始
# queueが空にならない限りループを続ける
while queue:
    #queueの左側から要素を一つ取り出す
    node = queue.popleft()
    #ans（答え）に追加
    ans.append(node.val)
    #もし左側のノードが存在するならqueueに追加
    if node.left:
        queue.append(node.left)
    #もし右側のノードが存在するならqueueに追加
    if node.right:
        queue.append(node.right)

print(ans)