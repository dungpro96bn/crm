
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
</head>
<style>
body{
    font-family:Arial;
	font-size:8px;
}
table tr td{
  padding-left: 10px;
}
.1_text{
    text-align: center;
    line-height: 20px;
  }
input[type=radio]{
  margin: auto;
}
.display{
  display: none;
}
</style>


<body>

<div class="container">
  <table>
    <tr>
      <td height="58px"></td>
    </tr>
  </table>
  
  <table width="100%" border="">
    <tr style="line-height: 25px; font-size: 11px; font-weight: bold;">
      <td height="25px" width="5%"><span><?php echo @$info['0']->code1;?></span>
      </td>
      <td width="5%" style="text-align: center;"><span style="text-transform: uppercase"><?php echo @$info['0']->code2;?></span>
      </td>
      <td width="65%"><span>&nbsp;<?php echo @$info['0']->code3;?></span>
      </td>
      <td width="25%"><span><?php echo @$info['0']->code4;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td width="1%" rowspan="2" style="border-right-color: white"></td>
      <td height="37px" width="24%" style="border-bottom-color: white">
        <span class="display">Shipper's Name and Address</span>
      </td>
      <td width="24%">
        <span class="display">Shipper's Account Number</span><br>
        <span><?php echo @$info['0']->shipper_number;?></span>
      </td>
      <td rowspan="2" width="13%" style="border-right-color: white; "><!-- border-left-color: black -->
        <span style="font-size: 10px" class="display">NOT NEGOTIABLE</span><br><br>
        <span style="font-size: 12px; font-weight: bold;" class="display">Air Waybill</span><br>
        <span style="font-size: 10px" class="display">Issued by</span>
      </td>
      <td width="38%" rowspan="2" style="text-align: center; border-left-color: white"><br><br><br>
        <span style="text-align: center; font-size: 12px; text-transform: uppercase;font-weight: bold;"><?php echo @$info['0']->air_waybill;?></span><br><br>
        <span style="text-align: center; font-size: 
        12px; font-weight: bold;"><?php echo @$info['0']->name_cty;?></span><br>
      </td>
    </tr>
    <tr>
      <td height="46px" colspan="2" style="border-top-color: white"><span style="text-transform: uppercase; font-weight: bold"><?php echo nl2br(@$info['0']->shipper);?></span><br>

      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td width="1%" rowspan="2" style="border-right-color: white"></td>
      <td height="37px" width="24%" style="border-bottom-color: white">
        <span class="display">Consignee's name and address</span>

      </td>
      <td width="24%">
        <span class="display">Consignee's Account Number</span><br>
        <span><?php echo @$info['0']->consignee_number;?></span>
      </td>
      <td width="51%" rowspan="2"><span class="display">It is agreed that the goods described herein are accepted on apparent good order and condition ( excepted as noted ) for carriage <span class="display">SUBJECT TO THE CONDITIONS OF CONTRACT ON THE REVERSE HEREOF. ALL GOODS MAY BE CARRIED BY ANY  OTHER MEANS INCLUDING ROAD OR ANY OTHER CARRIER UNLESS SPECIFIC CONTRARY INSTRUCTIONS ARE GIVEN HEREON BY THE SHIPPER, AND SHIPPER AGREES THAT THE SHIPMENT MAY BE CARRIED VIA INTERMEDIATE STOPPING PLACE WHICH THE CARRIER DEEMS APPROPRIATES. THE SHIPPER'S ATTENTION IS DRAWN TO THE NOTICE CONCERNING CARRIER'S LIMITATION OF  LIABILITY. </span>Shipper may increase such limitation of liability by declaring a higher value for carriage and paying a supplemental charge if required.</span>
        <!-- <span>Copies 1, 2 and 3 of this Air Waybill are originals and have same validity.</span> -->
      </td>
    </tr>
    <tr>
      <td colspan="2" style="border-top-color: white"><span style="text-transform: uppercase;font-weight: bold"><?php echo nl2br(@$info['0']->consignee);?></span>
      </td>
      <td height="64px" width="" style="text-align: left;">
      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td height="67.5px" width="49%" colspan="2" style="line-height: 18px">
        <span class="display">Issuing Carrier's Agent Name and City</span><br>
        <!-- <b style="font-size: 
        12px; text-align: center;">GALAXY LOGISTICS CO., LTD</b> -->
        <span style="font-size: 12px; text-align: center; font-weight: bold;"><?php echo @$info['0']->name_cty;?></span>
      </td>
      <td rowspan="3" width="51%">
        <span class="display">Accounting Information</span><br><span style="font-size: 12px"></span><span><?php echo nl2br(@$info['0']->information);?></span>
      </td>
    </tr>
    <tr>
      <td height="32px" width="25%">
        <span class="display">Agent's IATA Code</span><br>
        <span><?php echo @$info['0']->iata_Code;?></span>
      </td>
      <td width="24%">
        <span class="display">Account No.</span><br>
        <span><?php echo @$info['0']->account_no;?></span>
      </td>
    </tr>
    <tr>
      <td height="36px" colspan="2">
        <span class="display">Airport of Departure ( Addr.of First Carrier ) and Requested Routing</span><br><br>
        <span style="font-size: 10px"><b>HANOI - VIETNAM</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <span style="font-size: 10px; text-transform: uppercase"><b><?php echo @$info['0']->airport_departure;?></b></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr style="text-align: center;">
      <td height="10px" width="4.5%">
        <span class="display">To</span>
      </td>
      <td width="26.5%" style="text-align: center;">
        <span class="display">By first Carrier Routing and Destination</span>
      </td>
      <td width="5%">
        <span class="display">To</span>
      </td>
      <td width="4%">
        <span class="display">By</span>
      </td>
      <td width="5%">
        <span class="display">To</span>
      </td>
      <td width="4%">
        <span class="display">By</span>
      </td>
      <td width="5%">
        <span class="display" style="font-size: 7px">Currency</span>
      </td>
      <td width="3%">
        <span class="display" style="font-size: 7px"><!-- CHGS Code --></span>
      </td>
      <td colspan="2" width="5.5%">
        <span class="display">WT/VAL</span>
      </td>
      <td colspan="2" width="5.5%">
        <span class="display">OTHER</span>
      </td>
      <td width="15.5%">
        <span class="display">Declared value for carriage</span>
      </td>
      <td width="16.5%">
        <span class="display">Declared value for customs</span>
      </td>
    </tr>
    <tr style="text-align: center;">
      <td height="26px" style="line-height: 26px;"><span style="text-transform: uppercase;"><?php echo @$info['0']->to_one;?></span>
      </td>
      <td style="line-height: 26px"><span style="text-transform: uppercase;"><?php echo @$info['0']->By_first_Carrier;?></span>
      </td>
      <td style="line-height: 26px"><span style="text-transform: uppercase;"><?php echo @$info['0']->to_tow;?></span>
      </td>
      <td style="line-height: 26px"><span style="text-transform: uppercase;"><?php echo @$info['0']->by_one;?></span>
      </td>
      <td style="line-height: 26px"><span style="text-transform: uppercase;"><?php echo @$info['0']->to_thrre;?></span>
      </td>
      <td style="line-height: 26px"><span style="text-transform: uppercase;"><?php echo @$info['0']->buy_two;?></span>
      </td>
      <td style="line-height: 26px"><span style="text-transform: uppercase;"><?php echo @$info['0']->currency;?></span>
      </td>
      <td style="line-height: 26px"><span style="text-transform: uppercase;"><?php echo @$info['0']->chgs_Code;?></span>
      </td>
      <td style="line-height: 13px"><span class="display">PPD</span><br><span><?php if((@$info['0']->wt_val)=='P'){echo "P";} ;?></span>
      </td>
      <td style="line-height: 13px"><span class="display">COLL</span><br><span><?php if((@$info['0']->wt_val)=='C'){echo "C";} ;?></span>
      </td>
      <td style="line-height: 13px"><span class="display">PPD</span><br><span><?php if((@$info['0']->other)=='P'){echo "P";} ;?></span>
      </td>
      <td style="line-height: 13px"><span class="display">COLL</span><br><span><?php if((@$info['0']->other)=='C'){echo "C";} ;?></span>
      </td>
      <td style="line-height: 26px">
        <span><?php echo @$info['0']->carriage;?></span>
      </td>
      <td style="line-height: 26px">
        <span><?php echo @$info['0']->customs;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr style="text-align: center;">
      <td height="10px" width="37%"><span class="display">Air port of Destination</span>
      </td>
      <td width="12%"><span class="display">Flight/ Date</span>
      </td>
      <td width="15.5%"><span class="display">Amount of Insurance</span>
      </td>
      <td height="34px" rowspan="2" width="35.5%" rowspan="2" style="text-align: left;"><span class="display">INSURANCE - If Carrier offers insurrance, and such insurrance is re -quested in accordance with the conditions thereof, indicate amount to be insured in figures in box marked </span>
      </td>
    </tr>
    <tr style="text-align: center; line-height: 26px">
      <td height="26px"><span><?php echo @$info['0']->airport_of_destination;?></span>
      </td>
      <td><span><?php echo @$info['0']->requested_flight_date;?></span>
      </td>
      <td><span><?php echo @$info['0']->amount_of_insurance;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td height="68px">
        <span class="display">Handling information</span><br><span><?php echo @$info['0']->handling_information;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td height="34px" width="5%" style="text-align: center;"><span class="display">No. of Pieces RCP</span>
      </td>
      <td width="9.5%" style="text-align: center; line-height: 34px"><span class="display">Gross Weight</span>
      </td>
      <td width="1.5%" style="text-align: center; line-height: 34px"><span class="display"><!-- Kg lb --></span>
      </td>
      <td width="1%" rowspan="2"></td>
      <td width="1.5%" style="text-align: center;"><span class="display"><!-- Rate Class --></span>
      </td>
      <td width="9.5%" style="text-align: center;"><span class="display">Commodity Item.No</span>
      </td>
      <td width="1%" rowspan="4"></td>
      <td width="11%" style="text-align: center;"><span class="display">Chargeable Weight</span>
      </td>
      <td width="1%" rowspan="4"></td>
      <td width="11.5%"><span class="display">&nbsp;Rate<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Charge</span>
      </td>
      <td width="1%" rowspan="4"></td>
      <td width="18.5%" style="text-align: center; line-height: 34px"><span class="display">Total</span>
      </td>
      <td width="1%" rowspan="4"></td>
      <td width="27%" style="text-align: center;"><span class="display">Nature and Quantity of Goods ( incl. Dimension or Volume )</span>
      </td>
    </tr>
    <tr style="text-align: center">
      <td height="40px"><span><br><br><?php echo @$info['0']->pieces_rcp;?></span>
      </td>
      <td><span><br><br><?php echo @$info['0']->gross_weight;?></span>
      </td>
      <td><span><br><br><?php echo @$info['0']->kg_ib;?></span>
      </td>
      <td><span><br><br><?php echo @$info['0']->rate_class;?></span>
      </td>
      <td><span><br><br><?php echo @$info['0']->commodity_item;?></span>
      </td>
      <td rowspan="3"><span><br><br><?php echo @$info['0']->chargeable_weight;?></span>
      </td>
      <td rowspan="3"><span><br><br><?php echo @$info['0']->rate_charge;?></span>
      </td>
      <td rowspan="3"><span><br><br><?php echo @$info['0']->total;?></span>
      </td>
      <td rowspan="3" style="text-align: left"><br><br><br><span><?php echo nl2br(@$info['0']->Nature);?></span><br><br><span></span><br><span><?php echo nl2br(@$info['0']->dim);?></span><br><br><span></span>&nbsp;<span><?php echo nl2br(@$info['0']->Vol);?></span>
      </td>
    </tr>
    <tr>
      <td height="167.5px" colspan="6"><br><br>
        <span>Shipping marks:</span><br>
        <span>SAP NO _ _ _&nbsp;&nbsp;&nbsp;</span><span><?php echo @$info['0']->sap_no;?></span><br>
        <span>MARK _ _ _&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span><?php echo @$info['0']->mark;?></span><br>
        <span>CIQ NO _ _ _&nbsp;&nbsp;&nbsp;&nbsp;</span><span><?php echo @$info['0']->ciq_no;?></span><br>
        <span>CODE _ _ _&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span><?php echo @$info['0']->code;?></span><br>
        <span>QTY _ _ _&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span><?php echo @$info['0']->qty;?></span><br><br><br>
        <span>Total:</span>&nbsp;<span><?php echo @$info['0']->total1;?></span>
      </td>
    </tr>
    <tr style="line-height: 38px">
      <td height="38px">
        <span><?php echo @$info['0']->pieces_rcp;?></span>
      </td>
      <td colspan="5">
        <span><?php echo @$info['0']->gross_weight;?></span>
      </td>
    </tr>
  </table>

  <table>
    <tr>
      <td height="15px"></td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td height="10px" width="37%" colspan="2" style="line-height: 10px; text-align: center;"><span class="display">&nbsp;&nbsp;&nbsp;\ Prepaid /</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="display">\ Weight Charge /</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="display">\ Collect /</span>
      </td>
      <td rowspan="6" width="63%">
        <br><br><span class="display">Other charges</span><br><span><?php echo nl2br(@$info['0']->other_charges);?></span>
      </td>
    </tr>
    <tr>
      <td height="24px" class="1_text">
        <span class="1_text"><?php if((@$info['0']->weight_charge)=='P'){echo "AS ARRANGED";} ;?></span>
      </td>
      <td class="1_text">
        <span class="1_text"><?php if((@$info['0']->weight_charge)=='C'){echo "AS ARRANGED";} ;?></span>
      </td>
    </tr>
    <tr>
      <td height="10px" colspan="2" style="text-align: center;">
        <span class="display">\ Valuation Charge /</span>
      </td>
    </tr>
    <tr>
      <td height="24px"class="1_text">
        <span class="1_text"><?php if((@$info['0']->valuation_charge)=='P'){echo "AS ARRANGED";} ;?></span>
      </td>
      <td class="1_text">
        <span class="1_text"><?php if((@$info['0']->valuation_charge)=='C'){echo "AS ARRANGED";} ;?></span>
      </td>
    </tr>
    <tr>
      <td height="10px" colspan="2" style="text-align: center;">
        <span class="display">\ Tax /</span>
      </td>
    </tr>
    <tr>
      <td height="26px" class="1_text">
        <span class="1_text"><?php if((@$info['0']->tax)=='P'){echo "AS ARRANGED";} ;?></span>
      </td>
      <td class="1_text">
        <span class="1_text"><?php if((@$info['0']->tax)=='C'){echo "AS ARRANGED";} ;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td height="10px" width="37%" colspan="2" style="text-align: center;">
        <span class="display">\ Total Other charges Due Agent /</span>
      </td>
      <td rowspan="5" width="63%"><span style="font-size: 9px" class="display">Shipper certifies that the particulars on the face hereof are correct and that insofar part of the</span><br><span style="font-weight: bold;" class="display">consignmentcontains dangerous goods, such part is properly described by name and is in proper condition for carriage by air according to the applicable Dangerous Goods Regulations.</span><br><br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="display">Signature of Shipper or his Agent</span>
      </td>
    </tr>
    <tr>
      <td height="20px" class="1_text">
        <span class="1_text"><?php if((@$info['0']->due_agent)=='P'){echo "AS ARRANGED";} ;?></span>
      </td>
      <td class="1_text">
        <span class="1_text"><?php if((@$info['0']->due_agent)=='C'){echo "AS ARRANGED";} ;?></span>
      </td>
    </tr>
    <tr>
      <td height="10px" colspan="2" style="text-align: center;">
        <span class="display">\ Total Other charges Due Carrier /</span>
      </td>
    </tr>
    <tr>
      <td height="26px" class="1_text">
        <span class="1_text"><?php if((@$info['0']->due_carrier)=='P'){echo "AS ARRANGED";} ;?></span>
      </td>
      <td class="1_text">
        <span class="1_text"><?php if((@$info['0']->due_carrier)=='C'){echo "AS ARRANGED";} ;?></span>
      </td>
    </tr>    
    <tr>
      <td height="34px"></td>
      <td></td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td height="10px" width="18.5%" style="text-align: center;">
        <span class="display">   \        Total Prepaid   /         </span>
      </td>
      <td width="18.5%" style="text-align: center;">
        <span class="display">  \               Total Collect           /</span>
      </td>
      <td rowspan="4" width="63%"><br><br><br><br>
          <?php echo @$info['0']->date;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="display">HANOI</span><br><br>
        <span class="display">Executed on ( Date )</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="display">at ( place)</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="display"> Signature of Issuing Carrier or is's Agent</span>
      </td>
    </tr>
    <tr>
      <td height="24px" class="1_text">
        <span class="1_text"><?php if((@$info['0']->total_prepaid_collect)=='P'){echo "AS ARRANGED";} ;?></span>
      </td>
      <td  class="1_text">
        <span class="1_text"><?php if((@$info['0']->total_prepaid_collect)=='C'){echo "AS ARRANGED";} ;?></span>
      </td>
    </tr>
    <tr>
      <td height="10px"  style=" font-size: 9px"><span class="display">\Currency Conversion Rates/</span>
      </td>
      <td style="font-size: 9px;"><span class="display">\CC Charges in Dest. Currency/</span>
      </td>
    </tr>
    <tr style="line-height: 24px">
      <td height="24px" class="1_text">
        <span class="1_text"><?php if((@$info['0']->currency_conversion)=='P'){echo "AS ARRANGED";} ;?></span>
      </td>
      <td class="1_text">
        <span class="1_text"><?php if((@$info['0']->currency_conversion)=='C'){echo "AS ARRANGED";} ;?></span>
      </td>
    </tr>
    <tr>
      <td height="10px" rowspan="2"  style="text-align: center; font-size: 9px">
        <span class="display">For Carrier's Use only at Destination</span><br><span ><?php if((@$info['0']->at_destination)=='P'){echo "AS ARRANGED";} ;?></span>
      </td>
      <td  style="font-size: 9px;">
        <span class="display"> \  Charges at Destination    /</span>
      </td>
      <td rowspan="2"></td>
    </tr>
    <tr>
      <td height="24px" class="1_text">
        <span ><?php if((@$info['0']->at_destination)=='C'){echo "AS ARRANGED";} ;?></span>
      </td>
    </tr>
  </table>

  <table>
    <tr>
      <td width="70%"></td>
      <td height="25px" width="30%" style="font-size: 11px; line-height: 25px">
        <span style="font-weight: bold;"><?php echo @$info['0']->code4;?></span>
      </td>
    </tr>
  </table>

</div>
  
</body>

</html>