<!DOCTYPE html>
<html>
    <head>
        <title>Clock</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Add online Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous">
        </script>
        <style>
            @import 'https://fonts.googleapis.com/css?family=Nova+Mono|Eczar';
            #body {
                background-color: black;
                color: black;
            }
            
            #div1 {
            /* background-color: red; */
                transform: translateY(33%);
            }
            
            #time {
                font-family: 'Nova Mono', monospace;
                font-size: 30px;
                text-align: center;
                text-shadow: 0px 0px 20px;
            }
            
            #date {
                margin-top: -3%;
                font-family: 'Eczar', serif;
                font-size: 50px;
                text-align: center;
                text-shadow: 0px 0px 20px blue;
            }
            
            .break{
                border: 1px gray; 
                border-style: outset; 
                border-color: #dee3e0; 
                box-shadow: 0 4px 25px 0 rgba(0,0,0,0.2); 
                margin-top: 15px;
            }
            
            input{
                width:70%;
                height: 35px;
                border-radius: 10px;
            }

            button{
                font-size: 50px;
                font-family: algerian;
                font-weight: bold;
                width: 100px;
            }

            .background{
                background: -webkit-linear-gradient(top, #3e8bde, #66d9ff);
            }

            label{
                width: 100px;
                height: 10px;
            }

            span{
                margin-left: 5%;
            }
        
        </style>
    </head>
<body>
    <div class="container">
        <div id="div1">
            <p id="date"></p>
            <p id="time"></p>
        </div><br><hr style="background-color: red; height:5px;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4 background"><br>
                <form action="{{route('clockIn')}}" method="get">
                    <center>
                    <input list="persons" name="name" placeholder="names...">
                        <datalist id="persons">
                            <option value="Aeromel Laure">
                            <option value="Mary Jane Paller">
                            <option value="Irish Rufo">
                            <option value="Cherry May Herrera">
                        </datalist>
                    </center><br>
                        <div class="form-group">
                            <button class="btn btn-primary">Clock in</button>
                            <label for=""></label> 
                        </div>
                </form>
                <div class="break"><br>
                    <label for="">Break</label><br>
                    <button class="btn btn-primary">Start</button>
                    <label for=""></label><br><br>          
                    <button class="btn btn-primary">End</button>
                    <label for=""></label><br><br>
                </div><br>
                {{-- <div class="break"><br>
                    <center>
                        <button class="btn btn-primary">Take Another Break</button><br><br>
                    </center>
                </div><br> --}}
                <div>
                    <button class="btn btn-primary">Clock Out</button>
                    <label for=""></label>
                </div>
                <div class="break">
                    <h5>Total Time Work:<span>a</span></h5>
                    <h5>Hours Left Befor Timeout:<span>a</span></h5>
                    <h5>Total Breaks Used:<span>a</span></h5>
                </div><br>
            </div>
            <div class="col-sm-4">

            </div>
        </div>
    </div>
</body>
<script>
    window.setInterval(ut, 1000);

    function ut() {
    var d = new Date();
    document.getElementById("time").innerHTML = d.toLocaleTimeString();
    document.getElementById("date").innerHTML = d.toLocaleDateString();
}
  </script>
</html>
