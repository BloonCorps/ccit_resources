<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
    include 'review.php';

?>
<!DOCTYPE html>

<?php echo head("Module 4")?>

<header style="background-image:url('../images/ushistory_banner.png')">
  <div class="container text-center">
    <h1 style = "font-family: 'Comfortaa', cursive;">System of Government</h1>
  </div>
</header>

<?php echo cards(4, $conn)?>

<?php 
    $Congress = array("Legislative Branch / Congress",
    "The US Congress makes federal laws.",
    "Congress is composed of two parts: the Senate and the House of Representatives.",
    "The Senate has 100 members. Each state has two Senators, and they represent all people in the state.", 
    "We elect Senators every 6 years.",
    "The two Senators of Massachusetts are currently Ed Markey and Elizabeth Warren.",
    "The House of Representatives has 435 voting members. Each state has a different number of representatives.",
    "States with more people have more representatives. We elect Representatives every 2 years.",
    "Representatives in Massachusetts include Richard Neal, Jim McGovern, Lori Trahan, Joe Kennedy III, Katherine Clark, Seth Moulton, Ayanna Pressley, Stephen Lynch, and Bill Keating.");
    $President = array("Executive Branch / President",
    "The President is in charge of the executive branch.",
    "We elect a President for 4 years, and we always vote in November.",
    "The presidential candidate that wins is inagurated as the next President in the following January.",
    "If the President can no longer serve, the Vice President becomes President.",
    "If the Vice President can also no longer serve, the Speaker of the House becomes President.",
    "The President has many powers: the president is the Commander in Chief of the military, has the power to veto, and has the power to sign bills into law.",
    "The President has a Cabinet that advises the President.",
    "There are many Cabinet-level positions that include: Secretary of Agriculture, Secretary of Commerce, Secretary of Defense, Secretary of Education, Secretary of Energy, Secretary of Health and Human Services, Secretary of Homeland Security, Secretary of Housing and Urban Development, Secretary of the Interior, Secretary of Labor, Secretary of State, Secretary of Transportation, Secretary of the Treasury, Secretary of Veterans Affairs, Attorney General, and Vice President.");
    $Courts = array("Judicial Branch / The Courts",
    "The judicial branch reviews laws to ensure that they follow the Constitution.",
    "There are many local and federal courts, but the highest court in the US is the Supreme Court.", 
    "The Supreme Court has 9 justices to ensure that there are no tie votes.", 
    "The Chief Justice of the Supreme Court leads discussion among the judges and decides who writes the court’s opinions.",
    "Currently, the Chief Justice is John Roberts.");
    $System = array("The System", "There are three branches of the US government.", "The three are able to check each other and create a balance.",
    "This 'checks and balances' stops one branch of government from becoming too powerful", "This was to prevent a monarchy as was in England.",  
    "Some powers belong to the federal government: to print money, to declare war, to create an army, to make treaties", 
    "Some powers belong to the states: provide schooling and education, provide protection, provide safety, give a driver's license, and approve zoning and land use.",
    "The two major political parties are Democratic and Republican.");
    $review = array($Congress, $President, $Courts, $System);
    echo rev($review);?>
<?php echo foot()?>
</html>