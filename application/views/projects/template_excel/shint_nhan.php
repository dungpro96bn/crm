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

#shint_nhan{
  font-size: 14px;
}
table tr td{
  padding-left: 10px;
}
.form-group{
  height: 35px;
}
#tops{
  margin-top: 20px;
}

.top{
  margin-top: 50px;
}
.top input{
  height: 35px;
  width: 60px;
  border: 1px solid #ccc;
  border-radius: 3px;
  background-color: #f6f8f9;
  text-align: center;
}
.title{
  font-weight: 100;
}
.title_italic{
  font-weight: 100;
  font-style: italic;
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
.checkboxThree {
    width: 120px;
    height: 40px;
    background: #333; 
    border-radius: 50px;
    position: relative;
}
.checkboxThree:before {
    content: 'Yes';
    position: absolute;
    top: 12px;
    left: 13px;
    height: 2px;
    color: #26ca28;
    font-size: 16px;
}
.checkboxThree:after {
    content: 'No';
    position: absolute;
    top: 12px;
    left: 84px;
    height: 2px;
    color: white;
    font-size: 16px;
}
.checkboxThree label {
    display: block;
    width: 52px;
    height: 22px;
    border-radius: 50px;
 
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -o-transition: all .5s ease;
    -ms-transition: all .5s ease;
    transition: all .5s ease;
    cursor: pointer;
    position: absolute;
    top: 9px;
    z-index: 1;
    left: 12px;
    background: #ddd;
}
.checkboxThree input{
  display: none;
}
/**
 * Create the checkbox event for the label
 */
.checkboxThree input[type=checkbox]:checked + label {
    left: 60px;
    background: #26ca28;
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
<div id="shint_nhan">
  <div id="top" style="overflow: hidden;">
      <div class="col-md-3 col-sm-3" style="text-align: center;">
        <img style="height:115px;" src="<?php echo get_file_uri("assets/images/logo-glx.png"); ?>">
      </div>
      <div class="col-md-9 col-sm-9">
        <div style="border-bottom: 2px solid #337ab7;margin-top: 10px">        
          <span style="font-size: 20px; color: #337ab7; font-weight: bold;">GALAXY LOGISTICS CO., LTD</span><br>        
        </div>
        <div style="padding-top: 5px;color: #337ab7;">
          <span>Add: Unit 2401, 24/F , Tower 101 Lang Ha st., Dong Da dist., Hanoi, Viet Nam.</span><br>
          <span>Tel: 84-24.35624946 Fax: 84-24-35624947</span><br>
          <span>E-mail: info@galaxy-vietnam.com</span>
        </div>
      </div>
  </div>

  <div class="col-md-12 col-sm-12 top" style="overflow: hidden;" >
    <div style="float: right;"><i>
      <span>Hà Nội, ngày</span>&nbsp;<input type="date" value="<?php echo @$info['0']->date_time;?>" name="date_time" style="width: 250px"></i>
    </div>
  </div>

  <div class="col-md-12 col-sm-12" style="text-align: center; margin-top: 50px">
    <h1 style="font-weight: bold;">Giấy báo nhận hàng</h1>
  </div>

  <div class="col-sm-12 col-sm-12" style="margin-top: 50px">
    <div class="form-group">
      <label style="width: 10%; float: left; line-height: 35px"><i>kính gửi:</i></label>
      <div style="padding-right: 0px; width: 90%; float: left;">
          <input type="text" name="send" onKeyUp="limitText(this.form.send,this.form.countdown,140);" value="<?php echo @$info['0']->send;?>" id="send" class="form-control" style=" width:100%; text-transform: uppercase; font-style: italic;font-weight: 600;">
      </div>
    </div>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 20px">
      <div class="form-group">
        <span>Chúng tôi xin trân trọng thông báo Quý công ty có lô hàng nhập từ</span>&nbsp;<input type="text" name="go" value="<?php echo @$info['0']->go;?>" onKeyUp="limitText(this.form.go,this.form.countdown,50);" class="input_add">&nbsp;<span>về</span>&nbsp;<input type="text" name="to" onKeyUp="limitText(this.form.to,this.form.countdown,50);" value="<?php echo @$info['0']->to;?>" class="input_add">&nbsp;<span>theo chi tiết dưới đây.</span>
      </div>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 20px">
    <div class="row">
      <div class="form-group">
        <label class="col-md-2 col-sm-2 title">Hàng hóa</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="goods" onKeyUp="limitText(this.form.goods,this.form.countdown,70);" value="<?php echo @$info['0']->goods;?>" class="form-control" style="  width: 50%">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 col-sm-2 title">MAWB</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="mawb" onKeyUp="limitText(this.form.mawb,this.form.countdown,70);" value="<?php echo @$info['0']->mawb;?>" class="form-control" style="  width: 50%">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 col-sm-2 title">HAWB</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="hawb" onKeyUp="limitText(this.form.hawb,this.form.countdown,70);" value="<?php echo @$info['0']->hawb;?>" class="form-control" style="  width: 50%">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 col-sm-2 title">Trọng lượng</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="weight" onKeyUp="limitText(this.form.weight,this.form.countdown,70);" value="<?php echo @$info['0']->weight;?>" class="form-control" style="  width: 50%">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 col-sm-2 title">Số kiện</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="no_of" onKeyUp="limitText(this.form.no_of,this.form.countdown,70);" value="<?php echo @$info['0']->no_of;?>" class="form-control" style="  width: 50%">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 col-sm-2 title">Người gửi hàng</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="shipper" onKeyUp="limitText(this.form.shipper,this.form.countdown,70);" value="<?php echo @$info['0']->shipper;?>" class="form-control" style="  width: 50%">
        </div>
      </div>
      <div class="form-group">
        <label class="title" style="width: 35%; float: left;padding-left: 15px">Lô hàng trên dự kiến về đến sân bay Nội Bài ngày</label>
        <div style="padding-right: 0px; width: 65%; float: left;">
            <input type="date" name="go_to" value="<?php echo @$info['0']->go_to;?>" class="form-control" style="  width: 36.8%">
        </div>
      </div>
      <div class="form-group">
        <label class="title" style="width: 12%; float: left;padding-left: 15px; font-weight: 600">Chuyến bay:</label>
        <div style="padding-right: 0px; width: 15%; float: left;">
            <input type="text" name="flight" onKeyUp="limitText(this.form.flight,this.form.countdown,15);" value="<?php echo @$info['0']->flight;?>" class="form-control" style="font-weight: 600; text-transform: uppercase;">
        </div>
        <label class="title" style="width: 12%; float: left;padding-left: 15px;font-weight: 600">Kho:</label>
        <div style="padding-right: 0px; width: 15%; float: left;">
            <input type="text" name="kho" onKeyUp="limitText(this.form.kho,this.form.countdown,15);" value="<?php echo @$info['0']->kho;?>" class="form-control" style="font-weight: 600; text-transform: uppercase;">
        </div>
        <label class="title" style="width: 12%; float: left;padding-left: 15px;font-weight: 600">Mã kho:</label>
        <div style="padding-right: 0px; width: 15%; float: left;">
            <input type="text" name="ma_kho" onKeyUp="limitText(this.form.ma_kho,this.form.countdown,15);" value="<?php echo @$info['0']->ma_kho;?>" class="form-control" style="font-weight: 600; text-transform: uppercase;">
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-12 col-sm-12">
    <span>Đề nghị quý khách đến Công ty chúng tôi làm thủ tục nhận chứng từ của lô hàng nói trên. Nếu sau 02 ngày Quý khách không tới nhận chứng từ thì mọi chi phí phát sinh và tổn thất hàng hóa sẽ do Quý khách hàng chịu. </span>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 50px">
    <span style="font-weight: 600">Khi đến nhận chứng từ đề nghị Quý khách mang theo những giấy tờ sau và nộp các khoản lệ phí sau:</span>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 30px">
    <div class="row">
      <div class="form-group">
        <label for="title" class="col-md-3 col-sm-3 title_italic"> Giấy giới thiệu</label>
        <!-- <div class=" col-md-9 col-sm-9" style="padding-right: 0px">
            <input type="text" name="giay" onKeyUp="limitText(this.form.giay,this.form.countdown,70);" value=""  class="form-control" style="  width: 50%">
        </div> -->
        <div class="checkboxThree col-md-9 col-sm-9" style="margin-left: 15px">
          <input type="checkbox" value="Yes" id="checkboxThreeInput" <?php echo (@$info['0']->giay=='Yes')?'checked':'' ?> name="giay" />
          <label for="checkboxThreeInput"></label>
        </div>
      </div>
      <div class="form-group">
        <label for="title" class="col-md-3 col-sm-3 title_italic">Cước vận chuyển quốc tế</label>
        <div class=" col-md-9 col-sm-9" style="padding-right: 0px">
            <input type="text" name="prepaid" onKeyUp="limitText(this.form.prepaid,this.form.countdown,70);" value="<?php echo @$info['0']->prepaid;?>"  class="form-control" style="  width: 50%">
        </div>
      </div>
      <div class="form-group">
        <label for="title" class="col-md-3 col-sm-3 title_italic">Phí chứng từ</label>
        <div class=" col-md-9 col-sm-9" style="padding-right: 0px">
            <input type="text" name="fees_for_vouchers" onKeyUp="limitText(this.form.fees_for_vouchers,this.form.countdown,70);" value="<?php echo @$info['0']->fees_for_vouchers;?>"  class="form-control" style="  width: 50%">
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 50px">
    <span style="font-weight: 600; font-style: italic;">Chúng tôi đảm nhận mọi dịch vụ giao nhận hàng hóa tận nơi theo  yêu cầu của Quý Khách</span>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 30px; margin-bottom: 50px">
    <div class="col-md-6 col-sm-6"></div>
    <div class="col-md-6 col-sm-6">
      <div style="color:#337ab7; font-size: 20px;">
        <span>GALAXY LOGISTICS COMPANY LTD</span>
      </div>
      <div style="margin-top: 70px">
        <input type="text" name="user" value="<?php echo @$info['0']->user;?>" class="form-control">
      </div>
    </div>
  </div>
</div>
</div>
<?php echo form_close(); ?>
</body>
</html>