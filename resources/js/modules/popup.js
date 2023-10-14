export async function popUp(popupId, payload, uploadFile, showSelect = true, gift) {
	const popUp = document.getElementById(popupId);
	const bodyLock = document.getElementById('body');
	const popupCloseIcon = popUp.querySelector('.close-popup');
	const popupBtn = popUp.querySelector('.popup__button');
	const popupLoading = popUp.querySelector('.popup__loading');
	const filePreview = popUp.querySelector('.preview-file') || false;
	const inputs = popUp.querySelectorAll('.input');
	const inputFile = document.querySelector('.popup-download');
	const iconTitle = document.querySelector('.popup__title-icon');
	const giftTitle = popUp.querySelector('.popup__title-gift');
	const giftSubTitle = popUp.querySelector('.popup__title-sub-gift');
	const iconImg = popUp.querySelector('.popup__img-body-icon');
	const giftImg = popUp.querySelector('.popup__img-body-gift');
	const select = popUp.querySelector('.popup__item-select-body');
	const payloadInput = popUp.querySelector('.payload');

	if (payload) {
		payloadInput.value = payload;
	} else {
		payloadInput.value = '';
	}
	if (uploadFile) {
		inputFile.classList.remove('disabled');
	}
	if (!showSelect) {
		select.classList.add('disabled');
	}
	if (gift) {
		iconTitle.classList.add('disabled');
		giftTitle.classList.add('active');
		giftSubTitle.classList.add('active');
		iconImg.classList.add('disabled');
		giftImg.classList.add('active');
		payloadInput.value = 'Поп ап где бонус в подарок';
	}
	if (!uploadFile && !showSelect) {
		iconImg.classList.add('three-inputs');
	}

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
			if (gift) {
				setTimeout(() => {
					iconTitle.classList.remove('disabled');
					giftTitle.classList.remove('active');
					giftSubTitle.classList.remove('active');
					iconImg.classList.remove('disabled');
					giftImg.classList.remove('active');
				}, 500)
			}
			if (!showSelect) {
				setTimeout(() => {
					select.classList.remove('disabled');
				}, 500)
			}
			if (!uploadFile && !showSelect) {
				setTimeout(() => {
					iconImg.classList.remove('three-inputs');
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
