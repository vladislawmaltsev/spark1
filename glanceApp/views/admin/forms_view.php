<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title;?></title>
<?php $this->load->view('admin/common/meta_tags'); ?>
<?php $this->load->view('admin/common/before_head_close'); ?>
</head>
<body class="skin-blue">
<?php $this->load->view('admin/common/after_body_open'); ?>
<?php $this->load->view('admin/common/header'); ?>
<div class="wrapper row-offcanvas row-offcanvas-left"> 
	<?php $this->load->view('admin/common/left_side'); ?>
  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> Управление профилями</h1>
    </section>
    
    <!-- Main content -->
    <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Быстрый пример</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Адрес электронной почты</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите почту">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Пароль</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Ввод файла</label>
                                            <input type="file" id="exampleInputFile">
                                            <p class="help-block">Пример справочного текста на уровне блока здесь.</p>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Проверить меня
                                            </label>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Отправить</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->

                            <!-- Form Element sizes -->
                            <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Разной высоты</h3>
                                </div>
                                <div class="box-body">
                                    <input class="form-control input-lg" type="text" placeholder=".input-lg">
                                    <br/>
                                    <input class="form-control" type="text" placeholder="Default input">
                                    <br/>
                                    <input class="form-control input-sm" type="text" placeholder=".input-sm">
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Разной ширины</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <input type="text" class="form-control" placeholder=".col-xs-3">
                                        </div>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control" placeholder=".col-xs-4">
                                        </div>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control" placeholder=".col-xs-5">
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <!-- Input addon -->
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Входной аддон</h3>
                                </div>
                                <div class="box-body">
                                    <div class="input-group">
                                        <span class="input-group-addon">@</span>
                                        <input type="text" class="form-control" placeholder="Имя пользователя">
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon">.00</span>
                                    </div>

                                    <h4>С иконками</h4>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="text" class="form-control" placeholder="Почта">
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                                    </div>

                                    <h4>С чекбоксами и радиокнопками</h4>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="checkbox">
                                                </span>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input type="radio">
                                                </span>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <h4>With buttons</h4>
                                    <p class="margin">Large: <code>.input-group.input-group-lg</code></p>
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action <span class="fa fa-caret-down"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                        <input type="text" class="form-control">
                                    </div><!-- /input-group -->
                                    <p class="margin">Normal</p>
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-danger">Action</button>
                                        </div><!-- /btn-group -->
                                        <input type="text" class="form-control">
                                    </div><!-- /input-group -->
                                    <p class="margin">Small <code>.input-group.input-group-sm</code></p>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-flat" type="button">Go!</button>
                                        </span>
                                    </div><!-- /input-group -->
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                        </div><!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-6">
                            <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">General Elements</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Text</label>
                                            <input type="text" class="form-control" placeholder="Enter ..."/>
                                        </div>
                                        <div class="form-group">
                                            <label>Text Disabled</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." disabled/>
                                        </div>


                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Textarea</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Textarea Disabled</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                                        </div>

                                        <!-- input states -->
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                                            <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ..."/>
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning"><i class="fa fa-warning"></i> Input with warning</label>
                                            <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..."/>
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with error</label>
                                            <input type="text" class="form-control" id="inputError" placeholder="Enter ..."/>
                                        </div>

                                        <!-- checkbox -->
                                        <div class="form-group"> 
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"/>
                                                    Checkbox 1
                                                </label>                                                
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"/>
                                                    Checkbox 2
                                                </label>                                                
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" disabled/>
                                                    Checkbox disabled
                                                </label>                                                
                                            </div>
                                        </div>

                                        <!-- radio -->
                                        <div class="form-group"> 
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                    Option one is this and that&mdash;be sure to include why it's great
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                    Option two can be something else and selecting it will deselect option one
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled/>
                                                    Option three is disabled
                                                </label>
                                            </div>
                                        </div>

                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Select</label>
                                            <select class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Disabled</label>
                                            <select class="form-control" disabled>
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>

                                        <!-- Select multiple-->
                                        <div class="form-group">
                                            <label>Select Multiple</label>
                                            <select multiple class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Multiple Disabled</label>
                                            <select multiple class="form-control" disabled>
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>

                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section>
    <!-- /.content --> 
  </aside>
  <!-- /.right-side --> 
</div>
<!-- ./wrapper -->
</body>
</html>