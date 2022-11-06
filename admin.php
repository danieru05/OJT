<?php   
    require_once 'includes/database.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- for mabangis kapag sizing ng window goods paren sya tignan-->
        <title> Admin </title>
        <!-- Bootstrap lang eto na for CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!-- eto bootstrap JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
         
    </head> 

    <body>
        <!-- navbar-->
        <header class="navbar navbar-expand-md sticky-top flex-md-nowrap p-0 shadow">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                  <img src="logo.png" class="img-fluid" height="30" width="140" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="bi bi-person-circle" style="color: white; "></span>
              </button>
              <button class="btn border-0" type="button" style="background-color:#df7630; color:white;">Logout</button>
              </div>
        </header>
  
        
        <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="height: 100vh; background-color: rgba(0, 0, 0, .1);">
                    <div class="d-flex flex-column position-sticky pt-4" style="height:90vh; margin: 10vh 0 0 0;">
    
                        <!-- categories-->
                        <ul class="nav nav-pills flex-column mb-auto" id="sidebar-tab"  role="tablist" aria-orientation="vertical">
                            <li class="nav-item mb-1"> <!-- the profile tab-->
                                <a class="nav-link active" aria-current="page" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#profile" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                    <i class="bi bi-person-lines-fill me-2"></i> User Management
                                </a>
                            </li>
                            <li class="nav-item mb-1"> <!-- borrow tab -->
                                <a class="nav-link"  id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#borrow" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                    <i class="bi bi-bag-fill me-2"></i> Inventory System
                                </a>
                            </li>
                            <li class="nav-item mb-1"> <!-- sched tab-->
                                <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#schedule" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                    <i class="bi bi-calendar-event-fill me-2"></i> Appointments 
                                </a>
                            </li>
                            <li class="nav-item mb-1"> <!-- download-->
                                <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#download" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                    <i class="bi bi-pc-display-horizontal me-2"></i> System Management
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>



                <!-- contents for Admin -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5" style="overflow-y: auto; margin-top: 2.5vh;">
                    <div class="tab-content" id="sidebar-tabContent">


                        <!-- User Management Tab -->
                        <div class="tab-pane fade show active mt-3" id="profile" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

                            <!-- profile tabs -->
                            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                <li class="nav-item shadow-right"> <!-- student button -->
                                    <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#user-manage-students" type="button" role="tab" aria-controls="about-tab-pane" aria-selected="true">Students</button>
                                </li>
                                <li class="nav-item"> <!-- faculty button -->
                                    <button class="nav-link" id="timeline-tab" data-bs-toggle="tab" data-bs-target="#user-manage-faculty" type="button" role="tab" aria-controls="timeline-tab-pane" aria-selected="false">Faculty</button>
                                </li>
                            </ul>

                            <!-- the profile table contents -->
                            <div class="shadow p-3 mb-5 rounded" style="height: 80vh; overflow-y: auto;">
                                <div class="tab-content p-1 mb-2" id="myTabContent">
                                    <!-- about contents-->
                                    <div class="tab-pane fade show active " id="user-manage-students" role="tabpanel" aria-labelledby="about-tab" tabindex="0">
                                    
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Last Name</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Course</th>
                                                    <th>Year Level</th>
                                                    <th>Email</th>
                                                    <th colspan="3">Option</th>
                                                    <th>Validity Status</th>
                                                </tr>
                                            </thead>
                                            <tbody style="vertical-align: middle;">
                                                <tr>
                                                    <td>201810888</td>
                                                    <td>Surname</td>
                                                    <td>First Name</td>
                                                    <td>Middle Name</td>
                                                    <td>BSCoS</td>
                                                    <td>4th</td>
                                                    <td>name.surname@cvsu.edu.ph</td>
                                                    <td>
                                                        <button class="border-0" type="button" style="background-color: white;" data-bs-toggle="modal" data-bs-target="#view-studentmodal">
                                                            <i class="bi bi-eye-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details" style="color:#df7630"></i>
                                                        </button>   
                                                    </td>
                                                    <td>
                                                        <button class="border-0" type="button" style="background-color: white;">
                                                            <i class="bi bi-pen-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" style="color:#0080ff"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button class="border-0" type="button" style="background-color: white;">
                                                            <i class="bi bi-trash3-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" style="color:#e14747"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button class="btn" type="button" style="background-color: #df7630; color: white;">Approve</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                    
                                    </div>
                                    <!-- FACULTY USERS -->
                                    <div class="tab-pane fade" id="user-manage-faculty" role="tabpanel" aria-labelledby="user-manage-faculty-tab" tabindex="0">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Last Name</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Department</th>
                                                    <th>Email</th>
                                                    <th colspan="3">Option</th>
                                                    <th>Validity Status</th>
                                                </tr>
                                            </thead>
                                            <tbody style="vertical-align: middle;">
                                                <tr>
                                                    <td>201810888</td>
                                                    <td>Surname</td>
                                                    <td>First Name</td>
                                                    <td>Middle Name</td>
                                                    <td>DCS</td>
                                                    <td>name.surname@cvsu.edu.ph</td>
                                                    <td>
                                                        <button class="border-0" type="button" style="background-color: white;" data-bs-toggle="modal" data-bs-target="#view-facultymodal">
                                                            <i class="bi bi-eye-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details" style="color:#df7630"></i>
                                                        </button>   
                                                    </td>
                                                    <td>
                                                        <button class="border-0" type="button" style="background-color: white;">
                                                            <i class="bi bi-pen-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" style="color:#0080ff"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button class="border-0" type="button" style="background-color: white;">
                                                            <i class="bi bi-trash3-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" style="color:#e14747"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button class="btn" type="button" style="background-color: #df7630; color: white;">Approve</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                    </div>
                                </div>
                            </div>
                              
                            
                            <!-- View Details Modal for Students -->
                            <div class="modal fade" id="view-studentmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">View Details</h5>
                                        </div>
            
                                        <div class="modal-body">
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="text" readonly class="form-control-plaintext" id="idnummber" value="Surname, First Name Middle Name">
                                                <label for="idnumber">Name</label>
                                            </div>
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="text" readonly class="form-control-plaintext" id="idnummber" value="201810888">
                                                <label for="idnumber">ID Number</label>
                                            </div>
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="text" readonly class="form-control-plaintext" id="address" value="Tanza, Cavite">
                                                <label for="address">Address</label>
                                            </div>
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="email" readonly class="form-control-plaintext" id="email" value="name.surname@cvsu.edu.ph">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="text" readonly class="form-control-plaintext" id="course" value="Bachelor of Science in Computer Science">
                                                <label for="course">Course</label>
                                            </div>
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="text" readonly class="form-control-plaintext" id="year" value="Fourth">
                                                <label for="year">Year Level</label>
                                            </div>
                                        </div>
            
                                        <div class="modal-footer">
                                            <button type="button" class="btn border-0" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- View Details Modal for Faculty Staffs -->
                             <div class="modal fade" id="view-facultymodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">View Details</h5>
                                        </div>
            
                                        <div class="modal-body">
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="text" readonly class="form-control-plaintext" id="idnummber" value="Surname, First Name Middle Name">
                                                <label for="idnumber">Name</label>
                                            </div>
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="text" readonly class="form-control-plaintext" id="idnummber" value="201810888">
                                                <label for="idnumber">ID Number</label>
                                            </div>
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="text" readonly class="form-control-plaintext" id="address" value="Tanza, Cavite">
                                                <label for="address">Address</label>
                                            </div>
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="email" readonly class="form-control-plaintext" id="email" value="name.surname@cvsu.edu.ph">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="text" readonly class="form-control-plaintext" id="course" value="Department of Computer Studies">
                                                <label for="course">Department</label>
                                            </div>
                                        </div>
            
                                        <div class="modal-footer">
                                            <button type="button" class="btn border-0" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Inventory Tab -->
                        <div class="tab-pane fade" id="borrow" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class=" pt-3 pb-2 mb-3">
                                <h1 class="h2 fw-bolder">inventory</h1>
                            </div>
                        </div>

                        <!-- Appointments -->
                        <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="row mb-2 g-5">
                                <!-- profile tabs -->
                                <div class="col-md-8"> 
                                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                        <li class="nav-item shadow-right"> <!-- profile tab button -->
                                            <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#appointments" type="button" role="tab" aria-controls="about-tab-pane" aria-selected="true">Booked</button>
                                        </li>
                                        <li class="nav-item"> <!-- transaction history button -->
                                            <button class="nav-link" id="timeline-tab" data-bs-toggle="tab" data-bs-target="#avail" type="button" role="tab" aria-controls="timeline-tab-pane" aria-selected="false">Availables</button>
                                        </li>
                                    </ul>
        
                                    <!-- the profile table contents -->
                                    <div class="shadow p-2 mb-5 rounded" style="height: 80vh; overflow-y: auto;">
                                        <div class="tab-content p-1 mb-2" id="myTabContent">
                                            <!-- about contents-->
                                            <div class="tab-pane fade show active" id="appointments" role="tabpanel" aria-labelledby="about-tab" tabindex="0">
                                                <div class="p-2 rounded">
                                            
                                                    <div class="mb-3">
                                                        <select class="option form-select fw-bold border-0 border-bottom" aria-label="Default select example" style="font-size: 20px;">
                                                            <option selected value="none">All</option>
                                                        <?php
                                                            $categ = "SELECT * FROM categ";
                                                            $result = mysqli_query($conn,$categ);
                                                            while($row = mysqli_fetch_assoc($result)){
                                                        ?>
                                                            <option value=<?php echo $row["names"]; ?> >
                                                                <?php echo $row["names"]; ?>
                                                            </option>
                                                        <?php
                                                            }
                                                        ?>
                                                        </select>
                                                        <script>
                                                             $('.option').change(function(){
                                                                if ($(this).val() === "none") {
                                                                    $('div.opt').show();
                                                                } else {
                                                                    $('div.opt').hide();
                                                                    $('#' + $(this).val()).show();
                                                                }
                                                            });
                                                        </script>
                                                    </div>
                
                                                    
                                                    <?php
                                                        
                                                        $avail = "SELECT * FROM availables";
                                                        $result = mysqli_query($conn,$avail);
                    
                                                        while($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                                    <div class="appoint mt-5">
                                                        <div id=<?php echo $row["categ"]; ?> class="opt mt-2">
                                                            <div class="row mb-3">
                                                                <h4 class=" col fw-bold" id="title"><?php echo $row["categ"]; ?></h4>
                                                                <select class="col form-select fw-bold" aria-label="Default select example" style="font-size: 20px;">
                                                                    <option value=<?php echo $row["names"]; ?> ><?php echo $row["names"]; ?> </option>
                                                                </select>
                                                            </div>
                                                            <?php
                                                            /* Set the default timezone */
                                                            date_default_timezone_set('Asia/Manila');

                                                            

                                                            /* Set the date */
                                                            $date = strtotime(date("Y-m-d"));

                                                            $day = date('d', $date);
                                                            $month = date('m', $date);
                                                            $year = date('Y', $date);
                                                            $firstDay = mktime(0,0,0,$month, 1, $year);
                                                            $title = strftime('%B', $firstDay);
                                                            $dayOfWeek = date('D', $firstDay);
                                                            $daysInMonth = cal_days_in_month(0, $month, $year);
                                                            /* Get the name of the week days */
                                                            $timestamp = strtotime('next Sunday');
                                                            $weekDays = array();
                                                            for ($i = 0; $i < 7; $i++) {
                                                                $weekDays[] = strftime('%a', $timestamp);
                                                                $timestamp = strtotime('+1 day', $timestamp);
                                                            }
                                                            $blank = date('w', strtotime("{$year}-{$month}-01"));
                                                            ?>
                                                            <table class="table table-bordered mb-5" style="table-layout: fixed;">
                                                                <tr>
                                                                    <th colspan="7" class="text-center" style="height: 5vh; background-color:#df7630; color: white;"> 
                                                                        <?php echo $title ?> <?php echo $year ?> 
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <?php foreach($weekDays as $key => $weekDay) : ?>
                                                                        <td class="text-center"><?php echo $weekDay ?></td>
                                                                    <?php endforeach ?>
                                                                </tr>
                                                                <tr>
                                                                    <?php for($i = 0; $i < $blank; $i++): ?>
                                                                        <td style="height: 10vh;  background-color:#CED2D0;"></td>
                                                                    <?php endfor; ?>
                                                                    <?php for($i = 1; $i <= $daysInMonth; $i++): ?>
                                                                        <?php if($day == $i): ?>
                                                                            <td style="height: 10vh; background-color:#df7630; color: white;">
                                                                                <strong><?php echo $i ?></strong>
                                                                                <strong  style="cursor: pointer;">
                                                                                    <?php 
                                                                                        $book = "SELECT * FROM booking WHERE approve = 'yes'";
                                                                                        $result2 = mysqli_query($conn,$book);
                                                                                        $a = 0;
                                                                                        while($row2 = mysqli_fetch_assoc($result2)){
                                                                                            $booking = $row2["dates"];
                                                                                            $d = strtotime("$booking");
                                                                                            $buwan = date('F', $d);
                                                                                            $araw = date('d', $d);
                                                                                            if($buwan == $title && $araw ==$i && $row["names"] == $row2["categ"]){
                                                                                    ?>
                                                                                                <p style="font-size:35px; vertical-align: middle; text-align: center;" id="<?php echo $buwan . $araw . str_replace(" ", "", $row2["categ"]); ?>" data-bs-toggle="modal" data-bs-target="#bookers">
                                                                                                
                                                                                            <?php 
                                                                                                $a++;
                                                                                            ?>
                                                                                    <?php
                                                                                            }
                                                                                        }
                                                                                        if($a > 0){
                                                                                            echo $a; 
                                                                                        }
                                                                                    ?>
                                                                                    </p>
                                                                                </strong>
                                                                            </td>
                                                                        <?php else: ?>
                                                                            <?php if($day > $i): ?>
                                                                                <td style="height: 10vh; background-color:#CED2D0;">
                                                                                    <?php 
                                                                                        echo $i; 
                                                                                        $book = "SELECT * FROM booking WHERE approve = 'yes'";
                                                                                        $result2 = mysqli_query($conn,$book);
                                                                                        while($row2 = mysqli_fetch_assoc($result2)){
                                                                                           $booking = $row2["dates"];
                                                                                           $d = strtotime("$booking");
                                                                                           $buwan = date('F', $d);
                                                                                           $araw = date('d', $d);
                                                                                           if($buwan == $title && $araw ==$i && $row["names"] == $row2["categ"]){
                                                                                                $uyy = $row2["book_id"];
                                                                                                $query = "DELETE FROM booking WHERE book_id='$uyy'";
                                                                                                $run = mysqli_query($conn, $query);
                                                                                           }
                                                                                        }
                                                                                    ?>  
                                                                                    
                                                                                </td>
                                                                            <?php else: ?>    
                                                                            <td style="height: 10vh;">
                                                                                <?php echo $i ?>
                                                                                <strong style="cursor: pointer;">
                                                                                    <?php 
                                                                                        $book = "SELECT * FROM booking WHERE approve = 'yes'";
                                                                                        $result2 = mysqli_query($conn,$book);
                                                                                        $a = 0;
                                                                                        while($row2 = mysqli_fetch_assoc($result2)){
                                                                                            $booking = $row2["dates"];
                                                                                            $d = strtotime("$booking");
                                                                                            $buwan = date('F', $d);
                                                                                            $araw = date('d', $d);
                                                                                            if($buwan == $title && $araw ==$i && $row["names"] == $row2["categ"]){
                                                                                            ?>
                                                                                                <p style="font-size:35px; vertical-align: middle; text-align: center;" id="<?php echo $buwan . $araw . str_replace(" ", "", $row2["categ"]); ?>" data-bs-toggle="modal" data-bs-target="#bookers">
                                                                                                
                                                                                            <?php 
                                                                                                $a++;
                                                                                            ?>
                                                                                        <?php
                                                                                            }
                                                                                        }
                                                                                        if($a > 0){
                                                                                            echo $a; 
                                                                                        }
                                                                                        
                                                                                    ?>
                                                                                    </p>
                                                                                    
                                                                                </strong>

                                                                                
                                                                            </td>
                                                                            <?php endif; ?>
                                                                            
                                                                        <?php endif; ?>
                                                                        <?php if(($i + $blank) % 7 == 0): ?>
                                                                            </tr><tr>
                                                                        <?php endif; ?>
                                                                    <?php endfor; ?>
                                                                    <?php for($i = 0; ($i + $blank + $daysInMonth) % 7 != 0; $i++): ?>
                                                                        <td style="height: 10vh; background-color:#CED2D0;"></td>
                                                                    <?php endfor; ?>
                                                                </tr>
                                                            </table>
                                                            
                                                        </div>
                                                    </div>
                                                    

                                                    <?php
                                                        }
                                                    ?> 
                                                </div>                       
                                            </div>



                                           
                                            <script>
                                                $(document).ready(function(){
                                                    var ray = ["tite"];
                                                    <?php 
                                                        for($i = 1; $i <= $daysInMonth; $i++){
                                                            $book = "SELECT * FROM booking WHERE approve = 'yes'";
                                                            $result2 = mysqli_query($conn,$book);
                                                            $a = 0;
                                                            while($row2 = mysqli_fetch_assoc($result2)){
                                                                $booking = $row2["dates"];
                                                                $d = strtotime("$booking");
                                                                $buwan = date('F', $d);
                                                                $araw = date('d', $d);
                                                                if($buwan == $title && $araw ==$i){ ?>
                                                                    ray.push("<?php echo $buwan . $araw . str_replace(" ", "", $row2["categ"]); ?>");
                                                    <?php }}} 
                                                    ?>

                                                    $.each(ray, function(index, value){
                                                        $("#result").append(index + ": " + value + '<br>');
                                                        $('#'+ value).click(function(){
                                                            $('.eto').hide();
                                                            $('#' + value + "x").show();
                                                        });
                                                    });

                                                });
                                            </script> 

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="bookers" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Approved Requests</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <?php for($i = 1; $i <= $daysInMonth; $i++): ?>
                                                                    <?php
                                                                        $book = "SELECT * FROM booking WHERE approve = 'yes'";
                                                                        $result2 = mysqli_query($conn,$book); 
                                                                        while($row2 = mysqli_fetch_assoc($result2)){
                                                                            $booking = $row2["dates"];
                                                                            $d = strtotime("$booking");
                                                                            $buwan = date('F', $d);
                                                                            $araw = date('d', $d);
                                                                            if($buwan == $title && $araw ==$i){
                                                                    ?>
                                                                        <div class="eto border-bottom mb-3" id="<?php echo $buwan . $araw . str_replace(" ", "", $row2["categ"]); ?>x">
                                                                    
                                                                            ID: <?php echo $row2["id"]; ?><br>
                                                                            Name: <?php echo $row2["names"]; ?><br>
                                                                            Purpose: <?php echo $row2["purpose"]; ?>
                                                                        </div> 
                                                                    <?php 
                                                                            }      
                                                                        }
                                                                    ?>
                                                                    <?php endfor; ?>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  




                                            <div class="tab-pane fade show" id="avail" role="tabpanel" aria-labelledby="about-tab" tabindex="0">
                                                <div class="p-2 rounded">
                                                    <?php
                                                        $result = mysqli_query($conn,$avail);
                                                        while($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                                    <div class="appoint mt-3 mb-5">
                                                        <div id=<?php echo $row["categ"]; ?> class="opt2 mt-2">
                                                            <div class="d-flex flex-row">
                                                                <h4 class="fw-bold"><?php echo $row["categ"]; ?></h4>
                                                                <button class=" border-0 mb-3" type="button" style="background-color: white; color: black;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add New Service">
                                                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <th style="width:60%;">Services</th>
                                                                    <th style="width:40%;">Slots</th>
                                                                    <th colspan="2">Option</th>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><?php echo $row["names"]; ?></td>
                                                                        <td><?php echo $row["avail"]; ?></td>
                                                                        <td>
                                                                            <button class="border-0" type="button" style="background-color: white;">
                                                                                <i class="bi bi-pen-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" style="color:#0080ff"></i>
                                                                            </button>
                                                                        </td>
                                                                        <td>
                                                                            <button class="border-0" type="button" style="background-color: white;">
                                                                                <i class="bi bi-trash3-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" style="color:#e14747"></i>
                                                                            </button>
                                                                        </td>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        }
                                                    ?>

                                                    <div class="d-grid gap-2 mt-5">
                                                        <button class="btn" type="button" style="height: 7.5vh; border: medium dashed rgba(0, 0, 0, .3); opacity: 80%;">
                                                            <i class="bi bi-plus-circle me-2"></i>Add New Category
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- notification tabs -->
                                <div class="col-md-4">
                                    <?php
                                        $book_approve = "SELECT * FROM booking WHERE approve IS NULL " ;
                                        $result = mysqli_query($conn,$book_approve);
                                    ?>
                                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                        <li class="nav-item shadow-right">
                                            <button class="notifybadge nav-link active" id="notif-tab" data-bs-toggle="tab" data-bs-target="#requests" type="button" role="tab" aria-controls="notif-tab-pane" aria-selected="true">Bookings
                                                <span class="badge text-bg-danger ms-1"> <!-- the notif badge -->
                                                    <?php
                                                        $i = 0;
                                                        while($row = mysqli_fetch_assoc($result)){
                                                            $i++;
                                                        }
                                                        echo $i;
                                                    ?>
                                                </span> 
                                            </button>
                                        </li>
                                    </ul>
        
                                    <!-- notification tab -->
                                    <div class="shadow mb-5 rounded" style="height: 80vh; overflow-y: auto;">
                                        <div class="tab-content mb-2" id="myTabContent">
                                            <!-- notif contents-->
                                            <div class="tab-pane fade show active" id="requests" role="tabpanel" aria-labelledby="notif-tab" tabindex="0">
                                                <?php 
                                                    $book = "SELECT * FROM booking WHERE approve IS NULL";
                                                    $result = mysqli_query($conn,$book);
                                                    while($row = mysqli_fetch_assoc($result)){   
                                                ?>
                                                <div class="notify border-bottom p-4" id="<?php echo $row["book_id"]; ?>" style="margin-bottom: 0px; cursor: pointer;"  data-bs-toggle="modal" data-bs-target="#appointment-modal">
                                                    <span style="color: black;"><?php echo $row["dates"]; ?></span>
                                                    <span> - </span>
                                                    <span style="color: black;">Student</span><br>
                                                    <span style="color: black;"><?php echo $row["categ"]; ?></span> 
                                                </div>
                                                
                                                <?php 
                                                    }
                                                ?>



                                                <script>
                                                    $(document).ready(function(){
                                                        var Demo_Array = [];
                                                        <?php 
                                                            $book = "SELECT * FROM booking WHERE approve IS NULL";
                                                            $result = mysqli_query($conn,$book);
                                                            while($row = mysqli_fetch_assoc($result)){
                                                        ?> 
                                                        Demo_Array.push("<?php echo $row["book_id"]; ?>");
                                                        <?php        
                                                            }
                                                        ?>
                                                        $.each(Demo_Array, function(index, value){
                                                            $("#DemoDiv").append(value + '<br>');
                                                            $("#"+ value).click(function(){
                                                                $('.eta').hide();
                                                                $('#' + value + "x").show();
                                                            });
                                                        });

                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <!-- Modal -->
                                    <div class="modal fade" id="appointment-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Booking Request</h5>
                                                    <button id="ho" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <?php 
                                                    $book = "SELECT * FROM booking WHERE approve IS NULL";
                                                    $result = mysqli_query($conn,$book);
                                                    while($row = mysqli_fetch_assoc($result)){  
                                                ?>
                                                <div class="modal-body eta" id="<?php echo $row["book_id"]; ?>x">
                                                    <?php $mod = $row["book_id"];?>
                                                    <div class="p-3 border rounded mb-4">
                                                        <h6><strong style="font-size: 17.5px;">Surname, First Name M.I</strong><span> - name.surname@cvsu.edu.ph - </span>201810888</h6>
                                                        <p style="text-align: justify; margin-bottom: 0;"> 
                                                            <button class="rounded-pill border-0 me-2" style=" color: white; background-color: #df7630; cursor: context-menu;">
                                                                <i class="bi bi-house-fill me-2"></i>Address
                                                            </button>Phase 1 Section 4 Block 53 Lot 2 Belvedere Towne, Paradahan, Tanza, Cavite         
                                                        </p>
                                                    </div>          
                                                        
                                                    <div class="mb-4">
                                                        <h4 style="color: black;">Booked:
                                                            <strong><span class="mx-2" id="categ" style="color: black;"><?php echo $row["categ"]; ?></span></strong>
                                                        </h4>
                                                    </div>
                                                    
                                                    <div class="row g-2 mb-2" style="font-size: 17.5px;">
                                                        <p>
                                                            <span class="mx-2" style="color: black;">
                                                                <i class="bi bi-calendar-event-fill me-2"></i>Date:
                                                            </span>
                                                            <strong>
                                                                <span id="date" style="color: black;">
                                                                    <?php echo $row["dates"]; ?>
                                                                </span>
                                                            </strong>
                                                        </p>
                                                    </div>

                                                    <p style="font-size: 17.5px;">Appointment Purpose: 
                                                        <strong><span style="color: black;"> <?php echo $row["purpose"]; ?></span></strong>
                                                    </p>
                                                
                                                </div>
                                                <?php 
                                                    }
                                                ?>


                                                <div class="modal-footer">
                                                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                                    <button type="submit" class="btn" style="background-color:#e14747">No</button>
                                                    <button type="submit" class="btn" name="approve">Approve</button>
                                                </form>
                                                <?php 
                                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                        if(isset($_POST['approve'])){
                                                    
                                                            $que = "UPDATE booking SET approve = 'yes' WHERE book_id = '$mod'";
                                                             
                                                            $run = mysqli_query($conn,$que);
                                                        }   
                                                    } 
                                                ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    
                                </div>
                            </div>
                        </div>

                        <!-- System Management -->
                        <div class="tab-pane fade" id="download" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                            <!-- the name and position -->
                            <div class=" pt-3 pb-2 mb-3">
                                <h1 class="h2 fw-bolder">system management</h1>
                            </div>
                        </div>
                    </div>
                    

                </main>
            </div>
        </div>

       

         <!-- offcanvas of sidebar -->
         <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebarMenu" aria-labelledby="offcanvasRightLabel" style="width: 300px;">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#my-offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="d-flex flex-column" style="height: 90vh;">
                    <div class="outer mx-auto d-block">
                        <img src="student.webp" class="rounded-circle mx-auto d-block" alt="" width="150" height="150"/>
                        <div class="inner position-absolute bottom-0 end-0">
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <input class="inputfile" type="file" name="pic" accept="image/*" title="">
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                                    </svg>
                                </label>
                            </div> 
                        </div>
                    </div>

                    <hr>
                    <!-- categories-->
                    <ul class="nav nav-pills flex-column mb-auto" id="sidebar-tab"  role="tablist" aria-orientation="vertical">
                        <li class="nav-item mb-1"> <!-- the profile tab-->
                            <a class="nav-link d-flex justify-content-between active" aria-current="page" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#profile" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                <div>
                                    <i class="bi bi-person-circle me-2" width="16" height="16"></i> Profile
                                </div> 
                                <div> <!-- the notif badge -->
                                    <span class="badge text-bg-danger">4</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item mb-1"> <!-- borrow tab -->
                            <a class="nav-link"  id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#borrow" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                <i class="bi bi-handbag-fill me-2"></i> Borrow
                            </a>
                        </li>
                        <li class="nav-item mb-1"> <!-- sched tab-->
                            <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#schedule" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                <i class="bi bi-calendar-event-fill me-2"></i> Schedule
                            </a>
                        </li>
                        <li class="nav-item mb-1"> <!-- download-->
                            <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#download" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                <i class="bi bi-file-earmark-arrow-down-fill me-2"></i> Download
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <!-- QR Code -->
                    <div class="d-grid gap-2 mb-3">
                        <button class="qr btn border-0" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <i class="bi bi-qr-code me-2" aria-hidden="true"></i>
                            <strong>Show QR Code</strong>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>


<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>