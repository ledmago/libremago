<?php
include("libraMago/setup.php");


// TEK VERİ echo  $database_mago->tek_data("table_name","id='2'","col_name");


/*
 $bencek =  $database_mago->cok_data("table_name", "yetki='2'", "ORDER BY id DESC");
foreach( $bencek as $row ){
       echo $row['id']." ".$row['ad']."<br />";
     } 
	 */
	 
// EKLE $database_mago->data_insert("table_name","col_name1,col_name2","'firat','123456'");
// SİLME $database_mago->data_delete("table_name","id='60'");


// $database_mago->data_update("table_name","ad='firatimben'","id='1'");

//$user_mago->field_control("table_name","id='1'","col_name","firatdogan")
//$user_mago->Login("table_name","post_username","post_password","table_field_username","table_field_password");
//$online_mago->add_online("online","username","time","firat");
//$online_mago->delete_offline("online","time","10");
//echo $user_mago->clear_special("asdüğ'ÇĞP");
// echo $image_mago->Upload($_FILES["resim"],1,"yol/anan","random");

