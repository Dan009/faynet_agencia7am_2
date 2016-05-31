<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Editor</title>
 <script type="text/javascript">
	
	var canvas;
	var stage;

	/**
	 * Init 
	 */
	function init() {
		
		canvas = document.getElementById("canvasdos");
		stage = new createjs.Stage(canvas);

		// Enable touch support
		if (createjs.Touch.isSupported()) { createjs.Touch.enable(stage); }

		nuevafigura();
		nuevafigura2();
		nuevafigura3();
		displayMonalisa();
		//displayLabel();
		
		
	}


	/**
	 * Display Label
	 */
	displayLabel = function () {

		// Create a new Text object and a rectangle Shape object, and position them inside a container
		var container = new createjs.Container();
		container.x = 100;
		container.y = 80;
		container.rotation = 45;

		var target = new createjs.Shape();
		target.graphics.beginFill("#F00").drawRect(-10,-10,180,60).beginFill("#FFF");
		container.addChild(target);

		var txt = new createjs.Text("Jairo", "36px Arial", "#FFF");
		txt.textBaseline = "top";
		container.addChild(txt);

		stage.addChild(container);

		// Enable drag'n'drop
		enableDrag(container)

	}
	
	nuevafigura = function () {

		// Create a new Text object and a rectangle Shape object, and position them inside a container
		var container = new createjs.Container();
		container.x = 500;
		container.y = 80;
		//container.rotation = 0;

		var target = new createjs.Shape();
		target.graphics.beginFill("#fff");
		target.graphics.setStrokeStyle(1,"square").beginStroke("#000000").drawCircle(6,-5,15,10);
		container.addChild(target);

		var txt = new createjs.Text("1", "18px Arial", "#000");
		txt.textBaseline = "center";
		container.addChild(txt);

		stage.addChild(container);

		// Enable drag'n'drop
		enableDrag(container)

	}
	
	nuevafigura2 = function () {

		// Create a new Text object and a rectangle Shape object, and position them inside a container
		var container = new createjs.Container();
		container.x = 500;
		container.y = 115;
		//container.rotation = 0;

		var target = new createjs.Shape();
		target.graphics.beginFill("#fff");
		target.graphics.setStrokeStyle(1,"square").beginStroke("#000000").drawCircle(6,-5,15,10);
		container.addChild(target);

		var txt = new createjs.Text("2", "18px Arial", "#000");
		txt.textBaseline = "center";
		container.addChild(txt);

		stage.addChild(container);

		// Enable drag'n'drop
		enableDrag(container)

	}
	
	
	nuevafigura3 = function () {

		// Create a new Text object and a rectangle Shape object, and position them inside a container
		var container = new createjs.Container();
		container.x = 500;
		container.y = 150;
		//container.rotation = 0;

		var target = new createjs.Shape();
		target.graphics.beginFill("#fff");
		target.graphics.setStrokeStyle(1,"square").beginStroke("#000000").drawCircle(6,-5,15,10);
		container.addChild(target);

		var txt = new createjs.Text("3", "18px Arial", "#000");
		txt.textBaseline = "center";
		container.addChild(txt);

		stage.addChild(container);

		// Enable drag'n'drop
		enableDrag(container)

	}
	

	/**
	 * Display Monalisa
	 */
	displayMonalisa = function () {

		var image = new Image();
		
		// Invoked when the picture is loaded
		image.onload = function (event) {

			// Display Monalisa
			var monalisa = new createjs.Bitmap(event.target) ;
			stage.addChild(monalisa);
			stage.update();
			
			// Enable drag'n'drop on Picture
			enableDrag(monalisa)
			
		}
		image.src = "http://localhost/canvas/images/mona.jpg" ;


	}


	/**
     * Enable drag'n'drop on DisplayObjects
     */
	enableDrag = function (item) {

		// OnPress event handler
		item.onPress = function(evt) {

			var offset = {	x:item.x-evt.stageX, 
							y:item.y-evt.stageY};

			// Bring to front
			stage.addChild(item);

			// Mouse Move event handler
			evt.onMouseMove = function(ev) {
				
				item.x = ev.stageX+offset.x;
				item.y = ev.stageY+offset.y;
				stage.update();
			}
		}
	}

	/**
     * Export and save the canvas as PNG 
     */
	function exportAndSaveCanvas()  {

		// Get the canvas screenshot as PNG
		var screenshot = Canvas2Image.saveAsPNG(canvas, true);

		// This is a little trick to get the SRC attribute from the generated <img> screenshot
		canvas.parentNode.appendChild(screenshot);
		screenshot.id = "canvasimage";		
		data = $('#canvasimage').attr('src');
		canvas.parentNode.removeChild(screenshot);


		// Send the screenshot to PHP to save it on the server
		var url = 'upload/export.php';
		$.ajax({ 
		    type: "POST", 
		    url: url,
		    dataType: 'text',
		    data: {
		        base64data : data
		    }
		});



	}

	/**
     * Export and display the canvas as PNG in a new wind	ow
     */
	function exportAndView()  {

		var screenshot = Canvas2Image.saveAsPNG(canvas, true);
		var win = window.open();
		$(win.document.body).html(screenshot );
	}



	
