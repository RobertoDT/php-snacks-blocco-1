<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
//controllo sui parametri che siano tutti non vuoti
  if($_GET["name"] != "" && $_GET["mail"] != "" && $_GET["age"] != ""){

    if(strlen($_GET["name"]) > 3 && strpos($_GET["mail"], ".") !== false && strpos($_GET["mail"], "@") !== false && is_numeric($_GET["age"])){

      $name = $_GET["name"];
      $mail = $_GET["mail"];
      $age = $_GET["age"];

      echo "Accesso riuscito";
    } else{
      echo "Accesso negato";
    }

  } else{
    echo "Ricordati di passare tutti i parametri";
  }

?>
