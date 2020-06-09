var el= document.getElementById('searchid');
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