import 'Insect.dart';
import 'Flutter.dart';

abstract class AirBorneInsect extends Insect with Flutter {
  void buzz() {
    print('不快な音');
  }
}
