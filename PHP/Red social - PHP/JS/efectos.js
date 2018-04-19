$(document).ready(function() { 
    $('.Photos div').hover(function (){
            $(this)
            .find('img.img__color')
            .stop()
            .animate({ 'opacity': '0'}, 800);
        },
        function (){
            $(this)
            .find('img.img__color')
            .stop()
            .animate({ 'opacity': '1'}, 800);
        });
});