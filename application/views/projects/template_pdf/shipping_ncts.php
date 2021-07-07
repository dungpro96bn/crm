<?php
function _substr($str, $length, $minword= "")
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
    	font-size:11px;
    }
  table tr td{
      padding-left: 10px;
    }
  </style>
<body>
<table>
  <tr>
    <td height="100px">

    </td>
  </tr>
</table>

<table width="100%" border="1">
  <tr>
    <td width="100%" colspan="2"></td>
  </tr>
  <tr>
    <td width="27%"></td>
    <td height="22px" width="73%"><span><?php echo _substr(@$info1['0']->shipper, 85);?></span>
    </td>
  </tr>
  </table>
  <table width="100%" border="1">
  <tr style="line-height: 22px">
    <td width="65%" height="22px"><span style="text-transform: uppercase"><?php
        $text = @$info1['0']->shipper;
        $dem = strlen(_substr(@$info1['0']->shipper,85));
        $cut = substr($text,$dem,200);
        echo $cut;

        ?></span>

    </td>
    <td width="15%"></td>
    <td  width="20%">
      <span><?php echo substr(@$info1['0']->mst_shipper,0, 20);?></span>
    </td>
  </tr>
  <tr style="line-height: 22px">
    <td height="22px" colspan="3"><span><?php echo substr(@$info1['0']->mst_shipper,20, 100);?></span>
    </td>
  </tr>
</table>

  <table width="100%" border="1">
    <tr>
      <td colspan="2"></td>
    </tr>
    <tr>
      <td width="27%"></td>
      <td height="22px" width="73%"><span><?php echo _substr(@$info1['0']->payer, 85);?></span>
      </td>
    </tr>
    </table>
    <table width="100%" border="1">
      <tr style="line-height: 22px">
        <td width="65%" height="22px"><span style="text-transform: uppercase"><?php
            $text = @$info1['0']->payer;
            $dem = strlen(_substr(@$info1['0']->payer,85));
            $cut = substr($text,$dem,200);
            echo $cut;
            ?></span></td>
        <td width="15%"></td>
        <td  width="20%">
          <span><?php echo substr(@$info1['0']->mst_payer,0, 20);?></span>
        </td>
    </tr>
    <tr style="line-height: 22px">
      <td height="22px" colspan="3"><span><?php echo substr(@$info1['0']->mst_payer,20, 100);?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr>
      <td></td>
    </tr>
    <tr>
      <td height="60px" style="line-height: 20px" width="100%"><span style="text-transform: uppercase"><?php echo @$info1['0']->consignee;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
      <tr style="text-align: center">
        <td height="40px" width="34%">
              <span><br><br><?php echo @$info1['0']->awb;?></span>
        </td>
        <td width="30%">
            <span><br><br><?php echo @$info1['0']->booking;?></span>
        </td>
        <td width="16%">
            <span><br><br><?php echo @$info1['0']->so_kien;?></span>
        </td>
        <td width="20%">
            <span><br><br><?php echo @$info1['0']->trong_luong;?></span>
        </td>
      </tr>
  </table>

  <table width="100%" border="1">
    <tr style="text-align: center">
      <td height="40px" width="28%">
          <span><br><br><?php echo @$info1['0']->sanbay_khoihanh;?></span>
      </td>
      <td width="24%">
          <span><br><br><?php echo @$info1['0']->sanbay_den;?></span>
      </td>
      <td width="28%">
          <span><br><br><?php echo @$info1['0']->hanhtrinh;?></span>
      </td>
      <td width="20%">
          <span><br><br><?php echo @$info1['0']->loaibaobi;?></span>
      </td>
    </tr>
  </table>

  <table  width="100%" border="1">
    <tr>
      <td colspan="4"></td>
    </tr>
    <tr>
      <td height="40px" width="100%" colspan="4" style="line-height: 20px">
          <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$info1['0']->ten_hang;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr>
      <td width="50%"></td>
      <td width="12.5%" height="55px" rowspan="2" style="font-size: 10px; text-align: center;"><span><br><br><br><?php echo @$info1['0']->giatri_vc;?></span>
      </td>
      <td width="12.5%" rowspan="2" style="font-size: 10px; text-align: center;">

          <span><br><br><br><?php echo @$info1['0']->giatri_haiquan;?></span>
      </td>
      <td width="12.5%" rowspan="2" style="font-size: 10px; text-align: center;">

          <span><br><br><br><?php echo @$info1['0']->iata_code;?></span>
      </td>
      <td width="12.5%" rowspan="2" style="font-size: 10px; text-align: center;">

          <span><br><br><br><?php echo @$info1['0']->hinhthuc_thanhtoan;?></span>
      </td>
    </tr>
    <tr>
      <td style="line-height: 20px"><span><?php echo @$info1['0']->huongdan_phucvu;?></span>
      </td>
    </tr>
  </table>

  <table border="">
    <tr>
      <td height="20px"></td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr>
      <td height="20px"></td>
    </tr>
    <tr style="line-height: 21px">
      <td height="295px" width="31%" colspan="2"><span style="padding-top: 0px"><?php echo @$info1['0']->tongkien_nv;?></span>
      </td>
      <td width="2%"></td>
      <td width="33%"><span><?php echo @$info1['0']->trongluong_nv;?></span>
      </td>
      <td width="2%"></td>
      <td width="32%"><span><?php echo @$info1['0']->kichthuoc_nv;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr>
      <td height="18px" width="60%"></td>
      <td width="40%"></td>
    </tr>
    </table>

    <table width="100%" border="1">
    <tr style="line-height: 23px">
      <td width="12%"></td>
      <td height="23px" width="48%"><span><?php echo @$info1['0']->ma_xuly;?></span>
      </td>
      <td rowspan="2" width="40%" style="line-height: 24px"><span><?php echo @$info1['0']->other_sevices;?></span>
      </td>
    </tr>
    <tr style="line-height: 23px">
      <td width="12%"></td>
      <td height="23px" ><span><?php echo @$info1['0']->ma_luukho;?></span>
      </td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td height="27px" width="16%"></td>
      <td width="84%"></td>
    </tr>
    <tr>
      <td height="27px" width="16%"><br><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$info1['0']->start_date;?></span>
      </td>
      <td width="84%"></td>
    </tr>
    <tr>
      <td height="27px" width="16%"><br><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$info1['0']->finish_date;?></span>
      </td>
      <td width="84%"></td>
    </tr>
    <tr>
      <td height="27px" width="16%"><br><br>
        <span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$info1['0']->date;?></span>
      </td>
      <td width="84%"></td>
    </tr>
  </table>
</body>
</html>