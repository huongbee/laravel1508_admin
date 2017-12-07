@extends('layout')
@section('title','Danh sách sản phẩm')
@section('content')
   <div class="panel panel-default">
        <div class="panel-heading"><b>Danh sách sản phẩm</b>
        </div>
        <div class="panel-body">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($foods as $food)
                    <tr>
                        <td>{{$food->name}}</td>
                        <td>{{$food->summary}}</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection