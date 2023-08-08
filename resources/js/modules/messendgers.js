//Messendgers
const messendgers = document.querySelector('.svg-messengers__icons');
const messendgerBtn = document.querySelector('.svg-messengers__btn');
const messendgerClose = document.querySelector('.svg-messengers__close');
const messendgerOpen = document.querySelector('.svg-messengers__open');
const massendgerLabelBtn = document.querySelector('.svg-messengers__label-btn');
if (window.matchMedia("(pointer: fine)").matches) {
  messendgerBtn.addEventListener('click', function () {
    messendgers.classList.remove('active');
    messendgerClose.classList.remove('active');
    messendgerOpen.classList.remove('hide');
    massendgerLabelBtn.classList.remove('hide');
  });
  messendgerBtn.addEventListener('mouseenter', function () {
    activeMessengersForDesktop();
  });
  massendgerLabelBtn.addEventListener('click', function () {
    activeMessengersForDesktop();
  });
} else if (window.matchMedia("(pointer: coarse)").matches) {
  messendgerBtn.addEventListener('click', function () {
    activeMessengersForMobile();
  });
  massendgerLabelBtn.addEventListener('click', function () {
    activeMessengersForMobile();
  });
}

function activeMessengersForDesktop() {
  messendgers.classList.add('active');
  messendgerClose.classList.add('active');
  messendgerOpen.classList.add('hide');
  massendgerLabelBtn.classList.add('hide');
}

function activeMessengersForMobile() {
  messendgers.classList.toggle('active');
  messendgerClose.classList.toggle('active');
  messendgerOpen.classList.toggle('hide');
  massendgerLabelBtn.classList.toggle('hide');
}