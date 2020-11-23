<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <p>
        <?php 
        function test($p,$q) {
           return $p .' '. $q ;
        }
        $res = test('Je suis Philippe Quintas,', 'j\'ai 47 ans');
        echo $res
        ?>
    </p>
<!-- OU -->
    <p>   
        <?php 
        function test2($p,$q) {
           return $p .' '. $q ;
        }
        echo test2('Je suis Philippe Quintas,', 'j\'ai 47 ans');
        ?>
    </p>
<!-- OU -->
    <p>
        <?php 
        $text1 = ('Je suis Philippe Quintas,');
        $text2 = ('j\'ai 47 ans');
        function test3($p,$q) {
           return $p .' '. $q ;
        }
        echo test3($text1, $text2 );
        ?>
    </p>
</body>
</html>