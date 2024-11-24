<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Produto</h1>
        <form method="post" action="{{ route('produtos.update', $produto->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" value="{{ $produto->nome }}" required>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição:</label>
                <textarea class="form-control" name="descricao" id="descricao">{{ $produto->descricao }}</textarea>
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço:</label>
                <input type="number" step="0.01" class="form-control" name="preco" id="preco" value="{{ $produto->preco }}" required>
            </div>
            <div class="mb-3">
                <label for="estoque" class="form-label">Estoque:</label>
                <input type="number" class="form-control" name="estoque" id="estoque" value="{{ $produto->estoque }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
