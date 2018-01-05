@extends('layout.admin')
@section('content')
    @include('admin.users.notification')
    @if($users && count($users) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>شناسه </th>
                    <th> نام </th>
                    <th> ایمیل </th>
                    <th>موجودی کیف پول</th>
                    <th> عملیات </th>
                </tr>
            </thead>
            @foreach($users as $user)
                @include('admin.users.item',$user)
            @endforeach
        </table>
    @endif
@endsection