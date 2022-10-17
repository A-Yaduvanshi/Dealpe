<?php
include '../api/connection.php';
session_start();
// echo $_SESSION['sess_user'];
$sql = "SELECT * FROM `sales` where `frachise_id`='" . $_SESSION['sess_user'] . "'";
$query = mysqli_query($conn, $sql);
$sql_2 = "SELECT  SUM(card_price) FROM `membership_card` WHERE `franchise_id`='" . $_SESSION['sess_user'] . "' and `customer_select`='1'";
$run = mysqli_query($conn, $sql_2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frachise Stock</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <style>
        .Main-Container {
            border: 1px solid red;
            margin-right: 10px;
        }

        table,
        td,
        th {
            border: 1px solid black;
        }
        #example{
            border-collapse: collapse;
        }
    </style>
</head>

<body>

    <div class="Main-Container">
        <div class="container  mt-5">
            <table id="example" class="container">
                <thead>
                    <tr>
                        <th>SALES EXECUTIVE ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>PASSWORD</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>STATE</th>
                        <th>DISTRICT</th>
                        <th>PIN CODE</th>
                        <th>Phone</th>
                        <th>Commission</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_row($query)) { ?>
                        <tr>
                            <td><?php echo $row['1']; ?></td>
                            <td><?php echo $row['2']; ?></td>
                            <td><?php echo $row['4']; ?></td>
                            <td><?php echo $row['5']; ?></td>
                            <td>
                                <?php echo $row['6']; ?>
                                <!-- <h5 style="font-family: 'Libre Barcode 39';font-size: 50px;">Deepak</h5> -->
                            </td>
                            <td><?php echo $row['8']; ?></td>
                            <!-- <td><?php echo $row['7']; ?></td>   -->
                            <td><?php echo $row['11']; ?></td>
                            <td><?php echo $row['12']; ?></td>
                            <td><?php echo $row['14']; ?></td>
                            <td><?php echo $row['13']; ?></td>
                            <td><?php echo $row['19']; ?></td>
                            <td>
                                <a href="./deleteSale.php?id=<?php echo $row['0']; ?>">
                                    <Button class="btn btn-block bg-warning">Remove</Button>
                                </a>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
        getPagination('#example');

        function getPagination(table) {
            var lastPage = 1;
            $('#maxRows')
                .on('change', function(evt) {
                    //$('.paginationprev').html('');						// reset pagination
                    lastPage = 1;
                    $('.pagination')
                        .find('li')
                        .slice(1, -1)
                        .remove();
                    var trnum = 0; // reset tr counter
                    var maxRows = parseInt($(this).val()); // get Max Rows from select option
                    if (maxRows == 5000) {
                        $('.pagination').hide();
                    } else {
                        $('.pagination').show();
                    }
                    var totalRows = $(table + ' tbody tr').length; // numbers of rows
                    $(table + ' tr:gt(0)').each(function() {
                        // each TR in  table and not the header
                        trnum++; // Start Counter
                        if (trnum > maxRows) {
                            // if tr number gt maxRows
                            $(this).hide(); // fade it out
                        }
                        if (trnum <= maxRows) {
                            $(this).show();
                        } // else fade in Important in case if it ..
                    }); //  was fade out to fade it in
                    if (totalRows > maxRows) {
                        // if tr total rows gt max rows option
                        var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
                        //	numbers of pages
                        for (var i = 1; i <= pagenum;) {
                            // for each page append pagination li
                            $('.pagination #prev')
                                .before(
                                    '<li data-page="' +
                                    i +
                                    '">\
								  <span>' +
                                    i++ +
                                    '<span class="sr-only">(current)</span></span>\
								</li>'
                                )
                                .show();
                        } // end for i
                    } // end if row count > max rows
                    $('.pagination [data-page="1"]').addClass('active'); // add active class to the first li
                    $('.pagination li').on('click', function(evt) {
                        // on click each page
                        evt.stopImmediatePropagation();
                        evt.preventDefault();
                        var pageNum = $(this).attr('data-page'); // get it's number
                        var maxRows = parseInt($('#maxRows').val()); // get Max Rows from select option
                        if (pageNum == 'prev') {
                            if (lastPage == 1) {
                                return;
                            }
                            pageNum = --lastPage;
                        }
                        if (pageNum == 'next') {
                            if (lastPage == $('.pagination li').length - 2) {
                                return;
                            }
                            pageNum = ++lastPage;
                        }
                        lastPage = pageNum;
                        var trIndex = 0; // reset tr counter
                        $('.pagination li').removeClass('active'); // remove active class from all li
                        $('.pagination [data-page="' + lastPage + '"]').addClass('active'); // add active class to the clicked
                        // $(this).addClass('active');					// add active class to the clicked
                        limitPagging();
                        $(table + ' tr:gt(0)').each(function() {
                            // each tr in table not the header
                            trIndex++; // tr index counter
                            // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                            if (
                                trIndex > maxRows * pageNum ||
                                trIndex <= maxRows * pageNum - maxRows
                            ) {
                                $(this).hide();
                            } else {
                                $(this).show();
                            } //else fade in
                        }); // end of for each tr in table
                    }); // end of on click pagination list
                    limitPagging();
                })
                .val(5)
                .change();
            // end of on select change
            // END OF PAGINATION
        }

        function limitPagging() {
            // alert($('.pagination li').length)
            if ($('.pagination li').length > 7) {
                if ($('.pagination li.active').attr('data-page') <= 3) {
                    $('.pagination li:gt(5)').hide();
                    $('.pagination li:lt(5)').show();
                    $('.pagination [data-page="next"]').show();
                }
                if ($('.pagination li.active').attr('data-page') > 3) {
                    $('.pagination li:gt(0)').hide();
                    $('.pagination [data-page="next"]').show();
                    for (let i = (parseInt($('.pagination li.active').attr('data-page')) - 2); i <= (parseInt($('.pagination li.active').attr('data-page')) + 2); i++) {
                        $('.pagination [data-page="' + i + '"]').show();
                    }
                }
            }
        }
        $(function() {
            // Just to append id number for each row
            $('table tr:eq(0)').prepend('<th> ID </th>');
            var id = 0;
            $('table tr:gt(0)').each(function() {
                id++;
                $(this).prepend('<td>' + id + '</td>');
            });
        });
    </script>
</body>

</html>