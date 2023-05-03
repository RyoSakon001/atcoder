import 'dart:io';

void main() {
  String? int_tmp1 = stdin.readLineSync();
  final int a = int.parse(int_tmp1!);
  String? int_tmp2 = stdin.readLineSync();
  final int b = int.parse(int_tmp2!);
  String? int_tmp3 = stdin.readLineSync();
  final int c = int.parse(int_tmp3!);
  String? int_tmp4 = stdin.readLineSync();
  final int x = int.parse(int_tmp4!);

  int count = 0;

  for (int i=0; i<=a; i++) {
    for (int j=0; j<=b; j++) {
      for (int k=0; k<=c; k++) {
        if (500*i + 100*j + 50*k == x) count++;
      }
    }
  }

  print(count);
}









