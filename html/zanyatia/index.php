<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8"> <!--Устанавливаем кодировку-->
  <title>Моя первая страница</title> <!--Устанавливаем название вкладки-->
</head>
<body>
  <h1>Моя страница</h1> <!--header - заголовок h1-h6--> <!--H1 можно использовать только один раз на странице-->
  <h3>Касаурова К.П.</h3> <!-- Блочный тэг - занимает всю ширину страницы-->
  <div>
    <span>Мы</span> <!--Тэг span не подразумевает форматирования-->
    <span>строчные</span>
    <span>элементы</span>
    <span>Будем дальше вставать в строку</span>
    <br> <!--Добавляем абзац, но лучше его избегать-->
    <span>Строчный элемент на следующей строке</span>
    <!--Для разделения элементов лучше пользоваться блочностью тэгов-->
    <p>Первый абзац</p> <!--Параграф - блочный тэг для текста-->
    <p>Второй абзац</p>
  </div>
  <div> <!--Блочный тэг<-->
    <div>
    <img src="https://i.pinimg.com/originals/29/de/9e/29de9e5b8f61c4f2ba6ba8538eecb029.png" alt="" height="200" width "200"> <!--source - источник; Абсолютная ссылка--> 
    </div>
    <div>
    <img src="img/igrushka-bublik-01.jpg" alt="" height="200" width "200">
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio esse id cum perspiciatis amet. Rem, provident, delectus, velit, fuga facere maxime ratione id necessitatibus error minima omnis aliquid reiciendis ipsam doloribus ullam aut porro repellendus dicta est libero quod dolor corrupti ipsum optio sit enim ipsa placeat nobis hic tenetur. Unde, pariatur accusamus ipsa eum sit adipisci illum voluptates error ad atque repellat aperiam mollitia eveniet tempore nesciunt impedit quas iure voluptate accusantium corrupti quod provident ipsum hic iste autem quia doloremque animi delectus veniam. Illo, velit, laudantium ad qui quisquam aliquid inventore expedita corporis cumque neque blanditiis veniam beatae praesentium quasi tempore animi eos eum fugit dicta necessitatibus omnis corrupti non voluptatibus voluptates ex repellendus dolor iste excepturi dolorum ipsa sed totam numquam doloremque! Distinctio, eius, optio, doloremque, saepe vero eligendi dolore et voluptate cum a commodi quam eveniet quos non vitae hic magnam! Suscipit, quae ipsam alias necessitatibus.</p> <!--После нажатия tab - сгенерирует текст 150 слов-->
  </div>
  <div>
    <h3>Ссылки</h3>
    <a href="https://vk.com" target="blank">Вконтакте</a> <!--Ссылки-->
    <a href="about.php">Страница обо мне</a>
  </div>
  <div>
      <h3>Списки</h3>
      <h5>Ненумерованный список</h5>
      <ul> <!--Unordered list-->
        <li>Элемент списка</li> <!--List item-->
        <li>Элемент списка</li> 
        <li>Элемент списка</li> 
        <li>Элемент списка</li> 
        
      </ul>
      <h5>Нумерованный список</h5>
      <ol> <!--Ordered list-->
        <li>Элемент списка</li> <!--List item-->
        <li>Элемент списка</li> 
        <li>Элемент списка</li> 
        <li>Элемент списка</li> 
          <ul>
          <li>Подэлемент</li>
          </ul>
      </ol>
  </div>
</body>
</html>