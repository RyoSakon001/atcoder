import 'dart:io';

void main() {
  String? int_tmp = stdin.readLineSync();
  final int n = int.parse(int_tmp!);
  String? list_tmp = stdin.readLineSync();
  List<int> lists = list_tmp!.split(" ").map(int.parse).toList();

  int count = 0;

  while (isEvenAll(lists)) {
    count++;
    lists = (lists.map((num) => (num/2).toInt()).toList());
  }
  
  print(count);
}

bool isEvenAll(List<int> numbers) {
  bool is_even_all = true;
  numbers.forEach((number) => {
    if (number.isOdd) is_even_all = false
  });
  return is_even_all;
}






