function getSelectedLang() {
  const pathParts = window.location.pathname.split('/').filter(Boolean); // Разделяем путь и удаляем пустые части
  return ['en', 'ru', 'de'].includes(pathParts[pathParts.length - 1]) ? pathParts[pathParts.length - 1] : 'ru'; // Возвращаем последний элемент массива, если он является языком, иначе 'ru'
}

function redirectCountdown() {
  let countdown = 10;

  function updateCountdown() {
    document.querySelector('.count_404').textContent = countdown;

    countdown--;

    if (countdown < 0) {
      let lang = getSelectedLang()
      if (lang !== 'ru') {
        window.location.href = `/${lang}`;
      } else {
        window.location.href = `/`;
      }
    } else {
      setTimeout(updateCountdown, 1000);
    }
  }

  updateCountdown();
}

document.addEventListener('DOMContentLoaded', redirectCountdown);