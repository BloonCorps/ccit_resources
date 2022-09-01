<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
    include 'review.php';
?>
<!DOCTYPE html>

  <?php echo head("Module 2")?>

  <header style="background-image:url('../images/ushistory_banner.png')">
  <div class="container text-center">
    <h1 style = "font-family: 'Comfortaa', cursive;">Colonial Period and Independence</h1>
  </div>
</header>

  <?php echo cards(2, $conn)?>

  <?php 
    $Colonial = array("Colonial Period","The British first came to America in the 1600s.", 
    "They came to America for many reasons: freedom, political liberty, religious freedom, economic opportunity, and to escape persecution.", 
    "When they came to America, Native Americans (American Indians) were already living in the US.", 
    "These Native Americans were a part of many different tribes. They included: Cherokee, Navajo, Sioux, Chippewa, Choctaw, Pueblo, Apache, Iroquois, Creek, Blackfeet, Seminole, Cheyenne, Arawak, Shawnee, Mohegan, Huron, Oneida, Lakota, Crow, Teton, and the Hopi.", 
    "In order to acquire this land, the Europeans fought and forced the Native Americans off their lands.", 
    "The British later formed 13 colonies: New Hampshire, Massachusetts, Rhode Island, Connecticut, New York, New Jersey, Pennsylvania, Delaware, Maryland, Virginia, North Carolina, South Carolina, and Georgia.",
    "We might remember from Unit 1 that there are 13 stripes on the US Flag because there were 13 original colonies.");
    $Independence = array("Independence","To pay off war debts, the British government began to impose high taxes on the colonists.",
    "They began taxing paper, stamps, sugar, tea, and other necessities.", 
    "The colonists began disobeying these taxes, so the British began sending soldiers across the ocean.",
    "The British government asked the colonists to house these soldiers, angering the colonists even more.",
    "Because of high taxes, because the British army stayed in their houses, and because they didn't have self-government, the colonists fought the British.",
    "Then, Thomas Jefferson wrote the Declaration of Independence.",
    "The Declaration of Independence declared our independence from Great Britain and was adopted on July 4th, 1776.",
    "Today, we celebrate Independence Day on July 4th!",
    "The Declaration of Independence also guarantees 3 rights: life, liberty, and the pursuit of happiness.");
    $review = array($Colonial, $Independence);
    echo rev($review);?>

  <?php echo foot()?>
  
</html>