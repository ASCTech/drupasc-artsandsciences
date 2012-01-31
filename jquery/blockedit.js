$(document).ready(function(){
   // Your code here
	$(".block-tabs-wrapper").hide();
	$(".block.block-block").mouseover(function() {
	$(this).find(".block-tabs-wrapper" ).show();
		});
	$(".block.block-block").mouseout(function() {
	$(this).find(".block-tabs-wrapper" ).hide();
	});
//	$(".block-tabs-wrapper").mouseout(function() {
//	$(this).hide();
//	});


 });
 function showeditblocktab(blockid) {
  	//			$("#tabblock-2").show();
  			}
