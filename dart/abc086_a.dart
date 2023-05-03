import 'dart:io';

void main() {
  String? list_tmp = stdin.readLineSync();
  final List<int> list = list_tmp!.split(" ").map(int.parse).toList();
  final int a = list[0];
  final int b = list[1];
  final int remainder = (a * b) % 2;

  final String answer = (remainder.isEven)? 'Even' : 'Odd';
  print(answer);
}








