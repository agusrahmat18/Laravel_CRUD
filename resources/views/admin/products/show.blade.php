@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('admin.products.index') }}"><img src={{ url('images/back.png') }} style="width:40px"></a>&nbsp;
        {{ trans('global.show') }} {{ trans('global.product.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.product.fields.name') }}
                    </th>
                    <td>
                        {{ $product->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.stock') }}
                    </th>
                    <td>
                        {!! $product->stock !!}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.price') }}
                    </th>
                    <td>
                        Rp.{{ number_format($product->price) }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.image') }}
                    </th>
                    <td>
                        <img src="{{ URL::to ('images/'.$product->image) }}" style="width:100px">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
