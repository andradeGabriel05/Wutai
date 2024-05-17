const joinBtn = document.getElementById('joinBtn');
const createAccountBtn = document.getElementById('createAccountBtn');

joinBtn.addEventListener('click', () => {
    history.pushState(null, '', "../login/login.php"); 

    
})
createAccountBtn.addEventListener('click', () => {
    history.pushState(null, 
                '', "../register/register.php"); 
})
