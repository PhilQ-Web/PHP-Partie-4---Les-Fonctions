<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>
<body>

<p>
        <?php 
       
        for($counter = 1; $counter < 100; $counter++)
        
            if ($counter % 3 == 0 && $counter % 5 != 0) {?>
             <p><?php echo $counter ?> - Fizz - Multiple de 3</p><?php ;
            }
            else if ($counter % 5 == 0 && $counter % 3 != 0) {?> 
                <p><?php echo $counter ?> - Buzz - Multiple de 5</p><?php ;
            }
            else if ($counter % 3 == 0 && $counter % 5 == 0) {?>
                <p><?php echo $counter ?> - Fizz Buzz - Multiple de 3 et de 5</p><?php ;
            }
            else{?>
                <p><?php echo $counter ?></p><?php ;
            }
        
        ?>
</p>

</body>
</html>