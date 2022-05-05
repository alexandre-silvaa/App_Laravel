@include('admin.includes.alerts')

@csrf
<div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Nome" value="{{ $product->name ?? old('name') }}">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="description" placeholder="Descrição" value="{{ $product->description ?? old('price') }}">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="price" placeholder="Preço" value="{{ $product->price ?? old('description') }}">
</div>
<div class="form-group">
    <input type="file" class="form-control" name="image" >
</div>
<button class="btn btn-sm btn-success" type="submit">Enviar</button>