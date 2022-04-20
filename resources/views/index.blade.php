<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Test</title>
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    @foreach ($userToArticles as $user)
        <br>{{ $user['username'] }}<BR>
        @foreach ($user['articles'] as $article)
            {{ $article }}
        @endforeach
    @endforeach
<hr>
        @foreach ($articlesToUsers as $article)
            <br>{{ $article['articles'] }}<BR>
            @foreach ($article['name'] as $user)
                {{ $user }}
            @endforeach
        @endforeach

    <main class="main-content">

        <div class="my-profile">
            <h2 class="heading">Мой профиль</h2>
            <div class="profile">
                <div class="avatar">
                    <img src="images/image.jpg" alt="Аватар" class="avatar__pic">
                </div>
                <div class="information">
                    <div class="nickname">Nickname</div>
                    <div class="user-name">
                        <span class="name">Имя</span>
                        <span class="surname">Фамилия</span>
                    </div>
                    <a href='tel:+11111111' class="phone">+1 111 11-11-11</a>
                </div>
            </div>
        </div>
        <div class='edit-profile'>
            <h2 class="heading">Редактировать профиль


                </h2>
            <form class='form' id='form' method ='POST' enctype='multipart/form-data'>
                @csrf
                <ul class="form__list">
                    <li class="form__item">
                        <label class='form__label' for="nickname">Никнейм:</label>
                        <input class='form__input' id='nickname' name='nickname' type="text" value="{{ $nickname ?? '' }}" {{ $readonly ?? '' }}>
                    </li>
                    <li class="form__item">
                        <label class='form__label' for="name">Имя:</label>
                        <input class='form__input' id='name' name='firstname' type="text" value="{{ $firstname ?? '' }}" {{ $readonly ?? '' }}>
                    </li>
                    <li class="form__item">
                        <label class='form__label' for="surname">Фамилия:</label>
                        <input class='form__input' id='surname' name='surname' type="text" value="{{ $surname ?? '' }}" {{ $readonly ?? '' }}>
                    </li>
                    <li class="form__item">
                        <label class='form__inline-label' for="avatar">Аватар:</label>
                        <input class='form__inline-input' id='avatar' type="file"
{{--                               value='image/jpeg,image/png'--}}
                                    value="images/{{ $avatar ?? '' }}" {{ $readonly ?? '' }}
                        >
                    </li>
                    <li class="form__item">
                        <label class='form__label' for="phone">Телефон:</label>
                        <input class='form__input' id='phone' name='phone' type="text" value="{{ $phone ?? '' }}" {{ $readonly ?? '' }}>
                    </li>
                    <li class="form__item">
                        <div class="form__title">Пол:</div>
                        <label class='form__inline-label' for="male">Мужской</label>
                        <input class='form__inline-input' name='sex' id='male' type="radio" {{$male ?? ''}} {{ $readonly ?? '' }}>
                        <label class='form__inline-label' for="female">Женский</label>
                        <input class='form__inline-input' name='sex' id='female' type="radio" {{$female ?? ''}} {{ $readonly ?? '' }}>
                    </li>
                    <li class="form__item">
                        <label class='form__inline-label' for="showPhone">Я согласен получать email-рассылку</label>
                        <input class='form__inline-input' id='showPhone' name="showPhone" type="checkbox"  {{$showPhone ?? ''}} {{ $readonly ?? '' }}>
                    </li>
                    <li class="form__item">
                        <button class='form__button' type="submit">Отправить</button>
                    </li>
                </ul>
            </form>
        </div>
    </main>
</div>
</body>
</html>
