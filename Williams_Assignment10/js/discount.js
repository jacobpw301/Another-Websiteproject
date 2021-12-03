	var discountCode=prompt ("Please enter Discount Code");
	var regular=250
	var discount;
	var finalAmt;


if(discountCode=='MB015'){
	discount=regular*.15;
	finalAmt=regular-discount;
}else if(discountCode=='MB020'){
	discount=regular*.20;
	finalAmt=regular-discount;
}else if(discountCode=='MB025'){
	discount=regular*.25;
	finalAmt=regular-discount;
}else{
	discount=regular*0;
	finalAmt=regular-discount;
	discount=0;
	var discountCode=("Wrong Code Entered");
	}
	

	var elregularPrice=document.getElementById('regular');
	elregularPrice.textContent="Regular Price:"+"$"+regular;
	var eldiscount=document.getElementById('discount');
	eldiscount.textContent="Discount:"+"$"+discount;
	var elfinal=document.getElementById('price');
	elfinal.textContent="Final:"+"$"+finalAmt;
	var eldiscountcode=document.getElementById('code');
	eldiscountcode.textContent='Code was:'+discountCode;