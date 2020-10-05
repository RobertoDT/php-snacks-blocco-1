<!-- Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php
  //creo array matches
  $matches = [

    "match1" => [
      "squadra_casa" => [
        "nome" => "Celtics",
        "score" => 100
      ],
      "squadra_ospite" =>[
        "nome" => "Orlando Magic",
        "score" => 90
      ]
    ],

    "match2" => [
      "squadra_casa" => [
        "nome" => "Lakers",
        "score" => 80
      ],
      "squadra_ospite" =>[
        "nome" => "Miami Eat",
        "score" => 65
      ]
    ],

  ];

  for($i = 1; $i <= count($matches); $i++){
    echo $matches["match".$i]["squadra_casa"]["nome"] ." - " .$matches["match".$i]["squadra_ospite"]["nome"] ." | " .$matches["match".$i]["squadra_casa"]["score"] . " - " .$matches["match".$i]["squadra_ospite"]["score"]."<br>";
  }

?>
