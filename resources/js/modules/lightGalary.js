import lightGallery from 'lightgallery';

// Plugins
import lgThumbnail from 'lightgallery/plugins/thumbnail'
import lgZoom from 'lightgallery/plugins/zoom'

const gallery = document.getElementById('dynamic-gallery');

if (gallery) {
  const baseDir = `${window.location.protocol}//${window.location.host}`;
  const path = gallery.dataset.path;
  const galleryImages = gallery.querySelectorAll('img');
  const galleryData = [];

  galleryImages.forEach((img, index) => {
    const src = `${baseDir}/img/${path}/${index}.webp`;
    const thumb = img.src;
    const subHtml = img.alt;
    galleryData.push({
      src,
      thumb,
      subHtml
    });
  });

  const dynamicGallery = lightGallery(gallery, {
    plugins: [lgZoom, lgThumbnail],
    licenseKey: '7EC452A9-0CFD441C-BD984C7C-17C8456E',
    speed: 500,
    dynamic: true,
    dynamicEl: galleryData,
  });

  const slides = document.querySelectorAll('.gallery-item');

  slides.forEach((slide, index) => {
    slide.addEventListener('click', () => {
      dynamicGallery.openGallery(index);
    });
  });
}