<?php
    //connect to DB
    $con = mysqli_connect("localhost", "root", "", "poll");

    if(isset($_POST['submit'])){
      if(!isset($_COOKIE['mister'])) {
        $mister = $_POST['submit'];
        $mister = mysqli_real_escape_string($con, $mister);
        $vote = "UPDATE votes SET ".$mister."=".$mister."+1";
        $run_vote = mysqli_query($con, $vote);
          if($run_vote){
            setcookie("mister", "mister", time() + (86400), "/");
            header('Location: results.php');
          }
      }
      else 
      {
        echo '<script language="javascript">';
        echo 'alert("Vot invalid! Puteti vota o singura data!")';
        echo '</script>';
      }
    }

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <title>mister and Mister Liis</title>
</head>

<body>
  <div class="container">
    <form action="" <?php $_SERVER['PHP_SELF'] ?> method="POST">
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="poze_boboci/Georgiana si Stefan/stefan1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Ștefan Emil</h5>
            <p class="card-text">"Mă numesc Ștefan și am 15 ani. Sunt o persoană energică și optimistă, pregătită de
              orice. Abia aștept să dau tot ce am mai bun la balul bobocilor de anul acesta."</p>
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="stefan">votează</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="poze_boboci/Rose-Marie si Iustin/iustin1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Iustin Ciornea</h5>
            <p class="card-text">Buna,sunt Iustin Ciornea (Austin, porecla din a 5 a), îmi plac sporturile de contact
              cel
              mai mult, desi la proba de talent voi face ceva cu totul neasteptat.
              Sunt curios care Si cum o sa ma voteze,respectu meu dacă asa
              Succes la toti, cu sinceritate, Iustin</p>
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="iustin">votează</button>
          </div>
        </div>
      </div>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="poze_boboci/Ioana si Bogdan/bogdan1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Bogdan Tugulia</h5>
            <p class="card-text">“Buna, aici Bogdan. Am 15 ani si pot spune ca sunt un iubitor al petrecerii. Imi place
              sa ies cu prietenii si pot spune ca muzica este cel mai important lucru pentru mine.Fara muzica nu cred
              ca as putea sa ma trezesc dimineata.”</p>
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="bogdan">votează</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="poze_boboci/Augusta si Andrei/andrei1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Andrei Damian</h5>
            <p class="card-text">Sunt o fire increzatoare, dornica de a descoperi in permanenta lucruri noi si ma
              caracterizeaza perseverenta. Vioara am descoperit-o la varsta de 12 ani, iar de atunci nu ma pot dezlipi
              de ea. Prin vioara ma exprim cel mai usor si iubesc sa transmit din emotie si celor care ma asculta.</p>
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="andrei">votează</button>
          </div>
        </div>
      </div>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="poze_boboci/Rebeca si Matei/matei1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Matei Filip</h5>
            <p class="card-text">"Ma numesc Matei Stefan Filip, am 15 ani si simtul umorului foarte dezvoltat. Sunt o
              persoana sociabila si deschisa. Timpul liber mi-l dedic dezvoltarii personale dar dar si alaturi de
              prieteni si cei dragi."</p>
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="matei">votează</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>

</html>