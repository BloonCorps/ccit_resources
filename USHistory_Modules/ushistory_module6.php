<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
    include 'review.php';

?>
<!DOCTYPE html>

<?php echo head("Module 6")?>

<header style="background-image:url('../images/ushistory_banner.png')">
  <div class="container text-center">
    <h1 style = "font-family: 'Comfortaa', cursive;">The 1800s</h1>
  </div>
</header>

<?php echo cards(6, $conn)?>

<?php 
$early1800 = array("Early 1800s",
"1803: America purchased a very large expanse of land covering the central part of the US from France called the Louisiana Purchase.",
"1812-1815: The War of 1812 was between the United States and England.");
$mexicanamerican = array("1850-1853: Mexican-American War", 
"America wanted a significant piece of land, including modern-day Texas, New Mexico, Arizona, and California.",
"America offered to buy the land from Mexico, but Mexico did not wish to sell the land.", "America began a war against Mexico.",
"America won the war and obtained these territories.");
$civil = array("1862-1865: The Civil War",
"The Civil War was fought between the North (The Union) and the South (The Confederacy) over the issue of slavery.",
"The South had an economy based on agriculture, which depended heavily on slaves from Africa.",
"Abraham Lincoln was the President during the Civil War and is known as the person that saved the Union and freed the slaves.",
"Lincoln gave a very famous speech known as the Emancipation Proclamation, which freed the slaves.");
$late1800 = array("Late 1800s", "1898: The Spanish–American War was an armed conflict between Spain and America. Hostilities began in the aftermath of the internal explosion of a US ship in Cuba, leading to US intervention in Cuba's independence from Spain.");
$review = array($early1800, $mexicanamerican, $civil, $late1800);
echo rev($review);?>

<?php echo foot()?>

</html>