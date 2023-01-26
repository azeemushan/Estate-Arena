//alert('yes i am included');

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});



function validation(){
	//let form_data=document.login_form;

let username=document.login_form.user.value;
//alert(username);
let password=document.login_form.pass.value;
let user_error_message=document.querySelector('.errors');
let pass_error_message=document.querySelector('.pass_errors');
if(username.length =='' && password.length ==''){

user_error_message.innerHTML='<b style="text-left;color:red;">Please Enter username & password<b>';
document.querySelector('#user').style.border='1px solid #dd2525';
document.querySelector('#user').focus();
document.querySelector('#pass').style.border='1px solid #dd2525';
// document.querySelector('#pass').focus();
return false;

}


else{

if(username.length ==''){

user_error_message.innerHTML='<b style="text-center;color:red;">Please enter username </b>';

document.querySelector('#user').focus();
user_error_message.innerHTML="";
document.querySelector('#user').style.border='1px solid #dd2525';
return false;

}

if(password.length ==''){

pass_error_message.innerHTML='<b style="text-center;color:red;">Please Enter password</b>';
document.querySelector('#pass').focus();
document.querySelector('#pass').style.border='1px solid #dd2525';
return false;

}

}

}




// function onlyOne(checkbox) {
//     var checkboxes = document.getElementsByName('check')
//     checkboxes.forEach((item) => {
//         if (item !== checkbox) item.checked = false
//     })
// }


// let radio button=document.querySelectorAll('radio');
// console.log(radio_button);