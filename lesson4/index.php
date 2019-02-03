<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lesson4</title>
</head>
<body>
    <?php 
        $file = scandir("img");
        foreach($file as $value){
            echo   '<a href="img/' . $value .'"><img src="img/' . $value .'" alt="" width= "250" height= "290" rel="external"></a>';
                
        }
       // Всё сделал. Принцип работы понял. Но JS добавлять не стал
     ?>
    
</body>
</html>