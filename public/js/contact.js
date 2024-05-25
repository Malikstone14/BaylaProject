var contactBtn = document.getElementById("contactbtn");
var recrutBtn = document.getElementById('recrutementbtn');
var contact = document.getElementById('contact');
var recrut = document.getElementById('recrutement');

contactBtn.addEventListener("click", showContact);
recrutBtn.addEventListener("click", showRecrut);

function showContact() {
    contact.style.display = "block";
    recrut.style.display = "none";
};

function showRecrut() {
    contact.style.display = "none";
    recrut.style.display = "block";
};


const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
    }
}

toggleSwitch.addEventListener('change', switchTheme, false);


const name = document.getElementById('name');
const email = document.getElementById('email');
const message = document.getElementById('message');
const contactForm = document.getElementById('contact-form');
const errorElement = document.getElementById('error');
const successMsg = document.getElementById('success-msg');
const submitBtn = document.getElementById('submit');

const validate = (e) => {
    e.preventDefault();

    if (name.value.length < 3) {
        errorElement.innerHTML = 'Votre nom doit être supérieur à 3 lettres';
        return false;
    }

    if (!(email.value.includes('.') && (email.value.includes('@')))) {
        errorElement.innerHTML = 'Veuillez entrer une adresse mail valide';
        return false;
    }

    if (!emailIsValid(email.value)) {
        errorElement.innerHTML = 'Veuillez entrer une adresse mail valide';
        return false;
    }

    if (message.value.length < 15) {
        errorElement.innerHTML = 'Veuillez saisir un message plus long';
        return false;
    }

    errorElement.innerHTML = '';
    successMsg.innerHTML = 'Merci ! Nous reviendront vers vous dès que possible.';

    e.preventDefault();
    setTimeout(function () {
        successMsg.innerHTML = '';
        document.getElementById('contact-form').reset();
    }, 6000);

    return true;

}

const emailIsValid = email => {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

submitBtn.addEventListener('click', validate);