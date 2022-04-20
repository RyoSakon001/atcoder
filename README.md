# 競技プログラミング用のリポジトリ

１．問題URLのパラメータでブランチを切る。
２．プログラミング
３．php atcoder.php で実行
４．大丈夫なら提出する。
５．Git HubにPushしておく。masterブランチにはマージしないこと。

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