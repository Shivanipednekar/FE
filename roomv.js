var el= document.getElementById('no');
var ermsg = document.getElementById('emsg1');

el.addEventListener('blur', function() {
if(el.value.length== 0)
{
ermsg.innerHTML = '* Kindly check the data you entered';
ermsg.style.color = "red";
}
else
{
ermsg.innerHTML = '';
}       
}, true);

var e2= document.getElementById('sc');
var ermsg2 = document.getElementById('emsg2');

e2.addEventListener('blur', function() {
if(e2.value.length==0)
{
ermsg2.innerHTML = '* Kindly check the data you entered';
ermsg2.style.color = "red";
}
else
{
ermsg2.innerHTML = '';
}       
}, true);