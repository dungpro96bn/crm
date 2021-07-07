<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <link rel='stylesheet' type='text/css' href='https://hathien-crm.wsoftpro.com/assets/bootstrap/css/bootstrap.min.css?v=1.9' />
</head>
<style>
  .modal-dialog{
  width: 70%;
  margin: 30px auto;
}
    #iframe{
        margin: auto;
        display: none;
    }
</style>
<?php echo form_open_multipart(get_uri("nhap_air/save"), array("id" => "upload-pdf", "class" => "general-form", "role" => "form")); ?>
<div style="margin-bottom: 50px">
<input value="<?php echo @$info['0']->id;?>" name="id" hidden="hidden">
<input value="<?php echo @$model_info->id; ?>" name="task_id" hidden="hidden">
<input value="<?php echo @$model_info->status_id; ?>" name="status_id" hidden="hidden">

<input type="file"  class="btn btn-primary" name="userfile"  style="margin: auto">
    <div style="text-align: center;margin-top:10px;margin-bottom: 10px">
        <span><?php echo @$info['0']->name_file;?></span>
    </div>
<input value="<?php echo @$info['0']->name_file;?>" name="name_file" id="name_file" hidden="hidden">
    <?php $name_pdf =@$info['0']->name_file ;?>
<div >
<iframe src="<?php echo @base_url( 'uploads/pdf/'.@$name_pdf);?>" width="100%" height="500" id="iframe" ></iframe>
</div>
</div>
<?php form_close(); ?>
<script type="text/javascript">
    $(document).ready(function () {
        var name_frame = $("#name_file").val();
        if (name_frame){
            $("#iframe").css("display","block");
        }
        var tasks_id =$("#status_id").val();
        $("#upload-pdf").appForm({
            isModal: false,
            onSuccess: function (result) {
                appAlert.success(result.message, {duration: 10000});
            }
        });
    });
</script>