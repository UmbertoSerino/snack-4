<?php
require_once __DIR__ . '/Persona.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($persona as $persone) ?>
    <p> <?php echo $persona->name ?></p>
    <p> <?php echo $persona->age ?> </p>
</body>

</html>