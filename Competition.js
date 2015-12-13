/* Percy Teng 10122592 cisc282 final project javascript sheet*/
/*This javascript file invokes all the events that will happen after user clicks on the images displayed on the competition pages*/
function BCAT1(){
	var thumbnail = document.getElementById("thumbnail");
	var inner= document.getElementById("inner");
	var outer= document.getElementById("outer");
	var button = document.getElementById("but");
	outer.style.display = 'initial';
	thumbnail.src = "images/BCAT1.jpg";
	thumbnail.style.left = '50%';
	thumbnail.style.height= '500px';
	thumbnail.style.width = '700px';
	thumbnail.style.margin = '50px auto auto -350px';
	button.style.left = '50%';
	button.style.margin = 'auto auto auto -350px';
}
function BCAT2(){
	var thumbnail = document.getElementById("thumbnail");
	var inner= document.getElementById("inner");
	var outer= document.getElementById("outer");	
	var button = document.getElementById("but");	
	outer.style.display = 'initial';
	thumbnail.src = "images/BCAT2.jpg";
	thumbnail.style.left = '50%';
	thumbnail.style.height='600px';
	thumbnail.style.width = '400px';
	thumbnail.style.margin = '30px auto auto -200px';
	button.style.left = '50%';
	button.style.margin = '-20px auto auto -200px';
}
function BCAT3(){
	var thumbnail = document.getElementById("thumbnail");
	var inner= document.getElementById("inner");
	var outer= document.getElementById("outer");
	var button = document.getElementById("but");	
	outer.style.display = 'initial';
	thumbnail.src = "images/BCAT3.jpg";
	thumbnail.style.left = '50%';
	thumbnail.style.height='600px';
	thumbnail.style.width = '400px';
	thumbnail.style.margin = '30px auto auto -200px';
	button.style.left = '50%';
	button.style.margin = '-20px auto auto -200px';
}
function BCAT4(){
	var thumbnail = document.getElementById("thumbnail");
	var inner= document.getElementById("inner");
	var outer= document.getElementById("outer");	
	var button = document.getElementById("but");	
	thumbnail.src = "images/BCAT4.jpg";
	outer.style.display = 'initial';
	thumbnail.style.left = '50%';
	thumbnail.style.height= '500px';
	thumbnail.style.width = '700px';
	thumbnail.style.margin = '50px auto auto -350px';
	button.style.left = '50%';
	button.style.margin = 'auto auto auto -350px';
}
function BCAT5(){
	var thumbnail = document.getElementById("thumbnail");
	var inner= document.getElementById("inner");
	var outer= document.getElementById("outer");	
	var button = document.getElementById("but");	
	outer.style.display = 'initial';
	thumbnail.src = "images/BCAT5.jpg";
	thumbnail.style.left = '50%';
	thumbnail.style.height='600px';
	thumbnail.style.width = '400px';
	thumbnail.style.margin = '30px auto auto -200px';
	button.style.left = '50%';
	button.style.margin = '-20px auto auto -200px';
}
//The function for event after user clicks the close button at top left of the image
function button(){
	var outterC= document.getElementById("outer");
	if (outterC.style.display != "none"){
		outterC.style.display = "none";
	}

}