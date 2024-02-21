<nav class="bg-black p-5" role="navigation" aria-label="main navigation">
    <div class="flex items-center justify-between flex-wrap">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <a class="text-text p-3 no-underline text-xl" href="index.php">>/Lasellah></a>
        </div>
        <div class="block lg:hidden">
            <button class="text-text" id="navbarToggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="w-full block  lg:flex lg:items-center lg:w-auto hidden" id="navMenu">
            <div class="text-sm lg:flex-grow">
                <a href="index.php#ommig" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 mr-4 p-3">
                    Om mig
                </a>
                <a href="index.php#projekter" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 mr-4 p-3">
                    Projekter
                </a>
                <a href="index.php#kontakt" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 p-3">
                    Kontakt
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.getElementById('navbarToggle').addEventListener('click', function() {
        const navbarMenu = document.getElementById('navMenu');
        navbarMenu.classList.toggle('hidden');
    });
</script>