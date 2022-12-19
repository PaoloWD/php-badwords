<?php 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>BADWORDS</title>
 </head>
 <body class="bg-dark">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="mb-3">
                <form action="script.php" class="text-center" method="POST">
                    <label for="exampleFormControlTextarea1" class="form-label"></label>
                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <button class="btn btn-primary mt-3">INVIA</button>
                </form>
            </div>
        </div>
    </div>
 

    
 </body>
 </html>