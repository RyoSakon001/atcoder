class Name {
  final String first;
  final String last;
  factory Name(String name) {
    var parts = name.split(' ');
    return Name._(parts[0], parts[1]);
  }

  Name._(this.first, this.last);
}

void main() {
  final _name = Name('nobunaga oda');
  print('名前は ${_name.first} ${_name.last}です');
}



// class Name {
//   final String first;
//   final String last;
//   Name(this.first, this.last);
// }

// void main() {
//   final _name = Name('ryo', 'sakon');
//   print('first name は ${_name.first} で last name は ${_name.last} です');
// }
