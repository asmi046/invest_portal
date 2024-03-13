'use strict'
import ViTab from './TabClass.js';
import './lightgallery.min.js';
// import Swiper JS
import Swiper from 'swiper/bundle';
// import styles bundle
import 'swiper/css/bundle';

import Simplebar from 'simplebar'; // or "import SimpleBar from 'simplebar';" if you want to use it manually.
// import 'simplebar/dist/simplebar.css';

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
    let sideMenu = document.querySelector('.side-menu-container');
    let greatShadow = document.querySelector('.great-shadow');
    // функция открытия меню
    function showMenu(){
        sideMenu.classList.add('show-menu');
        // document.body.style.position = 'fixed';
        // document.body.style.width = '100%';
        greatShadow.classList.add('show');
    }
    // функция скрытия меню
    function hideMenu(){
        sideMenu.classList.remove('show-menu');
        document.body.removeAttribute('style');
        let nlSubmenu = document.querySelectorAll('.main-menu__parent-item ul');
        let nlBtnShoeSubmenu = document.querySelectorAll('.btn-show-submenu');
        greatShadow.classList.remove('show');
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
    if(greatShadow){
        greatShadow.addEventListener('click', function(){
            hideMenu();
        });
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

    // window.addEventListener('resize', function(e){
    //     console.log('window.innerWidth ' + window.innerWidth);
    // });

    // открытие и сокрытие подменю в мобильной версии
    let nlBtnShoeSubmenu = document.querySelectorAll('.btn-show-submenu');
    if(nlBtnShoeSubmenu.length > 0){
        nlBtnShoeSubmenu.forEach(btn=>{
            btn.addEventListener('click', function(e){
                this.classList.toggle('btn-show-submenu--active')
                toggleSlider(this.parentElement.nextElementSibling);
                this.parentElement.nextElementSibling.classList.toggle('show');
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

    let sversion = document.querySelector('.header-control-btn--poor-eyesight');
    let regularVersion = document.querySelector('.regular-version');
    sversion.addEventListener('click', function(){
        document.body.classList.toggle('common-viz')
    })
    regularVersion.addEventListener('click', function(){
        document.body.classList.toggle('common-viz')
    });


    // подключаю слайдеры


      // подключение слайдеров
      let headerSl = document.querySelector('.header-sl');
    const headerSlider = new Swiper(headerSl, {
        // Optional parameters
        loop: true,
        spaceBetween: 0,
        effect: "fade",
        navigation: {
            nextEl: ".header-sl-box .swiper-button-next",
            prevEl: ".header-sl-box .swiper-button-prev",
          },

    });

    // useful-resources-sl-box
    let userFulSlider = document.querySelector('.useful-resources-sl');
    if(userFulSlider){
        const userFulSl = new Swiper(userFulSlider, {
            // Optional parameters
            slidesPerView: 1,
            loop: true,
            speed: 1000,
            loopAdditionalSlides: 1,
            slidesPerGroup: 1,
            watchOverflow: false,
            spaceBetween: 10,
            navigation: {
                nextEl: ".useful-resources-sl-box .swiper-button-next",
                prevEl: ".useful-resources-sl-box .swiper-button-prev",
              },
            pagination: {
                el: ".useful-resources-sl-box .swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                500: {
                    spaceBetween: 10,
                    slidesPerView: 2,
                },
                850: {
                    spaceBetween: 20,
                    slidesPerView: 3,
                },
                999: {
                    spaceBetween: 20,
                    slidesPerView: 4,
                },
                1200: {
                    spaceBetween: 30,
                    slidesPerView: 4,
                }
            }

        });
    }



    Array.prototype.forEach.call(
        document.querySelectorAll('.simplebar'),
        (el) => new Simplebar(el)
      );

    let investMap = document.querySelector('.invest-map-link__map');
    let govementSupportImg = document.querySelector('.government-support-section__img');

    function investMapAutoWidthRight(elem){
        if(!elem) return;
        let bodyRect = document.body.getBoundingClientRect();
        let elemMapRect = elem.getBoundingClientRect();
        elem.style.width = Math.ceil(bodyRect.width - elemMapRect.x) + 'px';
    }
    function investMapAutoWidthLeft(elem){
        if(!investMap) return;
        let bodyRect = document.body.getBoundingClientRect();
        let investMapRect = elem.getBoundingClientRect();
        elem.style.width = Math.ceil(bodyRect.width / 2) + 'px';
    }

    investMapAutoWidthRight(investMap);

    investMapAutoWidthLeft(govementSupportImg);

    window.addEventListener('resize', function(){
        investMapAutoWidthRight(investMap);
        investMapAutoWidthLeft(govementSupportImg);
    });

         // работа видеоконтейнера

         let nlPlayBtn = document.querySelectorAll('.video-box__video-play');
         if(nlPlayBtn.length > 0){
             nlPlayBtn.forEach(btn=>{
                 btn.addEventListener('click', function(e){
                     e.preventDefault();
                     let video = this.previousElementSibling;
                     video.setAttribute('controls', 'controls')
                     video.play();
                     this.remove();
                 })
             })
         }


});

