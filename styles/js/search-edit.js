$(document).ready(function() {
   $("#search").keyup(function() {

       var name = $('#search').val();

       if (name == "") {
           $("#display2").html("");
       } else {

           $.ajax({
               type: "POST",
               url: "../../ajax.php",
               data: {
                   search: name
               },
               success: function(html) {
                   $("#display2").html(html).show();
               }

           });

       }

   });

});


