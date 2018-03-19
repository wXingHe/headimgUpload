<?php  

	$base64_image_content = $_POST['photo'];
	if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)){
	$type = $result[2];
	$new_file = "images/";
	if(!file_exists($new_file))
		{
		//检查是否有该文件夹，如果没有就创建，并给予最高权限
		mkdir($new_file, 0700);
	}
	$new_file = $new_file.time().".{$type}";
		if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_image_content)))){
			echo json_encode(["status"=>'success',"url"=>$new_file]);
		}else{
			echo json_encode(["status"=>'error',"describ"=>'图片保存失败');
		}
}








?>