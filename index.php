<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 4</title>
</head>
<body>

<p>
    <?php
        $info = user('Etienne' , 'Stanislas' , 22) ;
        echo $info ;

        function user($name , $firstName , $age){
            return 'Bonjour "' . $name . ' ' . $firstName . '", tu as ' . $age . ' ans.' ;
        } ;
    ?>
</p>
    
</body>
</html>