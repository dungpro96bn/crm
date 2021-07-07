<?php echo form_open(get_uri("huongdan_guihang/save"), array("id" => "pdf-form", "class" => "general-form", "role" => "form")); ?>
<!DOCTYPE html>
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
}
table tr td{
  padding-left: 10px;
}
.form-group{
  height: 35px;
}
#to_main{
  margin-top: 80px;
}
#total{
  margin-top: 50px
}
#flight{
  margin-top: 50px
}
#main_m{
  margin-top: 30px
}
#infor{
  margin-top: 30px;
}
.mobile{
  padding-left: 50px
}
#time_deli{
  margin-top: 30px
}
.tks{
  margin-top: 50px
}
.modal-dialog{
    width: 70%;
}
.form-control{
    border: 1px solid #ccc !important;
    border-radius: 5px !important;
}
</style>


<body>
<input value="<?php echo @$info['0']->id;?>" name="id" hidden="hidden">
<input value="<?php echo @$model_info->id; ?>" name="task_id" hidden="hidden">
<input value="<?php echo @$model_info->status_id; ?>" name="status_id" hidden="hidden">
<div class="col-md-12 b-t pt10 list-container">

  <div id="top">
    <div class="row">
      <div class="col-md-3 col-sm-3" style="text-align: center;">
        <img style="height:100px;" src="<?php echo get_file_uri("assets/images/logo-glx.png"); ?>">
      </div>
      <div class="col-md-9 col-sm-9">
        <div style="border-bottom: 2px solid #1205a8;margin-top: 10px">        
          <span style="font-size: 20px; color: #1205a8; font-weight: bold;">GALAXY LOGISTICS CO., LTD</span><br>        
        </div>
        <div style="padding-top: 5px">
          <span>Add.: No 21/115 Alley, Nui Truc Str, Kim Ma Ward, Ba Dinh, Hanoi, Vietnam</span><br>
          <span>Liaison off.:  Unit 2401, 24/F, Tower, 101 Lang Ha st., Dong Da dist., Hanoi, Vietnam</span><br>
          <span>Tel: 84 - 24 - 5624946  Fax: 84 - 24 - 5624947  Email: info@galaxy-vietnam.com</span>
        </div>
      </div>
    </div>
  </div>

  <div id="to_main">
    <div class="row">
      <div class="form-group">
        <label for="title" class="col-md-1 col-sm-1 ">To:</label>
        <div class=" col-md-11 col-sm-11" style="padding-right: 0px">
            <input type="text" name="to" onKeyUp="limitText(this.form.to,this.form.countdown,80);" value="<?php echo @$info['0']->to;?>"  class="form-control" style="font-weight: bold; text-transform: uppercase; width: 50%">
        </div>
      </div>
      <div class="form-group">
        <label for="title" class="col-md-1 col-sm-1 ">Attn:</label>
        <div class=" col-md-11 col-sm-11" style="padding-right: 0px">
            <input type="text" name="attn" id="fname" onKeyUp="limitText(this.form.attn,this.form.countdown,80);" value="<?php echo @$info['0']->attn;?>"  onkeyup="myFunction()" class="form-control" style=" width: 50%">
        </div>
      </div>
      <div class="form-group">
        <label for="title" class="col-md-1 col-sm-1 ">Date:</label>
        <div class=" col-md-11 col-sm-11" style="padding-right: 0px">
            <input type="Date" name="date"  value="<?php echo @$info['0']->date;?>" class="form-control" style=" text-transform: uppercase; width: 50%">
        </div>
      </div>
      <div class="form-group">
        <label for="title" class="col-md-1 col-sm-1 ">Re:</label>
        <div class=" col-md-11 col-sm-11" style="padding-right: 0px">
            <input type="text" name="re" onKeyUp="limitText(this.form.re,this.form.countdown,90);" value="<?php echo @$info['0']->re;?>" id="title" class="form-control" style="  width: 50%">
        </div>
      </div>  
    </div>
  </div>

  <div id="total">
    <div class="row">
      <div class="form-group">
        <label for="title" class="col-md-1 col-sm-1 ">Total:</label>
        <div class=" col-md-11 col-sm-11" style="padding-right: 0px">
            <textarea name="total_all" onKeyUp="limitText(this.form.total_all,this.form.countdown,200);" class="form-control" rows="3" style="width: 50%" ><?php echo @$info['0']->total_all;?></textarea>
        </div>
      </div>  
    </div>
  </div>

  <div id="flight">
    <div class="row">
      <div class="form-group">
        <label for="title" class="col-md-1 col-sm-1 ">Flight:</label>
        <div class=" col-md-5 col-sm-5" style="padding-right: 0px">
            <input type="text" name="flight_from" onKeyUp="limitText(this.form.flight_from,this.form.countdown,40);" value="<?php echo @$info['0']->flight_from;?>" class="form-control" style="  width: 50%; text-transform: uppercase;font-weight: bold; text-align: center;" placeholder="EY972/14APR18">
        </div>
        <div class=" col-md-6 col-sm-6" style="padding-right: 0px">
            <input type="text" name="flight_from_1" onKeyUp="limitText(this.form.flight_from_1,this.form.countdown,30);" value="<?php echo @$info['0']->flight_from_1;?>" class="form-control" style="  width: 45%; text-transform: uppercase;font-weight: bold; text-align: center;" placeholder="HAN-AUH">
        </div>
      </div> 
      <div class="form-group">
        <label for="title" class="col-md-1 col-sm-1 "></label>
        <div class=" col-md-5 col-sm-5" style="padding-right: 0px">
            <input type="text" name="flight_to" onKeyUp="limitText(this.form.flight_to,this.form.countdown,40);" value="<?php echo @$info['0']->flight_to;?>"  class="form-control" style="  width: 50%; text-transform: uppercase;text-align: center; font-weight: bold;" placeholder="EY081/17APR18">
        </div>
        <div class=" col-md-6 col-sm-6" style="padding-right: 0px">
            <input type="text" name="flight_to_1" onKeyUp="limitText(this.form.flight_to_1,this.form.countdown,30);" value="<?php echo @$info['0']->flight_to_1;?>" class="form-control" style="  width: 45%; text-transform: uppercase;text-align: center;font-weight: bold;" placeholder="AUH-MXP">
        </div>
      </div> 
    </div>
  </div>

  <div id="main_m">
    <div class="row">
      <div  class="col-md-12 col-sm-12">
        <div style="font-weight: bold;">
         <span>Dear</span>&nbsp;<span id="demo"><?php echo @$info['0']->attn;?></span><br>
        </div>
        <div style="padding-top: 20px">
          <span>Pls kindly deliver to Noi Bai airport warehouse for loading arrangement. </span><br>
          <span>Pls contact our following airport operator for cargo release:</span>
        </div>    
      </div>
    </div>
  </div>
  <div id="infor">
    <div class="row mobile">
      <div class="col-md-12 col-sm-12">        
        <span>Mr. Hoang  /  Mobile :    0904 459 458</span><br>
        <span>Mr. Khanh  /  Mobile :    0989 095 012</span>
      </div>
    </div>
  </div>

  <div id="time_deli">
    <div class="row">
      <div class="form-group">
        <label for="title" class="col-md-2 col-sm-2 ">Time of delivery:</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="Date" name="time_delivery" value="<?php echo @$info['0']->time_delivery;?>"  class="form-control" style=" text-transform: uppercase; width: 50%">
        </div>
      </div>
      <div class="form-group">
        <label for="title" class="col-md-2 col-sm-2 ">Cut off time:</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="datetime" name="cut_off_time" size="5" maxlength="5" value="<?php echo @$info['0']->cut_off_time;?>" class="form-control textfield" placeholder="hh:mm" style=" font-weight: bold; width: 50%; text-transform: uppercase" onkeypress="return isNumber(event,this)">
        </div>
      </div>
      <div class="form-group">
        <label for="title" class="col-md-2 col-sm-2 ">Warehouse:</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="warehouse" onKeyUp="limitText(this.form.warehouse,this.form.countdown,70);" value="<?php echo @$info['0']->warehouse;?>"  class="form-control" style=" text-transform: uppercase;font-weight: bold; width: 50%" placeholder="NCTS – 01B1A02">
        </div>
      </div>
      <div class="form-group">
        <label for="title" class="col-md-2 col-sm-2 ">Code:</label>
        <div class=" col-md-10 col-sm-10" style="padding-right: 0px">
            <input type="text" name="code" onKeyUp="limitText(this.form.code,this.form.countdown,75);" value="<?php echo @$info['0']->code;?>" class="form-control" style=" text-transform: uppercase;font-weight: bold; width: 50%" placeholder="HAWB#GLX1804032">
        </div>
      </div>

      <div class="col-md-12 col-sm-12 tks">
        <span>Thank for your kind attention & support,</span><br>
        <span>Best regards,</span>
      </div>
      <div class="col-md-12 col-sm-12 tks" style="font-weight: bold; font-size: 16px">
        <span>GALAXY LOGISTICS CO., LTD</span><br>
        <span>Nguyen Thi Hop</span>
      </div>
    </div>
  </div>
  

</div>
  <?php form_close();?>
</body>
</html>
<script>
    function myFunction() {
        var x = document.getElementById("fname").value;
        document.getElementById("demo").innerHTML = x;
    }
</script>

<script>
  function isNumber(evt,num) {
    // get keyboard event and then look its keyCode
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    //check the event is numeric
    if (charCode > 31 && (charCode < 48 || charCode > 57) &&charCode!=186) {

      return false;
    }

    // Check accordingly every new number must include regular date format

    if(num.value.length == 0 && (charCode==48 || charCode==49 || charCode==50))
    {
      return true;
    }
    else if(num.value.length == 1 && (charCode>=48 && charCode<=51))
    {
      return true;
    }
    else if(num.value.length == 2 && (charCode>=48 && charCode<=53))
    {
      num.value=num.value+":";
      return true;
    }
    else if(num.value.length == 3 && (charCode>=48 && charCode<=53))
    {
      //alert("Bingo");
      return true;
    }
    else if(num.value.length == 4 && (charCode>=48 && charCode<=57))
    {
      return true;
    }
    else
    {
      return false;
    }

    return true;
  }

</script>