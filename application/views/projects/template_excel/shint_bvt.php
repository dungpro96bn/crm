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
.cont{
    font-family:"arial";
    font-size: 14px;
}
table tr td{
  padding-left: 10px;
}
.top{
  margin-top: 50px;
}
.top input{
  height: 35px;
  width: 75%;
  border: 1px solid #ccc;
  border-radius: 3px;
  background-color: #f6f8f9;
  text-align: center;
}
.form-control{
  background-color: #f6f8f9;
}
.form-group{
  height: 35px;
}
.modal-dialog{
  width: 70%;
  margin: 30px auto;
}
.form-control{
    border: 1px solid #ccc !important;
    border-radius: 5px !important;
}
.title{
  font-weight: 100;
  padding-left: 0px !important;
}
</style>


<body>
<?php echo form_open(get_uri("huongdan_guihang/save"), array("id" => "pdf-form", "class" => "general-form", "role" => "form")); ?>
<input value="<?php echo @$info['0']->id;?>" name="id" hidden="hidden">
<input value="<?php echo @$model_info->id; ?>" name="task_id" hidden="hidden">
<input value="<?php echo @$model_info->status_id; ?>" name="status_id" hidden="hidden">

<div class="col-md-12 b-t pt10 list-container">

<div class="cont">

    <div class="col-md-12 col-sm-12 top" style="overflow: hidden;" >
      <div style="float: right;">
            <div style="float: left; margin-right: 5px"><i><span style="float: left; line-height: 35px">Hà Nội, ngày </span></i></div><div style="float: left;"><i><input style="float: left; width: 200px" type="date" name="date" value="<?php echo @$info['0']->date;?>"></i></div>
            
      </div>
    </div>

    <div class="col-md-12 col-sm-12" style="margin-top: 50px; overflow: hidden; text-align: center; ">
      <h1 style="font-weight: bold; font-family: arial">Giấy ủy quyền</h1>
    </div>

    <div class="col-md-12 col-sm-12" style="margin-top: 50px">
      <div style="padding-left: 80px">
        <span style="font-family: arial"><i><u>Kính gửi:</u></i> Các cơ quan hữu quan</span>
      </div>
      <div style="padding-left: 50px; margin-top: 30px">
        <span>Công ty TNHH giao nhận tiếp vận GALAXY xin gửi tới Quý cơ quan lời chào trân trọng. Chúng tôi xin đề nghị một việc như sau:</span>
      </div>
      <div style="margin-top: 30px; padding-left: 50px">
        <span>Chúng tôi có lô hàng nhập từ <input value="<?php echo @$info['0']->from;?>" name="from" onKeyUp="limitText(this.form.from,this.form.countdown,40);" style=" width: 20%;  height: 30px;  border: 1px solid #ccc;border-radius: 5px;  background-color: #f6f8f9;  text-align: center;" >
            về <input name="to" value="<?php echo @$info['0']->to;?>" onKeyUp="limitText(this.form.to,this.form.countdown,40);" style="width: 20%;  height: 30px;  border: 1px solid #ccc;border-radius: 5px;  background-color: #f6f8f9;  text-align: center;" >
            theo không vận đơn số:</span>
      </div>
    </div>

    <div class="col-md-12 col-sm-12" style="margin-top: 50px">
      <div class="form-group">
        <label for="title" class="col-md-2 col-sm-2 title">MAWB</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="mawb" value="<?php echo @$info['0']->mawb;?>" class="form-control"  onKeyUp="limitText(this.form.mawb,this.form.countdown,50);" style="  width: 50%" placeholder="900-0300 1180">
        </div>
      </div>
      <div class="form-group">
        <label for="title" class="col-md-2 col-sm-2 title">HAWB</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="hawb" onKeyUp="limitText(this.form.hawb,this.form.countdown,52);" value="<?php echo @$info['0']->hawb;?>"   class="form-control" style="  width: 50%" placeholder="CTI-18003451">
        </div>
      </div>
      <div class="form-group">
        <label for="title" class="col-md-2 col-sm-2 title">Số kiện</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="no_of_pcs" onKeyUp="limitText(this.form.no_of_pcs,this.form.countdown,52);" value="<?php echo @$info['0']->no_of_pcs;?>"  class="form-control" style="  width: 50%" >
        </div>
      </div>
      <div class="form-group">
        <label for="title" class="col-md-2 col-sm-2 title">Trọng lượng</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="kgs" onKeyUp="limitText(this.form.kgs,this.form.countdown,52);" value="<?php echo @$info['0']->kgs;?>"  class="form-control" style="  width: 50%" >
        </div>
      </div>
      <div class="form-group">
        <label for="title" class="col-md-2 col-sm-2 title">Tên hàng</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="tenhang" onKeyUp="limitText(this.form.tenhang,this.form.countdown,52);" value="<?php echo @$info['0']->tenhang;?>"   class="form-control" style="  width: 50%" >
        </div>
      </div>   
    </div>

    <div class="col-md-12 col-sm-10" style="margin-top: 50px">
      <div class="form-group">
        <span for="title" class="col-md-2 col-sm-2 " style="line-height: 35px; padding-left: 0px">Xin ủy quyền cho:</span>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="uyquyen" onKeyUp="limitText(this.form.uyquyen,this.form.countdown,120);" value="<?php echo @$info['0']->uyquyen;?>"   class="form-control" style="  width: 50%;text-transform: uppercase;" placeholder="SHINTS BVT CO.,LTD">
        </div>
      </div>
      <div class="form-group">
        <span for="title" class="col-md-2 col-sm-2 " style="padding-left: 0px" >Địa chỉ:</span>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <textarea name="address" onKeyUp="limitText(this.form.address,this.form.countdown,130);" class="form-control" style="  width: 100%;text-transform: uppercase;" rows="5"><?php echo @$info['0']->address;?></textarea>
        </div>
      </div>
    </div>

    <div class="col-md-12 col-sm-12" style="margin-top: 50px">
      <div><span>Làm thủ tục khai báo và nhận lô hàng trên.</span><br></div>
      <div style="margin-top: 10px"><span>Kính mong các cơ quan hữu trách tạo mọi điều kiện thuận lợi cho Công ty được ủy quyền nhận lô hàng trên nhanh chóng.</span></div>
    </div>

    <div class="col-md-12 col-sm-12" style="margin-top: 30px">
      <span>Xin trân trọng cảm ơn và kính chào.</span>
    </div>

    <div class="col-md-12 col-sm-12" style="margin-top: 50px; text-align: right;margin-bottom: 100px">
      <span style="font-size: 20px">CÔNG TY TNHH GIAO NHẬN TIẾP VẬN GALAXY</span>
    </div>

</div>
</div>
  <?php form_close() ;?>
</body>
</html>
