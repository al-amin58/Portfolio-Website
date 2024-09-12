@extends('Backend.layouts.app')

@section('body')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>Service Create</li>
            </ul>
        </div>
    </section>
    @if (session('success'))
        <p style="text-align: center; background-color: #a7ffbc; height: 30px; color: black; font-weight: bold">{{ session('success')}}</p>
    @endif
    <section class="section main-section">
        <div class="card" style="margin-right: 30%; margin-left: 30%">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-ballot"></i></span>
                    Forms
                </p>
            </header>
            <div class="card-content">
                <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="field">
                        <label class="label">Name:</label>
                        <div class="control">
                            <input class="input" name="name" type="text" placeholder="Enter Service Name">
                        </div>
                        <hr>
                        <div class="card" style="margin-top: -50px">
                            <div class="card-content flex">
                                <div class="field">
                                    <label class="label">Icon<span style="font-weight: normal; font-size: small; color: red">  Only png icon*</span></label>
                                    <div class="field-body">
                                        <div class="field file">
                                            <label class="upload control button blue">
                                                <a class="button blue">Upload:</a>
                                                <input type="file" name="image">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field grouped">
                            <div class="control">
                                <button type="submit" class="button green">Submit</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </section>
@endsection
