<div class="one-win-steps-box">
    @foreach ($one_win_reglament as $item)
        <x-one-win.element :item="$item"></x-one-win.element>
    @endforeach
</div>