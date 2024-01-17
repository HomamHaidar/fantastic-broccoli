@extends('layouts.master')
@section('css')

    @section('title')
       {{trans('Students_trans.Study_Fees')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('Students_trans.Study_Fees')}}
    @stop
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <a href="{{route('Fees.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">  {{trans('Students_trans.Add_Study_Fees')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr class="alert-success">
                                            <th>#</th>
                                            <th>{{trans('Students_trans.name')}}</th>
                                            <th>{{trans('Students_trans.amount')}}</th>
                                            <th>{{trans('Students_trans.Grade')}}</th>
                                            <th>  {{trans('Students_trans.classrooms')}}</th>
                                            <th>  {{trans('Students_trans.academic_year')}}</th>
                                            <th>  {{trans('Students_trans.Notes')}}</th>
                                            <th>  {{trans('Students_trans.Type_of_fees')}}</th>
                                            <th>  {{trans('Students_trans.Processes')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($fees as $fee)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$fee->title}}</td>
                                                <td>{{ number_format($fee->amount, 2) }}</td>
                                                <td>{{$fee->grade->Name}}</td>
                                                <td>{{$fee->classroom->Name_Class}}</td>
                                                <td>{{$fee->year}}</td>

                                                    <td>{{$fee->description}}</td>
                                                    <td>
                                                    @if($fee->Fee_type==1)
                                                            {{trans('Students_trans.Study_Fees')}}
                                                    @else
                                                            {{trans('Students_trans.Bus_Fees')}}
                                                    @endif
                                                    </td>
                                                <td>
                                                    <a href="{{route('Fees.edit',$fee->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete_Fee{{ $fee->id }}" title="{{ trans('Grades_trans.Delete') }}"><i class="fa fa-trash"></i></button>
                                                    <a href="#" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i class="far fa-eye"></i></a>

                                                </td>
                                            </tr>
                                        @include('pages.Fees.Delete')
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')

@endsection