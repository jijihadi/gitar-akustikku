@extends('layout.main')
@section('title', 'Web')

{{-- <script type="text/javascript">


    var webaudio_tooling_obj = function () {
  
      var audioContext = new AudioContext();
  
      console.log("audio is starting up ...");
  
      var BUFF_SIZE = 16384;
  
      var audioInput = null,
          microphone_stream = null,
          gain_node = null,
          script_processor_node = null,
          script_processor_fft_node = null,
          analyserNode = null;
  
      if (!navigator.getUserMedia)
              navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia ||
                            navigator.mozGetUserMedia || navigator.msGetUserMedia;
  
      if (navigator.getUserMedia){
  
          navigator.getUserMedia({audio:true}, 
            function(stream) {
                start_microphone(stream);
            },
            function(e) {
              alert('Error capturing audio.');
            }
          );
  
      } else { alert('getUserMedia not supported in this browser.'); }
  
      // ---
  
      function show_some_data(given_typed_array, num_row_to_display, label) {
  
          var size_buffer = given_typed_array.length;
          var index = 0;
          var max_index = num_row_to_display;
  
          console.log("__________ " + label);
  
          for (; index < max_index && index < size_buffer; index += 1) {
  
              console.log(given_typed_array[index]);
          }
      }
  
      function process_microphone_buffer(event) { // invoked by event loop
  
          var i, N, inp, microphone_output_buffer;
  
          microphone_output_buffer = event.inputBuffer.getChannelData(0); // just mono - 1 channel for now
  
          // microphone_output_buffer  <-- this buffer contains current gulp of data size BUFF_SIZE
  
          show_some_data(microphone_output_buffer, 5, "from getChannelData");
      }
  
      function start_microphone(stream){
  
        gain_node = audioContext.createGain();
        gain_node.connect( audioContext.destination );
  
        microphone_stream = audioContext.createMediaStreamSource(stream);
        microphone_stream.connect(gain_node); 
  
        script_processor_node = audioContext.createScriptProcessor(BUFF_SIZE, 1, 1);
        script_processor_node.onaudioprocess = process_microphone_buffer;
  
        microphone_stream.connect(script_processor_node);
  
        // --- enable volume control for output speakers
  
        document.getElementById('volume').addEventListener('change', function() {
  
            var curr_volume = this.value;
            gain_node.gain.value = curr_volume;
  
            console.log("curr_volume ", curr_volume);
        });
  
        // --- setup FFT
  
        script_processor_fft_node = audioContext.createScriptProcessor(2048, 1, 1);
        script_processor_fft_node.connect(gain_node);
  
        analyserNode = audioContext.createAnalyser();
        analyserNode.smoothingTimeConstant = 0;
        analyserNode.fftSize = 2048;
  
        microphone_stream.connect(analyserNode);
  
        analyserNode.connect(script_processor_fft_node);
  
        script_processor_fft_node.onaudioprocess = function() {
  
          // get the average for the first channel
          var array = new Uint8Array(analyserNode.frequencyBinCount);
          analyserNode.getByteFrequencyData(array);
  
          // draw the spectrogram
          if (microphone_stream.playbackState == microphone_stream.PLAYING_STATE) {
  
              show_some_data(array, 5, "from fft");
          }
        };
      }
  
    }(); //  webaudio_tooling_obj = function()
  
  
  
  </script>
   --}}

{{-- @yield('container') --}}

@section('container')


