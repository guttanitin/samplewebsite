//validate password
var password = document.getElementById('passW')
var cpassword = document.getElementById('cPass');
var getEmail = document.getElementById('email');

function validatePassword(){
    if(password.value != cpassword.value){
       cpassword.setCustomValidity("Passwords Don't Match"); 
    } else{
        cpassword.setCustomValidity('');
    }
}
password.onchange = validatePassword;
cpassword.onkeyup = validatePassword;

//check if email exist
function checkMailStatus(){
    //alert("came");
var email=$(getEmail).val();// value in field email
$.ajax({
    type:'post',
        url:'userAcct.php',
        data:{email: email},
        success:function(msg){
            alert(msg); // your message will come here.     
        }
 });
} 