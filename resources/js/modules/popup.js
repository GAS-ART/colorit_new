export function popUp(popupId, payload, uploadFile) {
	const popUp = document.getElementById(popupId);
	const bodyLock = document.getElementById('body');
	const popupCloseIcon = popUp.querySelector('.close-popup');
	const popupBtn = popUp.querySelector('.popup__button');
	const popupLoading = popUp.querySelector('.popup__loading');
	const filePreview = popUp.querySelector('.preview-file') || false;
	const inputs = popUp.querySelectorAll('input');
	const inputFile = document.querySelector('.popup-download');

	if (payload) {
		const inputDataQuiz = popUp.querySelector('.quiz-service-data');
		inputDataQuiz.value = payload;
	}
	if (uploadFile) {
		inputFile.classList.remove('disabled');
	}

	const scrollbarWidth = window.innerWidth - document.documentElement.clientWidth;
	document.documentElement.style.setProperty('--scrollbar-width', `${scrollbarWidth}px`);

	bodyLock.classList.add('lock');
	popUp.classList.add('open');


	popupCloseIcon.addEventListener('click', function (e) {
		popupClose(popUp);
		e.preventDefault();
	});

	popupBtn.addEventListener('click', function () {
		popupClose(popUp);
	});

	function popupClose(popupActive) {
		popupActive.classList.remove('open');
		setTimeout(() => bodyLock.classList.remove("lock"), 500)
		//bodyLock.classList.remove("lock");
		popUp.classList.remove('sent');
		inputs.forEach(input => {
			if (!input.value) {
				input.previousElementSibling.classList.remove('error');
				input.classList.remove('error');
				input.nextElementSibling.classList.remove('error');
				input.nextElementSibling.innerHTML = '';
			}
			if (uploadFile) {
				setTimeout(() => {
					inputFile.classList.add('disabled');
				}, 500)
			}
		});
		if (filePreview) {
			filePreview.innerHTML = '';
		}
	}

	popUp.addEventListener('mousedown', function (e) {
		if (!e.target.closest('.popup__body') && !popupLoading.classList.contains('active')) {
			popupClose(popUp);
		}
	});
};
