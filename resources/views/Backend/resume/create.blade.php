@extends('Backend.layouts.app')
@section('body')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>Resume</li>
            </ul>
        </div>
    </section>
    @if (session('success'))
        <p style="text-align: center; background-color: #a7ffbc; height: 30px; color: black; font-weight: bold">{{ session('success')}}</p>
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
                <form action="{{ route('resume.store') }}" method="POST">
                    @csrf
                    <div class="field">
                        <label class="label">Course Name:</label>
                        <div class="control">
                            <input class="input"  name="course_name" type="text" placeholder="Enter Course name" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Institute Name:</label>
                        <div class="control">
                            <input class="input"  name="institute_name" type="text" placeholder="Enter Institute name" required>
                        </div>
                    </div>
                        <div class="field" style="margin-top: 5px">
                            <label class="label">Description:</label>

                            <div class="control">
                                <input class="input"  name="description" type="text" placeholder="Enter your Designation">
                            </div>
                        </div>
                    <div class="flex ">
                        <div class="field">
                            <label class="label">First Year:</label>
                            <div class="control">
                                <input class="input"  name="first_year" type="number" placeholder="Enter First Year " required>
                            </div>
                        </div>
                        <div class="field " style="margin-left: 5px">
                            <label class="label">Final Year:</label>
                            <div class="control">
                                <input class="input"  name="final_year" type="number" placeholder="Enter Final Year ">
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

