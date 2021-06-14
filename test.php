<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
    $pseudo = $_POST['pseudo'];
    json_encode($pseudo);
     ?>
  </head>
  <body>
    <script type="text/javascript">
      var Pseudo = <?php echo json_encode($pseudo);?>;
      function apppseudo(Pseudo) {
        document.getElementById('Pseudo').value = Pseudo;
      };
    </script>
  <input type="text" name="" value="" id="Pseudo">
  <input type="button" onclick="apppseudo(Pseudo)" name="" value="montrer le pseudo">
  </body>
</html>
