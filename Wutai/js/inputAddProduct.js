const minus = document.getElementById('minus')
const add = document.getElementById('add')
let quantity = document.getElementById('quantity').value

const popUp = document.getElementById('popUp')
const close = document.getElementById('close')
const noOption = document.getElementById('noOption')

function quantityFunc(x) {
    quantity = x
    console.log(quantity)
    document.getElementById('quantity').value = quantity

        

}

minus.addEventListener('click', () => {
    quantity--
    document.getElementById('quantity').value = quantity

    if (quantity <= 1) {
        quantityFunc(1)
    }
})

//remover produto
//popUp.style.display = 'block'


add.addEventListener('click', () => {
    quantity++
    document.getElementById('quantity').value = quantity
})

close.addEventListener('click', () => {
    popUp.style.display = 'none'
    quantityFunc(1)
})

noOption.addEventListener('click', () => {
    popUp.style.display = 'none'
    quantityFunc(1)
})
