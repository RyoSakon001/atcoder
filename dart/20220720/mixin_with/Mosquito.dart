import 'AirBorneInsect.dart';
import 'Insect.dart';

class Mosquito extends AirBorneInsect with Insect {
  void doMosquitoThing() {
    crawl();
    flutter();
    buzz();
    print('血をすう');
  }
}
