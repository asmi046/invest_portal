<div class="contact_photo_card">
    <div class="photo_wrapper">
        <img src="{{ Storage::url('contacts/'.$item->img)}}" alt="">
    </div>
    <div class="info">
        <h3>{{_tr($item->person,$item->person_en) }}</h3>
        <p class="dolg">{{_tr($item->dolg, $item->dolg_en) }}</p>
        <p class="phone"><a href="tel:+7{{phone_format($item->phone)}}">{{ $item->phone }}</a></p>
        <p class="email"><a href="mailto:{{$item->email}}">{{$item->email}}</a></p>
    </div>
</div>
