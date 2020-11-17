<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>ДЗ Касауровой 221020</title>
</head>
<body>

  
  <table border="1">
    <tr>
    <th rowspan="2" width="75" height="75" valign="center">номер</th>
    <th colspan=2>теги</th>
    </tr>
    <tr>
      <th>тег</th>
      <th>значение</th>
    </tr>
    <tr>
      <td>1</td>
      <td>p</td>
      <td rowspan="4">для текста</td>
    </tr>
    <tr>
      <td>2</td>
      <td>a</td>
     </tr>
     <tr>
       <td>3</td>
      <td>b</td>
     </tr>
     <tr>
       <td>4</td>
      <td>i</td>
     </tr>
     <tr>
       <td>5</td>
      <td> table </td>
      <td>таблица</td>
     </tr>
     <tr>
       <td>6</td>
      <td>tr</td>
      <td>ряд таблицы</td>
     </tr>
     <tr>
       <td>7</td>
      <td>td</td>
      <td rowspan=2>ячейки таблицы</td>
     </tr>
     <tr>
       <td>8</td>
      <td>th</td>
     </tr>
    </table>
  
<p></p>
  
<form action="#" method=""> 
    <h3>Оставить заявку</h3>
  <div>
      <input type="text" placeholder="Иван" name="Name" value="Иван">
    </div>
 <div>
      <input type="text" placeholder="Введите e-mail" name="e-mail" value="Введите e-mail">
    </div>
    <div>
      <label>
        <input type="radio" name="type" value="Статический">
        <span>Статический</span>
      </label> 
      <label>
        <input type="radio" name="type" value="Адаптивный"checked>
        <span>Адаптивный</span>
      </label>
    </div>
    <div>
      <input type="checkbox" name="Поддержка" id="Поддержка-input">
      <label for="Поддержка-input">Поддержка</label>
      <label><br>
        <input type="checkbox" name="Дизайн" checked>
        <span>Дизайн</span>
      </label><br>
      <label>
        <input type="checkbox" name="SEO">
        <span>SEO</span>
      </label><br>
    </div>
    <div>
    <p>Загрузить ваш макет</p>
    <input type="file" value="Выберите файл">
    </div>
    <div>
    <textarea name="about" id="" cols="30" rows="10" placeholder="Ваш комментарий"></textarea>
  </div>
  <div>
    <input type="submit" value=Отправить>
    <input type="reset" value=Очистить>
  </div>
  <p></p>
</body>
   