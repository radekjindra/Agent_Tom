<?php
mb_internal_encoding("UTF-8");
if ($_POST) {
  // odstranění bílých znaků
  $edit_pojistence = trim($_POST['editPojistenec']);
  $edit_titul      = trim($_POST['editTitul']);
  $edit_jmeno      = trim($_POST['editJmeno']);
  $edit_prijmeni   = trim($_POST['editPrijmeni']);
  $edit_narozen    = trim($_POST['editNarozen']);
  $edit_ulice      = trim($_POST['editUlice']);
  $edit_mesto      = trim($_POST['editMesto']);
  $edit_email      = trim($_POST['editEmail']);
  $edit_telefon    = trim($_POST['editTelefon']);
  $edit_psc        = trim($_POST['editPSC']);
  // převod pro input datumu

  $value_narozen   = $edit_narozen[6] . $edit_narozen[7] . $edit_narozen[8] . $edit_narozen[9] . '-' . $edit_narozen[3] . $edit_narozen[4] . '-' . $edit_narozen[0] . $edit_narozen[1];
}


echo ('
<!DOCTYPE html>
<html lang="cs-cz">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
  <meta name="description" content="Pojišťovací portál">
  <meta name="keywords" content="Pojištěnec detail">
  <meta name="author" content="Radek Jindra">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  ');

//Načtění scriptů
require_once('../pohledy/scripty.phtml');

echo (' 
  <title>Agent Tom - Zjednodušená verze [PHP]</title>
</head>
 <body>
 <header>
 <div id="hlavicka" class="sticky-top bg-dark">
  <img id="pojistovak" src="../obrazky/agentInvertne.jpg" alt="Pojišťovák">
  <span id="agentTom">Agent Tom<small id="portal" class="p-1">pojišťovací portál</small></span>
  <span id="svatek">
  ');

echo ('Editace záznamu ----->>><mark>ID ' . htmlspecialchars($edit_pojistence) . '</mark><<<-----');

echo ('  
  </span>
</div>     
</header>
    <form action="aktualizujZaznam.php" method="post" id="needs-validation" novalidate="novalidate">
    <!-- hlavička -->
       <div class="form-row m-0">
           <div class="form-group m-0 col"><hr></div>
           <div class="form-group m-0 col-auto "><div class="p-1 m-1 bg-primary text-white small">' . htmlspecialchars($edit_titul . ' ' . $edit_jmeno . ' ' . $edit_prijmeni) . '</div></div>
           <div class="form-group m-0 col"><hr></div>
       </div>
     <!-- první řádek -->   
       <div class="form-row m-0" >
           <div class="form-group m-0 col-1" >
           <input  type="hidden" name="pojistenec" value="' . htmlspecialchars($edit_pojistence) . '">
           </div>
           <div class="form-group m-0 col-1" >
            <!-- vložení dropdownu pro výběr titulu -->');
require_once('../pohledy/titul.phtml');
echo ('            
            <label class="small m-0" for="registrace-titul" title="Vyberte titul" >Titul</label>
            <input type="text" list="listid" class="form-control form-control-sm m-0" placeholder="---." value="' . htmlspecialchars($edit_titul) . '" id="registrace-titul" title="Vyberte titul" name="titul">
           </div>
           <div class="form-group m-0 col-3" >
               <label class="small m-0" for="registrace-jmeno" >Jméno</label>
               <input  type="text" class="form-control form-control-sm m-0" placeholder="Jméno" value="' . htmlspecialchars($edit_jmeno) . '" id="registrace-jmeno"  name="jmeno" required="required">
               <div class="invalid-feedback m-0"><small>Zadejte jméno pojištěnce.</small></div>
           </div>
           <div class="form-group m-0 col-3" >
               <label class="small m-0" for="registrace-prijmeni" >Příjmení</label>
               <input  type="text" class="form-control form-control-sm m-0" placeholder="Příjmení" value="' . htmlspecialchars($edit_prijmeni) . '" id="registrace-prijmeni"  name="prijmeni" required="required">
               <div class="invalid-feedback m-0"><small>Zadejte příjmení pojištěnce.</small></div>
           </div>
   
           <div class="form-group m-0 col-2" title="Zadej datum narození ">
               <label class="small m-0" for="registrace-narozeni" >Narození</label>
               <input type="date" name="narozen"  class="form-control form-control-sm m-0 p-1" placeholder="DD.MM.RRRR" value="' . htmlspecialchars($value_narozen) . '" id="registrace-narozeni" title="Zadej datum narození ve formátu den.měsíc.rok [01.08.2021]" name="narozen" required="required">
               <div   class="invalid-feedback m-0"><small>Zadejte datum narození pojištěnce</small></div>
           </div>
       </div>
   
      <!-- druhý řádek -->
       <div class="form-row m-0" >
           <div class="form-group m-0 col-2"  >
             <!--  -->
           </div>
          <div class="form-group m-0 col-3" >
           <label class="small m-0" for="registrace-email" >Email</label>
           <input class="form-control form-control-sm m-0" name="email" type="email" id="registrace-email" placeholder="honzanovotny@seznam.cz" value="' . htmlspecialchars($edit_email) . '"  required="required">
           <div class="invalid-feedback m-0"><small>Zadejte email pojištěnce.</small></div>
          </div>
          <div class="form-group m-0 col-3" >
           <label class="small m-0" for="registrace-telefon" >Telefon</label>
           <input class="form-control form-control-sm m-0" onkeyup="pridatMezery(this)" name="telefon" type="text" id="registrace-telefon" placeholder="731 584 972" value="' . htmlspecialchars($edit_telefon) . '" required="required">
           <div class="invalid-feedback m-0"><small>Zadejte telefon pojištěnce.</small></div>
          </div>
       </div>    

       <!-- třetí řádek -->
       <div class="form-row m-0" >
           <div class="form-group m-0 col-2"  >
             <!--  -->
           </div>
           <div class="form-group m-0 col-3" >
               <label class="small m-0" for="registrace-ulice" >Ulice a číslo popisné</label>
               <input type="text" class="form-control form-control-sm m-0" placeholder="Ulice" value="' . htmlspecialchars($edit_ulice) . '" id="registrace-ulice"  name="ulice" required="required">
               <div class="invalid-feedback m-0"><small>Zadejte jméno ulice pojištěnce.</small></div>
           </div>
           <div class="form-group m-0 col-3" >
               <label class="small m-0" for="registrace-mesto" >Město</label>
               <input type="text" class="form-control form-control-sm m-0" placeholder="Město" value="' . htmlspecialchars($edit_mesto) . '" id="registrace-mesto"  name="mesto" required="required">
               <div class="invalid-feedback m-0"><small>Zadejte město pojištěnce.</small></div>
           </div>
           <div class="form-group m-0 col-2" >
               <label class="small m-0" for="registrace-psc" >PSČ</label>
               <input type="text" onkeyup="pridatMezeru(this)" class="form-control form-control-sm m-0" placeholder="PSČ" value="' . htmlspecialchars($edit_psc) . '" id="registrace-psc"  name="psc" required="required">
               <div class="invalid-feedback m-0"><small>Zadejte PSČ pojištěnce.</small></div>
           </div>
       </div>    

       <!-- čtvrtý řádek -->
       <div class="form-row m-0" >
           <div class="form-group m-0 col-1"  >
               <!--  -->
           </div>
           <div class="form-group m-0 col-1" >
               <input class="btn btn-outline-primary btn-sm m-2"  id="registrace-uprav" type="submit" value="Aktualizovat">
           </div>
       </div>
   </form>
   <footer>
   ');
// Patička stránky
require_once('../pohledy/paticka.phtml');
echo ('
   </footer>
 </body>
 </html>
     ');