</script>
<script src="http://code.createjs.com/easeljs-0.5.0.min.js"></script> 
	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>

	<script src="htt://localhost/canvas/libs/export_canvas/base64.js" type="text/javascript"></script>
	<script src="htt://localhost/canvas/libs/export_canvas/canvas2image.js" type="text/javascript"></script>
<style>
body{
	margin:0;
	padding:0;
	font-family:Arial, Helvetica, sans-serif;
	}

#content-editor{
	width:100%;
	height:800px;
	position:absolute;
	top:0;
	/*border:1px solid #CCC;*/
	
	}
#content-tap{
	width:100%;
	height:35px;
	}
	
.left-contet-editor{
	width:80%;
	height:90.5%;
	/*border-right:1px solid #ccc;*/
	float:left;
	}
	
.right-contet-editor{
	width:19.9%;
	height:90.5%;
	float:left;
	border-right:1px solid #ccc;
	
	}
.bottom{
	width:15%;
	height:100%;
	background:#CCC;
	float:left;
	margin-right:1px;
	}
.leyenda{
	width:97%;
	height:18px;
	border-bottom:1px solid #ccc;
	font-size:11px;
	padding-top:1px;
	padding-left:3%;
	}
	
	.leyenda strong{
		font-size:15px;}
	
#canvas{
	/*background:url(archivos/attach/file-1458247314.jpg) no-repeat;*/
	border:1px solid #ccc;
	border-bottom:0;
	border-right:0;
	
	}
.literally{
	background:none !important;
	border:1px solid #ccc;
	height:700px !important;
	}
	
.literally .lc-picker, .literally.toolbar-at-top .lc-options{
	border:none !important;
	background:none !important;
	}
	#canvasdos{
		z-index:1;
		}
	.footer-editor{
		width:98.5%;
		float:left;
		height:106px;
		border:1px solid #ccc;
		padding-left:1.5%;
		padding-top:7px;
		}
		
		.footer-editor strong{
			font-size:12px;}
		
		.col-1{
			width:160px;
			float:left;
			}
			.col-1 div{
				margin-bottom:2px;}
	
</style>
<link href="css/literallycanvas.css" rel="stylesheet">
<!-- dependency: React.js -->
<script src="js/react-with-addons.js"></script>

<!-- Literally Canvas -->
<script src="js/literallycanvas.js"></script>
</head>

