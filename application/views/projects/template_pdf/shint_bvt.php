<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta charset="UTF-8">
</head>
<style type="text/css">
	.container{
		font-size: 16px;
	}
</style>
<body>
 
	<div class="container">
		
		<table>
			<tr>
				<td height="130px"></td>
			</tr>
		</table>

		<table width="100%" border="">
			<tr style="line-height: 25px">
				<td width="5%" height="25px"></td>
				<td width="47%"></td>
				<td width="43%"><i><span>Hà Nội, ngày</span>&nbsp;<span><?php $text = @$info['0']->date; echo substr($text, 8,2) ?></span>&nbsp;<span>tháng</span>&nbsp;<span><?php $text = @$info['0']->date; echo substr($text, 5, 2); ?></span>&nbsp;<span>năm</span>&nbsp;<span><?php
         $text = @$info['0']->date;
         echo substr($text, 0, 4);
         ?></span></i></td>
				<td width="5%"></td>
			</tr>
		</table>

		<table>
			<tr>
				<td height="60px"></td>
			</tr>
		</table>

		<table width="100%" border="">
			<tr> 
				<td height="35px" style="text-align: center;"><span style="font-weight: bold; font-size: 26px">Giấy ủy quyền</span></td>
			</tr>
		</table>

		<table>
			<tr>
				<td height="30px"></td>
			</tr>
		</table>

		<table width="100%" border="">
			<tr style="line-height: 25px">
				<td height="25px" width="5%"></td>
				<td width="90%"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i><u>Kính gửi:</u></i> Các cơ quan hữu quan</span></td>
				<td width="5%"></td>
			</tr>
		</table>

		<table>
			<tr>
				<td height="30px"></td>
			</tr>
		</table>

		<table width="100%" border="">
			<tr style="line-height: 25px">
				<td height="50px" width="5%"></td>
				<td width="90%"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Công ty TNHH giao nhận tiếp vận GALAXY xin gửi tới Quý cơ quan lời chào trân trọng. Chúng tôi xin đề nghị một việc như sau:</span></td>
				<td width="5%"></td>
			</tr>
		</table>

		<table>
			<tr>
				<td height="40px"></td>
			</tr>
		</table>

		<table width="100%" border="">
			<tr style="line-height: 25px">
				<td height="25px" width="5%"></td>
				<td width="90%"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chúng tôi có lô hàng nhập từ</span>&nbsp;<span><?php echo @$info['0']->from;?></span>&nbsp;<span>về</span>&nbsp;<span><?php echo @$info['0']->to;?></span>&nbsp;<span>theo không vận đơn:</span></td>
				<td width="5%"></td>
			</tr>
		</table>

		<table>
			<tr>
				<td height="40px"></td>
			</tr>
		</table>

		<table width="100%" border="">
			<tr style="line-height: 25px">
				<td height="25px" width="5%"></td>
				<td width="20%"><span>MAWB</span></td>
				<td width="70%"><span>:</span>&nbsp;<span><?php echo @$info['0']->mawb;?></span></td>
				<td width="5%"></td>
			</tr>
			<tr style="line-height: 25px">
				<td height="25px" width="5%"></td>
				<td width="20%"><span>HAWB</span></td>
				<td width="70%"><span>:</span>&nbsp;<span><?php echo @$info['0']->hawb;?></span></td>
				<td width="5%"></td>
			</tr>
			<tr style="line-height: 25px">
				<td height="25px" width="5%"></td>
				<td width="20%"><span>Số kiện</span></td>
				<td width="70%"><span>:</span>&nbsp;<span><?php echo @$info['0']->no_of_pcs;?></span></td>
				<td width="5%"></td>
			</tr>
			<tr style="line-height: 25px">
				<td height="25px" width="5%"></td>
				<td width="20%"><span>Trọng lượng</span></td>
				<td width="70%"><span>:</span>&nbsp;<span><?php echo @$info['0']->kgs;?></span></td>
				<td width="5%"></td>
			</tr>
			<tr style="line-height: 25px">
				<td height="25px" width="5%"></td>
				<td width="20%"><span>Tên hàng</span></td>
				<td width="70%"><span>:</span>&nbsp;<span><?php echo @$info['0']->tenhang;?></span></td>
				<td width="5%"></td>
			</tr>
		</table>

		<table>
			<tr>
				<td height="40px"></td>
			</tr>
		</table>

		<table width="100%" border="">
			<tr style="line-height: 25px">
				<td height="25px" width="5%"></td>
				<td width="90%"><span>Xin ủy quyền cho:</span>&nbsp;<span style="text-transform: uppercase;"><?php echo @$info['0']->uyquyen;?></span></td>
				<td width="5%"></td>
			</tr>
			<tr style="line-height: 25px">
				<td height="25px" width="5%"></td>
				<td width="90%"><span>Địa chỉ:</span>&nbsp;<span style="text-transform: uppercase;"><?php echo @$info['0']->address;?></span></td>
				<td width="5%"></td>
			</tr>
		</table>

		<table>
			<tr>
				<td height="40px"></td>
			</tr>
		</table>

		<table width="100%" border="">
			<tr style="line-height: 25px">
				<td height="25px" width="5%"></td>
				<td width="90%"><span>Làm thủ tục khai báo và nhận lô hàng trên.</span></td>
				<td width="5%"></td>
			</tr>
			<tr style="line-height: 25px">
				<td height="25px" width="5%"></td>
				<td width="90%"><span>Kính mong các cơ quan hữu trách tạo mọi điều kiện thuận lợi cho Công ty được ủy quyền nhận lô hàng trên nhanh chóng.</span></td>
				<td width="5%"></td>
			</tr>
		</table>

		<table>
			<tr>
				<td height="40px"></td>
			</tr>
		</table>

		<table width="100%" border="">
			<tr>
				<td width="5%"></td>
				<td width="90%" height="25px"><span>Xin trân trọng cảm ơn và kính chào.</span></td>
				<td width="5%"></td>
			</tr>
		</table>

		<table>
			<tr>
				<td height="50px"></td>
			</tr>
		</table>

		<table width="100%" border="">
			<tr>
				<td width="5%"></td>
				<td width="38%"></td>
				<td width="52%"><span style="font-size: 16px">CÔNG TY TNHH GIAO NHẬN TIẾP VẬN GALAXY</span></td>
				<td width="5%"></td>
			</tr>
		</table>

	</div>

</body>
</html>