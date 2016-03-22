<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
<style type="text/css">
    .style2
    {	font-size: 24px;
        font-weight: bold;
        font-style: italic;
        color: #FF0000; }
</style>
<form action="?" method="get">
    <center>РЕШАВАНЕ НА КВАДРАТНО УРАВНЕНИЕ</center>
    Търсене на дискриминанта:<br>
    Моля ваведете стойности на <br>
    <b>a</b> и <b>b</b> и <b>c</b><br>
    <!-diskriminanta->
    <input name="a" type="text" value="a" size="5" />
    <input name="b" type="text" value="b" size="5" />
    <input name="c" type="text" value="c" size="5" />
    <input name="4" type="hidden" value="4" />
    <!-Diskriminanta->
    <br><p></p><p></p><p></p>
    <!-Izbor koe da se izrazi X ili Y ->
    Търсене на X или Y.<br>Моля изберете какво искате да изразите.<br>
    <select name="izraz">
        <option value="x">Изразяване на :X:</option>
        <option value="y">Изразяване на :Y:</option>
    </select>
    <!-Izbor koe da se izrazi X ili Y ->
    <br><p></p><p></p><p></p>
    <input type="submit" name="submit" value="Изчисли" />
</form>
<?php
//приемане на променливите
if(isset($_GET['submit'])){
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $k = $_GET['4'];
    $st = $_GET['izraz'];
//проверка дали има букви в полето
    if (!eregi('^[0-9\-]*$',$a)){
        echo 'За стойност А може да бъде само положителна или отрицателна цифра<br>';
    }
    if (!eregi('^[0-9\-]*$',$b)){
        echo 'За стойност B може да бъде само положителна или отрицателна цифра<br>';
    }
    if (!eregi('^[0-9\-]*$',$c)){
        echo 'За стойност C може да бъде само положителна или отрицателна цифра<br>';
    }
//изчисляване на дискриминанта
    $d = $b * $b ;
    $d1 = $d - $k *$a * $c ;

//изразяване на Х или У
    if ($d1 > 0)
    {
        $del = 2*$a ;
        $stoinost1 = (-$b + sqrt($d1))/ $del ;
        $stoinost2 =(-$b - sqrt($d1))/ $del;
    }elseif ($d1 == 0)
    {
        $stoinost1=$stoinost2=(-$b - sqrt(0))/ $del;
    }else
    {
        echo ('<span class="style2">Няма решение</span><br>');
    }
//Извеждане на резултати
    echo 'Резултата е :<br><hr>Дискриминанта e '.$d1 ;
    echo '<br><hr>';
    echo 'A=  ';
    echo $a ;
    echo '<br>' ;
    echo 'B=  ';
    echo $b ;
    echo '<br>' ;
    echo 'C=  ';
    echo $c ;
    echo '<br><hr>' ;
    echo $st.'1 = '.$stoinost1 ;
    echo '<br>';
    echo $st.'2 = '.$stoinost2 ;
}
?>
<!--Благодарности -->
<!--
Това нещо съществува с помоща на Bafitu
-->

</body>
</html>
