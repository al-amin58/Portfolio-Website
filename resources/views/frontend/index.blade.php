@extends('frontend.layouts.app')
@section('body')
    <section id="home-section" class="hero">
        <div class="home-slider  owl-carousel">
            <div class="slider-item">
                <div class="container">
                    <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                        <div class="one-third js-fullheight order-md-last img" style="background-image:url({{asset('storage/' . $hero->image)}})">
                            <div class="overlay"></div>
                        </div>
                        <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Hello!</span>
                                <h1 class="mb-4 mt-3">I'm <span>{{$hero->name}}</span></h1>
                                <h2 class="mb-4">{{$hero->designation}}</h2>
                                <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{asset('storage/' . $about->image)}})">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h1 class="big">About</h1>
                            <h2 class="mb-4">{{$about->section_name}}</h2>
                            <p>{{$about->description}}</p>
                            <ul class="about-info mt-4 px-md-0 px-2">
                                <li class="d-flex"><span>Name:</span> <span>{{$about->name}}</span></li>
                                <li class="d-flex"><span>Email:</span> <span>{{$about->email}}</span></li>

                            </ul>
                        </div>
                    </div>
                    <div class="counter-wrap ftco-animate d-flex mt-md-3">
                        <div class="text">
                            <p class="mb-4">
                                <span class="number" data-number="{{$hire->projects}}">{{$hire->projects}}</span>
                                <span>Project complete</span>
                            </p>
                            <p><a href="{{ route('about.downloadCv') }}" class="btn btn-primary py-3 px-3">Download CV</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb" id="resume-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Resume</h1>
                    <h2 class="mb-4">{{$sectionTitle->resume_title}}</h2>
                    <p>{{$sectionTitle->resume_description}}</p>
                </div>
            </div>
            <div class="row">
                @foreach($resumes as $resume)
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">{{$resume->first_year}}-{{$resume->final_year}}</span>
                        <h2>{{$resume->course_name}}</h2>
                        <span class="position">{{$resume->institute_name}}</span>
                        <p class="mt-4">{{$resume->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    <section class="ftco-section" id="services-section">
        <div class="container">
            <div class="row justify-content-center py-5 mt-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Services</h1>
                    <h2 class="mb-4">{{$sectionTitle->services_title}}</h2>
                    <p>{{$sectionTitle->services_description}}</p>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
							<span class="icon">
								<img src="{{asset('storage/' . $service->image)}}" style="width: 60px; height: 60px"  >
							</span>
                        <div class="desc">
                            <h3 class="mb-5">{{$service->name}}</h3>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="ftco-section" id="skills-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Skills</h1>
                    <h2 class="mb-4">{{$sectionTitle->Skills_title}}</h2>
                    <p>{{$sectionTitle->skills_description}}</p>
                </div>
            </div>
            <div class="row">
                @foreach($skills as $skill)
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>{{$skill->skill_name}}</h3>
                        <div class="progress">
                            <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$skill->percentage}}"
                                 aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->percentage}}%">
                                <span>{{$skill->percentage}}%</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Projects</h1>
                    <h2 class="mb-4">{{$sectionTitle->projects_title}}</h2>
                    <p>{{$sectionTitle->projects_description}}</p>
                </div>
            </div>
            <div class="row">
                @foreach($projects as $project)
                <div class="col-md-6">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{asset('storage/' . $project->image)}})">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">{{$project->project_name}}</a></h3>
                            <span>{{$project->project_category}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row d-md-flex align-items-center">
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="{{$hire->awards}}">{{$hire->awards}}</strong>
                            <span>Awards</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="{{$hire->projects}}">{{$hire->projects}}</strong>
                            <span>Complete Projects</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="{{$hire->customers}}">{{$hire->customers}}</strong>
                            <span>Happy Customers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="{{$hire->coffee}}">{{$hire->coffee}}</strong>
                            <span>Cups of coffee</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-hireme img margin-top" style="background-image: url({{asset('storage/' . $hire->image)}})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 ftco-animate text-center">
                    <h2>I'm <span>{{$hire->title}}</span> </h2>
                    <p>{{$hire->description}}</p>
                    <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Contact</h1>
                    <h2 class="mb-4">{{$contact->title}}</h2>
                    <p>{{$contact->description}}</p>
                </div>
            </div>

            <div class="row d-flex contact-info mb-5">
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <h3 class="mb-4">Address</h3>
                        <p>{{$contact->address}}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <h3 class="mb-4">Contact Number</h3>
                        <p><a href="tel://{{$contact->number}}">{{$contact->number}}</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <h3 class="mb-4">Email Address</h3>
                        <p><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <h3 class="mb-4">Website</h3>
                        <p><a href="{{$contact->website}}">{{$contact->website}}</a></p>
                    </div>
                </div>
            </div>

            <div class="row no-gutters block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="{{route('message.store')}}" method="POST" class="bg-light p-4 p-md-5 contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="message"  id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit"  class="btn btn-primary py-3 px-5">
                                Send Message
                            </button>
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <div class="img" style="background-image: url({{asset('storage/' . $contact->image)}});"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
