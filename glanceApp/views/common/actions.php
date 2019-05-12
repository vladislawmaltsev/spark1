<div class="actionBox">
                	<!--<a href="#"><i class="chat">&nbsp;</i> <span>Chat Now</span></a>-->
                    <?php
						if(!$is_already_friend):
					?>
                    <a href="<?php echo base_url(); ?>friends/send_friend_request/<?php echo my_encrypt($row->id); ?>" title="Send a Friend Request"><i class="adfrnd">&nbsp;</i> <span>Добавить</span></a>
                   <?php endif; ?>
                   
				   <?php

				   ?>
                    <a href="javascript:;" title="Send Message to this person" onclick="setRecieverSession('<?php echo $username;?>')"><i class="message">&nbsp;</i> <span>Сообщение</span></a>
                    
                    <?php
						if(!$is_already_favourite):
					?>
                    <a href="<?php echo base_url(); ?>friends/add_to_favourite/<?php echo my_encrypt($row->id); ?>" title="Add to Favourite"><i class="favico">&nbsp;</i> <span>Добавить к любимкам</span></a>
                    <?php 
						endif;
					?>
                    
                    <a href="<?php echo base_url(); ?>gallery/photos/<?php echo $row->username; ?>" title="See more photo of this user"><i class="gallery">&nbsp;</i> <span>Галерея</span></a>

                    
                    <a href="<?php echo base_url(); ?>friends/block_friend/<?php echo my_encrypt($row->id); ?>" title="Block this Person"><i class="block">&nbsp;</i> <span>Заблокировать</span></a>
                <div class="clear"></div>
                
                	<!--Popup-->
                	<div class="confirmpopup" id="addFriend">
                    	<div class="contentpoup">
                        <h6>Запрос в друзья</h6>
                        <p>Ваш запрос был отправлен</p>
                        <div class="linksbox"><a href="#" onclick = "document.getElementById('addFriend').style.display='none';document.getElementById('fade').style.display='none'">Закрыть</a> </div>
                        </div>
                    </div>
                    <div class="darkwindow" id="fade">&nbsp;</div>
                
                </div>