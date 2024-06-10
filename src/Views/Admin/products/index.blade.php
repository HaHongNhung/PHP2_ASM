@extends('layouts.master')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th>EXCERPT</th>
                <th>CATEGORY</th>
                <th>
                    ACTION
                </th>
            </tr>
        </thead>
        <tbody>
           
            @foreach ($products as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['name']}}</td>
                <td>{{$item['price']}}</td>
                <td>{{$item['excerpt']}}</td>
                
                    <td>{{$categories['name']}}</td>
                
                <td>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection

@section('title')
    Danh sách sản phẩm
@endsection