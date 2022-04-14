@extends('layouts.layouts')
@section('header', 'catalog')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{url('catalogs/create')}}" class="btn btn-sm btn-primary pull-right">Create New Catalogs</a>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Name</th>
                        <th>Total Books</th>
                        <th>Create At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($catalogs as$key => $catalog)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$catalog->name}}</td>
                            <td class="text-center">{{count($catalog->books)}}</td>
                            <td>{{date('d M Y'. strtotime($catalog->create_at))}}</td>
                            <td><a href="{{url('catologs/'.$catalog->id)}}"></a></td>
                        </tr>
                    @endforeach                    
                </tbody>
            </table>
        </div>

        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div>
    </div>
@endsection
