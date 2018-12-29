$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function ajax_csrf() {
    var input_value = $('#input_value').val();
    $.ajax({
        url: "ajax_csrf", //傳送目的地
        type: "POST", //傳送方式
        data: { //傳送資料
            input_value: input_value
        },
        success: function(data) {
            alert(data);
        },
    });
}