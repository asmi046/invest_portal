@extends('layouts.all')

@php
    $title = "Заголовок";
    $description = "Дескрипшен";
    $pageTitle = "Презентация региона"

@endphp

@section('title', $title)
@section('description', $description)



@section('main')
    <x-header-inner  :title="$pageTitle"></x-header-inner>
    <div class="usual-section">
        <div class="inner">
            <div class="gallery gallery--three lg-gallery mb3">
                <div class="gallery-item" data-src="{{asset('img/kursk-photo/kursk-1.webp')}}">
                    <img src="{{asset('img/kursk-photo/kursk-1.webp')}}" alt="">
                </div>
                <div class="gallery-item" data-src="{{asset('img/kursk-photo/kursk-2.webp')}}">
                    <img src="{{asset('img/kursk-photo/kursk-2.webp')}}" alt="">
                </div>
                <div class="gallery-item" data-src="{{asset('img/kursk-photo/kursk-3.webp')}}">
                    <img src="{{asset('img/kursk-photo/kursk-3.webp')}}" alt="">
                </div>
                <div class="gallery-item" data-src="{{asset('img/kursk-photo/kursk-4.webp')}}">
                    <img src="{{asset('img/kursk-photo/kursk-4.webp')}}" alt="">
                </div>
                <div class="gallery-item" data-src="{{asset('img/kursk-photo/kursk-5.webp')}}">
                    <img src="{{asset('img/kursk-photo/kursk-5.webp')}}" alt="">
                </div>
                <div class="gallery-item" data-src="{{asset('img/kursk-photo/kursk-6.webp')}}">
                    <img src="{{asset('img/kursk-photo/kursk-6.webp')}}" alt="">
                </div>
            </div>
            <p>
                Курская область — субъект Российской Федерации, входит в состав Центрального федерального округа. Административный центр — Курск.
            </p>
            <p>
                Курская область граничит:
            </p>
            <ul>
                <li>на северо-западе с Брянской,</li>
                <li>на севере — с Орловской,</li>
                <li>на северо-востоке — с Липецкой,</li>
                <li>на востоке — с Воронежской,</li>
                <li>на юге — с Белгородской областями;</li>
                <li>с юго-западной и западной стороны к ней примыкает Сумская область Украины.</li>
            </ul>
            <p>
                Курская область расположена в центре Европейской части России, на юго-западных склонах Среднерусской возвышенности, входит в состав Центрального федерального округа. Площадь территории — 30,0 тыс. км2.
            </p>
            <p>
                Численность постоянного населения региона на 1 января 2022 года составляла 1104,008 тыс. человек, средний возраст которого — 42,1 года — соответствует характеристикам наиболее трудоспособного состояния. Плотность населения — 36,9 человека на км2.
            </p>
            <p>
                Административно-территориальная структура области включает: 28 муниципальных районов, 288 сельских поселений, 5 городских округов, 27 городских поселений. Доля городского населения составляет 68,2%, сельского — 31,8%. Административным центром области является город Курск с численностью населения 449,56 тыс. человек. К наиболее крупным городам относятся Железногорск (100,5 тыс. человек), Курчатов (38,2 тыс. человек), Льгов (18,4 тыс. человек), Щигры (15,1 тыс. человек), Рыльск (16,2 тыс. человек).
            </p>
        </div>
    </div>
@endsection
