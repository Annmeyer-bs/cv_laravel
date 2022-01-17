@extends('layout.app')

@section('title','Edit')

@section('content')
    <div class="wrapper">
        <form action="{{route("edit-act")}}" method="post" enctype="multipart/form-data">
            @csrf
            <aside class="sidebar">
                <div class="sidebar__wrapper">
                    <div class="photos" alt="your">
                        <img src="@if(!empty($profile->photo)) {{ asset('/storage/'.$profile->photo) }} @endif" alt="">
                        <input class="photo" id="ifile" name="photo" type="file"
                               accept=".jpg, .jpeg, .png, .svg"><br>
                        <label class="co" for="ifile"></label>
                        <label class="in" for="ifile">File input here</label>
                    </div>
                    <section class="contact">
                        <h3>Contact</h3>
                        <input class="input" name="phone" type="tell" placeholder="  +380"
                               value="@if(!empty($profile->phone)) {{ $profile->phone }} @endif"><br>
                        <input class="input" name="email" type="email" placeholder="  test@gmail.com"
                               value="@if(!empty($user->email)) {{ $user->email }} @endif"><br>
                        <input class="input" name="country" type="text" placeholder="  Country, City, District"
                               value="@if(!empty($profile->country)) {{ $profile->country }} @endif"><br>
                        <input class="input" name="instagram" type="text" placeholder="  instagram.com/username"
                               value="@if(!empty($profile->instagram)) {{ $profile->instagram }} @endif"><br>
                    </section>
                    <section class="educations">
                        <h3>Education</h3>

                        <textarea class="textarea" name="education" type="text" placeholder=" Education section: In your resume, do not miss the chance to present an image of intelligence and self-improvement.
Separate your education with a delimiter - 	&ldquo;;&rdquo;"
                                  wrap="soft">@if(!empty($profile->education)) {{ $profile->education }} @endif</textarea>

                    </section>
                    <section class="skills">
                        <h3>Skills</h3>
                        <textarea class="textarea" name="skills"
                                  placeholder=" Separate your skills with a delimiter - 	&ldquo;,&rdquo;"
                                  wrap="soft">@if(!empty($profile->skills)) {{ $profile->skills }} @endif</textarea>
                    </section>
                </div>
            </aside>
            <div class="main">
                <div class="conteiner">
                    <div class="conteiner__wrapper">
                        <input class="input" name="name" type="text" placeholder=" Your Name"
                               value="@if(!empty($user->name)) {{ $user->name }} @endif"><br>
                        <h3>web developer</h3>
                        <button type="submit" name="edit_form">Сохранить изменения</button>
                        <br>
                    </div>

                </div>
                <section class="p">
                    <h3 class="hist">Profile</h3>
                    <textarea class="textarea" name="profile"
                              placeholder="  Dedicated Web Developer experienced in [top skills.&#10;Developed a [major web development accomplishment or project]. &#10;Enthusiastic about [web development interests].">@if(!empty($profile->profile)) {{ $profile->profile }} @endif</textarea>
                </section>
                <section class="p">
                    <h3 class="hist">Professional experiance</h3>
                    <textarea class="textarea" name="prof_exp"
                              placeholder="  Job title, Company Month, Year – Month, Year
[Action word] [skill/task] [result/impact]
[Action word] [skill/task] [result/impact]
                        ">@if(!empty($profile->prof_exp)) {{ $profile->prof_exp }} @endif</textarea>
                </section>
            </div>
        </form>
    </div>
@endsection
