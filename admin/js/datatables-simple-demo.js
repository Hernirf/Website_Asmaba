window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById('datatablesSimple');
    const datatablesSimples = document.getElementById('datatablesSimple_kegiatan');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
        new simpleDatatables.DataTable(datatablesSimples);
    }
});