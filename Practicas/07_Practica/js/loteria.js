$(document).ready(
    function() {
        console.log("Greetings form jQuery");
        //alert("Greetings from jQuery");
        
        $("img").click(
            function() {
                //$(this).width("20px"); //Reduces width of the clicked img
                $(this).hide("slow");
                //$(this).attr('src','img/cards/'+'01'+'.jpg');
            }
        );
        
        $("#btn-restart").click(
            function() {
                $("img").show("fast");
            }
        );
    }
); //Document Selector, this time we are selecting to jQuery element