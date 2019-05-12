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
  	<div class="container">
    	
        <div class="row">
        	<div class="col-md-8 col-sm-7">
            	<div class="profilebgcol">
            		<h1>Свяжись с нами</h1>
      				<div class="one_half left">
        <p>Вы можете связаться с нами в любое время дня и ночи.<br>
            <strong>Мы готовы обсудтить с вами все возникающие вопросы</strong></p>
<br><br><br>
        <form name="frm" id="frm" method="post" action="">
          <fieldset>
            <label for="name" class="blocklabel">Телефон </label>
            <p class="">
              <input readonly  type="text" name="fname" id="fname" value="+7 (965) - 593 - 94 - 40" class="form-control" />
            </p>
            <label for="email" class="blocklabel">E-Mail</label>
            <p class="">
              <input readonly type="text" name="email" id="email" class="form-control" value="bmacha@mail.ru" />
            </p>
            <label for="message" class="blocklabel">Адрес</label>
            <p class="">
              <textarea readonly name="comment" id="comment" class="form-control" cols="20" rows="7"> Россия, респ Татарстан, г. Казань, ул Кремлевская, дом 35</textarea>
            </p>

          </fieldset>
        </form>
      </div>
                </div>
            </div>
        </div>
        
      
      
     
     
  </div>
  </div>
  
  <?php $this->load->view('common/footer'); ?>
</div>
<!--/Site Wraper End-->
<?php $this->load->view('common/before_body_close'); ?>
</body>
</html>
