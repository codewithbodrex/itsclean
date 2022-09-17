<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="./dist/output.css">
    <title>Landing Page</title>
</head>
<body class="font-Poppins">
    <!----Header-->
    <header>
        <nav class="container flex items-center py-4 mt-4 gap-12 sm:mt-12" >
            <div class="py-1">
                <h1 class="text-xl">ITS CLEAN</h1>
            </div>
            <ul class="hidden sm:flex flex-1 justify-center ml-24 items-center gap-12 text-darkBlack uppercase text-xs">
                <li class="cursor-pointer hover:text-green-500"><a href="./index.php">Home</a></li>
                <li class="cursor-pointer hover:text-green-500"><a href="#cycle">Cycle</a></li>
                <li class="cursor-pointer hover:text-green-500"><a href="#features">Features</a></li>
                <li class="cursor-pointer hover:text-green-500"><a href="#about">About</a></li>
                <li class="cursor-pointer hover:text-green-500"><a href="#download">Download</a></li>
                <!-- a tag inside in li tag -->
                <!-- <a href="./cartPage.php?username= "><li class="text-xl cursor-pointer hover:text-green-500 fas fa-cart-shopping"></li></a>
                <a href="./notifPage.php?username= "><li class="text-xl cursor-pointer hover:text-green-500 fa-regular fa-bell"></li></a>             -->
            </ul>
            <ul class="hidden sm:flex flex-1 justify-end items-center gap-6 text-darkBlack uppercase text-xs">
                <a href="#"><button type="button" class="bg-green-500 text-white rounded-md px-8 py-3 uppercase hover:bg-white hover:text-green-500 border-2 border-green-500 hover:border-green-500 transition duration-300">Login</button></a>
                <a href="#"><button type="button" class="border-2 text-green-500 border-green-500 rounded-md px-7 py-3 uppercase hover:bg-green-500 hover:text-white transition duration-300">Sign Up</button></a>
            </ul>
            <div class="flex sm:hidden flex-1 justify-end">
                <i class="text-xl hover:text-green-500 fas fa-bars"></i>
            </div>
        </nav>
    </header>

    <!--Hero-->
    <section id="cycle" class="relative">
        <div class="container flex flex-col-reverse lg:flex-row items-center gap-12 mt-14 lg:mt-20">
            <!-- content -->
            <div class="flex flex-1 flex-col items-center lg:items-start">
                <div class="grid grid-cols-2 gap-4">
                    <h2 class="text-darkBlack text-3xl md:text-4xl lg:text-5xl text-center lg:text-left mb-6">
                        Super Fast
                    </h2>
                    <h2 class="text-green-500 text-3xl md:text-4xl lg:text-5xl text-center lg:text-left mb-6">
                        Pick Up
                    </h2>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <h2 class="text-green-500 text-3xl md:text-4xl lg:text-5xl text-center lg:text-left mb-6">
                        Delivery
                    </h2>
                    <h2 class="text-darkBlack text-3xl md:text-4xl lg:text-5xl text-center lg:text-left mb-6">
                        Service
                    </h2>
                </div>
                <p class="text-darkGrey text-lg text-center lg:text-left mb-6">
                    Yuk kita mulai hidup bersih dengan membuang sampah pada tempatnya. Dengan membuang sampah pada tempatnya, kita dapat membuat lingkungan sekitar menjadi lebih bersih dan sehat.                </p>
                <div class="flex justify-center flex-wrap gap-6">
                    <button type="button" class="btn btn-purple hover:bg-white hover:text-green-500 border-2 hover:border-green-500"><a href="#">Cycle Now</a></button>
                    <button type="button" class="btn btn-white hover:bg-green-500 hover:text-white">Download App</button>
                </div>                
            </div>
            <!-- Image -->
            <div class="flex justify-center flex-1 mb-10 md:mb-16 lg:mb-0 z-10">
                <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="./img/icon1.jpg" alt="">
            </div>
        </div>
    </section>

    <!--Features-->
    <section id="features" class="bg-white py-20 mt-20 lg:mt-60">
        <!--Heading-->
        <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
            <h1 class="text-3xl text-center text-green-500">Features</h1>
            <p class="text-center text-darkGrey mt-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, saepe ducimus libero porro illum delectus accusamus incidunt nulla. Ipsa enim accusamus est voluptatem aspernatur, odit id ut nobis in excepturi!
            </p>
        </div>
        <!---Features #1-->
        <div class="relative mt-20 lg:mt-24">
            <div class="container flex flex-col lg:flex-row items-center justify-center gap-x-24">
                <!--Image-->
                <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="./img/icon2.jpg" alt="">
                </div>
                <div class="flex flex-1 flex-col items-center lg:items-start">
                    <h1 class="text-3xl text-green-500">
                        Get Your Income
                    </h1>
                    <p class="text-darkGrey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum enim dolorem eos provident earum consequuntur quae aut minus, doloribus consectetur, debitis modi eius obcaecati, esse neque aliquam! Neque, deserunt aut?
                    </p>
                    <button type="button" class="btn btn-purple hover:bg-white hover:text-green-500 border-2 hover:border-green-500"><a href="#">Clean ITS</a></button>
                </div>
            </div>
            <!--Rounded rectangle-->           
        </div>
        <!---Features #2-->
        <div class="relative mt-20 lg:mt-52">
            <div class="container flex flex-col lg:flex-row-reverse items-center justify-center gap-x-24">
                <!--Image-->
                <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="./img/icon3.jpg" alt="">
                </div>
                <div class="flex flex-1 flex-col items-center lg:items-start">
                    <h1 class="text-3xl text-green-500">
                        Eazy Pick up
                    </h1>
                    <p class="text-darkGrey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id sit nulla itaque officiis recusandae deleniti laboriosam consequatur porro? Necessitatibus provident cupiditate totam sapiente rem tempora consequuntur dolor saepe repudiandae sunt?
                    </p>
                    <button type="button" class="btn btn-purple hover:bg-white hover:text-green-500 border-2 hover:border-green-500"><a href="#">Clean ITS</a></button>
                </div>
            </div>
            <!--Rounded rectangle-->          
        </div>        
    </section>


    <!---About Us-->
    <section id="about" class="bg-white py-20 mt-20 lg:mt-60">
        <!--Heading-->
        <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
            <h1 class="text-3xl text-center text-green-500">About Us</h1>
            <p class="text-center text-darkGrey mt-4">
                Yuk kenalan lebih dekat dengan Pendiri IT'S clean
            </p>
        </div>
        <!---Features #1-->
        <div class="mt-20 lg:mt-24">
            <div class="container flex lg:flex-row flex-col items-center justify-center">
                <!--Image-->
                <div class="flex flex-col items-center justify-center mb-10 lg:mb-0">
                    <img style="width: 60%; height: 60%;" class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full mb-2" src="./img/xalvis.png" alt="">
                    <h2 class="text-center hover:text-green-500">Alvian Syiham R</h2>                                        
                </div>
                <div class="flex flex-col items-center justify-center mb-10 lg:mb-0">
                    <img style="width: 60%; height: 60%;" class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full mb-2" src="./img/xrena.png" alt="">
                    <h2 class="text-center hover:text-green-500">Regina Dwi A</h2>                                        
                </div>
                <div class="flex flex-col items-center justify-center mb-10 lg:mb-0">
                    <img style="width: 60%; height: 60%;" class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full mb-2" src="./img/xviqi.png" alt="">
                    <h2 class="text-center hover:text-green-500">Viqi Alvianto</h2>                                        
                </div>                                               
            </div>            
        </div>       
    </section>
    <!--Download-->
    <section id="download" class="py-20 mt-20">
        <!--Heading-->
        <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
            <h1 class="text-3xl text-center text-green-500">Download the app</h1>
            <p class="text-center text-darkGrey mt-4">
                Aplikasi IT'S clean bisa anda dapatkan melalui Play Store/App Store secara gratis
            </p>
        </div>
        <!--Cards-->
        <div class="container grid grid-cols-1 md:grid-cols-2 max-w-screen-lg mt-16 place-items-center">
            <!--Card 1-->
            <div class="flex flex-col rounded-md shadow-xl">
                <div class="flex flex-col items-center p-6">
                    <img class="h-1/2 w-1/2" src="./img/Android_Robot.png" alt="">
                    <h3 class="mt-5 mb-2 text-green-500 text-lg">Add to Android</h3>
                    <p class="mb-2 text-darkGrey font-light"></p>
                </div>
                <hr class="border-b border-lightGray">
                <div class="flex justify-center p-6">
                    <button type="button" class="btn btn-purple hover:bg-white hover:text-green-500 border-2 hover:border-green-500">Install now</button>
                </div>
            </div>
            <!--Card 2-->
            <div class="flex flex-col rounded-md shadow-xl">
                <div class="flex flex-col items-center p-6">
                    <img class="h-1/2 w-1/2" src="./img/app-store.png" alt="">
                    <h3 class="mt-5 mb-2 text-green-500 text-lg">Add to Ios</h3>
                    <p class="mb-2 text-darkGrey font-light"></p>
                </div>
                <hr class="border-b border-lightGray">
                <div class="flex justify-center p-6">
                    <button type="button" class="btn btn-purple hover:bg-white hover:text-green-500 border-2 hover:border-green-500">Install now</button>
                </div>
            </div>                           
        </div>
    </section>
    <!--Footer-->
    <footer class="bg-green-500 py-8">
        <div class="container flex flex-col md:flex-row items-center">
            <div class="flex flex-1 flex-wrap  text-white items-center justify-center md:justify-start gap-12">
                <h1 class="text-xl">&copy; ITS CLEAN</h1>
                <ul class="flex text-white uppercase gap-12 text-xs">
                    <li class="cursor-pointer ">Home</li>
                    <li class="cursor-pointer ">Cycle</li>
                    <li class="cursor-pointer ">Feature</li>
                    <li class="cursor-pointer ">About</li>
                    <li class="cursor-pointer ">Download</li>                    
                </ul>
            </div>
            <div class="flex gap-10 mt-12 md:mt-0 items-end justify-end">
                <button type="button" class="btn btn-footer hover:bg-white hover:text-green-500">Get Started</button>
            </div>
        </div>
    </footer>
</body>
</html>