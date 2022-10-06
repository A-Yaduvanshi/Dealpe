<?php
include "../api/connection.php";
$sql="select * from sales";
$query=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>dealpay</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="Cache-control" content="no-cache">

    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</head>

<body class="d-flex flex-column h-100p" onload="FreshworksWidget('hide', 'launcher');">
    <!-- navbar -->
   
        <!--BREADCRUM CONTAINER -->
        <div class="container pd-x-0">
            <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
                <div>
                    <nav aria-label="breadcrumb">
                        <img style="height: 150px;width: 150px;"
                        src="./Green Gradient Healthcare Medical Clinic Logo Symbol (1).jpg">
                
                    </nav>
                    <h4 style="color:#951010;font-weight: bold;" class="mg-b-0 tx-spacing--1">Sales Executive Data..</h4>
                </div>
                <div class="d-md-block">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">
                       <a class="text-decoration-none text-bg-danger" href="./salesregis.html">Add New Customer </a>
                    </button>
                    
                    <!-- <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- <div class="modal-header"> -->
                                    <!-- <h5 class="modal-title" id="exampleModalLabel">New message</h5> -->
                                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                <!-- </div> -->
                                <!-- <div class="modal-body"> -->
                                    <!-- <form>
                                        <div class="mb-3">
                                            <label for="lead_id" class="col-form-label">Name</label>
                                            <input type="text" class="form-control" id="lead_id">
                                        </div>
                                        <div class="mb-3">
                                            <label for="lead_id" class="col-form-label">DOB</label>
                                            <input type="text" class="form-control" id="lead_id">
                                        </div>
                                        <div class="mb-3">
                                            <label for="lead_id" class="col-form-label">Photo</label>
                                            <input type="file" class="form-control" id="lead_id">
                                        </div>
                                        <div class="mb-3">
                                            <label for="first_name" class="col-form-label">Email ID</label>
                                            <input type="email" class="form-control" id="first_name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="last_name" class="col-form-label">Mobile No.</label>
                                            <input type="tel" class="form-control" id="last_nam"e>
                                        </div>
                                        <div class="mb-3">
                                            <label for="last_name" class="col-form-label">Gender</label>
                                            <input type="text" class="form-control" id="last_nam"e>
                                           
                                        </div>
                                        <div class="mb-3">
                                            <label for="last_name" class="col-form-label">Sales Commission</label>
                                            <input type="text" class="form-control" id="last_nam"e>
                                           
                                        </div>
                                        <div class="mb-3">
                                            <label for="last_name" class="col-form-label">Address</label>
                                            <input type="text" class="form-control" id="last_nam"e>
                                        </div>
                                       
                                         
                                    </form> -->
                                <!-- </div> -->
                                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div> -->
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!--BREADCRUM CONTAINER -->
        <!-- Main content -->
        <div class="container pd-x-0">
            <div data-label="Leave Applications" class="df-example demo-table mg-t-25">
                <div class="table-responsive">
                    <table class="table tx-13" id="example1">
                        <thead>
                            <th>S.No.</th>
                            <th>Owner_image</th>
                            <th>Customer_name</th>
                            <th>Date_of_birth</th>
                            <th>Customer_email</th>
                            <th>Password</th>
                            <th>gender</th>
                            <th>Occupation</th>
                            <th>Address</th>
                            <th>Landmark</th>
                            <th>Colony</th>
                            <th>state</th>
                            <th>Distict</th>
                            <th>mobile_no</th>
                            <th>pin_code</th>
                            
                        </thead>
                        <tbody>

<?php while ($res = mysqli_fetch_row($query)) { ?>

    <tr>
        <td class="text-center"><?php echo $res[0]; ?></td>
        <td  class="text-center"> <img src="<?php echo $res['14']; ?>"
         alt="Girl in a jacket" width="50" height="60"></td>
        <td class="text-center"><?php echo $res['1']; ?></td> 
        <td class="text-center"><?php echo $res['2']; ?></td>
        <td class="text-center"><?php echo $res['3']; ?></td>
        <td class="text-center"><?php echo $res['4']; ?></td>
        <td class="text-center"><?php echo $res['5']; ?></td>
        <td class="text-center"><?php echo $res['6']; ?></td>
        <td class="text-center"><?php echo $res['7']; ?></td>
        <td class="text-center"><?php echo $res['8']; ?></td>
        <td class="text-center"><?php echo $res['9']; ?></td>
        <td class="text-center"><?php echo $res['10']; ?></td>
        <td class="text-center"><?php echo $res['11']; ?></td>
        <td class="text-center"><?php echo $res['12']; ?></td>
        <td class="text-center"><?php echo $res['13']; ?></td>
         
        <!-- <td class="text-center"><?php echo $res['14']; ?></td>
        <td class="text-center"><?php echo $res['15']; ?></td> -->
        <!-- <td class="no-print">
            <a href="http://localhost/D/api/DeleteMerchant.php?id=<?php echo $res['id']; ?>" 
            class="btn btn-danger btn-icon btn-xs text-white" data-toggle="tooltip" title="Delete"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                    </path>
                    <line x1="10" y1="11" x2="10" y2="17"></line>
                    <line x1="14" y1="11" x2="14" y2="17"></line>
                </svg></a>

        </td> -->
    </tr>


<?php } ?>

