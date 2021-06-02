<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $computer1 = new Computer("Pepíkův počítač");
        $computer2 = new Computer("Kájův komp");

        $computer1->summary();
        $computer2->summary();
?>  
</body>
</html>
