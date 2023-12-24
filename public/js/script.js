$(function(){
    $('body').on('click', '.passwordShow', () => {
        if($('[name="password"]').attr('type') === "password"){
            $('[name="password"]').attr('type', 'text'); 
        }else{
            $('[name="password"]').attr('type', 'password');
        }
    });

    $('body').on('click', '.open-modal', function(){
        $.get($(this).data('url'), function(data){
            $('.modal-body').html(data.content);
        });
        $('#modal').toggle('active');
    });

    $('body').on('click', '.close-modal', function(){
        $('#modal').toggle('active');
    }); 
});