async function languageFunc() {
  const radioLang = document.querySelector(".radioLang:checked");

  if (radioLang !== null) {
    const idioma = radioLang.value;
    console.log(idioma);

    const languageJson = async () => {
      const jsonFile = "/php_programs/Wutai/Wutai/js/language.json";
      const data = await fetch(jsonFile);
      const language = await data.json();
      console.log(language.header.pt_BR);

      localStorage.setItem("language", idioma);
      // const item = localStorage.getItem("language");
      portuguese(language, localStorage.getItem("language"));
    };

    await languageJson();
  }
}

document.addEventListener("DOMContentLoaded", async () => {
  const jsonFile = "/php_programs/Wutai/Wutai/js/language.json";
  const data = await fetch(jsonFile);
  const language = await data.json();

  if(!localStorage.getItem("language")) {
    const savedLanguage = "pt_BR"
    if (savedLanguage) {
      portuguese(language, savedLanguage);
    }
  } else {
    const savedLanguage = localStorage.getItem("language");
  if (savedLanguage) {
    portuguese(language, savedLanguage);
  }
  }
});

function portuguese(language, item) {
  //header
  if(document.getElementById("cartHeader")) document.getElementById("cartHeader").textContent = language.header[item].cart;

  if(document.querySelectorAll(".login")) {
  const login = document.querySelectorAll(".login");
  login.forEach((loginString) => {
    loginString.textContent = language.header[item].login;
  });
}
 
  if(document.getElementById("register")) document.getElementById("register").textContent = language.header[item].register;
  if(document.getElementById("languagePage")) document.getElementById("languagePage").textContent = language.header[item].language;
  if(document.getElementById("searchInput")) document.getElementById("searchInput").placeholder = language.header[item].search;

    //header if login
    if(document.querySelector(".menu__hello")) document.querySelector(".menu__hello").textContent = language.header[item].hello;
    if(document.getElementById("profile")) document.getElementById("profile").textContent = language.header[item].profile;
    if(document.getElementById("ordered")) document.getElementById("ordered").textContent = language.header[item].ordered;
    if(document.getElementById("address")) document.getElementById("address").textContent = language.header[item].address;
    if(document.getElementById("config")) document.getElementById("config").textContent = language.header[item].config;
    if(document.getElementById("affiliate")) document.getElementById("affiliate").textContent = language.header[item].affiliate;
    if(document.getElementById("logout")) document.getElementById("logout").textContent = language.header[item].logout;
  

  //language_page

  if (document.querySelector(".languages__page__title")) document.querySelector(".languages__page__title").textContent = language.language_page[item].title;
  if (document.querySelector(".languages__page__description")) document.querySelector(".languages__page__description").textContent = language.language_page[item].description;
  if (document.querySelector(".submit__input")) document.querySelector(".submit__input").value = language.language_page[item].submit;

  //products_page
  if(document.querySelectorAll(".currency")) {
    const currency = document.querySelectorAll(".currency");
    currency.forEach((currencyString) => {
      currencyString.textContent = language.product_page[item].currency;
    });
  }


  if(document.querySelector(".product__price__add__product")) document.querySelector(".product__price__add__product").value = language.product_page[item].add;
  if(document.querySelector(".product__price__buy__now")) document.querySelector(".product__price__buy__now").value = language.product_page[item].buy;
  if(document.querySelector(".product__price__send")) document.querySelector(".product__price__send").textContent = language.product_page[item].send;
  if(document.querySelector(".product__price__seller")) document.querySelector(".product__price__seller").textContent = language.product_page[item].seller;

  //cart
  if(document.querySelector(".cart__title")) document.querySelector(".cart__title").textContent = language.cart[item].title;
  if(document.querySelector(".cart__description")) document.querySelector(".cart__description").textContent = language.cart[item].description;
  if(document.querySelector(".cart__empty")) document.querySelector(".cart__empty").textContent = language.cart[item].empty;
  if(document.querySelector(".cart__total")) document.querySelector(".cart__total").textContent = language.cart[item].total;
  if(document.querySelector(".cart__send")) document.querySelector(".cart__send").textContent = language.cart[item].send;
  if(document.querySelector(".cart__checkout")) document.querySelector(".cart__checkout").value = language.cart[item].checkout;

}
