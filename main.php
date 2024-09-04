<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

<?php

$list = ['mustafa', 'adam', 'salah', 'taha'];

$usernmae = $_POST['username'];
$allowed = false;

for ($i = 0; $i < 3; $i++) {
    if ($list[$i] == $usernmae) {
        $allowed = true;
        break;
    }
}

if ($allowed) {
    echo "Welcome Back ," . $usernmae;
} else {
    echo 'you are not an Admin';
}
