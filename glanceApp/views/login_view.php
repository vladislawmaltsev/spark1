<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title;?></title>
<?php $this->load->view('common/meta_tags'); ?>
<?php $this->load->view('common/before_head_close'); ?>
</head>
<body>
<?php $this->load->view('common/after_body_open'); ?>
<!--Site Wraper Start-->
<div class="siteWraper" style="height: 100vmax">
  <?php $this->load->view('common/header'); ?>
  
  <div class="innerPageswrap">
  <!--Recent Profiles Start-->
  <div class="container">
		<div class="row">
  		<div class="col-md-6 col-md-offset-3">
        <div class="userccount">
        <div class="err"><?php echo $msg;?></div>
        	<h1>Войти</h1>
            <form name="login_form" id="login_form" method="post" action="<?php echo base_url().'user/login';?>">
        	<div class="formpanel">
            <div class="formrow">
            <label>Логин</label>
        	<input type="text" name="username" id="username" class="form-control" value="<?php echo set_value('username');?>"  />
            <?php echo form_error('username', '<div class="error"><span>', '</span></div>'); ?>
            </div>
            <div class="formrow">
            <label>Пароль</label>
        	<input type="password" name="password" id="password" class="form-control" value="<?php echo set_value('password');?>"  />
            <?php echo form_error('password', '<div class="error"><span>', '</span></div>'); ?>
            </div>
            

            
            <input type="submit" name="" value="Войти" class="btn" />
            
            
            
			</div>
            </form>
        
        
        <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> Нет аккаунта? <a href="<?php echo base_url();?>register">Регистрируйся</a></div>
        
        
        </div>
        </div>
        </div>
        
    </div>
  <!--Recent Profiles Endt-->
  </div>
    
    
  <?php $this->load->view('common/footer'); ?>
</div>
<!--/Site Wraper End-->
<?php $this->load->view('common/before_body_close'); ?>
</body>
</html>
