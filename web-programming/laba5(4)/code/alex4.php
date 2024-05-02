<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab_4alex</title>
</head>
<body>
<h1>The table</h1>

<form action="save.php" method="POST">
    <label for="email">Почта</label>
    <input type="email" name="email" required>

    <label for="title">Название</label>
    <input type="text" name="title" required>

    <label for="categories">Категория</label>
    <select name="categories" required>
        <option value="clothes">Одежда</option>
        <option value="groceries">Продукты</option>
        <option value="avto">Автомобили</option>
    </select><br>

    <label for="description">Описание:</label><br>
    <textarea name="text" rows="10" cols="54" required></textarea><br>

    <button type="submit">Отправить</button>
</form>
</form>
<div id="table">
    <table>
        <thead>
        <tr>
            <th>Почта</th>
            <th>Название</th>
            <th>Категория</th>
            <th>Описание</th>
        </tr>
        </thead>
        <tbody>
        
        </tbody>
    </table>
</div>
</body>
</html>