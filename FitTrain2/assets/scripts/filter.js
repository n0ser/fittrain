const buttons = document.querySelectorAll(".category-buttons__item");
const cards = document.querySelectorAll(".cards__item");
const cardsContainer = document.querySelectorAll(".cards");

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    const currentCategory = button.dataset.filter;
    filter(currentCategory, cards);
  });
});

function filter(category, items) {
  items.forEach((item) => {
    const isItemFiltered = !item.classList.contains(category);
    const isShowAll = category.toLowerCase() === "all";
    if (isItemFiltered && !isShowAll) {
      item.classList.add("hide");
    } else {
      item.classList.remove("hide");
    }
  });
}