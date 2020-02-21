@extends('layouts.master')
@section('content')
    <div class="page-content">
        <div class="row">
            <h1>Thêm mới email</h1>
            <form action="/addemail" method="post">
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                     {!! csrf_field() !!}
                    <label for="description"></label>
                    <textarea id="form-field-11" class="autosize-transition form-control" name="ls_email" placeholder=" email|pass hoặc email|pass|recovery_email">{{ old('ls_email') }}</textarea>
                    @if($errors->has('description'))
                        <span class="help-block">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-default">Thêm</button>
            </form>
        </div>
    </div>
@endsection
