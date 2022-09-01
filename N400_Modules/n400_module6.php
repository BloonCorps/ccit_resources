<?php
    include 'flashcards.php';
    include 'header.php';
    include 'review.php';
    include_once '../access.php'; ?>
<!DOCTYPE html>

<?php echo head("Module 1")?>

<header style="background-image:url('../images/english_banner.png')">
  <div class="container text-center">
    <h1 style = "font-family: 'Comfortaa', cursive;">Small Talk</h1>
  </div>
</header>

<?php echo cards(1, $conn)?>

<?php 
  $Geography = array("Section 1", "Notes 1", "Notes 2");
  $People = array("Section 2", "Notes 1", "Notes 2");
  $review = array($Geography, $People);
  echo rev($review); ?>

<?php echo foot()?>

</html>