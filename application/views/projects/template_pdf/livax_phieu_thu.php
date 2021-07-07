
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
body{

	font-size:14px;
}

</style>
<body>
  <table>
    <tr>
      <td></td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td height="20px" style="line-height: 20px"><span style="font-weight: bold; font-size: 16px">CHI NHÁNH CÔNG TY DỊCH VỤ HÀ THIÊN</span></td>
    </tr>
    <tr>
      <td height="20px" style="line-height: 20px"><span>P.2401, 101 LÁNG HẠ, HÀ NỘI</span></td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td style="text-align: center;line-height: 20px" height="20px"><span style="font-size: 16px; font-weight: bold;">PHIẾU THU</span></td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr style="line-height: 20px">
      <td width="55%" height="20px" style="text-align: right;"><span>Ngày</span>&nbsp;<span><?php echo @$info['0']->date_time;?></span></td>
      <td width="45%" style="text-align: center;"><span>Số phiếu:</span>&nbsp;<span><?php echo @$info['0']->so_phieu;?></span></td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td height="20px"></td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr style="line-height: 20px">
      <td height="20px" colspan="2"><span>Người nộp:</span>&nbsp;<span style="text-transform: uppercase;font-weight: bold;"><?php echo @$info['0']->nguoi_nop_phieu;?></span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px" width="60%"><span>Số vận đơn:</span>&nbsp;<span><?php echo @$info['0']->so_van_don;?></span></td>
      <td width="40%"><span>TY GIA:</span>&nbsp;<span>22,840</span></td>
    </tr>
    <tr style="line-height: 20px">
      <td colspan="2" height="20px"><span>Tên tàu:</span>&nbsp;<span><?php echo @$info['0']->ten_tau;?></span></td>
    </tr>
    <tr>
      <td></td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr style="line-height: 20px; text-align: center;">
      <td height="20px" width="10%"><span>TT</span></td>
      <td width="40%"><span>Nội Dung</span></td>
      <td width="15%"><span>ĐƠN GIÁ</span></td>
      <td width="15%"><span>SỐ LƯỢNG</span></td>
      <td width="20%"><span>THÀNH TIỀN</span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px" style="text-align: center;"><span>1</span></td>
      <td><span>&nbsp;</span><span>PHÍ DO</span></td>
      <td style="text-align: right;"><span>$</span>&nbsp;<span><?php echo @$info['0']->don_gia_1;?></span><span>&nbsp;</span></td>
      <td style="text-align: center;"><span><?php echo @$info['0']->so_luong_1;?></span></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->thanh_tien_1;?></span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px" style="text-align: center;"><span>2</span></td>
      <td><span>&nbsp;</span><span>PHÍ HANDLING</span></td>
      <td style="text-align: right;"><span>$</span>&nbsp;<span><?php echo @$info['0']->don_gia_2;?></span><span>&nbsp;</span></td>
      <td style="text-align: center;"><span><?php echo @$info['0']->so_luong_2;?></span></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->thanh_tien_2;?></span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px" style="text-align: center;"><span>3</span></td>
      <td><span>&nbsp;</span><span>PHÍ CFS</span></td>
      <td style="text-align: right;"><span>$</span>&nbsp;<span><?php echo @$info['0']->don_gia_3;?></span><span>&nbsp;</span></td>
      <td style="text-align: center;"><span><?php echo @$info['0']->so_luong_3;?></span></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->thanh_tien_3;?></span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px" style="text-align: center;"><span>4</span></td>
      <td><span>&nbsp;</span><span>PHÍ THC</span></td>
      <td style="text-align: right;"><span>$</span>&nbsp;<span><?php echo @$info['0']->don_gia_4;?></span><span>&nbsp;</span></td>
      <td style="text-align: center;"><span><?php echo @$info['0']->so_luong_4;?></span></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->thanh_tien_4;?></span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px" style="text-align: center;"><span>5</span></td>
      <td><span>&nbsp;</span><span>PHÍ CIC</span></td>
      <td style="text-align: right;"><span>$</span>&nbsp;<span><?php echo @$info['0']->don_gia_5;?></span><span>&nbsp;</span></td>
      <td style="text-align: center;"><span><?php echo @$info['0']->so_luong_5;?></span></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->thanh_tien_5;?></span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px" style="text-align: center;"><span>6</span></td>
      <td><span>&nbsp;</span><span>PHÍ BOC XEP</span></td>
      <td style="text-align: right;"><span>$</span>&nbsp;<span><?php echo @$info['0']->don_gia_6;?></span><span>&nbsp;</span></td>
      <td style="text-align: center;"><span><?php echo @$info['0']->so_luong_6;?></span></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->thanh_tien_6;?></span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px" style="text-align: center;"><span>7</span></td>
      <td><span>&nbsp;</span><span>PHU PHÍ XANG DAU</span></td>
      <td style="text-align: right;"><span>$</span>&nbsp;<span><?php echo @$info['0']->don_gia_7;?></span><span>&nbsp;</span></td>
      <td style="text-align: center;"><span><?php echo @$info['0']->so_luong_7;?></span></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->thanh_tien_7;?></span></td>
    </tr>
    <tr>
      <td height="20px"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px"></td>
      <td><span>&nbsp;</span><span>Cộng</span></td>
      <td></td>
      <td></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->sub_total;?></span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px"></td>
      <td><span>&nbsp;</span><span>VAT</span></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->don_gia_vat;?></span>&nbsp;<span>%</span></td>
      <td></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->total_vat;?></span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px"></td>
      <td><span>&nbsp;</span><span>TỔNG CỘNG</span></td>
      <td></td>
      <td></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->total;?></span></td>
    </tr>
  </table>

  <table>
    <tr>
      <td></td>
    </tr>
  </table>

  <table width="100%">
    <tr style="line-height: 20px">
      <td height="20px"><span>Bằng chữ:</span>&nbsp;<span><!-- Mười hai triệu hai trăm chín mươi lăm nghìn năm trăm tám mươi lăm đồng Mười hai triệu hai --><?php echo @$info['0']->bang_chu;?></span></td>
    </tr>
  </table>

  <table>
    <tr>
      <td height="20px"></td>
    </tr>
  </table>

  <table width="100%">
    <tr style="text-align: center; font-weight: bold;">
      <td><span>GIÁM ĐỐC</span></td>
      <td><span>THỦ QUỸ</span></td>
      <td><span>NGƯỜI LẬP PHIẾU</span></td>
      <td><span>NGƯỜI NỘP TIỀN</span></td>
    </tr>
  </table>

  <table>
    <tr>
      <td height="45px"></td>
    </tr>
  </table>

  <table width="100%" style="border-bottom: 1px dashed black">
    <tr style="text-align: center;font-weight: bold;">
      <td height="30px"><span>HANG</span></td>
    </tr>
  </table>
  <table>
    <tr><td></td></tr>
  </table>

  <!-- ======================= PAGE 2========================== -->

  <table width="100%" border="">
    <tr>
      <td height="20px" style="line-height: 20px"><span style="font-weight: bold; font-size: 16px">CHI NHÁNH CÔNG TY DỊCH VỤ HÀ THIÊN</span></td>
    </tr>
    <tr>
      <td height="20px" style="line-height: 20px"><span>P.2401, 101 LÁNG HẠ, HÀ NỘI</span></td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td style="text-align: center;line-height: 20px" height="20px"><span style="font-size: 16px; font-weight: bold;">PHIẾU THU</span></td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr style="line-height: 20px">
      <td width="55%" height="20px" style="text-align: right;"><span>Ngày</span>&nbsp;<span><?php echo @$info['0']->date_time;?></span></td>
      <td width="45%" style="text-align: center;"><span>Số phiếu:</span>&nbsp;<span><?php echo @$info['0']->so_phieu;?></span></td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr>
      <td height="20px"></td>
    </tr>
  </table>

  <table width="100%" border="">
    <tr style="line-height: 20px">
      <td height="20px" colspan="2"><span>Người nộp:</span>&nbsp;<span style="text-transform: uppercase;font-weight: bold;"><?php echo @$info['0']->nguoi_nop_phieu;?></span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px" width="60%"><span>Số vận đơn:</span>&nbsp;<span><?php echo @$info['0']->so_van_don;?></span></td>
      <td width="40%"><span>TY GIA:</span>&nbsp;<span>22,840</span></td>
    </tr>
    <tr style="line-height: 20px">
      <td colspan="2" height="20px"><span>Tên tàu:</span>&nbsp;<span><?php echo @$info['0']->ten_tau;?></span></td>
    </tr>
    <tr>
      <td></td>
    </tr>
  </table>

  <table width="100%" border="1">
    <tr style="line-height: 20px; text-align: center;">
      <td height="20px" width="10%"><span>TT</span></td>
      <td width="40%"><span>Nội Dung</span></td>
      <td width="15%"><span>ĐƠN GIÁ</span></td>
      <td width="15%"><span>SỐ LƯỢNG</span></td>
      <td width="20%"><span>THÀNH TIỀN</span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px" style="text-align: center;"><span>1</span></td>
      <td><span>&nbsp;</span><span>PHÍ DO</span></td>
      <td style="text-align: right;"><span>$</span>&nbsp;<span><?php echo @$info['0']->don_gia_1;?></span><span>&nbsp;</span></td>
      <td style="text-align: center;"><span><?php echo @$info['0']->so_luong_1;?></span></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->thanh_tien_1;?></span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px" style="text-align: center;"><span>2</span></td>
      <td><span>&nbsp;</span><span>PHÍ HANDLING</span></td>
      <td style="text-align: right;"><span>$</span>&nbsp;<span><?php echo @$info['0']->don_gia_2;?></span><span>&nbsp;</span></td>
      <td style="text-align: center;"><span><?php echo @$info['0']->so_luong_2;?></span></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->thanh_tien_2;?></span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px" style="text-align: center;"><span>3</span></td>
      <td><span>&nbsp;</span><span>PHÍ CFS</span></td>
      <td style="text-align: right;"><span>$</span>&nbsp;<span><?php echo @$info['0']->don_gia_3;?></span><span>&nbsp;</span></td>
      <td style="text-align: center;"><span><?php echo @$info['0']->so_luong_3;?></span></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->thanh_tien_3;?></span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px" style="text-align: center;"><span>4</span></td>
      <td><span>&nbsp;</span><span>PHÍ THC</span></td>
      <td style="text-align: right;"><span>$</span>&nbsp;<span><?php echo @$info['0']->don_gia_4;?></span><span>&nbsp;</span></td>
      <td style="text-align: center;"><span><?php echo @$info['0']->so_luong_4;?></span></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->thanh_tien_4;?></span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px" style="text-align: center;"><span>5</span></td>
      <td><span>&nbsp;</span><span>PHÍ CIC</span></td>
      <td style="text-align: right;"><span>$</span>&nbsp;<span><?php echo @$info['0']->don_gia_5;?></span><span>&nbsp;</span></td>
      <td style="text-align: center;"><span><?php echo @$info['0']->so_luong_5;?></span></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->thanh_tien_5;?></span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px" style="text-align: center;"><span>6</span></td>
      <td><span>&nbsp;</span><span>PHÍ BOC XEP</span></td>
      <td style="text-align: right;"><span>$</span>&nbsp;<span><?php echo @$info['0']->don_gia_6;?></span><span>&nbsp;</span></td>
      <td style="text-align: center;"><span><?php echo @$info['0']->so_luong_6;?></span></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->thanh_tien_6;?></span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px" style="text-align: center;"><span>7</span></td>
      <td><span>&nbsp;</span><span>PHU PHÍ XANG DAU</span></td>
      <td style="text-align: right;"><span>$</span>&nbsp;<span><?php echo @$info['0']->don_gia_7;?></span><span>&nbsp;</span></td>
      <td style="text-align: center;"><span><?php echo @$info['0']->so_luong_7;?></span></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->thanh_tien_7;?></span></td>
    </tr>
    <tr>
      <td height="20px"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px"></td>
      <td><span>&nbsp;</span><span>Cộng</span></td>
      <td></td>
      <td></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->sub_total;?></span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px"></td>
      <td><span>&nbsp;</span><span>VAT</span></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->don_gia_vat;?></span>&nbsp;<span>%</span></td>
      <td></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->total_vat;?></span></td>
    </tr>
    <tr style="line-height: 20px">
      <td height="20px"></td>
      <td><span>&nbsp;</span><span>TỔNG CỘNG</span></td>
      <td></td>
      <td></td>
      <td style="text-align: right;"><span><?php echo @$info['0']->total;?></span></td>
    </tr>
  </table>

  <table>
    <tr>
      <td></td>
    </tr>
  </table>

  <table width="100%">
    <tr style="line-height: 20px">
      <td height="20px"><span>Bằng chữ:</span>&nbsp;<span><!-- Mười hai triệu hai trăm chín mươi lăm nghìn năm trăm tám mươi lăm đồng Mười hai triệu hai --><?php echo @$info['0']->bang_chu;?></span></td>
    </tr>
  </table>

  <table>
    <tr>
      <td height="20px"></td>
    </tr>
  </table>

  <table width="100%">
    <tr style="text-align: center; font-weight: bold;">
      <td><span>GIÁM ĐỐC</span></td>
      <td><span>THỦ QUỸ</span></td>
      <td><span>NGƯỜI LẬP PHIẾU</span></td>
      <td><span>NGƯỜI NỘP TIỀN</span></td>
    </tr>
  </table>

  <table>
    <tr>
      <td height="45px"></td>
    </tr>
  </table>

  <table width="100%">
    <tr style="text-align: center;font-weight: bold;">
      <td><span>HANG</span></td>
    </tr>
  </table>

</body>
</html>                                                                  