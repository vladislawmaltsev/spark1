<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title;?></title>
  <?php $this->load->view('common/meta_tags'); ?>
  <?php $this->load->view('common/before_head_close'); ?>
  <script>
  $(function() {
    $( "#dob" ).datepicker();
  });
  </script>
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
        <div class="col-md-8 col-md-offset-2">
            <div class="userccount">
            <h1>Редактировать</h1>
            <div class="formpanel">
                <form name="edit_form" id="edit_form" method="post" action="<?php echo base_url().'edit_profile';?>" enctype="multipart/form-data">
                <div class="formrow">
                    <label>Имя </label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $row->name;?>" />
                    <?php echo form_error('name', '<div class="error"><span>', '</span></div>'); ?>
                    <div class="clear"></div>
                  </div>
                <div class="formrow">
                    <label>Телефон</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $row->phone;?>" />
                    <div class="clear"></div>
                  </div>
                <div class="formrow">
                    <label>Хочу</label>
                    <select name="relationship_status" id="relationship_status" class="form-control">
                    <option value="Знакомства" <?php echo is_selected($row->relationship_status,'Знакомства');?>>Знакомства</option>
                    <option value="Дружбы" <?php echo is_selected($row->relationship_status,'Дружбы');?>>Дружбы</option>
                    <option value="Отношений" <?php echo is_selected($row->relationship_status,'Отношений');?>>Отношений</option>
                  </select>
                    <div class="clear"></div>
                  </div>
                <div class="formrow">
                    <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <label>Пол</label>
                        <select name="gender" id="gender" class="form-control">
                        <option value="Мужчина" <?php echo is_selected($row->gender,'Мужчина');?>>Мужчина</option>
                        <option value="Женщина" <?php echo is_selected($row->gender,'Женщина');?>>Женщина</option>
                      </select>
                      </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Статус</label>
                        <select name="marital_status" id="marital_status" class="form-control">
                        <option value="Нет отношений" <?php echo is_selected($row->marital_status,'Нет отношений');?>>Нет отношений</option>
                        <option value="В отношениях" <?php echo is_selected($row->marital_status,'В отношениях');?>>В отношениях</option>
                        <option value="Разведен(-а)" <?php echo is_selected($row->marital_status,'Разведен(-а)');?>>Разведен(-а)</option>
                        <option value="Вдовец(-ва)" <?php echo is_selected($row->marital_status,'Вдовец(-ва)');?>>Вдовец(-ва)</option>
                        <option value="Всё сложно" <?php echo is_selected($row->marital_status,'Всё сложно');?>>Всё сложно</option>
                      </select>
                      </div>
                  </div>
                  </div>
                <div class="formrow">
                    <label>День рождения</label>
                    <input type="text" name="dob" id="dob" class="form-control" value="<?php echo date('m/d/Y',strtotime($row->dob));?>" readonly />
                    <div class="clear"></div>
                  </div>
                <div class="formrow">
                    <label>Стиль жизни</label>
                    <select name="life_style" id="life_style" class="form-control">
                    <option value="Очень быстрый" <?php echo is_selected($row->life_style,'Очень быстрый');?>>Очень быстрый</option>
                    <option value="Быстрый" <?php echo is_selected($row->life_style,'Быстрый');?>>Быстрый</option>
                    <option value="Средний" <?php echo is_selected($row->life_style,'Средний');?>>Средний</option>
                    <option value="Обычный" <?php echo is_selected($row->life_style,'Обычный');?>>Обычный</option>
                    <option value="Ленивый" <?php echo is_selected($row->life_style,'Ленивый');?>>Ленивый</option>
                  </select>
                    <div class="clear"></div>
                  </div>
                <div class="formrow">
                    <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <label>Курение</label>
                        <select name="smoking" id="smoking" class="form-control">
                        <option value="Отрицательно" <?php echo is_selected($row->smoking,'Отрицаптельно');?>>Отрицательно</option>
                        <option value="Положительно" <?php echo is_selected($row->smoking,'Положительно');?>>Положительно</option>
                      </select>
                      </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Алкоголь</label>
                        <select name="drinking" id="drinking" class="form-control">
                        <option value="Отрицательно" <?php echo is_selected($row->drinking,'Отрицательно');?>>Отрицательно</option>
                        <option value="Положительно" <?php echo is_selected($row->drinking,'Положительно');?>>Положительно</option>
                      </select>
                      </div>
                  </div>
                  </div>
                <div class="formrow">
                    <label>Образование</label>
                    <select name="education" id="education" class="form-control">
                    <option value="Средняя школа" <?php echo is_selected($row->education,'Средняя школа');?>>Средняя школа</option>
                    <option value="Среднее специальное" <?php echo is_selected($row->education,'Среднее специальное');?>>Среднее специальное</option>
                    <option value="Бакалавриат" <?php echo is_selected($row->education,'Бакалавриат');?>>Бакалавриат</option>
                    <option value="Магистратура" <?php echo is_selected($row->education,'Магистратура');?>>Магистратура</option>
                    <option value="Аспирантура" <?php echo is_selected($row->education,'Аспирантура');?>>Аспирантура</option>
                  </select>
                    <div class="clear"></div>
                  </div>
                <div class="formrow">
                    <label>Страна</label>
                    <select name="country" id="country" class="form-control">
                        <option value="Беларусь">Беларусь</option>
                        <option value="Россия">Россия</option>
                        <option value="Украина">Украина</option>
                        <option value="USA">USA</option>
                    </select>
                    <script>
	  			var countrySelected = '<?php echo $row->country;?>';
	  			$("#country option[value='"+countrySelected+"']").attr('selected', 'selected');
	      	  </script>
                    <div class="clear"></div>
                  </div>
                <div class="formrow">
                    <label>Город</label>
                    <input type="text" name="city" id="city" value="<?php echo $row->city;?>" class="form-control" />
                    <div class="clear"></div>
                  </div>
                <div class="formrow">
                    <label>Обо мне</label>
                    <textarea name="about_me" id="about_me" class="form-control"><?php echo $row->about_me;?></textarea>
                    <div class="clear"></div>
                  </div>
                <div class="formrow">
                    <label>Загрузить фото профиля</label>
                    <input type="file" name="photo" id="photo" class="form-control" />
                    <div class="clear"></div>
                  </div>
                <h1>Ищу</h1>
                <div class="formrow">
                    <label>Пол</label>
                    <select name="looking_for" id="looking_for" class="form-control">
                    <option value="Мужчина" <?php echo is_selected($row->looking_for,'Мужчина');?>>Мужчина</option>
                    <option value="Женщина" <?php echo is_selected($row->looking_for,'Женщина');?>>Женщина</option>
                  </select>
                    <?php echo form_error('looking_for', '<div class="error"><span>', '</span></div>'); ?>
                    <div class="clear"></div>
                  </div>
                <div class="formrow">
                    <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <label>Возрастом от</label>
                        <select name="looking_age_from" id="looking_age_from" class="form-control">
                        <?php for($i=18;$i<=30;$i++):?>
                        <option value="<?php echo $i;?>" <?php echo is_selected($row->looking_age_from,$i);?>><?php echo $i;?></option>
                        <?php endfor;?>
                      </select>
                      </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Возрастом до</label>
                        <select name="looking_age_to" id="looking_age_to" class="form-control">
                        <?php for($j=19;$j<=31;$j++):?>
                        <option value="<?php echo $j;?>" <?php echo is_selected($row->looking_age_to,$j);?>><?php echo $j;?></option>
                        <?php endfor;?>
                      </select>
                      </div>
                  </div>
                    <b> </b>
                    <div class="clear"></div>
                  </div>
                <div class="formrow">
                    <label>Статус</label>
                    <select name="looking_marital_status" id="looking_marital_status" class="form-control">
                    <option value="Нет отношений" <?php echo($row->looking_marital_status=='Нет отношений')?'selected="selected"':'';?>>Нет отношений</option>
                    <option value="В отношениях" <?php echo($row->looking_marital_status=='В отношениях')?'selected="selected"':'';?>>В отношениях</option>
                    <option value="Разведен(-а)" <?php echo($row->looking_marital_status=='Разведен(-а)')?'selected="selected"':'';?>>Разведен(-а)</option>
                    <option value="Вдовец(-ва)" <?php echo($row->looking_marital_status=='Вдовец(-ва)')?'selected="selected"':'';?>>Вдовец(-ва)</option>
                    <option value="Всё сложно" <?php echo($row->looking_marital_status=='Всё сложно')?'selected="selected"':'';?>>Всё сложно</option>
                  </select>
                    <?php echo form_error('looking_marital_status', '<div class="error"><span>', '</span></div>'); ?>
                    <div class="clear"></div>
                  </div>
                <div class="formrow">
                    <label>Страна</label>
                    <select name="looking_country" id="looking_country" class="form-control">
                        <option selected value="Беларусь">Беларусь</option>
                        <option selected value="Россия">Россия</option>
                        <option selected value="Украина">Украина</option>
                        <option selected value="USA">USA</option>
                    </select>
                    <script>
			 // setTimeout(function(){
	  			var countrySelected = '<?php echo $row->looking_country;?>';
	  			$("#looking_country option[value='"+countrySelected+"']").attr('selected', 'selected');
			  //},1000);
	      	  </script> 
                    <?php echo form_error('looking_country', '<div class="error"><span>', '</span></div>'); ?>
                    <div class="clear"></div>
                  </div>
                <div class="formrow">
                    <label>Город</label>
                    <input type="text" name="looking_city" id="looking_city" value="<?php echo $row->looking_city;?>" class="form-control" />
                    <?php echo form_error('looking_city', '<div class="error"><span>', '</span></div>'); ?>
                    <div class="clear"></div>
                  </div>
                <div class="buttonBox">
                    <input type="submit" name="" value="Сохранить" />
                  </div>
              </form>
              </div>
          </div>
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
