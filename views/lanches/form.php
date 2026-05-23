<!DOCTYPE html>
<html lang="´pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Lanche</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>

<div class="container mt-5">
    <div class="card shadow p-4">

        <h3 class="mb-4">Cadastrar Lanche</h3>

        <form method="POST" action="index.php?rota=lanches-salvar">

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" value="<?= $lanche['nome'] ?? '' ?>" class="form-control" placeholder="Digite o nome do lanche" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Descrição</label>
                <input type="text" name="descricao" value="<?= $lanche['descricao'] ?? '' ?>" class="form-control" placeholder="Digite a descrição do lanche" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Preço</label>
                <input type="number" step="0.01" name="preco" value="<?= $lanche['preco'] ?? '' ?>" min="0" class="form-control" placeholder="Ex: 10.50" required>
            </div>

            <input type="hidden" name="id" value="<?= $lanche['id'] ?? '' ?>">

            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="index.php" class="btn btn-secondary">Voltar</a>

        </form>

    </div>


</div>


</body>















</html>