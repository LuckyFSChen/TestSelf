<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased ">
        <div class="relative bg-Login-Background h-screen w-screen bg-cover items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
            <!-- Main modal -->
            <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                <div class="relative   p-4 w-full max-w-md h-auto ">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>  
                        </button>
                        <div class="py-6 px-6  lg:px-8">
                            <div class="flex justify-center py-6">
                                <img src="/img/logo_notitle.png" class="w-16 h-16" >
                                <p class="text-3xl text-center my-auto px-2">TestSelf</p>
                            </div>
                            
                            <form class="space-y-6" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="flex bg-gray-400 rounded-lg">
                                    <img src="/img/user.png" class="w-8 h-8 m-auto mx-2"  alt="">
                                    <input type="email" name="email" id="email" placeholder="電子信箱" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                </div>
                                <div class="flex bg-gray-400 rounded-lg">
                                    <img src="/img/padlock.png" class="w-8 h-8 m-auto mx-2"  alt="">
                                    <input type="password" name="password" id="password" placeholder="密碼" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                </div>
                                <div class="flex justify-between">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="remember" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                                        </div>
                                        <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">記住這個資訊</label>
                                    </div>
                                    <a href="{{ route('password.request') }}" class="text-sm text-blue-700 hover:underline dark:text-blue-500">忘記密碼?</a>
                                </div>
                                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">登入</button>
                                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                    沒有帳號嗎? <a href="{{ route('register') }}" class="text-blue-700 hover:underline dark:text-blue-500">註冊帳號</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class="max-w-6xl  mx-auto my-auto sm:px-6 lg:px-8">
                
                <p class=" py-40 text-white text-4xl py-12 text-center md:text-6xl lg:text-7xl">
                    Welcome to TestSelf!
                </p>
                <p class="text-3xl text-center text-red-500 {{ $errors->count() == 0 ? 'hidden' : '' }}">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </p>
                <!-- Modal toggle -->
                <button class=" my-40 block text-white mx-auto bg-blue-button focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-2xl text-5xl px-36 py-8 text-center md:text-6xl lg:text-7xl" type="button" data-modal-toggle="authentication-modal">
                    登入
                </button>
            </div>
        </div>
    </body>
</html>
