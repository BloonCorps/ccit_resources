<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
    include 'review.php';
?>
<!DOCTYPE html>

  <?php echo head("Module 7")?>

  <header style="background-image:url('../images/english_banner.png')">
  <div class="container text-center">
    <h1 style = "font-family: 'Comfortaa', cursive;">Before the Interview</h1>
  </div>
</header>

  <?php echo cards(7, $conn)?>
  <?php 
    $Interview = array("Questions Before the Naturalization Interview","Q: Why are you here? ","  What is your reason for being here? ","  Do you know what you are doing here? ","A: I am here to take my citizenship test. ","<br","Q: Did anyone come with you? ","  Did you come with family? ","A: No, I came by myself. ","  Yes, I came with my son/daughter/wife/ husband/friend... ","<br","Q: Did you come by yourself? ","  Did you come alone? ","A: Yes, I did. ","  No, I came with my son/daughter/wife/husband/friend... ","<br","Q: Do you have your appointment notice? ","  Can I see your appointment notice? ","A: Yes. ","<br","Q: What time is your appointment? ","  What time is your interview? ","A: It is at ________ (e.g. 9:45). ","<br","Q: Have you been waiting for a long time? ","A: No/ Yes . ","<br","Q: How long have you been waiting here? ","A: I have been waiting for ____ minutes / hours . ","<br","Q: Did you bring a lawyer/an attorney with you? ","A: No/Yes","<br","Q: Did you bring your documents? ","A: Yes","<br","Q: Which documents did you bring with you? ","A: My ID card/ social security card/ passport/ green card/ appointment notice/ etc. ","<br","Q: Is this your first or second time taking the test? ","A: This is my first time. ","  This is my second time. ","<br","Q: Why didn’t you pass the test the first time? ","A: I couldn’t speak/read/write English. ","  I didn’t pass the speaking/reading/writing part. ","<br","Q: How are you feeling today? ","  How are you feeling about this test? ","A: I am feeling fine / a bit nervous / excited . ","<br","Q: Are you prepared to take this test? ","A: Yes.");
    $review = array($Interview);
    echo rev($review);
  ?>
  <?php echo foot()?>
</html>