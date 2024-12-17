<!DOCTYPE html>
<html lang="en">
<head>
    <!-- เพิ่ม front -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    
    <style>body {
        font-family: "Itim", cursive;
        font-weight: 400;
        font-style: normal;}
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่าง 1</title>

</head>
<body>
    <h1>โปรแกรมภาษา PHP สร้างฟอมรับข้อมูล</h1>
    664485003 กิตดนัย นราแก้ว <br>
    หมู่เรียน 66/96
    <?php
    $name = $_GET["n"];
    $surname = $_GET["s"];
    echo " my name is " .$name." ".$surname;
    
    
    ?>
    
</body>
</html>