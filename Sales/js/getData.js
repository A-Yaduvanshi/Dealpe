function selectchange(){
   
    var x= document.getElementById("customer").value;
    $.ajax({
        url:"fetchDataCustomer.php",
        method:"POST",
        data:{
            name:x
        },
        success:function(data){
            $("#ans").html(data);
            alert("HEllo");
        }
    })
    
    }