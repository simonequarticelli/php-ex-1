<!-- creare una variabile con del testo (es: lorem ipsum).
Leggere dal parametro GET un parola da censurare e
stampare a schermo un paragrafo contenente il testo
con 3 * (3 caratteri di asterisco) al posto della badword. -->

<html>
  <head>
    <title>php-ex-1</title>
  </head>
  <body>
    <?php
    // echo "ciao";
    //creo variabile con il testo
    $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    //var_dump($testo);
    //GET per leggere parola inserita
    $parola_vietata = $_GET["parola"];
    // var_dump($parola_vietata);
    //censuro la parola inserita con ***
    $testo_mod = str_replace($parola_vietata, '***', $testo);
    echo $testo_mod;
    ?>
  </body>
</html>
