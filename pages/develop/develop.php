<?php
$texts = [
  'title' => 'Разработка',
  'subtitle' => 'front&back',
];

$plan = [
  'plan-title' => 'Процесс разработки - гарантия финального результата',
  ['01', '02', '03', '04', '05', '06'],
  [
    'Анализируем задачу',
    'Подбираем стэк',
    'Формируем запрос',
    'КОДИМ',
    'Тестируем',
    'Внедряем'
  ],
];
$advantages = [
  'title' => 'Успешная разработка?',
  'subtitle' => 'Качественная разработка интернет-продукта помогает бизнесу достичь эффективности, привлекать больше клиентов и улучшать пользовательский опыт, что приводит к росту прибыли и успеху на рынке.',
  [
    '-30%',
    '+70%',
    '-20%',
    '+90%',
  ],
  [
    'затрат <br> на проект',
    'к скорости <br> работы',
    'цены <br> обслуживания',
    'к автоматизации <br> бизнес-процессов',
  ]
];
$cards = [
  'title' => 'DEVELOPMENT и код',
  'subtitle' => 'Чтобы определить, был ли IT-проект разработан правильно нужно посмотреть в глубь ....',
  'icons' => [
    '
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M8 2L9.88 3.88M14.1201 3.88L16.0001 2M9.00007 7.13V6.13C8.98194 5.72474 9.04611 5.32002 9.1887 4.94025C9.33129 4.56047 9.54934 4.21353 9.8297 3.92034C10.1101 3.62716 10.4469 3.39382 10.8199 3.2344C11.193 3.07499 11.5944 2.9928 12.0001 2.9928C12.4057 2.9928 12.8072 3.07499 13.1802 3.2344C13.5532 3.39382 13.8901 3.62716 14.1704 3.92034C14.4508 4.21353 14.6689 4.56047 14.8114 4.94025C14.954 5.32002 15.0182 5.72474 15.0001 6.13V7.13M12 20C8.7 20 6 17.3 6 14V11C6 9.93913 6.42143 8.92172 7.17157 8.17157C7.92172 7.42143 8.93913 7 10 7H14C15.0609 7 16.0783 7.42143 16.8284 8.17157C17.5786 8.92172 18 9.93913 18 11V14C18 17.3 15.3 20 12 20ZM12 20V11M6.53 9C4.6 8.8 3 7.1 3 5M6 13H2M3 21C3 18.9 4.7 17.1 6.8 17M20.9702 5C20.9702 7.1 19.3702 8.8 17.4702 9M22 13H18M17.2002 17C19.3002 17.1 21.0002 18.9 21.0002 21" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    ',
    '
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M6.08045 9.50024L2.58045 11.1002C2.40865 11.181 2.26339 11.309 2.16164 11.4692C2.05989 11.6295 2.00586 11.8154 2.00586 12.0052C2.00586 12.1951 2.05989 12.381 2.16164 12.5412C2.26339 12.7015 2.40865 12.8295 2.58045 12.9102L11.1804 16.8202C11.4396 16.9376 11.7209 16.9983 12.0054 16.9983C12.29 16.9983 12.5712 16.9376 12.8304 16.8202L21.4104 12.9202C21.5879 12.842 21.7388 12.7138 21.8447 12.5514C21.9506 12.3889 22.007 12.1992 22.007 12.0052C22.007 11.8113 21.9506 11.6216 21.8447 11.4591C21.7388 11.2966 21.5879 11.1685 21.4104 11.0902L17.9104 9.50024M6.08045 14.5002L2.58045 16.1002C2.40865 16.181 2.26339 16.309 2.16164 16.4692C2.05989 16.6295 2.00586 16.8154 2.00586 17.0052C2.00586 17.1951 2.05989 17.381 2.16164 17.5412C2.26339 17.7015 2.40865 17.8295 2.58045 17.9102L11.1804 21.8202C11.4396 21.9376 11.7209 21.9983 12.0054 21.9983C12.29 21.9983 12.5712 21.9376 12.8304 21.8202L21.4104 17.9202C21.5879 17.842 21.7388 17.7138 21.8447 17.5514C21.9506 17.3889 22.007 17.1992 22.007 17.0052C22.007 16.8113 21.9506 16.6216 21.8447 16.4591C21.7388 16.2966 21.5879 16.1685 21.4104 16.0902L17.9104 14.5002M12.8305 2.18036C12.5699 2.06151 12.2868 2 12.0005 2C11.7141 2 11.431 2.06151 11.1705 2.18036L2.60045 6.08036C2.423 6.1586 2.27213 6.28676 2.16621 6.44921C2.0603 6.61167 2.00391 6.80142 2.00391 6.99536C2.00391 7.18929 2.0603 7.37904 2.16621 7.5415C2.27213 7.70396 2.423 7.83211 2.60045 7.91036L11.1805 11.8204C11.441 11.9392 11.7241 12.0007 12.0105 12.0007C12.2968 12.0007 12.5799 11.9392 12.8405 11.8204L21.4205 7.92036C21.5979 7.84211 21.7488 7.71396 21.8547 7.5515C21.9606 7.38904 22.017 7.19929 22.017 7.00536C22.017 6.81142 21.9606 6.62167 21.8547 6.45921C21.7488 6.29676 21.5979 6.1686 21.4205 6.09036L12.8305 2.18036Z" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    ',
    '
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M8 3H7C6.46957 3 5.96086 3.21071 5.58579 3.58579C5.21071 3.96086 5 4.46957 5 5V10C5 10.5304 4.78929 11.0391 4.41421 11.4142C4.03914 11.7893 3.53043 12 3 12C3.53043 12 4.03914 12.2107 4.41421 12.5858C4.78929 12.9609 5 13.4696 5 14V19C5 20.1 5.9 21 7 21H8M16 21H17C17.5304 21 18.0391 20.7893 18.4142 20.4142C18.7893 20.0391 19 19.5304 19 19V14C19 12.9 19.9 12 21 12C20.4696 12 19.9609 11.7893 19.5858 11.4142C19.2107 11.0391 19 10.5304 19 10V5C19 4.46957 18.7893 3.96086 18.4142 3.58579C18.0391 3.21071 17.5304 3 17 3H16" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    ',
    '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M12 19.0001L8.03 21.3801C7.71894 21.567 7.36289 21.6657 7 21.6657C6.63711 21.6657 6.28106 21.567 5.97 21.3801L2.97 19.5801C2.67476 19.4027 2.43033 19.1521 2.26039 18.8525C2.09045 18.5529 2.00075 18.2146 2 17.8701V14.6301C2.00075 14.2857 2.09045 13.9473 2.26039 13.6477C2.43033 13.3481 2.67476 13.0975 2.97 12.9201L7 10.5001M12 19.0001V13.5001M12 19.0001L15.97 21.3801C16.2811 21.567 16.6371 21.6657 17 21.6657C17.3629 21.6657 17.7189 21.567 18.03 21.3801L21.03 19.5801C21.3252 19.4027 21.5697 19.1521 21.7396 18.8525C21.9096 18.5529 21.9992 18.2146 22 17.8701V14.6301C21.9992 14.2857 21.9096 13.9473 21.7396 13.6477C21.5697 13.3481 21.3252 13.0975 21.03 12.9201L17 10.5001M12 13.5001L7 10.5001M12 13.5001L6.99977 16.5001M12 13.5001L17 10.5001M12 13.5001L17 16.5001M12 13.5001L11.9998 8.00015M7 10.5001V6.13009C7.00075 5.78566 7.09045 5.44727 7.26039 5.14768C7.43033 4.84809 7.67476 4.59747 7.97 4.42009L10.97 2.62009C11.2811 2.43321 11.6371 2.33447 12 2.33447C12.3629 2.33447 12.7189 2.43321 13.03 2.62009L16.03 4.42009C16.3252 4.59747 16.5697 4.84809 16.7396 5.14768C16.9096 5.44727 16.9992 5.78566 17 6.13009V10.5001M6.99977 16.5001L2.25977 13.6501M6.99977 16.5001L7 21.6701M17 16.5001L21.74 13.6501M17 16.5001V21.6701M11.9998 8.00015L7.25977 5.15015M11.9998 8.00015L16.74 5.15015" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    '
  ],
  'titles' => [
    'Тестирование и отладка',
    'Использование практик',
    'Эффективность и результативность',
    'Архитектура и расширяемость',
  ],
  'texts' => [
    'Проведите обширное тестирование проекта, включая функциональное тестирование, тестирование производительности, тестирование безопасности и другие необходимые виды тестирования. Исправьте все обнаруженные ошибки и проблемы.',
    'Оцените, насколько проект следует лучшим практикам разработки программного обеспечения. Убедитесь, что были применены современные методы разработки, архитектурные подходы и правильные технологии.',
    'Оцените, насколько проект демонстрирует эффективность и результативность. Рассмотрите, какие цели и ожидания были установлены для проекта и насколько успешно они были достигнуты.',
    'Оцените архитектурные решения и расширяемость проекта. Удостоверьтесь, что архитектура проекта поддерживает будущий рост и изменения, а также возможность интеграции с другими системами и технологиями.',
  ],
  'addition' => '* Убедитесь, что проект имеет план поддержки и обслуживания после его развертывания. Это включает в себя обновления, исправление ошибок и техническую поддержку для пользователей'
];
$technologies = [
  'title' => 'С чем мы работаем?',
  'addition' => '* и каждая технология продвигает ваш проект на один шаг к цели',
  [
    'Agile development',
    'Waterfall model',
    'Software architecture',
    'Deployment',
    'Code review',
    'Database management',
    'Full-stack',
    'Back-end',
    'Front-end',
    'analyse',
    'Bug tracking',
    'WEB',
    'MObile',
    'API',
  ],
];
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

  <link rel="alternate" hreflang="ru-KZ" href="https://legko.company/develop">
  <link rel="alternate" hreflang="en-KZ" href="https://legko.company/develop/en">
  <link rel="alternate" hreflang="en-KZ" href="https://legko.company/develop/de">


  <meta name="author" content="legko.company">
  <meta name="referrer" content="always">
  <link href="https://legko.company" rel="canonical">

  <title> РАЗРАБОТКА | LEGKO </title>

  <meta property="og:locale" content="ru_KZ">
  <meta property="og:title" content="РАЗРАБОТКА">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://legko.company/develop">
  <meta property="og:site_name"
    content="LEGKO | Превращаем вашу идею в реальность, подбирая лучшую технологию реализации">
  <meta property="og:image" content="/assets/favicon/open_graph_img.png">


  <meta property="og:description"
    content="Узнайте, как наши разработчики создают высококачественные и инновационные веб-проекты, уделяя особое внимание функциональности и пользовательскому опыту. Мы разрабатываем веб-решения, которые сочетают в себе креативный дизайн, технологическую экспертизу и удобство использования.">

  <meta name="description"
    content="Узнайте, как наши разработчики создают высококачественные и инновационные веб-проекты, уделяя особое внимание функциональности и пользовательскому опыту. Мы разрабатываем веб-решения, которые сочетают в себе креативный дизайн, технологическую экспертизу и удобство использования.">


  <meta name="keywords"
    content="Разработка, веб-разработка, веб-проекты, программирование, разработчики, веб-приложения, пользовательский опыт, креативный дизайн, инновации, функциональность, технологическая экспертиза, адаптивный дизайн, кроссплатформенная разработка, фронтенд разработка, бэкенд разработка, разработка на заказ, разработка MVP, тестирование, оптимизация производительности, Agile разработка, техническая поддержка, цикл разработки.">

  <?php include_once './../../components/head.php'; ?>
