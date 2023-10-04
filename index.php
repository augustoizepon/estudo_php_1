<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="">pessoa:</label><br>
        <input type="text" name="pessoa"> <br>
        <label for="">estado atual:</label><br>
        <input type="text" name="now"> <br>
        <input type="submit" value="see">
    </form>
</body>

</html>

<?php
$pessoa = $_POST["pessoa"];
$now = $_POST["now"];
$estado = ["Augusto" => "Estudando"];

$estado["Augusto"] = "vendo video";


foreach ($estado as $key => $value) {
    echo "{$key} = {$value}<br>";
}
?>