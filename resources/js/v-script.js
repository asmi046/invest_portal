'use strict'
import ViTab from './TabClass.js';
import './lightgallery.min.js';
import FileUploader from './File-uploader.js';
// import Swiper JS
import Swiper from 'swiper/bundle';
// import styles bundle
import 'swiper/css/bundle';

import Simplebar from 'simplebar'; // or "import SimpleBar from 'simplebar';" if you want to use it manually.
// import 'simplebar/dist/simplebar.css';

import PoorEyesight from './PoorEyesight.js';

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
    let LightGalleryList = document.querySelectorAll('.lg-gallery, [data-src]');
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



    // подключаю слайдеры


      // подключение слайдеров
      let headerSl = document.querySelector('.header-sl');
    const headerSlider = new Swiper(headerSl, {
        // Optional parameters
        loop: true,
        spaceBetween: 0,
        // effect: "fade",
        // autoplay: {
        //     delay: 5000,
        // },
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

    if(govementSupportImg){
        investMapAutoWidthLeft(govementSupportImg);

        window.addEventListener('resize', function(){
            investMapAutoWidthRight(investMap);
            investMapAutoWidthLeft(govementSupportImg);
        });
    }


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

        // автовысота textarea
        var nlTextarea = document.querySelectorAll('.form-elem__textarea-autoheigth');
        if(nlTextarea.length > 0){
            nlTextarea.forEach(tx=>{
                tx.setAttribute('style', 'height:'+ (tx.scrollHeight) +'px;overflow-y:hidden;');
                tx.addEventListener("input", OnInput, false);
            });
        }

        function OnInput() {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        }

        let fueAddFile = document.querySelector('.fue-add-file');

        if(fueAddFile){
            document.fueAddFile = new FileUploader(
                fueAddFile,
                {
                    accept: ['.pdf', '.jpg', '.png', '.doc', '.docx'], //допустимые файлы
                    maxSize: 5242880, //5 МБ - максисальный размер файла
                    maxLongNameFile: 7, //максисальная длинна имени файла, если больше, то при выводе данных файла на страницу, название будет обрезаться тремя точками.
                    maxSizeErrorMessage: 'Максимальный размер загружаемого файла 15МБ',
                    acceptErrorMessage: 'Недопустимое расширение файла'
                }
            );
        }
        // document.fueAddFile.getFileBank() - выдает массив с подгруженными файлами


        // --------------------------------------------
        // версия для слабовидящих
        
    let sversion = document.querySelector('.header-control-btn--poor-eyesight');
    let regularVersion = document.querySelector('.regular-version');
    sversion.addEventListener('click', function(){
        document.body.classList.toggle('common-viz')
    })
    regularVersion.addEventListener('click', function(){
        document.body.classList.toggle('common-viz')
    });

     // ------Версия для слабовидящих------
     let peObj = new PoorEyesight;
     let $poorEyesinghtBtn = document.querySelector('.header-control-btn--poor-eyesight'); //кнопка запуска версии для слабовидящих
     let $regVersionBtn = document.querySelector('.regular-version'); //кнопка отключения версии для слабовидящих
     let $showSettingsPanel = document.querySelector('.show-setting-panel');
     let $visPanelASP = document.querySelector('.vizpanel-asp');
     let $BtnFSNormal = document.querySelector('.fs_normal');
     let $BtnFSLarge = document.querySelector('.fs_large');
     let $BtnFSVeryLarge = document.querySelector('.fs_very_larg');

     let $btnWhiteTheme = document.querySelectorAll('.white-theme');
     let $btnBlackTheme = document.querySelectorAll('.black-theme');
     let $btnBlueTheme = document.querySelectorAll('.blue-theme');
     let $btnBrownTheme = document.querySelector('.brown-theme');
     let $btnGreenTheme = document.querySelector('.green-theme');

     let $btnOnImg = document.querySelector('.switch-img_on');
     let $btnOffImg = document.querySelector('.switch-img_off');

     let $sansSerifBtn = document.querySelector('.vizpanel-asp-btn--sans-serif'); //кнопка устанавливающая шрифт без засечек
     let $SerifBtn = document.querySelector('.vizpanel-asp-btn--serif'); //кнопка устанавливающая шрифт с засечеками

     let lsNormalBtn = document.querySelector('.vizpanel-asp-btn__ls-normal');
     let lsLargeBtn = document.querySelector('.vizpanel-asp-btn__ls-large');
     let lsVeryLargeBtn = document.querySelector('.vizpanel-asp-btn__ls-very-large');

     let $defaultSettingsBtn = document.querySelector('.vizpanel__default-settings')
     let $closeVizpanelASP = document.querySelector('.close-vizpanel-asp')

     let $btnImgColored = document.querySelector('.switch-img__colored');
     let $btnImgMonohrome = document.querySelector('.switch-img__monochrome');




     $showSettingsPanel.addEventListener('click', function () {
         $visPanelASP.classList.add('vizpanel-asp--show');
     });
     $closeVizpanelASP.addEventListener('click', function () {
         $visPanelASP.classList.remove('vizpanel-asp--show');
     });
     $defaultSettingsBtn.addEventListener('click', () => {
         peObj.setDefaultSettings();
         peObj.setDefaultSettings();
     });

     lsNormalBtn.addEventListener('click', (e) => {
         peObj.setLetterSpacing(0, true);
     });
     lsLargeBtn.addEventListener('click', (e) => {
         peObj.setLetterSpacing(1, true);
     });
     lsVeryLargeBtn.addEventListener('click', (e) => {
         peObj.setLetterSpacing(2, true);
     });

     $btnImgColored.addEventListener('click', () => {
         peObj.makeImageColor(true);
     })
     $btnImgMonohrome.addEventListener('click', () => {
         peObj.makeImageMonochrome(true);
     });

     $sansSerifBtn.addEventListener('click', () => {
         peObj.setSansSerifFont();
     });
     $SerifBtn.addEventListener('click', () => {
         peObj.setSerifFont();
     });

     window.addEventListener('load', () => {
         peObj.loadPage();
     })
     $poorEyesinghtBtn.addEventListener('click', function () {
         peObj.start();
     });
     $regVersionBtn.addEventListener('click', () => {
         peObj.stop();
         //startSliders(); //запускаем слайдеры на странице
     });
     $BtnFSNormal.addEventListener('click', () => {
         peObj.fontSizeNormal();
     })
     $BtnFSLarge.addEventListener('click', () => {
         peObj.fontSizeLarge();
     })
     $BtnFSVeryLarge.addEventListener('click', () => {
         peObj.fontSizeVeryLarge();
     })
     $btnWhiteTheme.forEach(btn => {
         btn.addEventListener('click', () => {
             peObj.themeWhite();
         });
     });
     $btnBlackTheme.forEach(btn => {
         btn.addEventListener('click', () => {
             peObj.themeBlack();
         });
     })
     $btnBlueTheme.forEach(btn => {
         btn.addEventListener('click', () => {
             peObj.themeBlue();
         });
     });
     $btnBrownTheme.addEventListener('click', () => {
         peObj.themeBrown();
     });
     $btnGreenTheme.addEventListener('click', () => {
         peObj.themeGreen();
     });

     $btnOnImg.addEventListener('click', () => {
         peObj.showAllImg()
     });

     $btnOffImg.addEventListener('click', () => {
         peObj.hideAllImg();
     })
     // ------Версия для слабовидящих конец------

});

