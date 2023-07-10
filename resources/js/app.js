//import './bootstrap';
import './modules/swiper.js';
import './modules/lightGalary.js';
import { popUp } from './modules/popup.js';
import getPopupLinks from './modules/getPoupLinks.js'

document.addEventListener('click', documentActions);

//PopUp
getPopupLinks();

/* popupButtons.forEach(btn => {
  btn.addEventListener('click', (e) => {
    popUp(e.target.dataset.popupId, e.target.dataset.popupPayload);
  });
}) */


//Переключение языков (комп и мобилка)
const languageBtn = document.querySelector('.language-btn');
languageBtn.addEventListener('click', function (e) {
  if (window.matchMedia("(pointer: coarse)").matches) { // Устройства со стилусом
    if (!languageBtn.classList.contains('active')) {
      e.preventDefault()
    }
    languageBtn.classList.toggle('active');
  }
});

//Async form sending
const forms = document.querySelectorAll('form');
const errorsMessagesUA = {
  name: ['Не заполнено поле "ВАШЕ ИМЯ"', 'El campo Nombre no esta rellenado"', 'Поле \"ИМЯ\" должно иметь 2 или больше символов', 'Campo "Nombre" Debe contener 2 o mas simbolos', 'Поле \"ИМЯ\" должно иметь не больше 80 символов', 'Campo "Nombre" no puede contener mas de 80 simbolos', 'Поле \"ИМЯ\" не может содержать цифры', 'Campo "Nombre" no puede contener los números'],
  phone: ['Не верный формат номера телефона', 'Introduce un telefono válido', 'Не заполнено поле "Номер телефона"', 'El campo no esta rellenado telefono',],
}

forms.forEach(form => {
  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const token = form.querySelector('input[name="_token"]').value;
    const nameError = form.querySelector('.error-name');
    const phoneError = form.querySelector('.error-phone');
    const textError = form.querySelector('.error-text');
    const loading = form.closest('.popup__row').previousElementSibling.previousElementSibling;
    loading.classList.add('active');
    const formData = new FormData(form);

    const local = 'http://localhost:8000/send-main-form';
    const server = 'https://eltop.artgas.pro/send-main-form'

    try {
      const response = await fetch(local, {
        headers: {
          "Accept": "application/json",
          "X-Requested-With": "XMLHttpRequest",
          "X-CSRF-Token": token
        },
        method: 'post',
        body: formData,
        credentials: "same-origin",
      })
      if (response.ok) {
        loading.classList.remove('active');
        form.closest('.popup').classList.add('sent');
        nameError.innerText = '';
        nameError.classList.remove('error');
        nameError.previousElementSibling.classList.remove('error');
        nameError.previousElementSibling.previousElementSibling.classList.remove('error');
        phoneError.innerText = '';
        phoneError.classList.remove('error');
        phoneError.previousElementSibling.classList.remove('error');
        phoneError.previousElementSibling.previousElementSibling.classList.remove('error');
        if (textError) {
          textError.innerText = '';
          textError.classList.remove('error');
          textError.previousElementSibling.classList.remove('error');
          textError.previousElementSibling.previousElementSibling.classList.remove('error');
        }
        form.reset();
      } else {
        const data = await response.json();
        loading.classList.remove('active');
        if (form.classList.contains('ru')) {
          if (data.errors?.name) {
            nameError.innerText = data.errors?.name[0];
            nameError.classList.add('error');
            nameError.previousElementSibling.classList.add('error');
            nameError.previousElementSibling.previousElementSibling.classList.add('error');
            console.log(nameError.previousElementSibling);
          } else {
            nameError.innerText = '';
            nameError.classList.remove('error');
            nameError.previousElementSibling.classList.remove('error');
            nameError.previousElementSibling.previousElementSibling.classList.remove('error');
          }
          if (data.errors?.phone) {
            phoneError.innerText = data.errors?.phone[0];
            phoneError.classList.add('error');
            phoneError.previousElementSibling.classList.add('error');
            phoneError.previousElementSibling.previousElementSibling.classList.add('error');
          } else {
            phoneError.innerText = '';
            phoneError.classList.remove('error');
            phoneError.previousElementSibling.classList.remove('error');
            phoneError.previousElementSibling.previousElementSibling.classList.remove('error');
          }
        } else {
          if (data.errors?.name) {
            nameError.innerText = errorsMessagesUA.name[errorsMessagesUA.name.findIndex(msg => msg == data.errors.name[0]) + 1];
            nameError.classList.add('error');
            nameError.previousElementSibling.classList.add('error');
            nameError.previousElementSibling.previousElementSibling.classList.add('error');
          } else {
            nameError.innerText = '';
            nameError.classList.remove('error');
            nameError.previousElementSibling.classList.remove('error');
            nameError.previousElementSibling.previousElementSibling.classList.remove('error');
          }
          if (data.errors?.phone) {
            phoneError.innerText = errorsMessagesUA.phone[errorsMessagesUA.phone.findIndex(msg => msg == data.errors.phone[0]) + 1];
            phoneError.classList.add('error');
            phoneError.previousElementSibling.classList.add('error');
            phoneError.previousElementSibling.previousElementSibling.classList.add('error');
          } else {
            phoneError.innerText = '';
            phoneError.classList.remove('error');
            phoneError.previousElementSibling.classList.remove('error');
            phoneError.previousElementSibling.previousElementSibling.classList.remove('error');
          }
        }
      }
    } catch (e) {
      console.log(e);
    }
  })
});

