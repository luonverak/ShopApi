@extends('backend.backend_master')
@section('admin-content')
    <button class="btn btn-primary m-2 open-add-category">
        <i class="fa-solid fa-plus"></i>
        Add category
    </button>
    @include('modal.category')
@endsection
