# 競技プログラミング用のリポジトリ

<ol>
    <li>問題URLのパラメータでブランチを切る。</li>
    <li>プログラミング</li>
    <li>php atcoder.php で実行</li>
    <li>大丈夫なら提出する。</li>
    <li>Git HubにPushしておく。masterブランチにはマージしないこと。</li>
</ol>
# template.phpの解説

STDIN: Standard Input(標準入力のこと)
```
$a = trim(fgets(STDIN)); // 単一のStandard Input

list($b, $c) = explode(' ', fgets(STDIN)); // 複数のStandard Input

list($i, $j, $W, $H) = [0, 0, 2, 2]; // $W行$H列のStandard Input
while ($i < $H) {
    $array[$i] = explode(' ', fgets(STDIN));
    $i++;
}
$i = 0;
while ($i < $H) {
    echo implode(' ', $array[$i]);
    $i++;
}
```

# マージテスト
- ①masterからtest1ブランチを作成、何か適当にコミット
  - developにマージするPR作成
  - 実際にマージする
  - masterにマージするPR作成
  - **マージしないでおく**
- ②masterからtest2ブランチを作成、何か適当にコミット
  - developにマージするPR作成
  - そうするとどうなるのか？
  - masterにマージするPR作成
  - →特に余計な差分は出ないはず