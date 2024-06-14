
function languageFunc() {
    idioma = document.querySelector('.radioLang:checked').value;
    console.log(idioma)
    const languageJson = async() => {
        const jsonFile = "/php_programs/Wutai/Wutai/js/language.json"
        const data = await fetch(jsonFile)
        const language = await data.json()
        console.log(language)
    
        portuguese(language)
    }

    
    const portuguese = (language) => {
        document.getElementById("cartHeader").textContent = language`.header.${idioma}.cart`
        document.getElementById("logout").textContent = language.header.idioma.logout
        document.getElementById("register").textContent = language.header.idioma.register
        document.getElementById("login").textContent = language.header.idioma.login
    }

    languageJson()
}



