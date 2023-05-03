import 'human.dart';

void main(List<String> args) {
  final sakon = Human('sakon', 30);
  print(sakon.name);
  sakon.sayGoodBye(sakon.name);
  print(sakon.sayHello('ryo'));
}
