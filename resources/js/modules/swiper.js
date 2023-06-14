import Swiper, { Navigation, Scrollbar } from 'swiper';
import getPopupLinks from './getPoupLinks.js'


// init Swiper:
new Swiper('.quiz-body__slider', {
  // configure Swiper to use modules
  modules: [Navigation],
  simulateTouch: true,
  slidesPerView: 2,
  //loop: true,
  speed: 800,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    768: {
      slidesPerView: 'auto',
      //loop: false,
    },
  },
});

const quizSlides = {
  es: {
    signboards: [` <div data-quiz="signboardsLight" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/signboards/light.webp" alt=""> </div> <h3 class="item-quiz__title">Со светом</h3> </div> `, ` <div data-quiz="layout" data-msg="Вывески без света" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/signboards/no_light.webp" alt=""> </div> <h3 class="item-quiz__title">Без света</h3> </div> `, ` <div data-popup-id="quiz" data-popup-payload="Вывески другой вариант" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4.webp" alt=""> </div> <h3 class="item-quiz__title">Другой варинт</h3> </div> `],
    signboardsLight: [` <div data-quiz="layout" data-msg="Вывески лайтбокс" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/signboards/1_.webp" alt=""> </div> <h3 class="item-quiz__title">Лайтбокс</h3> </div> `, ` <div data-quiz="layout" data-msg="Вывески с фрезерной резкой" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/signboards/2_.webp" alt=""> </div> <h3 class="item-quiz__title">С фрезерной резкой </h3> </div> `, ` <div data-popup-id="quiz" data-popup-payload="Вывески со светом другой вариант" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4.webp" alt=""> </div> <h3 class="item-quiz__title">Затрудняются ответить</h3> </div> `],
    vinyl: [` <div data-quiz="layout" data-msg="Винил обычный" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/vinyl/1.webp" alt=""> </div> <h3 class="item-quiz__title">Обычный</h3> </div> `, ` <div data-quiz="layout" data-msg="Винил перфорированый" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/vinyl/2.webp" alt=""> </div> <h3 class="item-quiz__title">Перфорированный </h3> </div> `, ` <div data-quiz="layout" data-msg="Винил пескоструйный" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/vinyl/3.webp" alt=""> </div> <h3 class="item-quiz__title">Пескоструйный</h3> </div> `, ` <div div data-popup-id="quiz" data-popup-payload="Винил другой вариант" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4.webp" alt=""> </div> <h3 class="item-quiz__title">Другой вариант</h3> </div> `],
    letters: [` <div data-quiz="lettersLight" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/letters/light.webp" alt=""> </div> <h3 class="item-quiz__title">Со светом</h3> </div> `, ` <div data-quiz="layout" data-msg="Буквы без света" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/letters/no_light.webp" alt=""> </div> <h3 class="item-quiz__title">Без света</h3> </div> `, ` <div data-popup-id="quiz" data-popup-payload="Буквы другой вариант" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4.webp" alt=""> </div> <h3 class="item-quiz__title">Другой варинт</h3> </div> `],

    lettersLight: [` <div data-quiz="layout" data-msg="Буквы свет фронтальный" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/letters/1.webp" alt=""> </div> <h3 class="item-quiz__title">Свет фронтальный</h3> </div> `, ` <div data-quiz="layout" data-msg="Буквы свет контражурный" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/letters/2.webp" alt=""> </div> <h3 class="item-quiz__title">Контражурный</h3> </div> `, ` <div data-popup-id="quiz" data-popup-payload="Буквы со светом другой вариант" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4.webp" alt=""> </div> <h3 class="item-quiz__title">Затрудняются ответить</h3> </div> `],

    layout: [` <div div data-popup-id="quiz" data-popup-payload="" data-popup-file="true" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/loyaut/yes.webp" alt=""> </div> <h3 class="item-quiz__title">Да</h3> </div> `, ` <div div data-popup-id="quiz" data-popup-payload="" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/loyaut/no.webp" alt=""> </div> <h3 class="item-quiz__title">Нет</h3> </div> `],
    init: [`<div data-quiz="signboards" class="swiper-slide signboards"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/1_.webp" alt=""> </div> <h3 class="item-quiz__title">Вывески</h3> </div>`, `<div data-quiz="letters" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/2_.webp" alt=""> </div> <h3 class="item-quiz__title">Буквы</h3> </div>`, `<div data-quiz="vinyl" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/3_.webp" alt=""> </div> <h3 class="item-quiz__title">Винил</h3> </div>`, `<div data-popup-id="quiz" data-popup-payload="Event" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4_.webp" alt=""> </div> <h3 class="item-quiz__title">Ивент</h3> </div>`],
  },
  ru: {
    signboards: [` <div data-quiz="signboardsLight" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/signboards/light.webp" alt=""> </div> <h3 class="item-quiz__title">Со светом</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/signboards/no_light.webp" alt=""> </div> <h3 class="item-quiz__title">Без света</h3> </div> `, ` <div data-popup-id="quiz" data-popup-payload="Вывески другой вариант" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4.webp" alt=""> </div> <h3 class="item-quiz__title">Другой варинт</h3> </div> `],
    vinyl: [` <div data-quiz="layout" data-msg="Винил обычный" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/vinyl/1.webp" alt=""> </div> <h3 class="item-quiz__title">Обычный</h3> </div> `, ` <div data-quiz="layout" data-msg="Винил перфорированый" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/vinyl/2.webp" alt=""> </div> <h3 class="item-quiz__title">Перфорированный </h3> </div> `, ` <div data-quiz="layout" data-msg="Винил пескоструйный" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/vinyl/3.webp" alt=""> </div> <h3 class="item-quiz__title">Пескоструйный</h3> </div> `, ` <div div data-popup-id="quiz" data-popup-payload="Винил другой вариант" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4.webp" alt=""> </div> <h3 class="item-quiz__title">Другой вариант</h3> </div> `],

    layout: [` <div div data-popup-id="quiz" data-popup-payload="" data-popup-file="true" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/loyaut/yes.webp" alt=""> </div> <h3 class="item-quiz__title">Да</h3> </div> `, ` <div div data-popup-id="quiz" data-popup-payload="" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/loyaut/no.webp" alt=""> </div> <h3 class="item-quiz__title">Нет</h3> </div> `],

    signboardsLight: [` <div data-quiz="signboardsLight" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/3.jpg" alt=""> </div> <h3 class="item-quiz__title">со светом</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/1.jpg" alt=""> </div> <h3 class="item-quiz__title">без света</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/2.jpg" alt=""> </div> <h3 class="item-quiz__title">Другой варинт</h3> </div> `],
    init: ['<div data-quiz="signboards" class="swiper-slide signboards"> <div class="item-quiz__img"> <img src="/img/home/quiz/ru/1_.webp" alt=""> </div> <h3 class="item-quiz__title">Вывески</h3> </div>', '<div data-quiz="letters" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/ru/2_.webp" alt=""> </div> <h3 class="item-quiz__title">Буквы</h3> </div>', '<div data-quiz="vinyl" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/ru/3_.webp" alt=""> </div> <h3 class="item-quiz__title">Винил</h3> </div>', '<div data-popup-id="quiz" data-popup-payload="Event" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/ru/4_.webp" alt=""> </div> <h3 class="item-quiz__title">Ивент</h3> </div>'],
  },
};

