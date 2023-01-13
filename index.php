<?php
  
  $valore = $_GET['valore'];
  $unità = $_GET['unità'];
  
  $risultato = 0;
  $unità_convertire = $_GET['unità_convertire'];
  $attiva = '1';

    if ($unità == 'millimetri') {
      if ($unità_convertire == 'millimetri') {
        $risultato = $valore;
      } else if ($unità_convertire == 'centimetri') {
        $risultato = $valore / 10;
      } else if ($unità_convertire == 'metri') {
        $risultato = $valore / 1000;
      } else if ($unità_convertire == 'chilometri') {
        $risultato = $valore / 1000000;
      } else if ($unità_convertire == 'miglia') {
        $risultato = $valore / 1609344;
      }
      $attiva = '1';
  } else if ($unità == 'centimetri') {
      if ($unità_convertire == 'millimetri') {
        $risultato = $valore * 10;
      } else if ($unità_convertire == 'centimetri') {
        $risultato = $valore;
      } else if ($unità_convertire == 'metri') {
        $risultato = $valore / 100;
      } else if ($unità_convertire == 'chilometri') {
        $risultato = $valore / 100000;
      } else if ($unità_convertire == 'miglia') {
        $risultato = $valore / 160934.4;
      }
      $attiva = '1';
  } else if ($unità == 'metri') {
      if ($unità_convertire == 'millimetri') {
        $risultato = $valore * 1000;
      } else if ($unità_convertire == 'centimetri') {
        $risultato = $valore * 100;
      } else if ($unità_convertire == 'metri') {
        $risultato = $valore;
      }  else if ($unità_convertire == 'chilometri') {
        $risultato = $valore / 1000;
      } else if ($unità_convertire == 'miglia') {
        $risultato = $valore / 1609.344;
      }
      $attiva = '1';
  } else if ($unità == 'chilometri') {
      if ($unità_convertire == 'millimetri') {
        $risultato = $valore * 1000000;
      } else if ($unità_convertire == 'centimetri') {
        $risultato = $valore * 100000;
      } else if ($unità_convertire == 'metri') {
        $risultato = $valore * 1000;
      } else if ($unità_convertire == 'chilometri') {
        $risultato = $valore;
      } else if ($unità_convertire == 'miglia') {
        $risultato = $valore / 1.609344;
      }
      $attiva = '1';
  } else if ($unità == 'miglia') {
      if ($unità_convertire == 'millimetri') {
        $risultato = $valore * 1609344;
      } else if ($unità_convertire == 'centimetri') {
        $risultato = $valore * 160934.4;
      } else if ($unità_convertire == 'metri') {
        $risultato = $valore * 1609.344;
      } else if ($unità_convertire == 'chilometri') {
        $risultato = $valore * 1.609344;
      } else if ($unità_convertire == 'miglia') {
        $risultato = $valore;
      } 
      $attiva = '1';
  }

  $valore_temperatura = $_GET['valore_temperatura'];
  $unità_temperatura = $_GET['unità_temperatura'];

  $risultato_temperatura = 0;
  $unità_temperatura_convertire = $_GET['unità_temperatura_convertire'];

  if ($unità_temperatura == 'celsius') {
      if ($unità_temperatura_convertire == 'fahrenheit') {
          $risultato_temperatura = ($valore_temperatura * 9/5) + 32;
      } else if ($unità_temperatura_convertire == 'kelvin') {
          $risultato_temperatura = $valore_temperatura + 273.15;
      } else if ($unità_temperatura_convertire == 'celsius') {
          $risultato_temperatura = $valore_temperatura;
      }
      $attiva = '2';
  } else if ($unità_temperatura == 'fahrenheit') {
      if ($unità_temperatura_convertire == 'celsius') {
          $risultato_temperatura = ($valore_temperatura - 32) * 5/9;
      } else if ($unità_temperatura_convertire == 'kelvin') {
          $risultato_temperatura = ($valore_temperatura + 459.67) * 5/9;
      } else if ($unità_temperatura_convertire == 'fahrenheit') {
        $risultato_temperatura = $valore_temperatura;
      }
      $attiva = '2';
  } else if ($unità_temperatura == 'kelvin') {
      if ($unità_temperatura_convertire == 'celsius') {
          $risultato_temperatura = $valore_temperatura - 273.15;
      } else if ($unità_temperatura_convertire == 'fahrenheit') {
          $risultato_temperatura = $valore_temperatura * 9/5 - 459.67;
      } else if ($unità_temperatura_convertire == 'kelvin') {
        $risultato_temperatura = $valore_temperatura;
      }
      $attiva = '2';
  }

    $valore_tempo = $_GET['valore_tempo'];
    $unità_tempo = $_GET['unità_tempo'];

    $risultato_tempo = 0;
    $unità_tempo_convertire = $_GET['unità_tempo_convertire'];

  if ($unità_tempo == 'millisecondi') {
      if ($unità_tempo_convertire == 'secondi') {
          $risultato_tempo = $valore_tempo / 1000;
      } else if ($unità_tempo_convertire == 'millisecondi') {
          $risultato_tempo = $valore_tempo;
      } else if ($unità_tempo_convertire == 'minuti') {
          $risultato_tempo = $valore_tempo / 60000;
      } else if ($unità_tempo_convertire == 'ore') {
          $risultato_tempo = $valore_tempo / 3600000;
      } else if ($unità_tempo_convertire == 'giorni') {
          $risultato_tempo = $valore_tempo / 86400000;
      } else if ($unità_tempo_convertire == 'settimane') {
          $risultato_tempo = $valore_tempo / 604800000;
      } else if ($unità_tempo_convertire == 'mesi') {
          $risultato_tempo = $valore_tempo / 2678400000;
      } else if ($unità_tempo_convertire == 'anni') {
          $risultato_tempo = $valore_tempo / 31536000000;
      }
      $attiva = '3';
  } else if ($unità_tempo == 'secondi') {
      if ($unità_tempo_convertire == 'millisecondi') {
          $risultato_tempo = $valore_tempo * 1000;
      } else if ($unità_tempo_convertire == 'secondi') {
          $risultato_tempo = $valore_tempo;
      } else if ($unità_tempo_convertire == 'minuti') {
          $risultato_tempo = $valore_tempo / 60;
      } else if ($unità_tempo_convertire == 'ore') {
          $risultato_tempo = $valore_tempo / 3600;
      } else if ($unità_tempo_convertire == 'giorni') {
          $risultato_tempo = $valore_tempo / 86400;
      } else if ($unità_tempo_convertire == 'settimane') {
          $risultato_tempo = $valore_tempo / 604800;
      } else if ($unità_tempo_convertire == 'mesi') {
          $risultato_tempo = $valore_tempo / 2678400;
      } else if ($unità_tempo_convertire == 'anni') {
          $risultato_tempo = $valore_tempo / 31536000;
      }
      $attiva = '3';
  } else if ($unità_tempo == 'minuti') {
      if ($unità_tempo_convertire == 'millisecondi') {
          $risultato_tempo = $valore_tempo * 60000;
      } else if ($unità_tempo_convertire == 'secondi') {
          $risultato_tempo = $valore_tempo * 60;
      } else if ($unità_tempo_convertire == 'minuti') {
          $risultato_tempo = $valore_tempo;
      } else if ($unità_tempo_convertire == 'ore') {
          $risultato_tempo = $valore_tempo / 60;
      } else if ($unità_tempo_convertire == 'giorni') {
          $risultato_tempo = $valore_tempo / 1440;
      } else if ($unità_tempo_convertire == 'settimane') {
          $risultato_tempo = $valore_tempo / 10080;
      } else if ($unità_tempo_convertire == 'mesi') {
          $risultato_tempo = $valore_tempo / 44640;
      } else if ($unità_tempo_convertire == 'anni') {
          $risultato_tempo = $valore_tempo / 525600;
      }
      $attiva = '3';
  } else if ($unità_tempo == 'ore') {
      if ($unità_tempo_convertire == 'millisecondi') {
          $risultato_tempo = $valore_tempo * 3600000;
      } else if ($unità_tempo_convertire == 'secondi') {
          $risultato_tempo = $valore_tempo * 3600;
      } else if ($unità_tempo_convertire == 'minuti') {
          $risultato_tempo = $valore_tempo * 60;
      } else if ($unità_tempo_convertire == 'ore') {
          $risultato_tempo = $valore_tempo;
      } else if ($unità_tempo_convertire == 'giorni') {
          $risultato_tempo = $valore_tempo / 24;
      } else if ($unità_tempo_convertire == 'settimane') {
          $risultato_tempo = $valore_tempo / 168;
      } else if ($unità_tempo_convertire == 'mesi') {
          $risultato_tempo = $valore_tempo / 730.001;
      } else if ($unità_tempo_convertire == 'anni') {
          $risultato_tempo = $valore_tempo / 8766;
      }
      $attiva = '3';
  } else if ($unità_tempo == 'giorni') {
      if ($unità_tempo_convertire == 'millisecondi') {
          $risultato_tempo = $valore_tempo * 86400000;
      } else if ($unità_tempo_convertire == 'secondi') {
          $risultato_tempo = $valore_tempo * 86400;
      } else if ($unità_tempo_convertire == 'minuti') {
          $risultato_tempo = $valore_tempo * 1440;
      } else if ($unità_tempo_convertire == 'ore') {
          $risultato_tempo = $valore_tempo * 24;
      } else if ($unità_tempo_convertire == 'giorni') {
          $risultato_tempo = $valore_tempo;
      } else if ($unità_tempo_convertire == 'settimane') {
          $risultato_tempo = $valore_tempo / 7;
      } else if ($unità_tempo_convertire == 'mesi') {
          $risultato_tempo = $valore_tempo / 30.44;
      } else if ($unità_tempo_convertire == 'anni') {
          $risultato_tempo = $valore_tempo / 365.25;
      }
      $attiva = '3';
  } else if ($unità_tempo == 'settimane') {
      if ($unità_tempo_convertire == 'millisecondi') {
          $risultato_tempo = $valore_tempo * 604800000;
      } else if ($unità_tempo_convertire == 'secondi') {
          $risultato_tempo = $valore_tempo * 604800;
      } else if ($unità_tempo_convertire == 'minuti') {
          $risultato_tempo = $valore_tempo * 10080;
      } else if ($unità_tempo_convertire == 'ore') {
          $risultato_tempo = $valore_tempo * 168;
      } else if ($unità_tempo_convertire == 'giorni') {
          $risultato_tempo = $valore_tempo * 7;
      } else if ($unità_tempo_convertire == 'settimane') {
          $risultato_tempo = $valore_tempo;
      } else if ($unità_tempo_convertire == 'mesi') {
          $risultato_tempo = $valore_tempo / 4.348;
      } else if ($unità_tempo_convertire == 'anni') {
          $risultato_tempo = $valore_tempo / 52.178;
      }
      $attiva = '3';
  } else if ($unità_tempo == 'mesi') {
      if ($unità_tempo_convertire == 'millisecondi') {
          $risultato_tempo = $valore_tempo * 2678400000;
      } else if ($unità_tempo_convertire == 'secondi') {
          $risultato_tempo = $valore_tempo * 2678400;
      } else if ($unità_tempo_convertire == 'minuti') {
          $risultato_tempo = $valore_tempo * 44640;
      } else if ($unità_tempo_convertire == 'ore') {
          $risultato_tempo = $valore_tempo * 730.001;
      } else if ($unità_tempo_convertire == 'giorni') {
          $risultato_tempo = $valore_tempo * 30.44;
      } else if ($unità_tempo_convertire == 'settimane') {
          $risultato_tempo = $valore_tempo * 4.348;
      } else if ($unità_tempo_convertire == 'mesi') {
          $risultato_tempo = $valore_tempo;
      } else if ($unità_tempo_convertire == 'anni') {
          $risultato_tempo = $valore_tempo / 12;
      }
      $attiva = '3';
  } else if ($unità_tempo == 'anni') {
      if ($unità_tempo_convertire == 'millisecondi') {
          $risultato_tempo = $valore_tempo * 31536000000;
      } else if ($unità_tempo_convertire == 'secondi') {
          $risultato_tempo = $valore_tempo * 31536000;
      } else if ($unità_tempo_convertire == 'minuti') {
          $risultato_tempo = $valore_tempo * 525600;
      } else if ($unità_tempo_convertire == 'ore') {
          $risultato_tempo = $valore_tempo * 8766;
      } else if ($unità_tempo_convertire == 'giorni') {
          $risultato_tempo = $valore_tempo * 365.25;
      } else if ($unità_tempo_convertire == 'settimane') {
          $risultato_tempo = $valore_tempo * 52.178;
      } else if ($unità_tempo_convertire == 'mesi') {
          $risultato_tempo = $valore_tempo * 12;
      } else if ($unità_tempo_convertire == 'anni') {
          $risultato_tempo = $valore_tempo;
      }
      $attiva = '3';
    }
  
    $valoreAltezza = $_GET['valore_imc_altezza'];
    $valorePeso = $_GET['valore_imc_peso'];
  
    $unitàImcAltezza = $_GET['unità_imc_altezza'];
    $unitàImcPeso = $_GET['unità_imc_peso'];

    $altezza = 0;
    $peso = 0;

    if ($unitàImcAltezza == "centimetri" && $unitàImcPeso == "kilogrammi") {

      $altezza = $valoreAltezza / 100;
      $peso = $valorePeso;
      
      $imc = $peso / ($altezza * $altezza);
    
      if ($imc < 18.5) {
          $progressBarColor = "bg-warning";
          $progressBarPercentage = ($imc / 18.5) * 60;
          $risultato_imc = "sottopeso";
      } else if ($imc >= 18.5 && $imc <= 24.9) {
          $progressBarColor = "bg-success";
          $progressBarPercentage = ($imc / 24.9) * 60;
          $risultato_imc = "normopeso";
      } else if ($imc > 24.9) {
          $progressBarColor = "bg-danger";
          $progressBarPercentage = ($imc / 24.9) * 60;
          $risultato_imc = "sovrappeso";
      } else if ($imc > 40) {
          $progressBarColor = "bg-danger";
          $progressBarPercentage = ($imc / 40) * 60;
          $risultato_imc= "grave sovrappeso";
      }
    
      $imc = round($imc, 2);
      $attiva = '4';
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UnitGenius</title>
  
    <!-- 

        ::<<>>:: UnitGenius ::<<>>::

        made by :
        
        Brunelli Giulio.

        using HTML5, Bootstrap5, CSS, PHP.

     -->

    <!-- Collegamento al file CSS di Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    
    <!-- Collegamento al file JS di Bootstrap -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <!-- Collegamento al file CSS di icone di Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <!-- Collegamento a jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Collegamento ai font di Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    
    <!-- Collegamento a Slick Carousel CSS file -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    
    <!-- Collegamento a Slick Carousel JS file -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>


<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Sora:wght@400;700&display=swap');

body {
    font-family: "Sora", sans-serif;
}

#carousel01 {
  background: linear-gradient(45deg,darkviolet,#ce8d8d,#816adf,#35ca77);
  background-size: 240% 240%;
  animation: gradient-animation 24s ease infinite;
} @keyframes gradient-animation {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

#carousel02 {
  background: linear-gradient(45deg,#58ae70,#22a381,#eecf41);
  background-size: 180% 180%;
  animation: gradient-animation 18s ease infinite;
} @keyframes gradient-animation {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}


#carousel03 {
  background: linear-gradient(45deg,#2b343e,#475462,#8998a5,#711b92,#c13df7);
  background-size: 300% 300%;
  animation: gradient-animation 30s ease infinite;
} @keyframes gradient-animation {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

#carousel04 {
  background: linear-gradient(45deg,#79787c,#d69dc9,#4f4f59);
  background-size: 180% 180%;
  animation: gradient-animation 18s ease infinite;
} @keyframes gradient-animation {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

.submit-btn {
  transition: all .2s ease 0s;
  width: 50px;
  height: 30px;
  color: white;
  border-radius: 100px;
  background-color: transparent !important;
  border: 2px solid white;
}

.submit-btn:hover {
  transition: all .2s ease 0s;
  height: 40px;
  color: black;
  background-color: white !important;
}

.container-btn {
  display : flex;
  justify-content: center;
  align-items: center;
}

.forms-inserimento {
  color: white;
  font-size: 28px;
  text-decoration: none;
  transition: all .2s ease 0s;
  height: 55px;
  text-align: center;
  border-radius: 28px;
  background-color:rgba(0,0,0,0) !important;
  border: 2px solid white;
}

.forms-inserimento:hover {
  color: black;
  transition: all .2s ease 0s;
  background-color: white !important;
  height: 65px;
}

.noWidth:hover {
  height: 55px;
}

.forms-selezione {
  font-weight: bold;
  color: white;
  transition: all .2s ease 0s;
  /* width: 400px; */
  height: 45px;
  text-align: center;
  /* border-radius: 28px; */
  background-color:rgba(0,0,0,0) !important;
  border : 2px solid white;
}

.forms-selezione:hover {
  color: black;
  transition: all .2s ease 0s;
  background-color: white !important;
}


.forms-padding {
  /* padding-block: 245px; */
}

#titolo {
  margin-right: 220px;
}

/* cellulari */
@media only screen and (max-width: 880px) {

  .carousel-item {
    padding-top: 5vh;
    padding-bottom: 16vh;
  }

  .carousel-item .d-flex {
    flex-direction: column;
  }

  .display-1 {
    font-size: 40px;
  }

  .forms-padding {
    width: 50%;
  }

  .text-start {
    text-align: center !important;
  }

  .col-3 {
    width: 100%;
  }


  #titolo {
    margin-right: 0px;
  }

}

/* cellulari grandi e tablet */
@media only screen and (min-width: 880px) and (max-width: 988px) {

  .carousel-item {
    padding-top: 5vh;
    padding-bottom: 16vh;
  }

  .carousel-item .d-flex {
    flex-direction: column;
  }

  #titolo {
    font-size: 16px;
  }

}

/* portatili */
@media only screen and (min-width: 988px)and (max-width: 1200px) {

  .carousel-item {
    padding-top: 17vh;
    padding-bottom: 18vh;
  }

}

/* desktop */
@media only screen and (min-width: 1200px){

  .carousel-item {
    padding-top: 20vh;
    padding-bottom: 31vh;
  }

}

#navbarNav .material-symbols-outlined { /*incremento grandezza icona navbar */
    font-size: 2.7em; 
}

