import './bootstrap';
import 'bootstrap';

const hamburger = document.getElementById('hamburger')
const dropMenu = document.getElementById('dropMenu')
const dropList = document.getElementById('dropList')

hamburger.addEventListener('click', () => {
    dropMenu.classList.toggle('show')
    dropList.classList.toggle('show')
})
dropMenu.addEventListener('click', () => {
    dropMenu.classList.remove('show')
    dropList.classList.remove('show')
})

//gestione modal eliminazione
const deleteButtons = document.querySelectorAll('[data-bs-toggle="modal"]');
const confirmationButton = document.querySelector('#confirmationButton');

for(let deleteButton of deleteButtons) {

    deleteButton.addEventListener('click', e => {

        const action = e.target.getAttribute('data-action');

        confirmationButton.setAttribute('wire:click', action);

    });

};