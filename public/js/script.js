(function($, undefined){
$(document).ready( function(){

	$('.datepicker').datepicker({
		format: "mm/dd/yyyy",
		todayBtn: true,
		todayHighlight: true,
		forceParse: true
	});
});

$(window).load( function(){
	if( $('#cd4-level-graph').length > 0 ){
		Morris.Line({
		  element: 'cd4-level-graph',
		  data: [
		    { y: '2006', a: 100},
		    { y: '2007', a: 75},
		    { y: '2008', a: 50},
		    { y: '2009', a: 75},
		    { y: '2010', a: 50},
		    { y: '2011', a: 75},
		    { y: '2012', a: 100}
		  ],
		  xkey: 'y',
		  ykeys: ['a'],
		  labels: ['Series A']
		});
	}
});
}(window.jQuery))