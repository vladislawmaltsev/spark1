<!--Profile Start-->
    <div class="userInfoBar">
      <div class="inner">
        <div class="userPicbox">
          <div class="userimage">
            <div class="imgint"><img src="<?php echo ($this->session->userdata('photo'))?base_url().'glancePublic/uploads/member_images/thumb_'.$this->session->userdata('photo'):base_url().'glancePublic/images/no-image.jpg';?>" /></div>
          </div>
          <div class="userName">
            <h4><a href="<?php echo base_url(); ?>profile/<?php echo $this->session->userdata('username'); ?>" style="color:#018564;"><?php echo ($this->session->userdata('name')=='')?$this->session->userdata('username'):$this->session->userdata('name');?></a></h4>
            <a href="<?php echo base_url().'edit_profile';?>">Изменить изображение профиля</a></div>
        </div>
        <div class="searchFriendBox">
        <form name="search_frm" id="search_frm" action="<?php echo base_url();?>search" method="post">
          <input type="text" name="search" value="Search Friends" />
          <input type="submit" value="search" />
        </form>
        </div>
        <div class="userquickLinks">
          <ul class="usernav">
            <li><a href="<?php echo base_url(); ?>friends" title="Friend List">Друзья</a> </li>
            <li><a href="<?php echo base_url();?>messages" title="Messages Conversation">Сообщения</a></li>
            <li><a href="<?php echo base_url();?>gallery/photos/<?php echo $this->session->userdata('username'); ?>" title="My Picture Gallery">Моя галлерея</a></li>
            <li><a href="#" title="Settings"><img src="<?php echo base_url(); ?>glancePublic/images/setting.png" /></a>
              <ul class="subnav">
                <li><a href="<?php echo base_url(); ?>profile/<?php echo $this->session->userdata('username'); ?>" title="Goto your profile"><?php echo $this->session->userdata('name');?></a></li>
                <li><a href="<?php echo base_url(); ?>edit_profile" title="Edit Profile">Изменить профиль</a></li>
                
                <li><a href="<?php echo base_url(); ?>friends/request_received" title="Blcok List">Запрос друзей получен</a></li>
                <li><a href="<?php echo base_url(); ?>friends/request_sent" title="Blcok List">Запрос друзей отправлен</a></li>

                <li><a href="<?php echo base_url(); ?>friends/blocked_friends" title="Blcok List">Черный список</a></li>
                <li><a href="<?php echo base_url(); ?>friends/favourite_friends" title="Favourities List">Избранное</a></li>
                <li><a href="#" title="Account Setting">Настройки аккаунта</a></li>
                <li><a href="#" title="Privacy Setting">Настройки конфиденциальности</a></li>
                <li><a href="<?php echo base_url(); ?>user/logout" title="Logout">Выйти</a></li>
              </ul>
            </li>
          </ul>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
<!--Profile End-->