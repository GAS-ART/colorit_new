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
    signboards: [`<div data-quiz="signboardsLight" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/signboards/light.webp" alt="Fabricacion de rotulos luminosos de metacrilato en Barcelona "> </div> <h3 class="item-quiz__title">Rótulos luminosos</h3> </div> `,
      ` <div data-quiz="layout" data-msg="ОПРОСНИК: Вывески без света" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/signboards/no_light.webp" alt="Rotulo de pvc sin luz con estructura metalica"> </div> <h3 class="item-quiz__title">Rótulos sin luz</h3> </div> `,
      ` <div data-popup-id="main" data-popup-show-select="" data-popup-payload="ОПРОСНИК: Вывески другой вариант" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4.webp" alt=""> </div> <h3 class="item-quiz__title">Otra opción</h3> </div> `],
    signboardsLight: [`<div data-quiz="layout" data-msg="ОПРОСНИК: Вывески -> лайтбокс" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/signboards/1_.webp" alt="Fabricacion de rotulos luminosos de metacrilato en Barcelona"> </div> <h3 class="item-quiz__title">Rótulo bandeja metacrilato con luz</h3> </div> `,
      ` <div data-quiz="layout" data-msg="ОПРОСНИК: Вывески с фрезерной резкой" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/signboards/2_.webp" alt="Rótulo de composite. Caja calada luminosa desde dentro. Fabricacion en Barcelona"> </div> <h3 class="item-quiz__title">Rótulo bandeja calada con luz</h3> </div> `,
      ` <div data-popup-id="main" data-popup-show-select="" data-popup-payload="ОПРОСНИК: Вывески со светом другой вариант" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4.webp" alt=""> </div> <h3 class="item-quiz__title">Me cuesta responder</h3> </div> `],
    vinyl: [` <div data-quiz="layout" data-msg="ОПРОСНИК: Винил обычный" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/vinyl/1.webp" alt="Vinilo polimerico con impresion digital. Pedir en Barcelona"> </div> <h3 class="item-quiz__title">Vinilo adhesivo</h3> </div> `,
      ` <div data-quiz="layout" data-msg="ОПРОСНИК: Винил перфорированый" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/vinyl/2.webp" alt="Fabricacion y instalacion de vinilo acido para auto taller en Barcelona"> </div> <h3 class="item-quiz__title">Vinilo microperforado</h3> </div> `,
      ` <div data-quiz="layout" data-msg="ОПРОСНИК: Винил пескоструйный" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/vinyl/3.webp" alt="Vinilo acido con impresion digital para sslon de belleza Rusalina Casanova."> </div> <h3 class="item-quiz__title">Vinilo ácido</h3> </div> `,
      ` <div div data-popup-id="main" data-popup-show-select="" data-popup-payload="ОПРОСНИК: Винил другой вариант" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4.webp" alt=""> </div> <h3 class="item-quiz__title">Otra opción</h3> </div> `],
    letters: [` <div data-quiz="lettersLight" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/letters/light.webp" alt="Letras córporeas retroiluminadas pintadas en color dorado con frente de metacrilato brillo"> </div> <h3 class="item-quiz__title">Letras corpóreas con luz</h3> </div> `,
      ` <div data-quiz="layout" data-msg="ОПРОСНИК: Буквы без света" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/letters/no_light.webp" alt="Letras interiores. Fabricadas de PVC 30 mm con separadores"> </div> <h3 class="item-quiz__title">Letras corpóreas sin luz</h3> </div> `,
      ` <div data-popup-id="main" data-popup-show-select="" data-popup-payload="ОПРОСНИК: Буквы другой вариант" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4.webp" alt=""> </div> <h3 class="item-quiz__title">Otra opción</h3> </div> `],

    lettersLight: [` <div data-quiz="layout" data-msg="ОПРОСНИК: Буквы свет фронтальный" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/letters/1.webp" alt="Pedir letras luminosas en Barcelona. Material PVC con LED"> </div> <h3 class="item-quiz__title">Letras corpóreas metacrilato con luz</h3> </div> `,
      ` <div data-quiz="layout" data-msg="ОПРОСНИК: Буквы свет контражурный" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/letters/2.webp" alt="Letras córporeas retroiluminadas pintadas en color dorado con frente de metacrilato brillo "> </div> <h3 class="item-quiz__title">Letras corpóreas retroiluminadas</h3> </div> `,
      ` <div data-popup-id="main" data-popup-show-select="" data-popup-payload="ОПРОСНИК: Буквы со светом другой вариант" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4.webp" alt=""> </div> <h3 class="item-quiz__title">Otra opción</h3> </div> `],

    layout: [` <div div data-popup-id="main" data-popup-show-select="" data-popup-payload="" data-popup-file="true" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/loyaut/yes.webp" alt=""> </div> <h3 class="item-quiz__title">Si</h3> </div> `, ` <div div data-popup-id="main" data-popup-show-select="" data-popup-payload="" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/loyaut/no.webp" alt=""> </div> <h3 class="item-quiz__title">No</h3> </div> `],
    init: [`<div data-quiz="signboards" class="swiper-slide signboards"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/1_.webp" alt=""> </div> <h3 class="item-quiz__title">Rótulos</h3> </div>`, `<div data-quiz="letters" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/2_.webp" alt=""> </div> <h3 class="item-quiz__title">Letras Corpóreas</h3> </div>`, `<div data-quiz="vinyl" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/3_.webp" alt=""> </div> <h3 class="item-quiz__title">Vinilos</h3> </div>`, `<div data-popup-id="main" data-popup-show-select="" data-popup-payload="ОПРОСНИК: выставки" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4_.webp" alt=""> </div> <h3 class="item-quiz__title">Ferias</h3> </div>`],
  },
  ru: {
    signboards: [` <div data-quiz="signboardsLight" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/signboards/light.webp" alt="Изготовление лайтбокса в Барселоне. Материал метакрила со внутренней подсветкой"> </div> <h3 class="item-quiz__title">Со светом</h3> </div> `,
      ` <div data-quiz="layout" data-msg="ОПРОСНИК: Вывески без света" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/signboards/no_light.webp" alt="Вывеска из пвх пластика без света. Металлическая структура"> </div> <h3 class="item-quiz__title">Без света</h3> </div> `,
      ` <div data-popup-id="main" data-popup-show-select="" data-popup-payload="ОПРОСНИК: Вывески другой вариант" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4.webp" alt=""> </div> <h3 class="item-quiz__title">Другой варинт</h3> </div> `],
    vinyl: [` <div data-quiz="layout" data-msg="ОПРОСНИК: Винил обычный" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/vinyl/1.webp" alt="Виниловая пленка под заказ. Быстрое изготовление в Барселоне."> </div> <h3 class="item-quiz__title">Обычный</h3> </div> `,
      ` <div data-quiz="layout" data-msg="ОПРОСНИК: Винил перфорированый" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/vinyl/2.webp" alt="Изготовление и установка перфорированной пленка для автоцентра в Барселоне"> </div> <h3 class="item-quiz__title">Перфорированный</h3> </div> `,
      ` <div data-quiz="layout" data-msg="ОПРОСНИК: Винил пескоструйный" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/vinyl/3.webp" alt="Матовая серая пленка для салона красоты Rusalina Casanova. Пускоструйная пленка с уф печатью"> </div> <h3 class="item-quiz__title">Пескоструйный</h3> </div> `,
      ` <div div data-popup-id="main" data-popup-show-select="" data-popup-payload="ОПРОСНИК: Винил другой вариант" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4.webp" alt=""> </div> <h3 class="item-quiz__title">Другой вариант</h3> </div> `],
    letters: [` <div data-quiz="lettersLight" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/letters/light.webp" alt="Объемные буквы из золотого композита обклеенные пленкой. LED подсветка с теплой подсветкой"> </div> <h3 class="item-quiz__title">Со светом</h3> </div> `,
      ` <div data-quiz="layout" data-msg="ОПРОСНИК: Буквы без света" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/letters/no_light.webp" alt="Буквы на стену. Изготовление из пвх 30 мм с держателями"> </div> <h3 class="item-quiz__title">Без Света</h3> </div> `,
      ` <div data-popup-id="main" data-popup-show-select="" data-popup-payload="ОПРОСНИК: Буквы другой вариант" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4.webp" alt=""> </div> <h3 class="item-quiz__title">Другой вариант</h3> </div> `],

    lettersLight: [` <div data-quiz="layout" data-msg="ОПРОСНИК: Буквы свет фронтальный" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/letters/1.webp" alt="Заказать буквы с подсветкой в Барселоне. Буквы из пвх материала. Фронтальная подсветка."> </div> <h3 class="item-quiz__title">Свет фронтальный</h3> </div> `,
      ` <div data-quiz="layout" data-msg="ОПРОСНИК: Буквы свет контражурный" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/letters/2.webp" alt="Объемные буквы из золотого композита обклеенные пленкой. LED подсветка с теплой подсветкой"> </div> <h3 class="item-quiz__title">Контражурный</h3> </div> `,
      ` <div data-popup-id="main" data-popup-show-select="" data-popup-payload="ОПРОСНИК: Буквы со светом другой вариант" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4.webp" alt=""> </div> <h3 class="item-quiz__title">Другой вариант</h3> </div> `],

    layout: [` <div div data-popup-id="main" data-popup-show-select="" data-popup-payload="" data-popup-file="true" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/loyaut/yes.webp" alt=""> </div> <h3 class="item-quiz__title">Да</h3> </div> `, ` <div div data-popup-id="main" data-popup-show-select="" data-popup-payload="" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/loyaut/no.webp" alt=""> </div> <h3 class="item-quiz__title">Нет</h3> </div> `],
    signboardsLight: [` <div data-quiz="layout" data-msg="ОПРОСНИК: вывески -> лайтбокс" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/signboards/1_.webp" alt="Изготовление лайтбокса в Барселоне. Материал метакрила со внутренней подсветкой "> </div> <h3 class="item-quiz__title">Лайтбокс</h3> </div> `,
      ` <div data-quiz="layout" data-msg="ОПРОСНИК: Вывески с фрезерной резкой" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/signboards/2_.webp" alt="Вывеска из дибонда с фрезерной резкой. Внутреннняя LED подсветка. Изготовление в Барселоне"> </div> <h3 class="item-quiz__title">Фреза</h3> </div> `,
      ` <div data-popup-id="main" data-popup-show-select="" data-popup-payload="ОПРОСНИК: Вывески со светом другой вариант" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4.webp" alt=""> </div> <h3 class="item-quiz__title">Другой варинт</h3> </div> `],
    init: ['<div data-quiz="signboards" class="swiper-slide signboards"> <div class="item-quiz__img"> <img src="/img/home/quiz/ru/1_.webp" alt=""> </div> <h3 class="item-quiz__title">Вывески</h3> </div>', '<div data-quiz="letters" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/ru/2_.webp" alt=""> </div> <h3 class="item-quiz__title">Буквы</h3> </div>', '<div data-quiz="vinyl" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/ru/3_.webp" alt=""> </div> <h3 class="item-quiz__title">Винил</h3> </div>', '<div data-popup-id="main" data-popup-show-select="" data-popup-payload="ОПРОСНИК: выставки" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/ru/4_.webp" alt=""> </div> <h3 class="item-quiz__title">Выставки</h3> </div>'],
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
        quizSlides.es.layout = [` <div div data-popup-id="main" data-popup-show-select="" data-popup-payload="${e.target.dataset.msg}" data-popup-file="true" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/loyaut/yes.webp" alt=""> </div> <h3 class="item-quiz__title">Si</h3> </div> `, ` <div div data-popup-id="main" data-popup-show-select="" data-popup-payload="${e.target.dataset.msg}" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/loyaut/no.webp" alt=""> </div> <h3 class="item-quiz__title">No</h3> </div> `];
        quizSlides.ru.layout = [` <div div data-popup-id="main" data-popup-show-select="" data-popup-payload="${e.target.dataset.msg}" data-popup-file="true" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/loyaut/yes.webp" alt=""> </div> <h3 class="item-quiz__title">Да</h3> </div> `, ` <div div data-popup-id="main" data-popup-show-select="" data-popup-payload="${e.target.dataset.msg}" class="swiper-slide link-on-popup"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/loyaut/no.webp" alt=""> </div> <h3 class="item-quiz__title">Нет</h3> </div> `];
      }

      if (e.target.dataset.quiz == 'layout') {
        lang == "es" ? quizTitle.innerText = 'Tienes ya el diseño?' : quizTitle.innerText = 'У вас есть гововый макет?'
      } else {
        lang == "es" ? quizTitle.innerText = '¿Qué es exactamente lo que necesita?' : quizTitle.innerText = 'Что именно вам нужно?'
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



const portfolioSlider = document.querySelector('.slider-portfolio');

if (portfolioSlider) {
  new Swiper(portfolioSlider, {
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
}

const portfolioSliderImgHeight = document.querySelector('.portfolio-slide__img img');
const portfolioSlideImgBody = document.querySelectorAll('.portfolio-slide__img');

if (portfolioSliderImgHeight) {
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
}

const resultSlider = document.querySelector('.slider-result');

if (resultSlider) {
  new Swiper(resultSlider, {
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
}

const reviewSlider = document.querySelector('.slider-review');

if (reviewSlider) {
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
}


//LETTERS PAGE THICKNESS

const lettersThicknessSlider = document.querySelector('.slider-letters-thickness');

if (lettersThicknessSlider) {
  new Swiper(lettersThicknessSlider, {
    // configure Swiper to use modules
    modules: [Navigation],
    simulateTouch: true,
    slidesPerView: 1,
    grabCursor: true,
    spaceBetween: 20,
    speed: 800,
    navigation: {
      nextEl: '.slider-letters-thickness__btn-next',
      prevEl: '.slider-letters-thickness__btn-prev',
    },
    breakpoints: {
      1240: {
        slidesPerView: 5,
      },
      992: {
        slidesPerView: 4,
      },
      768: {
        slidesPerView: 3,
      },
      500: {
        slidesPerView: 2,
      },
    },
  });
}

//Swiper-3
const swiper_3 = document.querySelectorAll('.swiper-3__slider');

swiper_3.forEach(swiper => {
  if (swiper) {
    const spaceBetween = +swiper.dataset.spaceBetween;
    const btnPrefix = swiper.dataset.btnPrefix;
  
    new Swiper(swiper, {
      // configure Swiper to use modules
      modules: [Navigation],
      //simulateTouch: true,
      slidesPerView: 1,
      spaceBetween,
      loop: true,
      speed: 800,
      width: null,
      navigation: {
        nextEl: `.${btnPrefix}swiper-3__btn-next`,
        prevEl: `.${btnPrefix}swiper-3__btn-prev`,
      },
      breakpoints: {
        992: {
          slidesPerView: 3,
        },
        768: {
          slidesPerView: 2,
          loop: false,
        },
      },
    });
  }
})



//Swiper-4
const swiper_4 = document.querySelector('.swiper-4__slider');

if (swiper_4) {
  const btnPrefix = swiper_4.dataset.btnPrefix;
  new Swiper(swiper_4, {
    // configure Swiper to use modules
    modules: [Navigation],
    //simulateTouch: true,
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    speed: 800,
    width: null,
    navigation: {
      nextEl: `.${btnPrefix}swiper-4__btn-next`,
      prevEl: `.${btnPrefix}swiper-4__btn-prev`,
    },
    breakpoints: {
      992: {
        slidesPerView: 4,
      },
      768: {
        slidesPerView: 2,
        //loop: false,
      },
    },
  });
}

const swiper_5 = document.querySelector('.swiper-5__slider');

if (swiper_5) {
  const btnPrefix = swiper_5.dataset.btnPrefix;
  new Swiper(swiper_5, {
    modules: [Navigation],
    simulateTouch: true,
    slidesPerView: 1,
    grabCursor: true,
    spaceBetween: 20,
    speed: 800,
    navigation: {
      nextEl: `.${btnPrefix}slider-swiper-5__btn-next`,
      prevEl: `.${btnPrefix}slider-swiper-5__btn-prev`,
    },
    breakpoints: {
      1240: {
        slidesPerView: 5,
      },
      992: {
        slidesPerView: 4,
        loop: false,
      },
      768: {
        slidesPerView: 3,
        loop: false,
      },
      500: {
        slidesPerView: 2,
      },
    },
  });
}

//Product Portfolio
const productPortfolio = document.querySelector('.product-portfolio');

if (productPortfolio) {
  const swiper = new Swiper(productPortfolio, {
    // configure Swiper to use modules
    modules: [Navigation],
    simulateTouch: true,
    slidesPerView: 1,
    grabCursor: true,
    spaceBetween: 20,
    loop: true,
    speed: 800,
    breakpoints: {
      1269: {
        slidesPerView: 999,
      },
      768: {
        slidesPerView: 2,
      },
      320: {
        slidesPerView: 1,
      },
    },
  });
  const slides = document.querySelectorAll('.product-portfolio__slide');
  window.addEventListener('resize', (e) => {
    if (window.innerWidth > 1269) {
      swiper.unsetGrabCursor()
      slides.forEach(slide => slide.removeAttribute('style'))
    } else {
      swiper.setGrabCursor()
    }
  });
}