const quizSteps = [];


const quizeInitBtns = document.querySelectorAll('.swiper-slide, .quiz-body__back-btn');
const wrapper = document.querySelector('.swiper-wrapper');
const backBtn = document.querySelector('.quiz-body__back-btn');
const quizBodyOverlay = document.querySelector('.quiz-body__overlay');
const swiperBts = document.querySelectorAll('.swiper-button');
const quizSectionContainer = document.querySelector('.quiz-container'); //This for fixed bag on iphone
const progress = document.querySelector('.quiz-body__progres-line span');
let progressStep = 0;
const progressCount = document.querySelector('.quiz-count');
const quizTitle = document.querySelector('.quiz-body__title');

function quiz(quizeInitBtns) {
  quizeInitBtns.forEach(quizSlide => {
    quizSlide.addEventListener('click', async (e) => {

      if (e.target.classList.contains('disabled') || !e.target.dataset.quiz) return

      const lang = document.documentElement.lang;
      quizBodyOverlay.classList.add('active');
      swiperBts.forEach(btn => btn.classList.add('hide'));

      if (e.target.dataset.msg) {
        quizSlides.es.layout = [` <div div data-popup-id="quiz" data-popup-payload="${e.target.dataset.msg}" data-popup-file="true" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/loyaut/yes.webp" alt=""> </div> <h3 class="item-quiz__title">Да</h3> </div> `, ` <div div data-popup-id="quiz" data-popup-payload="${e.target.dataset.msg}" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/loyaut/no.webp" alt=""> </div> <h3 class="item-quiz__title">Нет</h3> </div> `];
        quizSlides.ru.layout = [` <div div data-popup-id="quiz" data-popup-payload="${e.target.dataset.msg}" data-popup-file="true" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/loyaut/yes.webp" alt=""> </div> <h3 class="item-quiz__title">Да</h3> </div> `, ` <div div data-popup-id="quiz" data-popup-payload="${e.target.dataset.msg}" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/loyaut/no.webp" alt=""> </div> <h3 class="item-quiz__title">Нет</h3> </div> `];
      }

      if (e.target.dataset.quiz == 'layout') {
        lang == "es" ? quizTitle.innerText = 'У вас есть гововый макет?' : quizTitle.innerText = 'У вас есть гововый макет?'
      } else {
        lang == "es" ? quizTitle.innerText = 'Что именно вам нужно?' : quizTitle.innerText = 'Что именно вам нужно?'
      }

      await new Promise(resolve => {
        const slides = wrapper.querySelectorAll('.swiper-slide');
        slides.forEach(slide => {
          slide.classList.add('remove')
        })
        let transitionCount = 0;

        const handleTransitionEnd = () => {
          transitionCount++;
          if (transitionCount === slides.length) {
            resolve();
          }
        };

        slides.forEach(slide => {
          slide.addEventListener('transitionend', handleTransitionEnd);
        });
      });

      let nextQuiz;
      if (e.target.classList.contains('quiz-body__back-btn')) {
        quizSteps.pop();
        quizSteps.length > 0 ? nextQuiz = quizSteps[quizSteps.length - 1] : nextQuiz = 'init'
        if (quizSteps.length == 0) e.target.classList.add('disabled');
        --progressStep;
      } else {
        nextQuiz = e.target.dataset.quiz
        ++progressStep;
      }
      wrapper.innerHTML = '';
      const sortSlides = [];
      const loadImages = quizSlides[lang][nextQuiz].map(async (slide, index) => {
        const tempContainer = document.createElement('div');
        tempContainer.innerHTML = slide.trim();
        const img = tempContainer.querySelector('img');

        await new Promise((resolve, reject) => {
          img.addEventListener('load', () => {
            tempContainer.firstElementChild.classList.add('in');
            sortSlides[index] = tempContainer.firstElementChild;
            resolve();
          });
          img.addEventListener('error', reject);
        });
      });

      try {
        await Promise.all(loadImages);
        sortSlides.forEach(slide => {
          wrapper.appendChild(slide);
        });
        quizSectionContainer.classList.add('pad0')
        const quizCurrentSlides = wrapper.querySelectorAll('.swiper-slide');
        setTimeout(() => quizSectionContainer.classList.remove('pad0'), 50);
        setTimeout(() => {
          quizCurrentSlides.forEach(slide => {
            slide.classList.remove('in');
          })
        }, 60)
        progress.style.width = 100 / 3 * progressStep + '%';
        progressCount.innerHTML = progressStep;
        if (!e.target.classList.contains('quiz-body__back-btn')) {
          backBtn.classList.remove('disabled');
          quizSteps.push(nextQuiz)
        }
        quiz(quizCurrentSlides);
        quizBodyOverlay.classList.remove('active');
        swiperBts.forEach(btn => btn.classList.remove('hide'));
        getPopupLinks()
      } catch (error) {
        console.error('Ошибка загрузки изображений:', error);
      };
    });
  });
}
quiz(quizeInitBtns);




