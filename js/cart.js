const minus = document.getElementById("minus");
const add = document.querySelectorAll(".inputAdd");
let quantity = document.getElementById("quantity");
let productsSpan = document.getElementById("productsSpanId");
const currentQuantity = productsSpan.textContent;
let productsSpanTextId = document.getElementById("productsSpanTextId");

const popUp = document.getElementById("popUp");
const close = document.getElementById("close");
const noOption = document.getElementById("noOption");

//se carrinho está vazio
const emptyCart = document.getElementById("emptyCart");
const buyBox = document.getElementById("buyBox");

if (emptyCart) {
  buyBox.style.display = "none";
}

//aumentar quantidade. Provavelmente vou remover
function quantityFunc(x) {
  quantity.value = x;
  console.log(quantity.value);
}

minus.addEventListener("click", () => {
  let currentValue = parseInt(quantity.value, 10);

  quantity.value = currentValue > 1 ? currentValue - 1 : 1;

  productsSpan.textContent--;
  if (parseInt(productsSpan.textContent) < 2) {
    productsSpanTextId.textContent = " produto)";
    productsSpan.textContent = 1;
  }

  console.log(quantity.value);
  console.log(productsSpan.textContent);
});

for (let i = 0; i < add.length; i++) {
  add[i].addEventListener("click", () => {
    console.log(add.length);
    let currentValue = parseInt(quantity.value);
    quantity.value = currentValue + 1;
    
    productsSpan.textContent++;
    if (parseInt(productsSpan.textContent) > 1) {
      productsSpanTextId.textContent = " produtos)";
    }

    console.log(quantity.value);
    console.log(productsSpan.textContent);
  });
}

close.addEventListener("click", () => {
  popUp.style.display = "none";
  quantityFunc(1);
});

noOption.addEventListener("click", () => {
  popUp.style.display = "none";
  quantityFunc(1);
});
