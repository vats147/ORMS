<?php
session_start();
if (isset($_POST["id"])) {
    error_reporting(E_WARNING);
    // if(1){

    //promocode page 
    if ($_POST["id"] == "promocode")
    // if(1)
    {

        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "rms";

        $conn = new mysqli($host, $username, $password, $database);

        if (!$conn) {
            echo "Database connection failed. Error:" . $conn->error;
            exit;
        }
        if ($_POST["action"] == "r")
        // if(1)
        {


            // datatable css and js

            echo '<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
            <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
            <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
            <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
            <!-- buttons for Export datatable -->
            <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
            <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
            <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
            <!-- Datatable Setting js -->
            <script src="vendors/scripts/datatable-setting.js"></script>';


            $sql = "select * from tblpromocode";
            $result = $conn->query($sql);

            $output = "";

            // echo 'include "adminsidebar.php"';






            if (mysqli_num_rows($result) > 0) {
                $output = '

    <table class="data-table table hover multiple-select-row nowrap" >
								<thead>
                                <tr>
                                <th class="table-plus datatable-nosort">PromoCode</th>
                                <th>Discount</th>
                                <th>Branch Code</th>
                                <th>Expertion Date</th>
                                <th>Status</th>
                                <th>Update</th>
                                <th>Delete</th>
                                
                            </tr>
								</thead>
								<tbody>
    
    
    ';

                while ($row = mysqli_fetch_array($result)) {

                    // $output .="<tr><td>{$row[0]}</td><td>{$row[2]}</td><td><button class='delete-btn' data-id='{$row[0]}'>delete</button></td></tr>";
                    $output .= "<tr>
        <td class=\"table-plus\">{$row[1]}</td>
        <td>{$row[2]}</td>
        <td>{$row[3]}</td>
        <td>{$row[4]}</td>
        ";

                    if ($row[5]) {
                        $output .= "<td>
                                                                
            <div class=\"bootstrap-badge\">

            <a href=\"javascript:void()\" id=\"bbb\" class=\"badge badge-rounded badge-success\" style=\"font-weight:560;border-radius:35px;\">Active</a>
            
           
            </div>
            
            </td>";
                    } else {
                        $output .= "<td>
                                                                    
            <div class=\"bootstrap-badge\">
            <a href=\"javascript:void()\" id=\"bbb\" class=\"badge badge-rounded badge-danger\" style=\"font-weight:560;border-radius:35px;\">Deactive</a>

              
               </div>
               </td>";

                    }
                    $output .= '<td>
        <button  data-toggle="modal" id="edit" data-target="#bd-example-modal-lg';
                    $output .= "$row[0]";
                    $output .= '"
                    data-eeid="';
                    $output .= "$row[0]";
                    $output .= '" class="dropdown-item" class="btn-block"  >
                 <i class="dw dw-edit2" ></i>Edit</button></td>
                                                            
                 <td>
                 <a class="btn-block" data-toggle="modal" data-target="#success-modal';
                    $output .= "$row[0]";

                    $output .= '"type="button" >
                
                 <a
        href="#"
        class="btn-block"
        data-toggle="modal"
        data-target="#confirmation-modal';
                    $output .= "$row[0]";
                    $output .= '"
        data-eid="';
                    $output .= "$row[0]";
                    $output .= '"

        type="button" 
    >
    <i class="dw dw-delete-3" id="del" ></i> Delete

    </a>
             </td>

                                                                    ';

                    $output .= "</tr>";
                    ;


                    // Update Model

                    $output .= ' <div class="col-md-4 col-sm-12 mb-30">
                    <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg';
                    $output .= "$row[0]";
                    $output .= '" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-updialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel" >
                                        Update
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="close">
                                        ×
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="form-edit-cr">
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-md-2 col-form-label">Promo Code</label>
                                            <div class="col-sm-12 col-md-10">
                                                <input type="hidden" id="hiddencode"  value="';
                    $output .= "$row[0]";
                    $output .= '">
                                                <input class="form-control" type="text" name="promocodename" id="editpromocodename';
                    $output .= "$row[0]";
                    $output .= '" value="';
                    $output .= "$row[1]";
                    $output .= '" required/>
                                                <div class="form-group has-danger">
                                                                <div class="form-control-feedback" id="error5">

                                                                </div>
                                                            </div>
                                               
                                            </div>  
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-md-2 col-form-label">Discount</label>
                                            <div class="col-sm-12 col-md-10">
                                                <input class="form-control" type="text" type="number"onkeypress="return event.keyCode === 8 || event.charCode >= 48 && event.charCode <= 57" id="editdiscountpercentage';
                    $output .= "$row[0]";
                    $output .= '" name="discountpercentage" value="';
                    $output .= "$row[2]";
                    $output .= '" required/>
                                                <div class="form-group has-danger">
                                                                <div class="form-control-feedback" id="error6">

                                                                </div>
                                                            </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-md-2 col-form-label">Branch Name</label>
                                            <div class="col-sm-12 col-md-10">

                                            ';
                    $sql_branch = "select * from tblbranch";
                    $result_branch = $conn->query($sql_branch);
                    $output .= '<select class="custom-select col-12" name="branchcode" id="branchcode';
                    $output .= "$row[0]";
                    $output .= '"
                                                    required>';


                    while ($row_branch = mysqli_fetch_array($result_branch)) {
                        if ($row[3] == $row_branch[0]) {
                            $output .= "<option value=\"$row_branch[0]\" selected>$row_branch[1]</option>";
                        } else {
                            //  echo $row[3];   
                            $output .= "<option value=\"$row_branch[0]\" id=\"$row[3]\">$row_branch[1]</option>";

                        }



                    }
                    //    mysqli_close($conn);
                    $output .= '</select>';

                    $output .= '
                                         
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-md-2 col-form-label">Expiration Date</label>
                                            <div class="col-sm-12 col-md-10">
                                                <input class="form-control" type="date" min="';
                    $output .= date('Y-m-d');
                    $output .= '"  value="';
                    $output .= "$row[4]";
                    $output .= '"  name="date" id="editdate';
                    $output .= "$row[0]";
                    $output .= '" required/>
                          
                                                                                                                                        

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-md-2 col-form-label">Status :</label>
                                            <div class="col-sm-12 col-md-10">
                                            
                                            <!--  -->
                                          



<div class="mb-30">
';


                    if ($row[5] == 1) {




                        $output .= '<label class="radio-inline mr-3"><input type="radio" name="optradio" id="status-ac';
                        $output .= "$row[0]";
                        $output .= '" value="1"  data-check="1"required/> Active</label>';
                        $output .= '<label class="radio-inline mr-3"><input type="radio" name="optradio" id="status-dc';
                        $output .= "$row[0]";
                        $output .= '" value="0" required/ > Deactive</label>';








                    } else {
                        $output .= '<label class="radio-inline mr-3"><input type="radio" name="optradio"  id="status-ac';
                        $output .= "$row[0]";
                        $output .= '" value="1"   data-check="0"> Active</label>';

                        $output .= '<label class="radio-inline mr-3"><input type="radio" name="optradio" id="status-dc';
                        $output .= "$row[0]";
                        $output .= '"  value="0" checked="checked"> Deactive</label>';

                    }


                    $output .= '
</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="title">
                                                    <!-- <h4>Image Dropzone</h4> -->
                                                </div>
                                                <nav aria-label="breadcrumb" role="navigation">

                                                </nav>
                                            </div>

                                            <!-- Submit button -->

                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-dismiss="modal">

                                        Close
                                    </button>
                                    <button name="editpromo" class="btn btn-primary" type="submit" id="editme';
                    $output .= $row[0];
                    $output .= '">
                                        Save changes
                                    </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>';


                    $output .= '<div class="col-md-4 col-sm-12 mb-30">

                <div class="modal fade" id="confirmation-modal';
                    $output .= $row[0];
                    $output .= '" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center font-18">
                                <h4 class="padding-top-30 mb-30 weight-500">
                                    Are you sure you want to continue?
                                </h4>
                                <input type="hidden" id="hide"  value="';
                    $output .= "$row[0]";
                    $output .= '">
                                <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        NO
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="btn-block" data-toggle="modal" data-target="#success-modal" type="button">
                                            <button type="button" class="btn btn-primary border-radius-100 btn-block confirmation-btn" id="yes" data-dismiss="modal">
                                                <i class="fa fa-check" ></i>
                                            </button>
                                            YES
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <!-- </div> -->
            </div>';







                }
                $output .= "</tbody></table>";

                echo $output;



            } else {
                $output .= '
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                            <th class="table-plus datatable-nosort">PromoCode</th>
                            <th>Discount</th>
                            <th>Branch Code</th>
                            <th>Expertion Date</th>
                            <th>Status</th>
                            <th>Update</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        </table>
                        </div>';
                echo $output;
            }
        }
        // delete data
        if ($_POST["action"] == "d") {
            $id = $_POST["eid"];
            $sql = "DELETE FROM tblpromocode where `promoId`=$id";
            echo $sql;
            $result = $conn->query($sql);
            if ($result) {
                echo 1;
            }
        }
        // create
        if ($_POST["action"] == "c") {


            $validate = false;
            $validiscount = false;

            // $id=$_POST["eid"];
            $promocodename = $_POST["promocode"];
            $discountpercentage = $_POST["discount"];
            $branchcode = $_POST["branchcode"];
            $date = $_POST["date"];
            $check = 0;
            $sql = "select * from tblpromocode where `promoCode`='$promocodename' and `branchCode`=$branchcode";
            $result = mysqli_query($conn, $sql);
            // echo $result;
            $row = mysqli_num_rows($result);
            // echo $row;
            // check weather duplicate avaliable or not
            if ($row > 0) {
                $check = 11;
            } else {
                // echo 2;
            }

            if ($date >= $date_now) {
                $validate = true;

            }
            if (filter_var($discountpercentage, FILTER_VALIDATE_FLOAT)) {
                $validiscount = true;
            }
            if ($validate && $validiscount) {

                if ($check != 11) {
                    $sql = "INSERT INTO `tblpromocode`( `promoCode`, `discount`, `branchCode`, `ExpDate`, `status`) VALUES ('$promocodename','$discountpercentage','$branchcode','$date','1')";


                    $result = $conn->query($sql);
                    if ($result) {
                        echo 1;
                    } else {
                        echo 0;
                    }
                } else {
                    echo 123;
                }
            }
        }

        // edit 
        if ($_POST["action"] == "e") {

            $er = "";
            $validate = false;
            $validiscount = false;

            $id = $_POST["eid"];
            $promocodename = $_POST["promocodename"];
            $discountpercentage = $_POST["discountpercentage"];
            $branchcode = $_POST["branchcode"];
            $date = $_POST["date"];
            $status = $_POST["status"];


            $date_now = date("Y-m-d");
            if ($date >= $date_now) {
                $validate = true;

            } else {
                $er .= "Invalid Date";
            }
            if (filter_var($discountpercentage, FILTER_VALIDATE_FLOAT)) {
                $validiscount = true;
            } else {
                $er .= "Invalid Percentage";

            }
            if ($validate && $validiscount) {



                $sql = "UPDATE `tblpromocode` SET `promoCode`='$promocodename',`discount`='$discountpercentage',`branchCode`='$branchcode',`ExpDate`='$date',`status`='$status' WHERE `promoId`='$id'";

                $result = $conn->query($sql);
                if ($result) {
                    echo 1;
                } else {
                    echo "not hello";
                }
            } else {
                echo $er;
            }
        }

    }










    // manage expense
    if ($_POST["id"] == "expense") {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "rms";

        $conn = new mysqli($host, $username, $password, $database);

        if (!$conn) {
            echo "Database connection failed. Error:" . $conn->error;
            exit;
        }
        if ($_POST["action"] == "r")
        // if(1)
        {


            // datatable css and js

            echo '<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
        <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
        <!-- buttons for Export datatable -->
        <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
        <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
        <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
        <!-- Datatable Setting js -->
        <script src="vendors/scripts/datatable-setting.js"></script>';


            $sql = "select * from tblexpense where branchcode=". $_SESSION['bid'];
            $result = $conn->query($sql);

            $output = "";

            // echo 'include "adminsidebar.php"';






            if (mysqli_num_rows($result) > 0) {
                $output = '

                    <table class="data-table table hover multiple-select-row nowrap" >
                            <thead>
                            <tr>
                            <th class="table-plus datatable-nosort">Expense Type</th>
                            <th>Expense Value</th>
                            <th>Branch Code</th>
                            <th>Description</th>
                            <th>Date</th>
                            
                            <th>Delete</th>
                            
                        </tr>
                            </thead>
                            <tbody>


';

                while ($row = mysqli_fetch_array($result)) {

                    // $output .="<tr><td>{$row[0]}</td><td>{$row[2]}</td><td><button class='delete-btn' data-id='{$row[0]}'>delete</button></td></tr>";
                    $output .= "<tr>
    <td class=\"table-plus\">{$row[1]}</td>
    <td>{$row[3]}</td>
    <td>{$row[4]}</td>
    <td>{$row[2]}</td>
    <td>{$row[5]}</td>

    ";



                    $output .= '
                                                        
             <td>
             <a class="btn-block" data-toggle="modal" data-target="#success-modal';
                    $output .= "$row[0]";

                    $output .= '"type="button" >
            
             <a
    href="#"
    class="btn-block"
    data-toggle="modal"
    data-target="#confirmation-modal';
                    $output .= "$row[0]";
                    $output .= '"
    data-eid="';
                    $output .= "$row[0]";
                    $output .= '"

    type="button" 
>
<i class="dw dw-delete-3" id="del" ></i> Delete

</a>
         </td>

                                                                ';

                    $output .= "</tr>";

                    $output .= '<div class="modal fade" id="confirmation-modal';
                    $output .= $row[0];
                    $output .= '" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center font-18">
                                <h4 class="padding-top-30 mb-30 weight-500">
                                    Are you sure you want to continue?
                                </h4>
                                <input type="hidden" id="hide"  value="';
                    $output .= "$row[0]";
                    $output .= '">
                                <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        NO
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="btn-block" data-toggle="modal" data-target="#success-modal" type="button">
                                            <button type="button" class="btn btn-primary border-radius-100 btn-block confirmation-btn" id="yes" data-dismiss="modal">
                                                <i class="fa fa-check" ></i>
                                            </button>
                                            YES
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>';










                }

                $output .= "</tbody></table>";

                echo $output;



            } else {
                $output .= '
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                <thead>
                <tr>
                <th class="table-plus datatable-nosort">Expense Type</th>
                <th>Expense Value</th>
                <th>Branch Code</th>
                <th>Description</th>
                <th>Date</th>
                
                <th>Delete</th>
                
            </tr>
                </thead>
                    <tbody>
                    </tbody>
                    </table>
                    </div>';
                echo $output;
            }
        }
        // delete data
        if ($_POST["action"] == "d") {
            $id = $_POST["eid"];
            $sql = "DELETE FROM tblexpense where `expenseId`=$id";
            // echo $sql;
            $result = $conn->query($sql);
            if ($result) {
                echo 1;
            }
        }
        // create
        if ($_POST["action"] == "c") {




            $branchcode = $_POST["branchcode"];
            $evalue = $_POST["evalue"];
            $expensetype = $_POST["expensetype"];
            $description = $_POST["description"];


            $validvalue = true;
            $date = date("Y-m-d");



            if (filter_var($evalue, FILTER_VALIDATE_FLOAT)) {
                $validiscount = true;
            }
            if ($validvalue) {


                $sql = "INSERT INTO `tblexpense`(`expenceType`, `expenseDetail`, `expenceValue`, `branchcode`, `date`)  VALUES ('$expensetype','$description',$evalue,$branchcode,'$date')";
                // echo $sql;

                $result = $conn->query($sql);
                if ($result) {
                    echo 1;
                } else {
                    echo 0;
                }

            }
        }

        // edit 
        if ($_POST["action"] == "e") {


            // $validate = false;
            // $validiscount = false;

            // $id = $_POST["eid"];
            // $promocodename = $_POST["promocodename"];
            // $discountpercentage = $_POST["discountpercentage"];
            // $branchcode = $_POST["branchcode"];
            // $date = $_POST["date"];
            // $status = $_POST["status"];


            // $date_now = date("Y-m-d");
            // if ($date >= $date_now) {
            //     $validate = true;

            // }
            // if (filter_var($discountpercentage, FILTER_VALIDATE_FLOAT)) {
            //     $validiscount = true;
            // }
            // if ($validate && $validiscount) {



            //     $sql = "UPDATE `tblpromocode` SET `promoCode`='$promocodename',`discount`='$discountpercentage',`branchCode`='$branchcode',`ExpDate`='$date',`status`='$status' WHERE `promoId`='$id'";

            //     $result = $conn->query($sql);
            //     if ($result) {
            //         echo 1;
            //     } else {
            //         echo "not hello";
            //     }
            // } else {
            //     echo 123;
            // }
        }

    }

    if ($_POST["id"] == "index") {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "rms";

        $conn = new mysqli($host, $username, $password, $database);

        if (!$conn) {
            echo "Database connection failed. Error:" . $conn->error;
            exit;
        }
        if ($_POST["action"] == "c") {
            $check = 0;
            $name = $_POST["name"];
            $number = $_POST["number"];
            $message = $_POST["message"];

            // check string is not empty with regex

            //check string is not empty with regex

            if (preg_match("/^[a-zA-Z]*$/", $name)) {
                $check = 1;
            } else {
                $check = 0;

            }
            if (preg_match("/^[a-zA-Z ]*$/", $message)) {
                $check = 1;
            } else {
                $check = 0;

            }
            if (preg_match("/^[6-9][0-9]{9}$/", $number)) {
                $check = 1;
            } else {
                $check = 0;

            }

            if ($check == 1) {
                $sql = "INSERT INTO `tblcontactus`(`c_name`, `c_mobile`, `c_message`,`c_date`) VALUES ('$name','$number','$message',NOW())";
                $result = $conn->query($sql);

            }

            // check mobilenumber is valid or not with regex
            echo $check;
        }

        if ($_POST["action"] == "displaythumb") {

            $sql = "select * from `tblgallerycategory` where `categoryImage`!=''";
            $result=$conn->query($sql);

            while($row=mysqli_fetch_row($result))
            {
                $output .= '<div class="single-service" style="    ">
            <a href="./Photo1.php?id=';
            $output .= $row[0];$output.='">
                
                <img style="height: 50%;
                width: 75%;" src="image/gallery/';
                $output .= $row[2];$output.='" alt="">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>';
                $output .= "$row[1]";$output.='</h3>
                    
                </div>
            </a>
        </div>';
            }
            echo $output;
            
        }



    }
    if ($_POST["id"] == "contactus") {

        if ($_POST["action"] == "r")
        // if(1)
        {


            // datatable css and js

            echo '<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
        <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
        <!-- buttons for Export datatable -->
        <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
        <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
        <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
        <!-- Datatable Setting js -->
        <script src="vendors/scripts/datatable-setting.js"></script>';
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "rms";

            $conn = new mysqli($host, $username, $password, $database);

            if (!$conn) {
                echo "Database connection failed. Error:" . $conn->error;
                exit;
            }

            $sql = "select * from tblcontactus";
            $result = $conn->query($sql);

            $output = "";

            // echo 'include "adminsidebar.php"';






            if (mysqli_num_rows($result) > 0) {
                $output = '

                    <table class="data-table table hover multiple-select-row nowrap" >
                            <thead>
                            <tr>
                            <th class="table-plus datatable-nosort">Name</th>
                            <th>Contact Number</th>
                            <th>Message</th>
                            <th>Time Stamp</th>
                          
                            
                        </tr>
                            </thead>
                            <tbody>


';

                while ($row = mysqli_fetch_array($result)) {

                    // $output .="<tr><td>{$row[0]}</td><td>{$row[2]}</td><td><button class='delete-btn' data-id='{$row[0]}'>delete</button></td></tr>";
                    $output .= "<tr>
                    <td>{$row[1]}</td>
              
                <td>{$row[2]}</td>
                <td>{$row[3]}</td>
                <td>{$row[4]}</td>
                

                ";




                    $output .= "</tr>";












                }

                $output .= "</tbody></table>";

                echo $output;



            } else {
                $output .= '
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                <thead>
                <tr>
                <th class="table-plus datatable-nosort">Expense Type</th>
                <th>Expense Value</th>
                <th>Branch Code</th>
                <th>Description</th>
                <th>Date</th>
                
                <th>Delete</th>
                
            </tr>
                </thead>
                    <tbody>
                    </tbody>
                    </table>
                    </div>';
                echo $output;
            }
        }
    }


    //feedback data retrive
    if ($_POST["id"] == "feedback") {

        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "rms";

        $conn = new mysqli($host, $username, $password, $database);

        if (!$conn) {
            echo "Database connection failed. Error:" . $conn->error;
            exit;
        }
        if ($_POST["action"] == "r")
        // if(1)
        {


            // datatable css and js

            echo '<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
        <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
        <!-- buttons for Export datatable -->
        <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
        <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
        <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
        <!-- Datatable Setting js -->
        <script src="vendors/scripts/datatable-setting.js"></script>';

            $sql = "select * from tblfeedback";
            $result = $conn->query($sql);

            $output = "";

            // echo 'include "adminsidebar.php"';






            if (mysqli_num_rows($result) > 0) {
                $output = '

                    <table class="data-table table hover multiple-select-row nowrap" >
                            <thead>
                            <tr>
                            <th class="table-plus datatable-nosort">User Name</th>
                            <th>Branch Name</th>
                            <th>FeedbackText</th>
                            <th>date Time</th>
                          
                            
                        </tr>
                            </thead>
                            <tbody>


';

                while ($row = mysqli_fetch_array($result)) {

                    // $output .="<tr><td>{$row[0]}</td><td>{$row[2]}</td><td><button class='delete-btn' data-id='{$row[0]}'>delete</button></td></tr>";
                    $output .= "<tr>";
                    $sql2 = "select * from tbluser where `userid`={$row[1]}";
                    $result2 = $conn->query($sql2);
                    while ($row2 = mysqli_fetch_array($result2)) {
                        $output .= " <td>{$row2[2]}</td>";

                    }
                    $sql3 = "select * from tblbranch where `branchcode`={$row[2]}";
                    $result3 = $conn->query($sql3);
                    while ($row3 = mysqli_fetch_array($result3)) {
                        $output .= " <td>{$row3[1]}</td>";

                    }

                    $output .= "
                <td>{$row[3]}</td>
                <td>{$row[4]}</td>
                

                ";




                    $output .= "</tr>";












                }

                $output .= "</tbody></table>";

                echo $output;



            } else {
                $output .= '
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                <thead>
                <tr>
                <th class="table-plus datatable-nosort">Expense Type</th>
                <th>Expense Value</th>
                <th>Branch Code</th>
                <th>Description</th>
                <th>Date</th>
                
                <th>Delete</th>
                
            </tr>
                </thead>
                    <tbody>
                    </tbody>
                    </table>
                    </div>';
                echo $output;
            }
        }
    }

    if ($_POST["id"] == "managegallery") {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "rms";

        $conn = new mysqli($host, $username, $password, $database);

        if (!$conn) {
            echo "Database connection failed. Error:" . $conn->error;
            exit;
        }

        if ($_POST["action"] == "c")
        // if(1)
        {
            //check weather string contain space or not with regex
            $pattern = "/^[a-zA-Z ]*$/";
            if (!preg_match($pattern, $_POST["name"])) {
                echo 0;
                exit;
            }
            $name = $_POST["name"];
            $sql = "select * from tblgallerycategory where `categoryName`='$name'";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_num_rows($result);

            if ($row > 0) {
                echo 2;
                exit;
            }

            $sql = "INSERT INTO `tblgallerycategory`(`categoryName`, `status`) VALUES ('$name','1')";
            $result = $conn->query($sql);

            if ($result) {
                echo 1;
            } else {
                echo 0;
            }

        }
        if ($_POST["action"] == "d")
        // if(1)
        {
            //check weather string contain space or not with regex
            $name = $_POST["name"];

            $sql = "DELETE FROM `tblgallerycategory` WHERE `galleryCatagoryId` = '$name'";
            $result = $conn->query($sql);

            if ($result) {
                echo 1;
            } else {
                echo 0;
            }

        }
        if ($_POST["action"] == "re")
        // if(1)
        {
            //check weather string contain space or not with regex
            // $name = $_POST["name"];



            // store $result into combobox




            // $sql_branch = "select * from tblgallerycategory ";

            $sql = "select * FROM `tblgallerycategory` WHERE `status` = '0'";
            $result = $conn->query($sql);
            if ($result) {
                echo '<select  class="custom-select col-12" name="branchcode" id="endcinput"
																			required>';
                echo '<option value="" selected disabled hidden>Choose here</option>';

                while ($row = mysqli_fetch_array($result)) {
                    echo " 
																			<option value=\"$row[0]\">$row[1]</option>";



                    // mysqli_close($conn);
                }
                echo "</select>";

            } else {
                echo 0;
            }

        }
        if ($_POST["action"] == "rd")
        // if(1)
        {
            //check weather string contain space or not with regex
            $sql = "select * FROM `tblgallerycategory` WHERE `status` = '1'";
            $result = $conn->query($sql);
            if ($result) {
                echo '<select  class="custom-select col-12" name="branchcode" id="endcinput"
																			required>';
                echo '<option value="" selected disabled hidden>Choose here</option>';

                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value=\"$row[0]\">$row[1]</option>";



                    // mysqli_close($conn);
                }
                echo "</select>";

            } else {
                echo 0;
            }

        }

        // enable category
        if ($_POST["action"] == "en")
        // if(1)
        {
            //check weather string contain space or not with regex
            $data = $_POST["data"];

            $sql = "UPDATE `tblgallerycategory` SET `status`='1' where `galleryCatagoryId`=$data";
            // echo $sql;
            $result = $conn->query($sql);
            if ($result) {
                echo 1;
            } else {
                echo 0;
            }

        }



        // disable category
        if ($_POST["action"] == "di")
        // if(1)
        {
            //check weather string contain space or not with regex
            $data = $_POST["data"];
            $sql = "UPDATE `tblgallerycategory` SET `status`='0' where `galleryCatagoryId`='$data'";
            $result = $conn->query($sql);
            if ($result) {
                echo 1;
            } else {
                echo 0;
            }


        }

        //combobox 
        if ($_POST["action"] == "cb1")
        // if(1)
        {
            //check weather string contain space or not with regex
            $sql = "select * FROM `tblgallerycategory` WHERE `status` = '1' AND `categoryImage` =''";
            // SELECT * FROM `tblgallerycategory` WHERE `categoryImage` ='';
            $result = $conn->query($sql);
            if ($result) {
                echo '<select  class="custom-select col-12" name="branchcode" id="cb1"
																			required>';
                echo '<option value="" selected disabled hidden>Choose here</option>';

                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value=\"$row[0]\">$row[1]</option>";



                    // mysqli_close($conn);
                }
                echo "</select>";

            } else {
                echo 0;
            }


        }

        if ($_POST["action"] == "cb12")
        // if(1)
        {
            //check weather string contain space or not with regex
            $sql = "select * FROM `tblgallerycategory` WHERE `status` = '1' AND  `categoryImage` !='';";
            $result = $conn->query($sql);
            if ($result) {
                echo '<select  class="custom-select col-12" name="branchcode" id="cb1"
																			required>';
                echo '<option value="" selected disabled hidden>Choose here</option>';

                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value=\"$row[0]\">$row[1]</option>";



                    // mysqli_close($conn);
                }
                echo "</select>";

            } else {
                echo 0;
            }


        }



        //checkbox2
        if ($_POST["action"] == "cb2")
        // if(1)
        {
            //check weather string contain space or not with regex
            $sql = "select * FROM `tblgallerycategory` WHERE `status` = '1' ";
            // SELECT * FROM `tblgallerycategory` WHERE `categoryImage` ='';
            $result = $conn->query($sql);
            if ($result) {
                echo '<select  class="custom-select col-12" name="branchcode" id="cb22"
																			required>';
                echo '<option value="" selected disabled hidden>Choose here</option>';

                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value=\"$row[0]\">$row[1]</option>";



                    // mysqli_close($conn);
                }
                echo "</select>";

            } else {
                echo 0;
            }


        }


        // recive file which sent from managegallery and store in image table
        if ($_POST["action"] == "thumbnai") {
            // print_r($_POST['file']);
            // print_r($_FILES);
            // print_r($_POST);
            $check = 0;
            $id = $_POST['cbid'];

            if ($_POST['upload'] == "yes") {
                if (isset($_FILES['file'])) {
                    $errors = array();
                    $file_name = $_FILES['file']['name'];
                    $file_size = $_FILES['file']['size'];
                    $file_tmp = $_FILES['file']['tmp_name'];
                    $file_type = $_FILES['file']['type'];
                    $file_ext = strtolower(end(explode('.', $file_name)));

                    $extensions = array("jpeg", "jpg", "png");

                    if (in_array($file_ext, $extensions) === false) {
                        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
                        $check = 1;
                    }

                    if ($file_size > 2097152) {
                        $errors[] = 'File size must be excately 2 MB';
                        $check = 2;
                    }

                    if (empty($errors) == true) {
                        $file_name = $_POST['data'] . "." . $file_ext;
                        // $file_name=$_POST['data']."_".date("y_d_m").date("h_i_sa").".".$file_ext;
                        $sql = "UPDATE `tblgallerycategory` SET `categoryImage`= '$file_name' where `galleryCatagoryId`= $id";
                        // echo $sql;
                        $result = $conn->query($sql);
                        if ($result) {
                            move_uploaded_file($file_tmp, "image/gallery/" . $file_name);
                            echo 3;
                        }
                    } else {

                        //    print_r($errors);
                        echo $check;


                    }
                }
            } else {
                if (isset($_FILES['file'])) {
                    $errors = array();
                    $file_name = $_FILES['file']['name'];
                    $file_size = $_FILES['file']['size'];
                    $file_tmp = $_FILES['file']['tmp_name'];
                    $file_type = $_FILES['file']['type'];
                    $file_ext = strtolower(end(explode('.', $file_name)));

                    $extensions = array("jpeg", "jpg", "png");

                    if (in_array($file_ext, $extensions) === false) {
                        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
                        $check = 1;
                    }

                    if ($file_size > 2097152) {
                        $errors[] = 'File size must be excately 2 MB';
                        $check = 2;
                    }

                    if (empty($errors) == true) {
                        $file_name = $_POST['data'] . "." . $file_ext;
                        // $file_name=$_POST['data']."_".date("y_d_m").date("h_i_sa").".".$file_ext;
                        $sql = "UPDATE `tblgallerycategory` SET `categoryImage`= '$file_name' where `galleryCatagoryId`= $id";
                        // echo $sql;
                        $result = $conn->query($sql);
                        if ($result) {
                            move_uploaded_file($file_tmp, "image/gallery/" . $file_name);
                            echo 3;
                        }
                    } else {

                        //    print_r($errors);
                        echo $check;


                    }
                }
            }




        }

        if ($_POST["action"] == "imgmulti") {
            // print_r($_POST['file']);

            $checksize = 0;
            $checktype = 0;
            $checkfile = 0;
            $id = $_POST['cbid'];

            if ($_POST['upload'] == "yes") {
                if (isset($_FILES['file'])) {
                    $errors = array();

                    $total = count($_FILES['files']['name']);
                    for ($i = 0; $i < $total; $i++) {
                        $file_name = $_FILES['files']['name'][$i];
                        $file_size = $_FILES['files']['size'][$i];
                        $file_tmp = $_FILES['files']['tmp_name'][$i];
                        $file_type = $_FILES['files']['type'];
                        $file_ext = strtolower(end(explode('.', $file_name)));


                        $extensions = array("jpeg", "jpg", "png");

                        if (in_array($file_ext, $extensions) === false) {
                            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
                            $checktype += 1;
                        }

                        if ($file_size > 2097152) {
                            $errors[] = 'File size must be excately 2 MB';
                            $checksize += 1;
                        }

                        if (empty($errors) == true) {
                            // $file_name = $_POST['data'].".".$file_ext;
                            $file_name = $_POST['data'] . "_" . date("y_d_m") . date("h_i_sa") . "." . $file_ext;
                            $sql = "INSERT INTO `tblgalleryimage`(`ImgPath`, `GalleryCategoryId`, `status`) VALUES ('$file_name','$id','1')";
                            // $sql = "UPDATE `tblgallerycategory` SET `categoryImage`= '$file_name' where `galleryCatagoryId`= $id";
                            // echo $sql;
                            $result = $conn->query($sql);
                            if ($result) {
                                move_uploaded_file($file_tmp, "image/gallery/" . $file_name);
                                // echo 3;
                                $checkfile += 1;
                            }

                        } else {

                            //    print_r($errors);
                            // echo $check;



                        }
                    }
                    if ($checktype >= 1) {
                        echo $checktype . "Discarded becuase type not match ";
                    }
                    if ($checksize >= 1) {
                        echo $checksize . "Discarded becuase size is more than 2 mb";
                    }
                    if ($checkfile >= 1) {
                        echo $checkfile . "files uploaded successfully";
                    }



                }
            }

        }











    }

    if ($_POST["id"] == "managegallery") {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "rms";

        $conn = new mysqli($host, $username, $password, $database);

        if (!$conn) {
            echo "Database connection failed. Error:" . $conn->error;
            exit;
        }

        if ($_POST["action"] == "image")
        // if(1)
        {

            $sql = "SELECT * FROM `tblgallerycategory` where `status`=1";
            $result = $conn->query($sql);

            while ($row = mysqli_fetch_row($result)) {
                $output .= ' <div class="min-height-200px">
												
												
                <h5 class="h4 text-blue mb-10">';
                $output .= $row[1];
                $output .= '</h5>
                <hr>
                <div class="row clearfix">
                ';
                $sql2 = " SELECT * FROM `tblgalleryimage` where GalleryCategoryId='$row[0]' ";
                // echo $sql2;
                $result2 = $conn->query($sql2);

                //read image from dataabsse which datatype is blob
                while ($row2 = mysqli_fetch_row($result2)) {
                    $output .= '<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="da-card">
                        <div
                            class="da-card-photo">
                            <img src="image/gallery/';
                    $output .= $row2['1'];
                    $output .= '"
                                alt="" data-eid="';
                    $output .= $row2['0'];
                    $output .= '"/>
                            <div
                                class="da-overlay">
                                <div
                                    class="da-social">
                                    <ul
                                        class="clearfix">
                                        <li>
                                            <a data-toggle="modal" id="edit" data-target="#bd-example-modal-lg';
                                            $output .= "$row[0]";
                                            $output .= '"
                                            data-eeid="';
                                            $output .= "$row[0]";
                                                $output.='href="#"><i
                                                    class="fa fa-edit"></i></a>


                                                   
                                        </li>
                                        <li>
                                            <a
                                            href="#"
                                            class="btn-block"
                                            data-toggle="modal"
                                            data-target="#confirmation-modal';
                    $output .= "$row2[0]";
                    $output .= '"
                                            data-eid="';
                    $output .= "$row2[0]";
                    $output .= '"
                                    
                                            type="button" 
                                        >
                                        <i class="fa fa-remove" id="del" ></i> 
                                    
                                        </a>
                                           
                                        </li>
                                    
                                    </ul>
                                </div>
                            </div>
                        </div>
            
                    </div>
                </div>';

                    //status change image
                    $output .= ' <div class="col-md-4 col-sm-12 mb-30">
                    <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg';
                            $output .= "$row[0]";
                            $output .= '" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-updialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel" >
                                        Update
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="close">
                                        ×
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="form-edit-cr">
                                        <div class="form-group row">
                                           
                                            <div class="col-sm-12 col-md-10">
                                                <input type="hidden" id="hiddencode"  value="';
                                                    $output .= "$row2[0]";
                                                    $output .= '">
                                               
                                                    

                                                    <div class="select-role">
														<div class="btn-group btn-group-toggle" data-toggle="buttons">';
                                                        if($row[3]==0){
															$output .= '<label class="btn">
                                                            
                                                                    
																<input type="radio" name="options" id="active">

																
																DeActive
															</label>
                                                            
                                                            <label class="btn">
																
                                                                
                                                                <input type="radio" name="options" id="deactive" checked>

																
																
																Active
															</label>';
                                                        }
                                                        if($row[3]==1){
															$output .= '<label class="btn">
																<input type="radio" name="options" id="active" checked>
                                                                

																
																
																Active
															</label>
                                                            
                                                            <label class="btn">
																
                                                                <input type="radio" name="options" id="deactive" >

																
																
																DeActive
															</label>';
                                                        }
														$output .= '</div>
													</div>
                   

                    
                          
                                                                                                                                        

                                            </div>
                                        
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-dismiss="modal">

                                        Close
                                    </button>
                                    <button name="editpromo" class="btn btn-primary"  id="editme">
                                        Save changes
                                    </button>
                                    </form>
                                </div>
                            </div>
                            </div>

                            </div>
                            </div>
                            </div>
                            </div>



                        ';


                    // delete image
                    $output .= '<div class="modal fade" id="confirmation-modal';
                    $output .= $row2[0];
                    $output .= '" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center font-18">
                                <h4 class="padding-top-30 mb-30 weight-500">
                                    Are you sure you want to continue?
                                </h4>
                                <input type="hidden" id="hide"  value="';
                    $output .= "$row2[0]";
                    $output .= '">
                                <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        NO
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="btn-block" data-toggle="modal" data-target="#success-modal" type="button">
                                            <button type="button" class="btn btn-primary border-radius-100 btn-block confirmation-btn" id="yes" data-dismiss="modal">
                                                <i class="fa fa-check" ></i>
                                            </button>
                                            YES
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>';
                }
                $output .= '</div></div>';
            }

            echo $output;

        }

        if ($_POST["action"] == "d") {
            $id = $_POST["eid"];
            $sql = "DELETE FROM `tblgalleryimage` WHERE `ImageId`=$id";
            // echo $sql;
            $result = $conn->query($sql);
            if ($result) {
                echo 1;
            }
        }

        if ($_POST["action"] == "edit") {
            $id = $_POST["eid"];
            $data = $_POST["data"];
            $sql = "UPDATE `tblgalleryimage`SET `status`='$data'  WHERE `ImageId`=$id";
            // echo $sql;
            $result = $conn->query($sql);
            if ($result) {
                echo 1;
            }
        }

    }

    if ($_POST["id"] == "managecategory") {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "rms";

        $conn = new mysqli($host, $username, $password, $database);

        if (!$conn) {
            echo "Database connection failed. Error:" . $conn->error;
            exit;
        }
       

        if ($_POST["action"] == "c")
        // if(1)
        {
            $catname= $_POST['cat'];
            $branchname=$_POST['branch'];
            // regex which allow only charter
            if(preg_match('/^[A-Za-z]{2,10}$/', $catname))
            {
                $sql = "INSERT INTO `tblitemcategory`(`name`, `branchid`) VALUES ('$catname','$branchname')";   
                $result=$conn->query($sql);
                if($result)
                {
                    echo 1;
                }
                else
                {
                    echo 3;
                }
            }
            else
            {
                echo 2;
            }

        }

        //read category
        if ($_POST["action"] == "r")
        // if(1)
        {

            
            $sql = "SELECT * FROM `tblitemcategory` where branchid=".$_SESSION['bid'];
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0) {
                $output = '

             <table class="data-table table hover multiple-select-row nowrap" >
								<thead>
                                <tr>
                                <th class="table-plus datatable-nosort">Category Name</th>
                            
                            <th>Branch Code</th>
                            
                            <th>Status</th>
                            <th>Update</th>
                            <th>Delete</th>
                                
                            </tr>
								</thead>
								<tbody>';

                while ($row = mysqli_fetch_array($result)) {

                    // $output .="<tr><td>{$row[0]}</td><td>{$row[2]}</td><td><button class='delete-btn' data-id='{$row[0]}'>delete</button></td></tr>";
                        $output .= "<tr>
            <td class=\"table-plus\">{$row[1]}</td>
            <td>{$row[2]}</td>
            
            ";

                    if ($row[4]) {
                        $output .= "<td>
                                                                
            <div class=\"bootstrap-badge\">

            <a href=\"javascript:void()\" id=\"bbb\" class=\"badge badge-rounded badge-success\" style=\"font-weight:560;border-radius:35px;\">Active</a>
            
           
            </div>
            
            </td>";
                    } else {
                        $output .= "<td>
                                                                    
            <div class=\"bootstrap-badge\">
            <a href=\"javascript:void()\" id=\"bbb\" class=\"badge badge-rounded badge-danger\" style=\"font-weight:560;border-radius:35px;\">Deactive</a>

              
               </div>
               </td>";

                    }
                    $output .= '<td>
             <button  data-toggle="modal" id="edit" data-target="#bd-example-modal-lg';
                    $output .= "$row[0]";
                    $output .= '"
                    data-eeid="';
                    $output .= "$row[0]";
                    $output .= '" class="dropdown-item" class="btn-block"  >
                 <i class="dw dw-edit2" ></i>Edit</button></td>
                                                            
                 <td>
                 <a class="btn-block" data-toggle="modal" data-target="#success-modal';
                    $output .= "$row[0]";

                    $output .= '"type="button" >
                
                            <a
                    href="#"
                    class="btn-block"
                    data-toggle="modal"
                    data-target="#confirmation-modal';
                                $output .= "$row[0]";
                                $output .= '"
                    data-eid="';
                    $output .= "$row[0]";
                    $output .= '"

                type="button" 
            >
            <i class="dw dw-delete-3" id="del" ></i> Delete

            </a>
                    </td>

                                                                    ';

                    $output .= "</tr>";
                    ;


                    // Update Model

                    $output .= ' <div class="col-md-4 col-sm-12 mb-30">
                    <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg';
                    $output .= "$row[0]";
                    $output .= '" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-updialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel" >
                                        Update
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="close">
                                        ×
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="form-edit-cr">
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-md-2 col-form-label">Promo Code</label>
                                            <div class="col-sm-12 col-md-10">
                                                <input type="hidden" id="hiddencode"  value="';
                    $output .= "$row[0]";
                    $output .= '">
                                                <input class="form-control" type="text" name="promocodename" id="cname1" value="';
                    $output .= "$row[1]";
                    $output .= '" required/>
                                                <div class="form-group has-danger">
                                                                <div class="form-control-feedback" id="error5">

                                                                </div>
                                                            </div>
                                               
                                            </div>  
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-md-2 col-form-label">Branch Name</label>
                                            <div class="col-sm-12 col-md-10">

                                            ';
                    $sql_branch = "select * from tblbranch";
                    $result_branch = $conn->query($sql_branch);
                    $output .= '<select class="custom-select col-12" name="branchcode" id="branchcode1';
                    $output .= "$row[0]";
                    $output .= '"
                                                    required>';


                    while ($row_branch = mysqli_fetch_array($result_branch)) {
                        if ($row[2] == $row_branch[0]) {
                            $output .= "<option value=\"$row_branch[0]\" selected>$row_branch[1]</option>";
                        } else {
                            //  echo $row[3];   
                            $output .= "<option value=\"$row_branch[0]\" id=\"$row[3]\">$row_branch[1]</option>";

                        }



                    }
                    //    mysqli_close($conn);
                    $output .= '</select>';

                    $output .= '
                                         
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-md-2 col-form-label">Status :</label>
                                            <div class="col-sm-12 col-md-10">
                                            
                                            <!--  -->
                                          <div class="mb-30">';


                    if ($row[4] == 1) {




                        $output .= '<label class="radio-inline mr-3"><input type="radio" name="rb" id="status-ac" value="1"  data-check="1"required checked /> Active</label>';
                        $output .= '<label class="radio-inline mr-3"><input type="radio"  name="rb" id="status-dc" value="0" required/ > Deactive</label>';
                        








                    } else {
                        $output .= '<label class="radio-inline mr-3"><input type="radio" name="rb1" id="status-ac" value="1"   data-check="0"> Active</label>';

                        $output .= '<label class="radio-inline mr-3"><input type="radio" name="rb1"  id="status-dc"  value="0" checked > Deactive</label>';

                    }


                    $output .= '
            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="title">
                                                    <!-- <h4>Image Dropzone</h4> -->
                                                </div>
                                                <nav aria-label="breadcrumb" role="navigation">

                                                </nav>
                                            </div>

                                            <!-- Submit button -->

                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-dismiss="modal">

                                        Close
                                    </button>
                                    <button name="editpromo" class="btn btn-primary" type="submit" id="editme">
                                        Save changes
                                    </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>';


                    $output .= '<div class="col-md-4 col-sm-12 mb-30">

                <div class="modal fade" id="confirmation-modal';
                    $output .= $row[0];
                    $output .= '" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center font-18">
                                <h4 class="padding-top-30 mb-30 weight-500">
                                    Are you sure you want to continue?
                                </h4>
                                <input type="hidden" id="hide"  value="';
                    $output .= "$row[0]";
                    $output .= '">
                                <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        NO
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="btn-block" data-toggle="modal" data-target="#success-modal" type="button">
                                            <button type="button" class="btn btn-primary border-radius-100 btn-block confirmation-btn" id="yes" data-dismiss="modal">
                                                <i class="fa fa-check" ></i>
                                            </button>
                                            YES
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <!-- </div> -->
            </div>';







                }
                $output .= "</tbody></table>";

                echo $output;



            } else {
                $output .= '
                
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                            <th class="table-plus datatable-nosort">Category Name</th>
                            
                            <th>Branch Code</th>
                            
                            <th>Status</th>
                            <th>Update</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        </table>
                        ';
                echo $output;
            }

        }
        if ($_POST["action"] == "e")
       
        {
            // print_r($_POST);

            $branchid = $_POST['branch'];
            $status=$_POST['status'];
            $idd=$_POST['idd'];
            $name = $_POST['name'];

            if (preg_match("/^[a-zA-Z]*$/", $name)) {
                // $check = 1;


            $sql = "update `tblitemcategory` SET `branchid`=$branchid,`status`=$status,`name`='$name' WHERE `ItemCategoryId`=$idd ";
                // echo $sql;
            $result = mysqli_query($conn, $sql);
            if($result)
            {
                echo 1;
            }
            else
            {
                    echo 3;
            }
            } 


            else {
                $check = 2;

            }
            


        }
        if ($_POST["action"] == "d") {
            $id = $_POST["eid"];
            $sql = "DELETE FROM tblitemcategory where `ItemCategoryId`=$id";
            // echo $sql;
            $result = $conn->query($sql);
            if ($result) {
                echo 1;
            }

        }

    }


    if ($_POST["id"] == "managemenuitem") {

        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "rms";

        $conn = new mysqli($host, $username, $password, $database);

        if (!$conn) {
            echo "Database connection failed. Error:" . $conn->error;
            exit;
        }
        if ($_POST["action"] == "r")
        // if(1)
        {
            echo '<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
            <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
            <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
            <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
            <!-- buttons for Export datatable -->
            <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
            <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
            <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
            <!-- Datatable Setting js -->
            <script src="vendors/scripts/datatable-setting.js"></script>';



            $sql = "SELECT * FROM `tblitem`  ";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0) {
                // echo "hello";
                $output = '

             <table class="data-table table hover multiple-select-row nowrap" >
								<thead>
                                <tr>
                                <th>item name
                            </th>
                            
                            <th>Description</th>
                            
                            <th>Price</th>
                            <th>Category</th>
                            <th>Branchcode</th>

                            <th>Status</th>

                            <th>Edit</th>
                            <th>Delte</th>
                                
                            </tr>
								</thead>
								<tbody>';

                while ($row = mysqli_fetch_array($result)) {

                    // $output .="<tr><td>{$row[0]}</td><td>{$row[2]}</td><td><button class='delete-btn' data-id='{$row[0]}'>delete</button></td></tr>";
                        $output .= "<tr>
            <td class=\"table-plus\">{$row[1]}</td>


            <td>{$row[3]}</td>";
                     $sql_branch = "select * from tblitemcategory where `ItemCategoryId`=$row[5] AND  status='1'";
																	$result_branch = $conn->query($sql_branch);
                    // echo $sql_branch;
                                                                    if (mysqli_num_rows($result_branch) > 0) {
                                                                        while ($row_branch = mysqli_fetch_array($result_branch)) {
                                                                            
                                                                                $output .= "<td>{$row_branch[2]}</td>";
                                                                            
                                                                        }
                                                                    }
            $output.="<td>{$row[4]}</td>
            <td>{$row[5]}</td>

            
            ";

                    //status
                    if ($row[6]) {
                        $output .= "<td>
                                                                
            <div class=\"bootstrap-badge\">

            <a href=\"javascript:void()\" id=\"bbb\" class=\"badge badge-rounded badge-success\" style=\"font-weight:560;border-radius:35px;\">Active</a>
            
           
            </div>
            
            </td>";
                    } else {
                        $output .= "<td>
                                                                    
            <div class=\"bootstrap-badge\">
            <a href=\"javascript:void()\" id=\"bbb\" class=\"badge badge-rounded badge-danger\" style=\"font-weight:560;border-radius:35px;\">Deactive</a>

              
               </div>
               </td>";

                    }
                    $output .= '<td>
             <button  data-toggle="modal" id="edit" data-target="#bd-example-modal-lg';
                    $output .= "$row[0]";
                    $output .= '"
                    data-eeid="';
                    $output .= "$row[0]";
                    $output .= '" class="dropdown-item" class="btn-block"  >
                 <i class="dw dw-edit2" ></i>Edit</button></td>
                                                            
                 <td>
                 <a class="btn-block" data-toggle="modal" data-target="#success-modal';
                    $output .= "$row[0]";

                    $output .= '"type="button" >
                
                            <a 
                    href="#" id="del" 
                    class="btn-block"
                    data-toggle="modal"
                    data-target="#confirmation-modal';
                                $output .= "$row[0]";
                                $output .= '"
                    data-eid="';
                    $output .= "$row[0]";
                    $output .= '"

                type="button" 
            >
            <i class="dw dw-delete-3" ></i> Delete

            </a>
                    </td>

                                                                    ';

                    $output .= "</tr>";
                    ;


                    // Update Model

                    $output .= ' <div class="col-md-4 col-sm-12 mb-30">
                    <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg';
                    $output .= "$row[0]";
                    $output .= '" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-updialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel" >
                                        Update
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="close">
                                        ×
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="form-edit-cr">
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-md-2 col-form-label">Item Name</label>
                                            <div class="col-sm-12 col-md-10">
                                                <input type="hidden" id="hiddencode"  value="';
                    $output .= "$row[0]";
                    $output .= '">
                                                <input class="form-control" type="text" name="promocodename" id="nameedit';
                                                $output .= "$row[0]";
                                                $output .= '" value="';
                    $output .= "$row[1]";
                    $output .= '" required/>
                                                <div class="form-group has-danger">
                                                                <div class="form-control-feedback" id="error11">

                                                                </div>
                                                            </div>
                                               
                                            </div>  
                                        </div>
                                        


															<div
																class="form-group row">
																<label
																	class="col-sm-12 col-md-2 col-form-label">Description</label>
																<div
																	class="col-sm-12 col-md-10">
																	<input class="form-control"
																		type="text"
																		placeholder="This is made up of chatani"
																		id="descriptionedit';
                                                                        $output .= "$row[0]";
                                                                        $output .= '" value="';
                                                                        $output .= "$row[3]";
                                                                        $output .= '" />
																	<div
																		class="form-group has-danger">
																		<div class="form-control-feedback"
																			id="error12">

																		</div>
																	</div>
																</div>
															</div>

															<div
																class="form-group row">
																<label
																	class="col-sm-12 col-md-2 col-form-label">Price</label>
																<div
																	class="col-sm-12 col-md-10">
																	<input class="form-control"
																		type="number"
																		placeholder="102"
																		id="priceedit';
                                                                        $output .= "$row[0]";
                                                                        $output .= '"  value="';
                                                                        $output .= "$row[4]";
                                                                        $output .= '"/>
																	<div
																		class="form-group has-danger">
																		<div class="form-control-feedback"
																			id="error13">

																		</div>
																	</div>
																</div>
															</div>

															

															<div
																class="form-group row">
																<label
																	class="col-sm-12 col-md-2 col-form-label">Category</label>
																<div
																	class="col-sm-12 col-md-10" id="catdisplay">';
                                                                    $sql_branch = "select * from tblitemcategory where status='1'";
																	$result_branch = $conn->query($sql_branch);
                    if (mysqli_num_rows($result_branch) > 0) {
                        $output .= '<select class="custom-select col-12" name="branchcode" id="catcodee';
                        $output .= "$row[0]";
                        $output .= '"
																	    required>';
                        $output .= '<option value="" selected disabled hidden>Choose here</option>';

                        while ($row_branch = mysqli_fetch_array($result_branch)) {
                            if ($row[6] == $row_branch[0] )
                                $output .= "<option value=\"$row_branch[0]\" >$row_branch[1]</option>";
                            else
                                $output .= "<option value=\"$row_branch[0]\" selected>$row_branch[1]</option>";



                        }
                        $output .= "</select>";
                    } 
																	
																	$output.='<div
																		class="form-group has-danger">
																		<div class="form-control-feedback"
																			id="error14">
																										
																		</div>
																	</div>
																</div>
															</div>

                                                            <div
																class="form-group row">
																<label
																	class="col-sm-12 col-md-2 col-form-label">Current
																	Images</label>
																<div
																	class="col-sm-12 col-md-10">
																	<div
																		class="custom-file" style="height: 25%;width: 35%;">
																		
																		<label
																			class="">Current Image</label>
                                                                            <img src="image/item/';
                                                                            
                                                                            $output .= "$row[2]";


                                                                            
                                                                            
                                                                            $output.='" style=" box-shadow: black;
                                                                            box-shadow: -1px 0px 17px 0px black;"/>


																		<div
																			class="form-group has-danger">
																			<div class="form-control-feedback"
																				id="error15">

																			</div>
																		</div>
																	</div>
																</div>
															</div>


															<div
																class="form-group row">
																<label
																	class="col-sm-12 col-md-2 col-form-label">Upload
																	Images</label>
																<div
																	class="col-sm-12 col-md-10">
																	<div
																		class="custom-file">
																		<input type="file"
																			id="fileedit';
                                                                            $output .= "$row[0]";
                                                                            $output .= '"
																			class="">
																		<label
																			class="">Change Image</label>
                                                                            

																		<div
																			class="form-group has-danger">
																			<div class="form-control-feedback"
																				id="error5">

																			</div>
																		</div>
																	</div>
																</div>
															</div>
                                       
                                        
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-md-2 col-form-label">Status :</label>
                                            <div class="col-sm-12 col-md-10">
                                            
                                            <!--  -->
                                          <div class="mb-30">';


                    if ($row[6] == 1) {




                        $output .= '<label class="radio-inline mr-3"><input type="radio" name="rb'.$row[0].'" id="status-ac" value="1"  data-check="1"required checked /> Active</label>';
                        $output .= '<label class="radio-inline mr-3"><input type="radio"  name="rb'.$row[0].'" id="status-dc" value="0" required/ > Deactive</label>';
                        








                    } else {
                        $output .= '<label class="radio-inline mr-3"><input type="radio" name="rbd'.$row[0].'" id="status-ac" value="1"   data-check="0" 12> Active</label>';

                        $output .= '<label class="radio-inline mr-3"><input type="radio" name="rbd'.$row[0].'"  id="status-dc"  value="0" checked 11> Deactive</label>';

                    }


                    $output .= '
                    </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="title">
                                                    <!-- <h4>Image Dropzone</h4> -->
                                                </div>
                                                <nav aria-label="breadcrumb" role="navigation">

                                                </nav>
                                            </div>

                                            <!-- Submit button -->

                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-dismiss="modal">

                                        Close
                                    </button>
                                    <button name="editpromo" class="btn btn-primary" type="submit" id="editme">
                                        Save changes
                                    </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>';


                    $output .= '<div class="col-md-4 col-sm-12 mb-30">

                <div class="modal fade" id="confirmation-modal';
                    $output .= $row[0];
                    $output .= '" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center font-18">
                                <h4 class="padding-top-30 mb-30 weight-500">
                                    Are you sure you want to continue?
                                </h4>
                                <input type="hidden" id="hide"  value="';
                    $output .= "$row[0]";
                    $output .= '">
                                <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        NO
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="btn-block" data-toggle="modal" data-target="#success-modal" type="button">
                                            <button type="button" class="btn btn-primary border-radius-100 btn-block confirmation-btn" id="yes" data-dismiss="modal">
                                                <i class="fa fa-check" ></i>
                                            </button>
                                            YES
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <!-- </div> -->
             </div>';







                }
                $output .= "</tbody></table>";

                echo $output;



            } else {
                $output .= '
                
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                            <th >item name
                            </th>
                            
                            <th>Description</th>
                            
                            <th>Price</th>
                            <th>Category</th>
                            <th>Branchcode</th>

                           
                            <th>Status</th>

                            <th>Edit</th>
                            <th>Delte</th>

                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        </table>
                        ';
                echo $output;
            }

        }

        //submit 
        if ($_POST["action"] == "c")
        // if(1)
        {
            // print_r($_POST);
            // print_r($_FILES);

            $itemname = $_POST["name"];
            $description = $_POST["description"];
            $price = $_POST["price"];
            $category = $_POST["category"];
            $branch = $_POST["branchcode"];

            $sql = "SELECT * from `tblitem` where `name` = '$itemname'";
            $result = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($result))
            {
                $sql2 = "SELECT * from `tblitemcategory` where `ItemCategoryId`=$row[5]";
                $result2 = mysqli_query($conn, $sql2);
                if(mysqli_num_rows($result2) > 0){
                    echo "Product Name is already avaliable try diffrent product";
                    exit();
                }
            }

            // echo $sql;
            

            // regex which check string is valid or not
            if (preg_match("/^[a-zA-Z ]{2,}$/", $itemname) == 0) {
                echo "name error";
                exit();
            }
            if (preg_match("/^[a-zA-Z ]{2,}$/", $description) == 0) {
                echo "description error";
                exit();
            }
            if (preg_match("/^[0-9]{2,4}$/", $price) == 0) {
                echo "price error";
                exit();
            }
            if (preg_match("/^[0-9]*$/", $category) == 0) {
                echo "category error";
                exit();
            }
            if (preg_match("/^[0-9]*$/", $branch) == 0) {
                echo "branch error";
                exit();
            }

           


            if (isset($_FILES['file'])) {
                $errors = array();
                $file_name = $_FILES['file']['name'];
                $file_size = $_FILES['file']['size'];
                $file_tmp = $_FILES['file']['tmp_name'];
                $file_type = $_FILES['file']['type'];
                $file_ext = strtolower(end(explode('.', $file_name)));

                $extensions = array("jpeg", "jpg", "png");

                if (in_array($file_ext, $extensions) === false) {
                    $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
                    $check = "File size is not allowed";
                    exit();
                }

                if ($file_size > 2097152) {
                    $errors[] = 'File size must be excately 2 MB';
                    // $check = 2;
                    echo "File size is less than 2MB";

                    exit();

                }

                if (empty($errors) == true) {
                    $newString = str_replace(' ', '_', $_POST['name']);
                    $file_name = $newString . "_".$_POST['cname'].".".$file_ext;
                    // $file_name=$_POST['data']."_".date("y_d_m").date("h_i_sa").".".$file_ext;
                    

                    $sql = "INSERT INTO`tblitem`( `name`, `itemImage`, `description`, `price`, `ItemCategoryId`) VALUES ('$itemname','$file_name','$description','$price','$category')";
                    $result = $conn->query($sql);
                    // echo $sql;
                    if ($result) {
                        move_uploaded_file($file_tmp, "image/item/" . $file_name);
                        echo "File uploaded succesfully";
                    exit();

                    }
                } else {

                    //    print_r($errors);
                    echo "error in image";


                }
            }

            // $status = $_POST["status"];
           

        }
        if ($_POST["action"] == "catdisplay")
        // if(1)
        {
            $bid=$_POST['bid'];
            
																	$sql_branch = "select * from tblitemcategory where status='1' AND `branchid` = $bid";
																	$result_branch = $conn->query($sql_branch);
            if (mysqli_num_rows($result_branch) > 0) {
                echo '<select class="custom-select col-12" name="branchcode" id="catcode"
																	    required>';
                echo '<option value="" selected disabled hidden>Choose here</option>';

                while ($row = mysqli_fetch_array($result_branch)) {
                    echo " 
																	    <option value=\"$row[0]\">$row[1]</option>";


                }
                echo "</select>";
            }
            else
            {
                echo '<select class="custom-select col-12" name="branchcode" id="catcode"
                                                                        required>';
                echo '<option value="" selected disabled hidden>No Category Avaliable for this branch</option>';
                echo "</select>";
            }
																	
																	
        }

        if ($_POST["action"] == "e")
        // if(1)
        {
            // print_r($_POST);
            
            // print_r($_FILES);

            $itemname = $_POST["name"];
            $description = $_POST["description"];
            $price = $_POST["price"];
            $category = $_POST["category"];
            $status=$_POST["status"];
            // $branch = $_POST["branchcode"];
            $did = $_POST['did'];



            // echo "$itemname $description $price $category $did";

            // regex which check string is valid or not
            if (preg_match("/^[a-zA-Z ]{2,}$/", $itemname) == 0) {
                echo "name error";
                exit();
            }
            if (preg_match("/^[a-zA-Z ]{2,}$/", $description) == 0) {
                echo "description error";
                exit();
            }
            if (preg_match("/^[0-9]{2,4}$/", $price) == 0) {
                echo "price error";
                exit();
            }
            
            if(!isset($_FILES['file']))
            {
                
            
                $sql = "UPDATE `tblitem` SET `name`='$itemname', `description`='$description', `price`='$price',`status`='$status',`ItemCategoryId`=$category where `itemId`='$did'";
                $result = $conn->query($sql);
                echo $sql;
                if($result)
                {
                    echo "Data Updated succesfully";
                    exit();
                }
            
            }
           


            if (isset($_FILES['file'])) {
                $errors = array();
                $file_name = $_FILES['file']['name'];
                $file_size = $_FILES['file']['size'];
                $file_tmp = $_FILES['file']['tmp_name'];
                $file_type = $_FILES['file']['type'];
                $file_ext = strtolower(end(explode('.', $file_name)));

                $extensions = array("jpeg", "jpg", "png");

                if (in_array($file_ext, $extensions) === false) {
                    $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
                    $check = "File size is not allowed";
                    exit();
                }

                if ($file_size > 2097152) {
                    $errors[] = 'File size must be excately 2 MB';
                    // $check = 2;
                    echo "File size is less than 2MB";

                    exit();

                }

                if (empty($errors) == true) {
                    $newString = str_replace(' ', '_', $_POST['name']);
                    $file_name = $newString . "_".$_POST['cname'].".".$file_ext;
                    // $file_name=$_POST['data']."_".date("y_d_m").date("h_i_sa").".".$file_ext;
                    

                    $sql = "UPDATE `tblitem` SET `name`='$itemname', `description`='$description',`itemImage`='$file_name',  `price`='$price',`status`='$status',`ItemCategoryId`=$category where `itemId`='$did'";
                    echo $sql;
                    $result = $conn->query($sql);
                    // echo $sql;
                    if ($result) {
                        move_uploaded_file($file_tmp, "image/item/" . $file_name);
                        echo "File uploaded succesfully";
                    exit();

                    }
                    else
                    {
                        echo "error in sql";
                    }
                } else {

                    //    print_r($errors);
                    echo "error in image";


                }
            }
            
            




        }

        if ($_POST["action"] == "d")
        // if(1)
        {
            $did = $_POST['dataid'];
            echo $did;
            $sql = "DELETE FROM `tblitem` WHERE `itemId`='$did'";
            $result = $conn->query($sql);
            // echo $sql;
            if ($result) {
                echo "Data Deleted succesfully";
                exit();
            }


        }

    }




    if ($_POST["id"] == "menu") {

        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "rms";

        $conn = new mysqli($host, $username, $password, $database);

        if (!$conn) {
            echo "Database connection failed. Error:" . $conn->error;
            exit;
        }
        if ($_POST["action"] == "r")
        // if(1)
        {
            echo '<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
            <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
            <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
            <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
            <!-- buttons for Export datatable -->
            <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
            <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
            <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
            <!-- Datatable Setting js -->
            <script src="vendors/scripts/datatable-setting.js"></script>';


            $bid = $_POST['bid'];
            $sql = "SELECT * FROM `tblitemcategory` where `branchid`=$bid and `status`=1";
            // echo $sql;
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_row($result)) {
                    $output .= '<table class="table table-bordered table-hover">
                <thead class="thead-light">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <a href="productlist.php?id='.$row[0].'">
                                <div class="da-card">
                                    <div class="da-card-photo">
                                        <img src="vendors/images/dish.png" alt="" />

                                    </div>
                                    <div class="da-card-content">
                                    <h5 class="h4 text-blue mb-10" style="display:inline-block;">' . $row[1] . '</h5>
                                        
                                    </div>
                                   
                                </div>
                                </a>
                            </div>';
                }
            } else {
                echo "No Product Avaliable";
            }



            echo $output;


        }


        if ($_POST["action"] == "footer") {
            // echo "Hlelo";
            $bid = $_POST['bid'];
            $sql = "SELECT * FROM `tblbranch` where `branchcode`='$bid' AND `status`='1'";
            // echo $sql;
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_row($result)) {
                    echo ' <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <p>Name: ' . $row[1] . '<br>
                        Address : ' . $row[2] . ',' . $row[3] . ',' . $row[4] . '


                        </p>
                        <p>Contact Number:' . $row[5] . ' </p>
                        
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>Copyright Baba Sai Resturant Co.


                        </p>
                        <p>© 2010- 2023 </p>
                    </div>
                </div>
            </div>
        </div>';
                }
            }

        }






    }


    if($_POST['id']=="productlist")
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "rms";

        $conn = new mysqli($host, $username, $password, $database);

        if (!$conn) {
            echo "Database connection failed. Error:" . $conn->error;
            exit;
        }



        if($_POST['action']=="r")
        {
           
                echo 1;

            }

            // serach image name wise
            if($_POST['action']=="search")
            {

                                        $search = $_POST['serach'];
            // echo $search;
                                       
            
                                          $getid=$_POST['getid'];
                                          $sql = "SELECT * FROM `tblitem` where `ItemCategoryId`=$getid and `status`='1' and `name` LIKE '%$search%'";
                                          $result = $conn->query($sql);
                                        //   echo $sql;
                                          if (mysqli_num_rows($result) > 0) {
                                              while ($row = mysqli_fetch_row($result)) {
                                                        echo '<div class="card card-box" id="item" data-itemid="'.$row[0].'">
                                                 <img class="card-img-top" src="image/item/'.$row[2].'"
                                                        alt="Card image cap" />
                                                 <div class="card-body">
                                                        <h5 class="card-title">'.$row[1].'</h5>
                                                        <h5 class="card-title">₹ '.$row[4].'</h5>

                                                        <a type="button" style="width: 100%;" data-itid="'.$row[0].'"
                                                               class="btn btn-outline-primary" id="" href="#">

                                                               See More
                                                        </a>
                                                 </div>
                                                 </div>';
                                              }
                                          }
                                          else
                                          {
                                                 echo "NO images found";
                                          }

            }
            //  return 1;
    }

    if ($_POST['id'] == "temp") {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "rms";

        $conn = new mysqli($host, $username, $password, $database);

        if (!$conn) {
            echo "Database connection failed. Error:" . $conn->error;
            exit;
        }


        if ($_POST['action'] == "r") {
            $total = 0;

            $sql = "select * from tblcart where `userId`=".$_SESSION['uid'];

            $result = $conn->query($sql);
            while ($row = mysqli_fetch_row($result)) {
                echo '
                <div class="row mb-4 d-flex justify-content-between align-items-center">
                <div class="col-md-2 col-lg-2 col-xl-2">
                ';
                $sql_item = "select * from tblitem where `itemId`=$row[3]";
                // echo $sql_item;
                $result_item = $conn->query($sql_item);
                while ($row_item = mysqli_fetch_row($result_item)) {
                    $total = $row[3] * $row[4];
                    echo '
            <img src="image/item/'.$row_item[2].'" class="img-fluid rounded-3"
                alt="Cotton T-shirt">
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3">
            <h6 class="text-muted">'.$row_item[1].' </h6>
            
        </div>
        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
            

            <input id="form1" min="0" name="quantity" data-id="'.$row[0].' "data-qty="'.$row[1].'" data-value="'.$row[4].'" value="'.$row[3].'" type="number"
                class="form-control form-control-sm"  style="width:100px;"/>

            
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
            <h6 class="mb-0" >
            <div class="" data-price="'.$row[0].'" value="'.$row[4].'"> ₹ '.$row[4].'
            </div>
            </h6>
        </div>
        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
            <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
        </div>
        </div>
        
        <hr class="my-4"> ';
                }
                

            
           
        }
    }
        if ($_POST['action'] == "up") {
            // print_r($_POST);
            $qty = $_POST['qty'];
            $id = $_POST['idd'];
            if($qty>5)
            {
                echo "Quantity must be less than 5";
                exit();
            }
            $sql = "update tblcart SET quantity=$qty where cartid=$id";
            // echo $sql;
            $result = $conn->query($sql);
            

        }
        if ($_POST['action'] == "promocode") {
            // print_r($_POST);
            $promocode = $_POST['promocode'];
           
            $sql = "select * from tblpromocode where status='1' AND promoCode='$promocode'";
            // echo $sql;
            $result = $conn->query($sql);
            if ($result) {

                while ($row = mysqli_fetch_row($result)) {
                    echo $row[2];
                }
            }else{
                echo 0;
            }


            

        }
        if ($_POST['action'] == "data") {


                echo '<div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100" style="box-shadow: 0px -1px 9px 3px grey;">
                    <!-- <div class="col-12"> -->
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0" style="background-color: #ba7e6be0;">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                            <h6 class="mb-0 text-muted">3 items</h6>
                                        </div>
                                        <hr class="my-4">
                                        <div >

                                        ';
                                        $total = 0;

                                        $sql = "select * from tblcart where `userId`='".$_SESSION['uid']."'";
                                        // echo $sql;
                                        $result = $conn->query($sql);
                                        while ($row = mysqli_fetch_row($result)) {
                                            echo '
                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                            ';
                                            $sql_item = "select * from tblitem where `itemId`=$row[3]";
                                            // echo $sql_item;
                                            $result_item = $conn->query($sql_item);
                                            while ($row_item = mysqli_fetch_row($result_item)) {
                                                $total += $row[3] * $row[4];
                                                echo '
                                        <img src="image/item/'.$row_item[2].'" class="img-fluid rounded-3"
                                            alt="Cotton T-shirt">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <h6 class="text-muted" id="iname">'.$row_item[1].' </h6>
                                        
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                        
                            
                                        <input id="form1" min="1" max=5 name="quantity" data-id="'.$row[0].' "data-qty="'.$row[1].'" data-value="'.$row[4].'" value="'.$row[3].'" type="number"
                                            class="form-control form-control-sm"  style="width:100px;"/>
                            
                                        
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h6 class="mb-0" >
                                        <div class="" data-price="'.$row[0].'" value="'.$row[4].'"> ₹ '.$row[4].'
                                        </div>
                                        </h6>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                    </div>
                                    </div>
                                    
                                    <hr class="my-4"> ';
                                            }
                                            
                            
                                        
                                       
                                    }

                                        echo '</div>
    
    
    
    
                                        <div class="pt-5">
                                            <h6 class="mb-0"><a href="Menu.php" class="text-body"><i
                                                        class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 bg-grey" style="background-color:#ff3c19a1;">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Enjoy your shopping</h3>
                                        <hr class="my-4">
    
                                        <div class="form-group">
                                            <h5 class="text-uppercase mb-3">Enter PICKUP TIMING</h5>
    
                                            <input id="timepicker1" type="time" min="18:00:00" max="24:00:00" class="form-control input-small">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                        </div>
                                        <h5 class="text-uppercase mb-3">Enter Promo Code</h5>
    
                                        <div class="mb-5">
                                            <div class="form-outline">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control form-control-lg" />
                                                    <div class="form-group has-danger">
                                                    <div class="form-control-feedback" id="error1">

                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <h5 class="text-uppercase mb-3">Notes if any</h5>
    
                                        <div class="mb-5">
                                            <div class="form-outline">
                                                <input type="text" id="desc"
                                                    class="form-control form-control-lg" />
                                                    <div class="form-group has-danger">
                                                    <div class="form-control-feedback" id="error2">

                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>

    
                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Total price</h5>
                                            <h5 id="total">'.$total.'</h5>
                                        </div>
                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Discount</h5>
                                            <h5 id="discount">00.00</h5>
                                        </div>
    
                                        <hr class="my-4">
    
                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Total Bill price</h5>
    
                                            <h5 id="amt">'.$total.'</h5>
                                        </div>
    
                                        <button type="button" class="btn btn-dark btn-block btn-lg"
                                            data-mdb-ripple-color="dark" id="check">Check Out</button>
                                        <!-- </div> -->
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>';

            


                 

            }

        
        

    }


    if ($_POST['id'] == "managetable") {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "rms";

        $conn = new mysqli($host, $username, $password, $database);

        if (!$conn) {
            echo "Database connection failed. Error:" . $conn->error;
            exit;
        }

        if ($_POST['action'] == "c") {
            // print_r($_POST);

            $branchcode = $_POST['branchcode'];
            $str1 = $_POST['str1'];
            $str2 = $_POST['str2'];
            $i = $_POST['slice1'];
            $end = $_POST['slice2'];

            while($i<=$end)
            {
                $con = $str1 . $i;
                $sql2="select * from `tbltable` where `tableCode`='$con' AND `branchCode`='$branchcode'";
                
                 $result2=$conn->query($sql2);

                if(mysqli_num_rows($result2)>0)
                {
                    echo "$con Table is already avaliable";
                    exit();
                }
                

                $sql="INSERT INTO `tbltable`(`tableCode`, `branchCode`, `status`) VALUES ('$con','$branchcode','1') ";
               

                $result = $conn->query($sql);
                

                $i = $i + 1;

            }
            echo 1;


            
        }


        if ($_POST['action'] == "r") {
            // print_r($_POST);
            echo '<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
            <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
            <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
            <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
            <!-- buttons for Export datatable -->
            <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
            <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
            <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
            <!-- Datatable Setting js -->
            <script src="vendors/scripts/datatable-setting.js"></script>';


            $sql = "select * from tbltable where branchCode=".$_SESSION['bid'];
            $result = $conn->query($sql);

            $output = "";

            if (mysqli_num_rows($result) > 0) {
                $output = '

    <table class="data-table table hover multiple-select-row nowrap" >
								<thead>
                                <tr>
                                <th>Table Code</th>
                                <th>Branch Code</th>
                               
                                <th>Delete</th>
                                
                            </tr>
								</thead>
								<tbody>
    
    
    ';

                while ($row = mysqli_fetch_array($result)) {

                    
                    $output .= '<tr>
        <td >'.$row[1].'</td>
        <td>'.$row[2].'</td>
        <td>
        <a class="btn-block" data-toggle="modal" data-target="#success-modal';
        $output .= "$row[0]";

        $output .= '"type="button" >
    
     <a
href="#"
class="btn-block"
data-toggle="modal"
data-target="#confirmation-modal';
        $output .= "$row[0]";
        $output .= '"
data-eid="';
        $output .= "$row[0]";
        $output .= '"

type="button" 
>
<i class="dw dw-delete-3" id="del" ></i> Delete

</a>
        </td>
        </tr>
        ';
        $output .= '<div class="col-md-4 col-sm-12 mb-30">

        <div class="modal fade" id="confirmation-modal';
            $output .= $row[0];
            $output .= '" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center font-18">
                        <h4 class="padding-top-30 mb-30 weight-500">
                            Are you sure you want to continue?
                        </h4>
                        <input type="hidden" id="hide"  value="';
            $output .= "$row[0]";
            $output .= '">
                        <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto">
                            <div class="col-6">
                                <button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal">
                                    <i class="fa fa-times"></i>
                                </button>
                                NO
                            </div>
                            <div class="col-6">
                                <a href="#" class="btn-block" data-toggle="modal" data-target="#success-modal" type="button">
                                    <button type="button" class="btn btn-primary border-radius-100 btn-block confirmation-btn" id="yes" data-dismiss="modal">
                                        <i class="fa fa-check" ></i>
                                    </button>
                                    YES
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
        <!-- </div> -->
    </div>';







        }
        $output .= "</tbody></table>";

        echo $output;

                }

            }

            if ($_POST["action"] == "d") {
                $id = $_POST["eid"];
                $sql = "DELETE FROM tbltable where `tableNo`='$id'";

                // echo $sql;
                $result = $conn->query($sql);
                if ($result) {
                    echo 1;
                }
            }



        
    }

    if ($_POST['id'] == "register") {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "rms";

        $conn = new mysqli($host, $username, $password, $database);

        if (!$conn) {
            echo "Database connection failed. Error:" . $conn->error;
            exit;
        }

        if ($_POST['action'] == "c") {
            // print_r($_POST);
            $name=$_POST['name'];
            $pwd=$_POST['pwd'];
            $pwd2=$_POST['pwd2'];
            $mail=$_POST['mail'];
            $vaidname = false;
            $validmail = false;
            $validpwd = false;
            $validpwd2 = false;

            if(empty($name)||empty($pwd)||empty($mail))
            {
                echo "Filed should not be empty";
                exit();

            }
            else
            {
                if(preg_match("/^[a-zA-Z]*$/", $name))   
                {
                    $validname=true;
                    if(filter_var($mail,FILTER_VALIDATE_EMAIL))
                    {
                        $validmail=true;
                        if(preg_match("/^[a-zA-Z]*$/", $name))
                        {
                            $validpwd=true;
                            $hash=password_hash($pwd,PASSWORD_DEFAULT);
                            $sql="select * from tbluser where `emailid`='$mail'";
                            $result=$conn->query($sql);
                            if(mysqli_num_rows($result)>0){
                                echo "User already avaliable";
                                exit();
                            }
                            else{
                            $sql="insert into tbluser (`role`,`name`,`emailid`,`password`) VALUES ('0','$name','$mail','$hash');";
                                // echo $sql;
                            $result=$conn->query($sql);
                            if($result)
                            {
                                echo "User succesfully registred";
                            }
                            else
                            {
                                    echo "error in query";
                            }
                            }
                        }
                        else
                        {
                            echo "password must have a character";
                        }
                    }else
                    {
                        echo "email formate is not valid";
                        exit();
                    }
                }
                else
                {
                    // validate mail  in php
                    echo "Name not contain any space";
                    exit();
                }

            }
        }   
    }


    if ($_POST['id'] == "register") {
       $host = "localhost";
       $username = "root";
       $password = "";
       $database = "rms";

       $conn = new mysqli($host, $username, $password, $database);

       if (!$conn) {
           echo "Database connection failed. Error:" . $conn->error;
           exit;
       }

       if ($_POST['action'] == "r") {
              echo '<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
              <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
              <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
              <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
              <!-- buttons for Export datatable -->
              <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
              <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
              <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
              <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
              <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
              <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
              <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
              <!-- Datatable Setting js -->
              <script src="vendors/scripts/datatable-setting.js"></script>';

                     $sql = "select * from tblorder BY DESC";
                     $result=$conn->query($sql);
                     echo '<table>
                     <thead>
                                          <tr>
                                                 <th class="table-plus">Order No</th>
                                                 
                                                 <th>OrderType</th>
                                                 
                                                 
                                                 
                                                 <th class="datatable-nosort">TotalAmount</th>
                                          </tr>
                                   </thead>
                                   <tbody>';
                     while($row=mysqli_fetch_row($result))
                     {      
						echo "<tr>
                                                        <td>$row[0]</td>
                                                        <td>$row[3]</td>
                                                        <td>$row[4]</td>
                                                        </tr>";
                                                        

                     }
                     echo '</tbody>
                     </table>';
       }
    }




    


}




?>