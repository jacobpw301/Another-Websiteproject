var randomNum=Math.floor((Math.random()*100)+200);
var myHotel={
	name:'Mile High Hotel',
	roomCost:randomNum,
	discount:10,
	finalPrice:function(){
	return randomNum=(randomNum*.1);}
	};
	
	var elName=document.getElementById('hotelName');
	elName.textContent=myHotel.name;
	var elRoom=document.getElementById('room');
	elRoom.textContent="Room Cost:"+"$"+myHotel.roomCost;
	var elpercent=document.getElementById('discount');
	elpercent.textContent='Room Discount:'+'$'+myHotel.discount;
	var elPrice=discount.getElementById('price');
	elPrice.textContent='FinalPrice:'+'$'+myHotel.finalPrice()+'0';

