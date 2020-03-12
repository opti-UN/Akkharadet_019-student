@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-header h3">
                แสดงข้อมูลนักศึกษาทั้งหมด{{ $count }} รายการ]
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>stu_code</th>
                        <th>stu_group_id</th>
                        <th>stu_pre</th>
                        <th>stu_fname</th>
                        <th>stu_lname</th>
                    </tr>
                    @foreach ($student as $student)
                    <tr>
                        <td>{{$student->stu_code}}</td>
                        <td>{{$student->stu_group_id}}</td>
                        <td>{{$student->stu_pre}}</td>
                        <td>{{$student->stu_fname}}</td>
                        <td>{{$student->stu_lname}}</td>
                    <td><a href="{{
                    url('/student/destroy/'.$student->id) }}">ลบ</a></td>
                    </tr>

                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
