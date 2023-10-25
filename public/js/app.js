$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#send').on('click', function (event) {
    event.preventDefault();
    const name = $('#name').val();
    const email = $('#email').val();
    const phone = $('#phone').val();
    $(".wrong").remove();
    $(".success").remove();

    if (name.length <= 1) {
        $('#name').after('<span class="wrong">Поле "Имя" должно включать не менее двух символов</span>');
    }

    if (email.length <= 5) {
        $('#email').after('<span class="wrong">Поле "Email" должно включать не менее пяти символов</span>');
    }

    if (phone.length <= 5) {
        $('#phone').after('<span class="wrong">Поле "Телефон" должно включать не менее шести символов</span>');
    } else {
        sendForm()
    }
});

function sendForm() {
    let name = $('#name').val();
    let email = $('#email').val();
    let phone = $('#phone').val();
    $.ajax({
        url: "/submit",
        type: "POST",
        data: {
            name: name,
            email: email,
            phone: phone
        },
        success: function () {
            name = $('#name').val('');
            email = $('#email').val('');
            phone = $('#phone').val('');
            phone.after('<span class="success">Сообщение отправлено!</span>');
        },
    });
}

