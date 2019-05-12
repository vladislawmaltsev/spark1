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
<div class="siteWraper">
  <?php $this->load->view('common/header'); ?>
  
  <div class="innerPageswrap">
  <!--Recent Profiles Start-->
  <div class="container">
		
        <div class="err"><?php echo $msg;?></div>
            <div class="row">
  		<div class="col-md-6 col-md-offset-3">
        <div class="userccount">
        <h1>Присоединиться</h1>
        <div class="formpanel">
          <form name="frm" id="frm" method="post" action="">
            <div class="formrow">
              <label>Логин *</label>
              <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>" class="form-control" />
              <?php echo form_error('username', '<div class="error"><span>', '</span></div>'); ?>
              <div class="clear"></div>
            </div>
            <div class="formrow">
              <label>Пароль *</label>
              <input type="password" name="password" id="password" class="form-control" value="<?php echo set_value('password'); ?>" />
              <?php echo form_error('password', '<div class="error"><span>', '</span></div>'); ?>
              <div class="clear"></div>
            </div>
            <div class="formrow">
              <label>Email *</label>
              <input type="text" name="email" id="email" class="form-control" value="<?php echo set_value('email'); ?>" />
              <?php echo form_error('email', '<div class="error"><span>', '</span></div>'); ?>
              <div class="clear"></div>
            </div>
            <div class="formrow">
            	<div class="row">
                    <div class="col-md-6 col-sm-6">
                    	  <label>Я *</label>
                          <select name="gender" id="gender" class="form-control">
                            <option value="male" selected="selected">Мужчина</option>
                            <option value="female">Женщина</option>
                          </select>
                          <?php echo form_error('gender', '<div class="error"><span>', '</span></div>'); ?>
                    </div>
                    <div class="col-md-6 col-sm-6">
                    	  <label>Ищу</label>
                          <select name="seeking_for" id="seeking_for" class="form-control">
                            <option value="Female" selected="selected">Женщину</option>
                            <option value="Male">Мужчина</option>
                          </select>
                          <?php echo form_error('seeking_for', '<div class="error"><span>', '</span></div>'); ?>
                    </div>
                </div>              
            </div>
            <div class="formrow">
              <label>День рождения *</label>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <select name="birth_day" id="birth_day" class="form-control">
                            <option value="<?php echo set_value('birth_day'); ?>" selected="selected"><?php echo (set_value('birth_day'))?set_value('birth_day'):'День'; ?></option>
                            <?php
                            for($i=1;$i<=31;$i++): ?>
                                <option value="<?php echo sprintf("%02s", $i);?>"><?php echo sprintf("%02s", $i);?></option>
                            <?php endfor; ?>
                        </select>
                        <?php echo form_error('birth_day', '<div class="error"><span>', '</span></div>'); ?>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <select name="birth_month" id="birth_month" class="form-control">
                            <option value="<?php echo set_value('birth_month'); ?>" selected="selected"><?php echo (set_value('birth_month'))?set_value('birth_month'):'Месяц'; ?></option>
                            <?php
                            for($i=1;$i<=12;$i++): ?>
                                <option value="<?php echo sprintf("%02s", $i);?>"><?php echo sprintf("%02s", $i);?></option>
                            <?php endfor; ?>
                        </select>
                        <?php echo form_error('birth_month', '<div class="error"><span>', '</span></div>'); ?>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <select name="birth_year" id="birth_year" class="form-control">
                            <option value="<?php echo set_value('birth_year'); ?>" selected="selected"><?php echo (set_value('birth_year'))?set_value('birth_year'):'Год'; ?></option>
                            <?php
                            for($i=1950;$i<=date('Y');$i++): ?>
                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php endfor; ?>
                        </select>
                        <?php echo form_error('birth_year', '<div class="error"><span>', '</span></div>'); ?>
                    </div>
                </div>
              
              
              <div class="clear"></div>
            </div>
            <div class="formrow">
              <label>Страна *</label>
                <select name="country" id="country" class="form-control">
                    <option value="Belarus">Беларусь</option>
                    <option value="Russia">Россия</option>
                    <option value="Ukraine">Украина</option>
                    <option value="America">USA</option>
                </select>
              <?php echo form_error('country', '<div class="error"><span>', '</span></div>'); ?>
              <div class="clear"></div>
            </div>

            
            <input type="submit" value="Присоединиться" class="btn" />
            
          </form>
        </div>
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
