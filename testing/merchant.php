<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
<link href="hide-show-fields-form.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />

   
<title>Document</title>
</head>
<style>
    form {
    max-width: 900px;
    display: block;
    margin: 0 auto;
  }
  .select2-results__option {
  padding-right: 20px;
  vertical-align: middle;
}
.select2-results__option:before {
  content: "";
  display: inline-block;
  position: relative;
  height: 20px;
  width: 20px;
  border: 2px solid #e9e9e9;
  border-radius: 4px;
  background-color: #fff;
  margin-right: 20px;
  vertical-align: middle;
}
.select2-results__option[aria-selected=true]:before {
  font-family:fontAwesome;
  content: "\f00c";
  color: #fff;
  background-color: #f77750;
  border: 0;
  display: inline-block;
  padding-left: 3px;
}
.select2-container--default .select2-results__option[aria-selected=true] {
  background-color: #fff;
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
  background-color: #eaeaeb;
  color: #272727;
}
.select2-container--default .select2-selection--multiple {
  margin-bottom: 10px;
}
.select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
  border-radius: 4px;
}
.select2-container--default.select2-container--focus .select2-selection--multiple {
  border-color: #f77750;
  border-width: 2px;
}
.select2-container--default .select2-selection--multiple {
  border-width: 2px;
}
.select2-container--open .select2-dropdown--below {
  
  border-radius: 6px;
  box-shadow: 0 0 10px rgba(0,0,0,0.5);

}
.select2-selection .select2-selection--multiple:after {
  content: 'hhghgh';
}
/* select with icons badges single*/
.select-icon .select2-selection__placeholder .badge {
  display: none;
}
.select-icon .placeholder {
/*  display: none; */
}
.select-icon .select2-results__option:before,
.select-icon .select2-results__option[aria-selected=true]:before {
  display: none !important;
  /* content: "" !important; */
}
.select-icon  .select2-search--dropdown {
  display: none;
}
</style>

<body style="background-color: rgb(108, 223, 219);">
    <h1 style="text-align: center;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-weight: 1000;text-decoration: underline;margin-top: 40px;">Merchant Regisration</h1>
    <form style="padding: 20px; margin-top: 70px;" >
        <div class="form-group">
          <div class="row">
              <div class="col-3">
          <label style="font-weight: 1000;" for="name">Business Name</label>
          <input type="text" class="form-control" id="name" >
        </div>
      
       
      <div class="col-lg-3">
          <label style="font-weight:1000 ;" for="name">Merchant Operator </label>
          <input type="text" class="form-control" id="name">
        
      </div>
      <div class="col-3">
          
          <label style="font-weight: 1000;" for="name">Email</label>
          <input type="email" class="form-control" id="name" >
       
        
      </div>
      <div class="col-3">
          
          <label style="font-weight: 1000;" for="name">Date</label>
          <input type="" id="name" name="trip-start" class="form-control"
          value="2018-07-22"
          min="2018-01-01" max="2018-12-31">
       
        
      </div>
      <div class="col-3">
          
        <label style="font-weight: 1000;" for="name">Discount Bill:-  %</label>
        <input type="number" id="name" name="trip-start" class="form-control"
        >
     
      
    </div>
      
      
      <div class="col-3">
          
          <label style="font-weight: 1000;" for="name">Aggreement End Date</label>
          <input type="" id="name" name="trip-start" class="form-control"
          value="2018-07-22"
          min="2018-01-01" max="2018-12-31">
       
        
      </div>
      <div class="col-5">
          
        <label style="font-weight: 1000;" for="name">Photo</label>
        <input type="file" class="form-control" id="name" >
     
      
    </div>
     
      <div class="col-3" >
          
          <label style="font-weight: 1000;" for="name">Address Type 1</label>
          <input type="text" id="name" name="trip-start" class="form-control"
          >
       
        
      </div>
      <div class="col-3">
          
          <label style="font-weight: 1000;" for="name">Address type 2</label>
          <input type="text" id="name" name="trip-start" class="form-control"
          >
       
        
      </div>
      <div class="col-3">
          
          <label style="font-weight: 1000;" for="name">Landmark</label>
          <input type="text" id="name" name="trip-start" class="form-control"
          >
       
        
      </div>
      <div class="col-3">
          
          <label style="font-weight: 1000;" for="name">State</label>
          <select required class="form-control">
              <option disabled selected>Select State</option>
              <option>Andhra Pradesh</option>
              <option>Arunachal Pradesh</option>
              <option>Assam</option>
              <option >Bihar</option>
              <option >Chhattisgarh</option>
              <option >Delhi</option>
              <option >Goa</option>
              <option >Gujarat</option>
              <option >Haryana</option>
              <option >Himachal Pradesh	</option>
              <option >Jharkhand</option>
              <option >Karnataka</option>
              <option >Kerala</option>
              <option >Madhya Pradesh</option>
              <option >Maharashtra</option>
              <option >Manipur</option>
              <option >Meghalaya</option>
              <option >Mizoram	</option>
              <option >Nagaland</option>
              <option >Odisha</option>
              <option >Punjab</option>
              <option >Rajasthan</option>
              <option >Sikkim</option>
              <option >Tamil Nadu</option>
              <option >Telangana</option>
              <option >Tripura</option>
              <option >Uttar Pradesh</option>
              <option >Uttarakhand</option>
              <option >West Bengal</option>
          </select>
       
        
      </div>
      <div class="col-3">
          
          <label style="font-weight: 1000;" for="name">District</label>
          <input type="text" id="name" name="trip-start" class="form-control" >
       
        
      </div> 
        <div class="col-9">
          <label style="font-weight: 1000;" for="name">Working Days</label>
          <select class="js-select2" required multiple="multiple"  style="width:600px;">
            <option value="O1" data-badge="">Sunady</option>
            <option value="O2" data-badge="">Monday</option>
            <option value="O3" data-badge="">Tuesday</option>
            <option value="O4" data-badge="">Wednesday</option>
            <option value="O5" data-badge="">Thursday</option>
            <option value="O6" data-badge="">Friday</option>
            <option value="O7" data-badge="">Saturday</option>
            </select>
      
        </div>
        <div class="col-3">
          <label style="font-weight: 1000;" for="name">Start time</label>
          <input type="time" name="time" class="form-control">
      
      
        </div>
        <div class="col-3">
          <label style="font-weight: 1000;" for="name">End time</label>
          <input type="time" name="time" class="form-control">
      
        </div>
        <div class="col-3">
            <label style="font-weight: 1000;" for="seeAnotherFieldGroup">Category</label>
            <select class="form-control" id="seeAnotherFieldGroup" style="width:200px;">
                  <option value="no">select</option>
                  <option value="yes">Hospital</option>
                 
                                        <option value="yes2">Lab</option>
                                        <option value="no">Pharmacy</option>
                                        <option value="no">Agriculture</option>
                                        <option value="no">Beauty</option>
                                        <option value="no">Grooming</option>
                                        <option value="no">Fashion</option>
                                        <option value="no">Foods</option>
                                        <option value="no">Hotal</option>
                                        <option value="no">Electronic	</option>
                                        <option value="no">Grocery</option>
                                        <option value="no">Travel</option>
                                        <option value="no">Furniture</option>
                                        <option value="no">Online Brands</option>
            </select>
          </div>
          
        <div class="form-group" id="otherFieldGroupDiv">
         <div class="row">
          <div class="col-md-3">
            <label style="font-weight: 500;" for="otherField1">Hospital Name</label>
            <input type="text" class="form-control w-100" id="otherField1">
          </div>
          <div class="col-3">
            <label style="font-weight: 500;" for="otherField2">Doctor Name</label>
            <input type="text" class="form-control w-100" id="otherField2">
          </div>
          <div class="col-3">
              <label style="font-weight: 500;" for="otherField1">OPD free</label>
              <input type="tel" class="form-control w-100" id="otherField1">
            </div>
            <div class="col-3">
              <label style="font-weight: 500;" for="otherField2">Free Opd</label>
              <input type="tel" class="form-control w-100" id="otherField2">
            </div>
            <div class="col-3">
              <label style="font-weight: 500;" for="otherField1">Opd Discount :- %</label>
              <input type="tel" class="form-control w-100" id="otherField1">
            </div>
            <div class="col-3">
              <label style="font-weight: 500;" for="otherField2">Discount On Total :- %</label>
              <input type="tel" class="form-control w-100" id="otherField2">
            </div>
            <div class="col-3">
              <label style="font-weight: 500;" for="otherField1">Hospital/Doctor Specility</label>
              <input type="text" class="form-control w-100" id="otherField1">
            </div>
            
         
         </div>
          
      
        </div>
        <div class="form-group" id="otherFieldGroupDivv">
          <div class="row">
           <div class="col-3">
             <label style="font-weight: 500;" for="otherField11">Lab Name</label>
             <input type="text" class="form-control w-100" id="otherField11">
           </div>
           <div class="col-3">
             <label style="font-weight: 500;" for="otherField22">Lab Category</label>
             <select class="form-control" id="seeAnotherFieldGroup">
              <option value="no">Select...</option>
              <option value="no">Radiology</option>
              <option value="no">Pathology</option>
             
                                    <option value="no">Radiology and Pathology Both</option>
                                    </select>
           </div>
           
             
          
          </div>
           
       
         </div>
       
        
      </div>
      </div>
        
        <button style="background-color: #000000;" type="submit" class="btn btn-primary">Submit</button>
      
      </form>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
 

