/* Percy Teng 10122592 cisc282 final project javascript sheet*/
/*This javascript file invokes all the events that will happen after user clicks on the images displayed on the performance pages*/
function flow1(){
	var thumbnail = document.getElementById("thumbnail");
	var inner= document.getElementById("inner");
	var outer= document.getElementById("outer");
	var button = document.getElementById("but");
	outer.style.display = 'initial';
	thumbnail.src = "images/flow1.jpg";
	thumbnail.style.left = '50%';
	thumbnail.style.width = '700px';
	thumbnail.style.margin = '50px auto auto -350px';
	button.style.left = '50%';
	button.style.margin = 'auto auto auto -350px';
}
function flow2(){
	var thumbnail = document.getElementById("thumbnail");
	var inner= document.getElementById("inner");
	var outer= document.getElementById("outer");	
	var button = document.getElementById("but");	
	outer.style.display = 'initial';
	thumbnail.src = "images/flow2.jpg";
	thumbnail.style.left = '50%';
	thumbnail.style.width = '700px';
	thumbnail.style.margin = '50px auto auto -350px';
	button.style.left = '50%';
	button.style.margin = 'auto auto auto -350px';
}
function flow3(){
	var thumbnail = document.getElementById("thumbnail");
	var inner= document.getElementById("inner");
	var outer= document.getElementById("outer");
	var button = document.getElementById("but");	
	outer.style.display = 'initial';
	thumbnail.src = "images/flow3.jpg";
	thumbnail.style.height = '500px';
	thumbnail.style.width = '700px';
	thumbnail.style.left = '50%';
	thumbnail.style.margin = '50px auto auto -350px';
	button.style.left = '50%';
	button.style.margin = 'auto auto auto -350px';
}
function flow4(){
	var thumbnail = document.getElementById("thumbnail");
	var inner= document.getElementById("inner");
	var outer= document.getElementById("outer");	
	var button = document.getElementById("but");	
	thumbnail.src = "images/flow4.jpg";
	outer.style.display = 'initial';
	thumbnail.style.left = '50%';
	thumbnail.style.width = '700px';
	thumbnail.style.margin = '50px auto auto -350px';
	button.style.left = '50%';
	button.style.margin = 'auto auto auto -350px';
}
function flow5(){
	var thumbnail = document.getElementById("thumbnail");
	var inner= document.getElementById("inner");
	var outer= document.getElementById("outer");	
	var button = document.getElementById("but");	
	outer.style.display = 'initial';
	thumbnail.src = "images/flow5.jpg";
	thumbnail.style.height = '500px';
	thumbnail.style.width = '700px';
	thumbnail.style.left = '50%';
	thumbnail.style.margin = '50px auto auto -350px';
	button.style.left = '50%';
	button.style.margin = 'auto auto auto -350px';
}
function button(){
	var outterC= document.getElementById("outer");
	if (outterC.style.display != "none"){
		outterC.style.display = "none";
	}
}