<?php

$elem1 = array(1, 5, 7);
$elem2 = array(4, 8, 9);
$elem3 = array(2, 3, 6);

$multi_array = array($elem1, $elem2, $elem3);

echo '<pre>';
print_r($multi_array);
echo '</pre>';

echo '<hr><br>';

echo $multi_array[2][1];//ispisati ce broj 3

echo '<hr><br>';

foreach ($multi_array as $elem)
{
    foreach($elem as $val)
    {
        echo $val;
    }
}

echo '<hr><br>';
unset($elem1,$elem2,$elem3,$multi_array);


$elem1 = array('ime' => 'Petar', 'prezime' => 'Petric', 'MB' => '123');
$elem2 = array('ime' => 'Ante', 'prezime' => 'Antic', 'MB' => '234');

$multi_array = array('ucenik1' => $elem1, 'ucenik2'=> $elem2);

echo '<pre>';
print_r($multi_array);
echo '</pre>';

echo '<hr><br>';

echo $multi_array['ucenik2']['MB'];