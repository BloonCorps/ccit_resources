<?php
    include_once 'access.php';
?>
<?php $title = 'Chinatown Citizenship'; include("top.php");?>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>English Test</h1>
      <p class="lead">This test consists of 10 questions randomly pulled out of a test bank! Refresh to get a new set of 10 questions.</p>
    </div>
  </header>
  <!-- Page Content -->
  <div class="container">
    <br/>
    <p> Below are 10 multiple choice questions. Select a correct answer (there can be more than one). </p>
    <p>If your answer is incorrect, the answer choice will become red. Try again!</p>
    <?php
    $sql = "SELECT * FROM English\n"
    . "ORDER BY RAND()\n"
    . "LIMIT 10";
    $result = mysqli_query($conn, $sql);
    $datas = array();
    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $datas[] = $row;
        }
    }
    $i = 0;
    foreach ($datas as $data){ ?>
        <h5> <?php echo $data['Question']; ?> </h5> 
        <?php $answers = array('C1', 'C2', 'C3', 'I1', 'I2', 'I3', 'I4');
        shuffle($answers);
        foreach ($answers as $answer) { ?>
            <?php if ($data[$answer] != "") { ?> 
                <button class = "answerchoice" id="<? echo $answer.$i ?>"><?php echo $data[$answer]; ?></button>
                <div style="line-height:20%;">
                <br>
                </div>
                <script>
                if ("<? echo $answer.$i ?>".substring(0, 1) == "C"){
                    document.getElementById("<?= $answer.$i ?>").onclick = function() {
                    document.getElementById("<? echo $answer.$i ?>").style.backgroundColor = "#abebbd"; }}
                else {
                    document.getElementById("<?= $answer.$i ?>").onclick = function() {
                    document.getElementById("<? echo $answer.$i ?>").style.backgroundColor = "#ffcfcf"; }}
            </script> 
        <?php }; }; ?> 
    <br>
    <?php $i+=1; }; ?>
    </div>
    <br></br>
    
<?php include("bottom.php");?>