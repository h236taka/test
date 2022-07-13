#!/usr/bin/php
<?php
  foreach(file('/usr/share/dict/linux.words') as $line){
    // strpos() 関数を使って、文字列 "abc" が含まれる単語を echo "$line"; で表示しなさい。
    $find = 'abc';
    $pos = strpos($line, $find);
    if ( $pos !== false ){           //strposがtrueならば$findを満たす$lineを返す
      echo "$line";
    }
  }
?>
