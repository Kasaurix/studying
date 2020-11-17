<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Homework-7</title>
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bitter:wght@300&display=swap');
    
    a {
      text-decoration: none;
      color: Green;
    }
    .navigation {
      background-color: #E0FFFF;
      display: flex;
      justify-content: flex-end;
      padding: 10px;
    }
    .navigation li {
      list-style-type: none;
      margin: 0 15px;
      color: white;
      text-transform: uppercase;
    }
    .header-container {
      display: flex;
    }
    .header-image {
      flex-grow: 1;
      background-image: url("https://www.film.ru/sites/default/files/styles/thumb_1024x450/public/filefield_paths/multfilm-shou-simpsons-personazh-20th-century-fox-bart-art-3.jpg");
      background-size: cover;
      background-position: 50% 75%;
    }
    .header-aside {
      flex-basis: 350px;
      min-height: 350px;
      padding: 25px;
      text-align: justify;
    }
    .header-aside .order-button {
      margin-top: 25px;
    }
    .order-button {
      background-color: green;
      padding: 15px;
      color: White;
      font-weight: bold;
      text-transform: uppercase;
      border-radius: 5px;
      border: none;
    
    }
    
    .gallery-header {
      text-align: center;
      text-transform: uppercase;
      padding: 25px 0;
      border-top: 2px solid green;
      border-bottom: 2px solid green;
    }
    .gallery {
      display: flex;
      flex-flow: row wrap;
      align-items: center;
      justify-content: space-around;
      padding: 15px;
      min-height: 400px;
      background-color: rgb(240, 240, 240);
    }
    .gallery img {
      width: calc(25% - 2em);
      margin: 0 1em;
    }
    .copyright {
      background-color: green;
      padding: 10px 0;
      text-align: center;
      color: white;
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <ul class="navigation">
        <li><a href="#">Главная</a></li>
        <li><a href="#">О нас</a></li>
        <li><a href="#">Наши сотрудники</a></li>
        <li><a href="#">Контакты</a></li>
      </ul>
    </nav>
    <div class="header-container">
      <div class="header-image">
      </div>
      <div class="header-aside">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, architecto, sapiente, rem, provident inventore porro maxime blanditiis expedita esse aut deleniti nostrum quo! Animi, possimus, illum cupiditate debitis aliquam optio repudiandae facilis culpa dolorem suscipit nemo blanditiis dolores ex accusamus voluptatum molestias quibusdam. Porro, fuga impedit rem illum a consequatur sed similique aspernatur. Cupiditate, numquam, dignissimos soluta non quam iste voluptatem qui consequatur aperiam asperiores. Laborum, quasi vel praesentium facere doloribus soluta aliquam minima eius odit provident quisquam quidem natus. Fugit, dolore, excepturi, distinctio ipsum amet nulla rerum expedita harum provident ipsam dignissimos totam quasi magnam suscipit nam assumenda laborum modi inventore earum quo repellendus debitis esse. Vel, odio, dolor, amet, harum nisi quam sit quis sunt atque mollitia doloribus eum perferendis ea veniam optio quisquam repellendus expedita nobis in qui! Nesciunt dolorem eius ab. Reiciendis, at, dolores, molestiae minus aut dolore consectetur amet officiis vero perspiciatis maxime et quasi debitis saepe ea quisquam voluptatum ex ut cum consequuntur nihil tempore quam deleniti. Id, debitis, ipsam corrupti tempore rem dolorum voluptatum. </p>
        <button class="order-button">Подробнее</button>
      </div>
    </div>
  </header>
  <main>
    <h2 class="gallery-header">Наши сотрудники</h2>
    <div class="gallery">
      <img src="https://upload.wikimedia.org/wikipedia/ru/2/29/Bart_Simpson.gif" alt="">
      <img src="https://www.sostav.ru/app/public/images/news/2015/12/18/Screenshot_2.jpg?rand=0.2807936074677855" alt="">
      <img src="https://2x2tv.ru/upload/medialibrary/571/571631a31c6e66bfe2971dd2f9e25210.jpg" alt="">
      <img src="https://avatarko.ru/img/kartinka/4/multfilm_Simpsons_Lisa_Simpson_3564.jpg" alt="">
    </div>
  </main>
  <footer>
    <div class="copyright">
      ©Together4ever
    </div>
  </footer>
</body>
</html>