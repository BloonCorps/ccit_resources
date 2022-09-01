<?php
    include '../access.php';

function rev($array) { ob_start(); ?>
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
        <?php $incr = 1;?>
        <?php foreach ($array as $topic){?>
            <div class="col-lg-8 mx-auto">
            <h5 data-toggle="tooltip" title="" class="dots" id="<? echo $incr ?>" onclick="say('<? echo $incr ?>')"><?php echo $topic[0]?></h5> <br>
            <?php $incr++; ?>
            <ul>
            <?php for ($i = 1; $i < count($topic); $i++) { ?>
                <li><a data-toggle="tooltip" title="" class="dots" id="<? echo $incr ?>" onclick="say('<? echo $incr ?>')"><?php echo $topic[$i]?></a></li>
                <?php $incr++; ?>
            <?php } ?>
            </ul>
            <br></br>
            </div>
        <?php } ?>
      </div>  
      <div class="row">
      
        <div class="col-lg-8 mx-auto">
            <button class="btn btn-light btn-xs" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="float:right; padding:5px">
                <img src="../images/translate.png">
            </button>
            <!--<div class="collapse" id="collapseExample">
                <div class="card card-body" style="font-size:6px; padding:8px">
                THIS SERVICE MAY CONTAIN TRANSLATIONS POWERED BY GOOGLE. GOOGLE DISCLAIMS ALL WARRANTIES RELATED TO THE TRANSLATIONS, EXPRESS OR IMPLIED, INCLUDING ANY WARRANTIES OF ACCURACY, RELIABILITY, AND ANY IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
                </div>
            </div>-->
        </div>
      </div>
    </div>
    <script>
        function conv(){
            <?php for ($i = 1 ; $i < $incr ; $i++) { ?>
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
    </section>
<?php return ob_get_clean(); } ?>