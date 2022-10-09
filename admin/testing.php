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
                    <form action="./testingapi.php" method="get">
                        <!-- Various options in drop down menu to
						select the types of data structures
						that we need -->
                        <select name="name" class="mul-select" multiple="true">
                            <option value="a">Stack</option>
                            <option value="b">Queue</option>
                            <option value="j">Linked-List</option>
                            <option value="Heap">Heap</option>
                            <option value="Binary-Tree">Binary-Tree</option>
                            <option value="Graph">Graph</option>
                            <option value="Array">Array</option>
                        </select>
                        <input name="cards" placeholder="enter card name">
                        <!-- <input name="name" placeholder="enter name name"> -->
                        <button class="nextBtn">
                            <span class="btnText">Submit</span>
                            <!-- <i class="uil uil-navigator"></i> -->
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

</html>