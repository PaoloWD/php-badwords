<?php $messageForm = $_POST["message"];
$messageReplaced = str_replace("cane", "***", $messageForm);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-dark">
    <div class="row justify-content-center">
        <div class="col-4 text-white text-center">
            Il testo con le censure è: <?php echo $messageReplaced ?>
        </div>
    </div>
</body>
</html>