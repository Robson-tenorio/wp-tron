const photos = document.querySelectorAll('.photo');
const prevBtn = document.querySelector('.prevBtn');
const nextBtn = document.querySelector('.nextBtn');
let currentIndex = 0;

function showPhoto(index) {
  photos.forEach(photo => photo.classList.remove('active'));
  photos[index].classList.add('active');
}

function prevPhoto() {
  currentIndex = (currentIndex - 1 + photos.length) % photos.length;
  showPhoto(currentIndex);
}

function nextPhoto() {
  currentIndex = (currentIndex + 1) % photos.length;
  showPhoto(currentIndex);
}

prevBtn.addEventListener('click', prevPhoto);
nextBtn.addEventListener('click', nextPhoto);

showPhoto(currentIndex);