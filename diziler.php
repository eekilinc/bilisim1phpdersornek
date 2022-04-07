<?php 
// diziler
// array   tek boyutlu çok boyutlu
// tam sayılardan
$dizi = array(1,"ali",3,5,"ekrem" );
$dizi[0]=10;
$dizi[]="ekrem";
/*$dizi[count($dizi)]=20;
$dizi[count($dizi)]=20;
$dizi[count($dizi)]=20;*/
// uzunluğu eleman sayısı lengt count
// 5 elemanın 0-4

/*$d=array('ekrem',1,5,true);
for($i=0;$i<count($d);$i++)
  echo $d[$i];*/


 /* $d2=array('isim'=>'ekrem','soyad'=>'kılınç');
  foreach($d2 as $item)
    echo $item;*/
// key value
// anahtar değer

// tek boyutlu
// çok boyutlu
// düzensiz çok boyutlu


$d4=array(array('a','b','c'),array('d','e','f'),array('g','h','x'));
/*echo count($d4);

for($x=0;$x<count($d4);$x++)
      {
          for($y=0;$y<count($d4[$x]);$y++)
             echo $d4[$x][$y].'<br>';
      }

foreach($d4 as $ilk)
{
    foreach($ilk as $ikinci)
    echo "$ikinci <br>";
}
*/

//
/*

*/
$dx=array('1',2,3,1);
echo array_search(1,$dx,true);
