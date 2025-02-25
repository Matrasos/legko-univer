<!DOCTYPE html>
<html lang="ru">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'>

  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="legko.company">

  <link rel="alternate" hreflang="ru-KZ" href="https://legko.company/feedback">
  <link rel="alternate" hreflang="en-KZ" href="https://legko.company/feedback/en">
  <link rel="alternate" hreflang="de-KZ" href="https://legko.company/feedback/de">

  <meta name="author" content="legko.company">
  <meta name="referrer" content="always">
  <link href="https://legko.company" rel="canonical">

  <title> Feedback | LEGKO </title>

  <meta property="og:locale" content="de_KZ">
  <meta property="og:title" content="Feedback">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://legko.company/feedback">
  <meta property="og:site_name" content="LEGKO | Feedback">
  <meta property="og:image" content="/assets/favicon/open_graph_img_de.png">

  <meta property="og:description"
    content="Haben Sie Fragen oder Vorschläge? Haben Sie ein Konzept oder ein Produktbeispiel? Wir sind bereit, eine mögliche Zusammenarbeit zu prüfen und unsere Dienstleistungen für die Entwicklung, Gestaltung und Vermarktung Ihres Projekts auf internationaler Ebene anzubieten. Kontaktieren Sie uns, um Ihr Konzept zu besprechen.">

  <meta name="description"
    content="Haben Sie Fragen oder Vorschläge? Falls Sie eine Konzeption oder ein Produktbeispiel haben, sind wir bereit, eine mögliche Zusammenarbeit zu prüfen. Wir bieten Dienstleistungen für die Entwicklung, Gestaltung und Vermarktung Ihres Projekts auf internationaler Ebene an. Kontaktieren Sie uns, um Ihre Konzeption zu besprechen.">

  <meta name="keywords"
    content="Web-Entwicklung, professionelle Dienstleistungen, kreative Lösungen, Digital, Integration, Effizienz, einzigartiger Charakter, Web-Projekte, kreative und innovative Lösungen, High-Level-Entwicklung, digitale Technologien, Benutzererfahrung, Benutzerfreundlichkeit, technologischer Fortschritt, Rückmeldung.">

  <?php include_once './../../components/head.php'; ?>
</head>

<body>

  <?php include_once './../../components/loader.php'; ?>

  <?php
  $selected = false;
  include_once './../../components/navbar.php';
  ?>

  <div class="wrapper feedback">

    <?php include_once './../../components/header.php'; ?>

    <main class="main">
      <div class="feedback__form">
        <h1 data-i18n="feedback-title" class="wow fadeInUp">Обратная связь</h1>
        <p data-i18n="feedback-subtitle" class="wow fadeInUp">Есть вопросы? Или предложения? <br> Оставьте свои контакты
          и мы с вами свяжемся
          ближайшее время</p>

        <form class="wow fadeIn form">
          <div class="feedback__form-grid">
            <input class="field field-phone field-data" type="tel" placeholder="Номер телефона">
            <input id="field-input" name="Имя" class="field field-data" type="text"
              placeholder="Wie soll ich Sie ansprechen?">
            <textarea id="field-textarea" class="field textarea field-data" name="Проект/сайт" rows="9"
              placeholder="Hier können Sie einen Link zu unserer Website, eine Beschreibung unseres Projekts oder Informationsmaterial hinterlassen. Wenn Sie einen Gutscheincode haben, können Sie ihn hier einfügen"></textarea>
          </div>

          <div class="feedback__form-row">
            <div class="form__tabs">
              <input type="radio" name="checkbox" id="phone" checked>
              <label data-i18n="form-phone" for="phone" class="form__tabs-tab">телефон</label>
              <input type="radio" name="checkbox" id="telegram">
              <label data-i18n="form-telegram" for="telegram" class="form__tabs-tab">телеграмм</label>
              <input type="radio" name="checkbox" id="email">
              <label data-i18n="form-email" for="email" class="form__tabs-tab">почта</label>
            </div>
            <button class="button-primary" id="submitButton">
              <p data-i18n="form-btn" id="button-hide-text">Начать работать</p>
              <div class="loader"></div>
            </button>
          </div>

          <div class="message">
            <h4 class="message__title">Заявка отправлена</h4>
            <p class="message__subtitle">Мы свяжемся с вами <br> ближайшее время</p>
          </div>
        </form>

      </div>
      <div class="feedback__partnership">
        <div>
          <h3 data-i18n="feedback-partnership-title" class="wow fadeInUp">/О партнерстве</h3>
          <p data-i18n="feedback-partnership-subtitle" class="wow fadeInUp">Если у вас есть концепция или пример
            продукта, мы готовы рассмотреть возможное
            сотрудничество. Мы предложим
            свои услуги по разработке, оформлению и продвижению вашего проекта на международном уровне. Свяжитесь с
            нами,
            чтобы обсудить вашу концепцию.</p>
        </div>
        <a data-i18n="feedback-partnership-link" class="wow fadeIn" href='mailto:info@legko.company'>по вопросам и
          предложениям
          <span>info@legko.company</span></a>
      </div>
    </main>
    <?php include_once './../../components/footer.php'; ?>
  </div>
</body>

</html>