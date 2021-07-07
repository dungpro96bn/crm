<?php echo form_open(get_uri("huongdan_guihang/save"), array("id" => "pdf-form3", "class" => "general-form", "role" => "form", "name" => "frm")); ?>

<html>
<head>
<title></title>
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
    .als{
        margin-bottom: 30px;
    }
    body{
        font-family: Arial;
        font-size: 14px;
    }
    .row{
        margin-top: 10px;
    }
    .awb_no{
        padding: 0px;
        margin-top: 10px;
    }
    .awb_no1{
        padding: 0px;
    }
    .awb_als{
        padding-top: 17px;
    }
    .input_pcs input{
        width: 150px;
    }

    .staff{
        text-align: center;
    }
    #alsc_handling{
        padding: 0px;
    }
    .staff_text{
        height: 150px !important ;
    }
    .alsc_input input{
        width: 100%;
    }
    #other_services{
        padding-top: 10px;
    }
    #other_services textarea{
        height: 80px;
    }
    .time_acceptance{
        padding: 0px;

    }
    .time_input input{

        margin-top: 10px;
    }
    .name_siginature{
        text-align: center;
    }
    #logo img{
        width: 100%;
    }
    .name_cty h4{
        font-family: arial;
        text-align: center;
        font-weight: 600;
        color: #006b99;
        margin-top: 10px;
    }
    .sn_alsc h4{
        font-family: arial;
        padding-top: 25px;
        text-align: right;
        font-weight: 600;
        color: #006b99;
    }
    .title h3{
        text-align: center;
        margin-top: 10px;
    }

    .title_top{
        font-weight: 600;
    }
    .form-control{

    }

.modal-dialog{
  width: 70%;
  margin: 30px auto;
}
</style>
<body>

