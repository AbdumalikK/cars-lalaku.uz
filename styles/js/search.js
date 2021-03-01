$(document).ready(function() {

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

});


