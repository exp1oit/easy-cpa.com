$(function () {
    $('.delete-ajax-form-lead').on('click', function () {
        var token = $("[name='_token']").val(),
            src = $(this).prev().attr('src'),
            li = $(this).parent().parent();

            $.ajax({
                'url': '/lead-image',
                'type': "POST",
                'data': {'src': src, _token: token},
                success: function () {
                    $(li).hide();
                    $('#messages-img-delete').text('Изображение успешно удалено');    
                },
                error: function (data) {
                    $('#messages-img-delete').text('При удалении произошла ошибка');
                }
            });
    });

    $('.delete-ajax-form-offer').on('click', function () {
        var token = $("[name='_token']").val(),
            src = $(this).prev().attr('src'),
            li = $(this).parent().parent();

            $.ajax({
                'url': '/offer-image',
                'type': "POST",
                'data': {'src': src, _token: token},
                success: function () {
                    $(li).hide();
                    $('#messages-img-delete').text('Изображение успешно удалено');  
                },
                error: function (data) {
                    $('#messages-img-delete').text('При удалении произошла ошибка');
                }
            });
    });
});