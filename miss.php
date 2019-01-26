<?php
    //connect to DB
    $con = mysqli_connect("localhost", "root", "", "poll");

    if(isset($_POST['submit'])){
      if(!isset($_COOKIE['miss'])) {
        $miss = $_POST['submit'];
        $miss = mysqli_real_escape_string($con, $miss);
        $vote = "UPDATE votes SET ".$miss."=".$miss."+1";
        $run_vote = mysqli_query($con, $vote);
          if($run_vote){
            setcookie("miss", "miss", time() + (86400), "/");
            header('Location: mister.php');
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
  <title>Miss and Mister Liis</title>
</head>

<body>
  <div class="container">
    <form action="" <?php $_SERVER['PHP_SELF'] ?> method="POST">
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="poze_boboci/Georgiana si Stefan/georgiana1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Georgiana David</h5>
            <p class="card-text">Ma numesc Georgiana si am 15 ani. Sunt o fire competitiva si energica. Am incredere
              in mine si in partenerul meu ca vom castiga balul bobocilor de anul acesta!</p>
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="georgiana">votează</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="poze_boboci/Rose-Marie si Iustin/rose_marie1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Ardeleanu Rose Marie</h5>
            <p class="card-text">"Buna ma numesc Rose- Marie si sunt o persoană deschisă și îmi place să-mi petrec tot
              timpul în preajma prietenilor. Glumesc și râd mereu. Unul din hobby.urile mele este dansul.
              "</p>
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="rose">votează</button>
          </div>
        </div>
      </div>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="poze_boboci/Ioana si Bogdan/ioana1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Ioana Teodora</h5>
            <p class="card-text">“Hello, eu sunt Ioana, am 15 ani si sunt o persoana fosrte prietenoasa si sincera.
              Ador sa ma uit la seriale si unul din hobby urile mele preferante este dansul. Cu toate ca sunt la
              informatica, muzica reprezinta unul din codurile mele preferate”</p>
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="ioana">votează</button>
          </div>
        </div>
      </div>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="poze_boboci/Augusta si Andrei/augusta1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Augusta Valentina</h5>
            <p class="card-text">"O fire blândă care încearcă din răsputeri sa aduca zambetul pe buze celor din jur. De
              3 ani am pasiunea pentru pian care a crescut de a lungul timpului datorita emoțiilor pe care le simt de
              fiecare data, chiar de la prima nota. Ma bucur cand sensibilizez oamenii din jur, iar asta face ca pianul
              sa devina o parte tot mai semnificativa din mine."</p>
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="augusta">votează</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="poze_boboci/Rebeca si Matei/rebeca1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Rebeca Bontu</h5>
            <p class="card-text">"Ma numesc Rebeca Bontu si am 14 ani. Una dintre pasiunile mele este arta in toate
              formele ei, incepand de la desen pana la muzica, dans si teatru. Sunt o fire timida in aparenta, insa
              foarte ambitioasa si perseverenta."</p>
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="rebeca">votează</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>

</html>