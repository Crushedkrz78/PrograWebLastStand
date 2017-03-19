$(document).ready(
    function() {
        console.log("Greetings from jQuery");
        //alert("Greetings from jQuery");
        $("img").hide("fast");
        $("#main").show("fast");
        
        
        
        
        
        /*
        The next button function restarts all the game when finished, creates new tab and a new random deck
        */
        $("#btn-restart").click(
            //The next function creates the new random 10 cards deck
            function() {
                $("img").hide("fast");
                $("#msg").attr("class", "");
                $("Strong").text("");
                $("#main").attr("src", "img/cards/1.jpg");
                $("#main").show("fast");
            }
        );//End of restart button actions
        
        
        //The next button function starts the game, with the previous created tab and deck
        $("#btn-start").click(
            
            function() {
                $("#msg").attr("class", "");
                $("Strong").text("");
                var baraja = new Array(54);
                var tablero = new Array(9);
                var validate = new Array(9);
                for (i = 0; i < baraja.length ; i++) {
                    var rand = Math.floor(Math.random() * 53) + 2;
                    for (j = 0; j <= i; j++) {
                        if (baraja[j] == null) {
                            baraja[j] = rand;
                        }
                        else {
                            if(baraja[j] == rand ) {
                                rand = Math.floor(Math.random() * 53) + 2;
                                j = 0;
                            }
                        }
                    }
                }
                
                for (i = 0; i < tablero.length ; i++) {
                    var rand = Math.floor(Math.random() * 53) + 2;
                    for (j = 0; j <= i; j++) {
                        if (tablero[j] == null) {
                            tablero[j] = rand;
                            validate[j] = false;
                            $("#"+i).attr("src", "img/cards/" + rand + ".jpg");
                            $("#" + i).css("filter", "none");
                        }
                        else {
                            if(tablero[j] == rand ) {
                                rand = Math.floor(Math.random() * 53) + 2;//All Randoms except card 1
                                j = 0;
                            }
                        }
                    }
                }
                $("img").show("fast");
                //setInterval sets an interval for execution of an specific function once in the interval
                //console.log("Longitud baraja: " + baraja.length);
                var index = 0;
                var griton = setInterval( run, 1000 );
                
                //The function run() is used only for the setInterval() function
                //it displays the card for the griton 
                function run() {
                    
                    
                    if (index == (baraja.length)) {
                        evaluate();
                    }
                    else { 
                        var img = baraja[index];
                        $("#main").attr("src", "img/cards/" + img + ".jpg");
                        for (i = 0; i< validate.length; i++) {
                            if(img == tablero[i]) {
                                $("#" + i).css("filter", "grayscale(100%)");
                                validate[i] = true;
                            }
                        }
                        //Validates the status of tablero
                        evaluate();
                        console.log(index);
                        index ++;
                    }
                }//End of run()
                
                function win() {
                    console.log("Has ganado");
                    $("#msg").attr("class", "alert alert-success");
                    $("Strong").text("¡Has ganado!");
                }//End of win() function
                
                function lose () {
                    console.log("Has perdido");
                    $("#msg").attr("class", "alert alert-danger");
                    $("Strong").text("Has perdido...");
                }//End of lose() function
                
                function evaluate() {
                    var status = true;
                    if (validate[0]) {
                        if (validate[1]) {
                            if (validate[2]) {
                                if (validate[3]) {
                                    if (validate[4]){
                                        if (validate[5]){
                                            if (validate[6]){
                                                if (validate[7]){
                                                    if (validate[8]){
                                                        win();
                                                        clearInterval(griton);//At this point you are the master of Loteria
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                    for (i=0; i<validate.length; i++) {
                        if (!validate[i]) {
                            //Continua
                            if(index == (baraja.length - 1)){
                                lose();
                                clearInterval(griton);
                            }
                        }
                        
                    }
                }
            }
        );//End of start button actions
    }
    
    
); //Document Selector, this time we are selecting to jQuery element

