<h2>Входящее сообщение!</h2> <br>

У Вас новое обращение через форму обратной связи (из popUp)!<br><br>

@if(isset($payload))
Сообщение отправлено со страницы: {{ $payload }}<br>
@else
Сообщение отправлено с главной страницы <br>
@endif

Детали сообщения: <br>

Имя: {{ $name }} <br>
Телефон: {{ $phone }} <br>
Email: {{ $email }} <br>
@if(isset($service))
Услуга: {{ $service }} <br>
@endif