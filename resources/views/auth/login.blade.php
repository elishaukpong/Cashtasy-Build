@extends('layouts.authLayout')
@section('title')
    Sign Up | Cashtasy
@stop
@include('auth.authheader')
@section('auth-content')
<h2 class="text-center text-dark font-weight-bold my-4">Log In</h2>
<form action="">
    <div class="input-group my-4 mb-5 pb-2 border-bottom">
        <div class="input-group-prepend">
            {{-- SVG for User Icon --}}
            <span class="input-group-text text-input-custom" id="basic-addon1"> <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.64441 10.6948C11.3726 10.6948 13.5841 8.30103 13.5841 5.34741C13.5841 2.39368 11.3726 0 8.64441 0C5.91626 0 3.70471 2.39368 3.70471 5.34741C3.70471 8.30103 5.91626 10.6948 8.64441 10.6948ZM8.64441 2.67505C10.0088 2.67505 11.1143 3.87146 11.1143 5.34741C11.1143 6.82336 10.0088 8.01978 8.64441 8.01978C7.28003 8.01978 6.17456 6.82336 6.17456 5.34741C6.17456 3.87146 7.28003 2.67505 8.64441 2.67505ZM7.40955 14.7047C5.10791 14.7047 3.17444 16.408 2.62573 18.7129H14.6632C14.1145 16.408 12.181 14.7047 9.87939 14.7047H7.40955ZM1.23486 21.3878H16.054C16.736 21.3878 17.2889 20.7889 17.2889 20.0503C17.2889 15.6206 13.9717 12.0297 9.87939 12.0297H7.40955C3.31726 12.0297 0 15.6206 0 20.0503C0 20.7889 0.552856 21.3878 1.23486 21.3878Z" transform="translate(0.577759 0.0500488)" fill="#9FA7B3"/>
            </svg></span>
        </div>
        <input type="text" class="form-control text-input-custom" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    

    <div class="input-group my-4 mb-5 pb-2 border-bottom">
        <div class="input-group-prepend">
            {{-- SVG for Key Icon --}}            
            <span class="input-group-text text-input-custom" id="basic-addon1"> <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.87936 5.34651C9.87936 8.29912 7.66639 10.693 4.93845 10.693C2.21174 10.693 0 8.29912 0 5.34651C0 2.39256 2.21174 0 4.93845 0C7.66639 0 9.87936 2.39256 9.87936 5.34651Z" transform="translate(8.9873 1.74854)" stroke="#9FA7B3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M0 0L2.46984 2.67326" transform="translate(4.04761 17.7881)" stroke="#9FA7B3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M0 0L2.46984 2.67326" transform="translate(6.51746 15.1149)" stroke="#9FA7B3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M0 9.12382L8.02204 0" transform="translate(1.57776 11.3375)" stroke="#9FA7B3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg></span>
        </div>
        <input type="text" class="form-control text-input-custom" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    
    <input type="submit" value="Log In" class="btn btn-primary btn-block mb-5">
</form>

@stop
@section('auth-content-under')
<p class="text-white text-center small">Don't Have Account? <a href="#" class="font-weight-bold text-white">SIGN UP</a></p>
@stop