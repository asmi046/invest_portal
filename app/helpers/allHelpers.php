<?php

use Illuminate\Support\Facades\App;



if (!function_exists("_get_page_meta")) {
    function get_page_meta($default, $page){

        if (isset($page)) {
            $page_title = _tr($page->title, isset($page->title_en)?$page->title_en:null);
            $page_banner = $page->banner;
            $title = (empty($page->seo_title))?$page->title:$page->seo_title;
            $description = (empty($page->seo_description))?$page->title:$page->seo_description;
        } else {
            $page_title = $default;
            $page_banner = "";
            $title = $default;
            $description = $default;
        }

        return [
            'page_title' => $page_title,
            'title' => $title,
            'page_banner' => $page_banner,
            'description' => $description,
        ];
    }
}

if (!function_exists("_tr")) {
    function _tr($rus, $eng){
        $rez = $rus;
        if (App::isLocale('en') && !empty($eng)) {
            $rez = $eng;
        }
        return $rez;
    }
}




// Дата с меяцем по русски
if (!function_exists("data_ru")) {
    function data_ru($data) {
        $t_data = strtotime($data);
        $arr = [
            'январь',
            'февраль',
            'март',
            'апрель',
            'май',
            'июнь',
            'июль',
            'август',
            'сентябрь',
            'октябрь',
            'ноябрь',
            'декабрь'
          ];

          return date('d', $t_data).' '.$arr[date('n')-1].' '.date('Y', $t_data);
    }
}

// Форматирование номера телефона

if (!function_exists("phone_format")) {
    function phone_format($phone)
    {
        $phone = trim($phone);

        $res = preg_replace(
            array(
                '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{3})[-|\s]?\)[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
                '/[\+]?([7|8])[-|\s]?(\d{3})[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
                '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{4})[-|\s]?\)[-|\s]?(\d{2})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
                '/[\+]?([7|8])[-|\s]?(\d{4})[-|\s]?(\d{2})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
                '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{4})[-|\s]?\)[-|\s]?(\d{3})[-|\s]?(\d{3})/',
                '/[\+]?([7|8])[-|\s]?(\d{4})[-|\s]?(\d{3})[-|\s]?(\d{3})/',
            ),
            array(
                '$2$3$4$5',
                '$2$3$4$5',
                '$2$3$4$5',
                '$2$3$4$5',
                '$2$3$4',
                '$2$3$4',
            ),
            $phone
        );

        return $res;
    }
}
