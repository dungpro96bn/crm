<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
body{

	font-size:16px;
}

</style>
<body>
    
    <table width="100%" border="">
      <tr>
        <td height="170px"></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr style="line-height: 25px">
        <td width="45%" height="25px"></td>
        <td width="55%"><i><span>Hà Nội, ngày</span>&nbsp;<span><?php $text = @$info['0']->date_hanoi; echo substr($text, 8,2) ?></span>&nbsp;<span>tháng</span>&nbsp;<span><?php $text = @$info['0']->date_hanoi; echo substr($text, 5, 2); ?></span>&nbsp;<span>năm</span>&nbsp;<span><?php $text = @$info['0']->date_hanoi; echo substr($text, 0, 4);?></span></i>
        </td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td height="20px"></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td height="35px"><span style="font-size: 22px; text-align: center;font-weight: bold;line-height: 35px">LỆNH GIAO HÀNG</span></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td height="60px"></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td width="15%" rowspan="2"></td>
        <td height="25px" style="line-height: 30px" width="12%"><i><span><u>Kính gửi:</u></span></i></td>
        <td style="line-height: 25px; font-weight: bold;" width="73%"><i><span>CẢNG HẢI PHÒNG</span></i></td>
      </tr>
      <tr>
        <td></td>
        <td height="25px" style="line-height: 25px; font-weight: bold;"><i><span>CÁC CƠ QUAN HỮU QUAN</span></i></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td height="20px"></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td width="5%"></td>
        <td width="90%" style="line-height: 25px"><span>Công ty TNHH giao nhận tiếp vận GALAXY có vận chuyển lô hàng nhập từ cảng</span>&nbsp;<span><?php echo @$info['0']->to;?></span>&nbsp;<span>trên tàu</span>&nbsp;<span><?php echo @$info['0']->tau;?></span>&nbsp;<span>về cảng Hải Phòng ngày</span>&nbsp;<span><?php $text = @$info['0']->date_time_tau; echo substr($text, 8,2) ?></span>&nbsp;<span>tháng</span>&nbsp;<span><?php $text = @$info['0']->date_time_tau; echo substr($text, 5, 2); ?></span>&nbsp;<span>năm</span>&nbsp;<span><?php
         $text = @$info['0']->date_time_tau;
         echo substr($text, 0, 4);
         ?></span>&nbsp;<span>với những chi tiết như sau:</span>
        </td>
        <td width="5%"></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td height="40px"></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr style="line-height: 25px">
        <td width="5%"></td>
        <td height="25px" width="30%"><span style="text-align: right;">MB/L No.&nbsp;&nbsp;</span></td>
        <td width="60%"><span>&nbsp;&nbsp;:</span>&nbsp;<span style="text-transform: uppercase;"><?php echo @$info['0']->mb_no;?></span></td>
        <td width="5%"></td>
      </tr>
      <tr style="line-height: 25px">
        <td></td>
        <td height="25px"><span style="text-align: right;">HB/L No.&nbsp;&nbsp;</span></td>
        <td><span>&nbsp;&nbsp;:</span>&nbsp;<span style="text-transform: uppercase;"><?php echo @$info['0']->hb_no;?></span></td>
        <td></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td height="40px"></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr style="line-height: 25px">
        <td height="25px" width="5%"></td>
        <td width="30%"><span>Hàng hoá gồm</span></td>
        <td width="60%"><span>&nbsp;&nbsp;:</span>&nbsp;<span><?php echo @$info['0']->hang_hoa;?></span></td>
        <td width="5%"></td>
      </tr>
      <tr style="line-height: 25px">
        <td height="25px" width="5%"></td>
        <td width="30%"><span>Khối lượng</span></td>
        <td width="60%"><span>&nbsp;&nbsp;:</span>&nbsp;<span style="text-transform: uppercase;"><?php echo @$info['0']->khoi_luong;?></span></td>
        <td width="5%"></td>
      </tr>
      <tr style="line-height: 25px">
        <td height="25px" width="5%"></td>
        <td width="30%"><span>Container No./Seal No.</span></td>
        <td width="60%"><span>&nbsp;&nbsp;:</span>&nbsp;<span style="text-transform: uppercase;"><?php echo @$info['0']->container_no;?></span></td>
        <td width="5%"></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td width="5%"></td>
        <td width="30%"><span>Đề nghị giao hàng cho:</span></td>
        <td width="60%" height="45px"><br><br><span style="text-transform: uppercase; font-weight: bold;"><?php echo @$info['0']->giao_hang_cho;?></span></td>
        <td width="5%"></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td width="5%"></td>
        <td width="10%"><span>Địa chỉ:</span></td>
        <td width="80%" height="50px" style="line-height: 25px"><span style="text-transform: uppercase;"><?php echo @$info['0']->address;?></span></td>
        <td width="5%"></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td height="30px"></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td width="5%"></td>
        <td width="90%" height="50px" style="line-height: 25px"><span>Kính mong các cơ quan hữu trách tạo mọi điều kiện thuận lợi cho Công ty được  nhận lô hàng trên nhanh chóng.</span></td>
        <td width="5%"></td>
      </tr>
    </table>

    <table>
      <tr>
        <td height="20px"></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td width="5%"></td>
        <td width="90%"><span><i>Xin trân trọng cảm ơn và kính chào</i></span></td>
        <td width="5%"></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td height="40px"></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td width="5%"></td>
        <td width="90%"><span style="font-weight: bold;text-align: right;">CONG TY TNHH GIAO NHAN TIEP VAN GALAXY</span></td>
        <td width="5%"></td>
      </tr>
    </table>


</body>
</html>                                                                  