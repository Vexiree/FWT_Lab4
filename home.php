<?php
include 'header.html';

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$source = $_POST['source'] ?? '';
$category = $_POST['category'] ?? '';
$message = $_POST['message'] ?? '';

$attachment = '';
if (!empty($_FILES['attachment']['name'])) {
    $attachment = $_FILES['attachment']['name'];
} elseif (!empty($_POST['attachment'])) {
    $attachment = $_POST['attachment'];
}
?>

<main class="main-form">
  <div class="response-card">
    <h2>Ответ на обращение</h2>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
        echo '<p>Здравствуйте, ' . htmlspecialchars($name) . '</p>';

        if ($category === 'propose') {
            echo '<p>Спасибо за ваше предложение:</p>';
            echo '<textarea readonly>' . htmlspecialchars($message) . '</textarea>';
        } else {
            echo '<p>Мы рассмотрим Вашу жалобу:</p>';
            echo '<textarea readonly>' . htmlspecialchars($message) . '</textarea>';
        }

        if ($attachment !== '') {
            echo '<p>Вы приложили следующий файл: ' . htmlspecialchars($attachment) . '</p>';
        }

        echo '<a class="btn" href="index.php?name=' . urlencode($name) . '&email=' . urlencode($email) . '&source=' . urlencode($source) . '">Заполнить снова</a>';
    } else {
        echo '<p>Форма не была отправлена.</p>';
        echo '<a class="btn" href="index.php">Перейти к форме</a>';
    }
    ?>
  </div>
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
