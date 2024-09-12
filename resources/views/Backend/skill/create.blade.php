@extends('Backend.layouts.app')
@section('body')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>skill</li>
            </ul>
        </div>
    </section>
    @if (session('success'))
        <p style="text-align: center; background-color: #a7ffbc; height: 30px; color: black; font-weight: bold">{{ session('success')}}</p>
    @endif
    <section class="section main-section">
        <div class="card" style="margin-left: 30%; margin-right: 30%">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-ballot"></i></span>
                    Forms
                </p>
            </header>
            <div class="card-content">
                <form action="{{ route('skill.store') }}" method="POST">
                    @csrf
                    <div class="field">
                        <label class="label">Skill Name:</label>
                        <div class="control">
                            <input class="input"  name="skill_name" type="text" placeholder="Enter Skill name" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Percentage:</label>
                        <div class="control">
                            <input class="input"  name="percentage" type="text" placeholder="Enter Skill Percentage " required>
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

