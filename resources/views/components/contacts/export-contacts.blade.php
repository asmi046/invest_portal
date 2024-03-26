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

</div>
