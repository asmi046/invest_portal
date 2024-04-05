@extends('layouts.all')

@php
    extract(get_page_meta(
        "Обратится в инвестиционный коммитет Курской области",
        isset($page)? $page : null
    ));
@endphp

@section('title', $title)
@section('description', $description)
@section('banner', $page_banner)
@section('page_title', $page_title)


@section('main')
    <div class="news-page-section">
        <div class="inner">
            <x-breadcrumbs.main :page="_tr($page->title, isset($page->title_en)?$page->title_en:null)" :parent="$parent"></x-breadcrumbs.main>
            <x-page.content
                :page="$page"
            ></x-page.content>

            <form enctype='multipart/form-data' class="form" action="{{route('obr_invest_send')}}" method="POST">
                @csrf

                <label class="form-elem">
                    <span class="form-elem__caption">
                        {{ __('Имя') }}*
                    </span>
                    <input type="text" name="name" class="form-elem__field" required="required" placeholder="Иванов Иван">
                    @error('name')
                        <span class="form-elem__error-message">{{ $message }}</span>
                    @enderror
                </label>

                <label class="form-elem">
                    <span class="form-elem__caption">
                        {{ __('Телефон') }}*
                    </span>
                    <input type="tel" name="phone" class="form-elem__field" required="required" placeholder="+7 (999) 999 99 99">
                    @error('phone')
                        <span class="form-elem__error-message">{{ $message }}</span>
                    @enderror
                </label>

                <label class="form-elem">
                    <span class="form-elem__caption">
                        E-mail
                    </span>
                    <input type="email" name="email" class="form-elem__field" required="required" placeholder="mail@mail.ru">
                    @error('email')
                        <span class="form-elem__error-message">{{ $message }}</span>
                    @enderror
                </label>

                <label class="form-elem">
                    <span class="form-elem__caption">
                        {{__('Сообщение')}}
                    </span>
                    <textarea class="form-elem__textarea form-elem__textarea-autoheigth" name="message"  placeholder="{{ __('Текст Вашего обращения') }}"></textarea>

                    @error('message')
                        <span class="form-elem__error-message">{{ $message }}</span>
                    @enderror
                </label>

                {{-- <label class="form-elem">
                    <span class="form-elem__caption">
                        {{__('Прикрепите файл')}}
                    </span>
                    <input type="file" name="attachment" class="form-elem__field">

                    @error('attachment')
                        <span class="form-elem__error-message">{{ $message }}</span>
                    @enderror
                </label> --}}
                <div class="form-elem">
                    <span class="form-elem__caption">Прикрепите файл</span>
                    <div class="file-uploader-element fue-add-file">
                        <input type="file" name="pasport" class="file-uploader-element__input" multiple="multiple">
                        <div class="file-uploader-element__control-box">
                            <button class="file-uploader-element-btn">
                                <span class="file-uploader-element-btn__upload">Загрузить файл</span>
                                <span class="file-uploader-element-btn__add">Добавить еще</span>
                            </button>
                        </div>
                        <div class="file-uploader-element__preview-box">
                        </div>
                    </div>
                    <span class="form-elem__error-message"></span>
                </div>

                <button type="submit" class="btn">{{ __('Отправить') }}</button>

            </form>

        </div>
    </div>
@endsection

