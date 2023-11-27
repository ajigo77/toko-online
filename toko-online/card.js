/*
    Ini untuk tooltip dari library jquery
    cara kerjanya adalah element apapun yang memiliki class
    data-toggle='tooltipe' akan mempunyai toltipe
*/
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

//Parent class
let previewContainer = document.querySelector('.products-preview');

// //Child class
let previewBox = document.querySelectorAll('.products-preview .preview');

document.querySelectorAll('.container .card').forEach(card => {
    card.onclick = () => {
        previewContainer.style.display = 'flex';
        let name = card.getAttribute('data-name');
        previewBox.forEach(preview => {
            let target = preview.getAttribute('data-target');
            if(name === target){
                preview.style.display = 'inline-block';
            } else {
                preview.style.display = 'none'; 
            }
        });
    }
});

previewBox.forEach(close => {
    close.querySelector('.fa-times').onclick = () => {
        previewContainer.style.display = 'none';
    };
});