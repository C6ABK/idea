<nav class="border-b border-border px-6">
    <div class="max-w-7xl mx-auto h-16 flex items-center justify-between">
        <div>
            <a href="/" class="font-bold text-2xl tracking-wide">idea</a>
        </div>
        <div class="flex gap-x-5 items-center">
            @auth
                <form action="/logout" method="POST">
                    @csrf

                    <button>
                        Log Out
                    </button>
                </form>
            @endauth

            @guest
                <a href="/login">Sign In</a>
                <a href="/register" class="btn">Register</a>
            @endguest
        </div>
    </div>
</nav>