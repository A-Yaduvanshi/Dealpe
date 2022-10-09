function selectbrand(){
    // alert("Hello World");
    var x = document.getElementById('mobile').value;
    $.ajax({
        url:"show_table.php",
        method:"POST",
        data:{
            id:x
        },
        success:function(data){
            $("#ans").html(data);
        }
    })
}