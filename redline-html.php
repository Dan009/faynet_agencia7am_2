<div class="literally<?php echo $_POST['suma_tap']; ?>"></div>
<script>

	// Look ma, no jQuery!
        LC.init(
		
            document.getElementsByClassName('literally<?php echo $_POST['suma_tap']; ?>')[0],
            {imageURLPrefix: 'http://localhost/paint/img'}
			
			
        );

        /* or if you just love jQuery,
            $('.literally').literallycanvas({imageURLPrefix: '/static/img'})
            or
            LC.init($('.literally').get(0), {imageURLPrefix: '/static/img'})
        */
		
 </script>