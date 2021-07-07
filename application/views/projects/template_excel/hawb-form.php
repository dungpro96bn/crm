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
    font-family: Arial;
}
table tr td{
  padding-left: 10px;
  padding-bottom: 5px;
  padding-top: 5px
}

.modal-dialog{
    width: 70%;
    margin: 30px auto;
    }
.form-control{
    border: 1px solid #ccc !important;
    border-radius: 5px !important;
}
input[type=radio]{
  margin: auto;
}
.hawb{
  width: 1000px;margin: auto;
}
.list-container-hawb{
  overflow: auto;
  margin-bottom: 50px;
}

</style>


<body>
<input value="<?php echo @$info['0']->id;?>" name="id" hidden="hidden">
<input value="<?php echo @$model_info->id; ?>" name="task_id" hidden="hidden">
<input value="<?php echo @$model_info->status_id; ?>" name="status_id" hidden="hidden">
<div class="col-md-12 b-t pt10 list-container list-container-hawb">
  <div class="hawb">
  
  <table width="100%">
    <tr style="line-height: 25px; font-size: 14px">
      <td height="25px" width="8%">
        <input type="text" name="code1" onKeyUp="limitText(this.form.code1,this.form.countdown,5);" value="<?php echo @$info['0']->code1;?>" class="form-control" placeholder="6079" style="text-align: center;">
      </td>
      <td width="8%">
        <input type="text" name="code2" onKeyUp="limitText(this.form.code2,this.form.countdown,5);" value="<?php echo @$info['0']->code2;?>" class="form-control" placeholder="HAN" style="text-transform: uppercase; text-align: center;">
      </td>
      <td width="63%">
        <input type="text" name="code3" onKeyUp="limitText(this.form.code3,this.form.countdown,20);" value="<?php echo @$info['0']->code3;?>" class="form-control" placeholder="8009 2334" style="width: 15%">
      </td>
      <td width="21%">
        <input type="text" name="code4" onKeyUp="limitText(this.form.code4,this.form.countdown,20);" value="<?php echo @$info['0']->code4;?>" class="form-control" placeholder="607 - 8009 2434" style="width: 60%">
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr>
      <td height="30px" width="25%" style="border-bottom-color: white">
        <span>Shipper's Name and Address</span>
      </td>
      <td width="25%">
        <span>Shipper's Account Number</span><br>
        <input type="text" name="shipper_number" onKeyUp="limitText(this.form.shipper_number,this.form.countdown,20);" value="<?php echo @$info['0']->shipper_number;?>" class="form-control" style="width: 80%">
      </td>
      <td rowspan="2" width="17%" style="border-right-color: white; border-left-color: black">
        <span>NOT NEGOTIABLE</span><br><br><br>
        <span style="font-size: 16px"><b>Air Waybill</b></span><br><br>
        <span>Issued by</span>
      </td>
      <td width="33%" rowspan="2" style="text-align: center; border-left-color: white; text-align: center;"><br><br>
        <span style="text-align: center; font-size: 16px"><input type="text" name="air_waybill" onKeyUp="limitText(this.form.air_waybill,this.form.countdown,28);" value="<?php echo @$info['0']->air_waybill;?>"  class="form-control" style="width: 50%; margin-left: 80px; text-transform: uppercase; text-align: center; font-weight: bold;" ></span><br><br>
        <!-- <span style="text-align: center; font-size:
        18px;font-weight: bold;"><b>GALAXY LOGISTICS CO., LTD</b></span><br> -->
        <input type="text" name="name_cty" onKeyUp="limitText(this.form.name_cty,this.form.countdown,40);" value="<?php echo @$info['0']->name_cty;?>" class="form-control">
      </td>
    </tr>
    <tr>
      <td height="80px" colspan="2" style="border-top-color: white">
        <textarea name="shipper" class="form-control" rows="4" cols="70" id="fix_row" onKeyUp="limitText(this.form.shipper,this.form.countdown,300);" style=" text-transform: uppercase;"><?php echo @$info['0']->shipper;?></textarea>
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr>
      <td height="30px" width="25%" style="border-bottom-color: white">
        <span>Consignee's name and address</span>
      </td>
      <td width="25%">
        <span>Consignee's Account Number</span><br>
        <input type="text" name="consignee_number" onKeyUp="limitText(this.form.consignee_number,this.form.countdown,20);" value="<?php echo @$info['0']->consignee_number;?>" class="form-control" style="width: 80%">
      </td>
      <td width="50%" style="line-height: 30px">
        <span>Copies 1, 2 and 3 of this Air Waybill are originals and have same validity.</span>
      </td>
    </tr>
    <tr>
      <td colspan="2" style="border-top-color: white">
        <textarea name="consignee" rows="6" id="consi_fix_row" cols="70" class="form-control" onKeyUp="limitText(this.form.consignee,this.form.countdown,300);" style="width: 80%; text-transform: uppercase;"><?php echo @$info['0']->consignee;?></textarea>
      </td>
      <td height="145px" width="50%" style="text-align: left; line-height: 1.5rem; padding: 10px">
        <span>It is agreed that the goods described herein are accepted on apparent good order and condition ( excepted as noted ) for carriage <span style="font-size: 12px">SUBJECT TO THE CONDITIONS OF CONTRACT ON THE REVERSE HEREOF. ALL GOODS MAY BE CARRIED BY ANY  OTHER MEANS INCLUDING ROAD OR ANY OTHER CARRIER UNLESS SPECIFIC CONTRARY INSTRUCTIONS ARE GIVEN HEREON BY THE SHIPPER, AND SHIPPER AGREES THAT THE SHIPMENT MAY BE CARRIED VIA INTERMEDIATE STOPPING PLACE WHICH THE CARRIER DEEMS APPROPRIATES. THE SHIPPER'S ATTENTION IS DRAWN TO THE NOTICE CONCERNING CARRIER'S LIMITATION OF  LIABILITY.</span>Shipper may increase such limitation of liability by declaring a higher value for carriage and paying a supplemental charge if required.</span>
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr>
      <td width="50%" colspan="2">
        <span>Issuing Carrier's Agent Name and City</span><br>
        <!-- <b style="font-size: 
        16px; text-align: center;">GALAXY LOGISTICS CO., LTD</b> -->
        <span style="font-size: 12px; text-align: center; font-weight: bold;"><?php echo @$info['0']->name_cty;?></span>
      </td>
      <td rowspan="3" width="50%">
        <span>Accounting Information</span><br><br>
        <textarea name="information" class="form-control" onKeyUp="limitText(this.form.information,this.form.countdown,300);" rows="4" style="width: 96%"><?php echo @$info['0']->information;?></textarea>
      </td>
    </tr>
    <tr>
      <td width="25%">
        <span>Agent's IATA Code</span><br>
        <input type="text" name="iata_Code" onKeyUp="limitText(this.form.iata_Code,this.form.countdown,25);" value="<?php echo @$info['0']->iata_Code;?>" class="form-control" style="width: 90%">
      </td>
      <td width="25%">
        <span>Account No.</span><br>
        <input type="text" name="account_no" onKeyUp="limitText(this.form.account_no,this.form.countdown,20);" value="<?php echo @$info['0']->account_no;?>" class="form-control" style="width: 90%">
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <span>Airport of Departure ( Addr.of First Carrier ) and Requested Routing</span><br>
        <span style="font-size: 16px; float: left"><b>HANOI - VIETNAM</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <span style="font-size: 16px; float: left"><input type="text" name="airport_departure" onKeyUp="limitText(this.form.airport_departure,this.form.countdown,23);" value="<?php echo @$info['0']->airport_departure;?>" class="form-control" style="width: 100%; text-align: center;text-transform: uppercase; font-weight: bold;"></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr style="text-align: center;">
      <td  width="5%">
        <span>To</span>
      </td>
      <td width="17%" style="text-align: center;">
        <span>By first Carrier<br> Routing and Destination</span>
      </td>
      <td width="5%">
        <span>To</span>
      </td>
      <td width="5%">
        <span>By</span>
      </td>
      <td width="5%">
        <span>To</span>
      </td>
      <td width="5%">
        <span>By</span>
      </td>
      <td width="8%">
        <span>Currency</span>
      </td>
      <td width="5%">
        <span>CHGS Code</span>
      </td>
      <td colspan="2" width="10%">
        <span>WT/VAL</span>
      </td>
      <td colspan="2" width="10%">
        <span>OTHER</span>
      </td>
      <td width="13%">
        <span>Declared value for carriage</span>
      </td>
      <td width="12%">
        <span>Declared value for customs</span>
      </td>
    </tr>
    <tr style="text-align: center;">
      <td height="30px" style="line-height: 30px">
        <input type="text" name="to_one" onKeyUp="limitText(this.form.to_one,this.form.countdown,6);" value="<?php echo @$info['0']->to_one;?>" class="form-control" style="width: 90%; text-transform: uppercase;text-align: center;padding: 0px">
      </td>
      <td style="line-height: 30px">
        <input type="text" name="By_first_Carrier" onKeyUp="limitText(this.form.By_first_Carrier,this.form.countdown,30);" value="<?php echo @$info['0']->By_first_Carrier;?>" class="form-control" style="width: 90%; text-transform: uppercase;text-align: center;padding: 0px">
      </td>
      <td style="line-height: 30px">
        <input type="text" name="to_tow" onKeyUp="limitText(this.form.to_towe,this.form.countdown,30);" value="<?php echo @$info['0']->to_tow;?>" class="form-control" style="width: 90%; text-transform: uppercase;text-align: center;padding: 0px">
      </td>
      <td style="line-height: 30px">
        <input type="text" name="by_one" onKeyUp="limitText(this.form.by_one,this.form.countdown,30);" value="<?php echo @$info['0']->by_one;?>" class="form-control" style="width: 90%; text-transform: uppercase;text-align: center;padding: 0px">
      </td>
      <td style="line-height: 30px">
        <input type="text" name="to_thrre" onKeyUp="limitText(this.form.to_thrre,this.form.countdown,30);" value="<?php echo @$info['0']->to_thrre;?>" class="form-control" style="width: 90%; text-transform: uppercase;text-align: center;padding: 0px">
      </td>
      <td style="line-height: 30px">
        <input type="text" name="buy_two" onKeyUp="limitText(this.form.to_thrre,this.form.countdown,30);" value="<?php echo @$info['0']->buy_two;?>" class="form-control" style="width: 90%; text-transform: uppercase;text-align: center;padding: 0px">
      </td>
      <td style="line-height: 30px">
        <input type="text" name="currency" onKeyUp="limitText(this.form.currency,this.form.countdown,5);" value="<?php echo @$info['0']->currency;?>" class="form-control" style="width: 90%; text-transform: uppercase;text-align: center;padding: 0px">
      </td>
      <td style="line-height: 30px">
        <input type="text" name="chgs_Code" onKeyUp="limitText(this.form.chgs_Code,this.form.countdown,2);" value="<?php echo @$info['0']->chgs_Code;?>" class="form-control" style="width: 90%; text-transform: uppercase;text-align: center;padding-left: 0px; padding-right: 0px" placeholder="CC">
      </td>
      <td style="font-size: 12px" width="5%">
        <span>PPD</span><br>
        <input type="radio" class="radio" name="wt_val" value="P" <?php echo (@$info['0']->wt_val=='P')?'checked':'' ?>>
      </td>
      <td style="font-size: 12px">
        <span>COLL</span><br>
        <input type="radio" class="radio" name="wt_val" value="C" <?php echo (@$info['0']->wt_val=='C')?'checked':'' ?>>
      </td>
      <td style="font-size: 12px" width="5%">
        <span>PPD</span><br>
        <input type="radio" class="radio" name="other" value="P" <?php echo (@$info['0']->wt_val=='P')?'checked':'' ?>>
      </td>
      <td style="font-size: 12px">
        <span>COLL</span><br>
        <input type="radio" class="radio" name="other" value="C" <?php echo (@$info['0']->wt_val=='C')?'checked':'' ?>>
      </td>
      <td style="line-height: 30px">
        <input type="text" name="carriage" onKeyUp="limitText(this.form.carriage,this.form.countdown,5);" value="<?php echo @$info['0']->carriage;?>" class="form-control" style="width: 90%; text-transform: uppercase; text-align: center; font-weight: bold;">
      </td>
      <td style="line-height: 30px">
        <input type="text" name="customs" onKeyUp="limitText(this.form.customs,this.form.countdown,5);" value="<?php echo @$info['0']->customs;?>" class="form-control" style="width: 90%;text-transform: uppercase; text-align: center; font-weight: bold;">
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr style="text-align: center;">
      <td width="20%" style="line-height: 27px">
        <span>Air port of Destination</span>
      </td>
      <td width="20%" style="line-height: 27px">
        <span> Requested Flight/ Date</span>
      </td>
      <td width="20%" style="line-height: 27px">
        <span>Amount of Insurance</span>
      </td>
      <td height="55px" width="40%" rowspan="2">
        <span>INSURANCE - If Carrier offers insurrance, and such insurrance is re -quested in accordance with the conditions thereof, indicate amount to be insured in figures in box marked </span>
      </td>
    </tr>
    <tr style="text-align: center; line-height: 27px">
      <td>
        <input type="text" name="airport_of_destination" onKeyUp="limitText(this.form.airport_of_destination,this.form.countdown,25);" value="<?php echo @$info['0']->airport_of_destination;?>" class="form-control" style="width: 90%; text-transform: uppercase;text-align: center;font-weight: bold;" placeholder="MXP AIRPORT, ITALY">
      </td>
      <td>
        <input type="text" name="requested_flight_date" onKeyUp="limitText(this.form.requested_flight_date,this.form.countdown,25);" value="<?php echo @$info['0']->requested_flight_date;?>" class="form-control" style="width: 90%; text-transform: uppercase;text-align: center; font-weight: bold;" placeholder="EY972/14APR18">
      </td>
      <td>
        <input type="text" name="amount_of_insurance" onKeyUp="limitText(this.form.amount_of_insurance,this.form.countdown,25);" value="<?php echo @$info['0']->amount_of_insurance;?>" class="form-control" style="width: 90%; text-transform: uppercase;text-align: center; font-weight: bold;">
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr>
      <td height="55px">
        <span>Handling information</span><br><br>
        <textarea name="handling_information" onKeyUp="limitText(this.form.handling_information,this.form.countdown,370);" class="form-control" rows="4"><?php echo @$info['0']->handling_information;?></textarea>
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr>
      <td height="40px" width="7%" style="text-align: center;">
        <span>No. of Pieces RCP</span>
      </td>
      <td width="12%" style="text-align: center; line-height: 40px">
        <span>Gross Weight</span>
      </td>
      <td width="7%" style="text-align: center; line-height: 40px">
        <span>Kg lb</span>
      </td>
      <td width="7%" style="text-align: center;">
        <span>Rate Class</span>
      </td>
      <td width="10%" style="text-align: center;">
        <span>Commodity Item.No</span>
      </td>
      <td width="10%" style="text-align: center;">
        <span>Chargeable Weight</span>
      </td>
      <td width="8%">
        <span>Rate<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Charge</span>
      </td>
      <td width="12%" style="text-align: center; line-height: 40px">
        <span>Total</span>
      </td>
      <td width="27%" style="text-align: center;">
        <span>Nature and Quantity of Goods ( incl. Dimension or Volume )</span>
      </td>
    </tr>
    <tr>
      <td style="line-height: 20px">
        <input type="text" name="pieces_rcp" onKeyUp="limitText(this.form.pieces_rcp,this.form.countdown,7);" value="<?php echo @$info['0']->pieces_rcp;?>" class="form-control" style="width: 90%; text-align: center;">
      </td>
      <td height="20px" style="line-height: 20px">
        <input type="text" name="gross_weight" onKeyUp="limitText(this.form.gross_weight,this.form.countdown,10);" value="<?php echo @$info['0']->gross_weight;?>" class="form-control" style="width: 90%; text-align: center;">
      </td>
      <td height="20px" style="line-height: 20px">
        <input type="text" name="kg_ib" onKeyUp="limitText(this.form.kg_ib,this.form.countdown,5);" value="<?php echo @$info['0']->kg_ib;?>" class="form-control" style="width: 90%; text-align: center;">
      </td>
      <td height="20px" style="line-height: 20px">
        <input type="text" name="rate_class" onKeyUp="limitText(this.form.rate_class,this.form.countdown,5);" value="<?php echo @$info['0']->rate_class;?>" class="form-control" style="width: 90%; text-align: center;">
      </td>
      <td height="20px" style="line-height: 20px">
        <input type="text" name="commodity_item" onKeyUp="limitText(this.form.commodity_item,this.form.countdown,10);" value="<?php echo @$info['0']->commodity_item;?>" class="form-control" style="width: 95%">
      </td>
      <td height="20px" style="line-height: 20px">
        <input type="text" name="chargeable_weight" onKeyUp="limitText(this.form.chargeable_weight,this.form.countdown,10);" value="<?php echo @$info['0']->chargeable_weight;?>" class="form-control" style="width: 90%">
      </td>
      <td rowspan="4">
        <input type="text" name="rate_charge" onKeyUp="limitText(this.form.rate_charge,this.form.countdown,50);" value="<?php echo @$info['0']->rate_charge;?>" class="form-control" style="width: 90%">
      </td>
      <td rowspan="4">
        <input type="text" name="total" onKeyUp="limitText(this.form.total,this.form.countdown,50);" value="<?php echo @$info['0']->total;?>" class="form-control" style="width: 95%">
      </td>
      <td rowspan="4">
        <span>Nature and Quantity of Goods</span>
        <textarea name="Nature"  rows="3" class="form-control" onKeyUp="limitText(this.form.Nature,this.form.countdown,100);" style="width: 95%"><?php echo @$info['0']->Nature;?></textarea>

        <span>DIM:</span>
        <textarea name="dim"  class="form-control" rows="3" onKeyUp="limitText(this.form.dim,this.form.countdown,80);" style="width: 95%"><?php echo @$info['0']->dim;?></textarea>

        <span>Vol.:</span>
        <input type="text" onKeyUp="limitText(this.form.Vol,this.form.countdown,40);" value="<?php echo @$info['0']->Vol;?>" name="Vol" class="form-control" style="width: 95%">
      </td>
    </tr>
    <tr>
      <td colspan="6" style="padding-top: 10px; padding-bottom: 10px">
        <div class="form-group">
          <label for="title" class="col-md-3 col-sm-3 col-xs-3">SAP NO _ _ _</label>
          <div class=" col-md-9 col-sm-9 col-xs-9">
              <input type="text" name="sap_no" onKeyUp="limitText(this.form.sap_no,this.form.countdown,55);" value="<?php echo @$info['0']->sap_no;?>" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label for="title" class="col-md-3 col-sm-3 col-xs-3">MARK _ _ _</label>
          <div class=" col-md-9 col-sm-9 col-xs-9">
              <input type="text" name="mark" onKeyUp="limitText(this.form.mark,this.form.countdown,55);" value="<?php echo @$info['0']->mark;?>" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label for="title" class="col-md-3 col-sm-3 col-xs-3">CIQ NO _ _ _</label>
          <div class=" col-md-9 col-sm-9 col-xs-9">
              <input type="text" name="ciq_no" onKeyUp="limitText(this.form.ciq_no,this.form.countdown,55);" value="<?php echo @$info['0']->ciq_no;?>" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label for="title" class="col-md-3 col-sm-3 col-xs-3">CODE _ _ _</label>
          <div class=" col-md-9 col-sm-9 col-xs-9">
              <input type="text" name="code" onKeyUp="limitText(this.form.code,this.form.countdown,55);" value="<?php echo @$info['0']->code;?>"  class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label for="title" class="col-md-3 col-sm-3 col-xs-3">QTY _ _ _</label>
          <div class=" col-md-9 col-sm-9 col-xs-9">
              <input type="text" name="qty" onKeyUp="limitText(this.form.qty,this.form.countdown,55);" value="<?php echo @$info['0']->qty;?>"  class="form-control">
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td width="53%" colspan="6" style="line-height: 20px; padding-top: 5px; padding-bottom: 5px">
        <div class="form-group" style="margin-bottom: 0px">
          <label for="title" class="col-md-2 col-sm-2" style="padding-top: 5px; ">Total</label>
          <div class="col-md-10 col-sm-10">
              <input type="text" name="total1" onKeyUp="limitText(this.form.total1,this.form.countdown,75);" value="<?php echo @$info['0']->total1;?>"  class="form-control">
          </div>
        </div>
      </td>
    </tr>
    <tr style="line-height: 20px">
      <td height="45px" width="7%">
        <span></span>
      </td>
      <td width="46%" colspan="5">
        <span></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="1" >
    <tr >
      <td height="30px" width="40%" colspan="2" style="text-align: center;">
        <div style="width: 33%; float: left;">
          <span>\ Prepaid /</span>
        </div>
        <div style="width: 34%; float: left;">
          <span>\ Weight Charge /</span>
        </div>
        <div style="width: 33%; float: left;">
          <span >\ Collect /</span>
        </div>
      </td>
      <td rowspan="6" width="60%">
        <span>Other charges:</span>
        <textarea name="other_charges" onKeyUp="limitText(this.form.other_charges,this.form.countdown,500);" class="form-control" rows="6" style="width: 95%"><?php echo @$info['0']->other_charges;?></textarea>
      </td>
    </tr>
    <tr style="text-align: center;">
      <td height="30px" width="20%" >
        <input type="radio" class="radio" name="weight_charge" value="P" <?php echo (@$info['0']->weight_charge=='P')?'checked':'' ?>>
      </td>
      <td width="20%" >
        <input type="radio" class="radio" name="weight_charge" value="C" <?php echo (@$info['0']->weight_charge=='C')?'checked':'' ?>>
      </td>
    </tr>
    <tr style="text-align: center;">
      <td height="30px" colspan="2" style="text-align: center;">
        <span>\ Valuation Charge /</span>
      </td>
    </tr>
    <tr style="text-align: center;">
      <td height="30px" width="20%">
        <input type="radio" class="radio" name="valuation_charge" value="P" <?php echo (@$info['0']->valuation_charge=='P')?'checked':'' ?>>
      </td>
      <td width="20%">
        <input type="radio" class="radio" name="valuation_charge" value="C" <?php echo (@$info['0']->valuation_charge=='C')?'checked':'' ?>>
      </td>
    </tr>
    <tr>
      <td height="30px" colspan="2" style="text-align: center;">
        <span>\ Tax /</span>
      </td>
    </tr>
    <tr style="text-align: center;">
      <td height="30px" width="20%">
        <input type="radio" class="radio" name="tax" value="P" <?php echo (@$info['0']->tax=='P')?'checked':'' ?>>
      </td>
      <td width="20%">
        <input type="radio" class="radio" name="tax" value="C" <?php echo (@$info['0']->tax=='C')?'checked':'' ?>>
      </td>
    </tr>
  </table>

  <table width="100%" border="1" style="text-align: center;">
    <tr>
      <td height="30px" width="40%" colspan="2" style="text-align: center;">
        <span>\ Total Other charges Due Agent /</span>
      </td>
      <td rowspan="4" width="60%">
        <div>
          <span>Shipper certifies that the particulars on the face hereof are correct and that insofar part of the consignment contains dangerous goods, such part is properly described by name and is in proper condition for carriage by air according to the applicable Dangerous Goods Regulations.</span>
        </div>
        <div style="padding-top: 40px">
           <span>Signature of Shipper or his Agent</span>
        </div>
      </td>
    </tr>
    <tr>
      <td height="30px" width="20%">
        <input type="radio" class="radio" name="due_agent" value="P" <?php echo (@$info['0']->due_agent=='P')?'checked':'' ?>>
      </td>
      <td width="20%">
        <input type="radio" class="radio" name="due_agent" value="C" <?php echo (@$info['0']->due_agent=='C')?'checked':'' ?>>
      </td>
    </tr>
    <tr>
      <td height="30px" colspan="2" style="text-align: center;">
        <span>\ Total Other charges Due Carrier /</span>
      </td>
    </tr>
    <tr>
      <td height="30px" width="20%">
        <input type="radio" class="radio" name="due_carrier" value="P" <?php echo (@$info['0']->due_carrier=='P')?'checked':'' ?>>
      </td>
      <td width="20%">
        <input type="radio" class="radio" name="due_carrier" value="C" <?php echo (@$info['0']->due_carrier=='C')?'checked':'' ?>>
      </td>
    </tr>    
  </table>

  <table width="100%" border="1" style="margin-bottom: 20px">
    <tr>
      <td height="30px" width="20%" style="text-align: center;">
        <span>   \        Total Prepaid   /         </span>
      </td>
      <td width="20%" style="text-align: center;">
        <span>  \               Total Collect           /</span>
      </td>
      <td rowspan="6" width="60%">
        <span>Date:<input type="Date" class="" name="date" value="<?php echo @$info['0']->date;?>" style="border-radius: 5px; border:1px solid #ccc; height: 30px"></span>
        <span style="padding-left: 60px"><b>HANOI</b></span><br><br>
        <span>Executed on ( Date )</span><span style="padding-left: 20px">at ( place)</span><span style="padding-left: 20px"> Signature of Issuing Carrier or is's Agent</span>
      </td>
    </tr>
    <tr>
      <td height="30px" width="20%" style="text-align: center;">
        <input type="radio" class="radio" name="total_prepaid_collect" class="radio_option" value="P" <?php echo (@$info['0']->total_prepaid_collect=='P')?'checked':'' ?>>
      </td>
      <td width="20%" style="text-align: center;">
       <input type="radio" class="radio" name="total_prepaid_collect" class="radio_option" value="C" <?php echo (@$info['0']->total_prepaid_collect=='C')?'checked':'' ?>>
      </td>
    </tr>
    <tr>
      <td width="20%" >
        <span>\Currency Conversion Rates/</span>
      </td>
      <td width="20%" >
        <span>\CC Charges in Dest. Currency/</span>
      </td>
    </tr>
    <tr style="text-align: center;">
      <td height="30px" width="20%">
        <input type="radio" class="radio" name="currency_conversion" value="P" <?php echo (@$info['0']->currency_conversion=='P')?'checked':'' ?>>
      </td>
      <td width="20%">
        <input type="radio" class="radio" name="currency_conversion" value="C" <?php echo (@$info['0']->currency_conversion=='C')?'checked':'' ?>>
      </td>
    </tr>
    <tr>
      <td  width="20%" style="text-align: center; ">
        <span>For Carrier's Use only at Destination</span>
      </td>
      <td width="20%">
        <span> \  Charges at Destination    /</span>
      </td>
    </tr>
    <tr style="text-align: center;">
      <td height="30px" width="20%">
        <input type="radio" class="radio"  name="at_destination" <?php echo (@$info['0']->at_destination=='P')?'checked':'' ?> value="P">

      </td>
      <td width="20%">
        <input type="radio" class="radio"  name="at_destination"   <?php echo (@$info['0']->at_destination=='C')?'checked':'' ?> value="C">

      </td>
    </tr>
  </table>
