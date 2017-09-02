function new_opt(val)
{
	var i=0;
	var text="";
	for(i=0;i<val;i++)
	{
		if(i%4==0){
			text=text+"<div class='row'>";
		}
		text=text+"<div class='col-lg-3'><input type=file name='img_"+i+"' class=form-control><br/><textarea rows=1 cols=10 name='opt"+i+"' class='form-control'></textarea></div>";
		if(i%4==3){
			text=text+"</div><br>";
		}
	}
	document.getElementById("set_options").innerHTML=text;
}
