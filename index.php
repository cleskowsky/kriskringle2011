<?php include 'header.php' ?>

<div class="container">
  <?php if (isset($_GET['err'])): ?>
    <div class="alert-message error">
      <?php echo $_GET['err'] ?>
    </div>
  <?php endif ?>

  <form action="player.php">
    <label for="secret">Enter your secret code:</label>
    <input id="secret" type="text" name="s">
    <input type="submit" value="Show Me My KrisKringle!" class="btn primary">
  </form>
</div>

<?php include 'footer.php' ?>