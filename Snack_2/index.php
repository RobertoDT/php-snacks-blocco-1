<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
//controllo sui parametri che siano tutti non vuoti
  if(!empty($_GET["name"]) && !empty($_GET["mail"]) && !empty($_GET["age"])){

    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

    if(strlen($name) > 3
    && strpos($mail, ".") !== false && strpos($mail, "@") !== false
    && is_numeric($age))
    {
      echo "Accesso riuscito";
    } else{
      echo "Accesso negato";
    }

  } else{
    echo "Ricordati di passare tutti i parametri";
  }

?>
