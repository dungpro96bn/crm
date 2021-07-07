<?php
function _substr($str, $length, $minword= 3)
{
  $sub = '';
  $len = 0;
  foreach (explode(' ', $str) as $word)
  {
    $part = (($sub != '') ? ' ' : '') . $word;
    $sub .= $part;
    $len += strlen($part);
    if (strlen($word) > $minword && strlen($sub) >= $length)
    {
      break;
    }
  }
  return $sub . (($len < strlen($str)) ? ' ' : '');
}
?>

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
.modal-dialog{
    width: 95%;
}
</style>


<body>
<div class="">
    <table width="100%" >
      <tr>
        <td height="92px">
        </td>
      </tr>
    </table>

<table width="100%" border="">
  <tr>
    <td height="" colspan="4">
    </td>
  </tr>
  </table>

  <table width="100%" border="">
    <tr> 
      <td></td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td height="46px" style="line-height: 23px" colspan="4" width="100%">
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$info[0]->shipper ;?></span>
      </td>
    </tr>
  </table>
  <table width="100%" border="">
    <tr>
    <td width="20%">
    </td>
    <td height="23px" style="line-height: 23px" width="45%">
        <span><?php echo @$info[0]->ma_daily ;?></span>
    </td>
    <td width="17%"></td>
    <td  style="line-height: 23px" width="18%">
      <span><?php echo @$info[0]->mst_shipper ;?></span></td>
  </tr>
</table>

<table width="100%" border="">
  <tr>
    <td  height="15px" colspan="4"></td>
  </tr>
  <tr>
    <td colspan="4" height="23px">
      <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><?php echo _substr(@$info[0]->payer,90); ?>
    </td>
  </tr>
  <tr>
    <td height="30px" width="65%"><span>
        <?php
        $text = @$info[0]->payer;
        $dem = strlen(_substr(@$info[0]->payer,90));
        $cut = substr($text,$dem,200);

        echo $cut;

        ?>
         </span></td>
    <td width="17%"></td>
    <td width="18%">
      <span><?php echo @$info[0]->mst_payer ;?></span>
    </td>
  </tr>
</table>

<table width="100%" border="">
  <!-- <tr>
    <td height="15px">
    </td>
  </tr> -->
  <tr>
    <td height="72px" style="line-height: 24px" width="100%"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <span><?php echo @$info[0]->consignee ;?></span>
    </td>
  </tr>
</table>

<table width="100%" border="">
  <tr>
    <td height="22px"></td>
  </tr>
</table>

<table width="100%" border="">
    <tr>
      <td width="8%">
      </td>
      <td height="15px" width="27%"><span><?php echo @$info[0]->awb ;?></span>
      </td>
      <td width="30%" style="text-align: center">
          <span><?php echo @$info[0]->booking ;?></span>
      </td>
      <td width="15%" style="text-align: center">
          <span><?php echo @$info[0]->so_kien ;?></span>
      </td>
      <td width="20%" style="text-align: center">
          <span><?php echo @$info[0]->trong_luong ;?></span>
      </td>
    </tr>
</table>

  <table width="100%" border="">
    <tr>
      <td width="28%" height="15px">
      </td>
      <td width="25%">
      </td>
      <td width="25%">
      </td>
      <td width="22%">
      </td>
    </tr>
    <tr style="text-align: center">
      <td height="25px" width="28%">
          <span><br><?php echo @$info[0]->sanbay_khoihanh ;?></span>
      </td>
      <td width="25%">
          <span><br><?php echo @$info[0]->sanbay_den ;?></span>
      </td>
      <td width="25%">
          <span><br><?php echo @$info[0]->hanhtrinh ;?></span>
      </td>
      <td width="22%">
          <span><br><?php echo @$info[0]->loaibaobi ;?></span>
      </td>
    </tr>
  </table>
  <table width="100%">
    <tr>
      <td></td>
    </tr>
  </table>

  <table  width="100%" border="">
    <tr>
      <td height="40px" width="100%" style="line-height: 22px">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span><?php echo @$info[0]->ten_hang ;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td  height="10px" width="55%">
      </td>
      <td height="55px" rowspan="2" width="14%" style="text-align: center"><br><br><br><br><br><span><?php echo @$info[0]->giatri_vc ;?></span>
      </td>
      <td width="17%" rowspan="2" style="text-align: center"><br><br><br><br><br><span><?php echo @$info[0]->giatri_haiquan ;?></span>
      </td>
      <td width="14%" rowspan="2" style="text-align: center"><br><br><br><br><br><span><?php echo @$info[0]->hinhthuc_thanhtoan ;?></span>
      </td>
    </tr>
    <tr>
      <td width="55%" style="line-height: 26px">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span><?php echo @$info[0]->huongdan_phucvu ;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td height="18px"></td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td width="33%" height="24px">
      </td>
      <td width="33%" style="border-right: none; border-left: none; border-bottom: none;">
      </td>
      <td width="34%" style="border-left: none; border-bottom: none;">
      </td>
    </tr>
    <tr style="line-height: 24px">
      <td width="31%" colspan="2" style="border-right: none; padding-left: 10px; border-top: none;"><span style="padding-top: 0px"><?php echo nl2br(@$info[0]->tongkien_nv);?></span>
      </td>
      <td width="2%"></td>
      <td width="33%" height="300px" style="border-right: none; border-left: none;border-top: none;"><span style="padding-top: 0px"><?php echo nl2br(@$info[0]->trongluong_nv);?></span>
      </td>
      <td width="2%"></td>
      <td width="32%" style="border-left: none;border-top: none;"><span style="padding-top: 0px"><?php echo nl2br(@$info[0]->kinhthuoc_nv);?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td height="24px" width="60%">
      </td>
      <td width="40%" >
      </td>
    </tr>

    <tr>
      <td height="35px" style="line-height: 22px">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span><?php echo @$info[0]->ma_alsc ;?></span>
      </td>
      <td width="40%" rowspan="2" style="line-height: 30px">
        <span><?php echo @$info[0]->other_sevices ;?></span>
      </td>
    </tr>

    <tr>
      <td height="15px" width="60%" colspan="2" style="line-height: 20px">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span><?php echo @$info[0]->ma_iata ;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td width="18%" height="30.5px">

      </td>
      <td style="text-align: center;" width="18%" rowspan="4">
      </td>
      <td style="text-align: center;" width="18%" rowspan="4">
      </td>
      <td style="text-align: center;" width="46%" rowspan="4">
      </td>
    </tr>
    <tr>
      <td height="33px" style="line-height: 27px" >
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$info[0]->start_date ;?></span>
      </td>
    </tr>
    <tr>
      <td height="33px" >
        <span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$info[0]->finish_date ;?></span>
      </td>
    </tr>
    <tr>
      <td height="33px" width="18%">
       <span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$info[0]->date ;?></span>
      </td>

    </tr>
  </table>


</div>
</body>
</html>