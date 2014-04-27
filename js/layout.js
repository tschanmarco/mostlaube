$(document).ready(function(){
	var textHeight = $("#text").height();
	if(textHeight > 480) {
		var topmargin = textHeight + 100;
		$("#footer").css("top", topmargin);
	}
 });
