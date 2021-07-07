
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
</head>
<style>
body{

	font-size:14px;
}

</style>
<body>
  
  <table>
    <tr>
      <td height="30px"></td>
    </tr>
  </table>
 
  <table width="100%" border="" style="color: #0275e8">
      <tr>
        <td  width="30%" rowspan="5">
          <img src="<?php echo get_file_uri("assets/images/logo-glx.png"); ?>" height="100px">
        </td>
        <td height="25px" width="70%" style="border-bottom-color: #0275e8; line-height: 25px"><span style="font-size: 16px; color: #0275e8">GALAXY LOGISTICS COMPANY LTD</span>
          
        </td>
      </tr>
      <tr style="line-height: 20px">
        <td height="20px"><span>Add: Unit 2401, 24/F , Tower 101 Lang Ha st., </span>
        </td>
      </tr>
      <tr style="line-height: 20px">
        <td height="20px"><span>Dong Da dist., Hanoi, Viet Nam.</span>
        </td>
      </tr>
      <tr style="line-height: 20px">
        <td height="20px"><span>Tel: 84-24.35624946</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Fax: 84-24-35624947</span>
        </td>
      </tr>
      <tr style="line-height: 20px">
        <td height="20px"><span>E-mail: info@galaxy-vietnam.com</span>
        </td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td height="30px"></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td width="50%"></td>
        <td height="25px" style="line-height: 25px" width="50%"><i><span>Hà Nội, ngày</span>&nbsp;<span><?php $text = @$info['0']->date_hn; echo substr($text, 8,2) ?></span>&nbsp;<span>tháng</span>&nbsp;<span><?php $text = @$info['0']->date_hn; echo substr($text, 5, 2); ?></span>&nbsp;<span>năm</span>&nbsp;<span><?php
         $text = @$info['0']->date_hn;
         echo substr($text, 0, 4);
         ?></span></i></td>
      </tr>
    </table>

    <table>
      <tr>
        <td height="40px"></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td width="100%" height="30px" style="font-size: 22px; text-align: center;line-height: 30px; font-weight: bold;"><span>Giấy báo nhận hàng</span></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td height="40px"></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td height="25px" style="font-weight: bold;line-height: 25px; font-size: 14px"><i><span>Kính Gửi:</span>&nbsp;<span><?php echo @$info['0']->kinh_gui;?></span></i></td>
      </tr>
      <tr>
        <td height="25px" style="line-height: 25px; font-weight: bold;"><i><span>Att: Phòng xuất nhập khẩu</span></i></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr style="line-height: 22px">
        <td height="22px" width="40%"><span>Chúng tôi xin trân trọng thông báo tàu</span></td>
        <td width="60%"><span>:</span>&nbsp;<span><?php echo @$info['0']->thong_bao;?></span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px"><span>Dự kiến cập cảng Hải Phòng ngày</span></td>
        <td><span>:</span>&nbsp;<span><?php echo @$info['0']->cap_cang;?></span></td>
      </tr>
      <tr style="line-height: 22px">
        <td colspan="2"><span>Có chở lô hàng dưới đây của quý khách:</span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px"><span>Hàng hóa ( Commodity)</span></td>
        <td><span>:</span>&nbsp;<span><?php echo @$info['0']->commodity;?></span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px"><span>Vận đơn số ( Bill of Lading No)</span></td>
        <td><span>:</span>&nbsp;<span style="text-transform: uppercase;"><?php echo @$info['0']->bill_of_lading;?></span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px"><span>Được gửi từ ( From)</span></td>
        <td><span>:</span>&nbsp;<span><?php echo @$info['0']->form;?></span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px"><span>Số Container / Seal No</span></td>
        <td><span>:</span>&nbsp;<span style="text-transform: uppercase;"><?php echo @$info['0']->container_seal_no;?></span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px"><span>Trọng lượng ( Weight)</span></td>
        <td><span>:</span>&nbsp;<span><?php echo @$info['0']->weight;?></span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px"><span>Thể tích ( Measurement)</span></td>
        <td><span>:</span>&nbsp;<span><?php echo @$info['0']->measurement;?></span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px"><span style="font-weight: bold;">Cảng dỡ hàng</span></td>
        <td><span>:</span>&nbsp;<span><?php echo @$info['0']->cang_do_hang;?></span></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr style="line-height: 22px">
        <td width="50%" height="22px" style="font-weight: bold;"><span>Kho :</span>&nbsp;<span style="text-transform: uppercase;"><?php echo @$info['0']->kho;?></span></td>
        <td width="50%" style="font-weight: bold;"><span>Mã kho :</span>&nbsp;<span style="text-transform: uppercase;"><?php echo @$info['0']->ma_kho;?></span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px" colspan="2"><span>Đề nghị quý khách liên hệ đến công ty chúng tôi nhận lệnh, giấy uỷ quyền, chứng từ ngay khi nhận được</span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px" colspan="2"><span>giấy báo nhận hàng đối với hàng lẻ, và trong vòng 5 ngày đối với hàng nguyên công. Quá thời hạn trên</span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px" colspan="2"><span>quý khách phải trả phí lưu kho, phí lưu container cũng như chịu mọi rủi ro, phí tổn phát sinh.</span></td>
      </tr>
    </table>

    <table>
      <tr>
        <td height="30px"></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td height="22px" colspan="2" style="line-height: 22px"><span style="font-weight: bold;">Khi đến nhận hàng đề nghị mang theo những giấy tờ sau:</span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px" width="35%"><span>1. Giấy giới thiệu</span></td>
        <td width="65%"><span>:</span>&nbsp;<span><?php if (isset($_POST['giay_gioi_thieu'])) { echo "Yes";} else{ echo "No";}?><!-- <?php echo @$info['0']->giay_gioi_thieu;?> --></span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px" width="35%"><span>2. Vận đơn gốc</span></td>
        <td width="65%"><span>:</span>&nbsp;<span><?php echo @$info['0']->van_don;?></span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px" width="35%"><span>3. Cước vận chuyển quốc tế</span></td>
        <td width="65%"><span>:</span>&nbsp;<span><?php echo @$info['0']->cuoc_van_chuyen;?></span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px" width="35%"><span>4. Phí chứng từ</span></td>
        <td width="65%"><span>:</span>&nbsp;<span><?php echo @$info['0']->phi_chung_tu;?></span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px" width="35%"><span>5. Phí handling</span></td>
        <td width="65%"><span>:</span>&nbsp;<span><?php echo @$info['0']->handling;?></span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px" width="35%"><span>6. Phí CFS</span></td>
        <td width="65%"><span>:</span>&nbsp;<span><?php echo @$info['0']->phi_cfs;?></span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px" width="35%"><span>7. PhiTHC</span></td>
        <td width="65%"><span>:</span>&nbsp;<span><?php echo @$info['0']->phi_thc;?></span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px" width="35%"><span>8. Phi CIC</span></td>
        <td width="65%"><span>:</span>&nbsp;<span><?php echo @$info['0']->phi_cic;?></span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px" width="35%"><span>9. Phi bốc xếp</span></td>
        <td width="65%"><span>:</span>&nbsp;<span><?php echo @$info['0']->phi_boc_xep;?></span></td>
      </tr>
      <tr style="line-height: 22px">
        <td height="22px" width="35%"><span>10. Phụ phi xăng dầu ( BAF)</span></td>
        <td width="65%"><span>:</span>&nbsp;<span><?php echo @$info['0']->phi_xang_dau;?></span></td>
      </tr>
      <tr>
        <td height="20px" colspan="2" style="line-height: 20px; font-weight: bold;"><span>Các phí trên chưa bao gồm VAT</span></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td height="30px"></td>
      </tr>
    </table>

    <table width="100%" border="">
      <tr>
        <td height="20px" style="line-height: 20px; font-weight: bold;"><span>Chúng tôi đảm nhận mọi dịch vụ giao nhận hàng hoá tận nơi theo yêu cầu của Quý khách.</span></td>
      </tr>
    </table>

    <table>
      <tr>
        <td height="50px"></td>
      </tr>
    </table>

    <table>
      <tr>
        <td width="50%"></td>
        <td width="50%"><span style="color: #0275e8; font-weight: bold;">GALAXY LOGISTICS COMPANY LTD</span></td>
      </tr>
    </table>

    <table>
      <tr>
        <td colspan="2" height="40px"></td>
      </tr>
    </table>

    <table>
      <tr>
        <td width="35%"></td>
        <td width="65%" style="text-align: center;"><span><?php echo @$info['0']->user;?></span></td>
      </tr>
    </table>

    

</body>
</html>                                                                  