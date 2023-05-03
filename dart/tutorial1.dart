void main(){
    String greeting = 'ハロー！';
    print(greeting);

    final String dying_message = '犯人はyasu'; //以降定義できない
    print(dying_message);

    String s = '''
      これは
      複数行の
      文字列です
    ''';
    print(s);

    List<int> nums = [1, 2, 3];
    List<String> fruits = ['apple', 'grape', 'orange'];
    fruits.add('melon');
    print(nums);
    print(fruits[3]);

    Map release_year = {
      'Dart': 2011,
      'Kotlin': 2011,
      'Swift': 2014,
    };
    print(release_year);
    release_year['Go'] = 2009;
    print(release_year);


} 