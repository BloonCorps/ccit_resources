<?php
    include 'flashcards.php';
    include 'header.php';
    include 'review.php';
    include_once '../access.php';
?>
<!DOCTYPE html>

  <?php echo head("Module 4")?>

  <header style="background-image:url('../images/english_banner.png')">
  <div class="container text-center">
    <h1 style = "font-family: 'Comfortaa', cursive;">Characteristics and Children</h1>
  </div>
</header>

  <?php echo cards(4, $conn)?>
  <?php 
      $Colors = array("Colors","Blue","Green","Yellow","Red","Brown","Grey","White","Black");
      $Physical = array("Questions About Your Physical Characteristics","Q: How tall are you? / What is your height? ","A: I am [number] feet, [number] inches tall. ","<br","Q: What is your weight? ","A: I weigh [number] pounds. ","<br","Q: What color are your eyes? ","A: My eyes are brown/ black. ","<br","Q: What color is your hair? ","A: My hair is white/ brown/ black.");
      $Children = array("Questions About Your Children","Q: How many children do you have? ","A: I have <number> child/children. ","<br","Q: What is his/her name? What are their names? ","A: His/Her name is [name]. Their names are [names].","<br","Q: What is his/her date of birth? What are their dates of birth? ","Q: When was he/she born? When were they born? ","A: His/Her date of birth is [date]. Their dates of birth are [dates].","<br","Q: What is his/her age? / What are their ages? ","A: He/She is [number] years old. / They are [numbers] years old.");
      
    $review = array($Colors, $Physical, $Children);
    echo rev($review);
  ?>
  <?php echo foot()?>
</html>