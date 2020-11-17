<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Работа с текстом. Шрифты. Спецсимволы </title>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Lobster&family=Roboto&display=swap');
  
  /*font-family: 'Lobster', cursive;
font-family: 'Roboto', sans-serif;*/

  body {
    font-family: Arial;
    font-size: 10pt;
  }
    .title {
      text-align: center;
      text-transform: uppercase;
      text-decoration: underline;
      text-shadow: 4px -1px 3px rgba(194, 196, 255, 1);
      font-family: Tahoma;
      font-size: 14pt;
    }
    .text-one {
      text-align: justify;
    }
    .bold, .italic {
      font-size: 25pt;
    }
    .bold {
      font-weight: bold;
    }
    .italic {
      font-style: italic;
    }
    .red, .green, .yellow {
      font-family:"Lobster", cursive;
      font-size: 30pt;
      font-weight: bold;
    }
    .red {
      color: rgb(255, 50, 50);
    }
    .yellow {
      color: #ffff00;
    }
    .green {
      color: hsl(107, 95%, 70%);
    }
    .title-transparent {
      color: rgba(50, 50, 255, 0.5);
    }
    .emoji {
      font-size: 40pt;
    }
  </style>
</head>
<body>
  <h1 class="title">Работа с текстом</h1>
  <p class="text-one">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, cupiditate possimus magni sint perferendis quam libero consequuntur mollitia eligendi quod iusto culpa tenetur voluptates minima exercitationem molestias illum temporibus ad dolor assumenda quia ipsam at eveniet odit numquam dignissimos omnis ex hic deleniti cumque! Iusto, voluptatibus culpa rem id aperiam aut nihil amet ratione accusamus debitis fuga qui. Modi, harum, magnam, praesentium, quod omnis ducimus obcaecati ex odio adipisci explicabo commodi placeat quaerat magni quidem in qui eum! Doloremque, corporis, praesentium, laborum excepturi voluptatum debitis ex temporibus molestiae rem sit perferendis facilis quae deleniti sint quidem! Nam, veniam assumenda fuga odit possimus ipsum nisi cum consectetur accusamus eligendi. Et, reiciendis, facere, dolores obcaecati ut tenetur ducimus neque debitis est inventore culpa cumque commodi repellendus quod sint dolorem corporis rerum in iste quae earum asperiores excepturi atque repudiandae sunt eos quidem quam nulla eligendi. Doloremque, accusantium, velit quos temporibus fugiat quod aliquid placeat et facere nobis incidunt possimus vitae fuga. Illum, tempora odit quae consectetur sint fugit soluta atque officiis libero explicabo. Ea, qui, cupiditate, ex facere asperiores vitae rerum dolor minima modi reprehenderit soluta cum unde laborum provident expedita ipsum deserunt consequuntur incidunt eos <span class="bold"> bold </span>error sunt ratione quo repudiandae saepe perspiciatis necessitatibus consectetur amet est veniam vero perferendis voluptatum corporis explicabo? Necessitatibus, sequi, suscipit, quibusdam, iusto aspernatur a voluptatibus ut architecto quo ipsum nesciunt laborum nostrum molestias perspiciatis praesentium omnis libero distinctio laudantium. Sequi, suscipit, ipsa, labore cum tenetur perferendis fugit id voluptates saepe ex dolore accusantium rem. Iure, molestiae, ut, minima, est totam sed quisquam aliquam in ratione temporibus mollitia labore asperiores expedita sapiente corporis recusandae <span class="italic"> italic </span> dolorum! Sapiente dolorum magni excepturi praesentium deserunt. Hic, voluptatum, reiciendis, nulla, minima libero fugit a laborum alias sint voluptates blanditiis consectetur quam repellendus laudantium placeat tempore numquam accusamus sed inventore commodi cum voluptate.</p>
  <h2 class="title"> Цвета</h2>
  <p>
    <span class="red">Красный</span>
    <span class="yellow">Желтый</span>
    <span class="green">Зеленый</span>
  </p>
  <h3 class="title-transparent">Прозрачный текст</h3>
  <h2 class="title">Спецсимовлы и эмодзи</h2>
  <p>&copy; &#8381; &times;</p>
  <p class="emoji">&#128104;&#8205;&#127891;</p>
  <p class="emoji">&#128105;&#8205;&#127891;</p>
  <h2>Иконки</h2>
    <p>
    <i class="fa fa-video-camera" aria-hidden="true" style="font-size: 100px"></i>
    <i class="fa fa-bath" aria-hidden="true"></i>
    <i class="fa fa-telegram" aria-hidden="true"></i>
    </p>
    <script src="https://use.fontawesome.com/e3523e849a.js"></script>
</body>
</html>