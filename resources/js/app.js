import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);



document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('button[data-action="delete"]');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            if (!confirm('Sei sicuro di voler eliminare questo progetto?')) {
                event.preventDefault();
            }
        });
    });
});

