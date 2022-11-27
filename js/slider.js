class Slider {
    constructor(slider) {
        this.sliderIndicators = [];
        this.sliderIndicatorsContainer = slider.children[1];
        this.imagesContainer = slider.children[0].querySelectorAll('.slide');
        this.createIndicators();
        this.createIndicatorsContainer(slider);
        this.setupIndicator();
    }
    createIndicators() {
        for (let index = 0; index < this.imagesContainer.length; index++) {
            let newLi = document.createElement('li');
            newLi.classList.add('slide-indicator');
            this.sliderIndicatorsContainer.append(newLi);
        }
    }
    createIndicatorsContainer(slider) {
        this.sliderIndicators = slider.children[1].querySelectorAll('.slide-indicator');
        console.log(this.sliderIndicators);
    }
    setupIndicator() {
        this.sliderIndicators[0].classList.add('active');
        this.sliderIndicators.forEach(element => {
            element.addEventListener('click', (event) => {
                for (let index = 0; index < this.sliderIndicators.length; index++) {
                    this.sliderIndicators[index].classList.remove('active');
                }
                event.target.classList.add('active');
                this.onSlide();
            });
        });
    }
    onSlide() {
        for (let index = 0; index < this.sliderIndicators.length; index++) {
            if (this.sliderIndicators[index].classList.contains('active')) {
                this.imagesContainer.forEach(element => {
                    element.classList.remove('active');
                });
                this.imagesContainer[index].classList.add('active');
            }
        }
    }
}

// считаем количество слайдеров на странице и нумируем
window.addEventListener('DOMContentLoaded', function () {
    console.log('finish');
    let sliderContainer = document.querySelectorAll('.slider');
    let sliderArray = [];
    for (let index = 0; index < sliderContainer.length; index++) {
        let count = index + 1;
        sliderContainer[index].className = '.slider#' + count;
        sliderArray.push(new Slider(sliderContainer[index]));
    }
});