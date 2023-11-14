<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Контакты</title>
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

  <div align = "center"><h1>Контакты</h1></div>

  <section class="contact-info">
    
    <div>
        <h2>Информация о компании</h2>
        <p>Наша компания предлагает туры по всему миру. Мы заботимся о вашем комфорте и безопасности.</p>
        <p><strong>Телефон:</strong> +7(999)434-78-90</p>
        <p><strong>Адрес:</strong> Россия, г.Москва, ул.Лубянский пр-д, д.15/2</p>
      </div>
      <div>
        <h2>Мы на карте</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17960.935332056448!2d37.5945872068405!3d55.75647117288336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b5470e8611e739%3A0xef721ef78872ff71!2z0J_QtdCz0LDRgSDQotGD0YDQuNGB0YLQuNC6!5e0!3m2!1sru!2sru!4v1697211963481!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
  </section>

  <section class="contact-form">
    <h2>Обратная связь</h2>
    <form>
      <label for="name">Имя:</label>
      <input type="text" id="name" name="name" required>

      <label for="phone">Телефон:</label>
      <input type="tel" id="phone" name="phone" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="comment">Комментарий:</label>
      <textarea id="comment" name="comment" rows="4" required></textarea>

      <button type="submit">Отправить</button>
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
