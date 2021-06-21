@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{ route('admin.products.index') }}"><img src={{ url('images/back.png') }} style="width:40px"></a>&nbsp;
        {{ trans('global.edit') }} {{ trans('global.product.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.products.update", [$product->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.product.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($product) ? $product->name : '') }}">
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('stock') ? 'has-error' : '' }}">
                <label for="stock">{{ trans('global.product.fields.stock') }}</label>
                <input type="text" maxLength="10" id="stock" name="stock" class="form-control" value="{{ old('stock', isset($product) ? $product->stock : '') }}">
                @if($errors->has('stock'))
                    <em class="invalid-feedback">
                        {{ $errors->first('stock') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.stock_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                <label for="price">{{ trans('global.product.fields.price') }}</label>
                <input type="text" maxLength="10" id="price" name="price" class="form-control" value="{{ old('price', isset($product) ? $product->price : '') }}" step="0.01">
                @if($errors->has('price'))
                    <em class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.price_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                <label for="image">{{ trans('global.product.fields.image') }}</label>
                <img src="{{ URL::to ('images/'.$product->image) }}" class="form-control" style="width:200px; height:auto;">
                @if($errors->has('image'))
                    <em class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </em>
                @endif
                <!-- <p class="helper-block">
                    {{ trans('global.product.fields.image_helper') }}
                </p> -->
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $('#stock').keydown(function(e){
        return AllowNumbersOnly(e);
    });

    $('#price').keydown(function(e){
        return AllowNumbersOnly(e);
    });

    function AllowNumbersOnly(e) {
        var code = (e.which) ? e.which : e.keyCode;
        if (code > 31 && (code < 48 || code > 57)) {
            e.preventDefault();
        }
    }
</script>
@endsection