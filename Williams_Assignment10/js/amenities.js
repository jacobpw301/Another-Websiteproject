var randomNum=Math.floor((Math.random()*15)+6);
var i=0;
var myAmenitites=["Service Staff","Comftorable seats","Window Seats","Flight Attendant","Free bar Drinks","Packed Quarters","Kids that kick the back of your seat","Turbulence","Microwave dinners","In house movies","Excellent ocean view",
"Cant escape","A crying baby","One bathroom","Maginzenes to read"];

var hotelAmenitites=[];

while(randomNum<20){
	if(randomNum%2==0){
	hotelAmenitites.unshift(myAmenitites[i]);
	i++;
	randomNum++;
	}else{
		hotelAmenitites.push(myAmenitites[i]);
		i++
		randomNum++;
	}
}
var heading=document.querySelector('h2');
var newHeading="Hotel Amenities ("+hotelAmenitites.length+")";
heading.innerHTML=newHeading;

var ALength=hotelAmenitites.length;
text="<ul>";
	for(var x=0;x<ALength;x++){
	text +="<li>"+hotelAmenitites[x]+"</li>"+"<br>";
}
text+="</ul>";

document.getElementById('size').innerHTML=text;
