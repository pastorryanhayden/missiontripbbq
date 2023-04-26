<section class="hero w-full h-[30vh] lg:h-[50vh] flex justify-center items-center bg-cover " style="background-image: url('/bg.jpg');">

<div class="text bg-midnight p-6 rounded" >
<h1 class="text-xl lg:text-4xl  text-eggshell text-center leading-loose font-display uppercase">We get your family amazing BBQ <span class="block"> You get our family to the mission field.</span></h1>
    
</div>

</section>
<section id="next-cook" class="bg-blaze flex flex-col items-center justify-center w-full h-48 p-6">
<h2 class="font-display text-xl lg:text-3xl text-midnight text-center">Next Pickup Date: <span class="text-white">{{ env('COOK_DATE') }}</span></h2>
<h2 class="font-display text-xl lg:text-3xl text-midnight text-center mt-4">Spots Left: <span class="text-white">{{ env('AVAILABLE') }}</span></h2>
</section>