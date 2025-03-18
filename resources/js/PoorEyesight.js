"user strict";
export default class PoorEyesight
{
        /**
     Список классов css с описанием:
     .common-viz - активитует панель управления версией для слабовидящих, скрывает кнопку версии для слабовидящих в header

    */
    body = document.body;

    activityFlag = localStorage.getItem('activityFlag');


    //   значения присваиваемые :root
    styleSettings = {
        fontSize: '',
        fontFamily: '',
        letterSpacing: '',
        primaryColor: '',
        textColor: '',
        altCextColor: '',
        activeColor: '',
        bgColor: '',
        altBgColor: '',
        decorColor: '',
        decorColorDark: '',
        altDecoreDolor: '',
        light: '',
        successColor: '',
        font: '"Lato", sans-serif;',
        greatTransition: 'all 5ms ease;'
    };

    // классы которые присваиваются body
    classSettings = {
        fontClass: '',
        themeClass: '',
        commonVizClass: 'common-viz',
        imgControlClass: '',
        imgImageColorClass: '',
        fontTypeClass: '',
        letterSpacingClass: 'ls-normal',

    }
    //метод сборщик стилей css в строку
    bildStyles(){
        let cssStyles =`
        font-size: ${this.styleSettings.fontSize};
        font-family: ${this.styleSettings.fontFamily};
        letter-spacing: ${this.styleSettings.letterSpacing}; 

        --alert-color: ${this.styleSettings.alertColor};
        --alert-color: ${this.styleSettings.blueColor};
        --blue-color: ${this.styleSettings.lightBlueColor};
        --light-blue-color: ${this.styleSettings.successColor};
        --success-color: ${this.styleSettings.active};
        --active: ${this.styleSettings.activeHover};
        --active-hover: ${this.styleSettings.light};
        --light: ${this.styleSettings.bgColor};
        --bg-color: ${this.styleSettings.bgColor};
        --black: ${this.styleSettings.black};
        --grey-color: ${this.styleSettings.greyColor}; 

        --font: ${this.styleSettings.font}
        --great-transition: ${this.styleSettings.greatTransition}
        `;

console.log(cssStyles)
        return cssStyles;
    }
    //метод сборщик классов css в строку
    bildClasses(){
        let cssClasses = '';
        for(let key in this.classSettings){
            cssClasses += this.classSettings[key]+' ';
        }
        return cssClasses;
    }



    /**Методы цветовых тем */
    themeWhite(){

        this.styleSettings.alertColor = '#000000';
        this.styleSettings.blueColor = '#000000';
        this.styleSettings.lightBlueColor = '#000000';
        this.styleSettings.successColor = '#000000';
        this.styleSettings.active = '#000000';
        this.styleSettings.activeHover = '#000000';
        this.styleSettings.light = '#ffffff';
        this.styleSettings.bgColor = '#ffffff';
        this.styleSettings.black = '#000000';
        this.styleSettings.greyColor = '#ffffff';

        this.classSettings.themeClass = 'theme_white';
        this.setValue();
    }
    themeBlack(){
         
        this.styleSettings.alertColor = '#ffffff';
        this.styleSettings.blueColor = '#ffffff';
        this.styleSettings.lightBlueColor = '#ffffff';
        this.styleSettings.successColor = '#ffffff';
        this.styleSettings.active = '#ffffff';
        this.styleSettings.activeHover = '#ffffff'; 
        this.styleSettings.light = '#000000';
        this.styleSettings.bgColor = '#000000';  
        this.styleSettings.black = '#ffffff';  
        this.styleSettings.greyColor = '#000000'; 
        this.classSettings.themeClass = 'theme_black'; 
        this.setValue();
    }
    themeBlue(){
        this.styleSettings.alertColor = '#063462';
        this.styleSettings.blueColor = '#063462';
        this.styleSettings.lightBlueColor = '#063462';
        this.styleSettings.successColor = '#063462';
        this.styleSettings.active = '#063462';
        this.styleSettings.activeHover = '#063462'; 
        this.styleSettings.light = '#9dd1ff';
        this.styleSettings.bgColor = '#9dd1ff'; 
        this.styleSettings.black = '#063462'; 
        this.styleSettings.greyColor = '#9dd1ff';

        this.classSettings.themeClass = 'theme_blue';
        this.setValue();
    }
    themeBrown(){ 
        this.styleSettings.alertColor = '#4d4b43';
        this.styleSettings.blueColor = '#4d4b43';
        this.styleSettings.lightBlueColor = '#4d4b43';
        this.styleSettings.successColor = '#4d4b43';
        this.styleSettings.active = '#4d4b43';
        this.styleSettings.activeHover = '#4d4b43'; 
        this.styleSettings.light = '#f7f3d6';
        this.styleSettings.bgColor = '#f7f3d6'; 
        this.styleSettings.black = '#4d4b43'; 
        this.styleSettings.greyColor = '#f7f3d6';

        this.classSettings.themeClass = 'theme_brown';
        this.setValue();
    }
    themeGreen(){
        this.styleSettings.alertColor = '#a9e44d;';
        this.styleSettings.blueColor = '#a9e44d;';
        this.styleSettings.lightBlueColor = '#a9e44d';
        this.styleSettings.successColor = '#a9e44d';
        this.styleSettings.active = '#a9e44d';
        this.styleSettings.activeHover = '#a9e44d'; 
        this.styleSettings.light = '#3b2716';
        this.styleSettings.bgColor = '#3b2716'; 
        this.styleSettings.black = '#a9e44d'; 
        this.styleSettings.greyColor = '#3b2716';

        this.classSettings.themeClass = 'theme_green';
        this.setValue();
    }

