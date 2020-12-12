@extends('layouts.admin_master')
@section('title','Blog')
@section('content')
<h1 class="h3 mb-1 text-gray-800">All Blog</h1><br>
<div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="{{action('admin\Blog1Controller@create')}}"class="btn btn-sm btn-primary">Create</a></h6>
            </div>
            <div class="card-body">
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Image</th>
                  <th scope="col">Category</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $i=1;
                @endphp
                  @foreach ($blogs as $row)
                  <tr>
                    <th scope="row">{{$i++}}</th>
                    
                    <td>
                      @if($row->imageName=='default.jpg')
                      <img width="50" height="30"src="{{asset('public/image/default.png')}}"alt="">
                      @else
                      <img width="50" height="30"src="{{asset('public/uploads/blogs/'.$row->imageName)}}"alt="">
                      @endif
                    </td>
                    <td>{{$row->category->name}}</td>
                    <td>{{$row->title}}</td>
                    <td>{{str_limit($row->description,15,'----')}}</td>
                    <td class="text-right">
                    <a href="{{action('admin\Blog1Controller@update_page',['id'=>$row->id])}}" class="btn btn-sm btn-primary">Edit</a> || <a onclick="return confirm('Are you sure to delete?')" href="{{action( 'admin\Blog1Controller@delete',['id'=>$row->id])}}"class="btn btn-sm btn-danger">Del</a>
                    </td>
                </tr> 
                
                  @endforeach
                    
              </tbody>
            </table>
            </div>
          </div>
@endsection
