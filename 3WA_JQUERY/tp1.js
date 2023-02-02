$(document).ready(function() {
    

        $('input').on('change', function() {

            $("button").click(function() {

           let value= $('input[name=Choix]:checked').val();
           $("h5").text("Votre choix est : " + value);   //.html
          });
          


    });

});

