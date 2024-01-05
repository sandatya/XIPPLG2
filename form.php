<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <label for="">Bilangan 1 </label>
        <input type="number" name="bil1">
        <br>
        <label for="">Bilangan 2 </label>
        <input type="number" name="bil2">
        <input type="submit" value="hitung">
    </form>

    <?php
    //input
        $bilangan1 = $_POST['bil1'];
        $bilangan2 = $_POST['bil2'];

        //proses
        $hasil = $bilangan1 + $bilangan2;

        //output
        echo "hasil penjumlahan : $hasil";

    ?>
</body>
</html>