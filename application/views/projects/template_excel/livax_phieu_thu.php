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
<style type="text/css">
  .livax_phieu_thu{
    font-size: 14px;
  }
  .title{
  font-weight: 100;
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
</style>


<body>

<?php echo form_open(get_uri("huongdan_guihang/save"), array("id" => "pdf-form", "class" => "general-form", "role" => "form")); ?>

<input value="<?php echo @$info['0']->id;?>" name="id" hidden="hidden">
<input value="<?php echo @$model_info->id; ?>" name="task_id" hidden="hidden">
<input value="<?php echo @$model_info->status_id; ?>" name="status_id" hidden="hidden">

<div class="col-md-12 b-t pt10 list-container">
  <div id="livax_phieu_thu">

  <div class="col-md-12 col-sm-12" style="margin-top: 50px">
    <span style="font-weight: bold; font-size: 18px">CHI NHÁNH CÔNG TY DỊCH VỤ HÀ THIÊN</span><br>
    <span>P.2401, 101 LÁNG HẠ, HÀ NỘI</span>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 30px; text-align: center;">
    <span style="font-weight: bold;font-size: 18px">PHIẾU THU</span>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 30px">
    <div class="row">
      <div class="col-md-7 col-sm-7">
        <div class="row">
          <div class="form-group">
          <label style="text-align: right;line-height: 34px" class="col-md-8 col-sm-8 title">Ngày</label>
          <div class=" col-md-4 col-sm-4" style="padding-right: 0px">
              <input type="date" name="date_time" value="<?php echo @$info['0']->date_time;?>" class="form-control" style="  width: 100%;">
          </div>
        </div>
        </div>
        
      </div>
      <div class="col-md-5 col-sm-5">
        <div class="row">
          <div class="form-group">
          <label style="text-align: right;line-height: 34px" class="col-md-6 col-sm-6 title">Số phiếu</label>
          <div class=" col-md-6 col-sm-6" style="padding-right: 0px">
              <input type="text" name="so_phieu" onKeyUp="limitText(this.form.so_phieu,this.form.countdown,10);" value="<?php echo @$info['0']->so_phieu;?>" class="form-control" style="  width: 100%;font-weight: bold;">
          </div>
        </div>
        </div>
        
      </div>
    </div>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 50px">
    <div class="row">
      <div class="form-group">
        <label style="line-height: 34px" class="col-md-2 col-sm-2 title">Người nộp</label>
        <div class="col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="nguoi_nop_phieu" onKeyUp="limitText(this.form.nguoi_nop_phieu,this.form.countdown,70);" value="<?php echo @$info['0']->nguoi_nop_phieu;?>" class="form-control" style="width: 100%;font-weight: bold;text-transform: uppercase;">
        </div>
      </div>
    </div>    
  </div>

  <div class="col-md-12 col-sm-12">
    <div class="row">
      <div class="form-group">
        <label style="line-height: 34px" class="col-md-2 col-sm-2 title">Số vận đơn</label>
        <div class=" col-md-4 col-sm-4" style="padding-right: 0px">
            <input type="text" name="so_van_don" onKeyUp="limitText(this.form.so_van_don,this.form.countdown,35);" value="<?php echo @$info['0']->so_van_don;?>" class="form-control" style="width: 100%; text-transform: uppercase;">
        </div>
        <label style="line-height: 34px; text-align: right;" class="col-md-2 col-sm-2 title">TY GIA</label>
        <div class=" col-md-4 col-sm-4" style="padding-right: 0px">
            <input type="text" name="ty_gia" value="<?php echo @$info['0']->ty_gia;?>" onKeyUp="limitText(this.form.ty_gia,this.form.countdown,15);" class="form-control" style="  width: 100%;">
        </div>
      </div>
      <div class="form-group">
        <label style="line-height: 34px" class="col-md-2 col-sm-2 title">Tên tàu</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="ten_tau" onKeyUp="limitText(this.form.ten_tau,this.form.countdown,70);" value="<?php echo @$info['0']->ten_tau;?>" class="form-control" style="  width: 100%;">
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 30px">
    <table width="100%" border="1">
      <tr style="text-align: center;">
        <td height="35px" width="10%">TT</td>
        <td width="40%">Nội dung</td>
        <td width="15%">ĐƠN GIÁ</td>
        <td width="15%">SỐ LƯỢNG</td>
        <td width="20%">THÀNH TIỀN</td>
      </tr>
      <tr>
        <td height="35px" width="10%" style="text-align: center;padding: 5px 10px">1</td>
        <td width="40%" style="padding-left: 10px"><span>PHÍ DO</span></td>
        <td width="15%" style="padding: 5px 10px"><input type="text" name="don_gia_1" onKeyUp="limitText(this.form.don_gia_1,this.form.countdown,10);" value="<?php echo @$info['0']->don_gia_1;?>" class="form-control" placeholder="$" style="text-align: right;"></td>
        <td width="15%" style="padding: 5px 10px"><input type="text" name="so_luong_1" onKeyUp="limitText(this.form.so_luong_1,this.form.countdown,10);" value="<?php echo @$info['0']->so_luong_1;?>" class="form-control" style="text-align: center;"></td>
        <td width="20%" style="padding: 5px 10px"><input type="text" name="thanh_tien_1" onKeyUp="limitText(this.form.thanh_tien_1,this.form.countdown,15);" value="<?php echo @$info['0']->thanh_tien_1;?>" class="form-control" style="text-align: right;"></td>
      </tr>
      <tr>
        <td height="35px" width="10%" style="text-align: center;padding: 5px 10px">2</td>
        <td width="40%" style="padding-left: 10px"><span>PHÍ HANDLING</span></td>
        <td width="15%" style="padding: 5px 10px"><input type="text" value="<?php echo @$info['0']->don_gia_2;?>" name="don_gia_2" onKeyUp="limitText(this.form.don_gia_2,this.form.countdown,10);" class="form-control" placeholder="$" style="text-align: right;"></td>
        <td width="15%" style="padding: 5px 10px"><input type="text" value="<?php echo @$info['0']->so_luong_2;?>" name="so_luong_2" onKeyUp="limitText(this.form.so_luong_2,this.form.countdown,10);" class="form-control" style="text-align: center;"></td>
        <td width="20%" style="padding: 5px 10px"><input type="text" name="thanh_tien_2" onKeyUp="limitText(this.form.thanh_tien_2,this.form.countdown,15);" value="<?php echo @$info['0']->thanh_tien_2;?>" class="form-control" style="text-align: right;"></td>
      </tr>
      <tr>
        <td height="35px" width="10%" style="text-align: center;padding: 5px 10px">3</td>
        <td width="40%" style="padding-left: 10px"><span>PHÍ CFS</span></td>
        <td width="15%" style="padding: 5px 10px"><input type="text" name="don_gia_3" value="<?php echo @$info['0']->don_gia_3;?>" onKeyUp="limitText(this.form.don_gia_3,this.form.countdown,10);" class="form-control" placeholder="$" style="text-align: right;"></td>
        <td width="15%" style="padding: 5px 10px"><input type="text" name="so_luong_3" value="<?php echo @$info['0']->so_luong_3;?>" onKeyUp="limitText(this.form.so_luong_3,this.form.countdown,10);" class="form-control" style="text-align: center;"></td>
        <td width="20%" style="padding: 5px 10px"><input type="text" name="thanh_tien_3" value="<?php echo @$info['0']->thanh_tien_3;?>" onKeyUp="limitText(this.form.thanh_tien_3,this.form.countdown,15);" class="form-control" style="text-align: right;"></td>
      </tr>
      <tr>
        <td height="35px" width="10%" style="text-align: center;padding: 5px 10px">4</td>
        <td width="40%" style="padding-left: 10px"><span>PHÍ THC</span></td>
        <td width="15%" style="padding: 5px 10px"><input type="text" name="don_gia_4" value="<?php echo @$info['0']->don_gia_4;?>" onKeyUp="limitText(this.form.don_gia_4,this.form.countdown,10);" class="form-control" placeholder="$" style="text-align: right;"></td>
        <td width="15%" style="padding: 5px 10px"><input type="text" name="so_luong_4" value="<?php echo @$info['0']->so_luong_4;?>" onKeyUp="limitText(this.form.so_luong_4,this.form.countdown,10);" class="form-control" style="text-align: center;"></td>
        <td width="20%" style="padding: 5px 10px"><input type="text" name="thanh_tien_4" value="<?php echo @$info['0']->thanh_tien_4;?>" onKeyUp="limitText(this.form.thanh_tien_4,this.form.countdown,15);" class="form-control" style="text-align: right;"></td>
      </tr>
      <tr>
        <td height="35px" width="10%" style="text-align: center;padding: 5px 10px">5</td>
        <td width="40%" style="padding-left: 10px"><span>PHÍ CIC</span></td>
        <td width="15%" style="padding: 5px 10px"><input type="text" name="don_gia_5" value="<?php echo @$info['0']->don_gia_5;?>" onKeyUp="limitText(this.form.don_gia_5,this.form.countdown,10);" class="form-control" placeholder="$" style="text-align: right;"></td>
        <td width="15%" style="padding: 5px 10px"><input type="text" name="so_luong_5" value="<?php echo @$info['0']->so_luong_5;?>" onKeyUp="limitText(this.form.so_luong_5,this.form.countdown,10);" class="form-control" style="text-align: center;"></td>
        <td width="20%" style="padding: 5px 10px"><input type="text" name="thanh_tien_5" value="<?php echo @$info['0']->thanh_tien_5;?>" onKeyUp="limitText(this.form.thanh_tien_5,this.form.countdown,15);" class="form-control" style="text-align: right;"></td>
      </tr>
      <tr>
        <td height="35px" width="10%" style="text-align: center;padding: 5px 10px">6</td>
        <td width="40%" style="padding-left: 10px"><span>PHÍ BOC XEP</span></td>
        <td width="15%" style="padding: 5px 10px"><input type="text" name="don_gia_6" value="<?php echo @$info['0']->don_gia_6;?>" onKeyUp="limitText(this.form.don_gia_6,this.form.countdown,10);" class="form-control" placeholder="$" style="text-align: right;"></td>
        <td width="15%" style="padding: 5px 10px"><input type="text" name="so_luong_6" value="<?php echo @$info['0']->so_luong_6;?>" onKeyUp="limitText(this.form.so_luong_6,this.form.countdown,10);" class="form-control" style="text-align: center;"></td>
        <td width="20%" style="padding: 5px 10px"><input type="text" name="thanh_tien_6" value="<?php echo @$info['0']->thanh_tien_6;?>" onKeyUp="limitText(this.form.thanh_tien_6,this.form.countdown,15);" class="form-control" style="text-align: right;"></td>
      </tr>
      <tr>
        <td height="35px" width="10%" style="text-align: center;padding: 5px 10px">7</td>
        <td width="40%" style="padding-left: 10px"><span>PHU PHI XANG DAU</span></td>
        <td width="15%" style="padding: 5px 10px"><input type="text" name="don_gia_7" value="<?php echo @$info['0']->don_gia_7;?>" onKeyUp="limitText(this.form.don_gia_7,this.form.countdown,10);" class="form-control" placeholder="$" style="text-align: right;"></td>
        <td width="15%" style="padding: 5px 10px"><input type="text" name="so_luong_7" value="<?php echo @$info['0']->so_luong_7;?>" onKeyUp="limitText(this.form.so_luong_7,this.form.countdown,10);" class="form-control" style="text-align: center;"></td>
        <td width="20%" style="padding: 5px 10px"><input type="text" name="thanh_tien_7" value="<?php echo @$info['0']->thanh_tien_7;?>" onKeyUp="limitText(this.form.thanh_tien_7,this.form.countdown,15);" class="form-control" style="text-align: right;"></td>
      </tr>
      <tr>
        <td height="45px" width="10%"></td>
        <td width="40%"></td>
        <td width="15%"></td>
        <td width="15%"></td>
        <td width="20%"></td>
      </tr>
      <tr>
        <td height="35px" width="10%"></td>
        <td width="40%" style="padding-left: 10px"><span>Cộng</span></td>
        <td width="15%"></td>
        <td width="15%"></td>
        <td width="20%" style="padding: 5px 10px"><input type="text" name="sub_total" value="<?php echo @$info['0']->sub_total;?>" onKeyUp="limitText(this.form.sub_total,this.form.countdown,15);" class="form-control" style="text-align: right;"></td>
      </tr>
      <tr>
        <td height="35px" width="10%"></td>
        <td width="40%" style="padding-left: 10px"><span>VAT</span></td>
        <td width="15%" style="padding: 5px 10px"><input type="text" name="don_gia_vat" value="<?php echo @$info['0']->don_gia_vat;?>" onKeyUp="limitText(this.form.don_gia_vat,this.form.countdown,10);" class="form-control" style="text-align: right;" placeholder="%"></td>
        <td width="15%"></td>
        <td width="20%" style="padding: 5px 10px"><input type="text" name="total_vat" value="<?php echo @$info['0']->total_vat;?>" onKeyUp="limitText(this.form.total_vat,this.form.countdown,15);" class="form-control" style="text-align: right;"></td>
      </tr>
      <tr>
        <td height="35px" width="10%"></td>
        <td width="40%" style="padding-left: 10px"><span>TỔNG CỘNG</span></td>
        <td width="15%"></td>
        <td width="15%"></td>
        <td width="20%" style="padding: 5px 10px"><input type="text" name="total" value="<?php echo @$info['0']->total;?>" onKeyUp="limitText(this.form.total,this.form.countdown,15);" class="form-control" style="text-align: right;font-weight: bold;"></td>
      </tr>
    </table>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 20px">
    <div class="row">
      <div class="form-group">
        <label style="line-height: 34px" class="col-md-2 col-sm-2 title">Bằng chữ</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="bang_chu" value="<?php echo @$info['0']->bang_chu;?>" onKeyUp="limitText(this.form.bang_chu,this.form.countdown,90);" class="form-control" style="  width: 100%;">
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 30px">
    <div class="row">
      <div class="col-md-3 col-sm-3" style="text-align: center;">
        <span style="font-weight: bold;">GIÁM ĐỐC</span>
      </div>
      <div class="col-md-3 col-sm-3" style="text-align: center;">
        <span style="font-weight: bold;">THỦ QUỸ</span>
      </div>
      <div class="col-md-3 col-sm-3" style="text-align: center;">
        <span style="font-weight: bold;">NGƯỜI LẬP PHIẾU</span>
      </div>
      <div class="col-md-3 col-sm-3" style="text-align: center;">
        <span style="font-weight: bold;">NGƯỜI NỘP TIỀN</span>
      </div>
    </div>
  </div>

  <div class="col-md-12 col-sm-12" style="text-align: center;margin-top: 150px; margin-bottom: 50px">
    <span style="font-weight: bold;">HANG</span>
  </div>

</div>
</div>
<?php echo form_close(); ?>
</body>
</html>