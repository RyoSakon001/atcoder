void main() {
  String greeting = sayHello('Ryo');
  print(greeting);

  int result = area(3, 5);
  print (result);

}

String sayHello(String name) {
  return 'Hello, ${name}';
}

int area(int height, int width) {
  return height * width;
}