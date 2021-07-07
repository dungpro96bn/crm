<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">

</head>
<style>
body{
	font-family:Arial;
	font-size:10px;
}
table tr td {
    padding-left: 10px;
}

</style>


<body>

<div class="container">
  
  <table width="100%" border="">
    <tr style="line-height: 25px; font-size: 14px">
      <td height="25px" width="8%">
        <span><?php echo @$info['0']->code1;?></span>
      </td>
      <td width="8%" style="text-align: center"><span style="text-transform: uppercase"><?php echo @$info['0']->code2;?></span>
      </td>
      <td width="59%">
        <span><?php echo @$info['0']->code3;?></span>
      </td>
      <td width="25%">
        <span><?php echo @$info['0']->code4;?></span>
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
        <span><?php echo @$info['0']->shipper;?></span>
      </td>
      <td rowspan="2" width="14%" style="border-right-color: white; border-left-color: black; ">
        <span>NOT NEGOTIABLE</span><br><br><br>
        <span style="font-size: 12px">Air Waybill</span><br><br>
        <span>Issued by</span>
      </td>
      <td width="13%" rowspan="2" style="text-align: center; border-left-color: white"><br><br><br><br>
          <?php  $img =@$info['0']->logo_img;?>
        <img style="width: 90px; height: auto" src="application/uploads/images/<?php echo $img;?>">
      </td>
        <td rowspan="2" width="23%" style="border-left-color: white"><br><br><br><br><br><br><span style="font-size: 12px;text-transform: uppercase "><b><?php echo @$info['0']->name;?></b></span>
        </td>
    </tr>
    <tr>
      <td height="80px" colspan="2" style="border-top-color: white;"><span style="text-transform: uppercase"><?php echo @$info['0']->shipper_number;?></span>
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
        <span><?php echo @$info['0']->consignee;?></span>
      </td>
      <td width="50%" style="line-height: 30px">
        <span>Copies 1, 2 and 3 of this Air Waybill are originals and have same validity.</span>
      </td>
    </tr>
    <tr>
      <td colspan="2" style="border-top-color: white"><span style="text-transform: uppercase"><?php echo @$info['0']->consignee_number;?></span>
      </td>
      <td height="145px" width="50%" style="text-align: left;"><span>It is agreed that the goods described herein are accepted on apparent good order and condition ( excepted as noted ) for carriage <span style="font-size: 10px">SUBJECT TO THE CONDITIONS OF CONTRACT ON THE REVERSE HEREOF. ALL GOODS MAY BE CARRIED BY ANY  OTHER MEANS INCLUDING ROAD OR ANY OTHER CARRIER UNLESS SPECIFIC CONTRARY INSTRUCTIONS ARE GIVEN HEREON BY THE SHIPPER, AND SHIPPER AGREES THAT THE SHIPMENT MAY BE CARRIED VIA INTERMEDIATE STOPPING PLACE WHICH THE CARRIER DEEMS APPROPRIATES. THE SHIPPER'S ATTENTION IS DRAWN TO THE NOTICE CONCERNING CARRIER'S LIMITATION OF  LIABILITY. </span>Shipper may increase such limitation of liability by declaring a higher value for carriage and paying a supplemental charge if required.</span>
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr>
      <td height="40px" width="50%" colspan="2" style="line-height: 18px">
        <span>Issuing Carrier's Agent Name and City</span><br>
          <span style="font-size: 12px;text-transform: uppercase "><b><?php echo @$info['0']->name;?></b></span>
      </td>
      <td rowspan="3" width="50%">
        <span>Accounting Information</span><br><span style="font-size: 12px"></span><span><?php echo @$info['0']->information;?></span>
      </td>
    </tr>
    <tr>
      <td height="30px" width="25%">
        <span>Agent's IATA Code</span><br>
        <span><?php echo @$info['0']->iata_Code;?></span>
      </td>
      <td width="25%">
        <span>Account No.</span><br>
        <span><?php echo @$info['0']->account_no;?></span>
      </td>
    </tr>
    <tr>
      <td height="30px" colspan="2">
        <span>Airport of Departure ( Addr.of First Carrier ) and Requested Routing</span><br>
        <span style="font-size: 12px"><b>HANOI - VIETNAM</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <span style="font-size: 12px"><?php echo @$info['0']->airport_departure;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr style="text-align: center;">
      <td height="30px" width="5%"><span>To</span>
      </td>
      <td width="17%" style="text-align: center;"><span>By first Carrier<br> Routing and Destination</span>
      </td>
      <td width="5%"><span>To</span>
      </td>
      <td width="5%"><span>By</span>
      </td>
      <td width="5%"><span>To</span>
      </td>
      <td width="5%"><span>By</span>
      </td>
      <td width="8%"><span>Currency</span>
      </td>
      <td width="5%"><span>CHGS Code</span>
      </td>
      <td colspan="2" width="10%"><span>WT/VAL</span>
      </td>
      <td colspan="2" width="10%"><span>OTHER</span>
      </td>
      <td width="13%"><span>Declared value for carriage</span>
      </td>
      <td width="12%"><span>Declared value for customs</span>
      </td>
    </tr>
    <tr style="text-align: center;">
      <td height="30px" style="line-height: 30px"><span>AUH</span>
      </td>
      <td style="line-height: 30px"><span>EY</span>
      </td>
      <td style="line-height: 30px"><span>MXP</span>
      </td>
      <td style="line-height: 30px"><span>EY</span>
      </td>
      <td style="line-height: 30px"><span></span>
      </td>
      <td style="line-height: 30px"><span></span>
      </td>
      <td style="line-height: 30px"><span style="text-transform: uppercase"><?php echo @$info['0']->currency;?></span>
      </td>
      <td style="line-height: 30px"><span style="text-transform: uppercase"><?php echo @$info['0']->chgs_Code;?></span>
      </td>
      <td><span>PPD</span><br><span><?php if((@$info['0']->wt_val)=='P'){echo "P";} ;?></span>
      </td>
      <td>
        <span>COLL</span><br><span><?php if((@$info['0']->wt_val)=='C'){echo "C";} ;?></span>
      </td>
      <td><span>PPD</span><br><span><?php if((@$info['0']->other)=='P'){echo "P";} ;?></span>
      </td>
      <td><span>COLL</span><br><span><?php if((@$info['0']->other)=='C'){echo "C";} ;?></span>
      </td>
      <td style="line-height: 30px"><span style="text-transform: uppercase"><?php echo @$info['0']->carriage;?></span>
      </td>
      <td style="line-height: 30px"><span style="text-transform: uppercase"><?php echo @$info['0']->customs;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr style="text-align: center;">
      <td height="27px" width="20%" style="line-height: 27px">
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
      <td><span><?php echo @$info['0']->airport_of_destination;?></span>
      </td>
      <td><span><?php echo @$info['0']->requested_flight_date;?></span>
      </td>
      <td><span><?php echo @$info['0']->amount_of_insurance;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr>
      <td height="55px">
        <span>Handling information</span><br>
        <span><?php echo @$info['0']->handling_information;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr>
      <td height="40px" width="7%" style="text-align: center;"><span>No. of Pieces RCP</span>
      </td>
      <td width="12%" style="text-align: center; line-height: 40px"><span>Gross Weight</span>
      </td>
      <td width="7%" style="text-align: center; line-height: 40px"><span>Kg lb</span>
      </td>
      <td width="7%" style="text-align: center;"><span>Rate Class</span>
      </td>
      <td width="10%" style="text-align: center;"><span>Commodity Item.No</span>
      </td>
      <td width="10%" style="text-align: center;"><span>Chargeable Weight</span>
      </td>
      <td width="8%"><span>Rate<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Charge</span>
      </td>
      <td width="12%" style="text-align: center; line-height: 40px"><span>Total</span>
      </td>
      <td width="27%" style="text-align: center;"><span>Nature and Quantity of Goods ( incl. Dimension or Volume )</span>
      </td>
    </tr>
    <tr style="text-align: center">
      <td height="20px" style="line-height: 20px"><span><?php echo @$info['0']->pieces_rcp;?></span>
      </td>
      <td height="20px" style="line-height: 20px"><span><?php echo @$info['0']->gross_weight;?></span>
      </td>
      <td height="20px" style="line-height: 20px"><span><?php echo @$info['0']->kg_ib;?></span>
      </td>
      <td height="20px" style="line-height: 20px"><span><?php echo @$info['0']->rate_class;?></span>
      </td>
      <td height="20px" style="line-height: 20px"><span><?php echo @$info['0']->commodity_item;?></span>
      </td>
      <td height="20px" style="line-height: 20px"><span><?php echo @$info['0']->chargeable_weight;?></span>
      </td>
      <td rowspan="4"><span><?php echo @$info['0']->rate_charge;?></span>
      </td>
      <td rowspan="4"><span><?php echo @$info['0']->total;?></span>
      </td>
      <td rowspan="4" style="text-align: left"><span><?php echo @$info['0']->quantity_of_goods;?></span><br><br><span>DIM:</span>&nbsp;<span><?php echo @$info['0']->dim;?></span><br><br><span>Vol.:</span>&nbsp;<span><?php echo @$info['0']->vol;?></span>
      </td>
    </tr>
    <tr>
      <td height="100px" colspan="6"><br><br>
        <span>Shipping marks:</span><br>
        <span>SAP NO _ _ _&nbsp;&nbsp;&nbsp;</span><span><?php echo @$info['0']->sap_no;?></span><br>
        <span>MARK _ _ _&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span><?php echo @$info['0']->mark;?></span><br>
        <span>CIQ NO _ _ _&nbsp;&nbsp;&nbsp;&nbsp;</span><span><?php echo @$info['0']->ciq_no;?></span><br>
        <span>CODE _ _ _&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span><?php echo @$info['0']->code;?></span><br>
        <span>QTY _ _ _&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span><?php echo @$info['0']->qty;?></span>
      </td>
    </tr>
    <tr>
      <td width="53%" height="20px" style="line-height: 20px">
        <span>Total:</span>&nbsp;<span><?php echo @$info['0']->total_all;?></span>
      </td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px" width="7%">
        <span><?php echo @$info['0']->pieces_rcp;?></span>
      </td>
      <td width="46%">
        <span><?php echo @$info['0']->gross_weight;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="1" id="as">
    <tr>
      <td height="20px" width="40%" colspan="2" style="line-height: 20px">
        <span>&nbsp;&nbsp;&nbsp;\ Prepaid /</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>\ Weight Charge /</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>\ Collect /</span>
      </td>
      <td rowspan="6" width="60%">
        <span>Other charges</span><br><span><?php echo @$info['0']->other_charges;?></span>
      </td>
    </tr>
    <tr>
      <td height="20px" width="20%" style="text-align: center;line-height: 20px" >
        <span><?php if((@$info['0']->weight_charge)=='P'){echo "AS ARRANGED";} ;?></span>
      </td>
      <td width="20%"  style="text-align: center; line-height: 20px">
        <span><?php if((@$info['0']->weight_charge)=='C'){echo "AS ARRANGED";} ;?></span>
      </td>
    </tr>
    <tr >
      <td height="20px" colspan="2" style="text-align: center;line-height: 20px">
        <span>\ Valuation Charge /</span>
      </td>
    </tr>
    <tr>
      <td height="20px" width="20%" style="text-align: center;line-height: 20px">
        <span><?php if((@$info['0']->valuation_charge)=='P'){echo "AS ARRANGED";} ;?></span>
      </td>
      <td width="20%" style="text-align: center;line-height: 20px">
        <span><?php if((@$info['0']->valuation_charge)=='C'){echo "AS ARRANGED";} ;?></span>
      </td>
    </tr>
    <tr>
      <td height="20px" colspan="2" style="text-align: center;line-height: 20px">
        <span>\ Tax /</span>
      </td>
    </tr>
    <tr>
      <td height="20px" width="20%" style="text-align: center;line-height: 20px">
        <span><?php if((@$info['0']->tax)=='P'){echo "AS ARRANGED";} ;?></span>
      </td>
      <td width="20%" style="text-align: center;line-height: 20px">
        <span><?php if((@$info['0']->tax)=='C'){echo "AS ARRANGED";} ;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr>
      <td height="20px" width="40%" colspan="2" style="text-align: center;line-height: 20px">
        <span>\ Total Other charges Due Agent /</span>
      </td>
      <td rowspan="4" width="60%">
        <span>Shipper certifies that the particulars on the face hereof are correct and that insofar part of the consignment contains dangerous goods, such part is properly described by name and is in proper condition for carriage by air according to the applicable Dangerous Goods Regulations.</span><br><br>
        <span>Signature of Shipper or his Agent</span>
      </td>
    </tr>
    <tr>
      <td height="20px" width="20%" style="text-align: center;line-height: 20px">
        <span><?php if((@$info['0']->total_other_agent)=='P'){echo "AS ARRANGED";} ;?></span>
      </td>
      <td width="20%" style="text-align: center;line-height: 20px">
        <span><?php if((@$info['0']->total_other_agent)=='C'){echo "AS ARRANGED";} ;?></span>
      </td>
    </tr>
    <tr>
      <td height="20px" colspan="2" style="text-align: center;line-height: 20px">
        <span>\ Total Other charges Due Carrier /</span>
      </td>
    </tr>
    <tr>
      <td height="20px" width="20%" style="text-align: center;line-height: 20px">
        <span><?php if((@$info['0']->total_other_carrier)=='P'){echo "AS ARRANGED";} ;?></span>
      </td>
      <td width="20%" style="text-align: center;line-height: 20px">
        <span><?php if((@$info['0']->total_other_carrier)=='C'){echo "AS ARRANGED";} ;?></span>
      </td>
    </tr>    
  </table>

  <table width="100%" border="1">
    <tr>
      <td height="20px" width="20%" style="text-align: center;line-height: 20px">
        <span>   \        Total Prepaid   /         </span>
      </td>
      <td width="20%" style="text-align: center;line-height: 20px">
        <span>  \               Total Collect           /</span>
      </td>
      <td rowspan="6" width="60%"><br><br>
        <span><?php echo @$info['0']->date;?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>HANOI</span><br><br>
        <span>Executed on ( Date )</span>&nbsp;&nbsp;&nbsp;&nbsp;<span>at ( place)</span>&nbsp;&nbsp;&nbsp;&nbsp;<span> Signature of Issuing Carrier or is's Agent</span>
      </td>
    </tr>
    <tr>
      <td height="20px" width="20%" style="text-align: center;line-height: 20px">
        <span><?php if((@$info['0']->total_prepaid_collect)=='P'){echo "AS ARRANGED";} ;?></span>
      </td>
      <td width="20%" style="text-align: center;line-height: 20px">
        <span><?php if((@$info['0']->total_prepaid_collect)=='C'){echo "AS ARRANGED";} ;?></span>
      </td>
    </tr>
    <tr>
      <td height="20px" width="20%" style="line-height: 20px; font-size: 9px">
        <span>\Currency Conversion Rates/</span>
      </td>
      <td width="20%" style="font-size: 9px; line-height: 20px">
        <span>\CC Charges in Dest. Currency/</span>
      </td>
    </tr>
    <tr>
      <td height="20px" width="20%" style="text-align: center;line-height: 20px">
        <span><?php if((@$info['0']->conversion_rates)=='P'){echo "AS ARRANGED";} ;?></span>
      </td>
      <td width="20%" style="text-align: center;line-height: 20px">
        <span><?php if((@$info['0']->conversion_rates)=='C'){echo "AS ARRANGED";} ;?></span>
      </td>
    </tr>
    <tr>
      <td height="20px" width="20%" style="text-align: center; font-size: 9px">
        <span>For Carrier's Use only at Destination</span>
      </td>
      <td width="20%" style="font-size: 9px; line-height: 20px">
        <span> \  Charges at Destination    /</span>
      </td>
    </tr>
    <tr>
      <td height="20px" width="20%" style="text-align: center;line-height: 20px">
        <span><?php if((@$info['0']->charges_at_destination)=='P'){echo "AS ARRANGED";} ;?></span>
      </td>
      <td width="20%" style="text-align: center;line-height: 20px">
        <span><?php if((@$info['0']->charges_at_destination)=='C'){echo "AS ARRANGED";} ;?></span>
      </td>
    </tr>
  </table>

  <table>
    <tr>
      <td width="70%"></td>
      <td height="25px" width="30%" style="font-size: 14px; line-height: 25px">
        <span><?php echo @$info['0']->code4;?></span>
      </td>
    </tr>
  </table>

</div>
  
</body>
</html>