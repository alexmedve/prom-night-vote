<?php
    //connect to DB
    $con = mysqli_connect("localhost", "root", "", "poll");

        $get_votes = "select * FROM votes";
        $run_votes = mysqli_query($con, $get_votes);
        $row_votes = mysqli_fetch_array($run_votes);

        $augusta = $row_votes['augusta'];
        $georgiana = $row_votes['georgiana'];
        $ioana = $row_votes['ioana'];
        $rebeca = $row_votes['rebeca'];
        $rose = $row_votes['rose'];
        //
        $andrei = $row_votes['andrei'];
        $stefan = $row_votes['stefan'];
        $bogdan = $row_votes['bogdan'];
        $matei = $row_votes['matei'];
        $iustin = $row_votes['iustin'];
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
    <title>Document</title>
</head>

<body>
    <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link text-center" href="index.php">Acasă</a>
        <a class="flex-sm-fill text-sm-center nav-link text-center active" href="results.php">Rezultate</a>
    </nav>
    <div class="container">
        <h1 class="text-center">Felicitări tuturor!!</h1>
        <br>
        <small>Voturile nu vor mai fi luate in considerare dupa ora 21:00</small>
        <hr>
        <ul class="list-group">
            <li class="list-group-item active">Miss LIIS 2018</li>
            <li class="list-group-item">Augusta: <?php echo $augusta ?> voturi</li>
            <li class="list-group-item">Georgiana: <?php echo $georgiana ?> voturi</li>
            <li class="list-group-item">Ioana: <?php echo $ioana ?> voturi</li>
            <li class="list-group-item">Rebeca: <?php echo $rebeca ?> voturi</li>
            <li class="list-group-item">Rose: <?php echo $rose ?> voturi</li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item active">Mister LIIS 2018</li>
            <li class="list-group-item">Andrei: <?php echo $andrei ?> voturi</li>
            <li class="list-group-item">Stefan: <?php echo $stefan ?> voturi</li>
            <li class="list-group-item">Bogdan: <?php echo $bogdan ?> voturi</li>
            <li class="list-group-item">Matei: <?php echo $matei ?> voturi</li>
            <li class="list-group-item">iustin: <?php echo $iustin ?> voturi</li>
        </ul>
    </div>
</body>

</html>