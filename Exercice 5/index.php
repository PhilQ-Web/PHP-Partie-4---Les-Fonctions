<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
        <!-- NOMBRES IMPAIRS -->
<p>
        <?php 
        $counter = 0;

        while ($counter < 300) {
            $counter += 1;
        
            if ($counter > 300) {
                // counter est plus grand que 300, on arrête la boucle 
                // MAIS là ça ne sert à rien puisque l'on a déjà déclaré que ($counter < 300) après "while" (ligne 14)
                break;
            }
            if ($counter % 2 == 0) {
                // On saute $counter qui est un numéro pair
                continue;
            }
        echo $counter." ";
        }
        ?>
</p>

        <!-- OU (Mais pas TOP) -->

<p>
    <?php 
        $counter = 0;
        while ($counter < 300) {
            $counter += 1;
        
            if ($counter % 2 != 0) {
               echo $counter." ";
             }
        }
        ?>
</p>

        <!-- OU (BEST SOLUTION) -->

<p>
        <?php 
        for($counter = 0; $counter <= 300; $counter++)
        
            if ($counter % 2 != 0) {
               echo $counter." ";
             }
        ?>
</p>

        <!-- NOMBRES PAIRS -->

<p>
        <?php 
        for($counter = 0; $counter <= 300; $counter++)
        
            if ($counter % 2 == 0) {
               echo $counter." ";
             }
        ?>
</p>
</body>
</html>