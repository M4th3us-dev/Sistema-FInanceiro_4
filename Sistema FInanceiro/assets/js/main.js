document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-button');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            const confirmDelete = confirm('Tem certeza de que deseja excluir esta transação?');
            if (!confirmDelete) {
                event.preventDefault();
            }
        });
    });
});
