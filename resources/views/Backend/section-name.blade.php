@extends('Backend.layouts.app')
@section('body')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>Section Title</li>
            </ul>
        </div>
    </section>
    @if (session('success'))
        <p style="text-align: center; background-color: #a7ffbc; height: 30px; color: black; font-weight: bold">{{ session('success')}}</p>
    @endif
    <section class="section main-section" >
        <div class="card" style="margin-left: 20%; margin-right: 20%">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-ballot"></i></span>
                    Forms
                </p>
            </header>
            <div class="card-content">
                <form action="{{ route('section.update') }}" method="POST">
                    @csrf
                    <div class="field">
                        <div class="field">
                            <label class="label">Resume Title:</label>
                            <div class="control">
                                <input class="input" value="{{old('resume_title', $section->resume_title ?? '')}}"  name="resume_title" type="text" placeholder="Enter Resume Title" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Resume Description:</label>
                            <div class="control">
                                <input class="input" value="{{old('resume_description', $section->resume_description ?? '')}}"  name="resume_description" type="text" placeholder="Enter Resume Description " required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div class="field">
                            <label class="label">Services Title:</label>
                            <div class="control">
                                <input class="input" value="{{old('services_title', $section->services_title ?? '')}}"   name="services_title" type="text" placeholder="Enter Services Title" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Services Description:</label>
                            <div class="control">
                                <input class="input" value="{{old('services_description', $section->services_description ?? '')}}"   name="services_description" type="text" placeholder="Enter Services Description" required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div class="field">
                            <label class="label">Skills Title:</label>
                            <div class="control">
                                <input class="input" value="{{old('Skills_title', $section->Skills_title ?? '')}}"   name="Skills_title" type="text" placeholder="Enter Skills Title" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Skills Description:</label>
                            <div class="control">
                                <input class="input" value="{{old('skills_description', $section->skills_description ?? '')}}"   name="skills_description" type="text" placeholder="Enter Skills Description" required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div class="field">
                            <label class="label">Projects Title:</label>
                            <div class="control">
                                <input class="input" value="{{old('projects_title', $section->projects_title ?? '')}}"  name="projects_title" type="text" placeholder="Enter Projects Title" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Projects Description:</label>
                            <div class="control">
                                <input class="input" value="{{old('projects_description', $section->projects_description ?? '')}}"  name="projects_description" type="text" placeholder="Enter Projects Description" required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="field grouped" style="margin-top: 10px">
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

