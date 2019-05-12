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
  
  <!--Form Section Start-->
  <?php if(!$this->session->userdata('is_user_login')):?>
  <div class="searchForm">
    <div class="container"> 
      <!--Signup Start-->
      <div class="row">
      	<div class="col-md-4 col-sm-5">
        	<div class="signupBox">
        <h1>Присоединиться</h1>
        <div class="formboxWrap">
          <form name="frm" id="frm" method="post" action="">
            <div class="formbox">
              <label>Логин *</label>
              <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>" class="form-control" />
              <?php echo form_error('username', '<div class="error"><span>', '</span></div>'); ?>
              <div class="clear"></div>
            </div>
            <div class="formbox">
              <label>Пароль *</label>
              <input type="password" name="password" id="password" class="form-control" value="<?php echo set_value('password'); ?>" />
              <?php echo form_error('password', '<div class="error"><span>', '</span></div>'); ?>
              <div class="clear"></div>
            </div>
            <div class="formbox">
              <label>Email *</label>
              <input type="text" name="email" id="email" class="form-control" value="<?php echo set_value('email'); ?>" />
              <?php echo form_error('email', '<div class="error"><span>', '</span></div>'); ?>
              <div class="clear"></div>
            </div>
            <div class="formbox">
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
                            <option value="Female" selected="selected">Женщина</option>
                            <option value="Male">Мужчина</option>
                          </select>
                          <?php echo form_error('seeking_for', '<div class="error"><span>', '</span></div>'); ?>
                    </div>
                </div>              
            </div>
            <div class="formbox">
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
            <div class="formbox">
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
            <input type="submit" value="Зарегистрироваться" class="btn" />
            
          </form>
        </div>
      </div>
      	</div>
        <div class="col-md-8 col-sm-7"><?php echo $content;?></div>
      </div>      
    </div>
  </div>
  
  <!--Login Start-->
  <div class="signinBox">
        <div class="container">
        <div class="loginWrap">
        	<form name="login_form" id="login_form" method="post" action="<?php echo base_url().'user/login';?>">
        	<div class="row">
            	<div class="col-md-3 col-sm-3"><input type="text" name="username" id="username" class="form-control" placeholder="логин" /></div>
                <div class="col-md-3 col-sm-3"><input type="password" name="password" id="password" class="form-control" placeholder="пароль" /></div>
                <div class="col-md-2 col-sm-2"><input type="submit" name="" class="btn" value="Логин" /></div>
            </div>
          </form>
          
        </div>
        </div>
      </div>
  
  <?php endif;?>
  
  <!--Form Section End--> 
  
  
  
<div class="howitwrap">
	<div class="container">
    	<h3>Как найти свою половинку?</h3>
        
        <ul class="row howtolist">
        	<li class="col-md-4">
            	<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                <h5>Создай аккаунт</h5>
                <p>Добавь в свой профиль необходимую информацию, чтобы люди знали о тебе больше.</p>
            </li>
            
            <li class="col-md-4">
            	<div class="icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                <h5>Выбери параметры</h5>
                <p>Тебе нужно будет указать параметры для поиска партнера. Это позволит нам предложить тебе лучшие варианты. </p>
            </li>
            
            <li class="col-md-4">
            	<div class="icon"><i class="fa fa-mars-double" aria-hidden="true"></i></div>
                <h5>Начни общение</h5>
                <p>Добавь пользователя в друзья и напиши ему сообщение. Желаем тебе удачи в поиске партнера!</p>
            </li>
        </ul>
        
    </div>
</div>
  
  

    
<!--Welcome Start-->    
<div class="welcomeWrap">
<div class="container">
<h3>Добро пожаловать в Spark!</h3>

<p>Мы рады приветствовать тебя на нашем сайте знакомств! Если ты до сих под не зарегистрирован, то делай это скорее и начинай свое общение. Сразу после регистрации ты сможешь указать параметры, исходя из которых мы будем предлагать тебе партнеров. Здесь с тобой будут знакомиться люди, которые так же заинтересованы в знакомстве, как и ты, так что не переживай - тебе здесь рады!</p>
</div>
</div>

  
  <?php $this->load->view('common/footer'); ?>
</div>
<!--/Site Wraper End-->
<?php $this->load->view('common/before_body_close'); ?>
</body>
</html>
