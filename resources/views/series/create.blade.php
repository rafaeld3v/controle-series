<x-layout title="Nova Série">
    <form action="/series/salvar" method="POST">
        @csrf
        <div class="mb-2">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>
