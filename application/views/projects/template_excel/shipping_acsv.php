<?php echo form_open(get_uri("huongdan_guihang/save"), array("id" => "pdf-form2", "class" => "general-form", "role" => "form", "name" => "frm")); ?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <link rel='stylesheet' type='text/css' href='https://hathien-crm.wsoftpro.com/assets/bootstrap/css/bootstrap.min.css?v=1.9' />
  <script type="text/javascript">
    function limitText(limitField, limitCount, limitNum) {
      if (limitField.value.length > limitNum) {
        limitField.value = limitField.value.substring(0, limitNum);
      } else {
        limitCount.value = limitNum - limitField.value.length;
      }
    }
  </script>
</head>
<style>
body{

	font-size:16px;
}
table tr td{
  padding-top: 20px;
}
.modal-dialog{
  width: 70%;
  margin: 30px auto;
}

</style>


<body>
<input hidden="hidden" name="value" id="value" value="2">
<input value="<?php echo @$info2['0']->id;?>" name="id" hidden="hidden">
<input value="<?php echo @$model_info->id; ?>" name="task_id" hidden="hidden">
<input value="<?php echo @$model_info->status_id; ?>" name="status_id" hidden="hidden">
<div>
  <div class="col-md-12 b-t pt10 list-container">
    <table width="100%">
    <tr>
      <td width="80%">
        <img height="80px" src="<?php echo get_file_uri("assets/images/acsv.jpg"); ?>">
      </td>
      
      <td width="20%" style=" text-align: left; ">
         <div style="border: 1px solid; padding: 10px">
            <span><br>BM/HHX/02</span><br>
            <span>Ngày ban hành: 15/09/2016</span><br>
            <span>lần ban hành: 02</span>
         </div>
      </td>
    </tr>
  </table>
  <table width="100%">
    <tr>
      <td style="text-align: center; font-size: 24px;">
        <span><b>HƯỚNG DẪN GỬI HÀNG</b></span><br>
        <span><b>SHIPPER'S LETTER OF INSTRUCTIONS FOR DESPATCH</b></span>
      </td><br><br>
    </tr>
  </table>

  <table width="100%" >
    <tr>
      <td style="font-size: 18px; padding-left: 40px; padding-top: 40px">
        <span><b>A. PHẦN DÀNH CHO KHÁCH HÀNG (SHIPPER'S DECLARATION):</b></span>
      </td>
    </tr>
  </table>

  <table width="100%">
    <tr style="border-top-color: white; border-left-color: white">
      <td height="30px" width="24%" style="border-top-color: white; border-left-color: white; border-bottom-color: white; text-align: center; line-height: 20px; font-size: 16px">
        <span><b>Số AWB (AWB No):</b></span>
      </td>
      <td height="20px" width="5%">
        <input type="text" name="awb1" onKeyUp="limitText(this.form.awb1,this.form.countdown,1);" class="form-control" value="<?php echo @$info2['0']->awb1;?>">
      </td>
      <td width="5%">
        <input type="text" name="awb2" onKeyUp="limitText(this.form.awb2,this.form.countdown,1);" class="form-control" value="<?php echo @$info2['0']->awb2;?>">
      </td>
      <td width="5%">
        <input type="text" name="awb3" onKeyUp="limitText(this.form.awb3,this.form.countdown,1);" class="form-control" value="<?php echo @$info2['0']->awb3;?>">
      </td>
      <td width="5%"></td>
      <td width="5%">
        <input type="text" name="awb4" onKeyUp="limitText(this.form.awb4,this.form.countdown,1);" class="form-control" value="<?php echo @$info2['0']->awb4;?>">
      </td>
      <td width="5%">
        <input type="text" name="awb5" onKeyUp="limitText(this.form.awb5,this.form.countdown,1);" class="form-control" value="<?php echo @$info2['0']->awb5;?>">
      </td>
      <td width="5%">
        <input type="text" name="awb6" onKeyUp="limitText(this.form.awb6,this.form.countdown,1);" class="form-control" value="<?php echo @$info2['0']->awb6;?>">
      </td>
      <td width="5%">
        <input type="text" name="awb7" onKeyUp="limitText(this.form.awb7,this.form.countdown,1);" class="form-control" value="<?php echo @$info2['0']->awb7;?>">
      </td>
      <td width="5%">
        <input type="text" name="awb8" onKeyUp="limitText(this.form.awb8,this.form.countdown,1);" class="form-control" value="<?php echo @$info2['0']->awb8;?>">
      </td>
      <td width="5%">
        <input type="text" name="awb9" onKeyUp="limitText(this.form.awb9,this.form.countdown,1);" class="form-control" value="<?php echo @$info2['0']->awb9;?>">
      </td>
      <td width="5%">
        <input type="text" name="awb10" onKeyUp="limitText(this.form.awb10,this.form.countdown,1);" class="form-control" value="<?php echo @$info2['0']->awb10;?>">
      </td>
      <td width="5%">
        <input type="text" name="awb11" onKeyUp="limitText(this.form.awb11,this.form.countdown,1);" class="form-control" value="<?php echo @$info2['0']->awb11;?>">
      </td>
      <td width="40%" style="border-top: none;border-right: none;border-bottom: none;"></td>
    </tr>
  </table> <br><br>



 <table width="100%">
    <tr>
      <td height="30px" width="15%">
        <span>Chuyến bay (Booking flight):</span>
      </td>
      <td width="45%">
        <input type="text" name="booking_flight" onKeyUp="limitText(this.form.booking_flight,this.form.countdown,35);" class="form-control" style="width: 90%" value="<?php echo @$info2['0']->booking_flight;?>">
      </td>
      <td width="15%">
        <span>Ngày (Date):</span>
      </td>
      <td width="25%">
        <input type="date" name="date_send" class="form-control" value="<?php echo @$info2['0']->date_send;?>">
      </td>
    </tr>
  </table>

  <table width="100%">
    <tr>
      <td height="45px" width="34%">
        <span>Sân bay khởi hành <i>(Airport of departure)</i></span><br>
         <span><input type="text" name="departure" onKeyUp="limitText(this.form.departure,this.form.countdown,30);" class="form-control" style="width: 80%" value="<?php echo @$info2['0']->departure;?>"></span>
      </td>
      <td width="33%">
        <span>Sân bay đến <i>(Airport of destination)</i></span><br>
         <span><input type="text" name="destination" onKeyUp="limitText(this.form.destination,this.form.countdown,30);" class="form-control" style="width: 80%" value="<?php echo @$info2['0']->destination;?>"></span>
      </td>
      <td width="33%">
        <span>Hành trình <i>(Routing)</i></span><br>
        <span><input type="text" name="routing" class="form-control" onKeyUp="limitText(this.form.routing,this.form.countdown,30);" style="width: 80%" value="<?php echo @$info2['0']->routing;?>"></span>
      </td>
    </tr>
  </table>

  <table width="100%">
        <tr>
          <td width="10%">
            <span>Số kiện <i>(No of pcs):</i></span>
          </td>
          <td width="20%">
            <input type="text" name="no_of_pcs" onKeyUp="limitText(this.form.no_of_pcs,this.form.countdown,15);" class="form-control" style="width: 80%" value="<?php echo @$info2['0']->no_of_pcs;?>">
          </td>
          <td width="10%">
            <span>Trọng lượng <i>(Gross weight) :</i></span>
          </td>
          <td width="20%">
            <input type="text" name="gross_weight" onKeyUp="limitText(this.form.gross_weight,this.form.countdown,15);" class="form-control" style="width: 80%" value="<?php echo @$info2['0']->gross_weight;?>">
          </td>
          <td width="10%">
            <span>Loại bao bì <i>(Package) :</i></span>
          </td>
          <td width="20%">
            <input type="text" name="package" onKeyUp="limitText(this.form.package,this.form.countdown,15);" class="form-control" style="width: 80%" value="<?php echo @$info2['0']->package;?>">
          </td>
        </tr>
    </table>

    <table  width="100%">
    <tr>
      <td width="20%">
        <span>Tên hàng (Commodity of goods)</span>
     </td>
     <td width="80%">
       <input type="text" name="commodity_of_goods" onKeyUp="limitText(this.form.commodity_of_goods,this.form.countdown,100);" class="form-control" style="width: 100%" value="<?php echo @$info2['0']->commodity_of_goods;?>">
     </td>
    </tr>
  </table>

  <table width="100%">
    <tr>
      <td width="30%">
        <span>Người gửi (Tên/Địa chỉ/Số đt/Fax) - Shipper (Name/Address/Tel no/Fax no)</span>
      </td>
      <td width="70%">
        <textarea name="shipper_name" class="form-control" onKeyUp="limitText(this.form.shipper_name,this.form.countdown,260);"  rows="3"><?php echo @$info2['0']->shipper_name;?></textarea>
      </td>
    </tr>
    <tr>
      <td width="30%">
        <span>Mã số thuế (<i>Tax code</i>)</span>
      </td>
      <td width="70%">
        <input type="text" name="shipper_code" onKeyUp="limitText(this.form.shipper_code,this.form.countdown,50);" class="form-control"  value="<?php echo @$info2['0']->shipper_code;?>">
      </td>
    </tr>
  </table>

  <table width="100%">
    <tr>
      <td width="30%">
        <span>Người yêu cầu dịch vụ (Tên/Địa chỉ/Số đt/Fax) - Payer (Name/Address/Tel no/Fax no)</span>
      </td>
      <td width="70%">
        <textarea name="payer" onKeyUp="limitText(this.form.payer,this.form.countdown,260);" class="form-control" rows="3"><?php echo @$info2['0']->payer;?></textarea>
      </td>
    </tr>
    <tr>
      <td width="30%">
          <span>Mã số thuế (<i>VAT code</i>)</span>
      </td>
      <td width="70%">
          <input type="text" name="payer_code" onKeyUp="limitText(this.form.payer_code,this.form.countdown,50);" class="form-control" value="<?php echo @$info2['0']->payer_code;?>">
      </td>
    </tr>
  </table>

  <table width="100%">
    <tr>
      <td width="30%">
          <span>Người nhận (Tên/Địa chỉ/Số đt/Fax) - Consignee (Name/Address/Tel no/Fax no)</span>
      </td>
      <td width="70%">
        <textarea name="consignee" class="form-control" onKeyUp="limitText(this.form.consignee,this.form.countdown,395);" rows="3"><?php echo @$info2['0']->consignee;?></textarea>
      </td>
    </tr>
  </table>

  <table>
    <tr>
      <td style="font-size: 18px; padding-left: 40px; padding-top: 40px">
        <span><b>B. PHẦN DÀNH CHO NHÂN VIÊN CHẤP NHẬN HÀNG (ACCEPTANCE STAFF)</b></span>
      </td>
    </tr>
  </table>

  <table width="100%">
    <tr style="line-height: 18px">
      <td height="25px" width="33%" >
        <span>Số kiện <i>(No of pcs):</i></span>
      </td>
      <td width="33%">
        <span>Trọng lượng <i>(Gross weight) :</i></span>
      </td>
      <td width="34%">
        <span>Mã phục vụ <i>(Special handing code)</i></span>
      </td>
    </tr>
    <tr>
      <td>
        <textarea name="no_of_pcs_staff" class="form-control" onKeyUp="limitText(this.form.no_of_pcs_staff,this.form.countdown,30);" rows="8" style="width: 90%"><?php echo @$info2['0']->no_of_pcs_staff;?></textarea>
      </td>
      <td>
        <textarea name="gross_weight_staff" class="form-control" onKeyUp="limitText(this.form.gross_weight_staff,this.form.countdown,43);" rows="8" style="width: 90%"><?php echo @$info2['0']->gross_weight_staff;?></textarea>
      </td>
      <td>
        <textarea name="special_handing_staff" class="form-control" onKeyUp="limitText(this.form.special_handing_staff,this.form.countdown,45);" rows="8" style="width: 90%"><?php echo @$info2['0']->special_handing_staff;?></textarea>
      </td>
    </tr>
  </table>

  <table width="100%">
    <tr>
      <td width="20%">
        <span>Kích thước <i>(Dimensions)</i></span>
      </td>
      <td width="80%">
        <textarea name="dimensions" class="form-control" onKeyUp="limitText(this.form.dimensions,this.form.countdown,1600);" rows="5"><?php echo @$info2['0']->dimensions;?></textarea>
      </td>
    </tr>
  </table>

  <table width="100%">
    <tr >
      <td colspan="6" style="text-align: center;">
        <span><b>Thời gian chấp nhận hàng<i> (Time of Acceptance)</i></b></span>
      </td>
    </tr>
    <tr >
      <td width="13%" style="line-height: 30px">
        <span>Bắt đầu <i>(Begin):</i></span>
      </td>
      <td width="20%">
        <input type="date" name="begin_date" class="form-control" style="width: 80%" value="<?php echo @$info2['0']->begin_date;?>">
      </td>
      <td width="13%">
        <span>Kết thúc <i>(Finish):</i></span>
      </td>
      <td width="20%">
        <input type="date" name="finish_date" class="form-control" style="width: 80%" value="<?php echo @$info2['0']->finish_date;?>">
      </td>
      <td width="14%">
        <span>Ngày <i>(Date):</i></span>
      </td>
      <td width="20%">
        <input type="date" name="date" class="form-control" style="width: 80%" value="<?php echo @$info2['0']->date;?>">
      </td>
    </tr>
  </table>

  <table width="100%">
    <tr>
      <td style="text-align: center;" width="25%">
        <span>Nhân viên tiếp nhận hàng <i>(Acceptance staff)</i>
        <div style="padding-top: 100px">
          <span>Tên, chữ ký</span><br>
        <span><i>(Name, signature)</i></span>
        </div>

      </td>
      <td style="text-align: center;" width="25%">
        <span>Người gửi hàng <i>(Shipper)</i></span>
          <div style="padding-top: 100px">
          <span>Tên, chữ ký</span><br>
        <span><i>(Name, signature)</i></span>
        </div>
      </td>
      <td height="150px" style="text-align: center;" width="50%">
        <span><br><br>
          Người đảm bảo các thông tin ghi trên đây là đúng và nếu bất cứ phần nào trong lô hàng là hàng nguy hiểm thì các phần này đã được nêu tên chính xác và đủ điều kiện vận chuyển theo quy định hàng nguy hiểm hiện hành.
        </span><br><br>
        <span><i>
            Shipper certifies that the particulars on the face hereof are correct and that insofar as part of the consignment contains dangerous goods, such part is properly described by name and is in proper condition for carriage bu air according to the applicable Dangerous Goods Regulations</i>
        </span>
      </td>
    </tr>
  </table>

  <table width="100%">
    <tr style="line-height: 20px">
      <td height="40px">
        <span>Liên 1 <i>(1<sup>st</sup> white copy)</i>: Bộ phận xuất KVĐ <i>(AWB issuing counter)</i>; liên 2 <i>(2<sup>nd</sup> pink copy)</i>: Bộ phận thu ngân <i>(Cashier)</i>; liên 3 <i>(3<sup>nd</sup> blue copy)</i>: Tổ xuất hàng<i>(Export section)</i>; liên 4 <i>(4<sup>th</sup> yellow copy)</i> Hải quan <i>(Customs)</i>.
          </span>
      </td>
    </tr>
  </table>

  <table>
    <tr>
      <td>
        <span>
          <b>Ghi chú:</b> Thời gian bắt đầu tiếp nhận hàng tính từ khi hiện hành đầu tiên của lô hàng được cân và chỉ kết thúc khi kiện hàng cuối cùng được kiểm tra bởi an ninh sân bay
        </span><br>
        <span>
         <b>Note:</b><i> The procedure of acceptance begin from the first piece of shipment is weight to the last piece is checked by an airport security.</i>
        </span>
      </td>
    </tr>
  </table>
  </div>
  </div>
  <?php echo form_close(); ?>


</body>
</html>