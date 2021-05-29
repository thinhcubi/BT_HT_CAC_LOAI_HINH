<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<h1>MENU:</h1>
<body>
<form action="" method="get">
    <h1 style="color: red">Draw Rectangle With "*"</h1>
    <table>
        <tr>
            <td>WIDTH<span>*</span>:</td>
            <td><input type="text" name="width"></td>
        </tr>
        <tr>
            <td>HEIGHT<span>*</span>:</td>
            <td><input type="text" name="height"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Draw"></td>
        </tr>
    </table>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $width = $_GET["width"];
        $height = $_GET["height"];
//function drawRectangle($width, $height)
        if(empty($width) || empty($height)){
            echo "Please fill in"." <span>*</span> "."marked";
        }elseif ($width <= 0 || $height <= 0) {
//        throw new Exception("Rectangle width and height equal 0");
            echo "Rectangle width and height must be over 0";
        } else {
            for ($i = 1; $i <= $height; $i++) {
                for ($j = 1; $j <= $width; $j++) {
                    echo " * ";
                }
                echo "<br>";
            }
        }

}
?>

</body>
</html>
