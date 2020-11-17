<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Homework 30.10.2020</title>
  <style>
      div[class*="col"] {
        min-height: 100px;
        border: 2px solid rgb(173, 255, 47);
        box-sizing: border-box;
      }
     div[class*="col"]:nth-child(1) {
        background-color:#800000;
      }
      div[class*="col"]:nth-child(2) {
        background-color: #A52A2A;
      }
      div[class*="col"]:nth-child(3) {
        background-color: #A0522D;
      }
      div[class*="col"]:nth-child(4) {
        background-color: #8B4513;
      }
      div[class*="col"]:nth-child(5) {
        background-color: #D2691E;
      }
      div[class*="col"]:nth-child(6) {
        background-color: #CD853F;
      }
      div[class*="col"]:nth-child(7) {
        background-color: #B8860B;
      }
      div[class*="col"]:nth-child(8) {
        background-color: #DAA520;
      }
      .button {
      color: white;
  }
  </style>
</head>
<body>
   <div class="container">
        
      <div class="row">
        <div class="col-12 order-1 col-sm-12 col-md-3 col-lg-12 order-lg-1">1</div>
        <div class="col-12 order-2 d-block col-sm-0 d-sm-none d-md-block col-md-8 col-lg-6 d-lg-block order-lg-3">2
        
          <div class="container d-none d-sm-none d-md-none d-lg-block mb-2">
            <div class="row">
              <div class="col-2">2.1</div>
              <div class="col-8">2.2</div>
              <div class="col-2">2.3</div>
              <div class="col-2">2.4</div>
              <div class="col-10">2.5</div>
              <div class="col-8">2.6</div>
              <div class="col-4">2.7</div>
            </div>
          </div>
          
        </div>
        <div class="col-12 order-3 d-block col-sm-0 d-sm-none col-md-1 d-md-block col-lg-6 order-lg-2 d-lg-block">3</div>
        <div class="col-12 order-4 col-sm-4 col-md-4 col-lg-5 order-lg-6">4</div>
        <div class="col-12 order-5 offset-0 col-sm-8 col-md-4 offset-md-4 col-lg-2 order-lg-4 offset-lg-0">5
          <button type="button" class="btn center-block d-none d-lg-block">Кликни меня</button>        
        </div>
        <div class="col-12 order-6 col-sm-8 col-md-5 col-lg-2 order-lg-5">6</div>
        <div class="col-12 order-7 d-sm-none offset-0 col-sm-2 d-md-block col-md-3 offset-md-1 col-lg-1 order-lg-7 offset-lg-0">7</div>
        <div class="col-12 order-8 offset-0 col-sm-2 offset-sm-2 col-md-1 offset-md-2 col-lg-2 order-lg-8 offset-lg-0">8</div>
      </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>