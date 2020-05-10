
$(function(){
    $('#file').change(function(){
        $('img').remove();
        var file = $(this).prop('files')[0];
        if(!file.type.match('image.*')){
            file = null;
            bold = null;
            return;
        }
        
        var fileReader = new FileReader();
        fileReader.onloadend = function() {
            $('#img_box').html('<img src="' + fileReader.result + '"/>');
        
        }
        fileReader.readAsDataURL(file);
    });
});


