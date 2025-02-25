document.addEventListener("DOMContentLoaded", function () {
  const gridItems = document.querySelectorAll(".cases__grid-item");

  gridItems.forEach(function (item) {
    // Добавляем обработчик события click для смартфонов
    // Если смотришь через f12, то обновни страницу 
    if (window.innerWidth <= 1024) {
      item.addEventListener("click", (event) => {
        event.preventDefault();

        // Ждем 2 секунды перед перенаправлением
        setTimeout(() => {
          window.location.href = item.getAttribute("href");
        }, 400);
      });
    }
  });
});