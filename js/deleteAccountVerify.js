const deleteAccount = document.createElement('deleteAccount');

const popUp = document.getElementById("popUp");
const close = document.getElementById("close");
const noOption = document.getElementById("noOption");

function deleteAccountFunc() {
  popUp.style.display = "block";
}

close.addEventListener("click", () => {
    popUp.style.display = "none";
    
  });

noOption.addEventListener("click", () => {
popUp.style.display = "none";

});