<?
	@session_start();
	@ob_start();
	// include_once 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<? include("head.php"); ?> 
    <title>ISUZU KING OF TRUCKS</title>  
    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet"> 
    <link href="css/line-animation.css" rel="stylesheet">
</head>
<style>
.owl-nav{
	display:none;
}

</style>
	 
<body id="page-top" >
 
    <? 	include("top-nav.php");  ?> 
	<div id="cover" style=" background: url('images/frr-elf/intro.jpg')  no-repeat top center; background-size: cover; ">
			<section class="line-up-intro / animation-element in-view" >
                <div class="line-up-intro-content"> 
                    <div class="line-up-intro-highlight / animation-element">
                        <p class="thai"><span class="red-text">ใหม่! เจ้าแห่งรถบรรทุก </span>อีซูซุ คิงออฟทรัคส์</p>
                       
						<?
							echo ' <img src="images/frr-elf/logo.png" alt="">';
						?> 
                    </div> 
                </div>

             
            </section>
	
	</div>
	   
		<div id="king" class="container text-white thai"  > 
		<h4 class="red-text">สู่อนาคตแห่งการขนส่งกับรถบรรทุกรุ่นใหม่จากอีซูซุ</h4>
		<p>ที่ผู้ประกอบการขนส่งเมืองไทยให้การยอมรับเป็นอันดับ 1* เหนือกว่าด้วยเทคโนโลยีล่าสุด และความเป็นคู่คิดมืออาชีพอันเลื่องชื่อ 
ของอีซูซุ</p>
		  <?	 
								echo '<div class="row line-up-list-item animation-element" style="display: block;">';
								echo '<div class="col m6"><img src="images/frr-elf/list-1.jpg" class="responsive-img"/></div>';
								echo '<div class="col m6"><img src="images/frr-elf/list-2.jpg" class="responsive-img"/></div>'; 
							 
								echo '</div>';
									echo '<ul class="browser-default">
										<li>เครื่องยนต์ซูเปอร์คอมมอนเรล</span> รุ่น 4HK1-TCR 190 แรงม้า ( ในรุ่น FRR90HNFXT )</li>
										<li>ติดตั้ง ฟลายวีล พี.ที.โอ. (Fly wheel P.T.O.)</span> เป็นอุปกรณ์มาตรฐานจากโรงงาน</li>
										<li>อุปกรณ์ดักจับความชื้น (Air Dryer)</span> ช่วยระบายน้ำจากระบบลมเบรก ลดการเกิดสนิม สะดวกสุด ในการบำรุงรักษา ปลอดภัยเป็นเยี่ยม</li>
										<li>ระบบเบรกแอร์โอเวอร์ไฮดรอลิก (AOH)</span> แบบ 2 วงจรแยกอิสระ พร้อมเบรกไอเสีย</li>
									</ul>';
	  
			/*	$chfilename = 'images/'.$gmodel.'/spec.jpg';

			if (file_exists($chfilename)) {
				echo '<div class="container"><img src="images/'.$gmodel.'/spec.jpg" class="img-responsive" /></div>';
			}
			*/
		  ?> 
		  
		  </div>
		
	<div id="cover" style=" background: url('images/frr-elf/intro-2.jpg')  no-repeat top center; background-size: cover; ">
			<section class="line-up-intro / animation-element in-view" >
                <div class="line-up-intro-content"> 
                    <div class="line-up-intro-highlight / animation-element">
                        <p class="thai"><span class="red-text">ใหม่! เจ้าแห่งรถบรรทุก </span>อีซูซุ คิงออฟทรัคส์</p>
                       
						<?
							echo ' <img src="images/frr-elf/logo-2.png" alt="">';
						?> 
                    </div> 
                </div>

             
            </section>
	
	</div>	
		
	 <div  class="container text-white thai" style="margin-top:30px; margin-bottom:30px;"  > 	
	 <div class="row line-up-list-item animation-element" style="display: block;"> 
			 <div class="col m6"><img src="images/frr-elf/list-1.jpg" class="responsive-img"/></div> 
			<div class="col m6"><img src="images/frr-elf/list-2.jpg" class="responsive-img"/></div> 
	 </div> 
		 <ul class="browser-default">
			 <li>เครื่องยนต์ซูเปอร์คอมมอนเรล</span> รุ่น 4HK1-TCR 190 แรงม้า ( ในรุ่น FRR90HNFXT )</li>
			 <li>ติดตั้ง ฟลายวีล พี.ที.โอ. (Fly wheel P.T.O.)</span> เป็นอุปกรณ์มาตรฐานจากโรงงาน</li>
			 <li>อุปกรณ์ดักจับความชื้น (Air Dryer)</span> ช่วยระบายน้ำจากระบบลมเบรก ลดการเกิดสนิม สะดวกสุด ในการบำรุงรักษา ปลอดภัยเป็นเยี่ยม</li>
			 <li>ระบบเบรกแอร์โอเวอร์ไฮดรอลิก (AOH)</span> แบบ 2 วงจรแยกอิสระ พร้อมเบรกไอเสีย</li>
		 </ul> 	
	</div>
		
		  
	  <div class="black">
		  <div class="container" style="padding-top:30px; padding-bottom:30px;">
		<div class="row  animation-element line-up-list-item">
			<div class="col s6 m3 center"><img src="images/list-footer-logo-2.png" class="responsive-img" /></div>
			<div class="col m9">
			<ul class="browser-default white-text">
			<li>รับประกัน 2 ปี ไม่จำกัดระยะทาง (ตามเงื่อนไขที่บริษัทฯ กำหนด)</li>
			<li>บริการหลังการขาย มั่นใจเหนือระดับทั่วไทยด้วยเครือข่ายการจำหน่าย อะไหล่ และการบริการหลังการขายกว่า 200 แห่ง ครอบคลุมทั่วประเทศ พร้อมระบบจัดส่งอะไหล่ด่วน “อีซูซุ พาร์ท เอ็กซ์เพรส” สร้างความมั่นใจเต็มเปี่ยม</li>
			</ul>
			
			</div>
		</div>
		</div>
		 </div>
		  
		  
	 
		 
	 
	 
  
    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script> 
	 <script src="js/bx/jquery.bxslider.min.js"></script>
	<!-- bxSlider CSS file -->
  	<link href="js/bx/jquery.bxslider.css" rel="stylesheet" />
<script src="js/viewportchecker.js"></script>
 
<script src='js/line-up.js'></script>
<script>
	 
		
            $(document).ready(function(){
				
				 
				 
				  
				  $('.slider4').bxSlider({
					//slideWidth: 300,
				/*	minSlides: 1,
					maxSlides: 4,*/
					slideMargin: 10,
					 infiniteLoop: true,
				  });
				  
				 
            });
 </script>     
	 
</body>

</html>