    // методы изменения размера шрифта
    fontSizeNormal(){
        this.styleSettings.fontSize = '10px';
        this.classSettings.fontClass = 'font-size_normal';
        this.setValue();
    }
    fontSizeLarge(){
        this.styleSettings.fontSize = '15px';
        this.classSettings.fontClass = 'font-size_large';
        this.setValue();
    }
    fontSizeVeryLarge(){
        this.styleSettings.fontSize = '20px';
        this.classSettings.fontClass = 'font-size_very-large';
        this.setValue();
    }

    // методы показа и скрытия изображений на сайте
    hideAllImg(){
        this.classSettings.imgControlClass = 'all-img_off';
        this.setValue();
    }
    showAllImg(){
        this.classSettings.imgControlClass = 'all-img_on';
        this.setValue();

    }
    //методы обесцвечивания и возвращения цветов изображениям

    makeImageColor(setValue = false){
        this.classSettings.imgImageColorClass = 'all-image-color'
        if(setValue){
            this.setValue();
        }
    }
    makeImageMonochrome(setValue = false){
        this.classSettings.imgImageColorClass = 'all-image-monochrome'
        if(setValue){
            this.setValue();
        }
    }
    /**
     *  метод устанавливает межстрочный интервал
     * value (Number) величина устанавливаемая для letter-spacing
     * setValue (Boolean) вносить или нет изменения в LocalStorag (нужно вносить, если данный метод срабатывает единолично, а не в компании с другими)
     */
    setLetterSpacing(value, setVaule = false){
        this.styleSettings.letterSpacing = value + 'px';
        switch(value){
            case 0:
                this.classSettings.letterSpacingClass = 'ls-normal';
                break;
            case 1:
                this.classSettings.letterSpacingClass = 'ls-large';
                break;
            case 2:
                this.classSettings.letterSpacingClass = 'ls-very-large';
                break;
            default:
        }
        if(setVaule){
            this.setValue()
        }
    }


    //методы устанавливающие тип шрифта (с засечками или нет)

    setSerifFont(){
        this.styleSettings.font = '"Times New Roman", serif;'
        this.classSettings.fontTypeClass = 'ft__serif';
        this.setValue()
    }
    setSansSerifFont(){
        this.styleSettings.font = '"Lato", sans-serif'
        this.classSettings.fontTypeClass = '';
        this.setValue()

    }

    // установка флага активности версии для слабовидящих
    setActivityFlag(value){
        this.activityFlag = value;
        localStorage.setItem('activityFlag', value);
    }

    // устанавливает значения стилей и классов из localStorage в root и body
    formLStoDOM(){

        this.styleSettings = JSON.parse(localStorage.getItem('styleSettings'));
        this.classSettings = JSON.parse(localStorage.getItem('classSettings'));

        document.documentElement.setAttribute('style', this.bildStyles());
        this.body.setAttribute('class', this.bildClasses());

    }
    // метод используемый при загрузке страницы, проверяет активна ли версия для слабовидящих или нет.
    loadPage(){
        if(this.activityFlag == 'true'){
            this.formLStoDOM();
        }

    }
    setDefaultSettings(){
        this.setActivityFlag(true)
        this.themeWhite();
        this.fontSizeNormal();
        this.showAllImg();
        this.setLetterSpacing(0);
        this.showAllImg();
        this.makeImageColor()
        this.setValue();
    }
    // метод используемый при запуске версии для слабовидящих
    start(){
        if(localStorage.getItem('styleSettings')){
            this.activityFlag = true;
            localStorage.setItem('activityFlag', true);
            this.formLStoDOM();
        }else{
            // startSliders();//запускаем слайдеры на странице
            this.setDefaultSettings();
        }

    }

    // внесение изменений
    setValue(){

        document.documentElement.setAttribute('style', this.bildStyles());
        this.body.setAttribute('class', this.bildClasses());

        localStorage.setItem('styleSettings', JSON.stringify(this.styleSettings));
        localStorage.setItem('classSettings', JSON.stringify(this.classSettings));
    }

    stop(){
        localStorage.setItem('activityFlag', false);
        document.documentElement.removeAttribute('style');
        this.body.removeAttribute('class');
        //startSliders(); // запускаем слайдеры на странице
    }
}