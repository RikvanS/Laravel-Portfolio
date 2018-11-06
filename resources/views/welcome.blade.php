@extends('layout')
@section('title')
@section('content')

<body class="main-page">
        <section class="hero">
                <div class="hero-inner">
                    <h1>Hi, I'm Rik. </h1>
                    <h2> I'm a trainee junior webdeveloper based in Groningen, the Netherlands.</h2>
                    <a href="#contact-form" class="btn">Contact me!</a>
                </div>
        </section>


<div class="contentmain">
            <section>
                <span class="header2"><h2>About me</h2></span>
                <img src="/images/resizedpicture.jpg" class="mainpagepicture">
            <p>My journey into learning how to code started in september of 2018 with the basic Sololearn modules. After a hackathon pre-selection,
            I was welcomed into the CodeGorilla bootcamp. By Christmas 2018 the bootcamp will be complete and I should know enough to get started as a junior webdeveloper!
            Coding has always appealed to me, I think it's as close to magic we can get: Creating something out of nothing but words!</p>
            
            </section>

            <section>
            
            <span class="header2"><h2>My strengths</h2></span>
            
            <span class="header3"><h3>Analytical mind</h3></span>

            <p>Throughout my entire life I have been able to break down problems into easily solvable component parts, as well as look at complex situations and understand them with relative ease.</p>
            
            <span class="header3"><h3>Determination</h3></span>

            <p>No matter how complex a problem might be, or how long it takes me to figure it out, I don't give up. I also don't bash my head against a brick wall without progress.
            Instead, I'll take a short break from whatever I'm doing and come back from a different perspective.</p>

            <span class="header3"><h3>Creative spirit</h3></span>

            <p>Rather than copy-paste existing things without second thought, I always look at the entire project first to see if there's anything that could be better, neater, cleaner or simpler. 
            Partly thanks to my inexperience and lack of ingrained patterns I have a lot more creative freedom and a fresher perspective. </p>
            
            </section>
            <section>
            <span class="header2"><h2>Reach out and contact me!</h2></span>
            <p class="final-par">Regardless of whether you want to collaborate on a project, bounce ideas off me, hire me for a project or even just grab coffee, feel free to drop me a line.
            I'm always up for talking code!</p>

            <form action="action_page.php" method="POST" id="contact-form">
                    <div>
                    <label for="fullname">Name</label>
                    <input type="text" id="fullname" name="Name" placeholder="Your name here" required>
                    </div>
                <div>
                    <label for="mailaddress">E-mail</label>
                    <input type="email" id="mailaddress" name="email" placeholder="Your e-mail here" required>
                </div>
                <div>
                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write your message here"></textarea>
                </div>
                <div class="button">
                    <button type="submit">Send your message!</button>
                </div>
                </form>
                </section>  

@endsection