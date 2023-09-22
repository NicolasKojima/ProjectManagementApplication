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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      .margin{
        margin-bottom: 25px;
      }

      .post-bottom-grid {
        margin-top: 5vh;
        display: grid;
        grid-template-columns: 90% 10%; 
        grid-template-rows: min-content; 
        position: relative;
      }
  

      .card {
        margin-bottom: 6vh;
      }

      .image-box {
        width: 50vw;
        height: 50vh;
        object-fit: contain;
        display: flex;
        justify-content: center;
      }

      .photo-name {
        max-width: 80px;  /* Set maximum width */
        max-height: 80px; /* Set maximum height */
        width: auto;      /* Allow automatic width adjustment */
        height: auto;     /* Allow automatic height adjustment */
        border-radius: 50%;
        object-fit: cover; /* Maintain aspect ratio and cover container */
    }
      


      .col {
        padding-bottom: 3vh;
      }

      .bd-placeholder-img {
        object-fit: cover;
        margin-left: 1vw;
      }
      
      .individual {
          display: grid;
          grid-template-columns: 10% 50% 40%;
          height: 80px;
        }


      .name {
          font-size: 7vh;
          grid-column: 2;
          display: flex;
          align-items: center;
          padding-top: 10px;
        }

      .skills {
        margin-left:2vw;
        margin-right:1vw;
        margin-bottom:1vw;
        height: auto;
        width: 95%;
      }

      .project-description {
        font-size: small;
        max-height: 200px; 
        overflow: auto;
        word-wrap: break-word;
        margin-top: 5vh;
        margin-right: 2vw;
      }

      .project-title{
        margin: 0;
        position: relative;
      }

      .header-grid {
        padding: 10px;
        display: grid;
        grid-template-columns: 60% 40%; 
        grid-template-rows: min-content; 
        position: relative;
      }

      .post-grid {
        margin-top: 5vh;
        display: grid;
        grid-template-columns: 60% 40%; 
        grid-template-rows: min-content; 
        position: relative;
      }

      .navbar-grid {
        width: 90vw;
        display: grid;
        grid-template-columns: 90% 10%; 
        grid-template-rows: min-content; 
        position: relative;
      }

      .project-description {
        font-size: small;
      }
       
      .editlink {
        text-align: center;
        grid-column: 3;
        padding-top: 25;
        display: flex; 
        justify-content: flex-end;
        margin-right: 3vw;
        margin-top: 5vh;
      }

      .text-muted {
        text-align: center;
        grid-column: 3;
        padding-top: 25;
        display: flex; 
        justify-content: flex-end;
        margin-right: 3vw;
        margin-top: 5vh;
      }

      .text-center {
        padding:0!important;
      }

      .company-intro{
        text-align: left;
        color: white;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .btn-primary {
      width:120px;
    }

    .btn-secondary {
      width:120px;
    }

    .links {
      display: flex;
      gap: 5px;
      justify-content: center;
      align-items: center; 
    }

    .project-blog {
      justify-content: center;
      align-items: center; 
    }


    </style>
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <main>
            <section class="">
            <div class="header-grid">
              <div class="project-blog">
                <h1 class="page-heading" style="font-size:x-large; padding-top: 12px; padding-left: 10px;"> DC Project Blog </h1>
              </div>
              <div class="links">
                <p>
                  <div class="link">
                    <a  href="post-project" class="btn btn-secondary my-2" > Post Project</a>
                  </div>
                </p>
              </div>
            </div>
            </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 g-1">
            @foreach  ($products->reverse() as $product)
              <div class="margin">
                <div class="card shadow-sm">
                  <div class="test">
                    <div class="individual">
                      <div class="photo-name">
                        <img style="border-radius: 50%; width: 80px; height: 80px;" src="<?php echo asset('/storage/image/'.$product->profilepic)?>" alt="Profile Picture">
                      </div>
                      <div class="name">
                        <p>{{$product->name}}</p>
                      </div>
                      <div>
                        <a class="editlink" href="{{ route('edit', $product->id) }}">Edit Form </a>
                        <small class="text-muted" >{{ $product->created_at->format('Y-m-d H:i:s') }}    </small>
                      </div>
                    </div>
                    <div class="post-grid">
                      <div class="image-box">
                        <img class="main-image" src="<?php echo asset('/storage/image/'.$product->image)?>" alt="Main Image"></img>
                      </div>
                      <div class="skills">
                        <h4 class="project-title"> {{$product->projname}} </h4>
                        <div class="project-description">
                          <p>{{$product->projdescription}}</p>
                        </div>
                      </div>
                    </div>  
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"/>                       
                    <div class="card-body">
                      <div class="post-bottom-grid">
                        <div class="skill-rele">
                          <h6 class="card-text">{{$product->skills}}</h6>
                          <p class="skill-desc"> {{$product->Relavance}}</p>
                        <div class="d-flex justify-content-between align-items-center"></div>
                        </div>  
                      </div>                    
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>

    <script>

      function del(){

        let text;
          if (confirm("Are you sure to delete ?") == true) {
              document.getElementById("del-form").submit();
          } else {
              return false;
          }
      }

      document.addEventListener("DOMContentLoaded", function() {
        const logoutForm = document.getElementById("logout-form");
        const logoutButton = document.getElementById("logout-button");

        logoutButton.addEventListener("click", function(event) {
            event.preventDefault();
            logoutForm.submit();
        });
    });
    </script>
                     
            </main>
        </div>
                
        @stack('modals')
        @livewireScripts
    </body>
</html>
