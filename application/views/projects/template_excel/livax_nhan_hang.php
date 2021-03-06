
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
body{

}
#livax_nhan_hang{
  font-size: 14px;
}
#top{
  margin-top: 50px
}
.form-group{
  height: 35px
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
.input_add{
    
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
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
  
  <div id="livax_nhan_hang">
 
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
      <span>H?? N???i, ng??y</span>&nbsp;<input type="date" value="<?php echo @$info['0']->date_hn;?>" name="date_hn" style="width: 250px"></i>
    </div>
  </div>

  <div class="col-md-12 col-sm-12" style="text-align: center; margin-top: 50px">
    <h1 style="font-weight: bold;">Gi???y b??o nh???n h??ng</h1>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 50px">
    <div class="row">
      <div class="form-group">
        <label class="col-md-2 col-sm-2"><i>K??nh g???i:</i></label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <textarea name="kinh_gui" value="" onKeyUp="limitText(this.form.kinh_gui,this.form.countdown,140);" class="form-control" rows="3" style="text-transform: uppercase; font-weight: 600; font-style: italic;"><?php echo @$info['0']->kinh_gui;?></textarea>
        </div>
      </div>
      <div class="col-md-12 col-sm-12" style="margin-top: 15px">
        <span style="font-weight: 600"><i>Att: Ph??ng xu???t nh???p kh???u</i></span>
      </div>
    </div>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 15px">
    <div class="row">
      <div class="form-group">
        <label class="col-md-4 col-sm-4 title">Ch??ng t??i xin tr??n tr???ng th??ng b??o t??u</label>
        <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="text" name="thong_bao" onKeyUp="limitText(this.form.thong_bao,this.form.countdown,45);" value="<?php echo @$info['0']->thong_bao;?>" class="form-control" style="  width: 70%;text-transform: uppercase;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 col-sm-4 title">D??? ki???n c???p c???ng H???i Ph??ng ng??y</label>
        <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="date" name="cap_cang" value="<?php echo @$info['0']->cap_cang;?>" class="form-control" style="  width: 70%;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-12 col-sm-12 title">C?? ch??? l?? h??ng d?????i ????y c???a qu?? kh??ch:</label>
      </div>
      <div class="form-group">
        <label class="col-md-4 col-sm-4 title">H??ng h??a ( Commodity)</label>
        <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="text" name="commodity" onKeyUp="limitText(this.form.commodity,this.form.countdown,45);" value="<?php echo @$info['0']->commodity;?>" class="form-control" style="  width: 70%;text-transform: uppercase;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 col-sm-4 title">V???n ????n s??? ( Bill of Lading No)</label>
        <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="text" name="bill_of_lading" onKeyUp="limitText(this.form.bill_of_lading,this.form.countdown,45);" value="<?php echo @$info['0']->bill_of_lading;?>" class="form-control" style="  width: 70%;text-transform: uppercase;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 col-sm-4 title">???????c g???i t??? ( From)</label>
        <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="text" name="form" value="<?php echo @$info['0']->form;?>" onKeyUp="limitText(this.form.from,this.form.countdown,45);" class="form-control" style="  width: 70%;text-transform: uppercase;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 col-sm-4 title">S??? Container / Seal No</label>
        <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="text" name="container_seal_no" onKeyUp="limitText(this.form.container_seal_no,this.form.countdown,45);" value="<?php echo @$info['0']->container_seal_no;?>" class="form-control" style="  width: 70%;text-transform: uppercase;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 col-sm-4 title">Tr???ng l?????ng ( Weight)</label>
        <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="text" name="weight" onKeyUp="limitText(this.form.weight,this.form.countdown,45);" value="<?php echo @$info['0']->weight;?>" class="form-control" style="  width: 70%;text-transform: uppercase;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 col-sm-4 title">Th??? t??ch ( Measurement)</label>
        <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="text" name="measurement" onKeyUp="limitText(this.form.measurement,this.form.countdown,45);" value="<?php echo @$info['0']->measurement;?>" class="form-control" style="  width: 70%;text-transform: uppercase;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 col-sm-4">C???ng d??? h??ng</label>
        <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="text" name="cang_do_hang" onKeyUp="limitText(this.form.cang_do_hang,this.form.countdown,45);" value="<?php echo @$info['0']->cang_do_hang;?>" class="form-control" style="  width: 70%;text-transform: uppercase;">
        </div>
      </div>
      <div class="form-group">
        <label class="title" style="width: 12%; float: left;padding-left: 15px;font-weight: 600">Kho:</label>
        <div style="padding-right: 0px; width: 38%; float: left;">
            <input type="text" name="kho" onKeyUp="limitText(this.form.kho,this.form.countdown,32);" value="<?php echo @$info['0']->kho;?>" class="form-control" style="font-weight: 600; text-transform: uppercase;">
        </div>
        <label class="title" style="width: 12%; float: left;padding-left: 15px;font-weight: 600">M?? kho:</label>
        <div style="padding-right: 0px; width: 38%; float: left;">
            <input type="text" name="ma_kho" value="<?php echo @$info['0']->ma_kho;?>" onKeyUp="limitText(this.form.ma_kho,this.form.countdown,25);" class="form-control" style="font-weight: 600; text-transform: uppercase;">
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-12 col-sm-12">
    <span>????? ngh??? qu?? kh??ch li??n h??? ?????n c??ng ty ch??ng t??i nh???n l???nh, gi???y u??? quy???n, ch???ng t??? ngay khi nh???n ???????c gi???y b??o nh???n h??ng ?????i v???i h??ng l???, v?? trong v??ng 5 ng??y ?????i v???i h??ng nguy??n c??ng. Qu?? th???i h???n tr??n qu?? kh??ch ph???i tr??? ph?? l??u kho, ph?? l??u container c??ng nh?? ch???u m???i r???i ro, ph?? t???n ph??t sinh.</span>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 50px">
    <div style="margin-bottom: 15px">
      <span style="font-weight: bold;">Khi ?????n nh???n h??ng ????? ngh??? mang theo nh???ng gi???y t??? sau:</span>
    </div>
    <div class="row">
      <div class="form-group">
        <label class="col-md-4 col-sm-4 title">1. Gi???y gi???i thi???u</label>
        <!-- <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="text" name="giay_gioi_thieu" onKeyUp="limitText(this.form.giay,this.form.countdown,50);" value=""  class="form-control" style="  width: 70%">
        </div> -->
        <div class="checkboxThree col-md-8 col-sm-8" style="margin-left: 15px">
          <input type="checkbox" value="Yes" id="checkboxThreeInput" <?php echo (@$info['0']->giay_gioi_thieu=='Yes')?'checked':'' ?> name="giay_gioi_thieu" />
          <label for="checkboxThreeInput"></label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 col-sm-4 title">2. V???n ????n g???c</label>
        <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="text" name="van_don" value="<?php echo @$info['0']->van_don;?>" onKeyUp="limitText(this.form.van_don,this.form.countdown,55);" class="form-control" style="  width: 70%;text-transform: uppercase;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 col-sm-4 title">3. C?????c v???n chuy???n qu???c t???</label>
        <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="text" name="cuoc_van_chuyen" onKeyUp="limitText(this.form.cuoc_van_chuyen,this.form.countdown,55);" value="<?php echo @$info['0']->cuoc_van_chuyen;?>" class="form-control" style="  width: 70%;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 col-sm-4 title">4. Ph?? ch???ng t???</label>
        <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="text" name="phi_chung_tu" onKeyUp="limitText(this.form.phi_chung_tu,this.form.countdown,55);" value="<?php echo @$info['0']->phi_chung_tu;?>" class="form-control" style="  width: 70%;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 col-sm-4 title">5.Ph?? handling</label>
        <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="text" name="handling" onKeyUp="limitText(this.form.handling,this.form.countdown,55);" value="<?php echo @$info['0']->handling;?>" class="form-control" style="  width: 70%;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 col-sm-4 title">6. Ph?? CFS</label>
        <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="text" name="phi_cfs" onKeyUp="limitText(this.form.phi_cfs,this.form.countdown,55);" value="<?php echo @$info['0']->phi_cfs;?>" class="form-control" style="  width: 70%;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 col-sm-4 title">7. Ph?? THC</label>
        <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="text" name="phi_thc" onKeyUp="limitText(this.form.phi_thc,this.form.countdown,55);" value="<?php echo @$info['0']->phi_thc;?>" class="form-control" style="  width: 70%;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 col-sm-4 title">8.Phi CIC</label>
        <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="text" name="phi_cic" onKeyUp="limitText(this.form.phi_cic,this.form.countdown,55);" value="<?php echo @$info['0']->phi_cic;?>" class="form-control" style="  width: 70%;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 col-sm-4 title">9.Phi b???c x???p</label>
        <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="text" name="phi_boc_xep" onKeyUp="limitText(this.form.phi_boc_xep,this.form.countdown,55);" value="<?php echo @$info['0']->phi_boc_xep;?>" class="form-control" style="  width: 70%;">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 col-sm-4 title">10.Ph??? phi x??ng d???u ( BAF)</label>
        <div class=" col-md-8 col-sm-8" style="padding-right: 0px">
            <input type="text" name="phi_xang_dau" onKeyUp="limitText(this.form.phi_xang_dau,this.form.countdown,55);" value="<?php echo @$info['0']->phi_xang_dau;?>" class="form-control" style="  width: 70%;">
        </div>
      </div>
      <div class="col-md-12 col-sm-12">
        <label>C??c ph?? tr??n ch??a bao g???m VAT</label>
      </div>
    </div>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 50px">
    <span style="font-weight: 600"><i>Ch??ng t??i ?????m nh???n m???i d???ch v??? giao nh???n h??ng ho?? t???n n??i theo y??u c???u c???a Qu?? kh??ch.</i></span>
  </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 50px;margin-bottom: 100px">
    <div class="col-md-6 col-sm-6"></div>
    <div class="col-md-6 col-sm-6">
      <div>
        <span style="color: #337ab7; font-size: 18px; font-weight: 600;">GALAXY LOGISTICS COMPANY LTD</span> 
      </div>
      <div style="margin-top: 60px">
        <input type="text" name="user" value="<?php echo @$info['0']->user;?>"  onKeyUp="limitText(this.form.user,this.form.countdown,50);" class="form-control">
      </div>
    </div>  
  </div>
  </div>
</div>
<?php echo form_close(); ?>
</body>
</html>