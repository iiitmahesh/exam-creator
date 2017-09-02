<?php
$img_count=99;
$upload_location = "upload_folder/";
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
	$name = $_FILES['insertImage']['name'];
	$size = $_FILES['insertImage']['size'];
	
	$allowedExtensions = array("jpg","jpeg","gif","png");  //Allowed file types
	foreach ($_FILES as $file) 
	{
	  if ($file['tmp_name'] > '' && strlen($name)) 
	  {
		  if (!in_array(end(explode(".", strtolower($file['name']))), $allowedExtensions)) 
		  {
			
		  }
		  else 
		  {
			  if($size<(20004800))
			  {
				  $actual_image_name = $name; 
					
				  if(move_uploaded_file($_FILES['insertImage']['tmp_name'], $upload_location.$actual_image_name)) 
				  {
					$img_count=100;
				  }
				  else 
				  {
					  //u can print message
				  }
			  }
			  else 
			  {
				  //u can print message
			  }
		  }
	  }
	  else 
	  {
		 //u can print message
	  }
   }
   if($img_count==100){
	//image resizing
		$bg_image = 'upload_folder/'.$actual_image_name;
		$bg = imagecreatefromjpeg($bg_image);
		$sizes = getimagesize($bg_image);
		$new_height=($sizes[1]/$sizes[0])*600;
		$resized_img=imagecreatetruecolor(600,$new_height);
		imagecopyresampled($resized_img,$bg,0, 0, 0, 0,600,$new_height,$sizes[0],$sizes[1]);
		$file=basename($actual_image_name);
		$path="upload_folder/";
		$dname=$path.$file;
		imagejpeg($resized_img,$dname);
   }
}

?>
