'use strict'
import ViTab from './TabClass.js';
import './lightgallery.min.js';


document.addEventListener('DOMContentLoaded', ()=>{

    function slideDown(el){
        el.style.height = 'auto';
        let elHeight = el.offsetHeight;
        el.style.height = '0px';
        setTimeout(function(){
            el.style.height = elHeight + 'px';
        }, 50);
        let interval = setInterval(function(){
            if(el.offsetHeight == elHeight){
               clearInterval(interval);
               el.style.height = 'auto';
               el.style.overflow = 'visible';
            }
        }, 300);
    }
    function slideUp(el){
        el.style.height = el.offsetHeight + 'px';
        el.style.overflow = 'hidden';
        setTimeout(function(){
            el.style.height = '0px';
        }, 100);
        let interval = setInterval(function(){
            if(el.offsetHeight == 0){
                clearInterval(interval);
                el.removeAttribute('style');
            }
        }, 300);
    };
    function toggleSlider(el){
        if(el.offsetHeight > 0){
            slideUp(el);
        }else{
            slideDown(el);
        }
    }

    // скрытие и появление поля поиска
    let loupeBtn = document.querySelector('.loupe-btn');
    let globalSearchForm = document.querySelector('.global-search-form');
    if(loupeBtn){
        loupeBtn.addEventListener('click', function(){
            this.classList.toggle('active');
            globalSearchForm.classList.toggle('show');
        });
    }

    // мобильное меню
    let burgerBtn = document.querySelector('.boorger-btn');
    let closeMenuBtn = document.querySelector('.close-menu-btn');
    let nav = document.querySelector('.main-menu-container');

    // функция открытия меню
    function showMenu(){
        nav.classList.add('show-menu');
        document.body.style.position = 'fixed';
    }
    // функция скрытия меню
    function hideMenu(){
        nav.classList.remove('show-menu');
        document.body.removeAttribute('style');
        let nlSubmenu = document.querySelectorAll('.main-menu__parent-item ul');
        let nlBtnShoeSubmenu = document.querySelectorAll('.btn-show-submenu');
        if(nlSubmenu.length > 0){
            nlSubmenu.forEach(item=>{
                item.removeAttribute('style');
            });
        }
        if(nlBtnShoeSubmenu.length > 0){
            nlBtnShoeSubmenu.forEach(btn=>{
                btn.classList.remove('btn-show-submenu--active');
            });
        }
    }
    if(burgerBtn){
        burgerBtn.addEventListener('click', function(){
            showMenu();
        });
    }

    if(closeMenuBtn){
        closeMenuBtn.addEventListener('click', function(){
            hideMenu();
        });
    }

    window.addEventListener('resize', function(e){
        console.log('window.innerWidth ' + window.innerWidth);
    });

    // открытие и сокрытие подменю в мобильной версии
    let nlBtnShoeSubmenu = document.querySelectorAll('.btn-show-submenu');
    if(nlBtnShoeSubmenu.length > 0){
        nlBtnShoeSubmenu.forEach(btn=>{
            btn.addEventListener('click', function(e){
                if(!window.innerWidth <= 1150){
                    this.classList.toggle('btn-show-submenu--active')
                    toggleSlider(this.parentElement.nextElementSibling)
                }
            })
        });
    }

    // Работа табов
    let nlTabs = document.querySelectorAll('.ip-tab');
    if(nlTabs.length > 0){
        nlTabs.forEach(tab=>{
            new ViTab(tab);
        });
    }


    document.addEventListener('click', (e)=>{
        // убираю поле поиска
        if(!(e.target.classList.contains('loupe-btn') || e.target.closest('.loupe-btn') || e.target.classList.contains('global-search-form') || e.target.closest('.global-search-form'))){
            loupeBtn.classList.remove('active');
            globalSearchForm.classList.remove('show');
        }

    });


     // подключаю lightGallery - плагин для просмотра изображений
    let LightGalleryList = document.querySelectorAll('.lg-gallery');
    if(LightGalleryList.length > 0){
        LightGalleryList.forEach(gallery => {
            lightGallery(gallery);
        });
    }

    let spoilerBtn = document.querySelectorAll('.spoiler__btn ');

    if(spoilerBtn.length > 0){
        spoilerBtn.forEach(btn=>{
            btn.addEventListener('click', function(e){
                e.preventDefault();
                e.target.parentElement.classList.toggle('active');
                toggleSlider(e.target.nextElementSibling);
            })
        });
    }


});

