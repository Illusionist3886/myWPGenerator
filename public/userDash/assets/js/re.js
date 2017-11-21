
var takaaa = document.getElementById("basicprice").value;

function addition()
{
	var x1 = document.getElementById("regone").innerHTML;
	var x2 = document.getElementById("regtwo").innerHTML;
	var x3 = document.getElementById("regthree").innerHTML;
	var x4 = document.getElementById("regfour").innerHTML;
	var x5 = document.getElementById("regfive").innerHTML;

	if( x1 === undefined || x1 === null)
	{
		x1=0;
	} else {
		x1 = x1.replace('$','');
	}



	if( x2 === undefined || x2 === null)
	{
		x2=0;
	} else {
		x2 = x2.replace('$','');
	}



	if( x3 === undefined || x3 === null)
	{
		x3=0;
	} else {
		x3 = x3.replace('$','');
	}



	if( x4 === undefined || x4 === null)
	{
		x4=0;
	} else {
		x4 = x4.replace('$','');
	}


	if( x5 === undefined || x5 === null)
	{
		x5=0;
	} else {
		x5 = x5.replace('$','');
	}


	var mottaka = +x1 + +x2 + +x3 + +x4 + +x5;
	console.log(x1);
	var total = document.getElementById("total").innerHTML = "$"+mottaka; 
	var totalhidden = document.getElementById("totaltaka").value = mottaka; 
}


function addone()
	{
		var x = document.getElementById("sl01").checked;
		if(x != true){
			document.getElementById("regone").innerHTML = ''; 
			document.getElementById("usernameonefield").setAttribute('disabled', 'required')
			document.getElementById("usernameonefield").value=null;

			document.getElementById("passwordonefield").setAttribute('disabled', 'required')
			document.getElementById("passwordonefield").value=null;
		} else {
			document.getElementById("regone").innerHTML = "$"+takaaa; 
			document.getElementById("usernameonefield").removeAttribute('disabled')
			document.getElementById("passwordonefield").removeAttribute('disabled')

		}
		
		addition();
	}

function addtwo()
	{
		var x = document.getElementById("sl02").checked;
		if(x != true){
			document.getElementById("regtwo").innerHTML = ''; 
			document.getElementById("usernametwofield").setAttribute('disabled', 'required')
			document.getElementById("usernametwofield").value=null;

			document.getElementById("passwordtwofield").setAttribute('disabled', 'required')
			document.getElementById("passwordtwofield").value=null;
		} else {
			document.getElementById("regtwo").innerHTML = "$"+takaaa; 
			document.getElementById("usernametwofield").removeAttribute('disabled')
			document.getElementById("passwordtwofield").removeAttribute('disabled')
		}
		
		addition();
	}

function addthree()
	{
		var x = document.getElementById("sl03").checked;
		if(x != true){
			document.getElementById("regthree").innerHTML = ''; 
			document.getElementById("usernamethreefield").setAttribute('disabled', 'required')
			document.getElementById("usernamethreefield").value=null;

			document.getElementById("passwordthreefield").setAttribute('disabled', 'required')
			document.getElementById("passwordthreefield").value=null;
		} else {
			document.getElementById("regthree").innerHTML = "$"+takaaa; 
			document.getElementById("usernamethreefield").removeAttribute('disabled')
			document.getElementById("passwordthreefield").removeAttribute('disabled')
		}
		
		addition();
	}

function addfour()
	{
		var x = document.getElementById("sl04").checked;
		if(x != true){
			document.getElementById("regfour").innerHTML = ''; 
			document.getElementById("usernamefourfield").setAttribute('disabled', 'required')
			document.getElementById("usernamefourfield").value=null;

			document.getElementById("passwordfourfield").setAttribute('disabled', 'required')
			document.getElementById("passwordfourfield").value=null;
		} else {
			document.getElementById("regfour").innerHTML = "$"+takaaa; 
			document.getElementById("usernamefourfield").removeAttribute('disabled')
			document.getElementById("passwordfourfield").removeAttribute('disabled')
		}
		
		addition();
	}

function addfive()
	{
		var x = document.getElementById("sl05").checked;
		if(x != true){
			document.getElementById("regfive").innerHTML = ''; 
			document.getElementById("usernamefivefield").setAttribute('disabled', 'required')
			document.getElementById("usernamefivefield").value=null;

			document.getElementById("passwordfivefield").setAttribute('disabled', 'required')
			document.getElementById("passwordfivefield").value=null;
		} else {
			document.getElementById("regfive").innerHTML = "$"+takaaa; 
			document.getElementById("usernamefivefield").removeAttribute('disabled')
			document.getElementById("passwordfivefield").removeAttribute('disabled')
		}
		
		addition();
	}

