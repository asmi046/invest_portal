<div class="official-person">
    <div class="official-person__info">
        <span class="official-person__name">{{_tr($item->person,$item->person_en) }}</span>
        <span class="official-person__position">{{_tr($item->dolg, $item->dolg_en) }}</span>
        <span class="official-person__tel"><a href="tel:+7{{phone_format($item->phone)}}">{{ $item->phone }}</a></span>
        <span class="official-person__email"><a href="mailto:{{$item->email}}">{{$item->email}}</a></span>
    </div>
    <div class="official-person__img-box">
        <img src="{{ Storage::url('contacts/'.$item->img)}}" alt="">
    </div>
</div>
{{-- photo-card --}}
