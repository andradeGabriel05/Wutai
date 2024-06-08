"use strict";

const apiCep = async() => {
  const zipCode = document.getElementById("zipcode").value
  const url = `http://viacep.com.br/ws/${zipCode}/json/`
  const data = await fetch(url)
  const address = await data.json()
  console.log(address)

  apiResult(address)
};

const apiResult = (address) => {
   document.getElementById("city").value = address.localidade
   document.getElementById("neighborhood").value = address.bairro
   document.getElementById("address").value = address.logradouro
   document.getElementById("state").value = address.uf

}

document.getElementById("zipcode").addEventListener("focusout", apiCep);
