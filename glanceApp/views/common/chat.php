<?php
session_start();
$_SESSION['username'] = $this->session->userdata('username');
$friends_recordset = $this->friend_model->get_all_approved_friends($this->session->userdata('member_id'));

?>


<?php 
 if($friends_recordset): ?>

<script type="text/javascript" src="<?php echo base_url();?>chat/js/chat.js"></script>
<script type="text/javascript">

</script>
<?php endif;?>
