<x-partials.FlashCardLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <span class="font-semibold">English:</span><br>
                        Interactive Learning:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.lettersandsounds') }}" class="hover:text-purple-300">Letters & Sounds</a><br>
                        <br>
                        <a href="{{ route('page.vsandcs') }}" class="hover:text-purple-300">Vowels & Consentents</a><br>
                        <br>
                        <a href="{{ route('page.partsofspeech') }}" class="hover:text-purple-300">Nous, Verbs, etc.</a><br><!--link to choose-->
                        <br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear items-center text-2xl">
                            <span class="font-black">English:</span><br>
                            <b>Flash Cards</b>
                        </div>
                        {{-- Generate a quizlet essentially --}}
                        <!-- Testimonials -->
                        <section>
                            <div class="max-w-3xl mx-auto px-4 sm:px-6">
                                <div class="relative pb-12 md:pb-20">

                                    <!-- Particles animation -->
                                    <div class="absolute left-1/2 -translate-x-1/2 top-0 -z-10 w-80 h-80 -mt-6">
                                        <div class="absolute inset-0 -z-10" aria-hidden="true">
                                            <canvas data-particle-animation data-particle-quantity="10" data-particle-staticity="30"></canvas>
                                        </div>
                                    </div>
                                    
                                    <!-- Carousel -->
                                    <div class="text-center" x-data="carousel">
                                        <!-- Testimonial image -->
                                        <div class="relative h-32 [mask-image:_linear-gradient(0deg,transparent,theme(colors.white)_40%,theme(colors.white))]">
                                            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[480px] h-[480px] -z-10 pointer-events-none before:absolute before:inset-0 before:bg-gradient-to-b before:from-violet-400/20 before:to-transparent before:to-20% after:absolute after:inset-0 after:bg-violet-900 after:m-px before:-z-20 after:-z-20">
                                                <template x-for="(item, index) in items" :key="index">
                                                    <div
                                                        x-show="active === index"
                                                        class="absolute inset-0 -z-10"
                                                        x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 order-first"
                                                        x-transition:enter-start="opacity-0 -rotate-[60deg]"
                                                        x-transition:enter-end="opacity-100 rotate-0"
                                                        x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700"
                                                        x-transition:leave-start="opacity-100 rotate-0"
                                                        x-transition:leave-end="opacity-0 rotate-[60deg]"
                                                    >
                                                        <img class="relative top-11 left-1/2 -translate-x-1/2 rounded-full" :src="item.img" width="56" height="56" :alt="item.name">
                                                    </div>
                                                </template>                                
                                            </div>
                                        </div>
                                        <!-- Text -->
                                        <div class="mb-10">
                                            <div class="relative flex flex-col transition-all duration-150 delay-300 ease-in-out" x-ref="testimonials">
                                                <template x-for="(item, index) in items" :key="index">
                                                    <div
                                                        x-show="active === index"
                                                        x-transition:enter="transition ease-in-out duration-500 delay-200 order-first"
                                                        x-transition:enter-start="opacity-0 -translate-x-4"
                                                        x-transition:enter-end="opacity-100 translate-x-0"
                                                        x-transition:leave="transition ease-out duration-300 delay-300 absolute"
                                                        x-transition:leave-start="opacity-100 translate-x-0"
                                                        x-transition:leave-end="opacity-0 translate-x-4"
                                                    >
                                                        <div class="text-xl font-bold bg-clip-text bg-gradient-to-r from-slate-200/60 via-slate-200 to-slate-200/60" x-text="item.quote"></div>
                                                    </div>
                                                </template>
                                            </div>
                                        </div>
                                        <!-- Buttons -->
                                        <div class="flex flex-wrap justify-center -m-1.5">
                                            <template x-for="(item, index) in items" :key="index">
                                                <button
                                                    class="btn-sm m-1.5 text-xs py-1.5 text-slate-300 transition duration-150 ease-in-out [background:linear-gradient(theme(colors.slate.900),_theme(colors.slate.900))_padding-box,_conic-gradient(theme(colors.slate.400),_theme(colors.slate.700)_25%,_theme(colors.slate.700)_75%,_theme(colors.slate.400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none"
                                                    :class="active === index ? 'opacity-100' : 'opacity-30 hover:opacity-60'"
                                                    @click="active = index; stopAutorotate();"
                                                >
                                                    <span class="relative">
                                                        <span class="text-slate-50 ml-2" x-text="item.name"></span> <span class="text-slate-300">-</span> <span class="mr-2 text-green-500" x-text="item.role"></span>
                                                    </span>
                                                </button>
                                            </template>
                                        </div>
                                    </div>
                                    <!-- Carousel data and functionality -->
                                    <script>
                                        document.addEventListener('alpine:init', () => {
                                            Alpine.data('carousel', () => ({
                                                active: 0,
                                                autorotate: true,
                                                autorotateTiming: 7000,
                                                items: [
                                                    {
                                                        img: './images/testimonial-06.jpg', // cottonbro studios on pexels
                                                        quote: "",
                                                        name: 'Olivia Smith',
                                                        role: 'K-Student'
                                                    },
                                                    {
                                                        img: './images/testimonial-02.jpg', // Andrea Piacquadio on pexels
                                                        quote: "",
                                                        name: 'Sarah Anderson',
                                                        role: 'Teacher'
                                                    },
                                                    {
                                                        img: './images/testimonial-05.jpg', //credit: bukharova on istock
                                                        quote: "",
                                                        name: 'Ethan Davis',
                                                        role: '3rd Grader'
                                                    },
                                                    {
                                                        img: './images/testimonial-01.jpg', //Came with the code for this
                                                        quote: "",
                                                        name: 'James Mitchell',
                                                        role: 'Teacher'
                                                    },
                                                    {
                                                        img: './images/testimonial-04.jpg', //Pexels.
                                                        quote: "",
                                                        name: 'Sophia Roberts',
                                                        role: 'High Schooler'
                                                    },
                                                    {
                                                        img: './images/testimonial-08.jpg', //Max Fischer on pexels
                                                        quote: "",
                                                        name: 'Emily Parker',
                                                        role: 'Teacher'
                                                    },
                                                    {
                                                        img: './images/testimonial-09.jpg', // From Anastasiya Gepp on pexels
                                                        quote: "",
                                                        name: 'Ryan Lewis',
                                                        role: 'High Schooler'
                                                    },
                                                    {
                                                        img: './images/testimonial-03.jpg', //Came with this
                                                        quote: "",
                                                        name: 'Michael Turner',
                                                        role: 'Teacher'
                                                    },
                                                    {
                                                        img: './images/testimonial-10.jpg', //From Zen Chung on pexels
                                                        quote: "",
                                                        name: 'Ava Wilson',
                                                        role: 'High Schooler'
                                                    },
                                                    {
                                                        img: './images/testimonial-07.jpg', //ThisIsEngineering on pexels
                                                        quote: "",
                                                        name: 'Lisa Johnson',
                                                        role: 'Teacher'
                                                    },
                                                    // {
                                                    //     img: './images/testimonial-02.jpg',
                                                    //     quote: "I am He",
                                                    //     name: 'Jessie Dockett',
                                                    //     role: 'God'
                                                    // },
                                                ],
                                                init() {
                                                    if (this.autorotate) {
                                                        this.autorotateInterval = setInterval(() => {
                                                            this.active = this.active + 1 === this.items.length ? 0 : this.active + 1
                                                        }, this.autorotateTiming)
                                                    }
                                                    this.$watch('active', callback => this.heightFix())
                                                },
                                                stopAutorotate() {
                                                    clearInterval(this.autorotateInterval)
                                                    this.autorotateInterval = null
                                                },
                                                heightFix() {
                                                    this.$nextTick(() => {
                                                        this.$refs.testimonials.style.height = this.$refs.testimonials.children[this.active + 1].offsetHeight + 'px'
                                                    })
                                                }
                                            }))
                                        })
                                    </script>
                        
                                </div>
                            </div>
                        </section>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.FlashCardLayout>