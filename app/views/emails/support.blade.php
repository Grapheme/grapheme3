<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<div>
    <p>
        Заявка от пользователя {{ @$name }}
        <br>Телефон: {{ @$phone }}
        <br>Email: {{ @$email }}
        <br>Сайт: {{ @$site }}
        <br>Узнал: {{ @$howyouknow }}
    </p>
    @if(isset($service))
    <p>
        Набор услуг:
        <ul>
        @foreach($service as $value)
            <li>{{ $value }}</li>
        @endforeach
        </ul>
    @endif
    <p>Сообщение:</p>
    <p>{{{ @$mail_message  }}}:</p>
</div>
</body>
</html>