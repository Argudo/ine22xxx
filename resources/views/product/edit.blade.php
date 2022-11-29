@extends('templates.master')
@section('content-center')
@if(session()->has('success'))
<div class="alert alert-success">
{{ session()->get('success', null)[0] }}
</div>
@endif

@foreach ($errors->all() as $sError)
<div class="alert alert-warning">{{ $sError }}</div>
@endforeach
<div class="card">
<div class="card-header text-center font-weight-bold">
Datos del producto {{ $product->name }}
</div>
<div class="card-body">
<form name="edit-user-form" id="edit-user-form"
action="{{ route('product.update', ['product' => $product]) }}" method="post">
@method('PATCH')
@csrf
<div class="form-group">
<label for="name">{{ __('auth.Name') }}</label>
<input type="text" id="name" name="name"
class="form-control" required=""
value="{{ $product->name }}" />
<label for="company_id">{{ __('auth.Company') }}</label>
<select class="form-control" name="company_id" id="company_id" required>
<option value="">{{ __('auth.DoSelect') }}</option>
 @foreach($aCompany as $company)
    @if($product->company == $company)  
        <option value="{{ $company->id }}" selected>{{ $company->name }}</option>
    @else 
        <option value="{{ $company->id }}">{{ $company->name }}</option>
    @endif
 @endforeach
 </select>
<label for="description">Descripción</label>
<input type="text" id="description" name="description"
class="form-control" value="{{ $product->description }}" />
</div>
<button type="submit" class="btn btn-primary">{{
__('auth.Save') }}</button>
</form>
</div>
</div>
@endsection