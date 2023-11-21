@extends('layouts.app')

@section('content')

<style>
    .hero-bg-image{
        background: url('https://images.unsplash.com/photo-1597839219216-a773cb2473e4?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center /cover;
        background-attachment: fixed;
        height: 600px;        
    }
</style>

{{-- <-!----hero-----> --}}

<div class="hero-bg-image flex flex-col items-center justify-center">
    <h1 class="text-center text-white text-5xl uppercase font-bold pb-10">Welcome To My Blog</h1>
    <a class=" bg-blue-600 py-4 px-5 rounded-lg font-bold uppercase text-xl hover:bg-blue-300 hover:text-blue-600 transition duration-900" href="/blog">Start Reading</a>
</div>

{{-- <-!---HOW TO BE AN EXPERT IN 2023----> --}}

<div class="flex container sm:grid grid-cols-2 gap-15 mx-auto py-15">
    <div class="mx-2 md:mx-0">
        <img class="sm:rounded-lg" src="/images/photo_2023-11-18_10-58-20.jpg" alt="">
    </div>
    <div class="flex flex-col items-left justify-center m-10 sm:m-0">
        <h2 class="font-bold text-gray-700 text-4xl uppercase">who am I ?</h2>
        <p class="font-bold text-gray-600 text-xl pt-2">
            Hello, my name is Abdul Rahman, 16 years old. I have been learning programming for 3 years, and I will tell you my results in these three years : 
        </p>
        <p class="py-4 text-gray-500 text-2l text-sm leading-5">
            Firstly, my results were not good in these three years, but I learned as much as I could. The first course I took was with Zero Web School. I learned a complete course on HTML. I did not complete the CSS course. Then I moved on to learn some Frontend on the Free Code Camp website and learned the HTML course there. Then I felt that my passion was not in the Fronend. I sat looking for my passion here and there. Then my brother offered me the field of cybersecurity, so I got excited and said, “Let’s go.” Then it became clear that I had to learn backend first. After that, I learned backend with Zero Web School. It was a PSP course, after which I learned Laravel half course with
            Traversy Media I left it because it was difficult in the beginning because he did not say all the terminology and so on. Therefore I left this course and learned from Nour Homsi. He is truly a wonderful person and his course is simple, beautiful and detailed. I learned two courses from him and now I am learning the third. I am learning My Psychological Database.
        </p>

        <a class="bg-blue-700 text-blue-l00 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start hover:bg-blue-300 hover:text-blue-600 transition duration-900" href="/blog">Read More</a>

    </div>

</div>

{{-- <-!----Blog Categories----> --}}

<div class="text-center p-15 bg-blue-800 text-gray-100">
    <h2 class="text-2xl ">Blog Categories</h2>
    <div class="container mx-auto pt-10 sm-grid grid-cols-4    ">
        <div class="font-bold text-2xl py-2">Blog</div>
        <div class="font-bold text-2xl py-2">About Me</div>
        <div class="font-bold text-2xl py-2">Home page</div>
        <div class="font-bold text-2xl py-2">Blessings be upon the Prophet Muhammad</div>
    </div>
</div>


<div class="container mx-auto text-center py-15">
    <h2 class="font-bold text-5xl py-10">Recent Post</h2>
    <p class="text-gray-400 leading-6 px-10"></p>
</div>

<div class="flex sm:grid grid-cols-2 w-4/5 mx-auto">
    <div class="flex bg-blue-800 text-blue-100 pt-10">
        <div class="block m-auto pt-4 pb-15 w-4/5">
            <ul class="md:flex text-xs gap-2">
                <li class="text-2xl bg-blue-100 text-blue-700 rounded inline-block my-1 md:my-0 hover:bg-blue-800 hover:text-blue-100 transition duration-500"><a href="/">GYM</a></li>
                <li class="text-2xl bg-blue-100 text-blue-700 rounded inline-block my-1 md:my-0 hover:bg-blue-800 hover:text-blue-100 transition duration-500"><a href="/">Football</a></li>
                <li class="text-2xl bg-blue-100 text-blue-700 rounded inline-block my-1 md:my-0 hover:bg-blue-800 hover:text-blue-100 transition duration-500"><a href="/">Reading</a></li>
                <li class="text-2xl bg-blue-100 text-blue-700 rounded inline-block my-1 md:my-0 hover:bg-blue-800 hover:text-blue-100 transition duration-500"><a href="/">chess</a></li>
            </ul>
            <h2 class="container py-5 font-bold text-white-300 text-3xl">This Is My Hobby</h2>
            <h5 class="font-bold text-blue-300 text-xl uppercase py-5">First : The GYM</h5>
            <h3 class="GYM text-l py-1 leading-6 ">
                I started training in the gym two years ago and it was one of the best decisions I made in my life because the gym is like oxygen, I cannot live without it. 
            </h3>
            <h5 class="font-bold text-blue-300 text-xl uppercase py-5">Secondly: football</h5>
            <h3 class="text-l py-1 leading-6 ">
                Like any Egyptian child, I started playing football with my friends in the neighborhood. I was not equal to them in playing, but I loved football. I am like analysts. They only analyze and do not play. I am like them. In the end, I still play football until now.
            </h3>
            <h5 class="font-bold text-blue-300 text-xl uppercase py-5">Thirdly, reading</h5>
            <h3 class="text-l py-1 leading-6 ">
                Like any Egyptian child, I also did not like reading, but when I matured a little, I discovered its importance and how much it benefits me. I have read 5 books so far, which I know are few, but I am still on my way.
            </h3>
            <h5 class="font-bold text-blue-300 text-xl uppercase py-5">Fourth, chess</h5>
            <h3 class="text-l py-1 leading-6 ">
                I love this game. I love it very much. It depends on intelligence, and not all people can play it, and this is what loves me about it. This is my name on chess.com for those who want to challenge me: 3bdelrhmana7med
            </h3>
            <a class="bg-transparent border-2 text-blue-l00 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block hover:bg-blue-600 hover:text-blue-100 transition duration-600" href="/blog">Read More</a>
        </div>
    </div>
    <div class="flex">
        <img class="object-cover h-90" src="/images/IMG_20231027_003816_920.jpg" alt="">
    </div>
</div>

@endsection


