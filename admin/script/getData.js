function selectchange(){
   
var x= document.getElementById("franchise").value;
$.ajax({
    url:"fetchdatas.php",
    method:"POST",
    data:{
        name:x
    },
    success:function(data){
        $("#ans").html(data);
    }
})

}