</tbody>
                        <!-- <tbody>
                            <tr>
                                <td>1</td>
                                <td >abc</td>
                                <td >12-7-1995</td>
                                <td>info@gmail.com</td>
                                <td>1234567</td>
                                <td><img style="height: 10px; width:10px;" src="Green Gradient Healthcare Medical Clinic Logo Symbol (1).jpg"></td>
                                <td>male</td>
                                <td>noida</td>
                                <td>$12345</td>
                                <td class="no-print">

                                  

                                    <a onclick="getDelete('72')" class="btn btn-danger btn-icon btn-xs text-white"
                                        data-toggle="tooltip" title="Delete"><svg viewBox="0 0 24 24" width="24"
                                            height="24" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg></a>

                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td >abc</td>
                                <td >12-7-1995</td>
                                <td>info@gmail.com</td>
                                <td>1234567</td>
                                <td><img style="height: 10px; width:10px;" src="Green Gradient Healthcare Medical Clinic Logo Symbol (1).jpg"></td>
                                <td>male</td>
                                <td>noida</td>
                                <td>$12345</td>
                                <td class="no-print">

                                  

                                    <a onclick="getDelete('72')" class="btn btn-danger btn-icon btn-xs text-white"
                                        data-toggle="tooltip" title="Delete"><svg viewBox="0 0 24 24" width="24"
                                            height="24" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg></a>

                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td >abc</td>
                                <td >12-7-1995</td>
                                <td>info@gmail.com</td>
                                <td>1234567</td>
                                <td><img style="height: 10px; width:10px;" src="Green Gradient Healthcare Medical Clinic Logo Symbol (1).jpg"></td>
                                <td>male</td>
                                <td>noida</td>
                                <td>$12345</td>
                                <td class="no-print">

                                  

                                    <a onclick="getDelete('72')" class="btn btn-danger btn-icon btn-xs text-white"
                                        data-toggle="tooltip" title="Delete"><svg viewBox="0 0 24 24" width="24"
                                            height="24" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg></a>

                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td >abc</td>
                                <td >12-7-1995</td>
                                <td>info@gmail.com</td>
                                <td>1234567</td>
                                <td><img style="height: 10px; width:10px;" src="Green Gradient Healthcare Medical Clinic Logo Symbol (1).jpg"></td>
                                <td>male</td>
                                <td>noida</td>
                                <td>$12345</td>
                                <td class="no-print">

                                  

                                    <a onclick="getDelete('72')" class="btn btn-danger btn-icon btn-xs text-white"
                                        data-toggle="tooltip" title="Delete"><svg viewBox="0 0 24 24" width="24"
                                            height="24" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg></a>

                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td >abc</td>
                                <td >12-7-1995</td>
                                <td>info@gmail.com</td>
                                <td>1234567</td>
                                <td><img style="height: 10px; width:10px;" src="Green Gradient Healthcare Medical Clinic Logo Symbol (1).jpg"></td>
                                <td>male</td>
                                <td>noida</td>
                                <td>$12345</td>
                                <td class="no-print">

                                  

                                    <a onclick="getDelete('72')" class="btn btn-danger btn-icon btn-xs text-white"
                                        data-toggle="tooltip" title="Delete"><svg viewBox="0 0 24 24" width="24"
                                            height="24" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg></a>

                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td >abc</td>
                                <td >12-7-1995</td>
                                <td>info@gmail.com</td>
                                <td>1234567</td>
                                <td><img style="height: 10px; width:10px;" src="Green Gradient Healthcare Medical Clinic Logo Symbol (1).jpg"></td>
                                <td>male</td>
                                <td>noida</td>
                                <td>$12345</td>
                                <td class="no-print">

                                  

                                    <a onclick="getDelete('72')" class="btn btn-danger btn-icon btn-xs text-white"
                                        data-toggle="tooltip" title="Delete"><svg viewBox="0 0 24 24" width="24"
                                            height="24" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg></a>

                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td >abc</td>
                                <td >12-7-1995</td>
                                <td>info@gmail.com</td>
                                <td>1234567</td>
                                <td><img style="height: 10px; width:10px;" src="Green Gradient Healthcare Medical Clinic Logo Symbol (1).jpg"></td>
                                <td>male</td>
                                <td>noida</td>
                                <td>$12345</td>
                                <td class="no-print">

                                  

                                    <a onclick="getDelete('72')" class="btn btn-danger btn-icon btn-xs text-white"
                                        data-toggle="tooltip" title="Delete"><svg viewBox="0 0 24 24" width="24"
                                            height="24" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg></a>

                                </td>
                            </tr>
                           
                        </tbody> -->
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="leavedetails" class="modal fade effect-scale" role="dialog">
        <div class="modal-dialog modal-dialog2 modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Leave Application Details</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form role="form" id="leavedetails_form" action="">
                    <div class="modal-body">
                        <table class="table mb0 table-striped table-bordered examples">
                            <tr>
                                <th width="15%">Name</th>
                                <td width="35%"><span id='name'></span></td>
                                <th width="15%">Employee ID</th>
                                <td width="35%"><span id="employee_id"></span>
                                    <span class="text-danger"></span>
                                </td>

                            </tr>
                            <tr>
                                <th>Submitted By</th>
                                <td><span id="appliedby"></span></td>
                                <th>Leave Type</th>
                                <td><span id="leave_type"></span>
                                    <input id="leave_request_id" name="leave_request_id" placeholder="" type="hidden"
                                        class="form-control" />
                                    <span class="text-danger"></span>
                                </td>
                            </tr>
                            <tr>
                                <th>Leave</th>
                                <td><span id='leave_from'></span> - <label> </label><span id='leave_to'> </span> (<span
                                        id='days'></span>)
                                    <span class="text-danger"></span>
                                </td>
                                <th>Apply Date</th>
                                <td><span id="applied_date"></span></td>
                            </tr>
                            <tr>

                                <th>Status</th>
                                <td>
                                    <label class="radio-inline mg-r-5">
                                        <input type="radio" value="pending" name="status" checked>Pending </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="approve" name="status">Approve </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="disapprove" name="status">Disapprove
                                    </label>
                                    <span class="text-danger"></span>
                                </td>
                                <th>Reason</th>
                                <td><span id="remark"> </span></td>
                            </tr>
                            <tr>
                                <th>Note</th>
                                <td colspan="4">
                                    <div id="reason">
                                        <textarea class="form-control" style="" rows="1" id="detailremark"
                                            name="detailremark" placeholder=""></textarea>
                                        <span class="text-danger"></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary submit_schsetting "
                            data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="addleave" class="modal fade " role="dialog">
        <div class="modal-dialog modal-dialog2 modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Leave Request</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form role="form" id="addleave_form" method="post" enctype="multipart/form-data" action="">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col-sm-4">
                                <div class="form-group ">
                                    <label>Role</label><small class="text-danger"> *</small>
                                    <select name="role" id="role" class="custom-select"
                                        onchange="getEmployeeName(this.value)">
                                        <option value="">Select</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Teacher</option>
                                        <option value="3">Accountant</option>
                                        <option value="4">Librarian</option>
                                        <option value="26">Master trainer</option>
                                        <option value="27">driver </option>
                                        <option value="28">HOD</option>
                                        <option value="29">Security</option>
                                        <option value="30">Jr. Accountant</option>
                                        <option value="31">House keeping</option>
                                        <option value="32">physics teacher</option>
                                        <option value="33">Event Manager</option>
                                        <option value="34">Student</option>
                                    </select>
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Name</label><small class="text-danger"> *</small>
                                    <select name="empname" id="empname" value="" onchange="getLeaveTypeDDL(this.value)"
                                        class="custom-select">
                                        <option value="" selected>Select</option>
                                    </select>
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group ">
                                    <label>Apply Date</label>
                                    <input type="text" id="applydate" name="applieddate" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group  ">
                                    <label>Leave Types</label>
                                    <div id="leavetypeddl">
                                        <select name="leave_type" id="leave_type" class="custom-select">
                                            <option value="">Select</option>
                                            <option value="2">Sick leave</option>
                                            <option value="10">Paid Leave</option>
                                            <option value="19">urgent work</option>
                                            <option value="21">emergency</option>
                                            <option value="23">Anish leave</option>
                                            <option value="24">Akshay Leaves</option>
                                            <option value="25">shaily leave</option>
                                            <option value="26">Campus Leave</option>
                                            <option value="27">casual leave </option>
                                        </select>
                                    </div>
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Leave From</label><br /><span id="remark"> </span>
                                    <input type="text" name="leave_from" id="leaves_from" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Leave Upto</label><br /><span id="remark"> </span>
                                    <input type="text" name="leave_to" id="leaves_upto" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Reason</label><br />
                                    <textarea name="reason" id="reason" rows="1" class="form-control"></textarea>
                                    <input type="hidden" name="leaverequestid" id="leaverequestid">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group" id="reason">
                                    <label>Note</label>
                                    <textarea class="form-control" rows="1" id="remark" name="remark"
                                        placeholder=""></textarea>
                                    <span class="text-danger"></span>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group ">
                                    <label>Attach Document</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file" name="userfile">
                                        <label class="custom-file-label" for="file">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group d-flex">
                                    <label>Status </label>
                                    <div class="custom-control custom-radio mg-l-10">
                                        <input type="radio" id="pending" name="addstatus" class="custom-control-input"
                                            value="pending" checked>
                                        <label class="custom-control-label" for="pending">Pending</label>
                                    </div>

                                    <div class="custom-control custom-radio mg-l-10">
                                        <input type="radio" id="approve" name="addstatus" class="custom-control-input"
                                            value="approve" checked>
                                        <label class="custom-control-label" for="approve">Approve</label>
                                    </div>

                                    <div class="custom-control custom-radio mg-l-10">
                                        <input type="radio" id="disapprove" name="addstatus"
                                            class="custom-control-input" value="disapprove" checked>
                                        <label class="custom-control-label" for="disapprove">Reject</label>
                                    </div>

                                    <span class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary submit_addLeave "
                            data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Save</button>
                        <button type="button" style="display: none;" id="clearform" onclick="clearForm(this.form)"
                            class="btn btn-primary submit_addLeave "
                            data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            var date_format = 'dd.mm.yyyy';
        });

        $(document).ready(function () {
            var date_format = 'dd.mm.yyyy';
            $('#payment_date').datepicker({
                dateFormat: 'dd-mm-yy',
                autoclose: true
            });
        });

        $(document).ready(function () {
            $('.detail_popover').popover({
                placement: 'right',
                title: '',
                trigger: 'hover',
                container: 'body',
                html: true,
                content: function () {
                    return $(this).closest('td').find('.fee_detail_popover').html();
                }
            });
        });

        function getDelete(id) {
            var result = confirm("Are you sure you want to delete the selected leave request?");
            if (result) {
                $.ajax({
                    url: "https://newui.campus365.io/admin/leaverequest/remove/" + id,
                    type: "POST",

                    success: function (res) {
                        successMsg('Record Delete Successfully');
                        window.location.reload(true);
                    },
                    error: function (xhr) { // if error occured
                        alert("Error occured.please try again");
                    },
                    complete: function () {

                    }
                });
            }
        }

        function addLeave() {
            $('input:radio[name=addstatus]').attr('checked', false);
            $('input[type=text]').val('');
            $('textarea[name="reason"]').text('');
            $('textarea[name="remark"]').text('');
            $("#resetbutton").click();
            $("#clearform").click();
            $('input:radio[name=addstatus]')[0].checked = true;

            var date_format = 'dd.mm.yyyy';
            $('#leaves_from').datepicker({
                dateFormat: 'dd-mm-yy',
                autoclose: true
            });

            $('#applydate').datepicker({
                dateFormat: 'dd-mm-yy',
                autoclose: true
            });

            $('#leaves_upto').datepicker({
                dateFormat: 'dd-mm-yy',
                autoclose: true
            });
            var date = '2022-08-29';
            $('input[type=text][name=applieddate]').val(new Date(date).toString("dd-MM-yyyy"));

            $('#addleave').modal({
                show: true,
                backdrop: 'static',
                keyboard: false
            });
        }


        function getRecord(id) {
            $('input:radio[name=status]').attr('checked', false);
            var base_url = 'https://newui.campus365.io/';
            $.ajax({
                url: base_url + 'admin/leaverequest/leaveRecord',
                type: 'POST',
                data: { id: id },
                dataType: "json",
                success: function (result) {
                    $('input[name="leave_request_id"]').val(result.id);
                    $('#employee_id').html(result.employee_id);
                    $('#name').html(result.name);
                    $('#leave_from').html(new Date(result.leave_from).toString("dd-MM-yyyy"));
                    $('#leave_to').html(new Date(result.leave_to).toString("dd-MM-yyyy"));
                    $('#leave_type').html(result.type);
                    $('#days').html(result.leave_days + ' Days');
                    $('#remark').html(result.employee_remark);
                    $('#applied_date').html(new Date(result.date).toString("dd-MM-yyyy"));
                    $('#appliedby').html(result.applied_by);
                    $("#detailremark").text(result.admin_remark);
                    if (result.status == 'approve') {
                        $('input:radio[name=status]')[1].checked = true;
                    } else if (result.status == 'pending') {
                        $('input:radio[name=status]')[0].checked = true;
                    } else if (result.status == 'disapprove') {
                        $('input:radio[name=status]')[2].checked = true;
                    }
                }
            });
            $('#leavedetails').modal({
                show: true,
                backdrop: 'static',
                keyboard: false
            });
        };



        $(document).on('click', '.submit_schsetting', function (e) {
            var $this = $(this);
            $this.button('loading');
            $.ajax({
                url: 'https://newui.campus365.io/admin/leaverequest/leaveStatus',
                type: 'post',
                data: $('#leavedetails_form').serialize(),
                dataType: 'json',
                success: function (data) {
                    if (data.status == "fail") {
                        var message = "";
                        $.each(data.error, function (index, value) {
                            message += value;
                        });
                        //errorMsg(message);
                        $('.toast-body').html(message);
                        $('.toast').toast('show');
                    } else {
                        //successMsg(data.message);
                        if (data.status) {
                            $('.toast-body').html(data.message);
                            $('.toast').toast('show');
                        }
                        window.location.reload(true);
                    }
                    $this.button('reset');
                }
            });
        });

        function checkStatus(status) {


            if (status == 'approve') {

                $("#reason").hide();
            } else if (status == 'pending') {

                $("#reason").hide();
            } else if (status == 'disapprove') {

                $("#reason").show();
            }

        }


        $(document).ready(function (e) {
            $("#addleave_form").on('submit', (function (e) {

                e.preventDefault();
                $.ajax({
                    url: "https://newui.campus365.io/admin/leaverequest/addLeave",
                    type: "POST",
                    data: new FormData(this),
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        if (data.status == "fail") {
                            var message = "";
                            $.each(data.error, function (index, value) {
                                message += value;
                            });
                            $('.toast-body').html(message);
                            $('.toast').toast('show');
                        } else {
                            if (data.status) {
                                $('.toast-body').html(data.message);
                                $('.toast').toast('show');
                            }
                            window.location.reload(true);
                        }
                    }
                });
            }));
        });


        function getEmployeeName(role) {
            var ne = "";
            var base_url = 'https://newui.campus365.io/';
            $("#empname").html('<option value=>Select</option>');
            var div_data = "";
            $.ajax({
                type: "POST",
                url: base_url + "admin/staff/getEmployeeByRole",
                data: { 'role': role },
                dataType: "json",
                success: function (data) {
                    $.each(data, function (i, obj) {
                        div_data += "<option value='" + obj.id + "' >" + obj.name + " " + obj.surname + " " + "(" + obj.employee_id + ")</option>";
                    });

                    $('#empname').append(div_data);
                }
            });
        }

        function setEmployeeName(role, id = '') {
            var ne = "";
            var base_url = 'https://newui.campus365.io/';
            $("#empname").html("<option value=>Select</option>");
            var div_data = "";
            $.ajax({
                type: "POST",
                url: base_url + "admin/staff/getEmployeeByRole",
                data: { 'role': role },
                dataType: "json",
                success: function (data) {
                    $.each(data, function (i, obj) {
                        if (obj.employee_id == id) {
                            ne = 'selected';
                        } else {
                            ne = "";
                        }

                        div_data += "<option value='" + obj.id + "' " + ne + " >" + obj.name + " " + obj.surname + " " + "(" + obj.employee_id + ")</option>";
                    });

                    $('#empname').append(div_data);
                }
            });
        }

        function getLeaveTypeDDL(id, lid = '') {
            var base_url = 'https://newui.campus365.io/';
            $.ajax({
                url: base_url + 'admin/leaverequest/countLeave/' + id,
                type: 'POST',
                data: { lid: lid },
                success: function (result) {
                    $("#leavetypeddl").html(result);
                }
            });
        }

        function editRecord(id) {
            var leave_from = '05/01/2018';
            var leave_to = '05/10/2018';
            $("#resetbutton").click();
            $('textarea[name="reason"]').text('');
            $('textarea[name="remark"]').text('');
            $('input:radio[name=addstatus]').attr('checked', false);

            var base_url = 'https://newui.campus365.io/';
            $.ajax({
                url: base_url + 'admin/leaverequest/leaveRecord',
                type: 'POST',
                data: { id: id },
                dataType: "json",
                success: function (result) {

                    leave_from = result.leavefrom;
                    leave_to = result.leaveto;

                    setEmployeeName(result.staff_role, result.employee_id);
                    getLeaveTypeDDL(result.staff_id, result.lid);
                    $('#role').val(result.staff_role);

                    $('select[name="role"] option[value="' + result.user_type + '"]').attr("selected", "selected");
                    $('input[name="applieddate"]').val(new Date(result.date).toString("dd/MM/yyyy"));
                    $('#leaves_from').val(result.leave_from);
                    $('#leaves_upto').val(result.leave_to);
                    $('input[name="filename"]').val(result.document_file);
                    $('input[name="leavedates"]').val(result.leave_from + '-' + result.leave_to);

                    $('input[name="leaverequestid"]').val(id);
                    $('textarea[name="reason"]').text(result.employee_remark);
                    $('textarea[name="remark"]').text(result.admin_remark);

                    if (result.status == 'approve') {
                        $('input:radio[name=addstatus]')[1].checked = true;
                    } else if (result.status == 'pending') {
                        $('input:radio[name=addstatus]')[0].checked = true;
                    } else if (result.status == 'disapprove') {
                        $('input:radio[name=addstatus]')[2].checked = true;
                    }
                }
            });
            var date_format = 'dd.mm.yyyy';

            $('#applieddate').datepicker({
                format: date_format,
                autoclose: true
            });

            $('#leaves_from').datepicker({
                dateFormat: 'dd-mm-yy',
                autoclose: true
            });

            $('#applydate').datepicker({
                dateFormat: 'dd-mm-yy',
                autoclose: true
            });

            $('#leaves_upto').datepicker({
                dateFormat: 'dd-mm-yy',
                autoclose: true
            });

            $('#addleave').modal({
                show: true,
                backdrop: 'static',
                keyboard: false
            });
        }
        ;

        function clearForm(oForm) {

            var elements = oForm.elements;



            for (i = 0; i < elements.length; i++) {

                field_type = elements[i].type.toLowerCase();

                switch (field_type) {

                    case "text":
                    case "password":

                    case "hidden":

                        elements[i].value = "";
                        break;

                    case "select-one":
                    case "select-multi":
                        elements[i].selectedIndex = "";
                        break;

                    default:
                        break;
                }
            }
        }

    </script>

    <script>

        //Filepicker
        eval(function (p, a, c, k, e, d) { e = function (c) { return c.toString(36) }; if (!''.replace(/^/, String)) { while (c--) { d[c.toString(a)] = k[c] || c.toString(a) } k = [function (e) { return d[e] }]; e = function () { return '\\w+' }; c = 1 }; while (c--) { if (k[c]) { p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]) } } return p }('$(\'#5\').4(\'3\',2(){6 0=$(1).7();$(1).a(\'.9-8-c\').b(0)})', 13, 13, 'fileName|this|function|change|on|customFile|var|val|file|custom|next|html|label'.split('|'), 0, {}))
        //Off-Canvas
        $(function () {
            'use strict'
            eval(function (p, a, c, k, e, d) { e = function (c) { return c.toString(36) }; if (!''.replace(/^/, String)) { while (c--) { d[c.toString(a)] = k[c] || c.toString(a) } k = [function (e) { return d[e] }]; e = function () { return '\\w+' }; c = 1 }; while (c--) { if (k[c]) { p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]) } } return p }('$(\'.5-4-3\').1(\'2\',6(e){e.7();d 0=$(b).a(\'8\');$(0).9(\'c\')});', 15, 15, 'target|on|click|menu|canvas|off|function|preventDefault|href|addClass|attr|this|show|var|'.split('|'), 0, {}))
            eval(function (p, a, c, k, e, d) { e = function (c) { return c.toString(36) }; if (!''.replace(/^/, String)) { while (c--) { d[c.toString(a)] = k[c] || c.toString(a) } k = [function (e) { return d[e] }]; e = function () { return '\\w+' }; c = 1 }; while (c--) { if (k[c]) { p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]) } } return p }('$(\'.2-1 .6\').5(\'4\',3(0){0.b();$(7).9(\'.2-1\').8(\'a\')});', 12, 12, 'e|canvas|off|function|click|on|close|this|removeClass|closest|show|preventDefault'.split('|'), 0, {}))
            eval(function (p, a, c, k, e, d) { e = function (c) { return c.toString(36) }; if (!''.replace(/^/, String)) { while (c--) { d[c.toString(a)] = k[c] || c.toString(a) } k = [function (e) { return d[e] }]; e = function () { return '\\w+' }; c = 1 }; while (c--) { if (k[c]) { p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]) } } return p }('$(b).a(\'8 9\',c(e){e.h();6(!$(e.5).2(\'.0-1-d\').4){g 7=$(e.5).2(\'.0-1\').4;6(!7){$(\'.0-1.3\').f(\'3\')}}});', 18, 18, 'off|canvas|closest|show|length|target|if|offCanvas|click|touchstart|on|document|function|menu||removeClass|var|stopPropagation'.split('|'), 0, {}))
        });
    </script>
    <script src="https://newui.campus365.io/backend/assets-timetable/js/jquery.min.js"></script>
    <script src="https://newui.campus365.io/backend/lib/jquery/jquery.min.js"></script>
    <script src="https://newui.campus365.io/backend/lib/jqueryui/jquery-ui.min.js"></script>
    <script src="https://newui.campus365.io/backend/lib/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="https://newui.campus365.io/backend/dist/js/moment.min.js"></script>
    <script src="https://newui.campus365.io/backend/lib/fullcalendar/fullcalendar.min.js"></script>
    <script src="https://newui.campus365.io/backend/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://newui.campus365.io/backend/lib/feather-icons/feather.min.js"></script>
    <script src="https://newui.campus365.io/backend/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="https://newui.campus365.io/backend/lib/prismjs/prism.js"></script>
    <script src="https://newui.campus365.io/backend/lib/parsleyjs/parsley.min.js"></script>
    <script src="https://newui.campus365.io/backend/lib/jquery.flot/jquery.flot.js"></script>
    <script src="https://newui.campus365.io/backend/lib/jquery.flot/jquery.flot.stack.js"></script>
    <script src="https://newui.campus365.io/backend/lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="https://newui.campus365.io/backend/lib/chart.js/Chart.min.js"></script>
    <script src="https://newui.campus365.io/backend/lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="https://newui.campus365.io/backend/lib/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="https://newui.campus365.io/backend/lib/peity/jquery.peity.min.js"></script>
    <script src="https://newui.campus365.io/backend/lib/select2/js/select2.min.js"></script>
    <script src="https://newui.campus365.io/backend/lib/quill/quill.min.js"></script>
    <script src="https://newui.campus365.io/backend/assets-new/js/dashforge.sampledata.js"></script>
    <script src="https://newui.campus365.io/backend/assets-new/js/dashforge.mail.js"></script>
    <script src="https://newui.campus365.io/backend/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="https://newui.campus365.io/backend/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script
        src="https://newui.campus365.io/backend/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script
        src="https://newui.campus365.io/backend/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <link href="https://newui.campus365.io/backend/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" />
    <link href="https://newui.campus365.io/backend/assets-new/css/dataTables.colVis.min.css" rel="stylesheet" />
    <script src="https://newui.campus365.io/backend/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="https://newui.campus365.io/backend/plugins/colorpicker/bootstrap-colorpicker.js"></script>
    <script src="https://newui.campus365.io/backend/lib/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="https://newui.campus365.io/backend/lib/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="https://newui.campus365.io/backend/lib/js-cookie/js.cookie.js"></script>
    <script src="https://newui.campus365.io/backend/assets-new/js/dashforge.js"></script>
    <script src="https://newui.campus365.io/backend/assets-new/js/calendar-events.js"></script>
    <script src="https://newui.campus365.io/backend/assets-new/js/xlsx.full.min.js"></script>
    <script type="text/javascript" src="https://newui.campus365.io/backend/custom/campus365-custom-scripts.js"></script>
    <script type="text/javascript"
        src="https://newui.campus365.io/backend/lib/datatables.net/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript"
        src="https://newui.campus365.io/backend/lib/datatables.net/js/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://newui.campus365.io/backend/lib/datatables.net/js/jszip.min.js"></script>
    <script type="text/javascript" src="https://newui.campus365.io/backend/lib/datatables.net/js/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://newui.campus365.io/backend/lib/datatables.net/js/buttons.colVis.min.js"></script>
    <script type="text/javascript"
        src="https://newui.campus365.io/backend/lib/datatables.net/js/buttons.html5.min.js"></script>
    <script type="text/javascript"
        src="https://newui.campus365.io/backend/lib/datatables.net/js/dataTables.fixedColumns.min.js"></script>
    <script type="text/javascript" src="https://newui.campus365.io/backend/dist/js/bootstrap-select.min.js"></script>
    <script src="https://newui.campus365.io/backend/plugins/tinymce/tinymce.min.js"></script>
    <!-- Timetable JS Files -->

    <script src="https://newui.campus365.io/backend/assets-timetable/js/jquery.magnific-popup.js"></script>
    <script src="https://newui.campus365.io/backend/assets-timetable/js/timetable.js"></script>
    <!--------------------------------------------------->
    <script src="https://newui.campus365.io/backend/assets-new/js/anime.min.js"></script>
    <style>
        .border-on-footer {
            color: rgb(116, 118, 120) !important;
            position: sticky;
            bottom: 0;
            background-color: #951010;
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 99999;
        }

        @media only screen and (min-width: 600px) {
            .border-on-footer {
                display: none;
            }
        }
    </style>
    
   <!-- mail-compose -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-129815719-3', 'auto'],
            ['_trackPageview'],
            ['_setDomain', 'none'],
            ['_setAllowLinker', 'true'],
            ['_setAllowHash', 'false'],
            ['_link'],
            ['_linkByPost'],
            ['network._trackPageview']
        );

        $(document).on('click', '.dropdown-menu-right', function (e) {
            e.stopPropagation();
        });

        $(document).ready(function () {
            var ga = document.createElement('script');
            ga.src = ('https:' == document.location.protocol
                ? 'https://ssl'
                : 'http://www') + '.google-analytics.com/ga.js';
            ga.setAttribute('async', 'true');
            document.documentElement.firstChild.appendChild(ga);
        });
    </script>

    <script>
        var HW_config = {
            selector: ".headway",
            account: "xdj0jJ"
        }
    </script>
    <script async src="https://cdn.headwayapp.co/widget.js"></script>


    <script>
        function goBack() {
            window.history.back();
        }
    </script>



    <div class="pos-fixed b-50 l-10 z-index-9999">
        <div class="toast" role="alert" data-delay="5000" aria-live="assertive" aria-atomic="true">
            <div class="toast-body alert-solid alert-black">
            </div>
        </div>
    </div>

    <script type="text/javascript">

        //TOAST
        $(document).ready(function () {
        });


        //TOOLTIP
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle-second="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();

        function complete_event(id, status) {
            $.ajax({
                url: "https://newui.campus365.io/admin/calendar/markcomplete/" + id,
                type: "POST",
                data: { id: id, active: status },
                dataType: 'json',
                success: function (res) {
                    if (res.status == "fail") {
                        var message = "";
                        $.each(res.error, function (index, value) {
                            message += value;
                        });
                        errorMsg(message);
                    } else {
                        successMsg(res.message);
                        window.location.reload(true);
                    }
                }
            });
        }

        function markc(id) {
            $('#newcheck' + id).change(function () {
                if (this.checked) {
                    complete_event(id, 'yes');
                } else {
                    complete_event(id, 'no');
                }
            });
        }
        $(document).ready(function () {
            $('#searchExpanding button').on('click', function (e) {
                e.preventDefault()

                if ($(this).prev().val() === '') {
                    $(this).parent().toggleClass('expand');
                } else {
                    $(this).parent().submit();
                }
            })

            // Collapse expanding search
            $('#searchExpanding .form-control').on('focusout', function (e) {
                if ($(this).val() === '') {
                    $(this).parent().removeClass('expand');
                }
            })
        });
    </script>



    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="row">
        <div class="modal fade effect-scale" id="sessionModal" tabindex="-1" role="dialog"
            aria-labelledby="sessionModalLabel">
            <form action="https://newui.campus365.io/admin/admin/activeSession" id="form_modal_session"
                class="form-horizontal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="sessionModalLabel">Session</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body sessionmodal_body pb0">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary submit_session" id="submit_session"
                                data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please wait..">Change
                                Session</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sessionModal').modal({
                backdrop: 'static',
                keyboard: false,
                show: false
            })

            $('#sessionModal').on('show.bs.modal', function (event) {
                var $modalDiv = $(event.delegateTarget);
                $('.sessionmodal_body').html("");
                $.ajax({
                    type: "POST",
                    url: baseurl + "admin/admin/getSession",
                    dataType: 'text',
                    data: {},
                    beforeSend: function () {
                        $modalDiv.addClass('modal_loading');
                    },
                    success: function (data) {
                        $('.sessionmodal_body').html(data);
                    },
                    error: function (xhr) { // if error occured
                        $modalDiv.removeClass('modal_loading');
                    },
                    complete: function () {
                        $modalDiv.removeClass('modal_loading');
                    },
                });
            })

            $(document).on('click', '.submit_session', function () {
                var $this = $(this);
                var datastring = $("form#form_modal_session").serialize();
                $.ajax({
                    type: "POST",
                    url: baseurl + "admin/admin/updateSession",
                    dataType: "json",
                    data: datastring,
                    beforeSend: function () {
                        $('#submit_session').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>').prop('disabled', true);
                    },
                    success: function (data) {
                        if (data.status == 1) {
                            $('#sessionModal').modal('hide');
                            window.location.href = baseurl + "admin/admin/dashboard";
                            if (data.status) {
                                $('.toast-body').html(data.message);
                                $('.toast').toast('show');
                            }
                        }
                    },
                    error: function (xhr) {
                        $this.button('reset');
                    },
                    complete: function () {
                        $this.button('reset');
                    },
                });
            });
        });
    </script>

    <script type="text/javascript">

        $calendar = $('#calendar');
        var base_url = 'https://newui.campus365.io/';
        today = new Date();
        y = today.getFullYear();
        m = today.getMonth();
        d = today.getDate();
        var viewtitle = 'month';
        var pagetitle = "";

        if (pagetitle == "Dashboard") {

            viewtitle = 'agendaWeek';
        }

        $calendar.fullCalendar({
            viewRender: function (view, element) {
                // We make sure that we activate the perfect scrollbar when the view isn't on Month
                //if (view.name != 'month'){
                //  $(element).find('.fc-scroller').perfectScrollbar();
                //}
            },
            header: {
                center: 'title',
                right: 'month,agendaWeek,agendaDay',
                left: 'prev,next,today'
            },
            defaultDate: today,
            selectable: true,
            selectHelper: true,
            views: {
                month: {// name of view
                    titleFormat: 'MMMM YYYY'
                    // other view-specific options here
                },
                week: {
                    titleFormat: " MMMM D YYYY"
                },
                day: {
                    titleFormat: 'D MMM, YYYY'
                }
            },
            timezone: "Asia/Kolkata",
            draggable: false,
            lang: '',
            editable: false,
            eventLimit: false, // allow "more" link when too many events
            // color 
            // classes: [ event-blue | event-azure | event-green | event-orange | event-red ]
            //events: base_url + 'admin/calendar/getevents',
            // eventSources: [calendarEvents, birthdayEvents, holidayEvents, discoveredEvents, meetupEvents, otherEvents],
            events: {
                url: base_url + 'admin/calendar/getevents',
                type: 'GET',
                success: function (reply) {
                },
            },
            eventRender: function (event, element) {

                element.attr('title', event.description);
                element.attr('onclick', event.onclick);
                element.attr('data-toggle', 'tooltip');
                if ((!event.url) && (event.event_type != 'task')) {
                    element.attr('title', event.title + '-' + event.description);
                    element.click(function (e) {
                        e.stopPropagation();
                        viewEvent(event);
                    });
                }

                var borderColor = event.backgroundColor;
                var bgColor = colorMap[borderColor] ? colorMap[borderColor] : borderColor;

                // element.find('.fc-list-item-title').css({
                //   borderColor: bgColor
                // });
                element.css('borderLeftColor', borderColor);
                element.css('backgroundColor', bgColor);
            },
            select: function (start, end) {

                $('#modalCreateEvent').modal('show');
                // reset Modal
                resetCreateModal('add', {});
                var startStr = start.format('M D YYYY');
                var endStr = end.subtract(1, 'days').format('M D YYYY');
                var timeStr = moment().format('h:mm:a').split(':');

                var minute = getCMinuteData();
                var hour = getCHourData();
                var meridian = timeStr[2];
                // to set default blue as color picker
                $('#2185D0').prop('checked', true);

                // move to next hour
                if (minute > 55) {
                    minute = 5;
                    // hour = hour+1;
                    if (hour == 12) {
                        hour = 1;
                        meridian = meridian === 'pm' ? 'am' : 'pm';
                    } else {
                        hour = hour + 1;
                    }
                }
                var sDate = moment(startStr + ' ' + hour + ':' + minute + ' ' + meridian);

                var startInput = $('#eventStartDate').daterangepicker({
                    // showOtherMonths: false,
                    // selectOtherMonths: false,
                    startDate: sDate.toDate(),
                    endDate: end.toDate(),
                    timePicker: true,
                    opens: 'center',
                    singleDatePicker: true,
                    timePickerIncrement: 5,
                    locale: {
                        format: 'MM/DD/YYYY hh:mm a'
                    }
                }, function (s, e) {

                    endInput.data('daterangepicker').setMinDate(s.toDate());
                }).on("change", function (s) {

                    // endInput.datepicker( "option", "minDate", s.toDate() );
                });

                var endMinute = minute;
                var endHour = parseInt(hour);
                // for range dates and if time is after 30 minutes
                if ((startStr === endStr)) {
                    if (minute >= 30) {
                        endMinute = (minute + 30 - 60);

                        // endHour = endHour  === 12 ? endHour+1 : 1;
                        if (endHour === 12) {
                            endHour = 1;
                            // meridian = meridian === 'pm'? 'am': 'pm';
                        } else {
                            if (endHour === 11) {
                                meridian = meridian === 'pm' ? 'am' : 'pm';
                            }
                            endHour = endHour + 1;
                        }
                    } else {
                        endMinute = minute + 30;
                    }
                }

                var eDate = moment(endStr + ' ' + endHour + ':' + endMinute + ' ' + meridian);


                var endInput = $('#eventEndDate').daterangepicker({
                    // showOtherMonths: false,
                    // selectOtherMonths: false,
                    startDate: eDate.toDate(),
                    timePicker: true,
                    singleDatePicker: true,
                    timePickerIncrement: 5,
                    locale: {
                        format: 'MM/DD/YYYY hh:mm a'
                    }
                }, function (s, e) {

                    endInput.data('daterangepicker').setMaxDate(s.toDate());
                    // startInput.daterangepicker( ).setMinDate();
                    // :true,
                }).on("change", function (e) {
                    //  startInput.datepicker( "option", "maxDate", e.toDate() );
                });
            },

            dayClick: function (date, jsEvent, view) {

                //   var d = date.format();
                //   if (!$.fullCalendar.moment(d).hasTime()) {
                //       d += ' 05:30';
                //   }
                //var vformat = (app_time_format == 24 ? app_date_format + ' H:i' : app_date_format + ' g:i A');
                //             //   $("#input-field").val('');
                //   $("#desc-field").text('');
                //   $('#newEventModal').modal('show');

                //             // return false;
            }
        });
        var calendar = $('#calendar').fullCalendar('getCalendar');
        function setHourData() {
            var currentDate = new Date();
            var hours =
                $.each(hourData(), function (key, value) {
                    if (currentDate.getHours() === value) {
                        $('#eventStartHour')
                            .append($("<option></option>")
                                .attr("value", value)
                                .attr("selected", "selected")
                                .text(value));
                    } else {
                        $('#eventStartHour')
                            .append($("<option></option>")
                                .attr("value", key)
                                .text(value));
                    }
                });
        }
        function getCMinuteData() {
            var min = moment().format('mm');
            while (min % 5 != 0) {
                min++;
            }
            return parseInt(min);
        }
        function getCHourData() {
            var hour = moment().format('h');
            return parseInt(hour);
        }
        function setMinutesData() {
            var minData = minuteData();
            $.each(minData, function (key, value) {
                if (currentDate.getMinutes() > minData[key - 1] && currentDate.getMinutes() < value) {

                    $('#eventStartMinute')
                        .append($("<option></option>")
                            .attr("value", value)
                            .attr("selected", "selected")
                            .text(value));
                } else {
                    $('#eventStartMinute')
                        .append($("<option></option>")
                            .attr("value", key)
                            .text(value));
                }
            });
        }

        function hourData() {
            var timer = [];
            for (var i = 0; i < 24; i++) {
                timer.push(i + 1);
            }
            return timer;
        }

        function minuteData() {
            var timer = [];
            for (var i = 0; i < 60; i = i + 5) {
                timer.push(i);
            }
            return timer;
        }

        function getDate(element) {

            var date;
            try {
                date = $.datepicker.parseDate(dateFormat, element.value);
            } catch (error) {
                date = null;
            }

            return date;
        }

        function viewEvent(calEvent) {
            var modal = $('#modalCalendarEvent');

            modal.modal('show');
            modal.find('.event-title').text(calEvent.title);

            if (calEvent.description) {
                modal.find('.event-desc').text(calEvent.description);
                modal.find('.event-desc').prev().removeClass('d-none');
            } else {
                modal.find('.event-desc').text('');
                modal.find('.event-desc').prev().addClass('d-none');
            }

            modal.find('.event-start-date').text(moment(calEvent.start).format('LLL'));
            modal.find('.event-end-date').text(moment(calEvent.end).format('LLL'));

            $("#delete_event").attr("onclick", "deleteEvent(" + calEvent.id + ",'Event')");

            selectedEventForEdit = calEvent;
            $("#edit_event").attr("onclick", "editEvent(" + calEvent.id + ")");
            //styling
            modal.find('.modal-header').css('backgroundColor', calEvent.backgroundColor ? calEvent.backgroundColor : '#2185D0');
        }
        // $(document).ready(function (e) {
        function saveEvent() {
            var formData = new FormData(this);
            $.ajax({
                url: "https://newui.campus365.io/admin/calendar/saveevent",
                type: "POST",
                data: formData,
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (res) {
                    // add success notification later

                    if (res.status === "fail") {
                        // add failed notification

                    } else {
                        // add success notification

                        // close modal

                        // add the event
                        var eveObj = {
                            backgroundColor: formData.get('event_color'),
                            borderColor: colorMap[formData.get('event_color')],
                            description: formData.get('event_description'),
                            end: formData.get('event_end_date'),
                            start: formData.get('event_start_date'),
                            title: formData.get('title'),
                            id: res.data.id
                        }
                        $('#modalCreateEvent').modal('hide');
                        calendar.renderEvent(eveObj);
                    }
                    window.location.reload(true);
                }
            });
        }

        function updateEvent(e) {
            e.preventDefault();
            var calEvent = selectedEventForEdit;
            var formElement = $('#add-event-form').get(0);
            var formData = new FormData(formElement);
            formData.append("event_id", calEvent.id);
            $.ajax({
                url: "https://newui.campus365.io/admin/calendar/updateevent",
                type: "POST",
                data: formData,
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (res) {
                    if (res.status == "fail") {
                        // add failed notification
                    } else {
                        var eveObj = {
                            backgroundColor: formData.get('event_color'),
                            borderColor: colorMap[formData.get('event_color')],
                            description: formData.get('event_description'),
                            end: formData.get('event_end_date'),
                            start: formData.get('event_start_date'),
                            title: formData.get('title'),
                            id: calEvent.id
                        }
                        $('#modalCreateEvent').modal('hide');
                        calendar.removeEvents(calEvent.id);
                        calendar.renderEvent(eveObj);
                    }
                }
            });
        }

        </body>

</html>