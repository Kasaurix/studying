<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Traffic light</title>
  <style>
  
    .container {
    display: inline-block;
    position: absolute;
    top: 50%;
    left: 50%;
    background-color: lightgrey;
    border: 3px solid grey;
    border-radius: 19px;
    padding: 25px;
    transform: translate(-50%, -50%);
  }
    
  .signal {
      width: 150px;
      height: 150px;
      border: 2px solid #000;
      border-radius: 50%;
      box-shadow: inset 0 0 24px 5px rgba(0,0,0,40%);
      margin: 15px;
  }
    
  .red {
    background-color: darkred;
  }
  
  .yellow {
    background-color: yellow;
  }
  
  .green {
    background-color: darkgreen;
  }
    
</style>
</head>
<body>
  <div class="container">
    <div class="signal red"></div>
    <div class="signal yellow"></div>
    <div class="signal green"></div>
  </div>
</body>
</html>