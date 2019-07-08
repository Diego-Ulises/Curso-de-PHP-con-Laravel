@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>New Report</h1>
        </div>
    </div> 
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Back</a>
        </div>
    </div>   
    <div class="row">
        <div class="col">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/expense_reports/{{ $report->id }}/sendMail" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Type a email" value="{{ old('email')}}">
                </div>
                <button class="btn btn-primary" type="submit">Send mail</button>
            </form>
        </div>
    </div>
</div>
@endsection