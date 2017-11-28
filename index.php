<!DOCTYPE html>
<html>
<head>
  <title>ROS INNO PKT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.netpie.io/microgear.js"></script>
  <script src="raphael-2.1.4.min.js"></script>
  <script src="justgage.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://www.google.com/jsapi"></script>
  <!-- <script src="weather-icons.min.css"></script> -->
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.min.js"></script>

  <!-- (Optional) Latest compiled and minified JavaScript translation files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/i18n/defaults-*.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>
  <script src="https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
      <script src="https://www.gstatic.com/firebasejs/3.2.1/firebase.js">
    </script>
</head>
<body>
  <script>
    var config =
    {
      apiKey: "AIzaSyCWBoSd6rFV3-Hvtr0DvStb0je2-BusJ28",
      authDomain: "locationgps-e70a9.firebaseapp.com",
      databaseURL: "https://locationgps-e70a9.firebaseio.com",
      storageBucket: "locationgps-e70a9.appspot.com",
    };
    firebase.initializeApp(config);
    function getimage(index){
      var storage = firebase.storage();
      var storageRef = storage.ref();
      var input= index
      var tangRef = storageRef.child('image/'+input+'.jpg');

      tangRef.getDownloadURL().then(function(url) 
      {
        var test = url
        document.querySelector('img').src = test;
      }).catch(function(error) 
      {
        switch (error.code) 
        {
          case 'storage/object_not_found':
          break;

          case 'storage/unauthorized':
          break;

          case 'storage/canceled':
          break;

          case 'storage/unknown':
          break;
        }
      });
      var test = 'firebase_url';
      document.querySelector('img').src = test;
      console.log('Before requesting download URL');
      tangRef.getDownloadURL().then(function(url) {
        console.log('Got download URL');
      });
    }
  </script>
<div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">
      ROS INNO TOGETHER 2017 <small>EN-PKT</small>
      </h1>
    </div>
  </div>
  <div class="row">   
      <div class="col-lg-2 col-md-6">

    </div>  
    <div class="col-lg-2 col-md-6">
      <div class = "panel panel-success">
        <div class = "panel-heading">
          <h3 class = "panel-title"><center>Increase Reliability from 2 SOURCE to EDS</center></h3>
        </div>
        <div class = "panel-body">
        <center><img src=".\QRCode\2s.jpg" alt="Mountain View" width="180" height="180"></center>
        
        </div>
        <div class="panel-footer">
        <p>Phuwanart Patep Na Talang</p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-6">
      <div class = "panel panel-primary">
        <div class = "panel-heading">
          <h3 class = "panel-title"><center>Implement IoT For CP & Reduce AUC</center></h3>
        </div>
        <div class = "panel-body">
          <center><img src=".\QRCode\IoT.jpg" alt="Mountain View" width="180" height="180"></center>

        </div>
        <div class="panel-footer">
        <p>Sakchai , Baramee , Anurat , Pattanakiat</p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-6">
      <div class = "panel panel-warning">
        <div class = "panel-heading">
          <h3 class = "panel-title"><center>Improve Wi-Fi on Yacht From TWTTx</center></h3>
        </div>
        <div class = "panel-body">
          <center><img src=".\QRCode\WiFi.jpg" alt="Mountain View" width="180" height="180"></center>

        </div>
        <div class="panel-footer">
          <p>Sakchai , Baramee , Anurat , Pattanakiat</p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-6">
      <div class = "panel panel-danger">
        <div class = "panel-heading">
        <h3 class = "panel-title"><center>OLT Protection<t></center></h3>
        </div>
        <div class = "panel-body">
          <center><img src=".\QRCode\OLT.jpg" alt="Mountain View" width="180" height="180"></center>

        </div>
        <div class="panel-footer">
          <p>Norapat, Phuwanart</p>
        </div>
      </div>
    </div>
    </div>
    <div class="row"> 
              <div class="col-lg-2 col-md-6">

    </div> 
    <div class="col-lg-2 col-md-6">
      <div class = "panel panel-info">
        <div class = "panel-heading">
        <h3 class = "panel-title"><center>Application for tracking closure</center></h3>
        </div>
        <div class = "panel-body">
          <center><img src=".\QRCode\closure.png" alt="Mountain View" width="180" height="180"></center>

        </div>
        <div class="panel-footer">
          <p>Jakkapong Pansit</p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-6">
      <div class = "panel panel-danger">
        <div class = "panel-heading">
        <h3 class = "panel-title"><center>Battery Breaker Off</center></h3>
        </div>
        <div class = "panel-body">
          <center><img src=".\QRCode\batt.jpg" alt="Mountain View" width="180" height="180"></center>

        </div>
        <div class="panel-footer">
          <p>Pongthep Patthong</p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-6">
      <div class = "panel panel-success">
        <div class = "panel-heading">
        <h3 class = "panel-title"><center>APP Gu Roo MAT</center></h3>
        </div>
        <div class = "panel-body">
          <center><img src=".\QRCode\APPGuRooMAT.png" alt="Mountain View" width="180" height="180"></center>

        </div>
        <div class="panel-footer">
          <p>Nattanan Janjunthra</p>
        </div>
      </div>
    </div>  
    <div class="col-lg-2 col-md-6">
      <img src=".\icon\Infographic2.png" alt="Mountain View">  
    </div> 
  </div>
    
  
</body>
</html>