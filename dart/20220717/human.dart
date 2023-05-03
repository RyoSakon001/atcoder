class Human {
  String name;
  int age;
  Human(this.name, this.age);

  String sayHello(name) {
    return 'hello, $name !';
  }

  void sayGoodBye(name) => print('bye, $name !');
}
