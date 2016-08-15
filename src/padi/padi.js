/*
padijs by "puji w prayitno"
*/
var thisdomain = "http://salesapp/";
$.fn.stairUp = function(options){
	var settings = $.extend({
		level:1
	},options);
	out = $(this);
	for(var c=0;c<settings.level;c++){
		out = out.parent();
	}
	return out;
}
