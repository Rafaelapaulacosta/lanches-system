function definirId(id) {

    console.log(id);

    const btn = document.getElementById('btnConfirmarExcluir');

    btn.href = `?rota=lanches-excluir&id=${id}`;
}