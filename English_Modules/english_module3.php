<?php
    include 'flashcards.php';
    include 'header.php';
    include 'review.php';
    include_once '../access.php';
?>
<!DOCTYPE html>

  <?php echo head("Module 3")?>

  <header style="background-image:url('../images/english_banner.png')">
  <div class="container text-center">
    <h1 style = "font-family: 'Comfortaa', cursive;">Conversational English</h1>
  </div>
</header>

  <?php echo cards(3, $conn)?>
  <?php
    $Greetings = array("Self-Introduction & Greetings","Hello/Hi/Hey","Good morning","Good afternoon","Good evening","Goodbye/Bye. ","See you later/tomorrow/next week. ","Have a nice day. ","Thank you. You too. ","<br","A: Hi, my name is ___. What’s your name? ","B: My name is ___. It is nice to meet you. ","<br","A: How are you today? ","  How are you (doing)? ","B: I am fine, thank you, and you? / I’m good. ","<br","A: What do you do in your free time? ","  Do you have any hobbies? ","B: I like to read. "," I like to cook. "," I like to watch TV. "," I like to surf the internet. "," I like to travel. "," I like to sing. "," I like to exercise. "," I like to listen to music. "," I like to swim. ","<br","A: Where do you live? ","B: I live in Boston/Quincy/Malden/Newton, etc. ","<br","A: Do you like living there? ","B: Yes, it is nice. "," No, I want to move. ","<br","A: Do you live in a house or an apartment? ","B: I live in a house. "," I live in an apartment. ","<br","A: How long have you lived there? ","B: I have lived there for ___ ","years/months/weeks) "," I have lived there since ___ (month/date/year).");
    $Weather = array("Talking About the Weather ","A: How is the weather today?","B: The weather is great/ fine/ good/ okay/ bad/ terrible.","  It is sunny/ raining/ snowing/ windy/ cloudy.");
    $Transporation = array("Transportation","A: How did you come here today? ","B: I came by subway/ bus/ car/ bike. ","  I took the subway/ bus/ train. ","  I took a bus/ taxi. ","<br","A: Which one? (for bus) ","  Which line? (for subway) ","B: Bus number [number]","  Blue/ red/ orange/ green line. ","<br","A: How long did it take? ","B: [ Number ] minutes/ hours. ","<br","A: Was there traffic? ","B: no/ yes.");

    $review = array($Greetings, $Weather, $Transporation);
    echo rev($review);
  ?>
  <?php echo foot()?>
</html>