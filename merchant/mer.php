<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dynamic Table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Table.css" />
    <!-- Bootstrap 4 CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            // Add new row
            $("#add-row").click(function(){
                var Business = $("#Business").val();
                var Owner = $("#Owner").val();
                var email = $("#email").val();
                var address = $("#address").val();
                var pincode = $("#pincode").val();
                var category = $("#category").val();
                var working = $("#working").val();
                $(".table tbody tr").last().after(
                    '<tr class="fadetext">'+
                        '<td><input type="checkbox" id="select-row"></td>'+
                        '<td>'+Business+'</td>'+
                        '<td>'+Owner+'</td>'+
                        '<td>'+email+'</td>'+
                        '<td>'+address+'</td>'+
                        '<td>'+pincode+'</td>'+
                        '<td>'+category+'</td>'+
                        '<td>'+working +'</td>'+
                    '</tr>'
                );
            })

            // Select all checkbox
            $("#select-all").click(function(){
                var isSelected = $(this).is(":checked");
                if(isSelected){
                    $(".table tbody tr").each(function(){
                        $(this).find('input[type="checkbox"]').prop('checked', true);
                    })
                }else{
                    $(".table tbody tr").each(function(){
                        $(this).find('input[type="checkbox"]').prop('checked', false);
                    })
                }
            });
            
            // Remove selected rows
            $("#remove-row").click(function(){
                $(".table tbody tr").each(function(){
                    var isChecked = $(this).find('input[type="checkbox"]').is(":checked");
                    var tableSize = $(".table tbody tr").length;
                    if(tableSize == 1){
                        alert('All rows cannot be deleted.');
                    }else if(isChecked){
                        $(this).remove();
                    }
                });
            });

        })
    </script>
    <style>
        
 
.form-div{
    margin-top: 30px;
    padding: 10px;
    box-shadow: 0px 0px 5px black;
}
button{
    width: 200px;
}

.table{
    margin-top: 30px;
    box-shadow: 0px 0px 5px black;
}

.table thead tr{
    background-color: rgb(255, 84, 84);
    box-shadow: 0px 0px 5px darkviolet;
    outline: darkviolet;
    border: 1px solid white;
    color: white;
}

.table th, .table td{
    padding: 10px;
    text-align: center
}

.table tbody tr:hover{
    background-color: #8080804a;
}

.table tbody tr:active{
    box-shadow: 0px 0px 5px black;
}

.remove-row{
    background-color: rgb(232, 41, 41);
    border: 1px solid white !important;
    outline: darkviolet !important;
    color: white;
    widows: 200px !important;
    height: 40px;
    box-shadow: 0px 0px 5px darkviolet;
}

.remove-row:active{
    border: 1px solid white;
    outline: darkviolet !important;
    width: 195px !important;
    height: 38px !important;
}

.fadetext{
    animation: fadetext 1s ease;
}

@keyframes fadetext{
    0%{
        opacity: 0.1;
    }
    100%{
        opacity: 1;
    }
}

    </style>
</head>
<body>
    <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;text-align: center;text-decoration: underline ;color: brown;">
       Merchent Data
    </h1>

        <div style="min-width:1400px;" class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>All <input type="checkbox" id="select-all"></th>
                        <th>Business Name</th>
                        <th>Owner Name</th>
                        <th>E-Mail</th>
                        <th>Address</th>
                        <th>Pin code</th>
                        <th>Category</th>
                        <th>Working Hour's</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" id="select-row"></td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                      

                    </tr>
                    <tr>
                        <td><input type="checkbox" id="select-row"></td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                      

                    </tr>
                    <tr>
                        <td><input type="checkbox" id="select-row"></td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                      

                    </tr>
                    <tr>
                        <td><input type="checkbox" id="select-row"></td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                      

                    </tr>
                    <tr>
                        <td><input type="checkbox" id="select-row"></td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                        <td>example</td>
                      

                    </tr>
                </tbody>
            </table>
            
            <button class="remove-row" id="remove-row">Remove Row</button><span><a href="merchnarregistration.html"><button class="remove-row" id="add-row">Add Row</button></a></span>
        </div>
    </div>

    <!--Autoplay an another embeded video from this channel -->
		
</body>
</html>