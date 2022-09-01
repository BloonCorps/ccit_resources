<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
    include 'review.php';

?>
<!DOCTYPE html>

<?php echo head("Module 7")?>

<header style="background-image:url('../images/ushistory_banner.png')">
  <div class="container text-center">
    <h1 style = "font-family: 'Comfortaa', cursive;">The 1900s - Present</h1>
  </div>
</header>

<?php echo cards(7, $conn)?>

<?php 
$hist1900 = array("1900s",
"1914-1919: World War I - America joined the War in 1918, and Woodrow Wilson was president during this war.",
"1939-1945: World War II - America joined the War in 1941, after the Japanese bombed Pearl Harbor. We fought Japan, Germany, and Italy. Franklin Roosevelt was president during this war, and Dwight D. Eisenhower, a future president, was a war hero during this war.",
"1950-1953: Korean War - The Korean War was a proxy war for the Cold War, where America fought the spread of communism.",
"1955-1975: Vietnam War - The Vietnam War was another proxy war for the Cold War.",
"1960s: Civil Rights Movement - This movement was a struggle by African Americans to end legalized racial discrimination and racial segregation in the US.",
"1990-1991: Gulf War - The Gulf War was a war by 35 nations in response to Iraq invading and annexing Kuwait."
);
$review = array($hist1900);
echo rev($review);?>

<?php echo foot()?>

</html>