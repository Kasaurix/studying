<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>CSS, основы CSS</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body{background-color: moccasin;
    }
    h1{/*селектор тэгов чтобы поправить стандартные стили браузера или покрасить страничку*/
      text-align: center;
      color: firebrick;
    }
    #about{
      text-align: justify;
    }
    .about-small {
      font-size: 10px;
    }
    .red {
      color: red;
    }
    .yellow {
      color: yellow;
    }
    .lowercase {
      text-transform: lowercase;
    }
    p {
      text-transform: uppercase !important;
    }
    .perspiciatis {
      color: red;
    }
    .context p {
      color: white;
    }
    .children>p {
      color: cyan;
    }
    .info-big, .info-small {
      color: brown;
    }
    .about-header {
      text-align: center;
    }
   .siblings p+p{
     color: orange;
   }
   p[title="Красная"] {
     color: red;
   }
   a[href^="https"] {
     color: darkorange;
   }
   p[class$="2"] {
     color: green;
   }
   input[name*="password"] {
     color: pink;
   }
  </style>
</head>
<body>
  <h1>Портфолио</h1>
  <h2>Моя первая работа</h2>
  <h3 style="text-align:right;">Самая-самая первая работа в css</h3>
  <h2 class="about-header">Обо мне</h2>
  <p id="about" class=lowercase>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, error sed eum tenetur ad maiores. Velit incidunt est modi nemo doloribus quod in ab delectus quam cumque. Distinctio, a, cupiditate ut nam dignissimos quasi fugiat minima quis adipisci ipsum voluptatibus aliquam harum veniam odio quidem deleniti nulla nostrum accusamus cum sint quibusdam rem aperiam libero velit tempore atque voluptates amet fugit laudantium minus! At, exercitationem, beatae consequuntur aspernatur natus maxime rem voluptas obcaecati? Nisi reprehenderit inventore odio libero. </p>
  <p class="about-small red lowercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia nihil blanditiis possimus facilis tenetur aliquid velit incidunt corporis repudiandae perspiciatis! Voluptatibus, hic, nesciunt doloribus pariatur officia libero fugit voluptates possimus.</p>
   <p class="about-small yellow lowercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia nihil blanditiis possimus facilis tenetur aliquid velit incidunt corporis repudiandae <span class="perspiciatis"> perspiciatis</span>! Voluptatibus, hic, nesciunt doloribus pariatur officia libero fugit voluptates possimus.</p>
   <div class="selectors">
     <div class="context">
       <p>Материал 1</p>
       <p>Материал 2</p>
       <p>Материал 3</p>
       
       <div class="context-inner">
         <p>Материал 1.1</p>
         <p>Материал 2.1</p>
         <p>Материал 3.1</p>
       
      </div>
     </div>
     <div class="children">
       
       <p>Материал 1</p>
       <p>Материал 2</p>
       <p>Материал 3</p>
       
       <div class="children-in">
         <p>Нас не красить</p>
         <p>Нас не красить</p>
         <p>Нас не красить</p>
     </div>
     <div class="multi">
     <p class="info-big"> Инфа</p>
     <p class="info-small"> Инфа</p>
     <p class="info-big"> Инфа</p>
     <p class="info-big"> Инфа</p>
     </div>
     <div class="siblings">
       <p>Меня не красить</p>
       <p>Меня покрасить</p>
     </div>
     <div class="attr">
       <p title="Зеленая">Первая</p>
       <p title="Красная">Вторая</p>
       <p title="Синяя">Третья</p>
     <ul class="attr-links">
       <li><a href="http://colorscheme.ru/html-colors.html">Цвета</a></li>
       <li><a href="https://yandex.ru/">Яндекс</a></li>
       <li><a href="https://vk.com/">ВК</a></li>
     </ul>
     <div class="ending">
       <p class="col-2">col-2</p>
       <p class="col-4">col-4</p>
       <p class="col-2">col-2</p>
     </div>
     <form action=""> 
       <input type="text" name="userr-name" value="anonym">
       <input type="text" name="user-password" value="12345">
       <input type="text" name="password-check" value="12345">
      
     </form>
     </div>
   </div>
</body>
</html>