<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Portfolio|tailwind css</title>
</head>
<body class="font-nunito dark:">
    {{-- into section --}}
    <div class="h-1/2 lg:h-screen bg-gradient-to-t from-indigo-200 relative overflow-hidden">
        {{-- navbar --}}
        <nav class="w-full fixed top-0 bg-white z-10 dark:bg-slate-900">
            <div class="container mx-auto py-5 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <img class="w-8" src="/asset/logo.png" alt="">
                    <span class="text-2xl font-blod text-indigo-900">Portwind.</span>
                </div>
                <ul class="hidden md:flex space-x-10 text-gray-600 font-bold text-sm uppercase">
                    <li class="hover:text-gray-500">
                        <a href="#">Homepage</a>
                    </li>
                    <li class="hover:text-gray-500">
                        <a href="#about">About me</a>
                    </li>
                    <li class="hover:text-gray-500">
                        <a href="#services">Services</a>
                    </li>
                    <li class="hover:text-gray-500">
                        <a href="#works">Works</a>
                    </li>
                    <li class="hover:text-gray-500">
                        <a href="#contact">contact</a>
                    </li>
                </ul>
                <img src="/asset/moon.png" class="hidden md:block w-5 cursor-pointer" alt="">
                <div id="hamburger" class="space-y-1 md:hidden cursor-pointer z-20">
                    <div class="w-6 h-0.5 bg-black"></div>
                    <div class="w-6 h-0.5 bg-black"></div>
                    <div class="w-6 h-0.5 bg-black"></div>
                </div>
                <ul id="menu" class="hidden bg-indigo-900 absolute left-0 top-0 w-full p-10 rounded-b-3xl space-y-10 text-white text-center">
                    <li class="hover:text-gray-500">
                        <a id="hLink" href="#">Homepage</a>
                    </li>
                    <li class="hover:text-gray-500">
                        <a id="hLink" href="#about">About me</a>
                    </li>
                    <li class="hover:text-gray-500">
                        <a id="hLink" href="#services">Services</a>
                    </li>
                    <li class="hover:text-gray-500">
                        <a id="hLink" href="#works">Works</a>
                    </li>
                    <li class="hover:text-gray-500">
                        <a id="hLink" href="#contact">contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        {{-- intro-contente --}}
        {{-- image --}}
        <img class="absolute bottom-0 right-0 lg:left-0 mx-auto h-5/6 object-cover" src="/asset/man.png"  alt="">
        {{-- circle --}}
        <div class="hidden lg:block absolute -bottom-1/4 right-0 left-0 mx-auto w-big h-big bg-indigo-900 rounded-full -z-10"></div>
        {{-- animated text --}}
        <div class="absolute top-1/3 left-5 text-xl sm:left-10 sm:text-4xl md:left-1/4 md:text-6xl lg:left-5 xl:left-48 xl:text-7xl font-bold">
            <span class="text-gray-600">Frelance</span>
            <p id="text" class="text-red-500"></p>
        </div>
        {{-- texts --}}
        <div class="hidden lg:flex flex-col gap-5 rounded-md shadow-lg absolute top-0 bottom-0 m-auto right-10 bg-white p-6 h-fit w-1/3">
            <h1 class="text-4xl font-bold text-indigo-900">Hi, I'm John</h1>
            <p class="to-gray-400">
                I'm a freelance web developer, graphic designer, and photographer specializing in user-friendly interfaces. I build high-quality websites and applications using modern technologies. My passion for creating meaningful experiences and helping people achieve their goals is infectious.
            </p>
            <a class="bg-indigo-600 text-white text-xl px-3 py-2 rounded-md font-semibold w-fit" href="#contact">Hire me!</a>
        </div>
    </div>
    {{-- about --}}
    <div id="about" class="px-10">
        <div class="container mx-auto py-40 flex-col-reverse lg:flex-row items-center gap-20 flex">
            {{-- left --}}
            <div class="relative">
                <img class="h-1/4 absolute left-0 -z-10" src="/asset/dots.png" alt="">
                <div class="h-full rounded-full overflow-hidden">
                    <img src="/asset/portrait.png" alt="">
                </div>
            </div>
            {{-- right --}}
            <div class="my-auto flex flex-col gap-3">
                <h1 class="text-indigo-600 font-bold">ABOUT ME</h1>
                <h1 class="text-3xl font-medium">Better Design</h1>
                <h1 class="text-3xl font-medium">Better Expérience</h1>
                <p class="text-gray-400">
                    I'm a freelance graphic designer, web developer, and photographer. My expertise lies in creating visually appealing and user-friendly interfaces. I strive to deliver high-quality work that not only meets your needs but also helps you grow as a person.
                </p>
                <h2 class="text-gray-400 font-medium">HTML</h2>
                <div class="w-full bg-gray-200 h-1.5 rounded-md">
                    <div class="w-full h-1.5  bg-indigo-600 rounded-md"></div>
                </div>
                <h2 class="text-gray-400 font-medium">Javascript</h2>
                <div class="w-full bg-gray-200 h-1.5 rounded-md">
                    <div class="w-4/6 h-1.5  bg-indigo-600 rounded-md"></div>
                </div>
                <h2 class="text-gray-400 font-medium">React</h2>
                <div class="w-full bg-gray-200 h-1.5 rounded-md">
                    <div class="w-5/6 h-1.5  bg-indigo-600 rounded-md"></div>
                </div>
                
            </div>
        </div>
    </div>
    {{-- services --}}
    <div id="services">
        <div class="container mx-auto">
            {{-- top --}}
            <div class="flex flex-col gap-3 items-center"> 
                <h1 class="text-indigo-600 font-bold">SERVICES</h1>
                <h1 class="text-3xl">What do I offer?</h1>
                <p class="w-1/2 text-center text-gray-400">I specialize in creating high-quality websites, applications, and digital experiences. My services include web design, graphic design, user experience (UX/UI) design, and mobile app development. I am able to help you plan, develop, and deliver your projects to maximum satisfaction.</p>
            </div>
            {{-- Bottom --}}
            <div class="p-5 sm:p-0 flex flex-wrap justify-between">
                {{-- card --}}
                <div class="w-full md:w-4/12 shadow-xl rounded-lg my-3 md:my-10 p-5 flex flex-col gap-3">
                    <img class="w-10" src="/asset/icon.png" alt="">
                    <h1 class="font-medium text-lg">UX / UI Design</h1>
                    <p class="text-gray-400">I create intuitive and user-friendly interfaces that help users achieve their goals. I analyze your needs, gather feedback, and iterate on your designs to create a beautiful and engaging user experience.</p>
                    <a class="text-indigo-600 font-semibold text-sm" href="#">Read more</a>
                </div>
                {{-- card --}}
                <div class="w-full md:w-4/12 shadow-xl rounded-lg my-3 md:my-10 p-5 flex flex-col gap-3">
                    <img class="w-10" src="/asset/icon.png" alt="">
                    <h1 class="font-medium text-lg">UX / UI Design</h1>
                    <p class="text-gray-400">I create intuitive and user-friendly interfaces that help users achieve their goals. I analyze your needs, gather feedback, and iterate on your designs to create a beautiful and engaging user experience.</p>
                    <a class="text-indigo-600 font-semibold text-sm" href="#">Read more</a>
                </div>
                {{-- card --}}
                <div class="w-full md:w-4/12 shadow-xl rounded-lg  my-3 md:my-10 p-5 flex flex-col gap-3">
                    <img class="w-10" src="/asset/icon.png" alt="">
                    <h1 class="font-medium text-lg">UX / UI Design</h1>
                    <p class="text-gray-400">I create intuitive and user-friendly interfaces that help users achieve their goals. I analyze your needs, gather feedback, and iterate on your designs to create a beautiful and engaging user experience.</p>
                    <a class="text-indigo-600 font-semibold text-sm" href="#">Read more</a>
                </div>
                {{-- card --}}
                <div class="w-full md:w-4/12 shadow-xl rounded-lg my-3 md:my-10 p-5 flex flex-col gap-3">
                    <img class="w-10" src="/asset/icon.png" alt="">
                    <h1 class="font-medium text-lg">UX / UI Design</h1>
                    <p class="text-gray-400">I create intuitive and user-friendly interfaces that help users achieve their goals. I analyze your needs, gather feedback, and iterate on your designs to create a beautiful and engaging user experience.</p>
                    <a class="text-indigo-600 font-semibold text-sm" href="#">Read more</a>
                </div>
                {{-- card --}}
                <div class="w-full md:w-4/12 shadow-xl rounded-lg my-3 md:my-10  p-5 flex flex-col gap-3">
                    <img class="w-10" src="/asset/icon.png" alt="">
                    <h1 class="font-medium text-lg">UX / UI Design</h1>
                    <p class="text-gray-400">I create intuitive and user-friendly interfaces that help users achieve their goals. I analyze your needs, gather feedback, and iterate on your designs to create a beautiful and engaging user experience.</p>
                    <a class="text-indigo-600 font-semibold text-sm" href="#">Read more</a>
                </div>
                {{-- card --}}
                <div class="w-full md:w-4/12 shadow-xl rounded-lg my-3 md:my-10  p-5 flex flex-col gap-3">
                    <img class="w-10" src="/asset/icon.png" alt="">
                    <h1 class="font-medium text-lg">UX / UI Design</h1>
                    <p class="text-gray-400">I create intuitive and user-friendly interfaces that help users achieve their goals. I analyze your needs, gather feedback, and iterate on your designs to create a beautiful and engaging user experience.</p>
                    <a class="text-indigo-600 font-semibold text-sm" href="#">Read more</a>
                </div>

            </div>
        </div>
    </div>

      {{-- Works --}}
      <div id="works" class="py-40">
        <div class="container mx-auto">
            {{-- top --}}
            <div class="flex flex-col gap-3 items-center"> 
                <h1 class="text-indigo-600 font-bold">PORTFOLIO</h1>
                <h1 class="text-3xl">Works & projects</h1>
                <p class="w-1/2 text-center text-gray-400">I am a freelance web developer and graphic designer. I specialize in creating high-quality websites, applications, and digital experiences. My portfolio showcases some of my projects that I have completed.</p>
            </div>
            {{-- Bottom --}}
            <div class="p-5 sm:p-0 flex flex-wrap justify-between">
                {{-- card --}}
                <div class="w-full md:w-4/12 lg:w-1/5 shadow-xl rounded-lg my-3 md:my-10 p-5 m-1">
                    <img src="/asset/item.png" alt="">
                </div>
                {{-- card --}} 
                <div class="w-full md:w-4/12 lg:w-1/5 shadow-xl rounded-lg  my-3 md:my-10 p-5 m-1">
                    <img src="/asset/item.png" alt="">

                </div>
                {{-- card --}}
                <div class="w-full md:w-4/12 lg:w-1/5 shadow-xl rounded-lg my-3 md:my-10 p-5 m-1">
                    <img src="/asset/item.png" alt="">

                </div>
                {{-- card --}}
                <div class="w-full md:w-4/12 lg:w-1/5 shadow-xl rounded-lg my-3 md:my-10  p-5 m-1">
                    <img src="/asset/item.png" alt="">

                </div>
                {{-- card --}}
                <div class="w-full md:w-4/12 lg:w-1/5 shadow-xl rounded-lg my-3 md:my-10  p-5 m-1">
                    <img src="/asset/item.png" alt="">

                </div>
                {{-- card --}}
                <div class="w-full md:w-4/12 lg:w-1/5 shadow-xl rounded-lg my-3 md:my-10  p-5 m-1">
                    <img src="/asset/item.png" alt="">

                </div>
                {{-- card --}}
                <div class="w-full md:w-4/12 lg:w-1/5 shadow-xl rounded-lg my-3 md:my-10  p-5 m-1">
                    <img src="/asset/item.png" alt="">

                </div>
                {{-- card --}}
                <div class="w-full md:w-4/12 lg:w-1/5 shadow-xl rounded-lg my-3 md:my-10  p-5 m-1">
                    <img src="/asset/item.png" alt="">

                </div>

            </div>
        </div>
    </div>

    {{-- contact --}}
    <div id="contact">
        <div class="container mx-auto">
            {{-- top --}}
            <div class="flex flex-col gap-3 items-center"> 
                <h1 class="text-indigo-600 font-bold">CONTACT</h1>
                <h1 class="text-3xl">Have a Question?</h1>
                <p class="w-1/2 text-center text-gray-400">I'd love to hear from you! Send me a message or reach out to me via social media or email. I'm always here to help you with your projects.</p>
        </div>
        {{-- bottom --}}
        <form class="mt-5 p-8 flex flex-col gap-5 items-center">
            <input class="p-2 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm" type="text" placeholder="Name Surname">
            <input class="p-2 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm" type="email" placeholder="Email">
            <textarea class="p-2 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm" cols="30" rows="10" placeholder="Message..."></textarea>
            <button class="w-1/2 bg-indigo-600 text-white font-medium px-3 py-2 rounded-md cursor-pointer" type="submit">Submit</button>
        </form>
    </div>

    {{-- footer --}}
    <div class="w-full bg-gray-800">
        <div class="container mx-auto py-5 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <img class="w-8" src="/asset/logo.png" alt="">
                <span class="text-2xl font-blod text-white">Portwind.</span>
            </div>
          <span class="hidden md:block font-medium text-white">&copy;Portwind.Design with by Lama Dev.</span>
           <div class="flex gap-2">
                <img class="w-4 cursor-pointer" src="/asset/facebook.png" alt="">
                <img class="w-4 cursor-pointer" src="/asset/logo-instagram-noir-png.png" alt="">
                <img class="w-4 cursor-pointer" src="/asset/twitter.png" alt="">
                <img class="w-4 cursor-pointer" src="/asset/linkedin.png" alt="">
           </div>
    </div>
    <script src="app.js"></script>
    <script src="autotyping.js"></script>
</body>
</html>