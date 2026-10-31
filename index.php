<?php
$name = $_GET['name'] ?? $_GET['N'] ?? '';
$email = $_GET['email'] ?? $_GET['E'] ?? '';
$source = $_GET['source'] ?? $_GET['S'] ?? '';
include 'header.html';
?>

<main class="main-form">
  <form class="form" action="home.php" method="POST" enctype="multipart/form-data">
    <h2>Форма обратной связи</h2>

    <div class="form-group">
      <label for="name">ФИО:</label>
      <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($name); ?>" required>
    </div>

    <div class="form-group">
      <label for="email">Ваша почта:</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="example@mail.ru" value="<?php echo htmlspecialchars($email); ?>" required>
    </div>

    <div class="form-group">
      <label>Откуда узнали?:</label>
      <div class="radio-group">
        <label><input type="radio" id="ad" name="source" value="advertisement" <?php if ($source === 'advertisement') echo 'checked'; ?> required> Реклама из интернета</label>
        <label><input type="radio" id="friends" name="source" value="friends" <?php if ($source === 'friends') echo 'checked'; ?> required> Рассказали друзья</label>
      </div>
    </div>

    <div class="form-group">
      <label for="category">Тип обращения:</label>
      <select id="category" name="category" class="form-control" required>
        <option value="propose">Предложение</option>
        <option value="complaint">Жалоба</option>
      </select>
    </div>

    <div class="form-group-textarea">
      <label for="message">Сообщение:</label>
      <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
    </div>

    <div class="form-group">
      <label for="attachment">Вложения:</label>
      <input type="file" id="attachment" name="attachment">
    </div>

    <div class="checkbox-group">
      <input type="checkbox" id="agreement" name="agreement" required>
      <label for="agreement">Даю согласие на обработку данных</label>
    </div>

    <div class="submit-group">
      <input type="submit" value="Отправить">
    </div>
  </form>
</main>

<footer class="footer" id="contacts">
  <div class="contacts">
    <h2>Contacts</h2>
    <p>Email: ivanovmatvej4548@gmail.com</p>
    <p>Phone: +7(995)131-05-80</p>
  </div>
  <div class="footer-content">
    <p>2026. My Website about salads. All rights reserved</p>
  </div>
</footer>
</body>
</html>
