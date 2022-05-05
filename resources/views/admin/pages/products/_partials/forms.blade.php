@csrf
<div class="form-group">
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nome" value="{{ $product->name ?? old('name') }}">
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Descrição" value="{{ $product->description ?? old('price') }}">
    @error('description')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
<div class="form-group">
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Preço" value="{{ $product->price ?? old('description') }}">
    @error('price')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
<div class="form-group">
    <input type="file" class="form-control" name="image" >
</div>
<button class="btn btn-sm btn-success" type="submit">Enviar</button>