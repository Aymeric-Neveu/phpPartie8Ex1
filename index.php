<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 1</title>
  </head>
  <body>
      <p><?php  echo ' ton User agent ' . $_SERVER['HTTP_USER_AGENT'];?></p>
      <p><?php echo ' ton nom de serveur ' . $_SERVER[ 'SERVER_NAME'];?></p>
      <p><?php echo ' ton adresse IP ' . $_SERVER[ 'SERVER_ADDR'];?></p>
  </body>
</html>
