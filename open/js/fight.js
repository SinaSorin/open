var comp = document.getElementById("c");
var virus  = document.getElementById("v");
var hp1 = document.getElementById("hp1");
var hp2 = document.getElementById("hp2");
var v1 = hp1.innerHTML;
var v2 = hp2.innerHTML;
//computer
function computerAttack() {
    var posc = 0;
    var id = setInterval(frame, 1);
    var ajuns = 0;
  function frame() {
    if (posc == 300) {
          {
              clearInterval(id);
              ajuns = 1;
              $( "#v" ).effect("shake", {times:5,distance:5}, 1000 );
              hp2.innerHTML = hp2.innerHTML - 1;
              v2 = hp2.innerHTML;
              virusCheckDeath(v2);
          }

    } else {
      posc++; 
      //comp.style.top = posc + "px"; 
      comp.style.left = posc + "px"; 
        
    }
  }
     var id1 = setInterval(frame1, 1);
    function frame1() {
     if (posc == 0) {
          clearInterval(id1);
    } else {
     if (ajuns) {
          posc--; 
      //comp.style.top = posc + "px"; 
      comp.style.left = posc + "px"; 
     }
    }
  }   
    }
//virus
function virusAttack() {
    
    var posc = 0;
    console.log(posc);
    var id2 = setInterval(frame2, 1);
    var ajuns = 0;
  function frame2() {
    if (posc == -300) {
          {
              clearInterval(id2);
              ajuns = 1;
              $( "#c" ).effect("shake", {times:5,distance:5}, 1000 );
              hp1.innerHTML = hp1.innerHTML - 1;
              v1 = hp1.innerHTML;
              computerCheckDeath(v1);
          }

    } else {
      posc--; 
      //comp.style.top = posc + "px"; 
      virus.style.left = posc + "px"; 
        
    }
  }
     var id3 = setInterval(frame3, 1);
    function frame3() {
     if (posc == 0) {
          clearInterval(id3);
    } else {
     if (ajuns) {
          posc++; 
      //comp.style.top = posc + "px"; 
      virus.style.left = posc + "px"; 
        console.log("1");
     }
    }
  }   
    }
function computerDeath() {
    $( "#c" ).effect("shake", {times:20}, 1000 );
    setTimeout(function(){ comp.style.visibility="hidden";}, 1200);
    
   
    
}
function virusDeath() {
    $( "#v" ).effect("shake", {times:20}, 1000 );
    setTimeout(function(){ virus.style.visibility="hidden";}, 1200);
}
function computerCheckDeath(v1) {
    if (v1 <= 0)
        computerDeath();
}
function virusCheckDeath(v2) {
    if (v2 <= 0)
        virusDeath();
}

