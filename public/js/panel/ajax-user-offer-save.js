$(function () {
    $('#save').on('click', function () {
        var token = $("[name='_token']").val(),
            data_id = $(this).attr('data-id'),
            method = $("[name='_method']").val(),
            data = {
                _token: token,
                _method: method,
            };
        
        $("[data-id=" + data_id + "]").each(function(index,element){
            var name = $(element).attr('name');
            if(name === undefined) return;
            data[name] = $(element).val() ? $(element).val() : $(element).text();
        });

        $.ajax({
            'url': '/offer/leads/' + data_id + '/update',
            'type': "POST",
            'data':data,
            success: function () {
               alert("Успещно сохранено");
            },
            error: function (data) {
                alert("Ошибка");
            }
        });
    });
});