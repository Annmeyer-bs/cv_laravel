@extends('layout.app')

@section('title','Main')

@section('content')
    <div class="wrapper">
        <aside class="sidebar">
            <div class="sidebar__wrapper">
                <div class="photos" alt="your">
                    <img src="" width="150px" alt="">

                    <h3 class="your"></h3>
                </div>
                <section class="contact">
                    <h3>Contact</h3>
                    <p><a href="" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </p>
                </section>
                <section class="education">
                    <h3>Education</h3>
                    <div class="education">
                    </div>
                </section>
                <section class="skills">
                    <h3>Skills</h3>
                    <ul class="list">
                    </ul>
                </section>
            </div>
        </aside>
        <div class="main">
            <div class="conteiner">
                <div class="conteiner__wrapper">
                    <h1></h1>
                    <h3>web developer</h3>
                </div>
            </div>
            <section class="profile">
                <h3 class="hist">Profile</h3>
                <p></p>
            </section>
            <section class="proexp">
                <h3 class="hist">Professional experiance</h3>
                <p></p>
            </section>
        </div>
    </div>
@endsection