<input value="<?php echo @$info['0']->id;?>" name="id" hidden="hidden">
<input value="<?php echo @$model_info->id; ?>" name="task_id" hidden="hidden">
<input value="<?php echo @$model_info->status_id; ?>" name="status_id" hidden="hidden">
<input value="3" name="value" hidden="hidden">
  <div>
    <div class="col-md-12 b-t pt10 list-container">
      <div class="col-md-12">
          <div class="col-md-12 col-sm-12">
              <div class="col-md-2 col-sm-2" id="logo">
                  <img src="<?php echo get_file_uri("assets/images/logo1.png");?>" height="50px">
              </div>
              <div class="col-md-3 col-sm-3 name_cty">
                  <h4><p>CÔNG TY TNHH</p></h4>
                  <h4>NHÀ GA HÀNG HÓA ALS</h4>
              </div>
              <div class="col-md-6 col-sm-6 sn_alsc">
                  <h4>S/N: ALSC001-</h4>
              </div>
          </div>

          <div class="col-md-12 col-sm-12 title">
              <h3 class="title_top">HƯỚNG DẪN GỬI HÀNG</h3>
              <h3>SHIPPER'S LETTER OF INSTRUCTIONS</h3>
          </div>
      </div>

      <div class="col-md-12 als">
        <div class="row">
          <div class="col-md-12"> 
          <span>Người gửi (Tên/Địa chỉ/Số đt/Fax)</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <span><i>Shipper (Name/Address/Tel no/Fax no)</i></span>
          </div>
          <div class="col-md-9">
            <textarea name="shipper" onKeyUp="limitText(this.form.shipper,this.form.countdown,225);" class="col-md-12 form-control" ><?php echo @$info['0']->shipper;?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <span>Mã đại lý IATA (<i>IATA Agent code</i>)</span>
          </div>
          <div class="col-md-4">
            <input type="text" class="form-control" onKeyUp="limitText(this.form.ma_daily,this.form.countdown,45);" name="ma_daily" value="<?php echo @$info['0']->ma_daily;?>">
          </div>
          <div class="col-md-2">
            <span>Mã số thuế (<i>Tax code</i>)</span>
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control" onKeyUp="limitText(this.form.mst_shipper,this.form.countdown,20);" name="mst_shipper" value="<?php echo @$info['0']->mst_shipper;?>">
          </div>
        </div>   
      </div>

      <div class="col-md-12 als">
        <div class="row">
          <div class="col-md-12">
           <span>Đơn vị yêu cầu cung cấp dịch vụ (Tên/Địa chỉ/Số đt/Fax)</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <span><i>Payer (Name/Address/Tel no/Fax no)</i></span>
          </div>
          <div class="col-md-4">
            <textarea name="payer" onKeyUp="limitText(this.form.payer,this.form.countdown,175);" class="col-md-12 form-control"><?php echo @$info['0']->payer;?></textarea>
          </div>
          <div class="col-md-2">
            <span>Mã số thuế (<i>Tax code</i>)</span>
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control" onKeyUp="limitText(this.form.mst_payer,this.form.countdown,20);" name="mst_payer" value="<?php echo @$info['0']->mst_payer;?>">
          </div>
        </div>
      </div>



      <div class="col-md-12 als">
        <div class="row">
          <div class="col-md-12">
            <span>Người nhận (Tên/Địa chỉ/Số đt/Fax)</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <span><i>Consignee (Name/Address/Tel no/Fax no)</i></span>
          </div>
          <div class="col-md-9">
            <textarea class="col-md-12 form-control" onKeyUp="limitText(this.form.consignee,this.form.countdown,355);" name="consignee"><?php echo @$info['0']->consignee;?></textarea>
          </div>
        </div>
      </div>

      <div class="col-md-12 als" id="awb">
        <div class="row">
          <div class="col-md-4 awb_als">
            <div class="col-md-3 awb_no1">
              <span>Số AWB (<i><b>AWB No.</b></i>)</span>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" onKeyUp="limitText(this.form.awb,this.form.countdown,25);" name="awb" value="<?php echo @$info['0']->awb;?>">
            </div>
          </div>
          <div class="col-md-3">
            <div>
              <span>Chuyến bay/ngày <i>(Booking flt/date) :</i></span>
            </div>
            <div>
              <input type="text" class="form-control" name="booking"  value="<?php echo @$info['0']->booking;?>">
            </div>
          </div>
          <div class="col-md-2">
            <div>
              <span>Số kiện <i>(No of pcs) :</i></span>
            </div>
            <div class="input_pcs">
              <input type="text" class="form-control" onKeyUp="limitText(this.form.so_kien,this.form.countdown,12);" name="so_kien" value="<?php echo @$info['0']->so_kien;?>">
            </div>
          </div>
          <div class="col-md-3">
            <div>
              <span>Trọng lượng <i>(Gross weight) :</i></span>
            </div>
            <div>
              <input type="text" class="form-control" name="trong_luong" onKeyUp="limitText(this.form.trong_luong,this.form.countdown,15);" value="<?php echo @$info['0']->trong_luong;?>">
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 als">
        <div class="row">
          <div class="col-md-3">
            <div>
              <span>Sân bay khởi hành <i>(Airport of departure)</i></span>
            </div>
            <div>
              <input type="text" class="form-control" name="sanbay_khoihanh" onKeyUp="limitText(this.form.sanbay_khoihanh,this.form.countdown,25);" value="<?php echo @$info['0']->sanbay_khoihanh;?>">
            </div>
          </div>
          <div class="col-md-3">
            <div>
              <span>Sân bay đến <i>(Airport of destination)</i></span>
            </div>
            <div>
              <input type="text" class="form-control" onKeyUp="limitText(this.form.sanbay_den,this.form.countdown,25);" name="sanbay_den" value="<?php echo @$info['0']->sanbay_den;?>">
            </div>
          </div>
          <div class="col-md-3">
            <div>
              <span>Hành trình <i>(Routing)</i></span>
            </div>
            <div>
              <input type="text" class="form-control" name="hanhtrinh" onKeyUp="limitText(this.form.hanhtrinh,this.form.countdown,30);" value="<?php echo @$info['0']->hanhtrinh;?>">
            </div>
          </div>
          <div class="col-md-3">
            <div>
              <span>Loại bao bì <i>(Package) :</i></span>
            </div>
            <div>
              <input type="text" class="form-control"  name="loaibaobi" onKeyUp="limitText(this.form.loaibaobi,this.form.countdown,20);" value="<?php echo @$info['0']->loaibaobi;?>">
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 als">
        <div class="row">
          <div class="col-md-3">
            <span>Tên hàng <i>(Nature of goods)</i> </span>
          </div>
          <div class="col-md-9">
            <textarea name="ten_hang"  onKeyUp="limitText(this.form.ten_hang,this.form.countdown,240);" class="col-md-12 form-control"><?php echo @$info['0']->ten_hang;?></textarea>
          </div>
        </div>
      </div>

      <div class="col-md-12 als">
        <div class="row">
          <div class="col-md-6">
            <div class="col-md-4 awb_no">
              <span>Hướng dẫn phục vụ <i>(Handling information) :</i></span>
            </div>
            <div class="col-md-8">
              <textarea class="col-md-12 form-control" onKeyUp="limitText(this.form.huongdan_phucvu,this.form.countdown,110);" style="height: 90px; text-transform: lowercase" name="huongdan_phucvu"><?php echo @$info['0']->huongdan_phucvu;?></textarea>
            </div>
          </div>
          <div class="col-md-2">
            <div>
              <span>Khai báo giá trị v/c <i>(Declared Value for carriage)</i></span>
            </div>
            <div class="input_pcs">
              <input type="text" class="form-control" name="giatri_vc" onKeyUp="limitText(this.form.giatri_vc,this.form.countdown,12);" value="<?php echo @$info['0']->giatri_vc;?>">
            </div>
          </div>
          <div class="col-md-2">
            <div>
              <span>Khai báo giá trị hải quan <i>(Declared Value for Customs)</i></span>
            </div>
            <div class="input_pcs">
              <input type="text" class="form-control" name="giatri_haiquan" onKeyUp="limitText(this.form.giatri_haiquan,this.form.countdown,16);" value="<?php echo @$info['0']->giatri_haiquan;?>">
            </div>
          </div>
          <div class="col-md-2">
            <div>
              <span>Hình thức thanh toán <i>(Term of payment)</i></span><br>
            </div>

            <div class="input_pcs input_pay">
              <input type="text" class="form-control" name="hinhthuc_thanhtoan" onKeyUp="limitText(this.form.hinhthuc_thanhtoan,this.form.countdown,12);" value="<?php echo @$info['0']->hinhthuc_thanhtoan;?>">
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 als">
        <div class="row">
          <div class="col-md-12 staff">
            <h4>PHẦN DÀNH CHO NHÂN VIÊN CHẤP NHẬN HÀNG <i>(FOR ACCEPTANCE STAFF)</i></h4>
          </div>
        </div>
      </div>

      <div class="col-md-12 als">
        <div class="row">
          <div class="col-md-4">
            <div>
              <span>
                Tổng kiện <i>(Total pieces)</i>
              </span>
            </div>
            <div>
              <textarea class="col-md-12 staff_text form-control" onKeyUp="limitText(this.form.tongkien_nv,this.form.countdown,550);" name="tongkien_nv"><?php echo @$info['0']->tongkien_nv;?></textarea>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <span>
                Trọng lượng <i>(Gross weight)</i>
              </span>
            </div>
            <div>
              <textarea class="col-md-12 staff_text form-control" onKeyUp="limitText(this.form.trongluong_nv,this.form.countdown,550);" name="trongluong_nv"><?php echo @$info['0']->trongluong_nv;?></textarea>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <span>
                Kích thước <i>(Dimensions)</i>
              </span>
            </div>
            <div>
              <textarea class="col-md-12 staff_text form-control" onKeyUp="limitText(this.form.kinhthuoc_nv,this.form.countdown,550);" name="kinhthuoc_nv"><?php echo @$info['0']->kinhthuoc_nv;?></textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 als">
        <div class="row">
          <div class="col-md-7">
            <div>
              <span>Mã phục vụ <i>(Handling code)</i></span>
            </div>
            <div class="awb_no col-md-12">
              <div class="col-md-4" id="alsc_handling">
                <span>Mã phục vụ theo quy định của ALSC <i>(ALSC's handling code) :</i></span>
              </div>
              <div class="col-md-8 alsc_input">
                <input type="text" class="form-control" onKeyUp="limitText(this.form.ma_alsc,this.form.countdown,20);"  name="ma_alsc"  value="<?php echo @$info['0']->ma_alsc;?>">
              </div>
            </div>
            <div class="awb_no col-md-12">
              <div class="col-md-4" id="alsc_handling">
                <span>Mã phục vụ theo IATA <i>(Special handling code) :</i></span>
              </div>
              <div class="col-md-8 alsc_input">
                <input type="text" class="form-control" onKeyUp="limitText(this.form.ma_iata,this.form.countdown,30);" name="ma_iata"  value="<?php echo @$info['0']->ma_iata;?>">
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div>
              <span>Dịch vụ khách yêu cầu thêm như ván kê, giá gỗ <i>(other services) :</i></span>
            </div>
            <div id="other_services">
              <textarea name="other_sevices" onKeyUp="limitText(this.form.other_sevices,this.form.countdown,100);" class="col-md-12 form-control"><?php echo @$info['0']->other_sevices;?></textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 als">
        <div class="row">
          <div class="col-md-3">
            <div>
              <span>Thời điểm tiếp nhận hàng <i>(Time of acceptance)</i></span>
            </div>
            <div class="time_acceptance col-md-5">
              <span>Bắt đầu <i>(Start)</i></span>
            </div>
            <div class="time_input col-md-7" style="padding-right: 0px">
                <input type="date" name="start_date" class="form-control" style="padding: 0px"  value="<?php echo @$info['0']->start_date;?>">
            </div>
            <div class="time_acceptance col-md-5">
              <span>Kết thúc <i>(Finish)</i></span>
            </div>
            <div class="time_input col-md-7" style="padding-right: 0px">
                <input type="date" name="finish_date" class="form-control" style="padding: 0px"  value="<?php echo @$info['0']->finish_date;?>">
            </div>
            <div class="time_acceptance col-md-5">
              <span>Ngày <i>(Date)</i></span>
            </div>
            <div class="time_input col-md-7" style="padding-right: 0px">
              <input type="date" name="date" class="form-control" style="padding: 0px"  value="<?php echo @$info['0']->date;?>">
            </div>
          </div>
          <div class="col-md-2 name_siginature">
            <div>
              <span>Nhân viên tiếp nhận hàng <i>(Acceptance staff)</i></span>
            </div>
            <div style="padding-top: 70px;">
              <span>Tên, chữ ký</span><br>
              <span><i>(Name, signature)</i></span>
            </div>
          </div>
          <div class="col-md-2 name_siginature">
            <div>
              <span>Người gửi hàng <i>(Shipper)</i></span>
            </div>
            <div style="padding-top: 90px;">
              <span>Tên, chữ ký</span><br>
              <span><i>(Name, signature)</i></span>
            </div>
          </div>
          <div class="col-md-5">
            <div class="name_siginature">
              <span>Người gửi hàng cam đoan <i>(Shipper's certification)</i></span><br>
              <span>
                Tôi xác nhận rằng các chi tiết lô hàng này được xác định chính xác
                theo tên gọi, các thông tin liên quan đến lô hàng được khai báo
                đúng sự thật và xin chịu trách nhiệm trước pháp luật về lời khai đó.
                Trong trường hợp lô hàng có chứa hàng nguy hiểm, hàng hóa đã được chuẩn bị theo quy định vận chuyển hàng nguy hiểm
              </span><br>
              <span>
                <i>
                  I certify that the contain of this consignment is properly identified by name,
                  other information relating to the shipment is true and I am liable for my declaration before law. Insofar as any part of this consignment contains dangerous goods, such part is in proper condition for carriage by air according to applicable DGR
                </i>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <b>Note</b>
          <span>- Quá trình tiếp nhận hàng bắt đầu từ khi kiện hàng đầu tiên của lô hàng được cân và kết thúc khi kiện hàng cuối cùng của lô hàng được kiểm tra bởi an ninh sân bay</span><br>
          <p style="margin-left: 40px;"><i>(The procedure of acceptance start when the first piece of shipment is weighed and finishes when the last piece of shipment is checked by an air port security officer)</i></p>
          <p style="margin-left: 35px;">- Các dịch vụ của ALSC là các dịch vụ thuộc dịch vụ vận chuyển hàng không nên ALSC tuân thủ theo các quy định về bồi thường theo các công ước và quy định có liên quan áp dụng trong vận chuyển hàng không quốc tế <i>(For services provided by the Handling Company are part of aviation transportation, the Handling Company's liability shall be subject to international conventions and regulations applicable in aviation transportation)</i></p>
          <p style="margin-left: 35px;">
            - Dành cho khách gửi hàng nội địa của VN: Đề nghị ủy quyền cho VN tiếp nhận lô hàng được mô tả ở đây để chuẩn bị và thay mặt chúng tôi cập nhật và lưu trữ thông tin vận đơn hàng không và các tài liệu cần thiết khác và gửi lô hàng theo các quy định được công bố tại website <a href="https://www.vietnamairlines.com">www.vietnamairlines.com.</a><br>
            <i>(For VN's domostic shippers: VN is hereby requested and authorised upon receipt of the consignment described herein to prepare, update and store information of the Air Waybill and other necessary documents on our behalf and dispatch the consignment in accordance with the rules promulgated on website <a href="https://www.vietnamairlines.com">www.vietnamairlines.com.</a>)</i>
          </p>
          <p style="margin-left: 35px;">
            -Liên trắng số 1 <i>(1<sup>st</sup> white copy)</i>: Bộ phận xuất KVĐ <i>(AWB issuing counter)</i>; liên hồng số 2 <i>(2<sup>nd</sup> pink copy)</i>: Bộ phận thu ngân <i>(Cashier)</i>; liên xanh số 3 <i>(3<sup>nd</sup> blue copy)</i>: Tổ khai thác xuất <i>(Export section)</i>; liên vàng số 4 <i>(4<sup>th</sup> yellow copy)</i> Hải quan <i>(Customs)</i>.
          </p>
          </div>
          
        </div>
      </div>

    </div>
  </div>
  <?php echo form_close(); ?>

</body>
</html>
