<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
    include 'review.php';

?>
<!DOCTYPE html>

<?php echo head("Module 5")?>

<header style="background-image:url('../images/ushistory_banner.png')">
  <div class="container text-center">
    <h1 style = "font-family: 'Comfortaa', cursive;">People</h1>
  </div>
</header>

<?php echo cards(5, $conn)?>
<?php 
$People = array("Other Important People",
"Benjamin Franklin: U.S. diplomat, Oldest member of the Constitutional Convention, First Postmaster General of the US, Writer of Poor Richard's Almanac, Started the First Free Libraries",
"George Washington: First President of the US, 'Father of Our Country'",
"Susan B. Anthony: Fought for Women's Rights, Fought for Civil Rights",
"Woodrow Wilson: President during World War I",
"Franklin Roosevelt: President during the Great Depression and World War II",
"Dwight D. Eisenhower: President of the United States, War Hero from World War II",
"Martin Luther King, Jr.: Fought for Civil Rights, Worked for Equality for all Americans",
"Nancy Pelosi: Current Speaker of the House of Representatives",
"Joe Biden: Current President of the United States, Member of the Democratic Party");
$review = array($People);
echo rev($review);?>

<?php echo foot()?>
</html>