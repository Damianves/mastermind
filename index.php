<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="copyright" content="©Damian">
	    <meta name="author" content="©Damian">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="css/style.css" />
    	<link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="/css/font-awesome-4.7.0/css/font-awesome.min.css" />
    	<link rel="stylesheet" href="/css/font-awesome-4.7.0/css/font-awesome.min.css" />
		<title>Mastermind</title>
</head>
<body>
<div class="info_div">
    <div class="show_info" id="show_info" onclick="showInfo()">
        <i class="fa fa-question-circle-o show_info" aria-hidden="true"></i>
    </div>
    <div class="hide_info" id="hide_info" onclick="hideInfo()">
        <i class="fa fa-window-close hide_info" aria-hidden="true"></i>
    </div>
</div>

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="headertext">
                    <h3>Mastermind</h3>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
               
            </div>
        </div>
    </div>
</div>
<div class="info_text">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div id="info">
                    <h1>Overzicht</h1>
                    <p>Te kiezen kleuren</p>
                    <input type="button" id="bluebutton">
                    <input type="button" id="redbutton">
                    <input type="button" id="greenbutton">
                    <input type="button" id="yellowbutton">
                    <p>Uitleg check</p>
                    <p>Rood: hij zit op de juiste plek.</p>
                    <i class="fa fa-circle fa_red" aria-hidden="true"></i>
                    <p>Zwart: Hij zit erin maar niet op de juiste plaats.</p>
                    <i class="fa fa-circle fa_black" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="game">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="start">
                    <input type="button" onclick="StartGame()" aria-hidden="true" value="StartGame" id="StartGame">
                </div>

                <div id="colors">
                    <input type="button" onclick="SetColorRed()" id="redbutton"></i>
                    <input type="button" onclick="SetColorBlue()" id="bluebutton">
                    <input type="button" onclick="SetColorGreen()" id="greenbutton">
                    <input type="button" onclick="SetColorYellow()" id="yellowbutton">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">

        <div class="bla">
        </div>
        <table id="colorcode">
            <tr>
                <th><i class="fa fa-circle" aria-hidden="true" id="1" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="2" onClick="reply_click(this.id)"></i></th> 
                <th><i class="fa fa-circle" aria-hidden="true" id="3" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="4" onClick="reply_click(this.id)"></i></th>
            </tr>
            <tr>
                <th><i class="fa fa-circle" aria-hidden="true" id="5" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="6" onClick="reply_click(this.id)"></i></th> 
                <th><i class="fa fa-circle" aria-hidden="true" id="7" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="8" onClick="reply_click(this.id)"></i></th>
            </tr>
            <tr>
                <th><i class="fa fa-circle" aria-hidden="true" id="9" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="10" onClick="reply_click(this.id)"></i></th> 
                <th><i class="fa fa-circle" aria-hidden="true" id="11" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="12" onClick="reply_click(this.id)"></i></th>
            </tr>
            <tr>
                <th><i class="fa fa-circle" aria-hidden="true" id="13" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="14" onClick="reply_click(this.id)"></i></th> 
                <th><i class="fa fa-circle" aria-hidden="true" id="15" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="16" onClick="reply_click(this.id)"></i></th>
            </tr>
            <tr>
                <th><i class="fa fa-circle" aria-hidden="true" id="17" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="18" onClick="reply_click(this.id)"></i></th> 
                <th><i class="fa fa-circle" aria-hidden="true" id="19" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="20" onClick="reply_click(this.id)"></i></th>
            </tr>
            <tr>
                <th><i class="fa fa-circle" aria-hidden="true" id="21" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="22" onClick="reply_click(this.id)"></i></th> 
                <th><i class="fa fa-circle" aria-hidden="true" id="23" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="24" onClick="reply_click(this.id)"></i></th>
            </tr>
            <tr>
                <th><i class="fa fa-circle" aria-hidden="true" id="25" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="26" onClick="reply_click(this.id)"></i></th> 
                <th><i class="fa fa-circle" aria-hidden="true" id="27" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="28" onClick="reply_click(this.id)"></i></th>
            </tr>
            <tr>
                <th><i class="fa fa-circle" aria-hidden="true" id="29" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="30" onClick="reply_click(this.id)"></i></th> 
                <th><i class="fa fa-circle" aria-hidden="true" id="31" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="32" onClick="reply_click(this.id)"></i></th>
            </tr>
            <tr>
                <th><i class="fa fa-circle" aria-hidden="true" id="33" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="34" onClick="reply_click(this.id)"></i></th> 
                <th><i class="fa fa-circle" aria-hidden="true" id="35" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="36" onClick="reply_click(this.id)"></i></th>
            </tr>
            <tr>
                <th><i class="fa fa-circle" aria-hidden="true" id="37" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="38" onClick="reply_click(this.id)"></i></th> 
                <th><i class="fa fa-circle" aria-hidden="true" id="39" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="40" onClick="reply_click(this.id)"></i></th>
            </tr>
            <tr>
                <th><i class="fa fa-circle" aria-hidden="true" id="41" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="42" onClick="reply_click(this.id)"></i></th> 
                <th><i class="fa fa-circle" aria-hidden="true" id="43" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="44" onClick="reply_click(this.id)"></i></th>
            </tr>
            <tr>
                <th><i class="fa fa-circle" aria-hidden="true" id="45" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="46" onClick="reply_click(this.id)"></i></th> 
                <th><i class="fa fa-circle" aria-hidden="true" id="47" onClick="reply_click(this.id)"></i></th>
                <th><i class="fa fa-circle" aria-hidden="true" id="48" onClick="reply_click(this.id)"></i></th>
            </tr>
           

            
            </table>
            <br><input type="button"  aria-hidden="true" id="check" value="check" onclick="checkColor()">
        </div>
    <div class="col-md-6">
    <div id="answer">
    
    </div>
           
    </div>
