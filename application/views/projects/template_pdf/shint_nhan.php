<!DOCTYPE html>
<html>
<head>
</head>
<style type="text/css">
	.container{
		font-size: 14px;
	}
</style>
<body>

<div class="container">

	<table>
		<tr>
			<td height="20px"></td>
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
  			<td height="40px"></td>
  		</tr>
  	</table>

  	<table width="100%" border="">
  		<tr>
  			<td width="55%"></td>
  			<td height="25px" width="45%" style="line-height: 25px"> 
  				<i><span>Hà Nội, ngày</span>&nbsp;<span><?php $text = @$info['0']->date_time; echo substr($text, 8,2) ?></span>&nbsp;<span>tháng</span>&nbsp;<span><?php $text = @$info['0']->date_time; echo substr($text, 5, 2); ?></span>&nbsp;<span>năm</span>&nbsp;<span><?php
         $text = @$info['0']->date_time;
         echo substr($text, 0, 4);
         ?></span></i>
  			</td>
  		</tr>
  	</table>

  	<table width="100%" border="">
  		<tr>
  			<td height="40px"></td>
  		</tr>
  	</table>

  	<table width="100%" border="">
  		<tr>
  			<td height="30px" style="text-align: center;font-weight: bold;">
  				<span style="font-size: 22px; ">Giấy báo nhận hàng</span>
  			</td>
  		</tr>
  	</table>

  	<table width="100%" border="">
  		<tr>
  			<td height="40px"></td>
  		</tr>
  	</table>

  	<table width="100%" border="">
  		<tr style="line-height: 25px">
  			<td height="25px" width="100%" style="font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i><span>Kính gửi:</span>&nbsp;<span><?php echo @$info['0']->send;?></span></i>
  			</td>
  		</tr>
  	</table>

  	<table width="100%" border="">
  		<tr>
  			<td height="20px"></td>
  		</tr>
  	</table>

  	<table width="100%" border="">
  		<tr style="line-height: 25px">
  			<td height="25px"><span>Chúng tôi xin trân trọng thông báo Quý công ty có lô hàng nhập từ</span>&nbsp;<span><?php echo @$info['0']->go;?></span>&nbsp;<span>về</span>&nbsp;<span><?php echo @$info['0']->to;?></span>&nbsp;<span>theo chi tiết dưới đây:</span>
  			</td>
  		</tr>
  	</table>

  	<table width="100%" border="">
  		<tr>
  			<td height="20px"></td>
  		</tr>
  	</table>

  	<table width="100%" border="">
  		<tr style="line-height: 25px">
  			<td height="25px" width="25%"><span>Hàng hóa</span></td>
  			<td width="75%"><span>:</span>&nbsp;<span><?php echo @$info['0']->goods;?></span></td>
  		</tr>
  		<tr style="line-height: 25px">
  			<td height="25px"><span>MAWB</span></td>
  			<td><span>:</span>&nbsp;<span><?php echo @$info['0']->mawb;?></span></td>
  		</tr>
  		<tr style="line-height: 25px">
  			<td height="25px"><span>HAWB</span></td>
  			<td><span>:</span>&nbsp;<span><?php echo @$info['0']->hawb;?></span></td>
  		</tr>
  		<tr style="line-height: 25px">
  			<td height="25px"><span>Trọng lượng</span></td>
  			<td><span>:</span>&nbsp;<span><?php echo @$info['0']->weight;?></span></td>
  		</tr>
  		<tr style="line-height: 25px">
  			<td height="25px"><span>Số kiện</span></td>
  			<td><span>:</span>&nbsp;<span><?php echo @$info['0']->no_of;?></span></td>
  		</tr>
  		<tr style="line-height: 25px">
  			<td height="25px"><span>Người gửi hàng</span></td>
  			<td><span>:</span>&nbsp;<span><?php echo @$info['0']->shipper;?></span></td>
  		</tr>

  	</table>

  	<table width="100%" border="">
  		<tr>
  			<td height="25px" style="line-height: 25px"><span>Lô hàng trên dự kiến về đến sân bay Nội Bài ngày</span>&nbsp;<span><?php echo @$info['0']->go_to;?></span></td>
  		</tr>
  	</table>

  	<table width="100%" border="">
  		<tr style="line-height: 25px">
  			<td height="25px" width="35%"><b><span>Chuyến bay:</span>&nbsp;<span><?php echo @$info['0']->flight;?></span></b></td>
  			<td width="31%"><b><span>Kho:</span>&nbsp;<span><?php echo @$info['0']->kho;?></span></b></td>
  			<td width="34%"><b><span>Mã kho:</span>&nbsp;<span><?php echo @$info['0']->ma_kho;?></span></b></td>
  		</tr>
  	</table>

  	<table width="100%" border="">
  		<tr>
  			<td height="20px"></td>
  		</tr>
  	</table>

  	<table width="100%" border="">
  		<tr style="line-height: 25px">
  			<td height="25px"><span>Đề nghị quý khách đến Công ty chúng tôi làm thủ tục nhận chứng từ của lô hàng nói trên</span>
  			</td>
  		</tr>
  		<tr style="line-height: 25px">
  			<td height="25px"><span>Nếu sau 02 ngày Quý khách không tới nhận chứng từ thì mọi chi phí phát sinh và tổn thất</span>
  			</td>
  		</tr>
  		<tr style="line-height: 25px">
  			<td height="25px"><span>hàng hóa sẽ do Quý khách hàng chịu.</span></td>
  		</tr>
  	</table>

  	<table width="100%" border="">
  		<tr>
  			<td height="40px"></td>
  		</tr>
  	</table>

  	<table width="100%" border=""> 
  		<tr style="line-height: 25px">
  			<td height="25px" style="font-weight: bold;"><span>Khi đến nhận chứng từ đề nghị Quý khách mang theo những giấy tờ sau và nộp các</span></td>
  		</tr>
  		<tr style="line-height: 25px">
  			<td height="25px" style="font-weight: bold;"><span>khoản lệ phí sau:</span></td>
  		</tr>
  	</table>

  	<table width="100%" border="">
  		<tr>
  			<td height="20px"></td>
  		</tr>
  	</table>

  	<table width="100%" border="">
  		<tr style="line-height: 25px">
  			<td height="25px" width="30%"><span>Giấy giới thiệu</span>
  			</td>
  			<td width="70%"><span>:&nbsp;</span><span><?php if(isset($_POST['giay'])){echo 'Yes';} else{ echo "No";}?><!-- <?php echo @$info['0']->giay;?> --></span></td>
  		</tr>
  		<tr style="line-height: 25px">
  			<td height="25px"><span>Cước vận chuyển quốc tế</span></td>
  			<td><span>:&nbsp;</span><span><?php echo @$info['0']->prepaid;?></span></td>
  		</tr>
  		<tr style="line-height: 25px">
  			<td height="25px"><span>Phí chứng từ</span></td>
  			<td><span>:&nbsp;</span><span><?php echo @$info['0']->fees_for_vouchers;?></span></td>
  		</tr>
  	</table>

  	<table width="100%" border="">
  		<tr>
  			<td height="40px"></td>
  		</tr>
  	</table>

  	<table width="100%" border="">
  		<tr>
  			<td height="25px" style="font-weight: bold; line-height: 25px"><span>Chúng tôi đảm nhận mọi dịch vụ giao nhận hàng hóa tận nơi theo  yêu cầu của Quý Khách</span></td>
  		</tr>
  	</table>

  	<table width="100%" border="">
  		<tr>
  			<td height="50px"></td>
  		</tr>
  	</table>

  	<table width="100%">
  		<tr style="line-height: 20px">
  			<td height="20px" width="60%"></td>
  			<td width="40%"><span style="color: #0275e8">GALAXY LOGISTICS COMPANY LTD</span></td>
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
  			<td width="50%" style="text-align: center;"><span><?php echo @$info['0']->user;?></span></td>
  		</tr>
  	</table>

</div>
</body>
</html>