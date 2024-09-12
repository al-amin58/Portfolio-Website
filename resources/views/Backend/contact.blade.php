@extends('Backend.layouts.app')
@section('body')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>Contact </li>
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
                <form action="{{ route('contact.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex justify-between">
                        <div>
                            <div class="field">
                                <label class="label">Title:</label>
                                <div class="control">
                                    <input class="input"  value="{{old('title', $contact->title ?? '')}}" name="title" type="text" placeholder="Enter Section Title " required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Description:  <span style="font-size: small; color: red">max(30 word)</span> </label>
                                <div class="control">
                                    <input class="input"  value="{{old('description', $contact->description ?? '')}}" name="description" type="text" placeholder="Enter description" required >
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Address:</label>
                                <div class="control">
                                    <input class="input"  value="{{old('address', $contact->address ?? '')}}" name="address" type="text" placeholder="Enter Address " required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Number:</label>
                                <div class="control">
                                    <input class="input"  value="{{old('number', $contact->number ?? '')}}" name="number" type="number" placeholder="Enter Phone number " required >
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Email:</label>
                                <div class="control">
                                    <input class="input"  value="{{old('email', $contact->email ?? '')}}" name="email" type="email" placeholder="Enter email" required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Website :</label>
                                <div class="control">
                                    <input class="input"  value="{{old('website', $contact->website ?? '')}}" name="website" type="text" placeholder="Enter Website " required>
                                </div>
                            </div>
                            <hr>
                            <div class="card" style="margin-top: -50px">
                                <div class="card-content flex">
                                    <div class="field">
                                        <label class="label">Image:</label>
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
                                        @if($contact && $contact->image)
                                            <img src="{{asset('storage/' . $contact->image)}}" class="rounded" style="width: 100px; height: 100px" >
                                        @endif
                                    </div>
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
