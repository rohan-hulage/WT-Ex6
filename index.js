$(document).ready(function (){
    $("#submitbtn1").click(function(){

        var book_id=$("#book_id").val();
        var book_title=$("#book_title").val();
        var book_author=$("#book_author").val();
        var book_price=$("#book_price").val();
        var quantity=$("#quantity").val();

        console.log(book_id+"\n"+book_title+"\n"+book_author+"\n"+book_price+"\n"+quantity);

        if(!book_id) {alert("Invalid ID"); return false;}
        else if(!book_title) {alert("Invalid Title"); return false;}
        else if(!book_author) {alert("Invalid Author"); return false;}
        else if(!book_price) {alert("Invalid Price"); return false;}
        else if(!quantity) {alert("Invalid Quantity"); return false;}
        
        $.ajax({
            type:"POST",
            data:{
                "book_id":book_id,
                "book_title":book_title,
                "book_author":book_author,
                "book_price":book_price,
                "quantity":quantity,
                  
            },
            url:"./add.php",
            dataType:"json",
            success:function(result){

                if (result["error"]==0) alert("Inserted Successfully");
                else alert("not inserted");

            },
        });

    });
    $("#displaybtn").click(function(){
        window.location="./display.php";


    });
    $("#updatebtn").click(function(){
        var bid=$("#bid").val();
        var btit=$("#btit").val();
        console.log(bid+"\n"+btit)
        if(!bid) {alert("Invalid ID"); return false;}
        else if(!btit) {alert("Invalid Title"); return false;}
        $.ajax({
            type:"POST",
            data:{
                "bid":bid,
                "btit":btit,                                  
            },
            url:"./update.php",
            dataType:"json",
            success:function(result){

                if (result["error"]==0) alert("updated Successfully");
                else alert("not inserted");

            },
        });
    });

    $("#deletebtn").click(function(){
        var did=$("#did").val();
       
        console.log(did)
        if(!did) {alert("Invalid ID"); return false;}
        
        $.ajax({
            type:"POST",
            data:{
                "did":did,
                                                 
            },
            url:"./delete.php",
            dataType:"json",
            success:function(result){

                if (result["error"]==0) alert("Deleted Successfully");
                else alert("not inserted");

            },
        });
    });
});