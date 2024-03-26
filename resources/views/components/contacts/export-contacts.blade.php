<h2>{{__('Информационные ресурсы поддержки экспортеров')}}</h2>
<div class="irtse-item-box">
    @foreach ($export_contacts as $item)
        <div class="irtse-item">
            @if ($item->img)
                <img src="{{ Storage::url('contacts/'.$item->img) }}" alt="{{ $item->title }}" class="irtse-item__img">
            @else
                <img src="{{asset('img/nophoto.jpg')}}" alt="{{ $item->title }}">
            @endif

            <ul>
                @if ($item->organ)
                    <li>{{_tr($item->organ,$item->organ_en)}}</li>
                @endif

                @if ($item->adres)
                    <li>{{_tr($item->adres, $item->adres_en)}}</li>
                @endif

                @if ($item->phone)
                    <li><a href="tel:+7{{phone_format($item->phone)}}">{{ $item->phone }}</a></li>
                @endif

                @if ($item->email)
                    <li><a href="mailto:{{ $item->email }}">{{ $item->email }}</a></li>
                @endif

            </ul>
        </div>

    @endforeach

    {{-- <div class="irtse-item">
        <img src="{{asset('img/tmp/irtse-item-2.webp')}}" alt="" class="irtse-item__img">
        <ul>
            <li>305000, г. Курск, ул. Горького, д. 34</li>
            <li>+7 (4712) 70-33-77,  8 -800-201-33-77</li>
            <li>info@cpp46.ru, cpp46@mail.ru</li>
        </ul>
    </div>
    <div class="irtse-item">
        <img src="{{asset('img/tmp/irtse-item-3.webp')}}" alt="" class="irtse-item__img">
        <ul>
            <li>Для просмотра аналитического портала «Экспорт регионов России», необходима регистрация на сайте АО «РЭЦ»</li>
            <li><a href="www.exportcenter.ru">www.exportcenter.ru</a></li>
        </ul>
    </div>
    <div class="irtse-item">
        <img src="{{asset('img/tmp/irtse-item-4.webp')}}" alt="" class="irtse-item__img">

        <ul>
            <li><b>«Мой экспорт»</b>  – онлайн доступ к государственным и бизнес сервисам, сопровождающим выход компаний на экспорт, в режиме «Одно окно»</li>
        </ul>
    </div> --}}
</div>
