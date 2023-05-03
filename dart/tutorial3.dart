void main() {
  List<String> fruits = ['banana', 'pineapple', 'watermelon'];
  List<int> numbers = [1, 3, 2, 5, 4];

  // 1.forEach
  // fruits.forEach((fruit) => {print(fruit)});
  // numbers.forEach((number) => {
  //   ++number,
  //   print(number)
  // });

  // 2.map
  List<String> mappedFruits = fruits.map((fruit) => 'I love $fruit').toList();
  print(mappedFruits);

  // 3.contains
  print(fruits.contains('pineapple'));

  // 4.sort
  // numbers.sort();
  // print(numbers);

  // 5.reduce, fold
  // var sum = numbers.reduce((curr, next) => curr + next);
  // print(sum); // => 15
  // const initialValue = 10;
  // var sum2 = numbers.fold(initialValue, (curr, next) => curr + next);
  // print(sum2); // => 25

  // 6.every
  List<Map<String, dynamic>> users = [
  { "name": 'John', "age": 18 },
  { "name": 'Jane', "age": 21 },
  { "name": 'Mary', "age": 23 },
  ];
  var is18AndOver = users.every((user) => user["age"] >= 18);
  print(is18AndOver); // => true

  var hasNamesWithJ = users.every((user) => user["name"].startsWith('J'));
  print(hasNamesWithJ); // => false

  // 7.where, firstWhere, singleWhere
   // See #6 for users list
  // var over21s = users.where((user) => user["age"] > 21);
  // print(over21s.length); // => 1
  // var nameJ = users.firstWhere((user) => user["name"].startsWith(‘J’), orElse: () => null);
  // print(nameJ); // => {name: John, age: 18}
  // var under18s = users.singleWhere((user) => user["age"] < 18, orElse: () => null);
  // print(under18s); // => null

}