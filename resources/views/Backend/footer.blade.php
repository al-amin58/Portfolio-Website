@extends('Backend.layouts.app')
@section('body')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>Footer </li>
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
            <div class="card-content" style="margin-left: 15%; margin-right: 15%">
                <form action="{{ route('footer.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex justify-between">
                        <div style="width: 100%;">
                            <div class="field" style="height:100px">
                                <label class="label">About Description:  <span style="font-size: small; color: red">max(30 word)</span> </label>
                                <div class="control" >
                                    <input class="input"  value="{{old('description', $footer->description ?? '')}}" name="description" type="text" placeholder="Enter About description" required style="height:80px" >
                                </div>
                            </div>
                            <div class="field" style="margin-top: 20px">
                                <label class="label">Address:</label>
                                <div class="control">
                                    <input class="input"  value="{{old('address', $footer->address ?? '')}}" name="address" type="text" placeholder="Enter your Address " required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Number:</label>
                                <div class="control">
                                    <input class="input"  value="{{old('number', $footer->number ?? '')}}" name="number" type="number" placeholder="Enter Phone number " required >
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Email:</label>
                                <div class="control">
                                    <input class="input"  value="{{old('email', $footer->email ?? '')}}" name="email" type="email" placeholder="Enter your email" required>
                                </div>
                            </div>
                        </div>
                        <div style="width: 100%; margin-left: 30px">
                            <div class="field">
                                <label class="label">Twitter-Link:</label>
                                <div class="control">
                                    <input class="input"  value="{{old('twitter', $footer->twitter ?? '')}}" name="twitter" type="text" placeholder="Enter your twitter link" required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Github-Link:</label>
                                <div class="control">
                                    <input class="input"  value="{{old('github', $footer->github ?? '')}}" name="github" type="text" placeholder="Enter your github link " required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Linkedin-Link:</label>
                                <div class="control">
                                    <input class="input"  value="{{old('linkedin', $footer->linkedin ?? '')}}" name="linkedin" type="text" placeholder="Enter your linkedin link" required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Facebook-Link:</label>
                                <div class="control">
                                    <input class="input"  value="{{old('facebook', $footer->facebook ?? '')}}" name="facebook" type="text" placeholder="Enter your email link" required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Instagram-Link:</label>
                                <div class="control">
                                    <input class="input"  value="{{old('instagram', $footer->instagram ?? '')}}" name="instagram" type="text" placeholder="Enter your instagram link" required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Youtube:</label>
                                <div class="control">
                                    <input class="input"  value="{{old('youtube', $footer->youtube ?? '')}}" name="youtube" type="text" placeholder="Enter your youtube link" required>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
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