new Swiper('.slider-portfolio', {
  // configure Swiper to use modules
  modules: [Navigation],
  simulateTouch: true,
  slidesPerView: 1,
  grabCursor: true,
  lazyPreloadPrevNext: 1,
  loop: true,
  speed: 800,
  navigation: {
    nextEl: '.slider-portfolio__btn-next',
    prevEl: '.slider-portfolio__btn-prev',
  },
});

const portfolioSliderImgHeight = document.querySelector('.portfolio-slide__img img');
const portfolioSlideImgBody = document.querySelectorAll('.portfolio-slide__img');

portfolioSliderImgHeight.addEventListener('load', () => { setHeight() });

function debounce(func, delay) {
  let timeoutId;
  let isFirstCall = true;

  return function (/* ...args */) {
    if (isFirstCall) {
      //func.apply(this, args);
      func();
      isFirstCall = false;
    } else {
      clearTimeout(timeoutId);
    }

    timeoutId = setTimeout(() => {
      isFirstCall = true;
      setHeight();
    }, delay);
  };
}

const resetImageHeight = () => {
  portfolioSlideImgBody.forEach((imgBody) => {
    imgBody.style.removeProperty('height');
  });
};

const setHeight = () => {
  const height = portfolioSliderImgHeight.offsetHeight;
  portfolioSlideImgBody.forEach((imgBody, index) => {
    if (index !== 0) {
      imgBody.style.height = height + 'px';
    }
  });
}

const debouncedResetImageHeight = debounce(resetImageHeight, 1000);

window.addEventListener('resize', debouncedResetImageHeight);



new Swiper('.slider-result', {
  // configure Swiper to use modules
  modules: [Navigation, Scrollbar],
  //simulateTouch: true,
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  speed: 800,
  width: null,
  scrollbar: {
    el: '.swiper-scrollbar',
  },
  breakpoints: {
    768: {
      width: 232,
      spaceBetween: 0,
      scrollbar: false,
    },
  },
});


new Swiper('.slider-review', {
  // configure Swiper to use modules
  modules: [Navigation],
  simulateTouch: true,
  slidesPerView: 1,
  grabCursor: true,
  spaceBetween: 20,
  loop: true,
  speed: 800,
  navigation: {
    nextEl: '.slider-review__btn-next',
    prevEl: '.slider-review__btn-prev',
  },
});