@extends('layouts.app')
@section('content')

<div>
    <div style="text-align: center;">
        <form class="subform" method="post" action="{{ route('addStudent') }} " enctype="multipart/form-data">
            @csrf
            <!-- very important if you didn't insert CSRF, it not allow submit the data-->
            <p>
                <label for="stuID" class="label">Student ID</label>
                <input type="text" name="stuID" id="stuID">
            </p>
            <p>
                <label for="stuName" class="label">Student Name</label>
                <input type="text" name="stuName" id="stuName">
            </p>
            <p>
                <label for="stuEmail" class="label">Email</label>
                <input type="text" name="stuEmail" id="stuEmail">
            </p>
            <p>
                <label for="stuAddress" class="label">Address</label>
                <input type="text" name="stuAddress" id="stuAddress">
            </p>
            <p>
                Select photo to upload:
                <input type="file" class="form-control" name="product-image" value="">
            </p>
            <p>
                <label for="stuPhone" class="label">Phone Number</label>
                <input type="text" name="stuPhone" id="stuPhone">
            </p>
            <p>
                <input type="submit" name="insert" value="Insert">
            </p>
        </form>
    </div>
</div>
@endsection