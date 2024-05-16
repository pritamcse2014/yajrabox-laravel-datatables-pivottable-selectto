@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Customer</h2>
    <form method="POST" action="{{ route('customers.store') }}">
        @csrf
        <div class="form-group  mt-3">
            <label for="customer_name">Customer Name</label>
            <input type="text" class="form-control" id="customer_name" name="customer_name" >
        </div>


        <div class="form-group mt-3">
            <label for="customer_email">Customer Email</label>
            <input type="email" class="form-control" id="customer_email" name="customer_email" aria-describedby="emailHelp" >

        </div>

        <div class="form-group  mt-3">
            <label for="customer_phone_no">Customer Phone Number</label>
            <input type="text" class="form-control" id="customer_phone_no" name="customer_phone_no" >
        </div>
        <div class="form-group  mt-3">
            <label for="customer_bill">Customer Bill</label>
            <input type="number" class="form-control" id="customer_bill" name="customer_bill" >
        </div>


    <div class="mt-2">

        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
    </div>
    </form>


</div>
@endsection