
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
</head>
<style>
body{
    font-family:Arial;
	font-size:13px;
}
table tr td{
  padding-left: 10px;
}

</style>


<body id="main">
<table>
  <tr>
    <td height="100px"></td>
  </tr>
</table>

  <table width="100%">
    <tr>
      <td style="font-size: 24px; text-align: center;">
        <span>CONSOLIDATED CARGO MANIFEST</span>
      </td>
    </tr>
  </table>

  <table>
    <tr>
      <td height="70px"></td>
    </tr>
  </table>

  <table width="100%" border="" style="font-size: 12px">
    <tr style="line-height: 25px;">
      <td height="25px" width="12%"><span>From </span>
      </td>
      <td width="43%"><span style="text-transform: uppercase;"><?php echo @$info['0']->from;?></span>
      </td>
      <td width="10%"><span>To</span>
      </td>
      <td width="35%"><span style="text-transform: uppercase;"><?php echo @$info['0']->to;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="" style="font-size: 12px">
    <tr style="line-height: 25px;">
      <td height="25px" width="12%"><span>MAWB</span>
      </td>
      <td width="43%"><span><?php echo @$info['0']->mawb;?></span>
      </td>
      <td width="10%"><span>Flight No.</span>
      </td>
      <td width="35%"><span style="text-transform: uppercase;"><?php echo @$info['0']->flight_no;?></span>
      </td>
    </tr>
  </table>
 
  <table width="100%" border="" style="font-size: 12px">
    <tr style="line-height: 25px;">
      <td height="25px" width="12%"><span>No. of PCS</span>
      </td>
      <td width="88%"><span><?php echo @$info['0']->no_of_pcs;?></span>
      </td>
    </tr>
  </table>

  <table>
    <tr>
      <td height="40px"></td>
    </tr>
  </table>

  <table width="100%" border="" style="font-size: 12px">
    <tr>
      <td height="80px" width="12%"><span>Shipper</span>
      </td>
      <td width="43%"><span><?php echo @$info['0']->shipper;?></span>
      </td>
      <td width="10%"><span>Consignee</span>
      </td>
      <td width="35%"><span><?php echo @$info['0']->consignee;?></span>
      </td>
    </tr>
  </table>
 <table>
   <tr>
     <td height="60px"></td>
   </tr>
 </table>

  <table width="100%" border="1" >
    <tr style="text-align:center;">
      <td height="30px" width="13%" style="line-height: 30px"><span>HAWB</span>
      </td>
      <td width="26%" style="line-height: 30px"><span>SHIPPER</span>
      </td>
      <td width="18%" style="line-height: 30px"><span>CONSIGNEE</span>
      </td>
      <td width="7%"><span>No. of PCS</span>
      </td>
      <td width="20%" style="line-height: 30px"><span>NATURE NATURE</span>
      </td>
      <td width="6%" style="line-height: 30px"><span>G/W</span>
      </td>
      <td width="10%" style="line-height: 30px"><span>PAYMENT</span>
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr>
      <td height="300px" width="13%"><br><br><span style="text-transform: uppercase; text-align: center"><?php echo @$info['0']->hawb;?></span>
      </td>
      <td width="26%"><br><br><span><?php echo @$info['0']->shipper_form;?></span>
      </td>
      <td width="18%"><br><br><span><?php echo @$info['0']->consignee_form;?></span>
      </td>
      <td width="7%" style="text-align: center;"><br><br><span><?php echo @$info['0']->no_of_form;?></span>
      </td>
      <td width="20%"><br><br><span><?php echo @$info['0']->nature_of_goods;?></span>
      </td>
      <td width="6%"><br><br><span><?php echo @$info['0']->g_w_form;?></span>
      </td>
      <td width="10%" style="text-align: center;"><br><br><span><?php echo @$info['0']->payment_form;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr style="line-height: 30px">
     <td height="30px" width="13%"></td>
     <td width="26%">
       <span>TOTAL</span>
     </td>
     <td width="18%"></td>
     <td width="7%" style="text-align: center;"><span><?php echo @$info['0']->no_of_form;?></span>
     </td>
     <td width="20%"></td>
     <td width="6%"></td>
     <td width="10%"></td>
    </tr>
  </table>

  

</body>
</html>