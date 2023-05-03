import 'Bird.dart';
import 'Flutter.dart';

class Swallow extends Bird with Flutter {
  void doSwallowThing() {
    chirp();
    flutter();
    print('蚊を食べる');
  }
}
