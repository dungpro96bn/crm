<?php echo form_open(get_uri("huongdan_guihang/save"), array("id" => "pdf-form", "class" => "general-form", "role" => "form")); ?>
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
table tr td{

}
.form-group{
  height: 35px;
}
#add_to{
  margin-top: 100px
}
.ship{
  margin-top: 30px;
}
#table{
  margin-top: 100px
}
.pad{
  padding: 10px
}
.pad input{
  padding: 0px;
  text-align: center;
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
<input value="<?php echo @$info['0']->id;?>" name="id" hidden="hidden">
<input value="<?php echo @$model_info->id; ?>" name="task_id" hidden="hidden">
<input value="<?php echo @$model_info->status_id; ?>" name="status_id" hidden="hidden">
<div class="col-md-12 b-t pt10 list-container">

  <div id="logo">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h1 style="text-align: center; font-weight: bold;">CONSOLIDATED CARGO MANIFEST</h1>
      </div>  
    </div>
  </div>
  
 <div id="add_to">
   <div class="row">
     <div class="col-md-7 col-sm-7">
       <div class="form-group">
        <label for="title" class="col-md-2 col-sm-2 ">From</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="from" onKeyUp="limitText(this.form.from,this.form.countdown,40);" value="<?php echo @$info['0']->from;?>"   class="form-control" style=" text-transform: uppercase;font-weight: bold; width: 80%" placeholder="HANOI AIRPORT, VIETNAM">
        </div>
      </div>
      <div class="form-group">
        <label for="title" class="col-md-2 col-sm-2 ">MAWB</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="mawb" onKeyUp="limitText(this.form.mawb,this.form.countdown,40);" value="<?php echo @$info['0']->mawb;?>"   class="form-control" style=" text-transform: uppercase;font-weight: bold; width: 80%" placeholder="607 - 8009 2434">
        </div>
      </div>
      <div class="form-group">
        <label for="title" class="col-md-2 col-sm-2 ">No. of PCS</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="no_of_pcs" value="<?php echo @$info['0']->no_of_pcs;?>"   class="form-control" style=" text-transform: uppercase;font-weight: bold; width: 80%">
        </div>
      </div>
     </div>
     <div class="col-md-5 col-sm-5">
       <div class="form-group">
        <label for="title" class="col-md-2 col-sm-2 ">To</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="to" onKeyUp="limitText(this.form.to,this.form.countdown,35);" value="<?php echo @$info['0']->to;?>"   class="form-control" style=" text-transform: uppercase;font-weight: bold; width: 80%" placeholder="MXP AIRPORT, ITALY">
        </div>
      </div>
      <div class="form-group">
        <label for="title" class="col-md-2 col-sm-2 ">Flight No.</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="flight_no" onKeyUp="limitText(this.form.flight_no,this.form.countdown,35);" value="<?php echo @$info['0']->flight_no;?>"   class="form-control" style=" text-transform: uppercase;font-weight: bold; width: 80%" placeholder="EY972/14APR18">
        </div>
      </div>
     </div>
   </div>

   <div class="row ship">
     <div class="col-md-7 col-sm-7">
       <div class="form-group">
        <label for="title" class="col-md-2 col-sm-2 ">Shipper</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <textarea name="shipper" class="form-control" onKeyUp="limitText(this.form.shipper,this.form.countdown,150);" rows="5" style=" text-transform: uppercase;font-weight: bold; width: 80%"><?php echo @$info['0']->shipper;?></textarea>
        </div>
      </div>
     </div>
     <div class="col-md-5 col-sm-5">
       <div class="form-group">
        <label for="title" class="col-md-2 col-sm-2 ">Consignee</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <textarea name="consignee" onKeyUp="limitText(this.form.consignee,this.form.countdown,150);"  class="form-control" rows="5" style=" text-transform: uppercase;font-weight: bold; width: 80%"><?php echo @$info['0']->consignee;?></textarea>
        </div>
      </div>
     </div>
   </div>
 </div>

 <div id="table">
   <table width="100%" border="1">
     <tr style="font-weight: bold;font-size: 14px; text-align: center;">
       <td height="40px" width="10%">
         <span>HAWB</span>
       </td>
       <td width="27%">
         <span>SHIPPER</span>
       </td>
       <td width="18%">
         <span>CONSIGNEE</span>
       </td>
       <td width="6%"> 
         <span>No. of</span>
       </td>
       <td width="23%">
         <span>NATURE OF GOODS</span>
       </td>
       <td width="8%">
         <span>G/W</span>
       </td>
       <td width="8%">
         <span>PAYMENT</span>
       </td>
     </tr>
     <tr>
       <td class="pad">
         <input type="text" name="hawb" value="<?php echo @$info['0']->hawb;?>" class="form-control" style="text-transform: uppercase; font-weight: bold;" placeholder="GLX1804032">
       </td>
       <td class="pad">
        <textarea name="shipper_form"  class="form-control" onKeyUp="limitText(this.form.shipper_form,this.form.countdown,300);" rows="6" style="text-transform: uppercase;"><?php echo @$info['0']->shipper_form;?></textarea>
       </td>
       <td class="pad">
         <textarea name="consignee_form" class="form-control" onKeyUp="limitText(this.form.consignee_form,this.form.countdown,300);" rows="6" style="text-transform: uppercase;"><?php echo @$info['0']->consignee_form;?></textarea>
       </td>
       <td class="pad">
         <input type="text" name="no_of_form" onKeyUp="limitText(this.form.no_of_form,this.form.countdown,6);" value="<?php echo @$info['0']->no_of_form;?>" id="fname" onkeyup="myFunction()" class="form-control">
       </td>
       <td class="pad">
         <textarea name="nature_of_goods" onKeyUp="limitText(this.form.nature_of_goods,this.form.countdown,300);" class="form-control" rows="6"><?php echo @$info['0']->nature_of_goods;?></textarea>
       </td>
       <td class="pad">
         <input type="text" name="g_w_form" onKeyUp="limitText(this.form.g_w_form,this.form.countdown,50);" value="<?php echo @$info['0']->g_w_form;?>" class="form-control">
       </td>
       <td class="pad">
         <input type="text" name="payment_form" onKeyUp="limitText(this.form.payment_form,this.form.countdown,50);" value="<?php echo @$info['0']->payment_form;?>" class="form-control">
       </td>
     </tr>
     <tr>
       <td height="40px"></td>
       <td style="padding-left: 10px">
         <span style="font-weight: bold;">TOTAL</span>
       </td>
       <td></td>
       <td style="text-align: center; font-weight: bold;">
         <span id="demo" ><?php echo @$info['0']->no_of_form;?></span>
       </td> 
       <td></td>
       <td></td>
       <td></td>
     </tr>
   </table>
 </div>

<script>
  function myFunction() {
      var x = document.getElementById("fname").value;
      document.getElementById("demo").innerHTML = x;
  }
</script>

</div>
  <?php form_close() ;?>
</body>
</html>