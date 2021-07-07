<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
</head>
<style>
body{
    font-family:Arial;
  font-size: 12px;
}
table tr td{
  padding-left: 10px;
}
.color_f{
  color: #0000ff;
}
</style>


<body>
  <br>
<div class="container">
  <table>
    <tr>
      <td></td>
    </tr>
  </table>
  <table width="100%">
    <tr>
      <td width="20%" rowspan="3">
        <img height="80px" src="<?php echo get_file_uri("assets/images/logo-glx.png"); ?>">
      </td>
      <td width="80%" height="30px" style="border-bottom-color:  #1205a8;">
        <span style="font-size: 20px; color: #1205a8; font-weight: bold;">GALAXY LOGISTICS CO., LTD</span>
      </td>
    </tr>
    <tr>
      <td height="25px" style="line-height: 25px">
        <span>Liaison off.:  Unit 2401, 24/F, Tower, 101 Lang Ha st., Dong Da dist., Hanoi, Vietnam</span>
      </td>
    </tr>
    <tr>
      <td height="20px" style="line-height: 20px">
        <span>Tel: 84 - 24 - 5624946  Fax: 84 - 24 - 5624947  Email: info@galaxy-vietnam.com</span>
      </td>
    </tr>
  </table>

  <table>
    <tr>
      <td height="60px"></td>
    </tr>
  </table>

  <table width="100%">
    <tr>
      <td width="45%" height="120px">
        <span style="font-weight: bold; font-size: 18px">INVOICE</span><br><br>
        <span>No:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: bold;"><?php echo @$info2['0']->no_add;?></span><br><br>
        <span>Date:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo @$info2['0']->date;?></span>
      </td>
      <td width="55%"><span style="font-size: 18px; font-weight: bold;">Messrs:</span><br><br><span style="text-transform: uppercase; line-height: 30px"><?php echo @$info2['0']->messrs_add;?></span>
      </td>
    </tr>
  </table>

  <table>
    <tr>
      <td height="40px"></td>
    </tr>
  </table>

 <table width="100%" border="1" style="margin-top: 80px; font-family: 'time new roman';">
      <tr style="font-weight: bold; text-align: center;">
        <td height="35px" width="8%" style="line-height: 30px">
          <span>No</span>
        </td>
        <td width="50%" style="line-height: 30px">
          <span>Description</span>
        </td>
        <td width="12%">
          <span>Volume (KG)</span>
        </td>
        <td width="15%" style="line-height: 30px">
          <span>Rate (USD)</span>
        </td>
        <td width="15%" style="line-height: 30px">
          <span>Amount (USD)</span>
        </td>
      </tr>
      <tr>
        <td></td>
        <td height="100px" style="padding: 10px"><span style="line-height: 20px"><?php echo @$info2['0']->description;?></span>
        </td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr style=" line-height: 30px">
        <td height="30px" style="text-align: center;">
          <span>1</span>
        </td>
        <td>
          <span>Air freight HAN - MXP</span>
        </td>
        <td style="padding: 5px 10px;text-align: center;"><span><?php echo @$info2['0']->air_freight_volume;?></span>
        </td>
        <td style="padding: 5px 10px; ">
          <span>$</span>&nbsp;<span><?php echo @$info2['0']->air_freight_rate;?></span>
        </td>
        <td style="padding: 5px 10px; ">
          <span>$</span>&nbsp;<span><?php echo @$info2['0']->air_freight_amount;?></span>
        </td>
      </tr>
      <tr style=" line-height: 30px" >
        <td height="30px" style="text-align: center; ">
          <span>2</span>
        </td>
        <td>
          <span>X-ray</span>
        </td>
        <td></td>
        <td style="padding: 5px 10px; ">
          <span>$</span>&nbsp;<span><?php echo @$info2['0']->x_ray_rate;?></span>
        </td>
        <td style="padding: 5px 10px; ">
          <span>$</span>&nbsp;<span><?php echo @$info2['0']->x_ray_amount;?></span>
        </td>
      </tr>
      <tr style=" line-height: 30px">
        <td height="30px" style="text-align: center;">
          <span>3</span>
        </td>
        <td>
          <span>AMS + MAWB</span>
        </td>
        <td></td>
        <td  style="font-weight: bold;"><span style="text-transform:uppercase;text-align: center"><?php echo @$info2['0']->ams_mawb_rate;?></span></td>
        <td style="padding: 5px 10px">
          <span>$</span>&nbsp;<span><?php echo @$info2['0']->ams_mawb_amount;?></span>
        </td>
      </tr>
      <tr style=" line-height: 30px">
        <td height="30px" style="text-align: center; ">
          <span>4</span>
        </td>
        <td>
          <span>Pick up</span>
        </td>
        <td></td>
        <td style="text-align: center;">
          <span style="font-weight: bold; text-transform: uppercase;"><?php echo @$info2['0']->pick_up_rate;?></span>
        </td>
        <td style="padding: 5px 10px">
          <span>$</span>&nbsp;<span><?php echo @$info2['0']->pick_up_amount;?></span>
        </td>
      </tr>
      <tr style=" line-height: 30px">
        <td height="30px" style="text-align: center;">
          <span>5</span>
        </td>
        <td>
          <span>Customs export</span>
        </td>
        <td style="font-weight: bold; text-align: center;">
          <span style="font-weight: bold; text-transform: uppercase;"><?php echo @$info2['0']->customs_export_volume;?></span>
        </td>
        <td style="padding: 5px 10px; font-weight: bold; text-align: center">
          <span><?php echo @$info2['0']->customs_export_rate;?></span>
        </td>
        <td style="padding: 5px 10px">
          <span>$</span>&nbsp;<span><?php echo @$info2['0']->customs_export_amount;?></span>
        </td>
      </tr>
      <tr style="line-height: 30px">
        <td height="30px" style="text-align: center;">
          <span>6</span>
        </td>
        <td>
          <span>Airport teminal fee</span>
        </td>
        <td></td>
        <td>
          <span>$</span>&nbsp;<span><?php echo @$info2['0']->airport_teminal_fee_rate;?></span>
        </td>
        <td>
          <span>$</span>&nbsp;<span><?php echo @$info2['0']->airport_teminal_fee_amount;?></span>
        </td>
      </tr>
      <tr style="line-height: 30px">
        <td height="30px" style="text-align: center;">
          <span>7</span>
        </td>
        <td>
          <span>Airport handling</span>
        </td>
        <td></td>
        <td></td>
        <td>
          <span>$</span>&nbsp;<span><?php echo @$info2['0']->airport_handling_amount;?></span>
        </td>
      </tr>
      <tr style="line-height: 30px">
        <td height="30px" style="text-align: center;">
          <span>8</span>
        </td>
        <td>
          <span>HAWB fee</span>
        </td>
        <td></td>
        <td></td>
        <td>
          <span>$</span>&nbsp;<span><?php echo @$info2['0']->hawb_fee_amount;?></span>
        </td>
      </tr>
      <tr style="line-height: 30px">
        <td height="30px" style="text-align: center;">
          <span>9</span>
        </td>
        <td>
          <span>Overtime charge</span>
        </td>
        <td></td>
        <td></td>
        <td>
          <span>$</span>&nbsp;<span><?php echo @$info2['0']->overtime_charge_amount;?></span>
        </td>
      </tr>
      <tr style="line-height: 30px">
        <td height="30px" rowspan="2" style="text-align: center; line-height: 60px">
          <span>10</span>
        </td>
        <td>
          <span>Profit for Galaxy</span>
        </td>
        <td></td>
        <td></td>
        <td>
          <span>$</span>&nbsp;<span><?php echo @$info2['0']->profit_galaxy_amount;?></span>
        </td>
      </tr>
      <tr style="line-height: 30px">
        <td height="30px">
          <span>Profit for Galaxy</span>
        </td>
        <td></td>
        <td>
          <span>$</span>&nbsp;<span><?php echo @$info2['0']->profit_for_galaxy_rate;?></span>
        </td>
        <td>
          <span>$</span>&nbsp;<span><?php echo @$info2['0']->profit_for_galaxy_amount;?></span>
        </td>
      </tr>
      <tr>
        <td height="30px"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td colspan="4" height="30px" style="font-weight: bold;text-align: center; font-size: 16px; line-height: 30px">
          <span>Total due GALAXY LOGISTICS CO., LTD</span>
        </td>
        <td style="font-weight: bold;line-height: 30px; font-size: 13px">
          <span>$</span>&nbsp;<span><?php echo @$info2['0']->total_galaxy;?></span>
        </td>
      </tr>
      <tr>
        <td height="30px" colspan="5" style="line-height: 30px">
          <span style="font-size: 14px">In words:</span>&nbsp;&nbsp;<span>US dollars <?php echo @$info2['0']->in_words_total;?>.</span>
        </td>
      </tr>
    </table>

  <table>
    <tr>
      <td height="30px"></td>
    </tr>
  </table>

    <table width="100%">
      <tr>
        <td height="25px" width="100%" colspan="2" style="line-height: 25px">
          <span>Please remit this amount to:</span>
        </td>
      </tr>
      <tr>
        <td width="25%" style="line-height: 25px">
          <span>Bank:</span>
        </td>
        <td width="75%" class="color_f">
          <span style="line-height: 25px">JOINT STOCK COMMERCIAL BANK FOR FOREIGN TRADE OF VIETNAM - <br>  OPERATIONS CENTRE BRANCH</span>
        </td>
      </tr>
      <tr style="line-height: 25px">
        <td height="25px">
          <span>Bank address:</span>
        </td>
        <td class="color_f">
          <span>31-33 Ngo Quyen str., Hoan Kiem Dist., Ha Noi, Viet nam</span>
        </td>
      </tr>
      <tr style="line-height: 25px">
        <td height="25px">
          <span>Benificiary name:</span>
        </td>
        <td class="color_f">
          <span>GALAXY LOGISTICS CO ., LTD</span>
        </td>
      </tr>
      <tr style="line-height: 25px">
        <td height="25px">
          <span>Benificiary address:</span>
        </td>
        <td class="color_f">
          <span>No 21/115 Alley , Nui Truc str., Kim Ma Ward, Ba Dinh dist., Ha Noi, Vietnam </span>
        </td>
      </tr>
      <tr style="line-height: 25px">
        <td height="25px">
          <span>Account No:</span>
        </td>
        <td class="color_f">
          <span>001.137.0295.369 (USD)</span>
        </td>
      </tr>
      <tr style="line-height: 25px">
        <td height="25px">
          <span>Swift code:</span>
        </td>
        <td class="color_f">
          <span>B F T V V N V X 001</span>
        </td>
      </tr>
    </table>

</div>
  
  
</body>
</html>