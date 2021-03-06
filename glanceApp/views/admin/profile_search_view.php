<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
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
      <h1> Результат поиска</h1>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Результаты поиска по <?php echo $heading;?></h3>
            </div>
            <!-- /.box-header -->
            <?php
            if($this->session->flashdata('msg')):
			?>
              <div style="color:#009933;font-size:12px;"><?php echo $this->session->flashdata('msg');?></div><br />
            <?php
			endif;
			?>  
            
            <div class="box-body table-responsive">

            <table id="example2" class="table table-bordered table-hover">
            
              <thead>
                <tr>
                    <th><strong>Дата добавления</strong></td>
                    <th><strong>Имя</strong></td>
                    <th><strong>Почта</strong></td>
                    <th><strong>Имя пользователя</strong></td>
                    <th><strong>Статус</strong></td>
                    <th><strong>Действие</strong></td>
                  </tr>
              </thead>
              <?php
			  $i=0;
              if($profiles_view):
			  	foreach($profiles_view as $profile) {
					
					$class = ($i%2==0)?'row':'row1';
					if($profile->sts == 'active') {
						
						$stsConvert = 'inactive';
					} else {
						
						$stsConvert = 'active';
					}
			  ?>
              <tr>
                <td><?php echo date('d-m-Y',strtotime($profile->dated));?></td>
                <td><?php echo $profile->name;?></td>
                <td><?php echo $profile->email;?></td>
                <td><?php echo $profile->username;?></td>
                <td><?php echo ucwords($profile->sts);?></td>
                <td>
                	<a href="<?php echo base_url().'admin/profile_detail/profile/'.$profile->username;?>">Посмотреть детали</a><br/>
                    <a href="<?php echo base_url().'admin/profile_detail/profile_delete/'.$profile->id;?>" onclick="if(confirm('Do you want to delete profile?')){ return true; } else {return false;} ">Удалить профиль</a><br/>
                    <a href="<?php echo base_url().'admin/profile_detail/profile_sts/'.$profile->id.'/'.$stsConvert;?>"><?php echo ucwords($stsConvert);?> Профиль</a>
                </td>
              </tr>
              <?php
			  $i++;
				}
              endif;
              ?>

                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body --> 
          </div>
          <!-- /.box --> 
          
          <!-- /.box --> 
        </div>
      </div>
    </section>
    <!-- /.content --> 
  </aside>
  <!-- /.right-side --> 
</div>
<!-- ./wrapper -->
</body>
</html>