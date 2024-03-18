<div class="side-menu-container simplebar">
    <button class="close-menu-btn close-cross"></button>
    <ul class="side-menu">
        @foreach ($all_menu['Общее меню'] as $item)

            <li class="main-menu__parent-item">
                <div class="main-menu__first-level">
                    <a href="{{ $item['item']['lnk'] }}">{{ _tr($item['item']['title'], $item['item']['title_en']) }}</a>
                    <button class="btn-show-submenu"></button>
                </div>
                @if (!empty($item['submeny']))
                    <ul>
                        @foreach ($item['submeny'] as $sub_item)
                            <li>
                                <a href="{{ $sub_item->lnk }}">{{ _tr($sub_item->title, $sub_item->title_en) }}</a>
                            </li>
                        @endforeach

                    </ul>
                @endif

            </li>

        @endforeach
    </ul>
</div>
