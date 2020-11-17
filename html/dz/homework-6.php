<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Pseudo</title>
   <style>
   
  .square {
    width: 45px; height: 45px;
    display: inline-block;
    margin-right: 5px;
    
   }
   .square:hover { 
     background: #7B68EE;
     
   }
   .green { 
     background: #00FF7F; 
     
   }
   .salmon { 
     background: #FA8072; 
     
   }
   
   .battery {
      width: 300px;
       height: 100px;
       border: 3px solid #000;
       margin-bottom: 15px;
       position: relative;
     }
     .battery::before, .battery::after {
       content: "";
       position: absolute;
     }
      .battery::before {
       height: 100%;
     }
      .battery::after {
       display: inline-block;
       width: 20px;
       height: 50px;
       right: -20px;
       top: 25px;
       background-color: #000;
     }
     .red::before {
       background-color: #DC143C;
       width: 30%;
       height: 100px;
       transition: width 1s ease-in-out, background-color 2s linear 3s;
     }
     .red:hover::before {
       content: "";
       display: inline-block;
       width: 300px;
       height: 100px;
       transition: width 2s ease-in-out, background-color 1s linear 1s;
       background-color: #ADFF2F;
     }
      .yellow::before {
       background-color: yellow;
       width: 50%;
     }
      .green::before {
       background-color: #7CFC00;
       width: 100%;
     }
    </style>
</head>
<body>
  <h2>Квадраты</h2>
  <div class="square green"></div>
  <div class="square salmon"></div>
  <div class="square green"></div>
  <div class="square salmon"></div>
  <div class="square green"></div>
  
  <h2>Батарейки</h2>
  <div class="battery red"></div>
  <div class="battery yellow"></div>
  <div class="battery green"></div>
</body>
</html>