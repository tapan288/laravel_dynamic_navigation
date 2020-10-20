@extends('backend.master')



@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $type == 'create' ? __('Add a Task') : __('Update Task') }}</h3>
                </div>
            </div>
            <div class="card card-info">
                <tasksForm></tasksForm>
            </div>
        </div>
    </div>
</div>

@endsection
