<?php echo form_open(get_uri("huongdan_guihang/save"), array("id" => "pdf-form1", "class" => "general-form", "role" => "form", "name" => "frm")); ?>
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
.als{
  margin-bottom: 30px;
}
body{
  font-family: arial;
  font-size: 16px;
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
.name_cty{
  font-family: time new roman;
  text-align: center;
  font-weight: 600;
  margin-top: 10px;
}
.sn_alsc h5{
  font-family: arial;
  padding-top: 35px;
  text-align: right;
}
.title h3{
  text-align: center;
  margin-top: 10px;
}

.title_top{
  font-weight: 600;
}
.form-control{
border: 1px solid #ccc !important;
    border-radius: 5px !important;
}
.modal-dialog{
  width: 70%;
  margin: 30px auto;
}
</style>

<body>

<input hidden="hidden" name="value" id="value" value="1">
<input value="<?php echo @$info1['0']->id;?>" name="id" hidden="hidden">
<input value="<?php echo @$model_info->id; ?>" name="task_id" hidden="hidden">
<input value="<?php echo @$model_info->status_id; ?>" name="status_id" hidden="hidden">
<input hidden="hidden" value="1" id="vl">
    <div class="col-md-12 b-t pt10 list-container">
        <div class="col-md-12 col-sm-12">
            <div class="col-md-2 col-sm-2" id="logo">
                <img src="<?php echo get_file_uri("assets/images/ncts.jpg"); ?>">
            </div>
            <div class="col-md-8 col-sm-3 name_cty">
                <h3 class="title_top">H?????NG D???N G???I H??NG</h3>
                <h4>SHIPPER'S LETTER OF INSTRUCTIONS FOR DESPATCH</h4>
            </div>
            <div class="col-md-2 col-sm-6 sn_alsc">
                <h5>FM. COM01/01 - 02</h5>
            </div>
        </div>

        <div class=" col-sm-12 als">
            <div class="row">
                <div class=" col-sm-12">
                    <span>Ng?????i g???i (T??n/?????a ch???/S??? ??t/Fax)</span>
                </div>
            </div>
            <div class="row">
                <div class=" col-sm-3" style="float: left;">
                    <span><i>Shipper (Name/Address/Tel no/Fax no)</i></span>
                </div>
                <div class="col-sm-9" style="float: left;">
                    <textarea name="shipper" onKeyUp="limitText(this.form.shipper,this.form.countdown,160);"  class="form-control"><?php echo @$info1['0']->shipper;?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3" style="float: left;">
                    <span>M?? s??? thu??? (<i>VAT code</i>)</span>
                </div>
                <div class=" col-sm-9" style="float: left;">
                    <input type="text" name="mst_shipper" onKeyUp="limitText(this.form.mst_shipper,this.form.countdown,125);" value="<?php echo @$info1['0']->mst_shipper;?>" class="form-control">
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 als">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <span>Ng?????i y??u c???u d???ch v??? (T??n/?????a ch???/S??? ??t/Fax)</span>
                </div>
            </div>
            <div class="row">

                <div class="col-md-3 col-sm-3" style="float: left;">
                    <span><i>Payer (Name/Address/Tel no/Fax no)</i></span>
                </div>
                <div class="col-md-9 col-sm-9" style="float: left;">
                    <textarea id="payer" name="payer" onKeyUp="limitText(this.form.payer,this.form.countdown,160);"  class="col-md-12 form-control"><?php echo @$info1['0']->payer;?></textarea>
                </div>

            </div>

            <div class="row">
                <div>
                    <div class="col-md-3 col-sm-3" style="float: left;">
                        <span>M?? s??? thu??? (<i>VAT code</i>)</span>
                    </div>
                    <div class="col-md-9 col-sm-9" style="float: left;">
                        <input type="text" name="mst_payer" onKeyUp="limitText(this.form.mst_payer,this.form.countdown,125);" value="<?php echo @$info1['0']->mst_payer;?>" class="form-control">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 als">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <span>Ng?????i nh???n (T??n/?????a ch???/S??? ??t/Fax)</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3" style="float: left;">
                    <span><i>Consignee (Name/Address/Tel no/Fax no)</i></span>
                </div>
                <div class="col-md-9 col-sm-9" style="float: left;">
                    <textarea class="col-md-12 form-control" onKeyUp="limitText(this.form.consignee,this.form.countdown,350);" name="consignee"><?php echo @$info1['0']->consignee;?></textarea>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 als" id="awb">
            <div class="row">
                <div class="col-md-4 col-sm-4 awb_als">
                    <div class="col-md-3 col-sm-3 awb_no1" style="float: left;">
                        <span>S??? AWB (<i><b>AWB No.</b></i>)</span>
                    </div>
                    <div class="col-md-8 col-sm-8" style="float: left;">
                        <input type="text" name="awb" onKeyUp="limitText(this.form.awb,this.form.countdown,25);" class="form-control" value="<?php echo @$info1['0']->awb;?>">
                    </div>
                </div>
                <div class="col-md-3 col-sm-3" style="float: left;">
                    <div >
                        <span>Chuy???n bay/ng??y <i>(Booking flt/date) :</i></span>
                    </div>
                    <div>
                        <input type="text" name="booking" onKeyUp="limitText(this.form.booking,this.form.countdown,15);" class="form-control" value="<?php echo @$info1['0']->booking;?>">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2" style="float: left;">
                    <div>
                        <span>S??? ki???n <i>(No of pcs) :</i></span>
                    </div>
                    <div class="input_pcs">
                        <input type="text" name="so_kien" onKeyUp="limitText(this.form.so_kien,this.form.countdown,12);" class="form-control" value="<?php echo @$info1['0']->so_kien;?>">
                    </div>
                </div>
                <div class="col-md-3 col-sm-3" style="float: left;">
                    <div>
                        <span>Tr???ng l?????ng <i>(Gross weight) :</i></span>
                    </div>
                    <div>
                        <input type="text" name="trong_luong" onKeyUp="limitText(this.form.trong_luong,this.form.countdown,16);" class="form-control" value="<?php echo @$info1['0']->trong_luong;?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 als">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div>
                        <span>S??n bay kh???i h??nh <i>(Airport of departure)</i></span>
                    </div>
                    <div>
                        <input type="text" name="sanbay_khoihanh" onKeyUp="limitText(this.form.sanbay_khoihanh,this.form.countdown,20);" class="form-control" value="<?php echo @$info1['0']->sanbay_khoihanh;?>">
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div>
                        <span>S??n bay ?????n <i>(Airport of destination)</i></span>
                    </div>
                    <div>
                        <input type="text" name="sanbay_den" onKeyUp="limitText(this.form.sanbay_den,this.form.countdown,20);" class="form-control" value="<?php echo @$info1['0']->sanbay_den;?>">
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div>
                        <span>H??nh tr??nh <i>(Requested routing)</i></span>
                    </div>
                    <div>
                        <input type="text" name="hanhtrinh" onKeyUp="limitText(this.form.hanhtrinh,this.form.countdown,30);" class="form-control" value="<?php echo @$info1['0']->hanhtrinh;?>">
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div>
                        <span>Lo???i bao b?? <i>(Package) :</i></span>
                    </div>
                    <div>
                        <input type="text" name="loaibaobi" onKeyUp="limitText(this.form.loaibaobi,this.form.countdown,20);" class="form-control" value="<?php echo @$info1['0']->loaibaobi;?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 als">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <span>T??n h??ng <i>(Nature of goods)</i> </span>
                </div>
                <div class="col-md-9 col-sm-9">
                    <textarea name="ten_hang" onKeyUp="limitText(this.form.ten_hang,this.form.countdown, 220);" class="col-md-12 col-sm-12 form-control" ><?php echo @$info1['0']->ten_hang;?></textarea>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 als">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="col-md-4 col-sm-4 awb_no">
                        <span>H?????ng d???n ph???c v??? <i>(Handling information) :</i></span>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <textarea name="huongdan_phucvu" onKeyUp="limitText(this.form.huongdan_phucvu,this.form.countdown, 120);" class="col-md-12 col-sm-12 form-control" style="height:70px"><?php echo @$info1['0']->huongdan_phucvu;?></textarea>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div>
                        <span>Khai b??o gi?? tr??? v/c <i>(Declared Value for carriage)</i></span>
                    </div>
                    <div class="input_pcs">
                        <input type="text" name="giatri_vc" onKeyUp="limitText(this.form.giatri_vc,this.form.countdown, 13);" class="form-control" value="<?php echo @$info1['0']->giatri_vc;?>">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div>
                        <span>Khai b??o gi?? tr??? h???i quan <i>(Declared Value for Customs)</i></span>
                    </div>
                    <div class="input_pcs">
                        <input type="text" name="giatri_haiquan" onKeyUp="limitText(this.form.giatri_haiquan,this.form.countdown, 13);" class="form-control" value="<?php echo @$info1['0']->giatri_haiquan;?>">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div>
                        <span>M?? ph???c v???  theo IATA <i>(Special handling code)</i></span>
                    </div>
                    <div class="input_pcs input_pay">
                        <input type="text" name="iata_code" onKeyUp="limitText(this.form.iata_code,this.form.countdown, 13);" class="form-control" value="<?php echo @$info1['0']->iata_code;?>">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div>
                        <span>H??nh th???c thanh to??n <i>(Term of payment)</i></span>
                    </div>
                    <div class="input_pcs input_pay">
                        <input type="text" name="hinhthuc_thanhtoan" onKeyUp="limitText(this.form.hinhthuc_thanhtoan,this.form.countdown, 13);" class="form-control" value="<?php echo @$info1['0']->hinhthuc_thanhtoan;?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 als">
            <div class="row">
                <div class="col-md-12 col-sm-12 staff">
                    <h4>PH???N D??NH CHO NH??N VI??N CH???P NH???N H??NG <i>(FOR ACCEPTANCE STAFF)</i></h4>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 als">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div>
              <span>
                S??? ki???n <i>(No of pieces)</i>
              </span>
                    </div>
                    <div>
                        <textarea name="tongkien_nv" onKeyUp="limitText(this.form.tongkien_nv,this.form.countdown, 600);" class="col-md-12 col-sm-12 staff_text form-control" ><?php echo @$info1['0']->tongkien_nv;?></textarea>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div>
              <span>
                Tr???ng l?????ng <i>(Gross weight)</i>
              </span>
                    </div>
                    <div>
                        <textarea name="trongluong_nv" onKeyUp="limitText(this.form.trongluong_nv,this.form.countdown, 600);" class="col-md-12 col-sm-12 staff_text form-control" ><?php echo @$info1['0']->trongluong_nv;?></textarea>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div>
              <span>
                K??ch th?????c <i>(DIMS)</i>
              </span>
                    </div>
                    <div>
                        <textarea name="kinhthuoc_nv" onKeyUp="limitText(this.form.kinhthuoc_nv,this.form.countdown, 600);" class="col-md-12 col-sm-12 staff_text form-control" ><?php echo @$info1['0']->kichthuoc_nv;?></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 als">
            <div class="row">
                <div class="col-md-7 col-sm-7">
                    <div>
                        <span>M?? ph???c v??? theo quy ?????nh c???a NCTS <i>(NCTS's handling code)</i></span>
                    </div>
                    <div class="awb_no col-md-12 col-sm-12">
                        <div class="col-md-4 col-sm-4" id="alsc_handling">
                            <span>M?? ph?? x??? l?? :</span>
                        </div>
                        <div class="col-md-8 col-sm-8 alsc_input">
                            <input type="text" name="ma_xuly" onKeyUp="limitText(this.form.ma_xuly,this.form.countdown, 40);" class="form-control" value="<?php echo @$info1['0']->ma_xuly;?>">
                        </div>
                    </div>
                    <div class="awb_no col-md-12 col-sm-12">
                        <div class="col-md-4 col-sm-4" id="alsc_handling">
                            <span>M?? ph?? l??u kho:</span>
                        </div>
                        <div class="col-md-8 col-sm-8 alsc_input">
                            <input type="text" name="ma_luukho" onKeyUp="limitText(this.form.ma_luukho,this.form.countdown, 40);" class="form-control" value="<?php echo @$info1['0']->ma_luukho;?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5">
                    <div>
                        <span>D???ch v??? kh??ch y??u c???u th??m nh?? v??n k??, gi?? g??? <i>(other services) :</i></span>
                    </div>
                    <div id="other_services">
                        <textarea name="other_sevices" onKeyUp="limitText(this.form.other_sevices,this.form.countdown, 100);" class="col-md-12 col-sm-12 form-control" ><?php echo @$info1['0']->other_sevices;?></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 als">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div>
                        <span>Th???i ??i???m ti???p nh???n h??ng <i>(Time of acceptance)</i></span>
                    </div>
                    <div class="time_acceptance col-md-5 col-sm-5">
                        <span>B???t ?????u <i>(Begin)</i></span>
                    </div>
                    <div class="time_input col-md-7 col-sm-7">
                        <input type="date" name="start_date" onKeyUp="limitText(this.form.start_date,this.form.countdown, 15);" class="form-control" value="<?php echo @$info1['0']->start_date;?>">
                    </div>
                    <div class="time_acceptance col-md-5 col-sm-5">
                        <span>K???t th??c <i>(Finish)</i></span>
                    </div>
                    <div class="time_input col-md-7 col-sm-7">
                        <input type="date" name="finish_date" onKeyUp="limitText(this.form.finish_date,this.form.countdown, 15);" class="form-control" value="<?php echo @$info1['0']->finish_date;?>">
                    </div>
                    <div class="time_acceptance col-md-5 col-sm-5">
                        <span>Ng??y <i>(Date)</i></span>
                    </div>
                    <div class="time_input col-md-7 col-sm-7">
                        <input type="date" name="date" onKeyUp="limitText(this.form.date,this.form.countdown, 15);" class="form-control" value="<?php echo @$info1['0']->date;?>">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 name_siginature">
                    <div>
                        <span>Nh??n vi??n ti???p nh???n h??ng <i>(Acceptance staff)</i></span>
                    </div>
                    <div style="padding-top: 90px;">
                        <span>T??n, ch??? k??</span><br>
                        <span><i>(Name, signature)</i></span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 name_siginature">
                    <div>
                        <span>Ng?????i g???i h??ng <i>(Shipper)</i></span>
                    </div>
                    <div style="padding-top: 90px;">
                        <span>T??n, ch??? k??</span><br>
                        <span><i>(Name, signature)</i></span>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5">
                    <div class="name_siginature">
                        <span>Ng?????i g???i h??ng cam ??oan <i>(Shipper's certification)</i></span><br>
                        <span>
                T??i x??c nh???n r???ng c??c chi ti???t l?? h??ng n??y ???????c x??c ?????nh ch??nh x??c
                theo t??n g???i, c??c th??ng tin li??n quan ?????n l?? h??ng ???????c khai b??o
                ????ng s??? th???t v?? xin ch???u tr??ch nhi???m tr?????c ph??p lu???t v??? l???i khai ????.
                Trong tr?????ng h???p l?? h??ng c?? ch???a h??ng nguy hi???m, h??ng h??a ???? ???????c chu???n b??? theo quy ?????nh v???n chuy???n h??ng nguy hi???m
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

        <div class="col-md-12 col-sm-12">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <b>Note</b>
                    <span>- Qu?? tr??nh ti???p nh???n h??ng b???t ?????u t??? khi ki???n h??ng ?????u ti??n c???a l?? h??ng ???????c c??n v?? k???t th??c khi ki???n h??ng cu???i c??ng c???a l?? h??ng ???????c ki???m tra b???i an ninh s??n bay</span><br>
                    <p style="margin-left: 40px;"><i>(The procedure of acceptance start when the first piece of shipment is weighed and finishes when the last piece of shipment is checked by an air port security officer)</i></p>
                    <p style="margin-left: 35px;">- C??c d???ch v??? c???a NCTS l?? c??c d???ch v??? thu???c d???ch v??? v???n chuy???n h??ng kh??ng n??n NCTS tu??n th??? theo c??c quy ?????nh v??? b???i th?????ng theo c??c c??ng ?????c v?? quy ?????nh c?? li??n quan ??p d???ng trong v???n chuy???n h??ng kh??ng qu???c t??? <i>(For services provided by the Handling Company are part of aviation transportation, the Handling Company's liability shall be subject to international conventions and regulations applicable in aviation transportation)</i></p>
                    <p style="margin-left: 35px;">- D??nh cho kh??ch h??ng n???i c???a VN: ????? ngh??? v?? ???y quy???n cho VN ti???p nh???n l?? h??ng ???????c m?? t??? ??? ????y ????? chu???n b??? v?? thay m???t ch??ng t??i c???p nh???t v?? l??u tr??? th??ng tin v???n ????n h??ng kh???ng v?? c??c t??i li???u c???n thi???t kh??c g???i l?? h??ng theo quy ?????nh ???????c c??ng b??? t???i website <a href="">www.vietnamairlines</a>.<br>(For VN's domestic shippers: VN is hereby requested and authorised upon receipt of the consignment described herein to perpare, update and store information of the Air Waybill and other necessary documents on our behalf and dispatch the consignment in accordance with the rules promulgated on website <a href="">www.vietnamairlines</a> )</i></p>
                    <p style="margin-left: 35px;">
                        -Li??n tr???ng s??? 1 <i>(1<sup>st</sup> white copy)</i>: B??? ph???n xu???t KV?? <i>(AWB issuing counter)</i>; li??n h???ng s??? 2 <i>(2<sup>nd</sup> pink copy)</i>: B??? ph???n thu ng??n <i>(Cashier)</i>; li??n xanh s??? 3 <i>(3<sup>nd</sup> blue copy)</i>: T??? khai th??c xu???t <i>(Export section)</i>; li??n v??ng s??? 4 <i>(4<sup>th</sup> yellow copy)</i> H???i quan <i>(Customs)</i>.
                    </p>
                </div>

            </div>
        </div>
    </div
</body>
<?php echo form_close(); ?>
</html>