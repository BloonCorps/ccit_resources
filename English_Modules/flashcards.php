<?php
    include '../access.php';

function cards($num, $conn) { ob_start(); ?>
    <section id="flashcard">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h3>Flashcards</h3>
          <div id="flashCardControls" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <button class="btn flashcard" onclick="switchFlash('')" id="card" answer="Use the left and right arrows to switch to another card." question="Flashcards Instructions: Click this card to flip.">
                  Flashcards Instructions: <br /> Click this card to flip.
                </button>
              </div>
            <?php
              $sql = mysqli_query($conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
              $sql = "SELECT * FROM English WHERE Unit = $num";
              $result = mysqli_query($conn, $sql);
              $datas = array();
              if (mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      $datas[] = $row;
                  }
              }
              $i = 0;
              foreach ($datas as $data){ 
                  $answers = array('C2', 'C3');
                  $ans = $data['C1'];
                  foreach ($answers as $answer) { ?>
                      <?php if ($data[$answer] != "") { 
                        $ans = $ans . ", " . $data[$answer]; }; 
                  }; ?>
                <div class="carousel-item" >
                <button class="btn flashcard" onclick="switchFlash('<?php echo $i ?>')" id="card<?php echo $i ?>" answer="<?php echo $ans ?>" question="<?php echo $data['Question']; ?>">
                <?php echo $data['Question']; ?>
                </button>
                </div>
            <?php $i+=1; }; ?>
            </div>

            <a class="carousel-control-prev" href="#flashCardControls" role="button" data-slide="prev"
              data-interval="false">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#flashCardControls" role="button" data-slide="next"
              data-interval="false">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    function switchFlash(k) {
      var element = document.getElementById('card'+k);
      //alert(element.innerHTML);
      if (element.innerHTML == element.getAttribute('answer')) {
        element.innerHTML = element.getAttribute('question');
        element.style.backgroundColor = "#f5f5f5";
        element.style.color = "#0275d8";
      } else {
        element.innerHTML = element.getAttribute('answer');
        element.style.backgroundColor = "#0275d8";
        element.style.color = "#f5f5f5";
      }
    }
  </script>
<?php return ob_get_clean(); } ?>
