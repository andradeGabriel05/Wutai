const minus = document.getElementById('minus')
const add = document.getElementById('add')
let quantity = document.getElementById('quantity')

const popUp = document.getElementById('popUp')
const close = document.getElementById('close')
const noOption = document.getElementById('noOption')

//se carrinho está vazio
const emptyCart = document.getElementById('emptyCart')
const buyBox = document.getElementById('buyBox')

if (emptyCart) {

    buyBox.style.display = 'none'
}

//aumentar quantidade. Provavelmente vou remover
function quantityFunc(x) {
    quantity.value = x
    console.log(quantity.value)
}

minus.addEventListener('click', () => {
    let currentValue = parseInt(quantity.value, 10);
    quantity.value = currentValue > 1 ? currentValue - 1 : 1;
    console.log(quantity.value);
})

add.addEventListener('click', () => {
    let currentValue = parseInt(quantity.value, 10);
    quantity.value = currentValue + 1;
    console.log(quantity.value);
})


close.addEventListener('click', () => {
    popUp.style.display = 'none'
    quantityFunc(1)
})

noOption.addEventListener('click', () => {
    popUp.style.display = 'none'
    quantityFunc(1)
})