.navbar-brand { /*incremento grandezza titolo navbar */
  font-size: 2em;
  margin-left: 0.2em;
}

.navbar-toggler { /* togliere il bordo al button toggle della navbar */
  /* border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color); */
  border: var(--bs-border-width) solid rgba(242, 242, 242, 0.1);
}

/* togliere gli spinner per gli input di tipo numero */
  
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {/* Chrome, Safari, Edge, Opera */
    -webkit-appearance: none;
    margin: 0;
  }

  input[type=number] { /* Firefox */
    -moz-appearance: textfield;
  }


</style>

<body>


  <!-- NAVBAR  -->
  
  <nav id="navbarNav" class="navbar navbar-expand-lg bg-light">
      
    <div class="container-fluid">
      
        <i class="material-symbols-outlined fa-xl">
          cognition
        </i>
      
      <a class="navbar-brand" href="#">UnitGenius</a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav me-auto ms-3 mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="false" aria-label="Slide 1" aria-current="page" href="#carousel01">Distanza</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#carousel02" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">Temperatura</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#carousel03" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">Tempo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#carousel04" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4">IMC</a>
            </li>
          </ul>
      </div>
    </div>
  </nav>

  <!-- CAROUSEL -->

  <div id="carouselExampleIndicators" class="carousel slide h-25" data-bs-ride="true">
    
    <!-- CAROUSEL SLIDES-->

    <div class="carousel-inner">

      <!-- INDICATORI CAROUSEL -->

      <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="false" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    
      <!-- PRIMA SLIDE -->
      <!-- distanza -->

      <div class="carousel-item <?php if ($attiva == '1') { echo 'active'; } ?>" id="carousel01">
          <div class="d-flex align-items-center justify-content-center">
                      <div class="col-3 text-start" id="titolo" >
                        <p class="fs-4 text-white">UnitGenius </p>
                        <h1 class="display-1 text-white">Conversioni sulla Distanza</h1>
                      </div>

            <form class="forms-padding" method="get" action="">
              <div class="form-group">

              <div class="container d-inline">
                <input type="number" id="valore" name="valore" class="form-control forms-inserimento" required>
                <select id="unità" name="unità" class="form-control forms-selezione mt-2">
                    <option value="millimetri">Millimetri</option>
                    <option value="centimetri">Centimetri</option>
                    <option value="metri">Metri</option>
                    <option value="chilometri">Chilometri</option>
                    <option value="miglia">Miglia</option>
                </select>
              </div>

              <div class="container container-btn">
                <input type="submit" value="=" class="submit-btn">
                </input>
              </div>


              <div class="container d-inline">
                <?php
                    echo <<<END
                    <p class="fw-light text-light"> {$valore} {$unità} equivalgono a :</p>
                    <a class="form-control forms-inserimento noWidth">{$risultato} {$unità_convertire}</a>
                    END;
                ?>
                <select id="unità_convertire" name="unità_convertire" class="form-control forms-selezione mt-2">
                    <option value="millimetri">Millimetri</option>
                    <option value="centimetri">Centimetri</option>
                    <option value="metri">Metri</option>
                    <option value="chilometri">Chilometri</option>
                    <option value="miglia">Miglia</option>
                </select>
              </div>
            </div>

          </form>

        </div>
      </div>

      <!-- SECONDA SLIDE -->
      <!-- temperatura -->

      <div class="carousel-item <?php if ($attiva == '2') { echo 'active'; } ?>" id="carousel02">
      <div class="d-flex align-items-center justify-content-center">
                      
      <div class="col-3 text-start" id="titolo" >
        <p class="fs-4 text-white">UnitGenius </p>
        <h1 class="display-1 text-white">Conversioni sulla Temperatura</h1>
      </div>

          <form id="temperaturaForm" class="forms-padding" method="get" action="">
              <div class="form-group">
              
              <div class="container d-inline">
                <input type="number" id="valore_temperatura" name="valore_temperatura" class="form-control forms-inserimento" required>
                <select id="unità_temperatura" name="unità_temperatura" class="form-control forms-selezione mt-2">
                  <option value="celsius">Celsius</option>
                  <option value="fahrenheit">Fahrenheit</option>
                  <option value="kelvin">Kelvin</option>
                </select>
              </div>

              <div class="container container-btn">
                <input type="submit" value="=" class="submit-btn">
                </input>
              </div>

              <div class="container d-inline">
                <?php
                echo <<<END
                <p class="fw-light text-light"> {$valore_temperatura} gradi {$unità_temperatura} equivalgono a :</p>
                <a class="form-control forms-inserimento noWidth">{$risultato_temperatura}° {$unità_temperatura_convertire}</a>
                END;
                ?>
                <select id="unità_temperatura_convertire" name="unità_temperatura_convertire" class="form-control forms-selezione mt-2">
                  <option value="celsius">Celsius</option>
                  <option value="fahrenheit">Fahrenheit</option>
                  <option value="kelvin">Kelvin</option>
              </select>
              </div>
            </div>

          </form>
          

        </div>        
      </div>

      <!-- TERZA SLIDE -->
      <!-- tempo -->

      <div class="carousel-item <?php if ($attiva == '3') { echo 'active'; } ?>" id="carousel03">
      <div class="d-flex align-items-center justify-content-center">
                      <div class="col-3 text-start" id="titolo" >
                        <p class="fs-4 text-white">UnitGenius </p>
                        <h1 class="display-1 text-white">Conversioni sul Tempo</h1>
                      </div>

            <form class="forms-padding" method="get" action="">
              <div class="form-group">
          
              <div class="container d-inline">                
                <input type="number" id="valore_tempo" name="valore_tempo" class="form-control forms-inserimento" required>                
                <select id="unità_tempo" name="unità_tempo" class="form-control forms-selezione mt-2">
                <option value="millisecondi">Millisecondi</option>
                  <option value="secondi">Secondi</option>
                  <option value="minuti">Minuti</option>
                  <option value="ore">Ore</option>
                  <option value="giorni">Giorni</option>
                  <option value="settimane">Settimane</option>
                  <option value="mesi">Mesi</option>
                  <option value="anni">Anni</option>
                </select>
              </div>

              <div class="container container-btn">
                <input type="submit" value="=" class="submit-btn">
                </input>
              </div>

              <div class="container d-inline">
                <?php
                echo <<<END
                <p class="fw-light text-light"> {$valore_tempo} {$unità_tempo} equivalgono a :</p>
                <a class="form-control forms-inserimento noWidth">{$risultato_tempo} {$unità_tempo_convertire}</a>
                END;
                ?>
                <select id="unità_tempo_convertire" name="unità_tempo_convertire" class="form-control forms-selezione mt-2">
                  <option value="millisecondi">Millisecondi</option>
                  <option value="secondi">Secondi</option>
                  <option value="minuti">Minuti</option>
                  <option value="ore">Ore</option>
                  <option value="giorni">Giorni</option>
                  <option value="settimane">Settimane</option>
                  <option value="mesi">Mesi</option>
                  <option value="anni">Anni</option>
              </select>
              </div>
            </div>

          </form>

        </div>
      </div>

      <!-- QUARTA SLIDE -->
      <!-- imc -->

      <div class="carousel-item <?php if ($attiva == '4') { echo 'active'; } ?>" id="carousel04">
      <div class="d-flex align-items-center justify-content-center">
                      <div class="col-3 text-start" id="titolo" >
                        <p class="fs-4 text-white">UnitGenius </p>
                        <h1 class="display-1 text-white">Calcolo dell'Indice di Massa Corporea</h1>
                      </div>

          <form class="forms-padding" method="get" action="">
            <div class="form-group">
          
              <div class="container d-inline">                     
              
                <input type="number" id="valore_imc_altezza" name="valore_imc_altezza" class="form-control forms-inserimento" required>                
                <select id="unità_imc_altezza" name="unità_imc_altezza" class="form-control forms-selezione mt-2">
                <option value="centimetri">Altezza (cm)</option>
                </select>
              </div>

              <div class="container d-inline">
              <input type="number" id="valore_imc_peso" name="valore_imc_peso" class="form-control forms-inserimento" required>                
              <select id="unità_imc_peso" name="unità_imc_peso" class="form-control forms-selezione mt-2">
                  <option value="kilogrammi">Peso (kg)</option>
              </select>
              </div>
              
              <div class="container container-btn">
                <input type="submit" value="=" class="submit-btn">
              </div>

              <?php
                echo <<<END
                <div class="progress mt-5">
                  <div class="progress-bar {$progressBarColor} progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{$progressBarPercentage}" aria-valuemin="0" aria-valuemax="60" style="width: {$progressBarPercentage}%"></div>
                </div>              
                END;
                if ($risultato_imc != 0) {
                  echo <<<END
                  <p class="mt-3 fw-light text-light"> sei in {$risultato_imc}, con un punteggio di {$imc}</p>              
                  END;                  
                }
              ?>

            </div>

          </form>

        </div>
      </div>

      <!-- COMANDI CAROUSEL -->

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

    </div>

  </div>

    <!-- FOOTER -->

  <footer class="bg-light pt-4 ">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <p class="text-muted">Copyright &copy; UnitGenius - Sviluppato da Giulio Brunelli</p>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>
