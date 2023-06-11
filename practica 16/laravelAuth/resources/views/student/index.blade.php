@extends('layouts.app')

@section('template_title')
Student
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Student') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('students.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Address</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $student->fullname }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->address }}</td>

                                    <td>
                                        <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ route('students.show',$student->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success ms-2"
                                                href="{{ route('students.edit',$student->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm ms-2"><i
                                                    class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $students->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</div>
@endsection