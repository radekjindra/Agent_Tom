<?php
    // odstranění bílých znaků
    $id_zaznamu = trim($_POST['id']);
    // příkaz na vymazání aktuálního záznamu
    require('../modely/Db.php');
    Db::connect('localhost', 'pojisteni_db', 'root', '');
    Db::query('DELETE FROM pojistenci_db WHERE pojistenci_db.pojistenec_id = ?', $id_zaznamu);
    
    header('Location:../');
    exit;
?>
