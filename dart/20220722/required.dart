void main() {
  var person1 = new Person(last: 'ryo', first: 'sakon');
  print(person1);
}

class Person {
  String last;
  String first;
  Person({required this.last, required this.first});
  String toString() {
    return '$last, $first';
  }
}

// https://qiita.com/akatsukaha/items/497b8990f2a97f64d8d3
// {}を使うと、「任意設定」の意味になるが、さらにrequiredをつけると、必須となる。