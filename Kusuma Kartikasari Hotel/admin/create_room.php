
<?php include 'include/header.php'; ?>
<form action="createRoom.php" method="POST">
  <input type="text" name="nomorKamar"></input>
  <select name="tipeKamar">
    <option value="" disabled>...</option>
    <option value="Executive Suite 1">Executive Suite 1</option>
    <option value="Executive Suite">Executive Suite</option>
    <option value="Executive">Executive</option>
    <option value="Executive Cottage">Executive Cottage</option>
    <option value="Deluxe">Deluxe</option>
    <option value="Bussines Standard">Bussines Standard</option>
  </select>
  <input type="submit" value="Create">
</form>
