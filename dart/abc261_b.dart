import 'dart:io';

void main() {
  int _num = int.parse(stdin.readLineSync()!);
  List<List<String>> _array = [];
  for (int i = 0; i < _num; i++) {
    _array.add(stdin.readLineSync()!.split('').toList());
  }

  String _ans = 'correct';
  for (int i = 0; i < _num; i++) {
    for (int j = 0; j < _num; j++) {
      if (i <= j) continue;
      if (!isCorrect(_array[i][j], _array[j][i])) _ans = 'incorrect';
    }
  }
  print(_ans);
}

bool isCorrect(String a, String b) {
  bool judge = false;
  if ((a == 'W' && b == 'L') ||
      (a == 'L' && b == 'W') ||
      (a == 'D' && b == 'D')) judge = true;

  return judge;
}
