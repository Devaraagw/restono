const lantai1Selector = document.querySelector('#lantai1');
const lantai2Selector = document.querySelector('#lantai2');
const lantai1Rooms = document.querySelector('#lantai1-rooms');
const lantai2Rooms = document.querySelector('#lantai2-rooms');

lantai1Selector.addEventListener('click', () => {
    lantai1Selector.classList.add('active-header');
    lantai2Selector.classList.remove('active-header');
    lantai1Rooms.style.display = 'flex'; // Menampilkan kamar lantai 1
    lantai2Rooms.style.display = 'none'; // Menyembunyikan kamar lantai 2
});

lantai2Selector.addEventListener('click', () => {
    lantai2Selector.classList.add('active-header');
    lantai1Selector.classList.remove('active-header');
    lantai2Rooms.style.display = 'flex'; // Menampilkan kamar lantai 2
    lantai1Rooms.style.display = 'none'; // Menyembunyikan kamar lantai 1
});
