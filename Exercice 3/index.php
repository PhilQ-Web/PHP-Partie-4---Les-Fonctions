<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
        <?php 
        function test($num1,$num2){
            $condition = '';
            if($num1>$num2) {
                $condition = 'Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième';
            }
            else if($num1<$num2) {
                $condition = 'Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième';
            }
            else{
                $condition = 'Les deux nombres sont identiques si les deux nombres sont égaux';
            }
            return $condition;
            }
            $result = test(100, 10);
            echo $result
       ?>
</body>
</html>