<?php
require_once ('./constants/constants.php');
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'>

  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="legko.company">

  <link rel="alternate" hreflang="ru-KZ" href="https://legko.company">
  <link rel="alternate" hreflang="en-KZ" href="https://legko.company/en">
  <link rel="alternate" hreflang="de-KZ" href="https://legko.company/de">

  <meta name="author" content="legko.company">
  <meta name="referrer" content="always">
  <link href="https://legko.company" rel="canonical">

  <title> We integrate digital solutions | LEGKO </title>

  <meta property="og:locale" content="en_KZ">
  <meta property="og:title" content="We integrate digital solutions">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://legko.company">
  <meta property="og:site_name" content="LEGKO | We integrate digital solutions">
  <meta property="og:image" content="/assets/favicon/open_graph_img_eng.png">

  <meta property="og:description"
    content="We offer services for the development of web products (websites, automation of tasks on the Internet, business cards, work with metrics, etc.), their implementation in business and promotion in search engines">

  <meta name="description"
    content="We offer services for the development of web products (websites, automation of tasks on the Internet, business cards, work with metrics, etc.), their implementation in business and promotion in search engines.">

  <meta name="keywords"
    content="Web development, professional services, creative solutions, digital, integration, efficiency, unique character, web projects, creative and innovative solutions, high-level development, digital technologies, user experience, usability, technological progress.">


  <?php include_once './components/head.php'; ?>
</head>

<body>

  <?php include_once './components/loader.php'; ?>

  <div class="wrapper home">
    <?php
    $selected = true;
    include_once './components/navbar.php';
    ?>

    <?php include_once './components/header.php'; ?>

    <main class="main">

      <div class="hero">

        <div class="hero-animation">
          <div class="hero-noise"></div>
          <div class="hero-circle large shade1"></div>
          <div class="hero-circle medium shade2"></div>
          <div class="hero-circle small shade3"></div>
        </div>

        <h1 class="wow fadeInUp">
          <span data-i18n="hero-title-first">Если</span>
          <br class="br-hide">
          <span id="typewriter"></span>
          <br>
          <span data-i18n="hero-title-second">то</span>
          <br class="br-hide">
          <span>LEGKO</span>
        </h1>

        <div class="wow fadeInUp hero__description" data-wow-delay="0.7s">
          <div class=" hero__description-row">
            <?php
    for ($i = 0; $i < 2; $i++) {
      ?>
            <div class="hero__description-text">
              <span><?php echo $descriptionText[$i][0]; ?></span>
              <span data-i18n="<?php echo $descriptionText[$i][2]; ?>"><?php echo $descriptionText[$i][1]; ?></span>
            </div>
            <?php
    }
    ?>
          </div>
          <div class="hero__description-row">
            <?php
    for ($i = 2; $i < 4; $i++) {
      ?>
            <div class="hero__description-text">
              <span><?php echo $descriptionText[$i][0]; ?></span>
              <span data-i18n="<?php echo $descriptionText[$i][2]; ?>"><?php echo $descriptionText[$i][1]; ?></span>
            </div>
            <?php
    }
    ?>
          </div>
        </div>
      </div>

      <section class="wow fadeInUp services special">

        <h2 data-i18n="services-title">чем мы полезны вам:</h2>

        <div class="services__grid">
          <?php foreach ($services as $service): ?>
          <a href="<?= $service["link"] ?>/en" class="services__grid-card">
            <img src="<?= $service["icon"] ?>" alt="icon">
            <h3 data-i18n="<?php echo $service["data-title"]; ?>"><?= $service["title"] ?></h3>
            <img src="/assets/icons/arrow-right.svg" alt="">
          </a>
          <?php endforeach; ?>
        </div>

      </section>
      <section class="quote">
        <p data-i18n="quote-first-start" class="wow fadeInUp quote-phrase">/. Мы постоянно исследуем рынок, чтобы
          обнаруживать
          успешные
          методы
          увеличения продаж и эффективного использования ресурсов</p>
        <p data-i18n="quote-first-end" class="wow fadeInUp quote-phrase">с целью разработки лучших решений для бизнеса,
          которые соответствуют запросам рынка ./</p>
      </section>
      <section class="cases">
        <div class="cases__text">
          <h2 data-i18n="cases-title" class="wow fadeInUp">То что мы создали</h2>
          <p data-i18n="cases-subtitle" class="wow fadeInUp">Создавали проекты, которые помогли клиентам быть
            узнаваемыми, вести бизнес <br> более
            эффективно,
            автоматизировать задачи и внедрять новые технологии.</p>
        </div>
        <div class="cases__grid">
          <?php foreach ($cases as $case): ?>
          <a target="_blank" href="<?= $case["link"] ?>" class="wow zoomIn cases__grid-item">
            <img src="<?= $case["img"] . '?v=' . random_int(0, 1000000) ?>"
              alt="<?= basename($case["img"], '.' . pathinfo($case["img"], PATHINFO_EXTENSION)) ?>">
            <div class="cases__grid-item__content">
              <div class="cases__grid-item__content-desciption">
                <?php foreach ($case["services"] as $service): ?>
                <?= $service ?>
                <?php endforeach; ?>
              </div>
              <h2 data-i18n="<?php echo $case["data-name"]; ?>">
                <?= $case["name"] ?>
              </h2>
            </div>
          </a>
          <?php endforeach; ?>
          <a target="_blank" href="https://www.instagram.com/legko.company/"
            class="wow zoomIn cases__grid-item cases__grid-item-special">
            <p data-i18n="cases-last-card">и еще более <br> 50 кейсов</p>
          </a>
        </div>
      </section>
      <a target="_blank" href="https://www.instagram.com/legko.company/" class="wow fadeInUp inst">
        <h2 data-i18n="instagram-title">рассказываем.</h2>
        <div class="inst__row">
          <h2 data-i18n="instagram-subtitle" class="wow fadeInUp ">Как мы создаем проекты</h2>
          <img class="wow fadeInUp " src="/assets/icons/go-to-inst.svg" alt="LegkoCompany instagram">
        </div>
      </a>
      <section class="quote quote-special">
        <p data-i18n="quote-second-start" class="wow fadeInUp quote-phrase">/. Наш рабочий процесс</p>
        <p data-i18n="quote-second-end" class="wow fadeInUp quote-phrase">как процесс воплощения <br> своей собственной
          идеи ./</p>
      </section>
      <?php
      $formTitle = "Начнем работать над проектом?";
      $formData = "form-home";
      include_once './components/form.php';
      ?>
    </main>
    <?php include_once './components/footer.php'; ?>
  </div>
  </script>
  <script src="./scripts/cases-redirect.js"></script>
</body>

</html>