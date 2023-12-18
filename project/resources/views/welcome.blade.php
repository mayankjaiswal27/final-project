<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <link rel="stylesheet" href="globals.css" />
        
        <!-- Styles -->
        <style>
            /* Existing styles remain unchanged */
    
            .desktop .button {
                position: absolute;
                width: 150px;
                height: 50px;
                background-color: #6e58ff; /* Purple color */
                text-decoration: none;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
               
            }
    
            .desktop .overlap-group-wrapper {
                position: absolute;
                width: 189px;
                height: 57px;
                top: 759px;
                left: 771px;
            }
    
            .desktop .overlap-wrapper {
                position: absolute;
                width: 189px;
                height: 57px;
                top: 759px;
                left: 1148px;
            }
    
            /* Additional CSS for the Login and Sign-Up text */
            .desktop .text-wrapper-2,
            .desktop .text-wrapper-3 {
                position: absolute;
                top: 16px;
                font-family: "Inter-Regular", Helvetica;
                font-weight: 400;
                color: #6e58ff; /* Purple color */
                font-size: 20px;
                letter-spacing: 3.5px;
                line-height: normal;
                white-space: nowrap;
            }
            .desktop {
    background-color: #ffffff;
    display: flex;
    flex-direction: row;
    justify-content: center;
    width: 100%;
}
.desktop .div {
    background-color: #ffffff;
    width: 1440px;
    height: 1024px;
    position: relative;
}
.desktop .rectangle {
    position: absolute;
    width: 564px;
    height: 358px;
    top: 333px;
    left: 771px;
    background-color: #dde1ff;
    border-radius: 6px;
}
.desktop .group {
    position: absolute;
    width: 552px;
    height: 233px;
    top: 396px;
    left: 151px;
}
.desktop .text-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    font-family: "Poppins-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 35px;
    letter-spacing: 0;
    line-height: normal;
}
.desktop .p {
    position: absolute;
    width: 548px;
    top: 53px;
    left: 0;
    font-family: "Poppins-Regular", Helvetica;
    font-weight: 400;
    color: #a5a5a5;
    font-size: 20px;
    letter-spacing: 0;
    line-height: normal;
}
.desktop .overlap-group-wrapper {
    position: absolute;
    width: 189px;
    height: 57px;
    top: 759px;
    left: 771px;
}
.desktop .overlap-group {
    position: relative;
    width: 187px;
    height: 57px;
    background-image: url(./img/rectangle-6.svg);
    background-size: 100% 100%;
}
.desktop .text-wrapper-2 {
    position: absolute;
    top: 16px;
    left: 62px;
    font-family: "Inter-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 20px;
    letter-spacing: 3.5px;
    line-height: normal;
    white-space: nowrap;
}
.desktop .overlap-wrapper {
    position: absolute;
    width: 189px;
    height: 57px;
    top: 759px;
    left: 1148px;
}
.desktop .overlap {
    position: relative;
    width: 187px;
    height: 57px;
    background-image: url(./img/image.svg);
    background-size: 100% 100%;
}
.desktop .text-wrapper-3 {
    position: absolute;
    top: 16px;
    left: 48px;
    font-family: "Inter-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 20px;
    letter-spacing: 3.5px;
    line-height: normal;
    white-space: nowrap;
}
.desktop .text-wrapper-4 {
    position: absolute;
    top: 105px;
    left: 333px;
    font-family: "Inter-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 80px;
    letter-spacing: 14px;
    line-height: normal;
}



        </style>
      
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">



            

            
                <div class="desktop">
                    <div class="div">
                        <div class="rectangle"></div>
                        <div class="group">
                            <div class="text-wrapper">Project Management Website</div>
                            <p class="p">In the fast-paced world of project execution, seamless collaboration and efficient task
                                management are the cornerstones of success. Introducing [Your Project Management Platform], your
                                ultimate destination for empowering teams, streamlining workflows, and achieving project milestones
                                with ease.</p>
                        </div>
                        <div class="overlap-group-wrapper">
                            <div class="overlap">
                                <!-- <div class="text-wrapper-2">Login</div> -->
                            </div>
                            @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                                @else
                                    <button class="button"><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></button>
        
                                @endauth
                            </div>
                        @endif
                        </div>
                        <div class="overlap-wrapper">
                            <div class="overlap">
                                <!-- <div class="text-wrapper-3">Sign-Up</div> -->
                            </div>
                            @if (Route::has('register'))
                            <button class="button"><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></button>
                        @endif
                        </div>
                        <div class="text-wrapper-4">Project Manager</div>
                    </div>
                </div>
            

            
    </body>
</html>
