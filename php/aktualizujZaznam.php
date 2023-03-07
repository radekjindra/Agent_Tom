<?php
mb_internal_encoding("UTF-8");
if ($_POST) {
    // odstranění bílých znaků
    $pojistenec = trim($_POST['pojistenec']);
    $titul      = trim($_POST['titul']);
    $jmeno      = trim($_POST['jmeno']);
    $prijmeni   = trim($_POST['prijmeni']);
    $narozen    = trim($_POST['narozen']);
    $ulice      = trim($_POST['ulice']);
    $mesto      = trim($_POST['mesto']);
    $email      = trim($_POST['email']);
    $telefon    = trim($_POST['telefon']);
    $psc        = trim($_POST['psc']);
    // převod datumu do textu
    $narozen   = $narozen[8] . $narozen[9] . '.' . $narozen[5] . $narozen[6] . '.' . $narozen[0] . $narozen[1] . $narozen[2] . $narozen[3];

    /**
     * Příklad
     * UPDATE `pojistenci_db` SET `titul` = '' WHERE `pojistenci_db`.`pojistenec_id` = 457
     */

    require('../modely/Db.php');
    Db::connect('localhost', 'pojisteni_db', 'root', '');
    Db::query("UPDATE   pojistenci_db 
               SET      titul   =   '$titul'        , 
                        jmeno   =   '$jmeno'        , 
                        prijmeni=   '$prijmeni'     , 
                        narozen =   '$narozen'      , 
                        ulice   =   '$ulice'        , 
                        psc     =   '$psc'          , 
                        mesto   =   '$mesto'        ,
                        email   =   '$email'        ,
                        telefon =   '$telefon'
               WHERE    pojistenci_db.pojistenec_id = $pojistenec");

// příkaz na obrácené pořadí pojistenec_id pro lepší kontrolu nového či upravéného záznamu v tabulce
$uzivatele = Db::queryAll('SELECT * FROM `pojistenci_db` ORDER BY `pojistenci_db`.`pojistenec_id` DESC');

header('Location:../');
exit;

}

