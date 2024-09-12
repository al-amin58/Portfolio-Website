@extends('Backend.layouts.app')
@section('body')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>All Resumes</li>
            </ul>
            <a href="{{route('project.create')}}" class="button blue">
                <span class="icon"><i class="mdi mdi-credit-card-outline"></i></span>
                <span>New Item Add +</span>
            </a>
        </div>
    </section>
{{--    @if (session('success'))--}}
{{--        <p style="text-align: center; background-color: #a7ffbc; height: 30px; color: black; font-weight: bold">{{ session('success')}}</p>--}}
{{--    @endif--}}
{{--    @if (session('error'))--}}
{{--        <p style="text-align: center; background-color: red; height: 30px; color: white; font-weight: bold">{{ session('error')}}</p>--}}
{{--    @endif--}}

    <section class="section main-section">
        <div class="card has-table">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                    Resumes
                </p>
                <a href="#" class="card-header-icon">
                    <span class="icon"><i class="mdi mdi-reload"></i></span>
                </a>
            </header>
            <div class="card-content">
                <table>
                    <thead>
                    <tr>
                        <th class="checkbox-cell">
                            <label class="checkbox">
                                <input type="checkbox">
                                <span class="check"></span>
                            </label>
                        </th>
                        <th>Image</th>
                        <th>project name</th>
                        <th>project category</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $project)
                        <tr>
                            <td class="checkbox-cell">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </td>
                            <td class="image-cell">
                                <div class="image" style="width: 50px; height: 50px">
                                    <img src="{{asset('storage/' . $project->image)}}" >
                                </div>
                            </td>
                            <td data-label="Company">{{$project->project_name}}</td>
                            <td data-label="City">{{$project->project_category}}</td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <a href="{{route('project.edit',['id'=>$project->id])}}" class="button small green --jb-modal">
                                        <span class="icon"><i class="mdi mdi-account-edit"></i></span>
                                    </a>
                                    <form action="{{ route('project.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this resume?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button small red --jb-modal" data-target="sample-modal" type="submit">
                                            <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>


    </section>
@endsection
