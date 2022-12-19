<?php $messageForm = $_POST["message"];
$messageReplaced = str_replace("cane", "***", $messageForm);
 ?>
Il testo è: <?php echo $messageReplaced ?>