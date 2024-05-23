document.addEventListener('DOMContentLoaded', function () {
    const showPetsBtn = document.getElementById('show-pets');
    const showClientsBtn = document.getElementById('show-clients');
    const petsContainer = document.getElementById('pets-container');
    const clientsContainer = document.getElementById('clients-container');

    showPetsBtn.addEventListener('click', function () {
        petsContainer.style.display = 'block';
        clientsContainer.style.display = 'none';
    });

    showClientsBtn.addEventListener('click', function () {
        clientsContainer.style.display = 'block';
        petsContainer.style.display = 'none';
    });

    // Inicializa com a aba de pets ativa
    showPetsBtn.click();
});