<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h1 class="breadcrumb-heading">Tune your guitar</h1>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>Stem</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin about Area -->
    <div class="about-area section-space-top-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content">
                        <h2 class="about-title">How to tune up?</h2>
                        <p class="about-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum. Sed ut perspiciatis</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h1>Tuning Gitar <button class="btn btn-pronia-primary"> Start</button></h1>
                    <div class="contact-wrap mt-4 mb-2">

                        <form id="contact-form" class="contact-form">
                            <h2 class="text-warning" style="margin-top: -.5em">Key Input</h2>
                            <hr>

                            <div id="controls">
                                <button id="recordButton">Record</button>
                                <button id="pauseButton" disabled>Pause</button>
                                <button id="stopButton" disabled>Stop</button>
                            </div>
                            <h3>Recordings</h3>
                            <ol id="recordingsList"></ol>
                            <!-- inserting these scripts at the end to be able to use all the elements in the DOM -->
                            <script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js">
                            </script>
                            <script>
                                //webkitURL is deprecated but nevertheless 
                                URL = window.URL || window.webkitURL;
                                var gumStream;
                                //stream from getUserMedia() 
                                var rec;
                                //Recorder.js object 
                                var input;
                                //MediaStreamAudioSourceNode we'll be recording 
                                // shim for AudioContext when it's not avb. 
                                var AudioContext = window.AudioContext || window.webkitAudioContext;
                                var audioContext = new AudioContext;
                                //new audio context to help us record 
                                var recordButton = document.getElementById("recordButton");
                                var stopButton = document.getElementById("stopButton");
                                var pauseButton = document.getElementById("pauseButton");
                                //add events to those 3 buttons 
                                recordButton.addEventListener("click", startRecording);
                                stopButton.addEventListener("click", stopRecording);
                                pauseButton.addEventListener("click", pauseRecording);

                                function startRecording() {
                                    /* Simple constraints object, for more advanced audio features see

https://addpipe.com/blog/audio-constraints-getusermedia/ */

                                    var constraints = {
                                        audio: true,
                                        video: false
                                    }
                                    /* Disable the record button until we get a success or fail from getUserMedia() */

                                    recordButton.disabled = true;
                                    stopButton.disabled = false;
                                    pauseButton.disabled = false

                                    /* We're using the standard promise based getUserMedia()

                                    https://developer.mozilla.org/en-US/docs/Web/API/MediaDevices/getUserMedia */

                                    navigator.mediaDevices.getUserMedia(constraints).then(function (stream) {
                                        console.log(
                                            "getUserMedia() success, stream created, initializing Recorder.js ..."
                                        );
                                        /* assign to gumStream for later use */
                                        gumStream = stream;
                                        /* use the stream */
                                        input = audioContext.createMediaStreamSource(stream);
                                        /* Create the Recorder object and configure to record mono sound (1 channel) Recording 2 channels will double the file size */
                                        rec = new Recorder(input, {
                                            numChannels: 1
                                        })
                                        //start the recording process 
                                        rec.record()
                                        console.log("Recording started");
                                    }).catch(function (err) {
                                        //enable the record button if getUserMedia() fails 
                                        recordButton.disabled = false;
                                        stopButton.disabled = true;
                                        pauseButton.disabled = true
                                    });
                                }

                                function pauseRecording() {
                                    console.log("pauseButton clicked rec.recording=", rec.recording);
                                    if (rec.recording) {
                                        //pause 
                                        rec.stop();
                                        pauseButton.innerHTML = "Resume";
                                    } else {
                                        //resume 
                                        rec.record()
                                        pauseButton.innerHTML = "Pause";
                                    }
                                }

                                function stopRecording() {
                                    console.log("stopButton clicked");
                                    //disable the stop button, enable the record too allow for new recordings 
                                    stopButton.disabled = true;
                                    recordButton.disabled = false;
                                    pauseButton.disabled = true;
                                    //reset button just in case the recording is stopped while paused 
                                    pauseButton.innerHTML = "Pause";
                                    //tell the recorder to stop the recording 
                                    rec.stop(); //stop microphone access 
                                    gumStream.getAudioTracks()[0].stop();
                                    //create the wav blob and pass it on to createDownloadLink 
                                    rec.exportWAV(createDownloadLink);
                                }

                                function createDownloadLink(blob) {

                                    var url = URL.createObjectURL(blob);
                                    var au = document.createElement('audio');
                                    var li = document.createElement('li');
                                    var link = document.createElement('a');
                                    //add controls to the <audio> element 
                                    au.controls = true;
                                    au.src = url;
                                    //link the a element to the blob 
                                    link.href = url;
                                    link.download = new Date().toISOString() + '.wav';
                                    link.innerHTML = link.download;
                                    //add the new audio and a elements to the li element 
                                    li.appendChild(au);
                                    li.appendChild(link);
                                    
                                    //add the li element to the ordered list 
                                    recordingsList.appendChild(li);

                                    // 
                                    var dets = "Length "+ JSON.stringify(au.played) ;
                                    console.log(dets);
                                }
                            </script>
                            <?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://studio.edgeimpulse.com/v1/api/45660/jobs/classify",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => [
    "Accept: application/json",
    "x-api-key: ei_e0050bfeee3ce81e23ec498be73a5caf7ac8aa388c1ddc1fbed936f3a7a15ffd"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>


                        </form>
                        <div class="contact-info text-white" data-bg-image="assets/images/banner/5-1-1980-1080.jpg"
                            style="background-image: url(&quot;assets/images/banner/5-1-1980-1080.jpg&quot;);">
                            <h2 class="contact-title">Response</h2>
                            <hr>
                            <ul class="contact-list">
                                <li style="margin-bottom: -1em">
                                    <p class="btn btn-outline-success text-success" style="border-radius: 9em"> C </p>
                                    &nbsp;&nbsp;
                                    <p class="fs-3 fw-bold">Tuned</p>
                                </li>
                                <li style="margin-bottom: -1em">
                                    <p class="btn btn-outline-success text-success" style="border-radius: 9em"> D </p>
                                    &nbsp;&nbsp;
                                    <p class="fs-3 fw-bold">Tuned</p>
                                </li>
                                <li style="margin-bottom: -1em">
                                    <p class="btn btn-outline-success text-success" style="border-radius: 9em"> E </p>
                                    &nbsp;&nbsp;
                                    <p class="fs-3 fw-bold">Tuned</p>
                                </li>
                                <li style="margin-bottom: -1em">
                                    <p class="btn btn-outline-success text-success" style="border-radius: 9em"> F </p>
                                    &nbsp;&nbsp;
                                    <p class="fs-3 fw-bold">Tuned</p>
                                </li>
                                <li style="margin-bottom: -1em">
                                    <p class="btn btn-outline-success text-success" style="border-radius: 9em"> G </p>
                                    &nbsp;&nbsp;
                                    <p class="fs-3 fw-bold">Tuned</p>
                                </li>
                                <li style="margin-bottom: -1em">
                                    <p class="btn btn-outline-success text-success" style="border-radius: 9em"> A </p>
                                    &nbsp;&nbsp;
                                    <p class="fs-3 fw-bold">...</p>
                                </li>
                                <li style="margin-bottom: -1em">
                                    <p class="btn btn-outline-success text-success" style="border-radius: 9em"> B </p>
                                    &nbsp;&nbsp;
                                    <p class="fs-3 fw-bold">...</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-area section-space-top-95 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrap p-4">
                        <h3>Ikut berpartisipasi dengan upload chord dengan variasimu sekarang!</h3>
                        &nbsp;&nbsp;
                        <a href="{{ url('/stemadd') }}" class="text-right btn btn-pronia-primary">
                            Mulai!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End about Area -->

</main>

@endsection