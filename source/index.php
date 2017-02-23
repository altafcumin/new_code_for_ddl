<?php if (isset($_GET["alert"])): ?>
 <script type="text/javascript">
 alert("<?php echo htmlentities(urldecode($_GET["alert"])); ?>");
 </script>
 <?php endif; ?> 
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-3.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style> #extra{ display: none; }</style>
</head>
<body>
<header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-main">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   
                </div>
                <div class="collapse navbar-collapse" id="nav-main">
                    <ul class="nav navbar-nav nav-left">
                        
                         <li><a href="http://cumintechnologies.in/">Home</a></li>
                        <li class="active"><a href="#">Registration Form</a></li>
                        <li><a href="session/index.php">Registered Details</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/#header-->
<div class="container">
  <form name="rgrForm" class="form-horizontal" method="post" onsubmit="return validateForm()" action="add.php">
    <div class="form-group">
      <label class="control-label col-sm-4" for="name">Name:<span id="vld_FirstName" style="color:Red">*</span></label>
      
      <div class="col-sm-4">
        <input type="name" name="name" class="form-control" id="name" placeholder="Enter name" required>
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-4" for="designation">Designation:<span id="vld_FirstName" style="color:Red">*</span></label>
      <div class="col-sm-4">
        <select type="designation" name="designation" class="form-control" id="designation" required>
          <option value="">-Select designation-</option>
      <option value="founder">Chairman</option>
      <option value="Director">Director</option>
      <option value="President">President</option>
      <option value="Trustee">Trustee</option>
      <option value="Secretary">Secretary</option>
      <option value="Principal">Principal</option>
      <option value="Vice Principal">Vice Principal</option>
      <option value="Head Master">Head Master</option>
      <option value="Teacher">Teacher</option>
      <option value="Other">Other</option>
      
    </select>
  </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Email:</label>
      <div class="col-sm-4">
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="school_name">Name of the School:<span id="vld_FirstName" style="color:Red">*</span></label>
      <div class="col-sm-4">          
        <input type="school_name" name="school_name" class="form-control" id="school_name" placeholder="Enter school name"required>
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-4" for="address">Address:</label>
      <div class="col-sm-4">
        <input type="address" name="address" class="form-control" id="address" placeholder="Enter address">
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-4" for="city" >City: <span id="vld_FirstName" style="color:Red">*</span></label>
      <div class="col-sm-4">
        <input type="text" name="city" class="form-control" id="autocomplete" placeholder="Enter city">
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-4" for="state">State:<span id="vld_FirstName" style="color:Red">*</span></label>
      <div class="col-sm-4">
        <select type="state" name="state" class="form-control" id="state" placeholder="Select State" required>
    <option value="">-Select State-</option>
      <option value="Assam">Assam</option>
      <option value="Andra Pardesh">Andra Pardesh</option>
      <option value="Arunachal Pardesh">Arunachal Pardesh</option>
      <option value="Bihar">Bihar</option>
      <option value="Chandigarh">Chandigarh</option>
      <option value="Chhatisgarh">Chhatisgarh</option>
      <option value="Delhi">Delhi</option>
      <option value="Goa">Goa</option>
      <option value="Gujarat">Gujarat</option>
      <option value="Haryana">Haryana</option>
      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
      <option value="Jharkhand">Jharkhand</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
      <option value="Madhya Pradesh">Madhya Pradesh</option>
      <option value="Maharashtra">Maharashtra</option>
      <option value="Manipur">Manipur</option>
      <option value="Meghalaya">Meghalaya</option>
      <option value="Mizoram">Mizoram</option>
      <option value="Orissa">Orissa</option>
      <option value="Pondicherry">Pondicherry</option>
      <option value="Punjab">Punjab</option>
      <option value="Rajasthan">Rajasthan</option>
      <option value="Sikkim">Sikkim</option>
      <option value="Telangana">Telangana</option>
      <option value="Tamil Nadu">Tamil Nadu</option>
      <option value="Tripura">Tripura</option>
      <option value="Uttar Pradesh">Uttar Pradesh</option>
      <option value="Uttaranchal">Uttaranchal</option>
      <option value="West Bengal">West Bengal</option>
      
    </select>
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-4" for="office_contact">Contact(office):</label>
      <div class="col-sm-4">
        <input type="number" name="office_contact" class="form-control" id="office_contact" placeholder="Enter contact number">
      </div>
    </div><div class="form-group">
      <label class="control-label col-sm-4" for="mobile">Mobile:<span id="vld_FirstName" style="color:Red">*</span></label>
      <div class="col-sm-4">
        <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Enter mobile number" onkeypress="return isNumber(event)">
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-4" for="school_email">School Email:</label>
      <div class="col-sm-4">
        <input type="school_email" name="school_email" class="form-control" id="school_email" placeholder="Enter school email">
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-4" for="web">Web:</label>
      <div class="col-sm-4">
        <input type="web" name="web" class="form-control" id="web" placeholder="Enter website">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="web">Registered(date and time):</label>
      <div class="col-sm-4">
         <input type="datetime-local" class="form-control" name="date_time" >
      </div>
     </div>
  <div class="form-group">
      <label class="control-label col-sm-4" for="Strength">No. of Students:</label>
      <div class="col-sm-4">
        <input type="number" name="strength" class="form-control" id="Strength" placeholder="Enter total strength">
      </div>
    </div>
    
  <div class="form-group">
      <label class="control-label col-sm-4" for="classes_upto">Upto which class you cater:</label>
      <div class="col-sm-4">
        <input type="checkbox" name="caterupto" value="Preprimary" />&nbsp;PrePrimary&nbsp;
        <input type="checkbox" name="caterupto" value="Primary" /> &nbsp;Primary &nbsp;
        <input type="checkbox"  name="caterupto" value="Middle School" />&nbsp;Middle School</br>
        <input type="checkbox"  name="caterupto" value="High School" />&nbsp;High School&nbsp;
        <input type="checkbox"  name="caterupto" value="PUC/Inter/11th/12th" />&nbsp;PUC/Inter/11th/12th&nbsp;
        <input type="checkbox"  name="caterupto" value="Degree" />&nbsp;Degree
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="board">Board:</label>
      <div class="col-sm-4">
      <select type="board" name="board" class="form-control" id="board" placeholder="Enter board">
      <option value="">-Select board-</option>
      <option value="State Board">State Board</option>
      <option value="CBSE">CBSE</option>
      <option value="ICSE">ICSE</option>
      <option value="IG">IGCSE</option>
      <option value="IB">IB</option>
      
    </select>
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-4" for="board">Type:</label>
    <div class="col-sm-4">
  <label class="radio-inline">
      <input type="radio" name="gender" value="girls">Girls
    </label>
    <label class="radio-inline">
      <input type="radio" name="gender" value="boys">Boys
    </label>
  <label class="radio-inline">
      <input type="radio" name="gender" value="girls & boys">Girls & Boys
    </label>
   <label class="radio-inline">
      <input type="radio" name="gender" value="co-education">Co-Ed 
    </label>
    </div>
    </div>
  
  <div class="form-group">
      <label class="control-label col-sm-4" for="mferd_preference">Is your school following MFERD:</label>
      <div class="col-sm-4">
  <label class="radio-inline">
      <input type="radio" name="mferd" value="Yes">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="mferd" value="No">No
    </label>
    </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-4" for="previous_conference">Have you attended the last year conference:<span id="vld_FirstName" style="color:Red">*</span></label>
      <div class="col-sm-4">
  <label class="radio-inline">
      <input type="radio" checked="checked" name="lastYearConference" value="Yes" id="yes" class="static_class" >Yes
    </label>
    <label class="radio-inline">
      <input type="radio"  checked="checked" name="lastYearConference" value="No" id="no" class="static_class" >No
    </label>
    </div>
    </div>
  <div  id="extra" class="form-group">
      <label class="control-label col-sm-4" for="attended_conference" >How many conferences you attend in past:<span id="" style="color:Red">*</span></label>
      <div class="col-sm-4">
        <select type="attended_conferences" name="attended_conferences" class="form-control" id="attended_conference" placeholder="">
     <option value="">-Select the no. of conferences you attended-</option>
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      </select>
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-4" for="muslim_student">Percentage of Muslim students:</label>
      <div class="col-sm-4">
  <label class="radio-inline">
      <input type="radio" name="percentage" value="10-to-25%">10-25%
    </label>
    <label class="radio-inline">
      <input type="radio" name="percentage" value="25-to-50%">25-50%
    </label>
    <label class="radio-inline">
      <input type="radio" name="percentage" value="50-to-75%">50-75%
    </label>
    <label class="radio-inline">
      <input type="radio" name="percentage" value="75-to-100%">75-100%
    </label>
    </div>
    </div>
  
  <div class="form-group">
      <label class="control-label col-sm-4" for="deeniyat">Is deeniyat a part of your curriculum?:</label>
      <div class="col-sm-4">
    <label class="radio-inline">
      <input type="radio" name="deeniyat" value="Yes">Yes
      </label>
    <label class="radio-inline">
      <input type="radio" name="deeniyat" value="No">No
    </label>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-primary" onclick="ValidateNo();">Submit</button>
      </div>
    </div>
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/autoCities.js"></script>

   <script type="text/javascript">
      $(function(){
        $(".static_class").click(function(){
          if($(this).val() === "Yes")
            $("#extra").show();
          else
            $("#extra").hide();
        });
      });
 
</script>
<script type="text/javascript">

   function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            alert("Please enter only Numbers.");
            return false;
        }

        return true;
    }
</script>
<script>
    function ValidateNo() {
        var phoneNo = document.getElementById('txtPhoneNo');

    if (phoneNo.value == "" || phoneNo.value == null) {
            alert("Please enter your Mobile No.");
            return false;
        }
        if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
            alert("Mobile No. is not valid, Please Enter 10 Digit Mobile No.");
            return false;
        }

        alert("Success ");
        return true;
        }
</script>
</body>
 
</html>

