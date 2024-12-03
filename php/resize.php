<?
// edit png traparent
function resize($filename,$images_file,$images,$paths,$sizez) { 
			  $img_time =  date('dmY');
		 
			if( $images_file == "image/gif" )
			{
			$ext = ".gif";
			  $bn = basename( $filename,$ext ); 
			}
			if (($images_file=="image/jpg")||($images_file=="image/jpeg")||($images_file=="image/pjpeg"))
			{
			$ext = ".jpg";
			  $bn = basename( $filename,$ext ); 
			}
			if( $images_file =="image/png"){
				$ext = ".png";
				 $bn = basename( $filename,$ext ); 
			}
			 
		 
		     $b_new_images = $img_time.$bn.$ext;
			 $new_images =  $img_time.$bn.$ext;
			 
			$new_name_images_base = $b_new_images;
			$size=GetimageSize($images);
			/*
			if(empty($sizez)){
				 $width = $size[1];
			} 
			 */
			if(empty($sizez)){
				$width = 400;
			}else{
				$width =  $sizez;
			}
			 
			
			$height=round($width*$size[1]/$size[0]);
			 
			 if( $images_file == "image/gif" )
			{
			$images_orig = ImageCreateFromGIF($images);
			}
			if (($images_file=="image/jpg")||($images_file=="image/jpeg")||($images_file=="image/pjpeg"))
			{
			$images_orig = ImageCreateFromJPEG($images);
			}
			if( $images_file == "image/png" ) 
			{
			 $images_orig = imagecreatefrompng($images);
			}
			$photoX = ImagesX($images_orig);
			$photoY = ImagesY($images_orig);
			if( $images_file == "image/png" ) 
			{ 
				 $images_fin = imagecreatetruecolor($width, $height); // create new img 
				 imagealphablending($images_fin, false);
				 imagesavealpha($images_fin,true); 
				 $transparent = imagecolorallocatealpha($images_fin, 255, 255, 255, 127);
				 imagefilledrectangle($images_fin, 0, 0, $width, $height, $transparent);
				 imagecopyresampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
			
			}else{
				$images_fin = ImageCreateTrueColor($width, $height);
				ImageCopyResampled($images_fin,$images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
			}
			  $path = $paths.$new_images;
			switch ($images_file) {
				case 'image/jpeg':
				  imagejpeg($images_fin, $path, 60);
				  break;
				case 'image/png':
				  imagepng($images_fin, $path, 0);
				  break;
				case 'image/gif':
				  imagegif($images_fin, $path);
				  break;
				default:
				  exit;
				  break;
			  }
			ImageDestroy($images_orig);
			ImageDestroy($images_fin); 
			
			  $nameimages = $new_name_images_base;
			   return  $nameimages ;
		 
}
 
?>