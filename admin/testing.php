<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- These are the jQuery extensions taken from
		bootstrap website to enable the drop down
		function of the menu bar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js">
    </script>

    <!-- Default bootstrap CSS link taken from the
		bootstrap website-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            justify-content: center;
            align-items: center;
            min-height: 100%;
        }

        .form {
            margin: 2% 20%;
        }

        .mul-select {
            min-width: 100%;
        }

        h1 {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-dark" style="min-height: 50vh;">
        <div class="text-center">
            <h1 class="pt-4" style="color: #29c94f;">GeeksforGeeks</h1>
            <h1 class="py-4">Select Multiple Options</h1>
        </div>

        <!-- These modifications are done to make the webpage
			adaptive to the screen size and automatically
			reduce the size when screen is minimized -->
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group form">

                    <!-- <form action="./testingapi.php" method="get">
                      
                        <select name="name[]" class="mul-select" multiple="true">
                            <option value="a">Stack</option>
                            <option value="b">Queue</option>
                            <option value="j">Linked-List</option>
                            <option value="Heap">Heap</option>
                            <option value="Binary-Tree">Binary-Tree</option>
                            <option value="Graph">Graph</option>
                            <option value="Array">Array</option>
                        </select>
                        <input name="cards" placeholder="enter card name">
                 
                        <button class="nextBtn">
                            <span class="btnText">Submit</span>
                      
                        </button>
                    </form> -->

                    <form action="./testingapi.php" method="get">
                        <?php
                        include "../api/connection.php";
                        $sql = "SELECT * FROM `testing`";
                        $run = mysqli_query($conn, $sql);

                        ?>
                        <!-- Various options in drop down menu to
						select the types of data structures 
						that we need -->
                     <select name="cards[]" class="mul-select" multiple="true">
                            <?php while ($fetch = mysqli_fetch_assoc($run)) { ?>

                                <option value="<?php echo $fetch['cards'] ?>"><?php echo $fetch['cards'] ?></option>
                            <?php  } ?>


                        </select>
                        <input name="name" placeholder="Enter franchise name" type="text" required>
                        <button class="nextBtn" style="margin-left: 180px;">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i> 
                        </button>
                    </form>
                  
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript code to enable the drop down function -->
    <script>
        $(document).ready(function() {
            $(".mul-select").select2({
                placeholder: "select data-structures",
                tags: true,
            });
        })
    </script>
</body>

</html> <form action="assignCard.php" method="get" enctype="multipart/form-data">
            <div class="form first" style="margin-left: 100px;">
                <!-- < class="details personal"> -->
                <span class="title" style="font-size: 22px;text-align:center;text-decoration:underline;">Assign Cards</span>

                <div class="fields">
                    <div class="input-field">
                        <!-- <?php
                                error_reporting(E_ALL ^ E_WARNING);
                                $sql = "SELECT * FROM `membership_card` WHERE `id`=(SELECT MAX(`id`) FROM  `membership_card`) AND `asign_count`='0'";
                                $run = mysqli_query($conn, $sql);
                                $fetch = mysqli_fetch_assoc($run);
                                if ($fetch['membership_card'] == NULL) {
                                    echo '0';
                                } else {
                                    # code...
                                    echo $fetch['membership_card'];
                                }

                                ?> -->
                        <label>Enter Card</label>
                        <input type="text" placeholder="Enter your Cards Assign" name="membership_card" required>
                    </div>

                    <div class="input-field">
                        <label>Franchise Name</label>
                        <input type="text" placeholder="Enter your name" name="franchise_name" required>
                    </div>
                    <div class="input-field">
                        <label>Quantity</label>
                        <input type="text" placeholder="Enter number Quantity" name="quantity" required>
                    </div>
                    <!-- <div class="input-field">
                         <label>Membership Duration</label>
                         <select name="exiry_date">
                             <option value="3 months">3 months</option>
                             <option value="6 months">6 months</option>
                         </select>
                     </div> -->
                </div>


                <div class="details ID">
                    <!-- <span class="title">Identity Details</span> -->

                    <div class="fields">



                        <button class="nextBtn" style="margin-left: 180px;">
                            <span class="btnText">Submit</span>
                            <!-- <i class="uil uil-navigator"></i> -->
                        </button>
                    </div>
                </div>


        </form>