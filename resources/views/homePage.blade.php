<x-layout>
    <h1 class="font-bold text-4xl">Home</h1>
    <p class="my-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, delectus eaque eius illum magni quisquam sunt! Consequuntur, debitis, quis! Consectetur enim molestias, nisi officiis qui quis voluptate voluptatem voluptatum? Ad, aliquid aperiam consequuntur error esse eum illo iure, laborum, molestias nam nisi odit quam quasi quo sint suscipit ullam voluptatum!</p>
    <div class="flex justify-around m-4">
        <x-card title="Map" class="w-1/4">

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cupiditate distinctio earum
                    harum impedit inventore iste iure laudantium magni modi nemo, possimus quidem rem repudiandae, sed
                    totam vitae voluptate voluptates?
                </p>
            <a href="/map">
                <x-button class="mt-2">
                    Go to map
                </x-button>
            </a>
        </x-card>
        <x-card title="ISS Tracking">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita nesciunt quia reprehenderit suscipit! Alias aliquam aspernatur, harum molestiae sequi voluptatem.
                </p>
            <a href="/iss-tracking">
                <x-button>
                    Go to the ISS tracking page
                </x-button>
            </a></x-card>
        <x-card title="WIP">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eligendi iure magni quae quas sapiente ullam. Accusamus atque eius enim, in itaque nulla ullam voluptas.
                </p>
            <a href="/third-thing">
                <x-button>
                    Go to the secret third thing
                </x-button>
            </a></x-card>
    </div>

</x-layout>
