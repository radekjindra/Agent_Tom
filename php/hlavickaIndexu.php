<?php
// Nastavení interního kódování pro funkce pro práci s řetězci
mb_internal_encoding("UTF-8");
// Automatické načtení tříd
function autoloadFunkce(string $trida): void
{
  // Končí název třídy řetězcem "Kontroler" ?
  if (preg_match('/Kontroler$/', $trida))
    require("kontrolery/" . $trida . ".php");
  else
    require("modely/" . $trida . ".php");
}
// zavolání fce
spl_autoload_register("autoloadFunkce");
// Zavolání databáze aplikace   
Db::connect('localhost', 'pojisteni_db', 'root', '');
?>