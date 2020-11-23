<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
        <?php 
        function test($Name,$firstName,$age){
            return 'Bonjour ' .$firstName. ' ' .$Name.  ', tu as ' .$age. ' ans.';
            }
            $res = test('Quintas', 'Philippe', 47);
            echo $res;
       ?>
</body>
</html>