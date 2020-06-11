var el= document.getElementById('id');
var ermsg = document.getElementById('emsg1');

el.addEventListener('blur', function() {
if(el.value.length== 0)
{
ermsg.innerHTML = '* This field cannot be empty';
ermsg.style.color = "red";
}
else
{
ermsg.innerHTML = '';
}       
}, true);

var e2= document.getElementById('Name');
var ermsg2 = document.getElementById('emsg2');

e2.addEventListener('blur', function() {
if(e2.value.length== 0)
{
ermsg2.innerHTML = '* This field cannot be empty';
ermsg2.style.color = "red";
}
else
{
ermsg2.innerHTML = '';
}       
}, true);

var e3= document.getElementById('mail');
var ermsg3 = document.getElementById('emsg3');

e3.addEventListener('blur', function() {
    if (e3.value.length==0) {
        ermsg3.innerHTML = '';
        }
        else{
        ermsg3.innerHTML ="* please enter a valid email address";
        ermsg3.style.color = "red";
        }
        }, true);

        var m= document.getElementById('phno');
var mmmsg = document.getElementById('emsg4');
var phoneno = /^\d{10}$/;
m.addEventListener('blur', function() {
if (m.value.match(phoneno)) {
mmmsg.innerHTML = '';
}
else{
mmmsg.innerHTML ="* phone number must be 10 digits";
mmmsg.style.color = "red";
}
}, true);
        