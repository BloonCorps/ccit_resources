<?php
    include '../access.php';

function cards($num, $conn) { ob_start(); ?>
    <html>
    <section id="flashcard">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h3>Flashcards</h3>
          <div id="flashCardControls" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="flip-card d-block w-100">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <h1 class="question">Flashcards Instructions: <br /> Mouse over this card to flip.</h1>
                    </div>
                    <div class="flip-card-back">
                      <p class="answer">Use the left and right arrows to switch to another card.</p>
                    </div>
                  </div>
                </div>
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
                <div class="carousel-item">
                  <div class="flip-card d-block w-100">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <h1 class="question" style="padding: 100px;"><?php echo $data['Question']; ?></h1>
                      </div>
                      <div class="flip-card-back">
                        <p class="answer" style="padding: 120px;"><?php echo $ans ?></p>
                      </div>
                    </div>
                  </div>
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
  </html>
<?php return ob_get_clean(); } ?>
