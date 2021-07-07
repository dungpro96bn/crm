<?php echo form_open(get_uri("huongdan_guihang/save"), array("id" => "pdf-form1", "class" => "general-form", "role" => "form")); ?>
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
    font-family: Arial;
    font-size: 14px;
}
table tr td{
  padding-left: 10px;
}
.form-group{
  height: 30px;
}
.amount_to{
  overflow: hidden;
  margin-top: 5px;
}
.modal-dialog{
    width: 70%;
}
.form-control{
    border: 1px solid #ccc !important;
    border-radius: 5px !important;
}
</style>


<body>

<div class="col-md-12 b-t pt10 list-container">
    <input hidden="hidden" name="value" id="value" value="1">
    <input value="<?php echo @$info1['0']->id;?>" name="id" hidden="hidden">
    <input value="<?php echo @$model_info->id; ?>" name="task_id" hidden="hidden">
    <input value="<?php echo @$model_info->status_id; ?>" name="status_id" hidden="hidden">
    <input hidden="hidden" value="1" id="vl">
    <div class="row">
      <div class="col-md-3 col-sm-3" style="text-align: center;">
        <img style="height:100px;" src="<?php echo get_file_uri("assets/images/logo-glx.png"); ?>">
      </div>
      <div class="col-md-9 col-sm-9">
        <div style="border-bottom: 2px solid #1205a8;margin-top: 10px">        
          <span style="font-size: 20px; color: #1205a8; font-weight: bold;">GALAXY LOGISTICS CO., LTD</span><br>        
        </div>
        <div style="padding-top: 5px">
          <span>Liaison off.:  Unit 2401, 24/F, Tower, 101 Lang Ha st., Dong Da dist., Hanoi, Vietnam</span><br>
          <span>Tel: 84 - 24 - 5624946  Fax: 84 - 24 - 5624947  Email: info@galaxy-vietnam.com</span>
        </div>
      </div>
    </div>

    <div class="row" style="margin-top: 80px">
      <div class="col-md-6 col-sm-6">
        <div class="form-group">
          <label for="invoice" class="col-md-12 col-sm-12" style="padding-left: 0px; font-weight: bold;font-size: 16px">INVOICE</label>
        </div>
        <div class="form-group">
          <label for="title" class="col-md-2 col-sm-2" style="padding-left: 0px">No:</label>
          <div class=" col-md-10 col-sm-10">
              <input type="text" name="no_add" onKeyUp="limitText(this.form.no_add,this.form.countdown,25);"  value="<?php echo @$info1['0']->no_add;?>"   class="form-control" style="width: 80%; font-weight: bold;">
          </div>
        </div>
        <div class="form-group">
          <label for="title" class="col-md-2 col-sm-2" style="padding-left: 0px">Date:</label>
          <div class=" col-md-10 col-sm-10">
              <input type="Date" name="date" value="<?php echo @$info1['0']->date;?>" class="form-control" style="width: 80%">
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="form-group">
          <label for="invoice" class="col-md-2 col-sm-2" style="padding-left: 0px; font-weight: bold;font-size: 16px">Messrs:</label>
          <div class=" col-md-10 col-sm-10">
              <textarea name="messrs_add" onKeyUp="limitText(this.form.messrs_add,this.form.countdown,170);"  class="form-control" style="text-transform: uppercase;" rows="6"><?php echo @$info1['0']->messrs_add;?></textarea>
          </div>
        </div>
      </div>
    </div>

    <table width="100%" border="1" style="margin-top: 80px; font-family: 'time new roman';">
      <tr style="font-weight: bold; text-align: center;">
        <td height="35px" width="8%" >
          <span>No</span>
        </td>
        <td width="50%">
          <span>Description</span>
        </td>
        <td width="12%">
          <span>Volume (KG)</span>
        </td>
        <td width="15%">
          <span>Rate (USD)</span>
        </td>
        <td width="15%">
          <span>Amount (USD)</span>
        </td>
      </tr>
      <tr>
        <td></td>
        <td style="padding: 10px">
          <textarea name="description" onKeyUp="limitText(this.form.description,this.form.countdown,250);" class="form-control" rows="4"><?php echo @$info1['0']->description;?></textarea>
        </td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td style="text-align: center;">
          <span>1</span>
        </td>
        <td>
          <span>Air freight HAN - MXP</span>
        </td>
        <td style="padding: 5px 10px">
          <input type="text" onKeyUp="limitText(this.form.air_freight_volume,this.form.countdown,10);" name="air_freight_volume"  value="<?php echo @$info1['0']->air_freight_volume;?>"  class="form-control">
        </td>
        <td style="padding: 5px 10px">
          <input type="text" name="air_freight_rate" onKeyUp="limitText(this.form.air_freight_rate,this.form.countdown,10);"  value="<?php echo @$info1['0']->air_freight_rate;?>"  class="form-control" placeholder="$">
        </td>
        <td style="padding: 5px 10px">
          <input type="text" name="air_freight_amount" onKeyUp="limitText(this.form.air_freight_amount,this.form.countdown,12);" value="<?php echo @$info1['0']->air_freight_amount;?>"  class="form-control" placeholder="$">
        </td>
      </tr>
      <tr>
        <td style="text-align: center;">
          <span>2</span>
        </td>
        <td>
          <span>X-ray</span>
        </td>
        <td></td>
        <td style="padding: 5px 10px">
          <input type="text" name="x_ray_rate" onKeyUp="limitText(this.form.x_ray_rate,this.form.countdown,10);" value="<?php echo @$info1['0']->x_ray_rate;?>"  class="form-control" placeholder="$">
        </td>
        <td style="padding: 5px 10px">
          <input type="text" name="x_ray_amount" onKeyUp="limitText(this.form.x_ray_amount,this.form.countdown,12);" value="<?php echo @$info1['0']->x_ray_amount;?>"  class="form-control" placeholder="$">
        </td>
      </tr>
      <tr>
        <td style="text-align: center;">
          <span>3</span>
        </td>
        <td>
          <span>CGC</span>
        </td>
        <td></td>
        <td></td>
        <td style="padding: 5px 10px">
          <input type="text" name="cgc_amount" onKeyUp="limitText(this.form.cgc_amount,this.form.countdown,12);" value="<?php echo @$info1['0']->cgc_amount;?>"  class="form-control" placeholder="$">
        </td>
      </tr>
      <tr>
        <td style="text-align: center;">
          <span>4</span>
        </td>
        <td>
          <span>MAWB</span>
        </td>
        <td></td>
        <td></td>
        <td style="padding: 5px 10px">
          <input type="text" name="mawb_amount" onKeyUp="limitText(this.form.mawb_amount,this.form.countdown,12);" value="<?php echo @$info1['0']->mawb_amount;?>"  class="form-control" placeholder="$">
        </td>
      </tr>
      <tr>
        <td style="text-align: center;">
          <span>5</span>
        </td>
        <td>
          <span>Profit for Galaxy</span>
        </td>
        <td></td>
        <td style="padding: 5px 10px">
          <input type="text" name="profit_rate" onKeyUp="limitText(this.form.profit_rate,this.form.countdown,10);" value="<?php echo @$info1['0']->profit_rate;?>"  class="form-control" placeholder="$">
        </td>
        <td style="padding: 5px 10px">
          <input type="text" name="profit_amount" onKeyUp="limitText(this.form.profit_amount,this.form.countdown,12);" value="<?php echo @$info1['0']->profit_amount;?>"  class="form-control" placeholder="$">
        </td>
      </tr>
      <tr>
        <td colspan="4" style="font-weight: bold;text-align: center; font-size: 18px">
          <span>Total due GALAXY LOGISTICS CO., LTD</span>
        </td>
        <td style="font-weight: bold;padding:5px 10px">
          <input type="text" name="total_galaxy" id="total_galaxy" onKeyUp="limitText(this.form.total_galaxy,this.form.countdown,12);" value="<?php echo @$info1['0']->total_galaxy;?>"  class="form-control" placeholder="$">
        </td>
      </tr>
      <tr>
        <td colspan="5" style="text-align: center;padding: 5px 10px">
          <div class="form-group" style="margin: 0px;">
          <label for="title" class="col-md-2 col-sm-2" style="padding-left: 0px;padding-top: 5px; font-size: 18px">In words:</label>
          <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
              <input type="text" name="in_words_total" readonly  id="in_words_total" value="<?php echo @$info1['0']->in_words_total;?>"  class="form-control" style="font-weight: bold; font-style: italic;">
          </div>
        </div>
        </td>
      </tr>
    </table>

    <div class="row" style="margin-top: 50px; margin-bottom: 50px">
      <div class="amount_to">
        <div class="col-md-12 col-sm-12">
          <span style="font-weight: bold;">Please remit this amount to: </span>
        </div>
      </div>
      <div class="amount_to">
        <div class="col-md-2 col-sm-2">
          <span style="font-weight: bold;">Bank:</span>
        </div>
        <div class="col-md-10 col-sm-12">
          <span style="color: #0000ff">JOINT STOCK COMMERCIAL BANK FOR FOREIGN TRADE OF VIETNAM - OPERATIONS CENTRE BRANCH</span>
        </div>
      </div>
      <div class="amount_to">
        <div class="col-md-2 col-sm-2">
          <span style="font-weight: bold;">Bank address:</span>
        </div>
        <div class="col-md-10 col-sm-10">
          <span style="color: #0000ff">31-33 Ngo Quyen str., Hoan Kiem Dist., Ha Noi, Viet nam</span>
        </div>
      </div>
      <div class="amount_to">
        <div class="col-md-2 col-sm-2">
          <span style="font-weight: bold;">Benificiary name:</span>
        </div>
        <div class="col-md-10 col-sm-10">
          <span style="color: #0000ff">GALAXY LOGISTICS CO ., LTD</span>
        </div>
      </div>
      <div class="amount_to">
        <div class="col-md-2 col-sm-2">
          <span style="font-weight: bold;">Benificiary address:</span>
        </div>
        <div class="col-md-10 col-sm-10">
          <span style="color: #0000ff">No 21/115 Alley , Nui Truc str., Kim Ma Ward, Ba Dinh dist., Ha Noi, Vietnam </span>
        </div>
      </div>
      <div class="amount_to">
        <div class="col-md-2 col-sm-2">
          <span style="font-weight: bold;">Account No:</span>
        </div>
        <div class="col-md-10 col-sm-10">
          <span style="color: #0000ff">001.137.0295.369 (USD)</span>
        </div>
      </div>
      <div class="amount_to">
        <div class="col-md-2 col-sm-2">
          <span style="font-weight: bold;">Swift code:</span>
        </div>
        <div class="col-md-10 col-sm-10">
          <span style="color: #0000ff">B F T V V N V X 001</span>
        </div>
      </div>
    </div>

</div>
<?php echo form_close(); ?>
</body>
</html>