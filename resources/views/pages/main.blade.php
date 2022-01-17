@extends('layout.app')

@section('title','Main')

@section('content')
    <div class="wrapper">
        <aside class="sidebar">
            <div class="sidebar__wrapper">
                <div class="photos" alt="your">
                    <img src="@if(!empty($profile->photo)) {{ asset('/storage/'.$profile->photo) }} @endif"
                         width="150px" alt="">

                    <h3 class="your"></h3>
                </div>
                <section class="contact">
                    <h3>Contact</h3>
                    <p>@if(!empty($profile->phone)) {{ $profile->phone }} @endif</p>
                    <p>@if(!empty($user->email)) {{ $user->email }} @endif</p>
                    <p>@if(!empty($profile->country)) {{ $profile->country }} @endif</p>
                    @if(!empty($profile->instagram))
                        <p><a href="{{ $profile->instagram }}"
                              title="Instagram"><i class="fa fa-instagram"
                                                   aria-hidden="true"></i>{{$url_get}}
                            </a>
                        </p>
                    @endif
                </section>
                <section class="education">
                    <h3>Education</h3>
                    <div class="education">
                        @if(!empty($educations))
                            @foreach($educations as $education)
                                <p> {{ $education}} </p>
                            @endforeach
                        @endif
                    </div>
                </section>
                <section class="skills">
                    <h3>Skills</h3>
                    <ul class="list">
                        @if(!empty($skills))
                            @foreach($skills as $skill)
                                <li>{{ $skill}}</li>
                            @endforeach
                        @endif
                    </ul>
                </section>
            </div>
        </aside>
        <div class="main">
            <div class="conteiner">
                <div class="conteiner__wrapper">
                    <h1>@if(!empty($user->name)) {{ $user->name }} @endif</h1>
                    <h3>web developer</h3>
                </div>
            </div>
            <section class="profile">
                <h3 class="hist">Profile</h3>
                <p>@if(!empty($profile->profile)) {{ $profile->profile }} @endif</p>
            </section>
            <section class="prof_exp">
                <h3 class="hist">Professional experiance</h3>
                <p>@if(!empty($profile->prof_exp)) {{ $profile->prof_exp }} @endif</p>
            </section>
        </div>
    </div>
@endsection
