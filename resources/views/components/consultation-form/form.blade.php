<section class="help_form_section">
    <div class="container">
        <h2>{{__('Прямое обращение от инвестора')}}</h2>
        <form method="POST" action="{{ route('send_consultation') }}" class="box form"  action="">
            @csrf
            <label class="form-elem">
                <span class="form-elem__caption">
                    {{ __('Имя') }}*
                </span>
                <input type="text" name="name" class="form-elem__field" required="required" placeholder="{{ __('Введите имя') }}">
                @error('name')
                    <span class="form-elem__error-message">{{ $message }}</span>
                @enderror
            </label>

            <label class="form-elem">
                <span class="form-elem__caption">
                    {{ __('Телефон') }}*
                </span>
                <input type="text" name="phone" class="form-elem__field" required="required" placeholder="{{ __('Введите телефон') }}">
                @error('phone')
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

            <button type="submit" class="btn">{{ __('Отправить') }}</button>
        </form>
    </div>
</section>
