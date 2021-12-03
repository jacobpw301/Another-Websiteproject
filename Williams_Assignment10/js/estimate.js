var i=parseInt(prompt("Please enter Amount of Stay 1-10:"));;
var cost=0;
var counter=0;
var outputMessage='<table border>';
var regular=250;
var mainOption='Day';

while(i > 10 || i < 1){
  i=parseInt(prompt("Invalid number. Please enter Amount of Stay 1-10:"));
}

if(mainOption==='Day'){
    for(var x = 1; x < i + 1; x++){
        outputMessage+='<tr><th>'+mainOption+''+x+'</th><td>'+'$'+regular+'</th><td>'+'Regular:'+'$'+
    parseFloat((cost+regular)).toFixed(2)+'</td></tr>';
        cost+=regular;
        
}
outputMessage+= '</table>'
var el=document.getElementById('outputArea');
el.innerHTML=outputMessage;
}