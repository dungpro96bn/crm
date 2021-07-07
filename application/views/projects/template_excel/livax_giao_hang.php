<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <link rel='stylesheet' type='text/css' href='https://hathien-crm.wsoftpro.com/assets/bootstrap/css/bootstrap.min.css?v=1.9' />

  <script type="text/javascript">
    function limitText(limitField, limitCount, limitNum) {
      if (limitField.value.length > limitNum) {
        limitField.value = limitField.value.substring(0, limitNum);
      } else {
        limitCount.value = limitNum - limitField.value.length;
      }
    }
  </script>
</head>
<style>

#main_sub{
  font-size: 14px;
}
.top input{
  height: 35px;
  width: 60px;
  border: 1px solid #ccc;
  border-radius: 3px;
  background-color: #f6f8f9;
  text-align: center;
}
.form-group{
  height: 35px;
}
.input_add{
    
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #f6f8f9;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.title{
  font-weight: 100;
}
.modal-dialog{
  width: 70%;
  margin: 30px auto;
}
.form-control{
    border: 1px solid #ccc !important;
    border-radius: 5px !important;
}
</style>


<body>
<?php echo form_open(get_uri("huongdan_guihang/save"), array("id" => "pdf-form", "class" => "general-form", "role" => "form")); ?>

<input value="<?php echo @$info['0']->id;?>" name="id" hidden="hidden">
<input value="<?php echo @$model_info->id; ?>" name="task_id" hidden="hidden">
<input value="<?php echo @$model_info->status_id; ?>" name="status_id" hidden="hidden">

<div class="col-md-12 b-t pt10 list-container">

  <div  id="main_sub">  
  
   <div class="col-md-12 col-sm-12 top" style="margin-top: 100px" >
    <div style="float: right;"><i>
      <span>Hà Nội, ngày</span>&nbsp;<input type="date" name="date_hanoi" value="<?php echo @$info['0']->date_hanoi;?>" style="width: 250px"></i>
    </div>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 50px">
    <h1 style="font-weight: bold; text-align: center;">LỆNH GIAO HÀNG</h1>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 50px">
    <div class="col-md-2 col-sm-2" style="text-align: right;">
      <i><b>Kính gửi:</b></i>
    </div>
    <div class="col-md-10 col-sm-10" style="font-weight: 600">
      <i><span>CẢNG HẢI PHÒNG</span><br><span>CÁC CƠ QUAN HỮU QUAN</span></i>
    </div>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 50px">
    <span>Công ty TNHH giao nhận tiếp vận GALAXY có vận chuyển lô hàng nhập từ cảng</span>&nbsp;<input type="text" style="text-transform: uppercase;" name="to" value="<?php echo @$info['0']->to;?>" onKeyUp="limitText(this.form.to,this.form.countdown,50);" class="input_add">&nbsp;<span>trên tàu</span>&nbsp;<input type="text" style="text-transform: uppercase;" name="tau" value="<?php echo @$info['0']->tau;?>" onKeyUp="limitText(this.form.tau,this.form.countdown,50);" class="input_add">&nbsp;<span>về cảng Hải Phòng ngày</span>&nbsp;<input type="date" name="date_time_tau" value="<?php echo @$info['0']->date_time_tau;?>" class="input_add">&nbsp;<span>với những chi tiết như sau:</span>
  </div>

  <div class="col-sm-12 col-md-12" style="margin-top: 50px">
    <div class="form-group">
      <label style="text-align: right;" class="col-md-3 col-sm-3 title">MB/L No.</label>
      <div class=" col-md-9 col-sm-9" style="padding-right: 0px">
          <input type="text" name="mb_no" onKeyUp="limitText(this.form.mb_no,this.form.countdown,40);" value="<?php echo @$info['0']->mb_no;?>" class="form-control" style="  width: 50%; text-transform: uppercase;">
      </div>
    </div>
    <div class="form-group">
      <label style="text-align: right;" class="col-md-3 col-sm-3 title">HB/L No.</label>
      <div class=" col-md-9 col-sm-9" style="padding-right: 0px">
          <input type="text" name="hb_no" onKeyUp="limitText(this.form.hb_no,this.form.countdown,40);" value="<?php echo @$info['0']->hb_no;?>" class="form-control" style="  width: 50%;text-transform: uppercase;">
      </div>
    </div>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 50px">
    <div class="row">
      <div class="form-group">
        <label class="col-md-3 col-sm-3 title">Hàng hoá gồm</label>
        <div class=" col-md-9 col-sm-9" style="padding-right: 0px">
            <input type="text" name="hang_hoa" onKeyUp="limitText(this.form.hang_hoa,this.form.countdown,40);" value="<?php echo @$info['0']->hang_hoa;?>" class="form-control" style="  width: 50%">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 col-sm-3 title">Khối lượng</label>
        <div class=" col-md-9 col-sm-9" style="padding-right: 0px">
            <input type="text" name="khoi_luong" onKeyUp="limitText(this.form.khoi_luong,this.form.countdown,40);" value="<?php echo @$info['0']->khoi_luong;?>" class="form-control" style="  width: 50%; text-transform: uppercase;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 col-sm-3 title">Container No./Seal No.</label>
        <div class=" col-md-9 col-sm-9" style="padding-right: 0px">
            <input type="text" name="container_no" onKeyUp="limitText(this.form.container_no,this.form.countdown,40);" value="<?php echo @$info['0']->container_no;?>" class="form-control" style="  width: 50%; text-transform: uppercase;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 col-sm-3 title">Đề nghị giao hàng cho</label>
        <div class=" col-md-9 col-sm-9" style="padding-right: 0px">
            <input type="text" name="giao_hang_cho" onKeyUp="limitText(this.form.giao_hang_cho,this.form.countdown,40);" value="<?php echo @$info['0']->giao_hang_cho;?>" class="form-control" style="  width: 50%; text-transform: uppercase;font-weight: bold;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 col-sm-3 title">Địa chỉ:</label>
        <div class=" col-md-9 col-sm-9s" style="padding-right: 0px">
            <textarea name="address" value="" onKeyUp="limitText(this.form.address,this.form.countdown,180);" rows="3" class="form-control" style=" text-transform: uppercase"><?php echo @$info['0']->address;?></textarea>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 50px">
    <span>Kính mong các cơ quan hữu trách tạo mọi điều kiện thuận lợi cho Công ty được  nhận lô hàng trên nhanh chóng.</span>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 50px">
    <span><i>Xin trân trọng cảm ơn và kính chào</i></span>
  </div>

  <div class="col-sm-12 col-md-12" style="margin-top: 70px; margin-bottom: 100px">
    <div style="text-align: right;text-transform: uppercase;font-weight: 600; ">
      <span style="font-size: 20px">CONG TY TNHH GIAO NHAN TIEP VAN GALAXY</span>
    </div>
  </div>

</div>
</div>
<?php echo form_close(); ?>
</body>
</html>