//BURGER

const burger = document.querySelector('.header-burger');
const burgerBtn = document.querySelector('.info-header__menu');

burgerBtn.addEventListener('click', () => {
  burger.classList.toggle('active');
  burgerBtn.classList.toggle('active');
});

//select

const selects = document.querySelectorAll('select');

selects.forEach(select => {
  select.addEventListener('change', (e) => {
    e.target.previousElementSibling.classList.add('inactive');
  });
});

function documentActions(e) {
  //убираем меню бургер
  if (!e.target.closest('.header-burger') && !e.target.classList.contains('info-header__menu')) {
    burger.classList.remove('active');
    burgerBtn.classList.remove('active');
  }

  //Убираем отображение языков
  if (!e.target.closest('.language-btn')) {
    languageBtn.classList.remove('active');
  }

  //stopScrolling
  if (!e.target.classList.contains('.ancor') && scrol == true) {
    body.addEventListener('click', stopAnimation);
  }
}



//file preview
const formImage = document.getElementById('fileImage');
const formPreview = document.getElementById('filePreview');
const bookingForm = document.getElementById('quiz');
formImage.addEventListener('change', function () {
  formPreview.innerHTML = '';
  formPreview.classList.add('load');
  if (this.files[0] == undefined) {
    formPreview.classList.remove('load');
  }
  uploadFile(formImage.files[0]);
});
function uploadFile(file) {
  if (file?.size > 2.5e+7 && bookingForm.classList.contains('ru')) {
    alert("Максимум 25 мегабайт");
    formPreview.classList.remove('load');
    $(".send-load").removeClass('active');
    return
  } else if (file?.size > 2.5e+7 && bookingForm.classList.contains('es')) {
    alert("el tamaño maximo 25");
    formPreview.classList.remove('load');
    return
  }
  let reader = new FileReader();
  reader.onload = function (e) {
    if (file.type.match('image.*')) {
      formPreview.innerHTML = `<img src="${e.target.result}" alt="">`;
      formPreview.classList.remove('load');
    } else if (file.type.match('video.*')) {
      formPreview.innerHTML = `<video src="${e.target.result}" controls></video>`;
      formPreview.classList.remove('load');
    } else if (file.type.match('application/pdf')) {
      formPreview.innerHTML = `<img src="/img/form/pdf.svg" alt="">`;
      formPreview.classList.remove('load');
    } else if (file.type.match('application/msword')) {
      formPreview.innerHTML = `<img src="/img/form/word.png" alt="">`;
      formPreview.classList.remove('load');
    } else if (file.type.match('application/vnd.openxmlformats-officedocument.wordprocessingml.document')) {
      formPreview.innerHTML = `<img src="/img/form/word.png" alt="">`;
      formPreview.classList.remove('load');
    } else if (file.type.match('application/vnd.ms-excel')) {
      formPreview.innerHTML = `<img src="/img/form/excel.svg" alt="">`;
      formPreview.classList.remove('load');
    } else if (file.type.match('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')) {
      formPreview.innerHTML = `<img src="/img/form/excel.svg" alt="">`;
      formPreview.classList.remove('load');
    } else if (file.name.slice(-4) == ".rar") {
      formPreview.innerHTML = `<img src="/img/form/rar.png" alt="">`;
      formPreview.classList.remove('load');
    } else if (file.name.slice(-4) == ".zip") {
      formPreview.innerHTML = `<img src="/img/form/zip.png" alt="">`;
      formPreview.classList.remove('load');
    } else if (file.name.slice(-4) == ".psd") {
      formPreview.innerHTML = `<img src="/img/form/psd.png" alt="">`;
      formPreview.classList.remove('load');
    } else if (file.type.match('text/plain')) {
      formPreview.innerHTML = `<img src="/img/form/txt.svg" alt="">`;
      formPreview.classList.remove('load');
    } else {
      formPreview.innerHTML = `<img src="/img/form/file.svg" alt="">`;
      formPreview.classList.remove('load');
    }
  }
  reader.onerror = function (e) {
    if (bookingForm.classList.contains('ru')) {
      alert("Ошибка загрузки файла");
    } else if (bookingForm.classList.contains('es')) {
      alert("Error al cargar el archivo");
    }
  };
  if (file?.size) {
    reader.readAsDataURL(file);
  }
}

