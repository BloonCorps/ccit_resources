<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
    include 'review.php';

?>
<!DOCTYPE html>

<?php echo head("Module 8")?>

<header style="background-image:url('../images/ushistory_banner.png')">
  <div class="container text-center">
    <h1 style = "font-family: 'Comfortaa', cursive;">Rights and Responsibilities</h1>
  </div>
</header>

<?php echo cards(8, $conn)?>

<?php 
  $rights = array("Rights", "Rights for EVERYONE include the freedom of expression, speech, assembly, petition the government, religion, and to bear arms.",
  "Rights for CITIZENS only also include the ability to vote in a federal election or run for federal office.");
  $resp = array("Responsibilities", "EVERYONE must send in federal income tax forms by April 15th.",
  "Responsibilities for citizens also include serving on a jury voting in a federal election (you must be 18 or older to vote), saying the Pledge of Allegiance to the Flag.",
  "Additionally, all men who are citizens must register for the Selective Service at age 18, between 18 and 26.");
  $promise = array("Promises Citizens make to the US", "Stop loyalty to other countries", "Defend the US Constitution and its laws", "Obey the laws of the US",
  "Serve in the US Military", "Serve the nation", "Be loyal to the US.");
  $dem = array("Ways to Participate in the Democracy", "Vote", "Join a political party", "Help with a campaign", "Join a civic group", "Join a community group", 
  "Give an elected official your opinion on an issue", "Call Senators and Representatives", "Run for office", "Write to a newspaper");
  $review = array($rights, $resp, $promise, $dem);
  echo rev($review);?>

<?php echo foot()?>

</html>