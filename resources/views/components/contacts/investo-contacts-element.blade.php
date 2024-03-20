<div class="contacts_page_blk">
    <img src="{{ Storage::url('contacts/'.$item->img) }}" alt="{{ _tr($item->title, isset($item->title_en)?$page->item:null) }}">

    <p class="addres">
        {{__('Адрес')}}: {{_tr($item->adres, isset($item->adres_en)?$item->adres_en:null)}}
    </p>

    <p class="phone">
        {{__('Адрес')}}: <a href="tel:+7{{phone_format($item->phone)}}">{{$item->phone}}
        {{ !empty($item->phone_dob)?"доб. ".$item->phone_dob:"" }}
        </a>
    </p>

    <p class="mail">
        {{__('Email')}}: <a href="mailto:{{$item->email}}">{{$item->email}}</a>
    </p>

    <div class="social_nets">
        @isset($item->vk_lnk)
            <a class="vk_lnk" href="{{$item->vk_lnk}}">{{ $item->vk_lnk }}</a>
        @endisset

        @isset($item->tg_lnk)
            <a class="tg_lnk" href="{{$item->tg_lnk}}">{{ $item->tg_lnk }}</a>
        @endisset

        @isset($item->ok_lnk)
            <a class="ok_lnk" href="{{$item->ok_lnk}}">{{ $item->ok_lnk }}</a>
        @endisset

    </div>

</div>
