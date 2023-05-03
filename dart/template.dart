import 'dart:io';

void main() {
  String? int_tmp = stdin.readLineSync();
  final int n = int.parse(int_tmp!);

  String? str_tmp = stdin.readLineSync();
  final String s = str_tmp!;

  String? list_tmp = stdin.readLineSync();
  final List<int> list = list_tmp!.split(" ").map(int.parse).toList();
  final int x = list[0];
  final int y = list[1];
  final int z = list[2];

  var answer = '';
  print(answer);
}








