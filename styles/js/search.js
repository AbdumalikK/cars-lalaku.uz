$(document).ready(function() {
   $("#search").keyup(function() {

       var name = $('#search').val();

       if (name == "") {
           $("#display").html("");
       } else {

           $.ajax({
               type: "POST",
               url: "../../search_ajax.php",
               data: name,
               success: function(data) {
                   $("#display").html(data).show();
               }

           });

       }

   });

});


