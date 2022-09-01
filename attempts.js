const projectId = 'articulate-case-277023';

const {Translate} = require('@google-cloud/translate').v2;
const textToSpeech = require('@google-cloud/text-to-speech');
const fs = require('fs');
const util = require('util');

const translate = new Translate({projectId});
const client = new textToSpeech.TextToSpeechClient();

async function tr(str) {
  
    const target = 'zh';

    const [translation] = await translate.translate(str, target);

    console.log(`Translation: ${translation}`);

  }

  tr("chicken");

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