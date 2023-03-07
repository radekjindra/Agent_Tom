<?php
      $datum = new DateTime();
      $aktualniDen  = $datum->format("j");
      $aktualniMesic= $datum->format("n");
      $aktualniRok  = $datum->format("Y");
      // přidání dne
      $datum->modify('+1 day');
      $zitrejsiDen  = $datum->format("j");
      $zitrejsiMesic= $datum->format("n");
      $zitrejsiRok  = $datum->format("Y");
      $jmenoDnesnihoSvatku    = new Svatky($aktualniDen,$aktualniMesic);
      $jmenoZitrejsihoSvatku  = new Svatky($zitrejsiDen,$zitrejsiMesic);
      echo ('Dnes je '.$aktualniDen.'.'.$aktualniMesic.'.'.$aktualniRok.' svátek má <span id="dnesniSvatek">'.$jmenoDnesnihoSvatku->vypisSvatek().'</span> zítra '
            .$zitrejsiDen.'.'.$zitrejsiMesic.'.'.$zitrejsiRok.' má svátek <span id="zitrejsiSvatek">'.$jmenoZitrejsihoSvatku->vypisSvatek().'</span>');
    