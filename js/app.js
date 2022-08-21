let openPopUpButtons = document.querySelectorAll('.open-pop-up');
let popUp = document.querySelector('.pop-up');
let popupBg = document.querySelector('.pop-up-bg');
let closePopupButton = document.querySelector('.close-form');
let linkBlue = document.querySelector('.link-blue');

linkBlue.addEventListener('click', () => {
    popUp.classList.add('active-pop-up');
    popupBg.classList.add('active');
    console.log('yes');
});

openPopUpButtons.forEach((button) => {
    button.addEventListener('click', (e) => {
        e.preventDefault();
        popUp.classList.add('active-pop-up');
        popupBg.classList.add('active');

    })
});

closePopupButton.addEventListener('click', () => {
    popupBg.classList.remove('active');
    popUp.classList.remove('active-pop-up');
});


document.addEventListener('click', (e) => {
    if (e.target === popupBg) {
        popupBg.classList.remove('active');
        popUp.classList.remove('active');
    }
});
console.log(popUp.classList);