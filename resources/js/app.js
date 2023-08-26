import './bootstrap';
import 'bootstrap';

const hamburger = document.getElementById('hamburger')
const dropList = document.getElementById('dropList')

hamburger.addEventListener('click', () => {
    dropList.classList.toggle('show')
})
dropMenu.addEventListener('click', () => {
    dropList.classList.remove('show')
})

//gestione modal eliminazione
const modalButtons = document.querySelectorAll('[data-bs-toggle="modal"]');
const confirmationButton = document.querySelector('#confirmationButton');

for(let modalButton of modalButtons) {

    modalButton.addEventListener('click', e => {

        const action = e.target.getAttribute('data-action');

        confirmationButton.setAttribute('wire:click', action);

    });

};