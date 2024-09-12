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
                <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="field">
                        <div>
                            <label class="label">Project Name:</label>
                            <div class="control">
                                <input class="input" value="{{$project->project_name}}" name="project_name" type="text" placeholder="Enter Project Name">
                            </div>
                        </div>
                        <div>
                            <label class="label">Project Category:</label>
                            <div class="control">
                                <input class="input" value="{{$project->project_category}}" name="project_category" type="text" placeholder="Enter Project Category">
                            </div>
                        </div>
                        <hr>
                        <div class="flex">
                            <div class="card" style="margin-top: -30px">
                                <div class="card-content flex">
                                    <div class="field">
                                        <label class="label">Project Image</label>
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
                            <div class="image" style="width: 150px; height: 100px; margin-left: 10px">
                                <img src="{{asset('storage/' . $project->image)}}">
                            </div>
                        </div>
                        <div class="field grouped">
                            <div class="control">
                                <button type="submit" class="button green">Update</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </section>
@endsection
