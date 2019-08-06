function schimba(nr){
   var vb = ["","infectează sectorul de boot, adică acea parte a hard-disk-ului care este accesată la pornirea calculatorului","infectează aplicaţiile atunci când acestea sunt executate","infectează fişiere create cu ajutorul software-ului de birou (ex.: documente)","infectează atât sectorul de boot, cât şi fişierele","sunt viruşi care îşi modifică instrucţiunile atunci când infectează un alt calculator","îşi ascund prezenţa, făcând ca fişierele infectate să pară neinfectate"]; 
    document.getElementById("vorbitor").innerHTML=vb[nr];
}
var header = document.getElementById("butoane");
var btns = header.getElementsByClassName("v");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}


$(document).ready(function(){
	
    $("#btn1").click(function(){
	i++;
	var str1 = "<input id='id";
    var str2 = i;
	var str3 = "' type='text' class='date' autocomplete='off' name='data";
    var str4 = "' required>";
    var text = str1.concat(str2,str3,str2,str4);
        $("#span").append(text);
	document.getElementById("imp").value = i;
    });
});

$(document).ready(function(){
    $("#btn2").click(function(){
		if(i>0)
		{var str1 ="#id";
		var str2 = i;
		var text = str1.concat(str2);
        $(text).remove();
		i--;
		document.getElementById("imp").value = i;}
    });
});


var l=1;
var s=1;
var e=0;
var x=0;
var i=0;
var p;
function sexi(type){
	l++;
	if(type=="s")
	{
		s++;
		p="Statement";
	}
	else
		if(type=="e")
		{
			e++;
			p="Example";
		}
			else
				if(type=="x")
				{
					x++;
					p="Explanation";
				}
					else 
						if(type=="i")
						{
							i++;
							p="Impact";
						}
	
	var text = "<textarea class='c"+type+"' id='id"+l+"' placeholder='"+p+"' name='"+type+l+"' required ></textarea>";
	$("#span").append(text);
	document.getElementById("numar").value=l;
	if(s>0 && e>0 && x>0 && i>0)
		document.getElementById("submit").innerHTML = "<button class='v' name='submit'>Submit</button>";
	
}
function sterge() {
	if(l>0)
	{
		
		var id = 'id'+l;
		var c = document.getElementById(id).className;
		if(c == 'cs')
			s--;
			else
				if(c == 'ce')
					e--;
					else
						if(c == 'cx')
							x--;
						else
							if(c == 'ci')
								i--;
		id = "#" + id;
		$(id).remove();
		l--;
		if(s==0 || e==0 || x==0 || i==0)
		document.getElementById("submit").innerHTML = "";
	document.getElementById("numar").value=l;
	}
		
}
