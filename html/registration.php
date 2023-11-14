<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Регистрация</title>
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
      <div class="logo"><a href="index.html">
        <img src="../materials/logo.png" alt="Логотип">
      </a></div>
        <nav>
          <ul>
            <li><a href="index.html">Главная</a></li>
            <li><a href="trans.html">Наш транспорт</a></li>
            <li><a href="search_tours.html">Поиск туров</a></li>
            <li><a href="contacts.html">Контакты</a></li>
          </ul>
        </nav>
        <div class="user-controls">
          <div class="input-group">
            <input type="text" placeholder="Логин" class="input-field">
          </div>
          <div class="input-group">
            <input type="password" placeholder="Пароль" class="input-field">
          </div>
          <button class="button">Войти</button>
          <a href="registration.html"><button class="button">Регистрация</button></a>
        </div>
      </header>

<section class="registration-form">
<h2>Заполните данные для регистрации</h2>
<form>
<div class="form-group">
  <label for="username">Имя пользователя:</label>
  <input type="text" id="username" name="username" required>
</div>

<div class="form-group">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>
</div>

<div class="form-group">
  <label for="password">Пароль:</label>
  <input type="password" id="password" name="password" required>
</div>

<div class="form-group">
  <label for="confirm-password">Подтверждение пароля:</label>
  <input type="password" id="confirm-password" name="confirm-password" required>
</div>

    <button type="submit">Зарегистрироваться</button>
  </form>
</section>

<footer>
    <table border="0" width="900" cellpadding="5" cellpadding="0" align="center">
      <tr>
        <td colspan="4" bgcolor="#060606" align="center" style="color: white;">
          &copy; 2023 Pegas Touristik. Все права защищены.
        </td>
      </tr>
    </table>
</footer>
</body>
</html>
