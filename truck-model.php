<?
	@session_start();
	@ob_start();
	include_once 'conn.php';
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

    <!-- Navigation -->
    <? 	include("top-nav.php"); 
	 
				$model = $_GET['id'];
				$sql= mysql_query("SELECT * FROM  vehicles  WHERE model ='".$model." ' ");
				while($row = mysql_fetch_array($sql)){
					$gmodel =  $row['model'];
					$optid = $row['option_id'];
					$cover = $row['img_color'];
				 
				}
	 
	 ?> 
	<div id="cover" style=" background: url('images/<? echo $gmodel."/".$cover; ?>')  no-repeat top center; background-size: cover; ">
			<section class="line-up-intro / animation-element in-view" >
                <div class="line-up-intro-content"> 
                    <div class="line-up-intro-highlight / animation-element">
                        <p class="thai"><span class="red-text">ใหม่! เจ้าแห่งรถบรรทุก </span>อีซูซุ คิงออฟทรัคส์</p>
                       
						<?
							echo ' <img src="images/'.$gmodel.'/logo.png" alt="">';
						?> 
                    </div> 
                </div>

             
            </section>
	
	</div>
	   <br/>
		<div id="king" class="container text-white thai"  > 
		  <?	
			// eng ine
			  $csql = "SELECT * FROM  option_truck WHERE type ='1' and id_car='".$optid."' ";  
				$sqlt1 = mysql_query($csql );
				  $numrow = mysql_num_rows($sqlt1);
			if($numrow >= 1){	 
				if( $gmodel == "frr"){
					echo '<br/><h4 class="red-text">เครื่องยนต์</h4>'; 
					
							while($row = mysql_fetch_array($sqlt1)){
									$gh[] =  $row['head'];
									$title[] = $row['title'];
									$imgdata[] = $row['img']; 
							}
								echo '<div class="row " style="display: block;">';
								echo '<div class="col m4 offset-m1"><img src="images/'.$imgdata[0].'" class="responsive-img line-up-detail-engine  animation-element"/></div>';
								echo '<div class="col m6 line-up-e-img animation-element">';
								foreach ($gh as $index => $egh ){
									 
									echo '<h4 class="red-text">'.$egh.'</h4>';
									echo '<p>'.$title[$index].'</p><br/>';
								}
								
								echo '</div></div>';
							
					 
				}else{
							while($row = mysql_fetch_array($sqlt1)){
									$gh =  $row['head'];
									$title = $row['title'];
									$imgdata = $row['img'];
								
								
								echo '<div class="row " style="display: block;">';
								echo '<div class="col m4 offset-m1"><img src="images/'.$imgdata.'" class="responsive-img line-up-detail-engine  animation-element"/></div>';
								echo '<div class="col m6  line-up-e-img animation-element">';
								echo '<h4 class="red-text">'.$gh.'</h4>';
								echo '<p>'.$title.'</p></div>';
								echo '</div>';
							}
				}
			}
				
		// gear
			$gearl = "SELECT * FROM  option_truck WHERE type ='2' and id_car='".$optid."' ";  
			$gsql = mysql_query( $gearl );
				  $num2 = mysql_num_rows($gsql);
				
				if($num2 >= 1){
					echo '<br/><div class="slider4 ">';
					while($rowg = mysql_fetch_array($gsql)){
						$gheadg =  $rowg['head'];
						$titleg = $rowg['title'];
						$imgdatag = $rowg['img']; 
		  
						echo ' <div class="slide"><div class="row" >';
						echo '<div class="col m5 offset-m2"><img src="images/'.$imgdatag.'" class="responsive-img"/></div>';
						echo '<div class="col m4"><h5 class="red-text">'.$gheadg.'</h5>'.$titleg.'</div>';
						echo '</div></div>';
					}
					echo '</div>';
				} 
			if($model == 'fvm-240'){
				include('fvm240.php');
			}else if($model == 'nqr' || $model == 'npr-150' || $model == 'nmr-130' || $model == 'nlr-130' ){
				  
				echo '<br/><h4 class="red-text">สู่อนาคตแห่งการขนส่งกับรถบรรทุกรุ่นใหม่จากอีซูซุ</h4><p>ที่ผู้ประกอบการขนส่งเมืองไทยให้การยอมรับเป็นอันดับ 1* เหนือกว่าด้วยเทคโนโลยีล่าสุด และความเป็นคู่คิดมืออาชีพอันเลื่องชื่อ 
ของอีซูซุ</p><br/>';
			}
				
				// detail
			$desql = "SELECT * FROM  option_truck WHERE type ='3' and id_car='".$optid."' ";  
			$dq = mysql_query( $desql );
			 $num3 = mysql_num_rows($dq);
				
				if($num3 >= 1){
				 
					$d = 0;
					while($rowdq = mysql_fetch_array($dq)){
						$gheaddq =  $rowdq['head'];
						$titledq = $rowdq['title'];
						$imgdatadq = $rowdq['img']; 
					
						if ($d%2==0) { // if counter is multiple of 4 
						echo '<div class="row line-up-list-item animation-element" >';
						}
						echo '<div class="col m6">';  
						echo '<img src="images/'.$imgdatadq.'" class="responsive-img"/></br>';
						echo '<h6 class="red-text">'.$gheaddq.'</h6>'.$titledq.'';  
						echo '</div>'; // 6
						$d++;
						
						if($d%2==0) { // if counter is multiple of 3 
							echo "</div>";
						} //%4
				 
					}
						if($d%2!=0) { // put closing div if loop is not exactly a multiple of 3  
								echo "</div>";
						}	
					echo '</div>';
				} 
			
				$chfilename = 'images/'.$gmodel.'/spec.jpg';

			if (file_exists($chfilename)) {
				echo '<div class="container"><img src="images/'.$gmodel.'/spec.jpg" class="img-responsive" /></div>';
			}
	
			 
			
		  ?> 
		  
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
				
				$('.headtext').addClass("hide_check").viewportChecker({
					classToAdd: 'visible_check animated fadeInDown',
					offset: 0, 
				});
			 
				 
				  
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
