<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Blog</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class='max-w-[1431px] my-5 sm:px-4 md:px-8 flex items-center justify-center'>
            <div class="text-xl text-gray-900">
                <div class='my-10 px-20 flex flex-col w-full'>
                    <a href="/">
                        <div class='text-center text-5xl'>MAKMAL PEMBUATAN BERINTEGRASIKAN KOMPUTER</div>
                        <div class='my-5 text-center text-4xl'>Computer Integrated Manufacturing Lab</div>
                    </a>
                </div>
                <div class='flex divide-x divide-blue-400'>
                    <div class='sidebar flex-none w-64 mx-3 text-center'>
                        <div class='bg-blue-300 mb-3'>Contents</div>
                        <div class='p-2'>
                            <div class='mb-3'>Member
                                <div class='text-sky-600 hover:underline hover:text-sky-200'>
                                    <a href="{{ route('teacher') }}">Teacher</a>
                                </div>
                            </div>
                            <div class='mb-3'>Research Contents
                                <div class='text-sky-600 hover:underline hover:text-sky-200'>Research Subject</div>
                                <div class='text-sky-600 hover:underline hover:text-sky-200'>Research Achievements</div>
                            </div>
                            <div class='mb-3'>Lab life
                                <div class='text-sky-600 hover:underline hover:text-sky-200'>Research Activities</div>
                                <div class='text-sky-600 hover:underline hover:text-sky-200'>Extracurricular activities</div>
                                <div class='text-sky-600 hover:underline hover:text-sky-200'>Room Facilities</div>
                            </div>
                            <div class='mb-3'>Access
                                <div class='text-sky-600 hover:underline hover:text-sky-200'>Transportation</div>
                                <div class='text-sky-600 hover:underline hover:text-sky-200'>Contact Information</div>
                            </div>
                        </div>
                    </div>

                    <!--body below here-->
                    <div class='flex-1 px-3'>
                        <div class='text-center my-10'>Welcome to MAKMAL PEMBUATAN BERINTEGRASIKAN KOMPUTER Home Page!</div>
                        <h3 class='text-2xl bg-blue-300 pl-3 my-2'>About contents</h3>
                        <div class='pl-3'>
                            <div class='mb-5'>
                                <h3 class='text-2xl'>Member</h3>
                                <p class='ml-10'>Introduction of the members who make up the laboratory, with email addresses and links to personal pages.</p>
                            </div>
                            <div class='mb-5'>
                                <h3 class='text-2xl'>Research Contents</h3>
                                <p class='ml-10'>Introduction to the research topics and outcomes of our laboratory.</p>
                            </div>
                            <div class='mb-5'>
                                <h3 class='text-2xl'>Lab Life</h3>
                                <p class='ml-10'>Introducing the interior of the lab and various events, aimed at high school students aspiring to attend our university and undergraduate students who are considering joining the lab.</p>
                            </div>
                            <div class='mb-5'>
                                <h3 class='text-2xl'>Access</h3>
                                <p class='ml-10'>Information on how to reach our laboratory and methods of contact.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>