import { popUp } from './popup.js';

const getPopupLinks = () => {
  const popupButtons = document.querySelectorAll('.link-on-popup');
  popupButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      popUp(
        e.target.dataset.popupId,
        e.target.dataset.popupPayload,
        e.target.dataset.popupFile,
        e.target.dataset.popupShowSelect,
        e.target.dataset.popupGift,
      );
    });
  })
}

export default getPopupLinks;