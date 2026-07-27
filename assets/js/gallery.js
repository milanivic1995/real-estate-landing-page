const mainImage = document.querySelector('.gallery__main-image');
const thumbnails = document.querySelectorAll('.gallery__thumb');
const prevArrow = document.querySelector('.gallery__arrow--prev');
const nextArrow = document.querySelector('.gallery__arrow--next');

let currentIndex = 0;

function updateGallery(index) {
	const thumb = thumbnails[index];

	mainImage.src = thumb.dataset.fullSrc;
	mainImage.alt = thumb.dataset.alt;
	mainImage.removeAttribute('srcset');
	mainImage.removeAttribute('sizes');

	thumbnails.forEach((t) => t.classList.remove('gallery__thumb--active'));
	thumb.classList.add('gallery__thumb--active');

	currentIndex = index;
}

thumbnails.forEach((thumb, index) => {
	thumb.addEventListener('click', () => updateGallery(index));
});