$(document).ready(function(){
    setInterval(function(){
        $.ajax({
            url:site_url+'secretaria/tedio/consultas',
            success:function(resp){
                let hex = resp;
    
                $('body').css('background-color', hex);
                $('body').css('transition', '1s');
            }
        });
    }, 3000);
});