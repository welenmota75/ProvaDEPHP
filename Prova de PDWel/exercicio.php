<? php
  function  mdc ( $ x , $ y ) {
    $ max = max ( $ x , $ y );
    $ min = min ( $ x , $ y );
  
    if ( $ max % $ min == 0 ) {
      return  $ min ;
    } else {
      return  mdc ( $ min , ( $ max % $ min ));
    }
  }

  function  mmc ( $ x , $ y ) {
    return (( $ x * $ y ) / ( mdc ( $ x , $ y )));
  }

  if ( $ _GET ) {
    echo  "Cálculo mdc" . mdc ( $ _GET [ "m" ], $ _GET [ "n" ]);
    echo  "<br> Cálculo mmc" . mmc ( $ _GET [ "m" ], $ _GET [ "n" ]);

    echo  "<br> O valor de m:" . $ _GET [ "m" ];
    echo  "<br> O valor de n é:" . $ _GET [ "n" ];
  }
?>

< form  method = " get " >
  M: < valor  tipo = text  nome = m > < br >
  B: < valor  tipo = texto  nome = n > < br >
  < input  type = submit  value = " OK " >
</ form >