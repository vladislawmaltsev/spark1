<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>
<?php $this->load->view('admin/common/meta_tags'); ?>
<?php $this->load->view('admin/common/before_head_close'); ?>
</head>
<body class="skin-blue">
<?php $this->load->view('admin/common/after_body_open'); ?>
<?php $this->load->view('admin/common/header'); ?>
<div class="wrapper row-offcanvas row-offcanvas-left"> 
	<?php $this->load->view('admin/common/left_side'); ?>
  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Управление профилями</h1>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
          <table width="835" border="0">
  <tr>
    <td width="325" align="center" valign="top"><img src="<?php echo ($row->photo)?base_url().'glancePublic/uploads/member_images/'.$row->photo:base_url().'glancePublic/images/no-image.jpg';?>" width="300" style=" border:2px solid #666; border-radius:5px; margin:4px;" /></td>
    <td width="500" valign="top"><table width="500" border="0">
      
      <tr>
        <td colspan="2"><strong>Личная информация:</strong></td>
      </tr>
      <tr>
        <td width="140">ФИО:</td>
        <td width="350"><?php echo $row->name;?></td>
      </tr>
      <tr>
        <td>Имя пользователя:</td>
        <td><?php echo $row->username;?></td>
      </tr>
      <tr>
        <td>Семейное положение:</td>
        <td><span class="inftxt"><?php echo $row->relationship_status;?></span></td>
      </tr>
      <tr>
        <td>Эл. адрес:</td>
        <td><span class="inftxt"><?php echo $row->email;?></span></td>
        </tr>
      <tr>
        <td>Телефон:</td>
        <td><span class="inftxt"><?php echo $row->phone;?></span></td>
        </tr>
      <tr>
        <td>Пол:</td>
        <td><span class="inftxt"><?php echo $row->gender;?></span></td>
        </tr>
      <tr>
        <td>Семейное положение:</td>
        <td><span class="inftxt"><?php echo $row->marital_status;?></span></td>
        </tr>
      <tr>
        <td>Дата рождения:</td>
        <td><span class="inftxt"><?php echo date("F d, Y",strtotime($row->dob));?></span></td>
        </tr>
      <tr>
        <td>Образ жизни:</td>
        <td><span class="inftxt"><?php echo $row->life_style;?></span></td>
        </tr>
      <tr>
        <td>Курит:</td>
        <td><span class="inftxt"><?php echo $row->smoking;?></span></td>
        </tr>
      <tr>
        <td>Пьет:</td>
        <td><span class="inftxt"><?php echo $row->drinking;?></span></td>
        </tr>
      <tr>
        <td>Образование:</td>
        <td><span class="inftxt"><?php echo $row->education;?></span></td>
        </tr>
      <tr>
        <td>Страна:</td>
        <td><span class="inftxt"><?php echo $row->country;?></span></td>
        </tr>
      <tr>
        <td>Город:</td>
        <td><span class="inftxt"><?php echo $row->city;?></span></td>
        </tr>
      <tr>
        <td>Обо мне:</td>
        <td><?php echo $row->about_me;?></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td><strong>Ищу:</strong></td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>Ищу:</td>
        <td><span class="inftxt"><?php echo $row->looking_for;?></span></td>
        </tr>
      <tr>
        <td>Диапазон возраста:</td>
        <td><span class="inftxt"><?php echo $row->looking_age_from;?> to <?php echo $row->looking_age_to;?></span></td>
        </tr>
      <tr>
        <td>Семейное положение:</td>
        <td><span class="inftxt"><?php echo $row->looking_marital_status;?></span></td>
        </tr>
      <tr>
        <td>Страна:</td>
        <td><span class="inftxt"><?php echo $row->looking_country;?></span></td>
        </tr>
      <tr>
        <td>Город:</td>
        <td><span class="inftxt"><?php echo $row->looking_city;?></span></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>Всего просмотров:</td>
        <td><?php echo $profile_views;?></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td colspan="2"><hr /></td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><strong>Комментарии:</strong></td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><table width="100%" border="0">
     <?php
				if($comment_row) {
					foreach($comment_row as $commentDetail) {
						if($commentDetail->photo)
	  						$image_thumb = base_url().'glancePublic/uploads/member_images/thumb_'.$commentDetail->photo;
	  					else
	  						$image_thumb = base_url().'glancePublic/images/no-image.jpg';
			?>
      <tr>
        <td width="3%" rowspan="3" valign="top">&nbsp;</td>
        <td width="5%" rowspan="3" valign="top"><img src="<?php echo $image_thumb;?>" alt="<?php echo $commentDetail->name; ?>" width="60" style="border:2px solid #666; border-radius:5px; margin:4px;" /></td>
        <td width="53%"><a href="<?php echo base_url(); ?>profile/<?php echo $commentDetail->username; ?>" class="userlink" title="<?php echo $commentDetail->name; ?>"><?php echo $commentDetail->name; ?></a> <span style="float:right;"><a href="<?php echo base_url(); ?>admin/profile_detail/user_comment_delete/<?php echo $row->username; ?>/<?php echo $commentDetail->comment_id; ?>">Удалить этот комментарий</a></span></td>
        <td width="39%">&nbsp;</td>
      </tr>
      <tr>
        <td><?php echo $commentDetail->comments;?></td>
        <td>&nbsp;</td>
      </tr>
      <tr style="border-bottom: 1px solid #CCC;">
        <td><span style="font-size:11px; color:#666">[ <?php echo dateDiff(date("Y-m-d H:i:s"),$commentDetail->date_comment).' ago';?> ]</span></td>
        <td>&nbsp;</td>
      </tr>
      
      <?php
		}
	} else {
	  ?>
      <tr>
        <td colspan="4">&nbsp;&nbsp;Комментарий не найден</td>
        </tr>
    <?php
	}
	?>    
    </table></td>
  </tr>
          </table>

            
          </div>

        </div>
      </div>
    </section>
  </aside>
</div>
</body>
</html>
