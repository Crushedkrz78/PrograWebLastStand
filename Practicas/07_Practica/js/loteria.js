$(document).ready(
    function() {
        console.log("Greetings form jQuery");
        //alert("Greetings from jQuery");
        
        $("img").click(
            function() {
                //$(this).width("20px"); //Reduces width of the clicked img
                //$(this).hide("slow");
                //$(this).attr('src','img/cards/'+'01'+'.jpg');
                $(this).css("filter", "grayscale(100%)");
                var img_id = this.id;
            }
        );

        $("#btn-restart").click(
            function() {
                $("img").show("fast");
            }
        );
        
        /*
        The next code block randomly changes the top image displayed from the 
        available
        */
        var sort = [0,1,2,3,4,5,6,7,8,9];
        
        setInterval(
            function() {
                var rand = Math.floor((Math.random() * 10));
                if(sort[rand]){
                    $("#main").attr("src", "img/cards/" + rand + ".jpg");
                    $("#"+rand).css("filter", "grayscale(100%)");
                    sort[rand]= false;
                }
            }, 1000
        );
        
        //The next function checks if all elements of aray are false
        
        
    }
    
    
); //Document Selector, this time we are selecting to jQuery element