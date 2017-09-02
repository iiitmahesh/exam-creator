<?php
$tname=$_POST["testn"];
$category=$_POST["category"];
$no_qu=$_POST["noqu"];
$kwrds=$_POST["kwrds"];
$hrs=$_POST["hrs"];
$mins=$_POST["mins"];
?>

<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="UTF-8">
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
		<link href="css/Squire-UI.css" rel="stylesheet">
		
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style type="text/css" media="screen">
    
    </style>
    <script type="text/javascript" charset="utf-8">
    var editor;
    document.addEventListener( 'change', function ( e ) {
      var id = e.target.id,
          value;
      if ( id && editor && editor[ id ] ) {
        if ( e.target.className === 'ch' ) {
          value ="upload_folder/"+e.target.value;
        }
        editor[ id ]( value );
      }
    }, false );
    </script>
	<script type="text/javascript" charset="utf-8">
    var editor;
    document.addEventListener( 'click', function ( e ) {
      var id = e.target.id,
          value;
      if ( id && editor && editor[ id ] ) {
        if ( e.target.className === 'fnt' ) {
          value = e.target.value;
        }
        editor[ id ]( value );
      }
    }, false );
    </script>
	
	
</head>
<body >

<div class="container-fluid " style="width:99%">
			<table class="table table-striped" >
				<tr>
				<td>
					Topic	
				</td>
				<td>
					<input type=text class="form-control" name="q_topic">	
				</td>
				<td>
					Sub Topic	
				</td>
				<td>
					<input type=text class="form-control" name="q_subtopic">	
				</td>
				<td>
					Number of Options	
				</td>
				<td>
					<form name="qu_mak">
						<input type=number name="no_opt" class="form-control" onChange="new_opt(this.value)" onKeyup="new_opt(this.value)">
					</form>
				</td>
				<td>
					<input type=button class="btn btn-info" value="Previous">	
				</td>
				<td>
					<input type=button class="btn btn-info" value="Next">
				</td>
				</tr>
			</table>
	<div class="row">
	<div class="col-lg-9">
	<div class="panel panel-default " >
	<div class="panel-body">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default" >
			<div class="panel-heading">
				<h3 class="panel-title">Make Question</h3>
			  </div>
				<div class="panel-body">
					<div class="row " >
						<div class="col-lg-6">
							<div class="menu" contenteditable="false" >
								<div class="group">
									<div  id="bold" class="item">
									<span id="bold" class="fa fa-bold" style="text-decoration:none;">
									</span>
									</div>
									<div id="italic" class="item">
									<span id="italic" class="fa fa-italic " style="text-decoration:none;"></span>
									</div>
									<div  id="underline" class="item">
									<span id="underline" class="fa fa-underline" style="text-decoration:none;"></span>
									</div>
									<div id="selectFont"   class="item">
										<i class="fa fa-font"></i>
										<div class="btn-group" >
									  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
										<span class="caret"></span>
									  </button>
									 
									  <ul class="dropdown-menu" role="menu">
										<li ><button id="setFontFace" class="fnt" value="Arial" style="font-family:Arial;" >Arial</button></li>
										<li ><button id="setFontFace" class="fnt" value="Helvetica" style="font-family:Helvetica;">Helvetica</button></li>
										<li ><button id="setFontFace" class="fnt" value="Tahoma" style="font-family:Tahoma;">Tahoma</button></li>
										<li ><button id="setFontFace" class="fnt" value="Verdana" style="font-family:Verdana;">Verdana</button></li>
										<li ><button id="setFontFace" class="fnt" value="Trebuchet MS" style="font-family:Trebuchet MS;">Trebuchet MS</button></li>
										<li ><button id="setFontFace" class="fnt" value="Times New Roman" style="font-family:Times New Roman;">Times New Roman</button></li>
										<li ><button id="setFontFace" class="fnt" value="Courier New" style="font-family:Courier New;">Courier New</button></li>
										<li ><button id="setFontFace" class="fnt" value="Brush Script MT" style="font-family:Brush Script MT;">Brush Script MT</button></li>
									  </ul>
									</div>
									<div class="btn-group" >
									  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
										<span class="caret"></span>
									  </button>
									 
									  <ul class="dropdown-menu" role="menu">
										<li ><button id="setFontSize" class="fnt" value="13px">13</button></li>
										<li><button id="setFontSize" class="fnt" value="14px">14</button></li>
										<li><button id="setFontSize" class="fnt" value="15px">15</button></li>
										<li><button id="setFontSize" class="fnt" value="16px">16</button></li>
										<li><button id="setFontSize" class="fnt" value="17px">17</button></li>
										<li><button id="setFontSize" class="fnt" value="18px">18</button></li>
										<li><button id="setFontSize" class="fnt" value="19px">19</button></li>
										<li><button id="setFontSize" class="fnt" value="20px">20</button></li>
										<li><button id="setFontSize" class="fnt" value="21px">21</button></li>
									  </ul>
									</div>
									<div class="btn-group" >
									  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
										<span class="caret"></span>
									  </button>
									 
									  <ul class="dropdown-menu" role="menu">
										<li ><button id="setTextColour" class="fnt" value="Blue">Blue</button></li>
										<li><button id="setTextColour" class="fnt" value="Red">Red</button></li>
										<li><button id="setTextColour" class="fnt" value="Yellow">Yellow</button></li>
										<li><button id="setTextColour" class="fnt" value="Green">Green</button></li>
										<li><button id="setTextColour" class="fnt" value="steelblue">Steel Blue</button></li>
										<li><button id="setTextColour" class="fnt" value="Black">Black</button></li>
										<li><button id="setTextColour" class="fnt" value="Grey">Grey</button></li>
										<li><button id="setTextColour" class="fnt" value="Pink">Pink</button></li>
									  </ul>
									</div>
									</div>
								
								<div id="setHighlightColour" class="item">
								<span id="setHighlightColour" class="prompt" style="text-decoration:none;">Text Highlight</span>
								<div class="btn-group" >
									  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
										<span class="caret"></span>
									  </button>
									 
									  <ul class="dropdown-menu" role="menu">
										<li ><button id="setHighlightColour" class="fnt" value="Blue">Blue</button></li>
										<li><button id="setHighlightColour" class="fnt" value="Red">Red</button></li>
										<li><button id="setHighlightColour" class="fnt" value="Yellow">Yellow</button></li>
										<li><button id="setHighlightColour" class="fnt" value="Green">Green</button></li>
										<li><button id="setHighlightColour" class="fnt" value="steelblue">Steel Blue</button></li>
										<li><button id="setHighlightColour" class="fnt" value="Black">Black</button></li>
										<li><button id="setHighlightColour" class="fnt" value="Grey">Grey</button></li>
										<li><button id="setHighlightColour" class="fnt" value="Pink">Pink</button></li>
									  </ul>
									</div>
								</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="menu" contenteditable="false" >
								<div class="group">
									<div   class="item">
										<form id="img_form" method="post" enctype="multipart/form-data" action="javascript:void(0);" autocomplete="off">											
											<div class="vasplusfile_adds"><input type="file" name="insertImage" class="ch" id="insertImage" style="opacity:0;-moz-opacity:0;filter:alpha(opacity:0);z-index:9999;width:90px;cursor:default;" /></div>
										</form>
									</div>
								<div  id="undo" class="item">
									<span id="undo" class="fa fa-undo" style="text-decoration:none;"></span>
									</div>
									<div  id="redo" class="item">
									<span id="redo" class="fa fa-undo flip" style="text-decoration:none;"></span>
									</div>
									<div  id="removeBold" class="item">
									  <span id="removeBold" style="text-decoration:none;" class="fa fa-times"></span>
									  <span id="removeBold" style="text-decoration:none;" class="fa fa-bold"></span>
									</div>
									<div id="removeItalic" class="item">
									<span id="removeItalic" style="text-decoration:none;" class="fa fa-times"></span>
									<span id="removeItalic" class="fa fa-italic " style="text-decoration:none;"></span>
									</div>
									<div  id="removeUnderline" class="item">
										<span id="removeUnderline" style="text-decoration:none;" class="fa fa-times"></span>
									  <span id="removeUnderline" style="text-decoration:none;" class="fa fa-underline"></span>
									</div>										
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="width:99%;margin-left:0.5%;margin-right:0.5%;">
						<iframe src=document.html onload="top.editor=this.contentWindow.editor" height="30%"></iframe>
					</div>	
				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
			  <div class="panel-body" id="set_options">
			 
				</div>
				
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	<div class="col-lg-3">
			<div class="panel panel-default">
				<div class="panel-body" >
					<?php
					$i=0;
					for($i=0;$i<$no_qu;$i++){
						if($i%4==0){
							echo "<div class='row'>";
						}
						$val=$i+1;
						$nam="qu_".$val;
						echo "<div class='col-lg-3'><input type='button' value='$val' name='$nam' class='btn btn-default' /></div>";
						if($i%4==3){
							echo "</div><br/>";
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>

   <script src="js/func.js"></script>   
   <script src="js/jquery.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <link href="css/style2.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/file_uploads.js"></script>
	<script type="text/javascript" src="js/vpb_script.js"></script>
</body>

</html>
