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
