<?php
    include 'flashcards.php';
    include 'header.php';
    include 'review.php';
    include_once '../access.php'; ?>
<!DOCTYPE html>

<?php echo head("Module 1")?>

<header style="background-image:url('../images/ushistory_banner.png')">
  <div class="container text-center">
    <h1 style = "font-family: 'Comfortaa', cursive;">What is America?</h1>
    <p class="lead" style = "font-family: 'Comfortaa', cursive;">Geography: States, Oceans, Capitals, Presidents, National Holidays, the Flag</p>
  </div>
</header>

<?php echo cards(1, $conn)?>

<?php 
  $Geography = array("Geography", "To the north of the United States, there is Canada. Thirteen US States border Canada, and these
  include Maine, New Hampshire, Vermont, New York, Pennsylvania, Ohio, Michigan, Minnesota, North Dakota,
  Montana, Idaho, Washington, and Alaska.", "To the east of the United States, there is
  the Atlantic Ocean! Across the Atlantic Ocean is Europe.", "To
  the south of the United States, there is Mexico. Four US States border Mexico, and these include Texas, New
  Mexico, Arizona, and California. America got this land from Mexico after fighting the Mexican-American war
  in the 1800s.", "To the west of the United States, there
  is the Pacific Ocean! Across the Pacific Ocean is Asia.", "The capital of the United States is
  Washington, D.C. Similarly, the capital of China is Beijing.", "There are 50 states in the
  United States, and each state has its own capital. The capital of Massachusetts is Boston.", "In the state of New York, on Liberty Island,
  there is the Statue of Liberty.");
  $People = array("People", "In China, the current president
  is Xi Jinping. In America, the current president is Joe Biden.", "The Vice President is below the
  President. When the President can no longer serve, the Vice President becomes President.", "The current Vice President is Kamala Harris.", "Similar to how there is a
  president of the United States, there is also a leader of each state. This person is called the
  governor.", "Since there are
  fifty states, there are fifty governors in the US. The governor of Massachusetts is Charlie Baker.");
  $Flag = array("The US Flag", "Our American flag has 50 stars
  and 13 stripes. The stars are white against a blue background.","The stripes are red and white.", "We have 50 stars because there are currently
  50 states.", "We have 13 stripes because when
  America became a country, they were thirteen original colonies.", "All 37 other states were added later,
  after the American Revolution.", "The American Revolution was a
  war in 1776. America fought Great Britain, and eventually won.", "America would eventually fight the British
  again in 1812.", "During this war, a
  composer that was fighting in the war saw the American flag rise above all the guns, cannons, and
  fighting.", "This composer wrote the song 'The Stars Spangled Banner.' This became our national anthem.");
  $Holidays = array("Holidays", "There are many national holidays!", "On Martin Luther King Jr.
  Day, we honor Martin Luther King Jr, an activist that fought for civil rights.", "On President's Day, we celebrate the
  current and past presidents of the United States.", "On Memorial Day, we commemorate all
  the soldiers that have served the United States.", "On Memorial Day, we commemorate all
  the soldiers that have served the United States.", "On Independence Day, which we
  celebrate on July Fourth, we celebrate our independence from Great Britain.", "On Labor Day, we celebrate all the workers in
  the United States.", "On Columbus Day, we honor Cristopher Columbus, an Italian colonizer sailing under the Spanish
  flag that opened the Americas to conquest and colonization.", "On Veterans Day, we honor those
  that have served and fought in the US military.", "On Thanksgiving Day, we give thanks to
  those that have impacted our lives.", "Christmas is a religious holiday that has
  eventually become a national holiday.");
  $review = array($Geography, $People, $Flag, $Holidays);
  echo rev($review); ?>

<?php echo foot()?>

</html>