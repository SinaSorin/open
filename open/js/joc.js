function raspuns(r, cFunction) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      cFunction(this,r);
    }
  };
  xhttp.open("GET","include/corect.php?q="+r,true);
  xhttp.send();
}
function corect(xhttp,r) {
	
	var x = document.getElementsByClassName("raspuns");
var i;
for (i = 0; i < x.length; i++) {
  x[i].style.pointerEvents="none";
}
    var c = xhttp.responseText;
    if(c == 1)
        {computerAttack();
        document.getElementById(r).style.backgroundColor = 'green';
		v2 = hp2.innerHTML - 1;
        }
    else
        {virusAttack();
        document.getElementById(r).style.backgroundColor = 'red';
		v1 = hp1.innerHTML - 1;
        }
		
    if (v1 == 0)
	{
		setTimeout(computerDeath,1550);
		console.log('blaaaaaa rip');
		clearTimeout('schimba');
	}
    else
        if (v2 == 0)
		{
			setTimeout(virusDeath,1550);
			console.log('blaaaaaa rip2');
			clearTimeout('schimba');
		}
		else
		{
			setTimeout(schimba,3100);
			console.log('blaaaaaa vxxvcvx');
		}
}
function schimba() {
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tot").innerHTML = this.responseText;
    }
  };
    xhttp.open("GET","include/schimba.php",true);
  xhttp.send();
}