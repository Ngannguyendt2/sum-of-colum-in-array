<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Cot:<input type="text" name="number">
    <br>
    <input type="submit" value="Calculator">
</form>
<?php
$array = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];
function calculator($arr, $number)
{
    $sum = 0;
    foreach ($arr as $item) {
        foreach ($item as $key => $value) {
            if ($number == $key + 1) {
                $sum = $sum + $value;
            }
        }
    }
    return $sum;
}

echo calculator($array, $_POST['number']);
?>
</body>
</html>
