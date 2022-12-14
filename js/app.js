let openPopUpButtons = document.querySelectorAll('.open-pop-up');
let popUp = document.querySelector('.pop-up');
let popupBg = document.querySelector('.pop-up-bg');
let closePopupButton = document.querySelector('.close-form');
let linkBlue = document.querySelector('.link-blue');



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
// ! ЗАпрет вставки из буфера в поле телефон
let inputTel = document.querySelectorAll(".tel-input");
inputTel.forEach(el => {
    el.addEventListener("paste", (e) => { e.preventDefault() });
});

// >Маска для вставки в поле ввода номера телефона                                                                                 
document.addEventListener("DOMContentLoaded", function () {
    var phoneInputs = document.querySelectorAll('.phone-field');

    var getInputNumbersValue = function (input) {
        // Return stripped input value — just numbers
        return input.value.replace(/\D/g, '');
    }

    var onPhonePaste = function (e) {
        var input = e.target,
            inputNumbersValue = getInputNumbersValue(input);
        var pasted = e.clipboardData || window.clipboardData;
        if (pasted) {
            var pastedText = pasted.getData('Text');
            if (/\D/g.test(pastedText)) {
                // Attempt to paste non-numeric symbol — remove all non-numeric symbols,
                // formatting will be in onPhoneInput handler
                input.value = inputNumbersValue;
                return;
            }
        }
    }

    var onPhoneInput = function (e) {
        var input = e.target,
            inputNumbersValue = getInputNumbersValue(input),
            selectionStart = input.selectionStart,
            formattedInputValue = "";

        if (!inputNumbersValue) {
            return input.value = "";
        }

        if (input.value.length != selectionStart) {
            // Editing in the middle of input, not last symbol
            if (e.data && /\D/g.test(e.data)) {
                // Attempt to input non-numeric symbol
                input.value = inputNumbersValue;
            }
            return;
        }

        if (["7", "8", "9"].indexOf(inputNumbersValue[0]) > -1) {
            if (inputNumbersValue[0] == "9") inputNumbersValue = "7" + inputNumbersValue;
            var firstSymbols = (inputNumbersValue[0] == "8") ? "8" : "+7";
            formattedInputValue = input.value = firstSymbols + " ";
            if (inputNumbersValue.length > 1) {
                formattedInputValue += '(' + inputNumbersValue.substring(1, 4);
            }
            if (inputNumbersValue.length >= 5) {
                formattedInputValue += ') ' + inputNumbersValue.substring(4, 7);
            }
            if (inputNumbersValue.length >= 8) {
                formattedInputValue += '-' + inputNumbersValue.substring(7, 9);
            }
            if (inputNumbersValue.length >= 10) {
                formattedInputValue += '-' + inputNumbersValue.substring(9, 11);
            }
        } else {
            formattedInputValue = '+' + inputNumbersValue.substring(0, 16);
        }
        input.value = formattedInputValue;
    }
    var onPhoneKeyDown = function (e) {
        // Clear input after remove last symbol
        var inputValue = e.target.value.replace(/\D/g, '');
        if (e.keyCode == 8 && inputValue.length == 1) {
            e.target.value = "";
        }
    }
    for (var phoneInput of phoneInputs) {
        phoneInput.addEventListener('keydown', onPhoneKeyDown);
        phoneInput.addEventListener('input', onPhoneInput, false);
        phoneInput.addEventListener('paste', onPhonePaste, false);
    }
});


// подстановка h1 в title
let h1 = document.getElementById('h1');
let h1Text = h1.innerText;
let title = document.getElementById('title');
title.innerHTML = h1Text;
console.log(title);

// крошки

let arrBread = document.querySelector('.breadcrumbs-wrap');
let newLi = document.createElement('li');
let h1MashineName = h1.firstChild.data;
newLi.classList.add('active');
newLi.innerText = h1MashineName;
if (arrBread) {
    arrBread.append(newLi);
};


// блок поиска

let srhBlock = document.querySelector('.search_block')
let srcForm = document.querySelector('.search-form')
srhBlock.addEventListener('click', () => {
    srcForm.classList.toggle('active');
    srhBlock.classList.toggle('active');
    document.getElementById('srcms').focus();
});

// вызов окна по ссылке

if (linkBlue) {
    linkBlue.addEventListener('click', () => {
        popUp.classList.add('active-pop-up');
        popupBg.classList.add('active');
        console.log('yes');
    });
}



