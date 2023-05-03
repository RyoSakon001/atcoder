import 'dart:io';

void main() {
  final a = readInt();
  final ints = readInts();
  final b = ints[0];
  final c = ints[1];
  final str = readLine();
  print('${a + b + c} $str');
}

// ?と!は、AtCoderの古いDartに適合しないため外すこと
String readLine() {
  String? tmp = stdin.readLineSync();
  return tmp!;
}

int readInt() {
  String? tmp = stdin.readLineSync();
  return int.parse(tmp!);
}

List<int> readInts() {
  return readLine().split(" ").map(int.parse).toList();
}
