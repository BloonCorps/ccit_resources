<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
    include 'review.php';
?>
<!DOCTYPE html>

  <?php echo head("Module 5")?>

  <header style="background-image:url('../images/english_banner.png')">
  <div class="container text-center">
    <h1 style = "font-family: 'Comfortaa', cursive;">Economic Status</h1>
  </div>
</header>

  <?php echo cards(5, $conn)?>
  <?php 
    $EconomicStatus = array("Questions About Your Economic Status","Q: How do you support yourself? ","A: My children support me. ","  I am on welfare. ","  I have a job. ","  I have savings. ","<br","Q: Do you have a job? ","  Do you work? ","  Are you employed? ","A: Yes, I have a job. I am a ______.","  No, I am retired. In China, I was a ______.","<br","Q: Do you pay rent? ","A: Yes/ No. ","<br","Q: How much is rent each month? ","A: ______ dollars. ","<br","Q: Are you on government welfare? ","  Do you receive food stamps? ","A: Yes/ No. ","<br","Q: Do you pay your taxes? ","  Do you file a tax return every year? ","A: Yes. ","<br","Q: Do you owe any taxes that are overdue? ","A: No.");
    $review = array($EconomicStatus);
    echo rev($review);
  ?>
  <?php echo foot()?>
</html>