// Review accordions
let questionAndArrow = document.querySelectorAll('.content-questions__question, .content-questions__arrow');
let answers = document.querySelectorAll('.content-questions__answer');

answers.forEach(answer => answer.style.height = '0px');

questionAndArrow.forEach(function (element) {
  element.addEventListener('click', function (e) {
    let card = e.target.closest('.content-questions__card')
    let answer = card.querySelector('.content-questions__answer');
    let currentArrow = card.querySelector('.content-questions__arrow');
    let arrows = e.target.closest('.content-questions__body').querySelectorAll('.content-questions__arrow');

    arrows.forEach(arrow => { if (arrow != currentArrow) arrow.classList.remove('active') })

    if (e.target.classList.contains('content-questions__arrow')) {
      e.target.classList.contains('active') ? e.target.classList.remove('active') : e.target.classList.add('active');
    } else {
      e.target.nextElementSibling.nextElementSibling.classList.contains('active') ?
        e.target.nextElementSibling.nextElementSibling.classList.remove('active') :
        e.target.nextElementSibling.nextElementSibling.classList.add('active')
    }
    toggleAnswer(answer,);
  });
});

function toggleAnswer(answer) {
  answers.forEach(item => {
    if (item.style.height != '0px' && item != answer) {
      item.style.height = '0';
    }
  })
  if (answer.style.height === '0px') {
    answer.style.height = answer.scrollHeight + 'px';
  } else {
    answer.style.height = '0';
  }
}

// About accordions
const aboutText = document.querySelector('.about__text');
const aboutbtn = document.querySelector('.about__btn');

if (aboutText) {
  aboutText.style.height = '180px';

  aboutbtn.addEventListener('click', (e) => {
    if (aboutText.style.height === '180px') {
      aboutText.style.height = aboutText.scrollHeight + 'px';
    } else {
      aboutText.style.height = '180px'
    }
    aboutText.classList.toggle('active');

    switch (e.target.innerText) {
      case 'Читать дальше →':
        e.target.innerHTML = '<span>&larr;</span> Скрыть текст';
        break;

      case '← Скрыть текст':
        e.target.innerHTML = 'Читать дальше <span>&rarr;</span>';
        break;

      case 'Leer mas →':
        e.target.innerHTML = '<span>&larr;</span> Cerrar';
        break;

      case '← Cerrar':
        e.target.innerHTML = 'Leer mas <span>&rarr;</span>';
        break;

      default:
        break;
    }
    e.target.classList.add('active');
    setTimeout(() => { e.target.classList.remove('active') }, 300)
  })
}

//scroll
let stop = false;
let scrol = false;
function stopAnimation() { stop = true; }
const scrolling = (selectorBtn) => {
  const btnUp = document.querySelector(selectorBtn);

  const links = document.querySelectorAll(".ancor");
  let speed = 0.3;
  const headerHeight = document.querySelector('.header__top').offsetHeight;

  window.addEventListener("scroll", () => {
    if (document.documentElement.scrollTop > 1600) {
      btnUp.classList.add('active');
    } else {
      btnUp.classList.remove('active');
    }
  });

  for (let i = 0; i < links.length; i++) {
    links[i].addEventListener("click", function (event) {
      event.preventDefault();
      let widthTop = Math.round(
        document.documentElement.scrollTop || document.body.scrollTop
      ),
        hash = this.hash;
      let toBlock = document.querySelector(hash).getBoundingClientRect().top - headerHeight;
      let start = null;

      requestAnimationFrame(step);

      scrol = true;

      function step(time) {


        if (start === null) {
          start = time;
        }
        let progress = time - start,
          r =
            toBlock < 0
              ? Math.max(widthTop - progress / speed, widthTop + toBlock)
              : Math.min(widthTop + progress / speed, widthTop + toBlock);

        let element = document.documentElement || document.body;
        element.scrollTo(0, r);

        if (r != widthTop + toBlock && !stop) {
          requestAnimationFrame(step);
        } else {
          body.removeEventListener('click', stopAnimation);
          stop = false;
          scrol = false
          // location.hash = hash;
        }
      }
    });
  }
};

scrolling(".scroll-top");