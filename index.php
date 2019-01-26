<?php
    //connect to DB
    $con = mysqli_connect("localhost", "root", "", "poll");
    if(isset($_POST['submit']))
    {   
        $user_code = $_POST['input'];
        $user_code = mysqli_real_escape_string($con, $user_code);
        $user_code = trim($user_code);
        $user_code = strip_tags($user_code);
        $result = mysqli_query($con, "SELECT id FROM users WHERE code='$user_code'");
        if(mysqli_num_rows($result)==0) {
            echo '<script language="javascript">';
            echo 'alert("Codul a fost folosit deja sau este invalid!")';
            echo '</script>';
        }
        else {
            echo 1;
            header('Location: miss.php');
            mysqli_query($con, "DELETE FROM users WHERE code='$user_code'");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Check</title>
</head>

<body>
    <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link text-center active" href="index.php">Acasă</a>
        <a class="flex-sm-fill text-sm-center nav-link text-center" href="results.php">Rezultate</a>
    </nav>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Introduceti codul</h2>
            </div>
            <div class="card-body">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Recipient's username"
                            aria-describedby="button-addon2" name="input">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" name="submit">Button</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>