let apiKey = "AIzaSyD16owbIkDlL8yQ-yisKK8QEH25u6xNjJI"; //how do we hide the key?
    
function fetchChinese(idchange, str) {

    let baseUrl = "https://translation.googleapis.com/language/translate/v2?key=";
    let params = "&q="+str+"&target=zh";

    var xhttp = new XMLHttpRequest();
    let url = baseUrl + apiKey + params;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
       
        //document.getElementById('sad'+idchange).title = myObj.data.translations[0].translatedText;
        $("#"+idchange).attr('data-original-title', myObj.data.translations[0].translatedText);
        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}



function fetchSpeech(str) {
    const request = {
        "input": {"text": "str"},
        "voice": {"languageCode": 'en-US', "ssmlGender": 'NEUTRAL'},
        "audioConfig": {"audioEncoding": 'MP3', "speakingRate": 0.5}
    };
    var xhttp = new XMLHttpRequest();
    let url = "https://texttospeech.googleapis.com/v1/text:synthesize/key="+apiKey;
    xhttp.open("POST", url, true);
    xhttp.send(request);

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myObj = JSON.parse(this.responseText);
            alert(myObj.audioContent);
        } else if (this.readyState == 4) {
            alert(this.status);
            myObj = JSON.parse(this.responseText);
            alert(myObj.audioContent);
        }
        else {
            alert("Error");
        }
    };
}

/*

const projectId = 'articulate-case-277023';

const {Translate} = require('@google-cloud/translate').v2;
const textToSpeech = require('@google-cloud/text-to-speech');
const fs = require('fs');
const util = require('util');

const translate = new Translate({projectId});
const client = new textToSpeech.TextToSpeechClient();

async function speech(str) {

  const request = {

    input: {text: str},

    voice: {languageCode: 'en-US', ssmlGender: 'NEUTRAL'},

    audioConfig: {audioEncoding: 'MP3'},

  };

  const [response] = await client.synthesizeSpeech(request);

  const writeFile = util.promisify(fs.writeFile);

  await writeFile('output.mp3', response.audioContent, 'binary');

  console.log('Audio content written to file: output.mp3');

}

speech("I am hungry. Chicken is good!");
*/