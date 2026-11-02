$(document).ready(function () {
    let images = $('#slidernewhold').find('*'), height = $(images[0]).height(), image = 0;    
    $('#slidernew').css('height', `${height}px`);
    $(window).resize(() => {
        let height = $(images[0]).height();        
        $('#slidernew').css('height', `${height}px`);
    });
    $(images[0]).on('load', function() {
        let height = $(images[0]).height();        
        $('#slidernew').css('height', `${height}px`);              
    });
    setInterval(() => {
        let image_next = image + 1;       
        if (image_next > (images.length - 1)) image_next = 0;      
        $(images[image]).fadeOut(500);
        $(images[image_next]).fadeIn(500, () => {            
            image = image_next;  
        });              
    }, 3000);    
});
