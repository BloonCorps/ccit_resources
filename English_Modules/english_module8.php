<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
    include 'review.php';
?>
<!DOCTYPE html>

  <?php echo head("Module 8")?>

<header style="background-image:url('../images/english_banner.png')">
  <div class="container text-center">
    <h1 style = "font-family: 'Comfortaa', cursive;">Commands</h1>
  </div>
</header>

  <?php echo cards(8, $conn)?>
  <?php 
    $Command = array("Commands","Turn left/right. Take a left/right. ","Go down the hall. ","Go around the corner. ","He/She can’t come with you. ","Wait right here. ","That’s wrong/incorrect. Please try again. ","Go with that woman/lady/man. ","Please go up to window two and put your letter there. ","Please sit down and wait. ","Tell me the answer. ","What? / Pardon? / Come again? / Excuse me? / Can you repeat that? / Can you say that again? ","Please follow me to room ____.","Please have a seat.");
    $review = array($Command);
    echo rev($review);
  ?>
  <?php echo foot()?>
</html>