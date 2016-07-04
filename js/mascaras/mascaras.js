
$(document).ready(function(){
	//// CPE CONTENT BUILDING MASKS


		/**$("#txtFirstAMTime,#txtFirstPMTime").inputmask({"mask":"h","greedy": true});**/

			$("#txtFirstAMTime,#txtFirstPMTime").keypress()

			$("#txtSecondAMTime,#txtSecondPMTime").inputmask({"mask":"datetime12","greedy": false});

			$(document).on("click","#txtFirstAMTime,#txtFirstPMTime",function(){

				$("#txtFirstAMTime,#txtFirstPMTime").inputmask({"mask":"datetime12","greedy": true});
				$("#txtSecondAMTime,#txtSecondPMTime").inputmask({"mask":"s","greedy": true});

			});


		//$("#txtFirstAMTime,#t").css("background-color","red");


});