</div>
</div>
<?php echo form_close(); ?>
</body>
<script type="text/javascript">

    var allRadios = document.getElementsByClassName('radio');
    var booRadio;
    var x = 0;
    for(x = 0; x < allRadios.length; x++){

        allRadios[x].onclick = function() {
            if(booRadio == this){
                this.checked = false;
                booRadio = null;
            }else{
                booRadio = this;
            }
        };
    }

    var limit = 4;
    var textarea = document.getElementById("fix_row");
    var spaces = textarea.getAttribute("cols");

    textarea.onkeyup = function() {
       var lines = textarea.value.split("\n");
        
       for (var i = 0; i < lines.length; i++) 
       {
             if (lines[i].length <= spaces) continue;
             var j = 0;
             
            var space = spaces;
            
            while (j++ <= spaces) 
            {
               if (lines[i].charAt(j) === " ") space = j;  
            }
        lines[i + 1] = lines[i].substring(space + 1) + (lines[i + 1] || "");
        lines[i] = lines[i].substring(0, space);
      }
        if(lines.length>limit)
        {
            textarea.style.color = 'red';
            setTimeout(function(){
                textarea.style.color = '';
            },500);
        }    
       textarea.value = lines.slice(0, limit).join("\n");
    };

    var limit = 5;
    var textarea = document.getElementById("consi_fix_row");
    var spaces = textarea.getAttribute("cols");

    textarea.onkeyup = function() {
       var lines = textarea.value.split("\n");
        
       for (var i = 0; i < lines.length; i++) 
       {
             if (lines[i].length <= spaces) continue;
             var j = 0;
             
            var space = spaces;
            
            while (j++ <= spaces) 
            {
               if (lines[i].charAt(j) === " ") space = j;  
            }
        lines[i + 1] = lines[i].substring(space + 1) + (lines[i + 1] || "");
        lines[i] = lines[i].substring(0, space);
      }
        if(lines.length>limit)
        {
            textarea.style.color = 'red';
            setTimeout(function(){
                textarea.style.color = '';
            },500);
        }    
       textarea.value = lines.slice(0, limit).join("\n");
    };
</script>
</html>

