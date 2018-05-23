$(document).on('click', '#close-preview', function(){ 
    $('.image2-preview').popover('hide');
    // Hover befor close the preview
    $('.image2-preview').hover(
        function () {
           $('.image2-preview').popover('show');
        }, 
         function () {
           $('.image2-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image2-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image2-preview-clear').click(function(){
        $('.image2-preview').attr("data-content","").popover('hide');
        $('.image2-preview-filename').val("");
        $('.image2-preview-clear').hide();
        $('.image2-preview-input input:file').val("");
        $(".image2-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image2-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image2-preview-input-title").text("Change");
            $(".image2-preview-clear").show();
            $(".image2-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image2-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});