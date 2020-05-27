<hr class="h-px bg-gray-700 border-none">

<footer class="flex justify-center px-4 text-gray-100 bg-gray-800">
    <div class="container py-6">
        <h1 class="text-center text-lg font-bold lg:text-2xl">
            Join and find 31,000+ components <br> never miss our new features.
        </h1>

        <div class="flex justify-center mt-6">
            <div class="bg-white rounded-lg">
                <div class="flex flex-wrap justify-between md:flex-row">
                    <input type="email" class="m-1 p-2 appearance-none text-gray-700 text-sm focus:outline-none" placeholder="Enter your email">
                    <button class="w-full m-1 p-2 text-sm bg-gray-800 rounded-lg font-semibold uppercase lg:w-auto">subscribe</button>
                </div>
            </div>
        </div>

        <hr class="h-px mt-6 bg-gray-700 border-none">

        <div class="flex flex-col items-center justify-between mt-6 md:flex-row">
            <!-- <div>
                <a href="#" class="text-xl font-bold">Brand</a>
            </div> -->
            <div class="flex items-center flex-shrink-0 text-white mr-6 text-gray-900">
                <span class="logo font-semibold text-xl text-white tracking-tight">ONLINE FLY</span>
            </div>
            <div class="flex mt-4 md:m-0">
                <div class="-mx-4">
                  <a href="#" class="px-4 text-sm">Components</a>
                  <a href="#" class="px-4 text-sm">Examples</a>
                  <a href="#" class="px-4 text-sm">Github</a>
                  <a href="#" class="px-4 text-sm">Contact</a>
                  </div>
            </div>
        </div>
    </div>
</footer>
</div>



<script src="{{url('/js/app.js') }}"></script>

<script>
    const modal = document.querySelector('.main-modal');
    const closeButton = document.querySelectorAll('.modal-close');

    const modalClose = () => {
        modal.classList.remove('fadeIn');
        modal.classList.add('fadeOut');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 500);
    }

    const openModal = () => {
        modal.classList.remove('fadeOut');
        modal.classList.add('fadeIn');
        modal.style.display = 'flex';
    }

    for (let i = 0; i < closeButton.length; i++) {

        const elements = closeButton[i];

        elements.onclick = (e) => modalClose();

        modal.style.display = 'none';

        window.onclick = function (event) {
            if (event.target == modal) modalClose();
        }
    }


    function toggleNavbar() {
        var x = document.getElementById("navbar");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>

@yield('scripts')

</body>
</html>
