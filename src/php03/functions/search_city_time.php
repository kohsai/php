<?php

function searchCityTime($city_name)
{
// cities.phpファイルを読み込む　　↓　　
  require('config/cities.php');

// foreach文によって二次元配列「cities」を一つずつの配列に分解　　↓　　
foreach ($cities as $city) {


// 配列のキー「name」が一致した時に処理。　↓
  if ($city['name'] === $city_name) {

/* 日付や時間を扱った操作を行うために「DateTime」クラスを使用。「DateTime」の引数に何も入れていない時は現在時刻が作成。各国の時刻を使用するので、タイムゾーンを指定するために　「DateTimeZone」を利用。　　↓      */
   $date_time = new DateTime('', new DateTimeZone($city['time_zone'])); 
/* ↑ 　　引数に　$city['time_zone']変数を渡すことで、
指定された国の現在時刻を取得できる。*/

/*  任意の日時を作成するため「format」メソッドを利用。　↓  「H」は24時間単位の「時」間を表す。「i」は「分」。*/
   $time = $date_time->format('H:i');
   $city['time'] = $time;
 /* 「return」を使い、関数の結果を返している。
 戻り値は「result.php」ファイルの変数「tokyo」に格納される。*/
    return $city;
  }
 }
}