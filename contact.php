<? 
	@session_start();
	@ob_start();
	// include_once 'conn.php';
 
	 ?> 
<!DOCTYPE html>
<html lang="en">
  <head>

   <? include("head.php"); ?>  
    <title>Contact Isuzu Nakornluang</title> 
	<meta name="description" content="" />
	 <meta name="keywords" content="" />  
	<link rel="stylesheet" type="text/css" href="js/hover/css/set2.css" />  
	<script src="js/drive/contact.js"></script> 
	  
  </head>
  <body>

    <?
	include("top-nav.php");
	?>
 
   
      <div class="container ">
		  
		 
		<div class="row" style="margin:30px 0px 30px 0px;">
		<div class="col s12 m12 l12">
					<div class="parallelogram center">
					<p class="h4 texth">ติดต่อเรา</p>
					</div>
		</div>			
		</div>
		 
   
    <form id="form"> 

	<div class="row" style="margin:30px 0px 150px 0px;"> 
	<div  class="col s12  m8 offset-m2   z-depth-3" style="padding:30px;">
	
	  <p class="h4">กรอกข้อมูลเพื่อติดต่อ</p>	 
	 <p>หากท่านมีคำถามหรือข้อสอบถามใดๆ บริษัทฯ ยินดีที่จะตอบข้อสงสัยทุกประการของของท่าน
		รวมทั้งจะนำข้อเสนอแนะต่างๆ ไปปรับปรุงงานบริการ และพัฒนาผลิตภัณฑ์ของเราให้ดียิ่งขึ้นต่อไป</p>
	 	<div style="margin:15px 0px 15px 0px">
			<select name="type" id="type" name="type" class="browser-default">
			<option value="" selected="selected"> -- ประเภทการติดต่อ -- </option>
			<?/*
			 $tsql = mysql_query('SELECT * FROM title_head');
			 while ($data_op = mysql_fetch_array($tsql)){  
				 echo '<option value="'.$data_op['id'].'">'.$data_op['name1'].'</option>';
			 } 
			*/
			?>
			 
			</select>
		</div>
		<div style="margin:15px 0px 15px 0px">
		 <select id="sel" name="showroom" class="browser-default"> <!-- class="browser-default" -->
		 <option value="" selected="selected"> -- เลือกศูนย์บริการ -- </option> 
					 <option value="พระราม2">สาขาพระราม2</option>
					 <option value="เอกชัย บางบอน">สาขาเอกชัย บางบอน</option>
					 <option value="จรัญสนิทวงศ์">สาขาจรัญสนิทวงศ์</option>
					 <option value="อุดมสุข บางนา">สาขาอุดมสุข บางนา</option>
					 <option value="แจ้งวัฒนะ">สาขาแจ้งวัฒนะ</option>
					 <option value="รัตนาธิเบศ">สาขารัตนาธิเบศ</option>
					 <option value="ธัญญบุรี">สาขาธัญญบุรี</option> 
					 <option value="นวนคร">สาขานวนคร</option>
					 <option value="ส่วนกลาง">ส่วนกลาง</option> 
		</select>
		</div>
		
		<div class="input-field">
          <input  id="title" type="text" class="validate" name="title">
          <label for="title">หัวเรื่อง</label>
        </div> 
		
		<div class="input-field">
          <textarea id="detail" class="materialize-textarea" name="detail"></textarea>
          <label for="detail">รายละเอียด</label>
        </div>
		
		<div class="input-field">
          <input id="frist_name" type="text" class="validate" name="name">
          <label for="fristt_name">ชื่อ - นามสกุล</label>
        </div>
		<div class="row">
				 <div class="col s12 m6 l6">
					<div class="input-field">
					  <input id="email" type="email" class="validate" name="email">
					  <label for="email">Email</label>
					</div>
				</div>
				<div class="col s12 m6 l6">
					 <div class="input-field">
					  <input id="tel" type="tel" class="validate" name="tel">
					  <label for="tel">เบอร์โทร</label>
					</div>
				</div>
		</div>
		
		<div class="input-field">
          <textarea id="add" class="materialize-textarea" name="address"></textarea>
          <label for="add">ที่อยู่</label>
        </div>
		 
		   <button type="button"  class="btn waves-effect waves-light orange" onClick="sendContact();">Send</button> 
		  
	  
     </div> 
	   
	 
	  </div>
	  <div id="status"></div>
    </form>
  
        
		

		 
      </div>
   
    
 
	 
	 
	  
	 <? 
			include("footer.php");
	 ?>
 
   
  

<!-- Add fancyBox --> 
<link  href="js/fancybox/dist/jquery.fancybox.min.css" rel="stylesheet">
<script src="js/fancybox/dist/jquery.fancybox.min.js"></script>

  </body>
</html>