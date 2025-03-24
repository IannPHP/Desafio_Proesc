@extends('layouts.default')

@section('conteudo')

<br>
<div class="col-8 m-auto">
    <form method="POST" action="{{ url("produtos/{$product->id}") }}">
        @csrf
        @method('PUT')

        <legend>Produtos - {{ $product ? 'Editar' : 'Salvar' }}</legend>

        @if($errors->any())
        <div class="alert alert-danger">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Erro!</strong>
            <ul>
                @foreach($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Digite o nome do produto" required value="{{ old('name', $product->name) }}">
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea id="description" name="description" class="form-control" rows="3">{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Preço</label>
            <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="text" id="price" name="price" class="form-control" required value="{{ old('price', $product->price) }}">
            </div>
        </div>

        <div class="form-group">
            <label for="category_id">Categoria</label>
            <select id="category_id" name="category_id" class="form-select" required>
                <option value="{{ $product->category_id }}" selected>{{ $product->category->name ?? 'Selecione uma categoria' }}</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="d-grid gap-2 mt-3">
            <button class="btn btn-primary btn-lg" type="submit">Salvar</button>
        </div>
    </form>
</div>

@stop
