<hr>
รับค่ามาจาก Controller (Test)
<?php
                    echo '<br>';
echo 'a = ',$a;
                    echo '<br>';
echo 'b = ',$b;
                    echo '<br>';
echo 'sum = ',$sum;
                    echo '<br>';

                    echo '<hr>';
                    echo 'ค่าตัวแปรจากหน้า view(test1)';
$a=1;
$b=5;
$sum=$a+$b;
echo $sum;
?>
<hr>
arrays
<hr>

<?php
$data1=[1,2,3];
print_r($data1);

echo '<hr>';
$data2 = array (1,2,3,4);
print_r($data2);

echo '<hr>';
$data3 = ['a'=>1,"b"=>2,'c'=>3,'d'=>4];
print_r($data3);
?>