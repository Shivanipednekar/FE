var el= document.getElementById('no');
var ermsg = document.getElementById('emsg0');

el.addEventListener('blur', function() {
if(el.value.length>5)
{
ermsg.innerHTML = '* id Too long';
ermsg.style.color = "red";
}
else
{
ermsg.innerHTML = '';
}       
}, true);

var e2= document.getElementById('nm');
var ermsg2 = document.getElementById('emsg1');

e2.addEventListener('blur', function() {
if(e2.value.length!=0)
{
    ermsg2.innerHTML = '';


}
else
{
    ermsg2.innerHTML = '* This cannot be empty';
ermsg2.style.color = "red";
}       
}, true);

var num='/\d/g';
var e3= document.getElementById('nos');
var ermsg3 = document.getElementById('emsg2');

e2.addEventListener('blur', function() {
    if(e2.value.match(num))
    {
        ermsg2.innerHTML = '';
    
    
    }
    else
    {
        ermsg2.innerHTML = '* Please enter alphabetical values';
    ermsg2.style.color = "red";
    }       
    }, true);
