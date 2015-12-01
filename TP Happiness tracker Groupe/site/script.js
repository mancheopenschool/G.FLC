$(document).ready(function(){

	$( "#tabs" ).tabs();
   $.datepicker.setDefaults( $.datepicker.regional[ "fr" ] );
   $( "#datepicker" ).datepicker({
      altField: "#alternate",
      altFormat: "DD d MM yy"
   });

   $( "#slider1" ).slider({
      range: "min",
      min: 0,
      max: 5,
      value: 0,
      slide: function( event, ui ) {
        $( "#amount1" ).val( ui.value );
      }
    });
    $( "#amount1" ).val( $( "#slider1" ).slider( "value" ) );

   $( "#slider2" ).slider({
      range: "min",
      min: 0,
      max: 5,
      value: 0,
      slide: function( event, ui ) {
        $( "#amount2" ).val( ui.value );
      }
    });
    $( "#amount2" ).val( $( "#slider2" ).slider( "value" ) );

   $( "#slider3" ).slider({
      range: "min",
      min: 0,
      max: 5,
      value: 0,
      slide: function( event, ui ) {
        $( "#amount3" ).val( ui.value );
      }
    });
    $( "#amount3" ).val( $( "#slider3" ).slider( "value" ) );


  /*affichage du graph en tab2 ("Stats")*/

  $("#tabs").ready(function() {
    lineChart();

    $(window).resize(function() {
        window.m.redraw();
    });
    $( "#tabs" ).on( "tabsactivate", function(){
        window.m.redraw();
    });
  });

  function lineChart() {

    window.m = Morris.Line({
      element: 'chart',
      
      data: [
        { y: 'Lundi', a: 5, b: 2, c: 3 },
        { y: 'Mardi', a: 4,  b: 3, c: 4 },
        { y: 'Mercredi', a: 2,  b: 4, c: 5 },
        { y: 'Jeudi', a: 3,  b: 5, c: 4 },
        { y: 'Vendredi', a: 5,  b: 2, c: 3, },
        { y: 'Samedi', a: 3,  b: 4, c: 5 },
        { y: 'Dimanche', a: 4, b: 1, c: 3 }
      ],

      ymax: '5',
      ymin: '1',
      xkey: 'y',
      ykeys: ['a', 'b', 'c'],
      labels: ['Happiness in code', 'Growth in code', 'Happiness in life'],
      parseTime: false,
      lineColors: ['#337AB7','#D9534F','#002D56' ],
      xLabelAngle: 60,
      resize: 'true',
      redraw: 'true',
    });
  }
});