</head>

<body>

  <?php include_once './../../components/loader.php'; ?>

  <?php
  $selected = null;
  include_once './../../components/navbar.php';
  ?>

  <div class="wrapper pages develop">
    <?php include_once './../../components/header.php'; ?>

    <main class="main">
      <section class="title">
        <h1 data-i18n="develop-title" class="wow fadeIn ">
          <?php echo $texts['title']; ?>
        </h1>
        <p data-i18n="develop-subtitle" class="wow fadeInUp ">
          <?php echo $texts['subtitle']; ?>
        </p>
      </section>
      <section class="plan">
        <p data-i18n="develop-plan-title" class="wow fadeInUp plan__title">
          <?php echo $plan['plan-title']; ?>
        </p>
        <div class="plan__description">
          <?php
          $numbers = $plan[0];
          $text = $plan[1];

          for ($i = 0; $i < count($numbers); $i++) {
            echo '
            <div class="wow fadeInUp ">
              <p>' . $numbers[$i] . '</p>
              <h3 data-i18n="develop-plan-item-' . ($i + 1) . '">' . $text[$i] . '</h3>
            </div>
            ';
          }
          ?>
        </div>
      </section>
      <section class="advantages">
        <h2 data-i18n="develop-advantages-title" class="wow fadeInUp ">
          <?php echo $advantages['title']; ?>
        </h2>
        <p data-i18n="develop-advantages-subtitle" class="wow fadeInUp ">
          <?php echo $advantages['subtitle']; ?>
        </p>
        <div class="advantages__grid">
          <?php
          $numbers = $advantages[0];
          $text = $advantages[1];

          for ($i = 0; $i < count($numbers); $i++) {
            echo '<div class="wow fadeInUp advantages__grid-card">';
            echo '<p>' . $numbers[$i] . '</p>';
            echo '<p data-i18n="develop-advantages-item-' . ($i + 1) . '">' . $text[$i] . '</p>';
            echo '</div>';
          }
          ?>
        </div>
      </section>
      <section class="cards">
        <h2 data-i18n="develop-cards-title" class="wow fadeInUp ">
          <?php echo $cards['title']; ?>
        </h2>
        <p data-i18n="develop-cards-subtitle" class="wow fadeInUp ">
          <?php echo $cards['subtitle']; ?>
        </p>
        <div class="cards__grid">
          <?php
          $icons = $cards['icons'];
          $titles = $cards['titles'];
          $texts = $cards['texts'];

          for ($i = 0; $i < count($titles); $i++) {
            echo '<div class="wow fadeInUp cards__grid-card">';
            echo $icons[$i];
            echo '<h2 data-i18n="develop-cards-item-title-' . ($i + 1) . '">' . $titles[$i] . '</h2>';
            echo '<p data-i18n="develop-cards-item-text-' . ($i + 1) . '">' . $texts[$i] . '</p>';
            echo '</div>';
          }
          ?>
        </div>
        <p data-i18n="develop-cards-addition" class="wow fadeIn ">
          <?php echo $cards['addition']; ?>
        </p>
      </section>
      <section class="technologies">
        <h2 data-i18n="develop-technologies-title" class="wow fadeInUp ">
          <?php echo $technologies['title']; ?>
        </h2>
        <div class="wow fadeInUp technologies__list">
          <?php foreach ($technologies[0] as $i => $technology): ?>
          <div>
            <?php echo $technology; ?>
          </div>
          <?php endforeach; ?>
        </div>
        <p data-i18n="develop-technologies-addition" class="wow fadeIn ">
          <?php echo $technologies['addition']; ?>
        </p>
      </section>

      <?php
      $formData = "form-develop";
      $formTitle = "Разработать проект?";
      include_once './../../components/form.php';
      ?>
    </main>
    <?php include_once './../../components/footer.php'; ?>
  </div>
</body>

</html>