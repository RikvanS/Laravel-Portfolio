@extends('layout')

@section('title', 'Contact page')


@section('content')
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