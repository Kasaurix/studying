<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Таблицы и формы</title>
</head>
<body>
  <table border='1'>
    <thead> <!--Шапка-->
      <tr> <!--Table row - Строка таблицы-->
        <th> # п/п </th> <!--Table header - ячейка заголовка-->
        <th> Тип проекта </th>
        <th> Количество </th>
      </tr>
    </thead>
    <tbody> <!--Тело таблицы-->
      <tr>
        <td width=75 height=75 valign=top>1</td> <!--Table data - ячейка таблицы-->
        <td>Сайт (статичный)</td>
        <td>10</td>
      </tr>
      <tr>
        <td width=75 height=75>2</td>
        <td>Сайт (адаптивный)</td>
        <td>15</td>
      </tr>
      <tr>
        <td width=75 height=75>3</td>
        <td>Веб-приложение</td>
        <td>3</td>
      </tr>
    </tbody>
  </table>
  <!--Таблицы без thead и tbody-->
  <table border=1>
    <tr>Заголовок 1</tr>
    <tr>Заголовок 2</tr>
    <tr>Заголовок 3</tr>
    <tr>
        <th> Значение 1 </th> <!--Table header - ячейка заголовка-->
        <th> Значение 2 </th>
        <th> Значение 3 </th>
    </tr>
    <tr>
       <th> Значение 1.1 </th> <!--Table header - ячейка заголовка-->
        <th> Значение 2.1 </th>
        <th> Значение 3.1 </th>
    </tr>
    <tr>
      <th> Значение 1.2 </th> <!--Table header - ячейка заголовка-->
        <th> Значение 2.2 </th>
        <th> Значение 3.2 </th>
    </tr>
  </table>
  <table>
    <tr></tr>
  </table>
  <p></p>
  <!--Формы-->
  <h3>Регистрация</h3>
  <form action="#" method=""> 
  <!--файл обработчик, куда отправлена форма, method - метод обработки формы по протоколу http (GET виден в адресной строке для получения данных по отправленному запросу, POST формы регистрации и аутентификации)-->
  <div>
  <p>Введите логин</p>
  <span>Логин</span>
  <input type="text"placeholder='Введите логин' name=login value=xxxблаблаблаxxx>
  </div>
  <div>
     <p>Введите пароль</p>
  
  <input type="password"placeholder='Введите пароль' name=login>
  </div>
  <div>
  <input type="password"placeholder='Повторите пароль' name=login>
  </div>
  <div>
    <p>Выберите языки, которые знаете</p>
    <input type="checkbox" name=html id=html-input checked>
    <label for=html-input>HTML</label>
    <label>
    <input type="checkbox" name=css>
    <span>CSS</span>
    </label>
    <label>
      <input type="checkbox" name=js>
      <span>JavaScript</span>
    </label>
  </div>
  <div>
    <p>Выберите фреймворк/библиотеку</p>
    <label>
      <input type="radio" name=framework value=vue checked>
      <span>Vue</span>
    </label>
    <label>
      <input type="radio"name=framework value=react>
      <span>React</span>
    </label>
    <label>
      <input type="radio" name=framework value=angular>
      <span>Angular</span>
    </label>
  </div>
  <div>
    <textarea name="about" id="" cols="30" rows="10" placeholder="Напишите немного о себе"></textarea>
  </div>
  <div>
    <input type="file" value="Выберите файл">
  </div>
  <div>
  <select name="payment" >
    <option value=cash>Наличными</option>
    <option value=card>Картой</option>
    <option value=coupon>Купоном</option>
  </select>
  </div>
  <div>
    <input type="button" value="Ненужная кнопка">
  </div>
  <div>
    <input type="reset" value=Очистить>
  </div>
  <div>
    <input type="submit" value=Зарегистрироваться>
  </div>
</form>
</body>
</html>