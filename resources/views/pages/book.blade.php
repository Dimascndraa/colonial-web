@extends('layouts.main')

@section('container')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
   * {
      margin: 0;
   }
</style>
<div class="container mt-5">
   <h1 class="fw-bold fs-1 d-inline-block border-primary border-b-4">Booking Details</h1>
   <form action="" class="mt-5">
      <div class="row justify-content-between">
         <div class="col-lg-6">
            <select class="form-select" aria-label="Default select example">
               <option selected>Open this select menu</option>
               <option value="1">One</option>
               <option value="2">Two</option>
               <option value="3">Three</option>
            </select>
         </div>
         <div class="col-lg-6">
            <select class="form-select" aria-label="Default select example">
               <option selected>Open this select menu</option>
               <option value="1">One</option>
               <option value="2">Two</option>
               <option value="3">Three</option>
            </select>
         </div>
      </div>
   </form>

</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>