<!-- Hlavička PHP -->
<?php require_once('./php/hlavickaIndexu.php'); ?>

<!DOCTYPE html>
<html lang="cs-cz">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Pojišťovací portál">
  <meta name="keywords" content="Pojištěnec">
  <meta name="author" content="Radek Jindra">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Načtění scriptů -->
  <?php require_once('./pohledy/scripty.phtml'); ?>
  <title>Agent Tom - Zjednodušená verze [PHP]</title>
</head>

<body>
  <header>
    <!-- Hlavička stránky -->
    <?php require_once('./pohledy/hlavicka.phtml');     ?>
  
  </header>
 
  <!-- Záložková navigace -->
  <?php require_once('./pohledy/navigaceZalozek.phtml'); ?>
  <article>
    <!-- Obsah záložek aplikace -->
    <?php require_once('./pohledy/obsahZalozek.phtml'); ?>
  </article>
  
  <footer>
    <!-- Patička stránky-->
    <?php require_once('./pohledy/paticka.phtml'); ?>
  </footer>
</body>

</html>