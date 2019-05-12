<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title;?></title>
<?php $this->load->view('common/meta_tags'); ?>
<?php $this->load->view('common/before_head_close'); ?>
<script type="text/javascript" src="<?php echo base_url();?>glancePublic/js/jquery.fancybox.js?v=2.0.6"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>glancePublic/css/jquery.fancybox.css?v=2.0.6" media="screen" />
<script type="text/javascript" src="<?php echo base_url();?>glancePublic/js/fancybox-min.js"></script>
</head>
<body>
<?php $this->load->view('common/after_body_open'); ?>
<!--Site Wraper Start-->
<div class="siteWraper">
  <?php $this->load->view('common/header'); ?>
  
  <div class="container"> 
    <!--Recent Profiles Start-->
    <div class="leftCol left">
      <div class="profileWrap">
        <h1>Gallery</h1>
        <div class="actionBox"> <a href="<?php echo $back_url;?>" title="Block this Person"><span>Go Back to Gallery</span></a>
          <div class="clear"></div>
        </div>
        
        <!--Gallery-->
        <div class="gallerySingle">
          <div class="photobox">
            <div class="imagebox"> <a class="fancybox-effects-c" href="<?php echo $image_url;?>"><img src="<?php echo $image_url; ?>" /></a> </div>
          </div>
        </div>
        
        <!--Gallery-->
        <div class="clear"></div>
      </div>
    </div>
    
    <!--Right Col Start-->
    <?php $this->load->view('common/profile_right_side');?>
    <div class="clear"></div>
  </div>
  <?php $this->load->view('common/footer'); ?>
</div>
<!--/Site Wraper End-->
<?php $this->load->view('common/before_body_close'); ?>
</body>
</html>
