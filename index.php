<!DOCTYPE html>
<html>
  <head>
    <title>KrisKringle 2011</title>

    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>

  <body>

    <div class="container">
      <?php if (isset($_GET['err'])): ?>
        <div class="error">
          <?php echo $_GET['err'] ?>
        </div>
      <?php endif ?>

      <form action="/player.php">
        <label for="access-code">Enter your secret code:</label>
        <input id="access-code" type="text" name="c">
        <input type="submit" value="Show Me My KrisKringle!">
      </form>

    </div>

  </body>
</html>