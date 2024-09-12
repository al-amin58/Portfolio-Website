@extends('Backend.layouts.app')
@section('body')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>Hire </li>
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
            <div class="card-content" style="margin-left: 20%; margin-right: 20%">
                <form action="{{ route('hire.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex justify-between">
                        <div>
                            <div class="field">
                                <label class="label">Section Title:</label>
                                <div class="control">
                                    <input class="input"  value="{{old('title', $hire->title ?? '')}}" name="title" type="text" placeholder="Enter Section Title " required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Description:  <span style="font-size: small; color: red">max(30 word)</span> </label>
                                <div class="control">
                                    <input class="input"  value="{{old('description', $hire->description ?? '')}}" name="description" type="text" placeholder="Enter description" required >
                                </div>
                            </div>
                            <hr>
                            <div class="card" style="margin-top: -50px">
                                <div class="card-content flex">
                                    <div class="field">
                                        <label class="label">Image <span style="font-size: small; color: red">Banner Type</span></label>
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
                                        @if($hire && $hire->image)
                                            <img src="{{asset('storage/' . $hire->image)}}" class="rounded" style="width: 100px; height: 100px" >
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="field">
                                <label class="label">Awards Number:</label>
                                <div class="control">
                                    <input class="input"  value="{{old('awards', $hire->awards ?? '')}}" name="awards" type="number" placeholder="Enter awards number " required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Projects Number:</label>
                                <div class="control">
                                    <input class="input"  value="{{old('projects', $hire->projects ?? '')}}" name="projects" type="number" placeholder="Enter projects number " required >
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Customers Number:</label>
                                <div class="control">
                                    <input class="input"  value="{{old('customers', $hire->customers ?? '')}}" name="customers" type="number" placeholder="Enter customers number" required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Cups of Coffee Number :</label>
                                <div class="control">
                                    <input class="input"  value="{{old('coffee', $hire->coffee ?? '')}}" name="coffee" type="number" placeholder="Enter coffee number " required>
                                </div>
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
