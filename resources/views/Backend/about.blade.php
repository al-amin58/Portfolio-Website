@extends('Backend.layouts.app')
@section('body')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>About </li>
            </ul>
        </div>
    </section>
    @if (session('success'))
        <p style="text-align: center; background-color: #a7ffbc; height: 30px; color: black; font-weight: bold">{{ session('success')}}</p>
    @endif
    @if (session('error'))
        <p style="text-align: center; background-color: red; height: 30px; color: white; font-weight: bold">{{ session('error')}}</p>
    @endif
    <section class="section main-section">
        <div class="card ">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-ballot"></i></span>
                    Forms
                </p>
            </header>
            <div class="card-content">
                <form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="field">
                            <label class="label">Section Name:</label>
                            <div class="control">
                                <input class="input"  value="{{old('section_name', $about->section_name ?? '')}}" name="section_name" type="text" placeholder="Enter Section name ">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Name:</label>
                            <div class="control">
                                <input class="input"  value="{{old('name', $about->name ?? '')}}" name="name" type="text" placeholder="Enter your name ">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Email:</label>
                            <div class="control">
                                <input class="input"  value="{{old('email', $about->email ?? '')}}" name="email" type="text" placeholder="ex@gmail.come">
                            </div>
                        </div>
                        <div class="field" style="margin-top: 5px">
                            <label class="label">description:  <span style="font-size: small; color: red">max(30 word)</span> </label>

                            <div class="control">
                                <input class="input"  value="{{old('description', $about->description ?? '')}}" name="description" type="text" placeholder="Enter description">
                            </div>
                        </div>
                        <hr>
                        <div class="card" style="margin-top: -50px">
                            <div class="card-content flex">
                                <div class="field">
                                    <label class="label">Image</label>
                                    <div class="field-body">
                                        <div class="field file">
                                            <label class="upload control button blue">
                                                <a class="button blue">
                                                    Upload:
                                                </a>
                                                <input type="file" name="image">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="image me-3" style="width: 100px; height: 100px; margin-left: 50px">
                                    @if($about && $about->image)
                                        <img src="{{asset('storage/' . $about->image)}}" class="rounded" style="width: 100px; height: 100px" >
                                    @endif
                                </div>
                                <div style="width: 5px; height: 100px; color: black; margin-left: 5px"></div>
                                <!-- Button to download CV -->
                                <div class="field" style="width: 200px; margin-left: 50px ">
                                    <label class="label">CV (PDF): </label>
                                    <div class="control">
                                        <input class="input" name="cv" type="file" placeholder="Enter description">
                                    </div>
                                </div>
                                <!---------download button------>
                                <div class="image me-3" style="width: 100px; height: 100px; margin-left: 50px">
                                    @if ($about && $about->cv)
                                        <a href="{{ route('about.downloadCv') }}" class="btn btn-primary button blue " >Download CV</a>
                                    @endif
                                </div>
                                <div class="image me-3" style="width: 100px; height: 100px; margin-left: 50px">
                                    @if($about && $about->cv)
                                        <img src="{{asset('storage/' . $about->cv)}}" class="rounded" style="width: 100px; height: 100px" >
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="field grouped">
                            <div class="control">
                                <button type="submit" class="button green">
                                    Submit
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>


    </section>

@endsection
