import Swiper, { Navigation } from 'swiper';

// init Swiper:
new Swiper('.swiper', {
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
    signboards: [` <div data-quiz="signboardsLight" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/1.jpg" alt=""> </div> <h3 class="item-quiz__title">со светом</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/2.jpg" alt=""> </div> <h3 class="item-quiz__title">без света</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/3.jpg" alt=""> </div> <h3 class="item-quiz__title">Другой варинт</h3> </div> `],
    signboardsLight: [` <div data-quiz="signboardsLight" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/3.jpg" alt=""> </div> <h3 class="item-quiz__title">со светом</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/1.jpg" alt=""> </div> <h3 class="item-quiz__title">без света</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/2.jpg" alt=""> </div> <h3 class="item-quiz__title">Другой варинт</h3> </div> `],
    init: [`<div data-quiz="signboards" class="swiper-slide signboards"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/1_.webp" alt=""> </div> <h3 class="item-quiz__title">Вывески</h3> </div>`, `<div data-quiz="letters" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/2_.webp" alt=""> </div> <h3 class="item-quiz__title">Буквы</h3> </div>`, `<div data-quiz="vinul" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/3_.webp" alt=""> </div> <h3 class="item-quiz__title">Винил</h3> </div>`, `<div data-quiz="event" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/4_.webp" alt=""> </div> <h3 class="item-quiz__title">Ивент</h3> </div>`],
  },
  ru: {
    signboards: [` <div data-quiz="signboardsLight" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/1.jpg" alt=""> </div> <h3 class="item-quiz__title">со светом</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/2.jpg" alt=""> </div> <h3 class="item-quiz__title">без света</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/3.jpg" alt=""> </div> <h3 class="item-quiz__title">Другой варинт</h3> </div> `],
    signboardsLight: [` <div data-quiz="signboardsLight" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/3.jpg" alt=""> </div> <h3 class="item-quiz__title">со светом</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/1.jpg" alt=""> </div> <h3 class="item-quiz__title">без света</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/2.jpg" alt=""> </div> <h3 class="item-quiz__title">Другой варинт</h3> </div> `],
    init: ['<div data-quiz="signboards" class="swiper-slide signboards"> <div class="item-quiz__img"> <img src="/img/home/quiz/ru/1_.webp" alt=""> </div> <h3 class="item-quiz__title">Вывески</h3> </div>', '<div data-quiz="letters" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/ru/2_.webp" alt=""> </div> <h3 class="item-quiz__title">Буквы</h3> </div>', '<div data-quiz="vinul" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/ru/3_.webp" alt=""> </div> <h3 class="item-quiz__title">Винил</h3> </div>', '<div data-quiz="event" class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/ru/4_.webp" alt=""> </div> <h3 class="item-quiz__title">Ивент</h3> </div>'],
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

function quiz(quizeInitBtns) {
  quizeInitBtns.forEach(quizSlide => {
    quizSlide.addEventListener('click', async (e) => {

      if (e.target.classList.contains('disabled')) return

      quizBodyOverlay.classList.add('active');
      swiperBts.forEach(btn => btn.classList.add('hide'));

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
      const lang = document.documentElement.lang;
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
            tempContainer.firstElementChild.classList.add('in')
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
        progress.style.width = 100 / 5 * progressStep + '%';
        if (!e.target.classList.contains('quiz-body__back-btn')) {
          backBtn.classList.remove('disabled');
          quizSteps.push(nextQuiz)
        }
        quiz(quizCurrentSlides);
        quizBodyOverlay.classList.remove('active');
        swiperBts.forEach(btn => btn.classList.remove('hide'));
      } catch (error) {
        console.error('Ошибка загрузки изображений:', error);
      };
    });
  });
}
quiz(quizeInitBtns);

/* backBtn.addEventListener('click', (e) => {
  if (e.target.classList.contains('disabled')) return

  const quizCurrentSlides = wrapper.querySelectorAll('.swiper-slide');
  quizSteps.pop();
  if (quizSteps.length > 0) {
    const nextQuiz = quizSteps[quizSteps.length - 1];
    quiz(quizCurrentSlides, nextQuiz);
  } else {
    quiz(quizCurrentSlides, 'init');
  }
}); */



/* const slides = [
  `
  <div class="swiper-slide new-slide">
  <div class="item-quiz__img">
      <img src="/img/home/quiz/es/1.jpg" alt="">
  </div>
  <h3 class="item-quiz__title">со светом</h3>
</div>
  `,
  `
  <div class="swiper-slide">
  <div class="item-quiz__img">
      <img src="/img/home/quiz/es/2.jpg" alt="">
  </div>
  <h3 class="item-quiz__title">без света</h3>
</div>
  `,
  `
  <div class="swiper-slide">
  <div class="item-quiz__img">
      <img src="/img/home/quiz/es/3.jpg" alt="">
  </div>
  <h3 class="item-quiz__title">Другой варинт</h3>
</div>
  `,
]; */



/* const signboards = document.querySelector('.signboards');
const wrapper = document.querySelector('.swiper-wrapper');

signboards.addEventListener('click', async () => {
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
  console.log(slides);
  quizSwiper.destroy(false, true)
  wrapper.innerHTML = '';

  const loadImages = slides.map(async slide => {
    const tempContainer = document.createElement('div');
    tempContainer.innerHTML = slide.trim();
    const img = tempContainer.querySelector('img');
    img.classList.add('in');

    await new Promise((resolve, reject) => {
      img.addEventListener('load', () => {
        wrapper.appendChild(tempContainer.firstElementChild);
        resolve();
      });
      img.addEventListener('error', reject);
    });
  });

  try {
    await Promise.all(loadImages)
    quizSwiper.init();
    const slides = wrapper.querySelectorAll('.swiper-slide');
    slides.forEach(slide => {
      slide.querySelector('img').classList.remove('in');
    })
  } catch (error) {
    console.error('Ошибка загрузки изображений:', error);
  };
}); */