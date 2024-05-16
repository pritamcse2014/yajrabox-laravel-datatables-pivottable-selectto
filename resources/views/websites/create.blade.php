@extends('layouts.app2')

@section('content')
<div class="container">
    <h2>Create Website</h2>
    <form method="POST" action="{{ route('websites.store') }}"  >
    @csrf
        <div class="form-group">
            <label for="customer">Customer:</label>
            <select class="form-control" id="e9" name="customer_id[]" multiple="multiple">
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->customer_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mt-3">
            <label for="website_name">Website Name</label>
            <input type="text" class="form-control" id="website_name" name="website_name" >
        </div>

        <div class="form-group mt-3">
            <label for="website_url">Website URL</label>
            <input type="text" class="form-control" id="website_url" name="website_url" >
        </div>

        <div class="form-group mt-3">
            <label for="website_bill">Website Bill</label>
            <input type="number" class="form-control" id="website_bill" name="website_bill" >
        </div>

        <div class="form-group mt-3">
            <label for="website_end_date">Website End Date</label>
            <input type="date" class="form-control" id="website_end_date" name="website_end_date" >
        </div>

        <div class="mt-2">
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </div>
    </form>

</div>
@endsection

@section('scripts')
    <script>
        //select 2
        $(document).ready(function() {
            $("#e9").select2({
                placeholder:"Search Customer",
                allowClear:true,
            });
        });
    </script>
@endsection