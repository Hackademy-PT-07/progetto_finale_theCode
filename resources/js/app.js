import './bootstrap';
import 'bootstrap';

const hamburger = document.getElementById('hamburger')
const dropList = document.getElementById('dropList')

// gestione menù
hamburger.addEventListener('click', () => {
    dropList.classList.toggle('show')
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
// creazione colori card
function colorGenerator(){
    let color1 = Math.floor(Math.random()*255);
    let color2 = Math.floor(Math.random()*255);
    let color3 = Math.floor(Math.random()*255);
    let opacity =Math.random().toFixed(2);
    let rgbaString = `rgba(${color1}, ${color2}, ${color3}, ${opacity})`;
    return rgbaString;
}