</div>

<script type="text/javascript">
var place_id = 1;
var color = [];
var color_id = [];
var code = [];
var clicks = 0;
//te raden code wordt gemaakt
function StartGame() {
    for (i = 0; i <= 3; i++) {
        code.push(Math.floor(Math.random() * 4) + 1) ; 
        // arr.push(Math.round(Math.random() * t))
        console.log(code);
    }
    document.getElementById("start").style.display = "none";
    document.getElementById("colorcode").style.display = "block";
    document.getElementById("info").style.display = "none";
}

// id van het geklikte bolletje wordt opgehaald
function reply_click(clicked_id){
    dot_id = clicked_id;
    console.log(dot_id);
    clicks ++;
    console.log(clicks);
    document.getElementById("colors").style.display = "block";
}

// kleur wordt gezet en de kleur id wordt aan een array toegevoegd
function SetColorRed() {
    var d = document.getElementById(dot_id);
    d.className += " fa_red";
    color.push("red");
    color_id.push(1); 
    place_id ++;
    // console.log(dot_id);
    document.getElementById("colors").style.display = "none";
    checkLenght()

}

// kleur wordt gezet en de kleur id wordt aan een array toegevoegd
function SetColorBlue() {
    var d = document.getElementById(dot_id);
    d.className += " fa_blue";
    color.push("blue");
    color_id.push(2);
    place_id ++;
    // console.log(place_id);
    document.getElementById("colors").style.display = "none";
    checkLenght()
}

// kleur wordt gezet en de kleur id wordt aan een array toegevoegd
function SetColorGreen() {
    var d = document.getElementById(dot_id);
    d.className += " fa_green";
    color.push("green");
    color_id.push(3);
    place_id ++;
    // console.log(place_id);
    document.getElementById("colors").style.display = "none";
    checkLenght()
}

// kleur wordt gezet en de kleur id wordt aan een array toegevoegd
function SetColorYellow() {
    var d = document.getElementById(dot_id);
    d.className += " fa_yellow";
    color.push("yellow");
    color_id.push(4);
    place_id ++;
    // console.log(place_id);

    document.getElementById("colors").style.display = "none";
    checkLenght()
}

// er word gecheckt of de invoer goed is
function checkColor(){
    
    var resultCheck = [];
    var arr1 = color_id;
    var arr2 = code;
        
    if (arr1.length !== arr2.length){
        alert("Oeps er is iets fout gegaan");
        return false;
    } else {    
        for(var i = 0; i < arr1.length; i++) {
            if(arr1[i] !== arr2[i]){
               
                resultCheck.push(0);



                    if (arr1[i] == 9){
                        alert("is 9");
                    }else{
                        var inside = color_id.indexOf(i);

                        if(inside == -1){
                            console.log(resultCheck);
                            var newNode = document.createElement('div');
                            newNode.className = ' fa fa-circle fa_white';
                            document.getElementById('answer').appendChild(newNode);
                            //Hij zit er niet in
                        }else{
                            console.log(resultCheck);
                            var newNode = document.createElement('div');
                            newNode.className = ' fa fa-circle fa_black';
                            document.getElementById('answer').appendChild(newNode);
                            //Hij zit erin maar niet op de juiste plaats
                        }

                    }
                
            }else{
                resultCheck.push(1);
                console.log(resultCheck);
                color_id[i] = 9;
                console.log(color_id);
                var newNode = document.createElement('div');
                newNode.className = ' fa fa-circle fa_red';
                document.getElementById('answer').appendChild(newNode);
            }//if in for 
        }//for
    }//if else

    var winCheck = [1, 1, 1, 1];
    
    if (resultCheck.toString() == winCheck.toString()){
        alert("Gefeliciteerd! Je hebt gewonnen");
        document.getElementById("check").style.display = "none";
    }else{
        color_id = [];
        alert(color_id);
    }
    document.getElementById("check").style.display = "none";

    

}

function checkLenght(){
    var answer = color_id.length;
    console.log(answer);

    if (answer == 4){
        document.getElementById("check").style.display = "block";
    }
}

function showInfo(){
    document.getElementById("info").style.display = "block";
    document.getElementById("show_info").style.display = "none";
    document.getElementById("hide_info").style.display = "block";
}
function hideInfo(){
    document.getElementById("info").style.display = "none";
    document.getElementById("hide_info").style.display = "none";
    document.getElementById("show_info").style.display = "block";
}

</script>


</body>
</html>