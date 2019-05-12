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
  <?php $this->load->view('common/header'); ?>
  
  <div class="innerPageswrap">
  <div class="container">
    
    
    <div class="row">
  	<div class="col-md-6 col-md-offset-3">
    <form action="<?php echo base_url();?>searchfriend" method="post">
      <div class="userccount">
      	<h2>Я ищу</h2>
        <div class="formpanel">
          <div class="formrow">
            <label>Пол</label>
            <select name="gender" id="gender" class="form-control">
              <option value="" selected="selected">-</option>
              <option value="male">Мужчина</option>
              <option value="female">Женщина</option>
            </select>
          </div>
          <div class="formrow">
            <div class="row">
            	<div class="col-md-5"><label>Вораст</label>
            <select class="form-control" name="age_frm">
              <option value="" selected="selected">-</option>
              <?php for($p=18;$p<=50;$p++):?>
              <option value="<?php echo $p;?>"><?php echo $p;?></option>
              <?php endfor ?>
            </select></div>
                <div class="col-md-2"><label>До</label></div><br>
                <div class="col-md-5"><select class="form-control" name="age_to">
              <option value="" selected="selected">-</option>
              <?php for($k=18;$k<=50;$k++):?>
              <option value="<?php echo $k;?>"><?php echo $k;?></option>
              <?php endfor; ?>
            </select></div>
            </div>                        
          </div>
          <div class="formrow">
            <label>Имя</label>
            <input type="text" name="full_name" class="form-control" />
          </div>
          <div class="formrow">
            <label>Email</label>
            <input type="text" name="email" id="email" class="form-control" />
          </div>
          <div class="formrow">
            <label>Статус</label>
            <select name="martial_status" class="form-control">
              <option value="" selected="selected">статус</option>
              <option value="Never Married" selected="">Свободен</option>
              <option value="Married but looking">В отношениях</option>
              <option value="Divorced">Разведен</option>
              <option value="Widowed">Вдовец(вдова)</option>
              <option value="Separated">Нет отношений</option>
            </select>
          </div>
          <div class="formrow">
            <label>Оношение к курению</label>
            <select name="smoking" class="form-control">
              <option value="" selected="selected">-</option>
              <option value="No">Отрицательное</option>
              <option value="Yes">Положительное</option>
            </select>
          </div>
          <div class="formrow">
            <label>Country</label>
            <select name="country" id="country" class="form-control">
                <option value="Belarus">Беларусь</option>
                <option value="Russia">Россия</option>
                <option value="Ukraine">Украина</option>
                <option value="America">USA</option>
            </select>
          </div>
          <div class="formrow">
            <label>Город</label>
            <input type="text" name="city" class="form-control">
          </div>
          <div class="buttonBox">
            <input type="submit" value="Search" />
        </div>
      </div>
      </div>
    </form>
    </div>
    </div>
    
  </div></div>
  <?php $this->load->view('common/footer'); ?>
</div>
<!--/Site Wraper End-->
<?php $this->load->view('common/before_body_close'); ?>
</body>
</html>
