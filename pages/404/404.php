<!DOCTYPE html>
<html lang="ru">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="Legko | digital">

  <title> Error 404 </title>
  <meta name="Author" content="legko.company">
  <meta name="referrer" content="always">
  <meta name="googlebot" content="noindex">
  <?php include_once './../../components/head.php'; ?>
</head>

<body>
  <?php
  $selected = null;
  include_once './../../components/navbar.php';
  ?>
  <div class="wrap-404">
    <div class="error_404">
      <div class="redirect-nav">
        <h1>404</h1>
        <h3 data-i18n="404-title">Что-то пошло не так</h3>
        <a data-i18n="404-btn" class="button-primary" href="/">Вернуться на главную</a>
      </div>
      <div class="redirect-info">
        <h2 data-i18n="404-redirect">Вы будете автоматически перенаправлены на главную страницу через</h2>
        <span class="count_404">10</span>
      </div>
    </div>
  </div>
  <script src="/scripts/lang.js"></script>
  <script src="/scripts/redirect404.js?v=<?= random_int(0, 1000000) ?>"></script>
</body>

</html>