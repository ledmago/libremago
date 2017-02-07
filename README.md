Hi Coders and Developpers. if use libremago, you can develop easily.

# Usage

## Install : Add to top of page this code : 

> include("libraMago/setup.php");

### Get One Column Data : 

> > > > > echo  $database_mago->tek_data("table_name","id='2'","col_name");

### Get more than one Data : 

> > > > > $bencek =  $database_mago->cok_data("table_name", "yetki='2'", "ORDER BY id DESC");

> > > > > foreach( $bencek as $row ){

> > > > >        echo $row['id']." ".$row['ad']."<br />";

> > > > >      } 

###Insert row to Database : 

> > > > > $database_mago->data_insert("table_name","col_name1,col_name2","'firat','123456'");

###Delete row from database : 

> > > > > $database_mago->data_delete("table_name","id='60'");

###Update Data : 

> > > > > $database_mago->data_update("table_name","ad='firatimben'","id='1'");

###Get Count Of Data : 

> > > > > $database_mago->data_count("table_name","id='1'");

###Control The field from database : 

> > > > > $user_mago->field_control("table_name","id='1'","col_name","firatdogan");

###Login Control : 

> > > > > $user_mago->Login("table_name","post_username","post_password","table_field_username","table_field_password");

###Add User to Online Table : 

> > > > > $online_mago->add_online("table_name","table_field_name","time","firat");

###Delete User from online : 

> > > > > $online_mago->delete_offline("online","time","10");

###Clear special char from string : 

> > > > > echo $user_mago->clear_special("asdüğ'ÇĞP");

###Upload Image to Server : 

> > > > > echo $image_mago->Upload($_FILES["resim"],1,"yol/anan","random");
