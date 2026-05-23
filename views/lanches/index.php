<?php if (!isset($lanches)) { echo "NAO VEIO DA CONTROLLER"; exit; } ?>


<?php require __DIR__ . '/../layout/header.php'; ?>
<?php require_once __DIR__ . '/../layout/modalExcluir.php'; ?>

<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Lanches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body> 

    <div class="container mt-5">
    <h1 class="mb-4">Lista de Lanches</h1>
    <a href="index.php?rota=lanches-cadastrar" class="btn btn-primary">Novo Lanche</a>

    <?php if (empty($lanches)): ?>
        <div class="alert alert-warning">
            <p>Nenhum lanche cadastrado.</p>
        </div>
    <?php else: ?>
        <div class="card shadow">
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($lanches as $lanche): ?>

                        <tr>
                            <td><?= $lanche['id'] ?></td>
                            <td><?= $lanche['nome'] ?></td>
                            <td><?= $lanche['descricao'] ?></td>
                            <td>R$ <?= number_format($lanche['preco'], 2, ',', '.') ?></td>
                            <td>
                                <a href="?rota=lanches-buscarporID&id=<?= $lanche['id'] ?>" 
                                   class="btn btn-sm btn-warning">
                                   ✏️ Editar
                                </a>
                                <button
                                   class="btn btn-sm btn-danger"

                                    data-bs-toggle="modal"
                                    data-bs-target="#modalExcluir"

                                    onclick="definirId(<?= $lanche['id'] ?>)">
                                    🗑️ Excluir

                               </button>
                             </td>
                        </tr>
                        
                    <?php endforeach; ?>
    

                </tbody>

                </table>

            </div>

        </div>
       <?php endif; ?>

    </div>

<script src="assets/js/modalExcluir.js"></script>


</body>

</html>