@extends('layouts.app')
@section('body')
<style>
    @media (max-width:992px){
        #resume{
            margin-top:100px;
        }
    }
</style>
    <div class="auth">
        <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 col-12 d-flex flex-column justify-content-start">
                <h1 class="title"id="resume">Upload Your Resume</h1>
                
                <x-alert></x-alert>

                <p>All field(*) are mandatory.</p>
                <form action="{{ route('career.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" placeholder="Name" name="name"  class="col-12 box" required>
                    <input type="tel" placeholder="Mobile" name="mobile"  class="box col-12" required>
                    <input type="email" placeholder="Email" name="email"  class="box col-12" required>
                    <input type="text" placeholder="Skill" name="skill"class="box col-12" required>
                    <input type="text" placeholder="Qualification" name="qualification"  class="col-12 box" required>
                    <input type="file" placeholder="Upload Resume" name="resume" class="box col-12" required accept="application/pdf">
                    <input type="hidden" name="ip" value="{{ request()->ip() }}">
                    <button type="submit" class="btn mt-1">Send Resume</button>
                </form>
            </div>
            <div class="col-lg-6 col-12">
            <img src="{{('web/images/auth/signup.svg')}}" alt="singup">
            </div>
        </div>
        </div>
    </div>
@endsection