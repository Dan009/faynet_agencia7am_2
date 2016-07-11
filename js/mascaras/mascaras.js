
$(document).ready(function(){
	//// CPE CONTENT BUILDING MASKS


		/**$("#txtFirstAMTime,#txtFirstPMTime").inputmask({"mask":"h","greedy": true});**/

			//$("#txtFirstAMTime,#txtFirstPMTime").keypress()

			// BUILDING INFO MASKS

				$("#txtSecondAMTime,#txtSecondPMTime").inputmask({"mask":"datetime12","greedy": false});

					$(document).on("click","#txtFirstAMTime,#txtFirstPMTime",function(){

						$("#txtFirstAMTime,#txtFirstPMTime").inputmask({"mask":"datetime12","greedy": true});
						$("#txtSecondAMTime,#txtSecondPMTime").inputmask({"mask":"s","greedy": true});

					});

			//LGX MASKS
				$(document).on("click","#txtOtherRackSize",function(){
					$("#txtOtherRackSize").inputmask({"mask":"99"});

				});

				$(document).on("click","#txtConnectorType1,#txtConnectorType2",function(){
					$("#txtConnectorType1").inputmask({"mask":"aa"});
					$("#txtConnectorType2").inputmask({"mask":"aaa"});

				});

				$(document).on("click","#txtFiberTerminated",function(){
					$("#txtFiberTerminated").inputmask({"mask":"999"});

				});

				$(document).on("click","#txtTotalBulkHeads",function(){
					$("#txtTotalBulkHeads").inputmask({"mask":"9999"});

				});



			

		//$("#txtFirstAMTime,#t").css("background-color","red");


});
