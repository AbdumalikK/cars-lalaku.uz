$(document).ready(function() {
   
    // search user-view    
   $("#search").keyup(function() {
       var name = $('#search').val();
       if (name == "") {
           $("#display").html("");
       } else {
           $.ajax({
               type: "POST",
               url: "search_ajax",
               data: "search="+name,
               success: function(data) {
                   $("#display").html(data).show();
                   console.log(data);
                }
                
            });
       }

   });

   // search update    
   $("#search_update").keyup(function() {
 
    var name = $('#search_update').val();

    if (name == "") {
        $("#display").html("");
    } else {
        $.ajax({
            type: "POST",
            url: "../search_ajax",
            data: "search_update="+name,
            success: function(data) {
                $("#display").html(data).show();
                console.log(data);
             }
             
         });
    }

});

});


