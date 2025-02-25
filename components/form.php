<?php
$dataAttr = !empty($formData) ? 'data-i18n="' . $formData . '"' : '';
?>
<section id="form" class="call">
  <h2 <?php echo $dataAttr; ?> class="wow fadeInUp">
    <?php echo $formTitle; ?>
  </h2>
  <form class="wow fadeInUp form">
    <input class="field field-phone field-data" name="Номер телефона" type="text" placeholder="Номер телефона">
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
  </form>
</section>

<div class="message">
  <h4 class="message__title">Заявка отправлена</h4>
  <p class="message__subtitle">Мы свяжемся с вами <br> ближайшее время</p>
</div>