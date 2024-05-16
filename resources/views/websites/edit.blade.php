@extends('layouts.app2')

@section('content')
<div class="container">
    <h2>Edit Website</h2>
    <form method="POST" action="{{ route('websites.update', ['website' => $website->id]) }}">
    @csrf
    @method('PUT') <!-- This line is crucial for Laravel to recognize it as an update request -->

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
            <input type="text" class="form-control" id="website_name" name="website_name" value="{{ $website->website_name }}">
        </div>

        <div class="form-group mt-3">
            <label for="website_url">Website URL</label>
            <input type="text" class="form-control" id="website_url" name="website_url" value="{{ $website->website_url }}">
        </div>

        <div class="form-group mt-3">
            <label for="website_bill">Website Bill</label>
            <input type="number" class="form-control" id="website_bill" name="website_bill" value="{{ $website->website_bill }}">
        </div>

        <div class="form-group mt-3">
            <label for="website_end_date">Website End Date</label>
            <input type="text" class="form-control" id="website_end_date" name="website_end_date" value="{{ $website->website_end_date }}">
        </div>

        <div class="mt-2">
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </div>
    </form>
</div>
<?php 
/*
    //here we need to send   @foreach ($customers as $customer) the keys of customer 
    // it will be like associative array and we know the keys are customer_id
    // we will get this by making punk('id')
    //step 1
    convert in array
    //step 2
    check if its converted in array 
    //step 3
    convert in jquery array so json format is needed for js or jquery 
    json_encode is done for the option 
$array = $website->customers->pluck('id')->toArray();
foreach ($array as $item) {
    echo $item."<br>";
} */
?>
@endsection

@section('scripts')
    <script>
        // Select2
        $(document).ready(function() {
            $("#e9").select2({
                placeholder: "Search customer",
                allowClear: true
            });
            // Pre-selecting values
            var selectedValues = {!! json_encode($website->customers->pluck('id')->toArray()) !!};
            $("#e9").val(selectedValues).trigger('change');
        });
    </script>
@endsection