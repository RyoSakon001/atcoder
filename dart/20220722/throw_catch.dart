import 'dart:js_util';

void main() {
  try {
    int? num = 1;
    num++;
    if (1 == 1) throw Exception();
    print('success.');
  } on FormatException catch (e) {
    print(e);
  } on NullRejectionException catch (e) {
    print(e);
  }
}