<script >
    $("#seeAnotherField").change(function() {
			if ($(this).val() == "yes") {
				$('#otherFieldDiv').show();
				$('#otherField').attr('required','');
				$('#otherField').attr('data-error', 'This field is required.');
			} else {
				$('#otherFieldDiv').hide();
				$('#otherField').removeAttr('required');
				$('#otherField').removeAttr('data-error');				
			}
		});
		$("#seeAnotherField").trigger("change");
		
$("#seeAnotherFieldGroup").change(function() {
			if ($(this).val() == "yes") {
				$('#otherFieldGroupDiv').show();
				$('#otherField1').attr('required','');
				$('#otherField1').attr('data-error', 'This field is required.');
        $('#otherField2').attr('required','');
				$('#otherField2').attr('data-error', 'This field is required.');
			} else {
				$('#otherFieldGroupDiv').hide();
				$('#otherField1').removeAttr('required');
				$('#otherField1').removeAttr('data-error');
        $('#otherField2').removeAttr('required');
				$('#otherField2').removeAttr('data-error');	
			}

            if ($(this).val() == "yes2") {
				$('#otherFieldGroupDivv').show();
				$('#otherField11').attr('required','');
				$('#otherField11').attr('data-error', 'This field is required.');
        $('#otherField22').attr('required','');
				$('#otherField22').attr('data-error', 'This field is required.');
			} else {
				$('#otherFieldGroupDivv').hide();
				$('#otherField11').removeAttr('required');
				$('#otherField11').removeAttr('data-error');
        $('#otherField22').removeAttr('required');
				$('#otherField22').removeAttr('data-error');	
			}


		});
		$("#seeAnotherFieldGroup").trigger("change");

        


        



        
		
</script>
<script>
  $(".js-select2").select2({
  closeOnSelect : false,
  placeholder : "",
  // allowHtml: true,
  allowClear: true,
  tags: true // создает новые опции на лету
});
</script>
</body>
</html>