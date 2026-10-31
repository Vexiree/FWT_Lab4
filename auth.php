<?php
$auth_message = '';
$auth_class = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'admin' && $password === '12345') {
        $auth_message = 'Авторизация прошла успешно!';
        $auth_class = 'success-message';
    } else {
        $auth_message = 'Неверный логин или пароль!';
        $auth_class = 'error-message';
    }
}

include 'header.html';
?>

<main class="main-auth">
  <form class="form auth-form" action="auth.php" method="POST">
    <h2>Авторизация</h2>

    <?php if ($auth_message !== ''): ?>
      <div class="<?php echo $auth_class; ?>"><?php echo $auth_message; ?></div>
    <?php endif; ?>

    <div class="form-group">
      <label for="username">Логин:</label>
        <input type="text" id="username" name="username" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="password">Пароль:</label>
      <input type="password" id="password" name="password" class="form-control" required>
    </div>

    <div class="checkbox-group">
      <input type="checkbox" id="remember" name="remember">
      <label for="remember">Запомнить меня</label>
    </div>

    <div class="submit-group">
      <input type="submit" value="Войти">
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
