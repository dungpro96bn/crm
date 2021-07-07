
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">

</head>
<style>
body{
    font-family:Arial;
	font-size:14px;
}
table tr td{
  padding-left: 10px;
}
/*.modal-dialog{
    width: 95%;
}*/
</style>


<body>
  <table>
    <tr>
      <td height="60px"></td>
    </tr>
  </table>

  <table width="100%">
    <tr>
      <td width="20%">
        <img src="<?php echo get_file_uri("assets/images/logo-glx.png"); ?>" height="75px">
      </td>
      <td width="80%">
        <span style="color: #006b99; font-size:16px;font-family:'Arial Black'; font-weight: bold; ">GALAXY LOGISTICS CO., LTD</span><br>
          <span>Add.: No 21/115 Alley, Nui Truc Str, Kim Ma Ward, Ba Dinh, Hanoi, Vietnam</span><br>
          <span>Liaison off.:  Unit 2401, 24/F, Tower 101 Lang Ha str., Dong Da dist., Hanoi, Vietnam</span><br>
          <span>Tel: 84 - 24 - 35624946  Fax: 84 - 24 - 35624947  Email: info@galaxy-vietnam.com</span>
      </td>
    </tr>
  </table><br><br><br><br>

  <table width="100%">
    <tr>
      <td height="25px" width="10%"><span>To :</span>
      </td>
      <td width="90%"><span><?php echo @$info['0']->to;?></span>
      </td>
    </tr>
    <tr>
      <td height="25px"><span>Attn :</span>
      </td>
      <td><span><?php echo @$info['0']->attn;?></span>
      </td>
    </tr>
    <tr>
      <td height="25px"><span>Date : </span>
      </td>
      <td><span><?php echo @$info['0']->date;?></span>
      </td>
    </tr>
    <tr>
      <td height="25px"><span>Re :</span>
      </td>
      <td><span><?php echo @$info['0']->re;?></span>
      </td>
    </tr>       
  </table><br><br><br>

  <table width="100%" border="">
    <tr>
      <td height="60px"><span style="line-height: 25px;"><?php echo @$info['0']->total_all;?></span>
      </td>
    </tr>
  </table><br><br><br><br>

  <table width="100%" border="">
    <tr style="line-height: 25px">
      <td width="10%" rowspan="2"><span>Flight:</span>
      </td>
      <td height="25px" width="50%" style="list-style: 25px"><span><?php echo @$info['0']->flight_from;?></span>
      </td>
      <td width="40%"><span><?php echo @$info['0']->flight_from_1;?></span>
      </td>
    </tr>
    <tr style="line-height: 25px">
      <td height="25px"><span><?php echo @$info['0']->flight_to;?></span>
      </td>
      <td><span><?php echo @$info['0']->flight_to_1;?></span>
      </td>
    </tr>
  </table><br><br><br>

  <table width="100%" border="">
    <tr>
      <td height="20px" style="line-height: 20px"><span>Dear</span>&nbsp;<span><?php echo @$info['0']->attn;?></span>
      </td>
    </tr>
  </table><br><br><br>

  <table width="100%" border="">
    <tr>
      <td height="50px" style="line-height: 25px"><span>Pls kindly deliver to Noi Bai airport warehouse for loading arrangement. </span><br><span>Pls contact our following airport operator for cargo release:</span>
      </td>
    </tr>
  </table><br><br>

  <table width="100%">
    <tr>
      <td width="10%"></td>
      <td height="50px" width="90%" style="line-height: 25px"><span>Mr. Hoang  /  Mobile :    0904 459 458</span><br><span>Mr. Khanh  /  Mobile :    0989 095 012</span>
      </td>
    </tr>
  </table><br><br>

  <table width="100%">
    <tr>
      <td height="25px" width="18%"><span>Time of delivery</span>
      </td>
      <td width="82%"><span><?php echo @$info['0']->time_delivery;?></span>
      </td>
    </tr>
    <tr>
      <td height="25px"><span>Cut off time</span>
      </td>
      <td><span><?php echo @$info['0']->cut_off_time;?> </span>
      </td>
    </tr>
    <tr>
      <td height="25px"><span>Warehouse</span>
      </td>
      <td><span><?php echo @$info['0']->warehouse;?></span>
      </td>
    </tr>
    <tr>
      <td height="25px" colspan="2"><span><?php echo @$info['0']->code;?></span>
      </td>
    </tr>
  </table><br><br><br>

  <table>
    <tr>
      <td><span>Thank for your kind attention & support,</span>
      </td>
    </tr>
  </table><br><br><br>

  <table width="100%">
    <tr>
      <td height="30px" width="30%" style="font-size: 14px"><span>GALAXY LOGISTICS CO., LTD</span>
      </td>
      <td width="70%"></td>
    </tr>
    <tr>
      <td colspan="2" height="30px"></td>
    </tr>
    <tr>
      <td width="30%" height="30px" style="text-align: center;"><span>Nguyen Thi Hop</span>
      </td>
      <td width="70%"></td>
    </tr>
  </table>

</body>
</html>