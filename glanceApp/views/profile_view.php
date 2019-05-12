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
    <!--Recent Profiles Start-->
	<div class="row">
        	<div class="col-md-9">
            	<div class="profilebgcol">
            	<div class="profileWrap">
        <h1><?php echo ($row->name=='')?$this->session->userdata('username'):$row->name;?></h1>
        <?php //$this->load->view('common/actions.php');?>
        <div class="clear"></div>
        
        <!--Personal Detail-->
          <div class="row">
        	<div class="col-md-6">
            <h2>Моя информация</h2>
            <ul class="infoList">
              <li>
                <div class="label">Имя:</div>
                <div class="inftxt"><?php echo $row->name;?></div>
                <div class="clear"></div>
              </li>
              <li>
                <div class="label">Хочу:</div>
                <div class="inftxt"><?php echo $row->relationship_status;?></div>
                <div class="clear"></div>
              </li>
              <?php if(@$email_setting):?>
              <li>
                <div class="label">Email:</div>
                <div class="inftxt"><?php echo $row->email;?></div>
                <div class="clear"></div>
              </li>
              <?php endif;?>
              <?php if(@$phone_setting):?>
              <li>
                <div class="label">Телефон:</div>
                <div class="inftxt"><?php echo $row->phone;?></div>
                <div class="clear"></div>
              </li>
              <?php endif;?>
              <li>
                <div class="label">Пол:</div>
                <div class="inftxt"><?php echo $row->gender;?></div>
                <div class="clear"></div>
              </li>
              <li>
                <div class="label">Мой статус:</div>
                <div class="inftxt"><?php echo $row->marital_status;?></div>
                <div class="clear"></div>
              </li>
              <?php if(@$dob_setting):?>
              <li>
                <div class="label">День рождения:</div>
                <div class="inftxt"><?php echo date("F d, Y",strtotime($row->dob));?></div>
                <div class="clear"></div>
              </li>
              <?php endif;?>
              <li>
                <div class="label">Стиль жизни:</div>
                <div class="inftxt"><?php echo $row->life_style;?></div>
                <div class="clear"></div>
              </li>
              <li>
                <div class="label">Курение:</div>
                <div class="inftxt"><?php echo $row->smoking;?></div>
                <div class="clear"></div>
              </li>
              <li>
                <div class="label">Алкоголь:</div>
                <div class="inftxt"><?php echo $row->drinking;?></div>
                <div class="clear"></div>
              </li>
              <li>
                <div class="label">Образование:</div>
                <div class="inftxt"><?php echo $row->education;?></div>
                <div class="clear"></div>
              </li>
              <?php if(@$location_setting):?>
              <li>
                <div class="label">Страна:</div>
                <div class="inftxt"><?php echo $row->country;?></div>
                <div class="clear"></div>
              </li>
              <li>
                <div class="label">Город:</div>
                <div class="inftxt"><?php echo $row->city;?></div>
                <div class="clear"></div>
              </li>
              <?php endif;?>
            </ul>
            </div>
            <div class="col-md-6">
            <h2>Ищу:</h2>
            <ul class="infoList">
              <li>
                <div class="label">Пол:</div>
                <div class="inftxt"><?php echo $row->looking_for;?></div>
                <div class="clear"></div>
              </li>
              <li>
                <div class="label">Возраст</div>
                <div class="inftxt"><?php echo $row->looking_age_from;?> to <?php echo $row->looking_age_to;?></div>
                <div class="clear"></div>
              </li>
              <li>
                <div class="label">Статус:</div>
                <div class="inftxt"><?php echo $row->looking_marital_status;?></div>
                <div class="clear"></div>
              </li>
              <li>
                <div class="label">Страна:</div>
                <div class="inftxt"><?php echo $row->looking_country;?></div>
                <div class="clear"></div>
              </li>
              <li>
                <div class="label">Город:</div>
                <div class="inftxt"><?php echo $row->looking_city;?></div>
                <div class="clear"></div>
              </li>
            </ul>
            </div>
          </div>
        
        
        <div class="row">
        	<div class="col-md-5">
            	<!--Profile Pic-->
        		<div class="pofilePic">
          <div class="picBox"><img src="<?php echo ($row->photo)?base_url().'glancePublic/uploads/member_images/'.$row->photo:base_url().'glancePublic/images/no-image.jpg';?>" /></div>
<!--          <div class="ratebox">-->
<!--            <div class="rateint">-->
<!--              <div class="ratelabel">Total Views :</div>-->
<!--              <div class="ratevalue">--><?php //echo $profile_views;?><!--</div>-->
<!--              <div class="clear"></div>-->
<!--            </div>-->
<!--          </div>-->
          <div class="aboutme">
            <h2>Обо мне</h2>
            <p><?php echo $row->about_me;?></p>
          </div>
        </div>
            </div>
            
            <div class="col-md-7">
            	<!--Profile Detail-->
        		<div class="pofileDetail">
        </div>
            </div>
        </div>
        
        
        
        
        
        
        </div>
      </div>
            </div>
            
            <div class="col-md-3">
            	<!--Right Col Start-->
    			<?php $this->load->view('common/profile_right_side');?>
            </div>
    </div>
    
      

    
    

  </div>
  </div>
  <!--Recent Profiles Endt-->
  <?php $this->load->view('common/footer'); ?>
</div>
<!--/Site Wraper End-->
<?php $this->load->view('common/before_body_close'); ?>
</body>
</html>
