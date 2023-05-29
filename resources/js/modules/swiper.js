import Swiper, { Navigation } from 'swiper';

// init Swiper:
const quizSwiper = new Swiper('.swiper', {
  // configure Swiper to use modules
  modules: [Navigation],
  simulateTouch: true,
  slidesPerView: 2,
  loop: true,
  speed: 800,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    768: {
      slidesPerView: 'auto',
    },
  },
});

const quizSlides = {
  es: {
    signboards: [` <div data-quiz="signboardsLight" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/1.jpg" alt=""> </div> <h3 class="item-quiz__title">со светом</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/2.jpg" alt=""> </div> <h3 class="item-quiz__title">без света</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/3.jpg" alt=""> </div> <h3 class="item-quiz__title">Другой варинт</h3> </div> `],
    signboardsLight: [` <div data-quiz="signboardsLight" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/3.jpg" alt=""> </div> <h3 class="item-quiz__title">со светом</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/1.jpg" alt=""> </div> <h3 class="item-quiz__title">без света</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/2.jpg" alt=""> </div> <h3 class="item-quiz__title">Другой варинт</h3> </div> `],
  },
  ru: {
    signboards: [` <div data-quiz="signboardsLight" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/1.jpg" alt=""> </div> <h3 class="item-quiz__title">со светом</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/2.jpg" alt=""> </div> <h3 class="item-quiz__title">без света</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/3.jpg" alt=""> </div> <h3 class="item-quiz__title">Другой варинт</h3> </div> `],
    signboardsLight: [` <div data-quiz="signboardsLight" class="swiper-slide new-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/3.jpg" alt=""> </div> <h3 class="item-quiz__title">со светом</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/1.jpg" alt=""> </div> <h3 class="item-quiz__title">без света</h3> </div> `, ` <div class="swiper-slide"> <div class="item-quiz__img"> <img src="/img/home/quiz/es/2.jpg" alt=""> </div> <h3 class="item-quiz__title">Другой варинт</h3> </div> `],
  },
};

const quizeInitSlides = document.querySelectorAll('.swiper-slide');
const wrapper = document.querySelector('.swiper-wrapper');

function quiz(quizeInitSlides) {
  quizeInitSlides.forEach(quizSlide => {
    quizSlide.addEventListener('click', async (e) => {
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
      const nextQuiz = e.target.dataset.quiz
      quizSwiper.destroy(false, true)
      wrapper.innerHTML = '';

      const loadImages = quizSlides[lang][nextQuiz].map(async slide => {
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
        const quizCurrentSlides = wrapper.querySelectorAll('.swiper-slide');
        quizCurrentSlides.forEach(slide => {
          slide.querySelector('img').classList.remove('in');
        })
        quiz(quizCurrentSlides);
      } catch (error) {
        console.error('Ошибка загрузки изображений:', error);
      };
    });
  });
}

quiz(quizeInitSlides);




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