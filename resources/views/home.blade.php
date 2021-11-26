@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif
    <form method="post" action="{{route('addData')}}">
      @csrf
      <h2>Employee Details</h2><br>
      <div class="form-group">
        <label>Id</label>
        <input type="number" name="e_id" class="form-control">
      </div> 
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="e_name" class="form-control">
      </div> 
      <div class="form-group">
        <label>Employee Email address</label>
        <input type="email" name="e_email" class="form-control">
      </div> 
      <div class="form-group">
        <label>Manager Email Address</label>
        <input type="email" name="manager_email" class="form-control">
      </div>
      <br>
      <div class="form-group">
        <h2>Task Details</h2><br>
        <div class="form-group">
          <label>Monday</label>
          <input type="text" name="t_mon" class="form-control">
        </div>
  
        <div class="form-group">
          <label>Tuesday</label>
          <input type="text" name="t_tue" class="form-control">
        </div>
  
        <div class="form-group">
          <label>Wednesday</label>
          <input type="text" name="t_wed" class="form-control">
        </div>
  
        <div class="form-group">
          <label>Thursday</label>
          <input type="text" name="t_thu" class="form-control">
        </div>
  
        <div class="form-group">
          <label>Friday</label>
          <input type="text" name="t_fri" class="form-control"> 
        </div>
      </div>
      <br>
      <div class="form-group"></div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
