const openFilterButton = document.getElementById('openFilter');
const filterModal = document.getElementById('filterModal');

openFilterButton.addEventListener('click', function() {
    if (filterModal.style.display === 'none' || filterModal.style.display === '') {
        filterModal.style.display = 'block'; 
    } else {
        filterModal.style.display = 'none'; 
    }
});

// Lógica para os botões "Aplicar" e "Limpar" (você pode expandir isso conforme necessário)
document.querySelector('.apply-button').addEventListener('click', function() {
    alert('Filtros aplicados!');
});

document.querySelector('.clear-button').addEventListener('click', function() {
    alert('Filtros limpos!');
    filterModal.style.display = 'none';
});
