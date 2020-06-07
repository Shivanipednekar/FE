var el= document.getElementById('username');
var ermsg = document.getElementById('emsg1');

el.addEventListener('blur', function() {
if(el.value!= 'admin')
{
ermsg.innerHTML = '* Kindly check the data you entered';
ermsg.style.color = "red";
}
else
{
ermsg.innerHTML = '';
}       
}, true);

var e2= document.getElementById('pwd');
var ermsg2 = document.getElementById('emsg2');

e2.addEventListener('blur', function() {
if(e2.value!='admin')
{
ermsg2.innerHTML = '* Kindly check the data you entered';
ermsg2.style.color = "red";
}
else
{
ermsg2.innerHTML = '';
}       
}, true);

e3.document.getElementById('log')

e3.addEventListener('blur', function() {
    if((el.value= 'admin') && (e2.value ='admin'))
    {
    window.location.href="Mainmenu.html";
    }
    }, true);