<!DOCTYPE html>
<html>
<head>
    <title>Greeting</title>
</head>
<body>
    <?php
    $name = htmlspecialchars($_POST['name']);
    echo "Hello, $name!";
    ?>
</body>
</html>
