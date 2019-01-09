<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie6</title>
</head>
<body>
  <a href="index.php?language=PHP&server=LAMP">exercice4</a>
  <?php if (isset($_GET['language']) && isset($_GET['server'])){ ?><!--1 isset par données-->
    <p><?= $_GET['language'] . ' ' . $_GET['server'] ?></p>
  <?php }else{ ?>
    <p>Veuillez renseigner les champs manquants.</p>
  <?php } ?>
</body>
</html>
