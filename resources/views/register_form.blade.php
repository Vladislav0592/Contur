@extends("layouts.app")

@section('title')
    Форма контактов
@endsection

@section('content')
    <div class="border">
        <div class="div-register-form">
            <form id="form">
                @include('inc.messages')
                <fieldset>
                    <p class="text">Ваши контактные данные</p>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Введите имя</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Введите имя"
                               minlength="3" maxlength="20" required>
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Введите email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Введите email"
                               minlength="5" maxlength="20" required>
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Введите телефон</label>
                        <input type="number" id="phone" name="phone" class="form-control" placeholder="Введите телефон"
                               minlength="6" maxlength="20" required>
                    </div>
                    <div id="div">
                    <button type="submit" class="btn btn-primary" id="send">Отправить</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
