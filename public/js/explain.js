'use strict';

{
  const images = [
    'images2/explain01.png',
    'images2/explain02.png',
    'images2/explain03.png',
    'images2/explain04.png',
    'images2/explain05.png',
    'images2/explain06.png',
    'images2/explain07.png',
  ];

  let currentNum = 0;

  function setMainImage(image) {
    document.querySelector('main img').src = image;
  }

  setMainImage(images[currentNum]);

  function removeCurrentClass() {
    document.querySelectorAll('.thumbnails li')[currentNum]
      .classList.remove('current');
  }

  function addCurrentClass() {
    document.querySelectorAll('.thumbnails li')[currentNum]
      .classList.add('current');
  }

  const thumbnails = document.querySelector('.thumbnails');
  images.forEach((image, index) => {
    const li = document.createElement('li');
    if (index === currentNum) {
      li.classList.add('current');
    }

    li.addEventListener('click', () => {
      setMainImage(image);
      removeCurrentClass();
      currentNum = index;
      addCurrentClass();
    });

    const img = document.createElement('img');
    img.src = image;
    li.appendChild(img);
    thumbnails.appendChild(li);
  });

  const next = document.getElementById('next');
  next.addEventListener('click', () => {
    removeCurrentClass();
    currentNum++;
    if (currentNum === images.length) {
      currentNum = 0;
    }
    addCurrentClass();
    setMainImage(images[currentNum]);
  });

  const prev = document.getElementById('prev');
  prev.addEventListener('click', () => {
    removeCurrentClass();
    currentNum--;
    if (currentNum < 0) {
      currentNum = images.length - 1;
    }
    addCurrentClass();
    setMainImage(images[currentNum]);
  });

  let timeoutId;

  function playSlideshow() {
    timeoutId = setTimeout(() => {
      next.click();
      playSlideshow();
    }, 1000);
  }

  const play = document.getElementById('play');
  const pause = document.getElementById('pause');

  play.addEventListener('click', () => {
    play.classList.add('hidden');
    pause.classList.remove('hidden');
    playSlideshow();
  });

  pause.addEventListener('click', () => {
    play.classList.remove('hidden');
    pause.classList.add('hidden');
    clearTimeout(timeoutId);
  });
}