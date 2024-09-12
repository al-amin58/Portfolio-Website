@extends('Backend.layouts.app')
@section('body')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>Services</li>
            </ul>
            <a href="{{route('service.create')}}" class="button blue">
                <span class="icon"><i class="mdi mdi-credit-card-outline"></i></span>
                <span>New Item Add +</span>
            </a>
        </div>
    </section>
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
                        <th>Name</th>
                        <th>Icon</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $services as $service)
                        <tr>
                            <td class="checkbox-cell">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </td>
                            <td data-label="Name">{{$service->name}}</td>
                            <td class="image-cell">
                                <div class="image" style="width: 50px; height: 50px">
                                    <img src="{{asset('storage/' . $service->image)}}" >
                                </div>
                            </td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <a href="{{route('service.edit',['id' => $service->id])}}" class="button small green --jb-modal">
                                        <span class="icon"><i class="mdi mdi-account-edit"></i></span>
                                    </a>
                                    <form action="{{ route('service.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this resume?');">
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
