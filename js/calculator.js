
	
function changeCalculate(i)
{
 
	var pers = $('#inp-per').val();
	var interest = $('#inp-interest').val();//ดอกเบี้ย
	var priceper = $('#inp-price-per').val().replace(/\,/g, "");

	if (isNaN(pers) || isNaN(priceper) || isNaN(interest)) {
		alert('กรุณากรอกข้อมูลเป็นตัวเลขเท่านั้น');
		return false;
	} 
	
	if (i == 1){
		var typecar = $('#inp-typecar').val().replace(/\,/g, ""); 
		$('#dis-d-price').text(commaSeparateNumber(typecar));
		
	} else if (i == 2){ 
		var typecar = $('#inp-typecar').val().replace(/\,/g, ""); 
	//	alert(typecar);
		var pers = $('#inp-per').val();
		$('#dis-d-pers').text(pers);
		$('#dis-d-price').text(commaSeparateNumber(typecar));
		p = Math.ceil((typecar*pers)/100); // .toFixed(2);// เงินดาวน์
		pdis = commaSeparateNumber(p);
		$('#dis-d-price-pers').text(pdis);
		$('#inp-price-per').val(p);
		
	} else if (i == 3){
		//100x200/1000;
		var typecar = $('#inp-typecar').val().replace(/\,/g, "");
		var priceper = $('#inp-price-per').val().replace(/\,/g, "");
		pers = Math.ceil((100*priceper)/typecar);
		$('#inp-per').val(pers);

	} else if (i == 'all') {
		
		var pers = $('#inp-per').val();
		var typecar = $('#inp-typecar').val().replace(/\,/g, "");
		var priceper = $('#inp-price-per').val().replace(/\,/g, "");
		var interest = $('#inp-interest').val();//ดอกเบี้ย
		var yearmonth = $('#inp-year-month').val(); 
		var titlecar = $('#inp-typecar option:selected').attr('title');
	 
		$('#resu').text(titlecar);
		
		if (priceper == '') {
			alert('กรุณาพิมพ์จำนวนเงินดาวน์');
			$('#calculateInput').show();
			$('#calculateResult').hide();
		} else {
		
			$('#dis-d-pers').text(pers); //%เงินดาวน์
			$('#dis-d-price').text(commaSeparateNumber(typecar)); //ราคารถ
		
			sump = typecar-priceper;//ยอดจัดสินเชื่อ
			
			//alert(sump); 
			$('#dis-sum-p').text(commaSeparateNumber(sump));
		
			$('#dis-year-month').text(yearmonth*12);//จำนวนงวด
			$('#dis-year').text(yearmonth);//จำนวนปี
		
			//(ยอดจัดไฟแนนซ์ * ดอก%) * ปี = ดอกทั้งหมด
			sum = Math.ceil(((sump*interest/100) * yearmonth)+sump);//.toFixed(2);
		//	alert(sum);
			$('#dis-sum').text(commaSeparateNumber(sum));//ยอดจัดสินเชื่อรวมดอกเบี้ย
			
			pricepermonth = Math.ceil(sum/(yearmonth*12)); //.toFixed(2);//ค่างวดต่อเดือน
			$('#dis-pricepermonth').text(commaSeparateNumber(pricepermonth));
			
			
			$('#calculateInput').hide();
			$('#calculateResult').show();
			$('#resetCalculate').show();

			$('#buttonCalculate').hide();
		}
	}
	return false;
}

function backCal()
{
	$('#calculateInput').show();
	$('#calculateResult').hide();
	$('#resetCalculate').hide();

	$('#buttonCalculate').show();

	$('#calculateInput').find('input').val('');

	$('#calculateInput').find('select').children()[0].attr( 'selected', 'selected' );
	return false;
}

function checkNumber(str)
{
	return str.matches("-?\\d+(\\.\\d+)?");
}

function commaSeparateNumber(val){
    while (/(\d+)(\d{3})/.test(val.toString())){
      val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
    }
    return val;
  }
				 