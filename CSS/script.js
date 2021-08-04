let form = document.forms['Log'];
form.addEventListener('submit',validate);
function validate(e){
    e.preventDefault();
    var mail = document.getElementById('mail');
    let email = form['email'].value;
    if(email.length <3){
        mail.innerHTML = "Email can't be Empty"
    }

}