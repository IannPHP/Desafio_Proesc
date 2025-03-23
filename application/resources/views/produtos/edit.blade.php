@extends('layouts.default')

@section('conteudo')
<div class="col-8 m-auto">
    <br>
    <form name="formEdit" id="formEdit" method="POST" action="{{ route('produtos.update', $product->id) }}">
        @csrf
        @method('PUT')

        <fieldset>
            <legend>Editar Produto</legend>
            <div class="form-group">
                <label for="name" class="form-label mt-4">Nome</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Digite o nome do produto" value="{{ $product->name }}">
            </div>

            <div class="form-group">
                <label for="price" class="form-label mt-4">Preço</label>
                <input type="number" step="0.01" id="price" name="price" class="form-control" placeholder="Digite o preço" value="{{ $product->price }}">
            </div>

            <div class="form-group">
                <label for="category_id" class="form-label mt-4">Categoria</label>
                <select id="category_id" name="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="description" class="form-label mt-4">Descrição</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
            </div>
        </fieldset>

        <div class="d-grid gap-2">
            <br>
            <button class="btn btn-primary btn-lg">Editar</button>
        </div>
    </form>
</div>
@endsection