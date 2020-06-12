$(document).ready(function(){
$('#glide__bullet1').addClass('button-color');
    
    $('#glidedots').on('click', '.glide__bullet0', function() {
        $('.button-color').removeClass('button-color');
        $(this).addClass('button-color');
        
    });
    
});