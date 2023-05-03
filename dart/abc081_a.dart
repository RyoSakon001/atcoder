import 'dart:io';

void main() {
  String? str_tmp = stdin.readLineSync();
  var elements = (str_tmp!).split('').map(int.parse).toList();
  int count = 0;

  print(elements[0].runtimeType);

  elements.forEach((element) => {
    if (element == 1) count++
  });

  print(count);
}






