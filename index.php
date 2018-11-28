<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
    <div class="content">

    <h1 class="contentheader">
        <span class="underline">NEW RELEASES</span>
    </h1>    
    <div class="display">
        <?php include "php/releases.php";?>
    </div>

    <h1 class="contentheader">
        <span class="underline">SALE!</span>
    </h1>    
    <div class="display">
        <?php include "php/sale.php"; ?>
    </div>
    </div>

</body>
</html>