function selectchange(){
   
var x= document.getElementById("sales").value;
$.ajax({
    url:"fetchDataSales.php",
    method:"POST",
    data:{
        name:x
    },
    success:function(data){
        $("#ans").html(data);
    }
})

}