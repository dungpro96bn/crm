
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
table tr td{
  padding-left: 10px;
}

</style>


<body id="main">
<br>
  <table width="100%">
    <tr>
      <td height="80px"></td>
    </tr>
  </table><br><br>

  <table width="100%" border="">
    <tr>
      <td height="50px" style="text-align: center; font-size: 20px;">
      </td><br><br>
    </tr>
  </table><br><br><br><br>

  <table width="100%" border="">
    <tr>
      <td height="35px" style="font-size: 16px ">
      </td>
    </tr>
  </table>

  <table>
    <tr>
      <td></td>
    </tr>
  </table>
 

  <table width="100%" border="">
    <tr style="">
      <td height="30px" width="22.2%" style="text-align: center; line-height: 20px; font-size: 12px">
      </td>
      <td width="3.8%" style="text-align: center;line-height: 25px;"><span><?php echo @$info2['0']->awb1;?></span></td>
      <td width="3.8%" style="text-align: center;line-height: 25px;"><span><?php echo @$info2['0']->awb2;?></span></td>
      <td width="3.8%" style="line-height: 25px;text-align: center;"><span><?php echo @$info2['0']->awb3;?></span></td>
      <td width="3.8%"style="" ></td>
      <td width="3.8%" style="text-align: center;line-height: 25px;"><span><?php echo @$info2['0']->awb4;?></span></td>
      <td width="3.8%" style="text-align: center;line-height: 25px;"><span><?php echo @$info2['0']->awb5;?></span></td>
      <td width="3.8%" style="text-align: center;line-height: 25px;"><span><?php echo @$info2['0']->awb6;?></span></td>
      <td width="3.8%" style="text-align: center;line-height: 25px;"><span><?php echo @$info2['0']->awb7;?></span></td>
      <td width="3.2%" style="text-align: center;line-height: 25px;"><span><?php echo @$info2['0']->awb8;?></span></td>
      <td width="3.5%" style="text-align: center;line-height: 25px;"><span><?php echo @$info2['0']->awb9;?></span></td>
      <td width="3.7%" style="text-align: center;line-height: 25px;"><span><?php echo @$info2['0']->awb10;?></span></td>
      <td width="3.5%" style="text-align: center;line-height: 25px;"><span><?php echo @$info2['0']->awb11;?></span></td>
      <td width="29.8%" style=""></td>
    </tr>
  </table>


  <table width="100%" border="">
    <tr>
      <td width="22%">

      </td>
      <td height="26px" width="32%">
         <span><br><?php echo @$info2['0']->booking_flight;?></span>
      </td>
      <td width="11%">

      </td>
      <td width="35%">
          <span><br>&nbsp;&nbsp;<?php echo @$info2['0']->date_send;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td height="25px">

      </td>
    </tr>
    <tr>
      <td height="17px" width="34%" style=" text-align: center; line-height: 18px">
          <span><?php echo @$info2['0']->departure;?></span>
      </td>
      <td width="33%" style=" text-align: center; line-height: 18px">
          <span><?php echo @$info2['0']->destination;?></span>
      </td>
      <td width="33%" style=" text-align: center; line-height: 18px">
          <span><?php echo @$info2['0']->routing;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="">
        <tr>
          <td width="17%"></td>
          <td height="26px" width="16%"><span><br><?php echo @$info2['0']->no_of_pcs;?></span>
          </td>
          <td width="22%"></td>
          <td width="13%"><span><br><?php echo @$info2['0']->gross_weight;?></span>
          </td>
          <td width="18%"></td>
          <td width="14%"><span><br>&nbsp;&nbsp;<?php echo @$info2['0']->package;?></span>
          </td>
        </tr>
    </table>

    <table  width="100%" border="">
    <tr>
      <td width="25%" rowspan="">

      </td>
      <td width="75%" height="39px" rowspan="2" style="line-height: 15px"><br><br>
          <span><?php echo @$info2['0']->commodity_of_goods;?></span>
     </td>
    </tr>
  </table>

    <table width="100%" border="">
      <tr>
        <td height="48px">
          <span style="line-height: 24px"><?php echo @$info2['0']->shipper_name;?></span>
        </td>
      </tr>
    </table>

    <table width="100%" border="">
    <tr style="border-top-color: white">
      <td width="18%"></td>
      <td width="82%" height="28px" style="border-top-color: white; line-height: 12px">
          <span><br><?php echo @$info2['0']->shipper_code;?></span>
      </td>
    </tr>
  </table>

  

  <table width="100%" border="">
    <tr>
      <td height="40px">
        <span style="line-height: 24px"><?php echo @$info2['0']->payer;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr style="border-top-color: white">
      <td width="18%"></td>
      <td width="82%" height="30px" style="border-top-color: white;line-height: 32px">
          <span><?php echo @$info2['0']->payer_code;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td height="70px">
        <span style="line-height: 24px"><?php echo @$info2['0']->consignee;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td height="24px"></td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td  width="29%" >

      </td>
      <td width="33%">

      </td>
      <td width="38%">

      </td>
    </tr>
    <tr>
      <td height="26px" style=""><br><br><span><?php echo @$info2['0']->no_of_pcs_staff;?></span>
      </td>
      <td height="26px" style=""><br><br>
        <span><?php echo @$info2['0']->gross_weight_staff;?></span>
      </td>
      <td height="26px" style=""><br><br>
        <span>&nbsp;&nbsp;<?php echo @$info2['0']->special_handing_staff;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td height="14px"></td>
    </tr>
    <tr>
      <td height="222px" style="line-height: 20.7px"><span><?php echo nl2br(@$info2['0']->dimensions);?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr >
      <td height="15px">
      </td>
    </tr>
    </table>

<table width="100%" border="">
    <tr >
      <td width="14%">

      </td>
      <td height="25px" width="17%">
          <span><br><?php echo @$info2['0']->begin_date;?></span>
      </td>
      <td width="15%">

      </td>
      <td width="16%">
          <span><br>&nbsp;&nbsp;<?php echo @$info2['0']->finish_date;?></span>
      </td>
      <td width="12%">

      </td>
      <td width="26%">
        <span><br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$info2['0']->date;?></span>
      </td>
    </tr>
  </table>


</body>
</html>