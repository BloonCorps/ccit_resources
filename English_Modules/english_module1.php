<?php
    include 'flashcards.php';
    include 'header.php';
    include 'review.php';
    include_once '../access.php'; ?>
<!DOCTYPE html>
<?php echo head("Module 1")?>

<header style="background-image:url('../images/others.png')">
  <div class="container text-center">
    <h1 style = "font-family: 'Comfortaa', cursive;">Numbers and Dates</h1>
    <p class="lead" style = "font-family: 'Comfortaa', cursive;">Ordinal and Cardinal Numbers</p>
  </div>
</header>

<?php echo cards(1, $conn)?>

<section id="Review" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
        <h3>Review</h3>
            <div class="alert alert-secondary text-center" role="alert">
            Click any text below to hear the text said aloud. (点击下面的句子，可以听到句子的英语发音.)
          
            <!-- </div>
            <button type="button" class="btn btn-outline-secondary" onclick="conv()" style="width:100%">Click to allow mouseover translations. (先点此按钮，然后将鼠标放在任何需要翻译的句子上.)</button> -->
            <br></br> 
            
        </div>
        <div class="col-lg-8 mx-auto">

          <h3 data-toggle="tooltip" title="" class="dots" id="58" onclick="say('58')">Ordinal Numbers</h3>
          <table class="table table-borderless three-col">

            <tbody>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="1" onclick="say('1')">One</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="2" onclick="say('2')">Eleven</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="3" onclick="say('3')">Thirty</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="4" onclick="say('4')">Two</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="5" onclick="say('5')">Twelve</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="6" onclick="say('6')">Forty</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="7" onclick="say('7')">Three</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="8" onclick="say('8')">Thirteen</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="9" onclick="say('9')">Fifty</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="10" onclick="say('10')">Four</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="11" onclick="say('11')">Fourteen</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="12" onclick="say('12')">Sixty</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="13" onclick="say('13')">Five</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="14" onclick="say('14')">Fifteen</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="15" onclick="say('15')">Seventy</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="16" onclick="say('16')">Six</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="17" onclick="say('17')">Sixteen</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="18" onclick="say('18')">Eighty</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="19" onclick="say('19')">Seven</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="20" onclick="say('20')">Seventeen</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="21" onclick="say('21')">Ninety</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="22" onclick="say('22')">Eight</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="23" onclick="say('23')">Eighteen</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="24" onclick="say('24')">One Hundred</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="25" onclick="say('25')">Nine</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="26" onclick="say('26')">Nineteen</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="27" onclick="say('27')">One Thousand</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="28" onclick="say('28')">Ten</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="29" onclick="say('29')">Twenty</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="30" onclick="say('30')">One Million</a></td>
              </tr>
            </tbody>
          </table>
          <h3 data-toggle="tooltip" title="" class="dots" id="59" onclick="say('59')">Month</h3>
          <table class="table table-borderless two-col">

            <tbody>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="31" onclick="say('31')">January</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="32" onclick="say('32')">July</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="33" onclick="say('33')">February</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="34" onclick="say('34')">August</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="35" onclick="say('35')">March</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="36" onclick="say('36')">September</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="37" onclick="say('37')">April</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="38" onclick="say('38')">October</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="39" onclick="say('39')">May</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="40" onclick="say('40')">November</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="41" onclick="say('41')">June</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="42" onclick="say('42')">December</a></td>
              </tr>
            </tbody>
          </table>
          <p><a data-toggle="tooltip" title="" class="dots" id="43" onclick="say('43')">The general order is:</a> <a data-toggle="tooltip"
              title="" class="dots" id="44" onclick="say('44')">Month</a> <a data-toggle="tooltip" title="" class="dots" id="45" onclick="say('45')">Date</a>, <a
              data-toggle="tooltip" title="" class="dots" id="46" onclick="say('46')">Year</a>.
          </p>
          <p><a data-toggle="tooltip" title="" class="dots" id="47" onclick="say('47')">Use</a> <a data-toggle="tooltip" title=""
              class="dots" id="48" onclick="say('48')">ordinal numbers</a> when saying <a data-toggle="tooltip" title="" class="dots" id="49" onclick="say('49')">dates</a>.
          </p>
          <p><a data-toggle="tooltip" title="" class="dots" id="50" onclick="say('50')">Years are generally pronounced in two pairs. </a>
          </p>
          <br>
          <p><a data-toggle="tooltip" title="" class="dots" id="51" onclick="say('51')">Examples - </a><br>
            <ul>
              <li>
                <a data-toggle="tooltip" title="" class="dots" id="52" onclick="say('52')">March 24, 1979</a> (March twenty-fourth,
                nineteen seventy-nine)
              </li>
              <li>
                <a data-toggle="tooltip" title="" class="dots" id="53" onclick="say('53')">I was born on </a> <a data-toggle="tooltip"
                  title="" class="dots" id="54" onclick="say('54')">November 15, 2005</a> (November fifteenth, two thousand five).
              </li>
            </ul>
          </p>
          <br>
          <h3 data-toggle="tooltip" title="" class="dots" id="60" onclick="say('60')">Verbal Exercises</h3>
          <br>
          <p>
            <a data-toggle="tooltip" title="" class="dots" id="55" onclick="say('55')">I cannot work April thirtieth.</a>
            <br><br>
            <a data-toggle="tooltip" title="" class="dots" id="56" onclick="say('56')">What plans do you have for December seventh? </a>
            <br><br>
            <a data-toggle="tooltip" title="" class="dots" id="57" onclick="say('57')">My birthday is ________ </a>
            <br></br>
          </p>
        </div>
      </div>
    <div class="row">
      
      <div class="col-lg-8 mx-auto">
          <button class="btn btn-light btn-xs" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="float:right; padding:5px">
              <img src="../images/translate.png">
          </button>
          <div class="collapse" id="collapseExample">
              <div class="card card-body" style="font-size:6px; padding:8px">
              THIS SERVICE MAY CONTAIN TRANSLATIONS POWERED BY GOOGLE. GOOGLE DISCLAIMS ALL WARRANTIES RELATED TO THE TRANSLATIONS, EXPRESS OR IMPLIED, INCLUDING ANY WARRANTIES OF ACCURACY, RELIABILITY, AND ANY IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
              </div>
          </div>
      </div>
    </div>
  </div>
  </div>
</section>
<script>
  function conv(){
      <?php for ($i = 1 ; $i < 60 ; $i++) { ?>
          fetchChinese('<?php echo $i ?>', document.getElementById('<?php echo $i ?>').innerHTML);
      <?php } ?>
      $('[data-toggle="tooltip"]').tooltip();
  }
  function say( k ){
            var synth = window.speechSynthesis;
            var speech = new SpeechSynthesisUtterance(document.getElementById(''+k).innerHTML);
            speech.lang = 'en-US';
            synth.speak(speech);
  }
</script>
<?php echo foot()?>
</html>
