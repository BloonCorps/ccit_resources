<?php
    include 'flashcards.php';
    include 'header.php';
    include 'review.php';
    include_once '../access.php';
?>
<!DOCTYPE html>

  <?php echo head("Module 2")?>

  <header style="background-image:url('../images/english_banner.png')">
  <div class="container text-center">
    <h1 style = "font-family: 'Comfortaa', cursive;">Questions and Verbs</h1>
  </div>
</header>

<?php echo cards(2, $conn)?>

<?php 
    $Question = array("Question","Who?","What?","When?","Where? ","Why? ","How? ","How many/much? ","How old? ","How long?");
    $Important = array("Important Phrases","Please repeat (that).","Please speak more slowly.");
    $review = array($Question, $Important);
    echo rev($review);
  ?>
<?php echo foot()?>
</html>