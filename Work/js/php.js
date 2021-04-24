const form = document.getElementById('form1');
const uname = document.getElementById('uname');
const email = document.getElementById('email');
const password = document.getElementById('password');
const re_password = document.getElementById('re_password');

form.addEventListener('submit', e => {
	e.preventDefault();

	checkInputs();
});

function checkInputs() {
	// trim to remove the whitespaces
	const unameValue = uname.value.trim();
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	const re_passwordValue = re_password.value.trim();

	if (unameValue === '') {
		setErrorFor(uname, 'Username cannot be blank');
	} else {
		setSuccessFor(uname);
	}

	if (emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}

	if (passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
	} else {
		setSuccessFor(password);
	}

	if (re_passwordValue === '') {
		setErrorFor(re_password, 'Password2 cannot be blank');
	} else if (passwordValue !== re_passwordValue) {
		setErrorFor(re_password, 'Passwords does not match');
	} else {
		setSuccessFor(re_password);
	}
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}