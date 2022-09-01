<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
    include 'review.php';

?>
<!DOCTYPE html>

<?php echo head("Module 3")?>

<header style="background-image:url('../images/ushistory_banner.png')">
  <div class="container text-center">
    <h1 style = "font-family: 'Comfortaa', cursive;">The Constitution</h1>
  </div>
</header>

<?php echo cards(3, $conn)?>

<?php 
    $Founding = array("Founding of the Constitution",
    "The Constitution was written in 1787, when the founding fathers met at the Constitutional Convention.",
    "People who supported the Constitution included James Madison, Alexander Hamilton, John Jay, and Publius.",
    "These people also wrote the Federalist Papers.",
    "The first three words of the Constitution are 'We the people' to ensure that the government is run by people not by royalty, as in England.",
    "The purpose of the Constitution is to set up the government, define the government and its roles, and protect basic rights of Americans.");
    $Changes = array("Changes to the Constitution",
    "Changes to the Constitution are considered amendments.",
    "The first ten of these amendments are called The Bill of Rights.",
    "The first amendment includes the freedoms of speech, religion, assembly, press, and petition the government.",
    "The freedom of religion guaranteed in the first amendment states that you can practice any religion or not practice a religion.",
    "There are a total of 27 amendments. 4 of these 27 are about who can vote.");
    $WhoVotes = array("Who Can Vote?",
    "The twenty-sixth amendment states that citizens 18 and older can vote.", 
    "The twenty-fourth amendment states that you don't have to pay to vote.", 
    "The nineteenth amendment states that any citizen can vote (women and men can both vote).", 
    "The fifteenth amendment states that a male citizen of any race can vote."
    );
    $System = array("Systems of the United States", "The economic system of the US is a capitalist or market economy.",
    "The 'rule of law' states that everyone must follow the law, including the president, all leaders, and in general, all people." );
    $review = array($Founding, $Changes, $WhoVotes, $System);
    echo rev($review);?>

<?php echo foot()?>

</html>