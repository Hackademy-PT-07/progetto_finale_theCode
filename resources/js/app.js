import './bootstrap';
import 'bootstrap';

const hamburger = document.getElementById('hamburger')
const dropMenu = document.getElementById('dropMenu')

hamburger.addEventListener('click', () => {
    dropMenu.classList.toggle('show')
})
