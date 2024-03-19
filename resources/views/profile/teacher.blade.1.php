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
        <div class='mx-auto my-5 sm:px-4 md:px-8 flex items-center justify-center'>
            <div class="text-xl text-gray-900">
                <div class='flex flex-col'>
                    <div class='text-center text-5xl'>MAKMAL PEMBUATAN BERINTEGRASIKAN KOMPUTER</div>
                    <div class='my-5 text-center text-3xl'>Computer Integrated Manufacturing Lab</div>
                </div>
                <div class='flex'>
                    <div class='flex-none w-50 p-5 bg-green-400'>
                        <div>Member</div>
                        <div class='text-sky-600 hover:underline hover:text-sky-200'>Teacher</div>
                        <div>Research Contents</div>
                        <div class='text-sky-600 hover:underline hover:text-sky-200'>Research Subject</div>
                        <div class='text-sky-600 hover:underline hover:text-sky-200'>Research Achievements</div>
                    </div>
                    <div class='flex-1 mx-5'>
                        <h2 class='text-2xl'>Teacher</h2>
                        @foreach($teachers as $teacher)
                            <div class='flex py-3'>
                                <div>
                                    @if ( $teacher->image != NULL )
                                        <img src='{{ $teacher->image }}' width=200px>
                                    @else
                                        <img src="/storage/noimage.png" width=200px>
                                    @endif
                                </div>
                                <div class='content mx-5'>
                                    <p>{{ $teacher->name }}</p>
                                    @if ( $teacher->webpage != NULL )
                                        <div class='flex'>
                                            <p>Web Page : [</p> 
                                            <div class='text-sky-600 hover:underline hover:text-sky-200'>
                                                <a href="{{ $teacher->webpage }}">Link</a>
                                            </div>]
                                        </div>
                                        @endif
                                    @if ( $teacher->tel != NULL )
                                        <p>Tel.No : {{ $teacher->tel }}</p>
                                    @endif
                                    @if ( $teacher->email != NULL )
                                        <p>E-mail : {{ $teacher->email }}</p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>