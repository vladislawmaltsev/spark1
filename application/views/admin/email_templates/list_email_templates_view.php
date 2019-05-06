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
      <h1> Manage Email Templates</h1></section><section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Email Templates</h3>
            </div>
            <!-- /.box-header -->
            <?php
            if($this->session->flashdata('msg')):
			?>
              <div style="color:#009933;font-size:12px;"><?php echo $this->session->flashdata('msg');?></div><br />
            <?php
			endif;
			?>  
            
            <div class="box-body table-responsive">

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Added Date</th>
                    <th>Email Name</th>
                    <th>Email Subject</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="sect">
                <?php if($result): foreach($result as $row): ?>
                  <tr id="row_<?php echo $row->ID;?>">
                   
                    <td><?php echo date_formats($row->dated, 'd M, Y');?> </td>
                    <td><?php echo $row->email_name;?></td>
                    <td><?php echo $row->email_subject;?></td>
                    <td>
                    <a href="<?php echo base_url('admin/'.$page_name.'/preview/'.$row->ID);?>" target="_blank" class="btn btn-default btn-xs">Preview</a>
                      
                      <a href="<?php echo base_url('admin/'.$page_name.'/update/'.$row->ID);?>" class="btn btn-primary btn-xs">Edit</a> 
                     
                    </td>
                  </tr>

				<?php endforeach; endif;?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body --> 
          </div>
          <!-- /.box --> 
          
          <!-- /.box --> 
        </div>
      </div>
    </section>
    <!-- /.content --> 
  </aside>
  <!-- /.right-side --> 
</div>
<!-- ./wrapper -->
</body>
</html>