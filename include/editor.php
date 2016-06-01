<script src="http://code.createjs.com/easeljs-0.5.0.min.js"></script> 

	<script src="libs/export_canvas/base64.js" type="text/javascript"></script>
	<script src="libs/export_canvas/canvas2image.js" type="text/javascript"></script>
       
    <!--EDITOR DE IMAGENES CODE HTML-->

    <!-- stylesheet -->
    <link href="css/literallycanvas.css" rel="stylesheet">

    <!-- dependency: React.js -->
    <script src="js/react-with-addons.js"></script>

    <!-- Literally Canvas -->
    <script src="js/literallycanvas.js"></script>

    <!-- where the widget goes. you can do CSS to it. -->
    <div class="literally"></div>

    <!-- kick it off -->
    <script>
		console.log("sdfsfsd");
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
		
		/*$.get("include/select_temp.php", function (data) {
                   		 $(".temp").append(data);
                		});*/
    </script>

            <!--FIN EDITOR DE IMAGENES CODE HTML-->
            