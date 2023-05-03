import 'dart:io';

void main() {
  List inputs =
      stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();
  final l1 = inputs[0], r1 = inputs[1], l2 = inputs[2], r2 = inputs[3];
  int ans;

  if (r2 <= l1 || r1 <= l2) {
    ans = 0;
  } else if (l2 <= l1 && r1 <= r2) {
    ans = r1 - l1;
  } else if (l2 <= l1 && r2 <= r1) {
    ans = r2 - l1;
  } else if (l1 <= l2 && r2 <= r1) {
    ans = r2 - l2;
  } else {
    ans = r1 - l2;
  }

  print(ans);
}
