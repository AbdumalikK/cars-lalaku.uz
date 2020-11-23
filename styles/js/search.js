$(document).ready(function() {
   $("#search").keyup(function() {

       var name = $('#search').val();

       if (name == "") {
           $("#display").html("");
       } else {

           $.ajax({
               type: "POST",
               url: "../../search_ajax.php",
               data: {
                   search: name
               },
               success: function(html) {
                   $("#display").html(html).show();
               }

           });

       }

   });

});