<body onload="init()">
<div id="content-editor">
	<div id="content-tap">
    <strong>Elavation view (Lightower NE)</strong>
    	<!--<div class="bottom">Tap 1</div>
        <div class="bottom">Tap 2</div>
        <div class="bottom">Tap 3</div>-->
    </div>
    
    <!--Inicio Div editor-->
    <div class="left-contet-editor"><!--
     <canvas style="border:1px solid grey;" id="my_canvas" width="300" height="300"></canvas>-->
    	<div class="literally">
    	  <input name="a" type="text" />
    	</div>
        
    </div>
    <!--Fin Div editor-->
    
    <div class="right-contet-editor">
      <div class="leyenda"><strong>LEYENT</strong></div>
      <div class="leyenda"><strong>1</strong>- 24F / XX FPT / ALL SMF A / P CABLE</div>
      <div class="leyenda"><strong>2</strong>- 36F ALL SMF CABLE</div>
      <div class="leyenda"><strong>3</strong>- 72 PORT WALL MOUNT PANEL</div>
      <div class="leyenda"><strong>4</strong>- WALL MOUNT PANEL</div>
      <div class="leyenda"><strong>5</strong>- 24 PORT WALL MOUNT PANEL</div>
      <div class="leyenda"><strong>6</strong>- 24 PORT RACK 1RU PANEL</div>
      <div class="leyenda"><strong>7</strong>- 24 PORT RACK 2RU PANEL</div>
      <div class="leyenda"><strong>8</strong>- 36 PORT WALL MOUNT PANEL</div>
      <div class="leyenda"><strong>9</strong>- 36 PORT RACK 1RU PANEL</div>
      <div class="leyenda"><strong>10</strong>- 36 PORT RACK 2RU PANE</div>
      <div class="leyenda"><strong>11</strong>- INDOOR / OUTDOOR PLENUM CABLE</div>
      <div class="leyenda"><strong>12</strong>- 144 RING CUT BOX</div>
      <div class="leyenda"><strong>13</strong>- EMT CONDUIT</div>
      <div class="leyenda"><strong>14</strong>- SLACK COI</div>
       <div class="leyenda"><strong>15</strong>-  LIGHTOWER CONDUIT</div>
      <div class="leyenda"><strong>16</strong>- PROPOSED CORE</div>
      <div class="leyenda"><strong>17</strong>- 450D ENCLOSURE</div>
      <div class="leyenda"><strong>18</strong>- 50B ENCLOSURE</div>
      <div class="leyenda"><strong>19</strong>- 450A ENCLOSURE</div>
      <div class="leyenda"><strong>20</strong>-  PASSIVE FILTER WALL MOUNT</div>
      <div class="leyenda"><strong>21</strong>-  PASSIVE FILTER RACK MT</div>
      <div class="leyenda"><strong>22</strong>- CABINET</div>
      <div class="leyenda"><strong>23</strong>- 48F ADMS CABLE</div>
      <div class="leyenda"><strong>24</strong>- 72F ADMS CABLE</div>
      <div class="leyenda"><strong>25</strong>- 96F CABLE</div>
      <div class="leyenda"><strong>26</strong>- 144F CABLE</div>
      <div class="leyenda"><strong>27</strong>- 288F CABLE</div>
      <div class="leyenda"><strong>28</strong>-  PULL BOX</div>
       <div class="leyenda"><strong>26</strong>- 144F CABLE</div>
      <div class="leyenda"><strong>27</strong>- 288F CABLE</div>
      <div class="leyenda"><strong>28</strong>-  PULL BOX</div>
      <div class="leyenda"><strong>29</strong>-  LIGHTOWER HH</div>
      <div class="leyenda"><strong>30</strong>-  LIGHTOWER MH</div>
      <div class="leyenda"><strong>31</strong>-  EXISTING CONDUIT</div>
    </div>
    <div class="footer-editor">
    <div class="buttons">
    	<input name="copypaste" type="button" value="Copy / Paste" />
        <input name="google" type="button"  value="Google"/>
        
        
    </div>
   	  <div class="col-1">
        	<div><strong>Equipment</strong></div>
       		<div>A- <input name="a" type="text" /></div>
            <div>B- <input name="b" type="text" /></div>
            <div>C- <input name="c" type="text" /></div>
            <div>D- <input name="d" type="text" /></div>
        </div>
        <div class="col-1">
        	<div><strong>LGX#</strong></div>
       		<div><input name="algx" type="text" /></div>
            <div><input name="blgx" type="text" /></div>
            <div><input name="clgx" type="text" /></div>
            <div><input name="dlgx" type="text" /></div>
        </div>
        <div class="col-1">
        	<div><strong>Floor #</strong></div>
       		<div><input name="algx" type="text" /></div>
            <div><input name="blgx" type="text" /></div>
            <div><input name="clgx" type="text" /></div>
            <div><input name="dlgx" type="text" /></div>
        </div>
        
        <div class="col-1">
        	<div><strong>Building's Contact</strong></div>
       		<div><input name="algx" type="text" /></div>
            <div><input name="blgx" type="text" /></div>
            <div><input name="clgx" type="text" /></div>
            <div><input name="dlgx" type="text" /></div>
        </div>
         <div class="col-1">
        	<div><strong>Client 1's Contact</strong></div>
       		<div><input name="algx" type="text" /></div>
            <div><input name="blgx" type="text" /></div>
            <div><input name="clgx" type="text" /></div>
            <div><input name="dlgx" type="text" /></div>
         </div>
          <div class="col-1">
        	<div><strong>Client 2's Contact</strong></div>
       		<div><input name="algx" type="text" /></div>
            <div><input name="blgx" type="text" /></div>
            <div><input name="clgx" type="text" /></div>
            <div><input name="dlgx" type="text" /></div>
         </div>
         
          <div class="col-1">
        	<div><strong>Building Address</strong></div>
       		<div><input name="algx" type="text" placeholder="street" /></div>
            <div><input name="blgx" type="text" placeholder="city" /></div>
            <div><input name="clgx" type="text" placeholder="state" /></div>
            <div><input name="dlgx" type="text" placeholder="Floor" /></div>
         </div>
        
    </div>
</div>

<script>
	// Look ma, no jQuery!
        LC.init(
		
            document.getElementsByClassName('literally')[0],
            {imageURLPrefix: 'http://localhost/paint/img'}
			
			
        );

        /* or if you just love jQuery,
            $('.literally').literallycanvas({imageURLPrefix: '/static/img'})
            or
            LC.init($('.literally').get(0), {imageURLPrefix: '/static/img'})
        */
 </script>
 


 
 
</body>
</html>