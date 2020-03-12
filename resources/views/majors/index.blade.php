@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-header h3">
                แแสดงรายชื่อสาขา{{ $count }} รายการ]
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>id</th>
                        <th>major_id</th>
                        <th>major_name</th>

                    </tr>
                    @foreach ($majors as $major)
                    <tr>
                        <td>{{$major->id}}</td>
                        <td>{{$major->major_id}}</td>
                        <td>{{$major->major_name}}</td>

                    <td><a href="{{
                    url('/student/destroy/'.$major->id) }}">ลบ</a></td>
                    </tr>

                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
