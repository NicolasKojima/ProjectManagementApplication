<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        <style>
            .navbar-grid {
                width: 100%;
                display: grid;
                grid-template-columns: 52% 12% 12% 12% 12%; 
                grid-template-rows: min-content; 
                position: relative;
            }

            .container-contents {
                width: 90vw;
                margin-right: auto;
                margin-left: auto;
                margin-top: 10px;
                background-color:black;
            }

            .slideshow{
                position: relative;
            }

            .prev,
            .next {
                cursor: pointer;
                position: absolute;
                top: 40%;
                width: auto;
                padding: 16px;
                margin-top: -100px;
                color: white;
                font-weight: bold;
                font-size: 20px;
                border-radius: 0 3px 3px 0;
                user-select: none;
                -webkit-user-select: none;
                }
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
                }

            .description {
                width: 100%;
                margin-left: 5vw;
                margin-right:10vw;
                overflow: auto;
                word-wrap: break-word;
                font-size:small;
            }

                .row:after {
                content: "";
                display: table;
                clear: both;
                }
            .exmaple-grid-container {
                margin-top:20px;
                outline: 2px solid black;
                display: inline-block;
                border-radius: 10px;
                box-shadow: 5px;
                background-color: white;
            }
            .example-grid {
                margin: 5vh;
                width: 90%;
                display: grid;
                grid-template-columns: 70% 30%; 
                height:30vw;
                /* margin-top: 5vh; */
            }

            .gallery-example {
                align-self: center;
                justify-content: center;
                width: 100%;
                height: 100%;
                overflow: hidden; /* Ensure content within the container doesn't overflow */
            }

            .slideshow-container {
                box-sizing: border-box;
                max-width: 100%; /* Use the full width of the parent container */
                width: 100%; /* Ensure it takes full width */
                max-height: 100%; /* Use the full height of the parent container */
                margin: auto; /* Center horizontally */
                position: relative;
            }

            .description-example{
                margin-left:3vw;
                margin-right:2vw;
                align-self: center;
                justify-content: center;
                width: 100%;
                height:100%;
                background-color: lightcyan;
                margin-top:5vh;
            }

            body {
                font-family: Arial;
                margin: 0;
                }


                img {
                vertical-align: middle;
                }

                /* Position the image container (needed to position the left and right arrows) */
                .container {
                position: relative;
                }

                /* Hide the images by default */
                .mySlides {
                display: none;
                object-fit:cover;
                width:100%;
                height:100%;
                }

                /* Add a pointer when hovering over the thumbnail images */
                .cursor {
                cursor: pointer;
                }

                .prev,
                .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                padding: 16px;
                margin-top: -50px;
                color: white;
                font-weight: bold;
                font-size: 20px;
                border-radius: 0 3px 3px 0;
                user-select: none;
                -webkit-user-select: none;
                background-color: grey;
                }

                /* Position the "next button" to the right */
                .next {
                position: absolute;
                right: 0;
                }




                /* On hover, add a black background color with a little bit see-through */
                .prev:hover,
                .next:hover {
                background-color: black;
                /* rgba(0, 0, 0, 0.8) */
                }

                /* Number text (1/3 etc) */
                .numbertext {
                color: #f2f2f2;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
                }

                /* Container for image text */
                .caption-container {
                text-align: center;
                background-color: #222;
                padding: 2px 0; /* Adjust the padding as needed */
                color: white;
                }

                .row:after {
                content: "";
                display: table;
                clear: both;
                }

                /* Six columns side by side */
                .column {
                float: left;
                width: 16.66%;
                }

                /* Add a transparency effect for thumnbail images */
                .demo {
                opacity: 0.6;
                }

                .active,
                .demo:hover {
                opacity: 1;
                }

                .row {
                max-height:100px !important;
                object-fit: cover !important;
                }

                .sub-image {
                max-height:100px !important;
                object-fit: cover !important;
                }

                .main-image {
                box-sizing: border-box;
                max-width: 100%;
                max-height: 100%;
                margin-right: auto;
                margin-left: auto;
                display: block; /* Make sure the images are displayed as block elements */
                margin: 0 auto;

                }

                .page-heading {
                    width: 100%;
                    height: 80px;
                }

                .descriptions{
                    height:100%;
                    width:90%;
                    margin-left:3vw;
                }

        

                .container {
                    max-width: 100%;
                    box-sizing: border-box;
                }

                .add-button{
                    right: 0;
                    font-size: 2vw;
                    max-width:20px
                }

                .content {
                    display: flex;
                    flex-wrap: wrap;

                    /* Additional styling for your content */
                }

                .project-name {
                    font-weight: bold;
                }
                
                .links {
                    display: grid;
                    grid-template-columns: 80% 8% 12%;
                    gap: 5px;
                    align-items: center;
                    justify-content: center;
                }

                .link {
                    display: flex;
                }

                .description-text{
                    font-size: small;
                    max-height: 20vw; 
                    overflow: auto;
                    word-wrap: break-word;
                    margin-top: 3vw;
                    margin-right: 2vw;
                }

                .table {
                    margin-bottom: 10vh;
                }

                .inside-table {
                    display:grid;
                    grid-template-columns:33% 33% 33%;
                }

        </style>
    </head>
    <body class="font-sans antialiased">
    @if (auth()->user()->hasRole('Guest'))
        @php
            header("Location: " . route('profiles'));
            exit;
        @endphp

    @endif
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <main>
                <div class="container">
                    <div class="content">
                        <div style="width: 100%; height: 55px; background-color: white; margin-top:10px;">
                            <h1 class="page-heading" style="font-size: x-large; padding-top: 10px; padding-left: 10px;"> Your Profile </h1>
                        </div>
                        @php
                            $userProducts = $products->filter(function ($data) {
                                return $data->created_by == auth()->user()->id;
                            });
                            $hasUserProducts = $userProducts->isNotEmpty();
                        @endphp

                        @if ($hasUserProducts)
                            <div class="exmaple-grid-container"> 
                                <div class="example-grid">
                                    <div class="gallery-example">
                                        <div class="slideshow-container">
                                            @php $slideIndex = 1; @endphp
                                            @php $hasData = false; @endphp
                                            @foreach ($products as $data)
                                                @if ($data->created_by == auth()->user()->id)
                                                    <div class="mySlides">
                                                        <div class="numbertext">{{ $slideIndex }} / {{ count($products) }}</div>
                                                        <img class="main-image" src="{{ asset('/storage/image/' . $data->image) }}" alt="Main Image">
                                                    </div>
                                                    @php $slideIndex++; @endphp
                                                    @php $hasData = true; @endphp
                                                @endif
                                            @endforeach
                                            @if ($slideIndex > 1)
                                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                                                <a class="next" onclick="plusSlides(1)">❯</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="descriptions">
                                    @foreach ($products as $data)
                                        @if ($data->created_by == auth()->user()->id)
                                            <div class="project-description">
                                                <div class="project-name">{{ $data->projname }}</div>
                                                <div class="description-text">{{ $data->projdescription }}</div>
                                            </div>
                                        @endif
                                    @endforeach
                                    @if (!$hasData)
                                        <!-- Display a message when no data is available -->
                                        <div class="project-description">
                                            <div class="project-name">No data available</div>
                                            <div class="description-text">You haven't posted any products yet.</div>
                                        </div>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        @endif

                        <script>
                            let slideIndex = 1;
                            showSlides(slideIndex);

                            function plusSlides(n) {
                                showSlides((slideIndex += n));
                            }

                            function showSlides(n) {
                                let i;
                                let slides = document.getElementsByClassName("mySlides");
                                let projectDescriptions = document.getElementsByClassName("project-description");

                                if (n > slides.length) {
                                    slideIndex = 1;
                                }
                                if (n < 1) {
                                    slideIndex = slides.length;
                                }

                                for (i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";
                                }

                                for (i = 0; i < projectDescriptions.length; i++) {
                                    projectDescriptions[i].style.display = "none";
                                }

                                slides[slideIndex - 1].style.display = "block";
                                projectDescriptions[slideIndex - 1].style.display = "block";
                            }
                        </script>

                        <div class="container">
                            <div class="links" style="margin-top: 70px;">
                                <div class="link" >
                                    <h2 class="h2 text-center">Skills</h2>
                                </div>
                                <div class="link">
                                    <div class="add-button">
                                        <a href="skillform" class="btn btn-primary my-2" style="white-space: nowrap;">Add Skill</a>
                                    </div>
                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr class="inside-table">
                                        <th>Name</th>
                                        <th>Allocated time</th>
                                        <th>Proficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($skills as $skill)
                                        @if($skill->skill_id == auth()->user()->id)
                                        <tr class="inside-table">
                                            <td>{{ $skill->name }}</td>
                                            <td>{{ $skill->allocated_time}}</td>
                                            <td>{{ $skill->proficiency_level}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="links">
                                <div class="link">
                                    <h2 class="h2 text-center">Project Schedule</h2>
                                </div>
                                <div class="link">
                                    <div class="add-button">
                                        <a href="create-new-event" class="btn btn-primary my-2 n" style="white-space: nowrap;">Add Event</a>
                                    </div>
                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr  class="inside-table">
                                        <th>Title</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($events as $event)
                                        @if($event->user_id == auth()->user()->id)
                                        <tr class="inside-table">
                                            <td>{{ $event->project_name }}</td>
                                            <td>{{ $event->event_start }}</td>
                                            <td>{{ $event->event_end }}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                        </table>
                            
                        </div>
            </main>
        </div>
                
        @stack('modals')
        @livewireScripts
    </body>
</html>
