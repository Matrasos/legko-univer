// Функция для получения выбранного языка из URL
function getSelectedLang() {
  const pathParts = window.location.pathname.split('/').filter(Boolean); // Разделяем путь и удаляем пустые части
  return ['en', 'ru', 'de'].includes(pathParts[pathParts.length - 1]) ? pathParts[pathParts.length - 1] : 'ru'; // Возвращаем последний элемент массива, если он является языком, иначе 'ru'
}

// Функция для установки языка в localStorage
function setLocalStorageLang(lang) {
  localStorage.setItem("selectedLang", lang);
}

// Функция для загрузки языковых данных
function loadLanguage(lang) {
  fetch("/lang/" + lang + ".json")
    .then((response) => response.json())
    .then((data) => {
      let elements = document.querySelectorAll("[data-i18n]");
      for (let j = 0; j < elements.length; j++) {
        let key = elements[j].getAttribute("data-i18n");
        elements[j].innerHTML = data[key];
      }

      const footerInputField = document.getElementById("footerInputField");
      if (footerInputField) {
        footerInputField.setAttribute("placeholder", data["footer-placeholder"]);
      }
    })
    .catch((error) => console.error(error));
}

document.addEventListener("DOMContentLoaded", function () {
  const selectedLang = getSelectedLang();

  // Установка выбранного языка в localStorage
  setLocalStorageLang(selectedLang);

  // Загрузка языковых данных
  loadLanguage(selectedLang);

  // Установка выбранного языка в интерфейсе
  document.getElementById("lang-input-" + selectedLang).checked = true;

  const langElements = document.querySelectorAll(".lang-label");

  langElements.forEach((langElement) => {
    langElement.addEventListener("click", function () {
      const lang = this.getAttribute("data-lang");

      // Загрузка языковых данных для нового языка
      loadLanguage(lang);

      // Установка выбранного языка в localStorage
      setLocalStorageLang(lang);

      // Определение текущего выбранного языка
      const currentLang = getSelectedLang();

      // Определение текущего пути URL
      const currentURL = window.location.href; // Весь URL
      // Удаление хэша #form, если он есть
      const withoutHashURL = currentURL.replace(/#form$/, '');
      // Удаление текущего языкового префикса из текущего URL
      const withoutLangURL = withoutHashURL.replace(/\/(en|ru|de)$/, '').replace(/\/$/, '');

      let newPath;
      // Если текущий язык не русский, добавляем выбранный язык к URL
      if (lang !== 'ru') {
        newPath = `${withoutLangURL}/${lang}`;
      } else {
        newPath = `${withoutLangURL}`;
      }

      window.location.href = newPath;

      // Закрыть меню при переключении языка
      const langDropdown = document.querySelector(".lang-btns");
      langDropdown.classList.remove("show");
      langDropdown.classList.add("hide");
    });
  });

  const links = document.querySelectorAll('.lang-link');
  links.forEach((link, index) => {
    // Сначала проверяем не является ли URL русским, если нет, то добавляем к ссылкам выбранный язык
    if (selectedLang !== 'ru') {
      if (link.href.endsWith('/')) {
        link.href = link.href + selectedLang;
      } else {
        link.href = link.href + "/" + selectedLang;
      }
    }
  });

  // Обработчик для нажатия на логотип
  const navbarLogo = document.getElementById('navbar__logo');
  navbarLogo.addEventListener('click', function (event) {
    event.preventDefault();

    const currentLang = getSelectedLang();
    window.location.href = currentLang === 'ru' ? '/' : `/${currentLang}`;
  });


  // Обработчик для кнопки выбора языка в меню
  const langButton = document.querySelector(".navbar__lang");
  const langDropdown = document.querySelector(".lang-btns");

  langButton.addEventListener("click", function () {
    const isLangDropdownVisible = langDropdown.classList.contains("show");
    langDropdown.classList.toggle("show", !isLangDropdownVisible);
    langDropdown.classList.toggle("hide", isLangDropdownVisible);
  });

  // Закрыть выпадающее меню при клике вне его области
  document.addEventListener("click", function (event) {
    if (langDropdown.classList.contains("show") && !langButton.contains(event.target) && !langDropdown.contains(event.target)) {
      langDropdown.classList.remove("show");
      langDropdown.classList.add("hide");
    }
  });
});
