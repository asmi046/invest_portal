export default class ViTab{
    constructor(tabElem, options = {controllerSelector: '.ip-tab-controller__btn', displaySelector: '.ip-tab__display'}){
        this.tab =  tabElem;
        this.nlBtnController = tabElem.querySelectorAll(options.controllerSelector);
        this.nlDisplaySelector = tabElem.querySelectorAll(options.displaySelector) ;
        this.init();
    }
    init(){
        if(this.nlBtnController.length > 0){
            this.nlBtnController.forEach((btn, index)=>{
                btn.addEventListener('click', (e)=>{
                    e.preventDefault();
                    this.nlBtnController.forEach(item=>{
                        item.classList.remove('active');
                    });
                    e.target.classList.add('active');
                    this.nlDisplaySelector.forEach(display=>{
                        display.classList.remove('active');
                    });
                    this.nlDisplaySelector[index].classList.add('active')
                });
            });
        }
    }
}
