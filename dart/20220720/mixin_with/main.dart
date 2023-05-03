// メソッドを複数の抽象クラスに共通で足したい時。
// なぜ普通の継承ではないのか？
// →本来はAirborneInsectとBirdのSuperクラスとして、「Flyer（飛ぶ生き物）」クラスを継承すれば良い。
// しかし、AirborneInsectはすでにInsectクラスから継承済みであるため、mixinクラスを付与する。
mixin Fluttering {
  int? wingSize;
  void flutter() {
    print('羽ばたく　※鳥＋虫');
  }
}

// ※飛ぶとは限らない
abstract class Insect {
  void crawl() {
    print('這って歩く　※虫');
  }
}

abstract class AirborneInsect extends Insect with Fluttering {
  void buzz() {
    print('不快な音を出す　※飛べる虫');
  }

  void makeNoise(String sound);
}

class Mosquito extends AirborneInsect {
  void doMosquitoThing() {
    crawl();
    flutter();
    buzz();

    print('這って歩く＋飛ぶ＋不快な音を出す　AND 血を吸う　※飛べる虫の１種');
  }

  @override
  void makeNoise(String sound) => print(sound);
}

class Bird with Fluttering {
  void chirp() {
    print('ピヨピヨ鳴く　※鳥');
  }
}

class Swallow extends Bird {
  void doSwallowThing() {
    chirp();
    flutter();
    print('つばめ　※鳥の１種');
  }
}
