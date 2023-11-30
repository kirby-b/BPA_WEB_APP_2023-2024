<x-partials.Mainlayout>
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <!--Main Section-->
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6" id="main">
                <!-- Image Section -->
                <div class="md:w-1/2 p-4">
                    <img src="/Images/Teacher-Online-With-Student.jpg" alt="Teacher Online With Student"
                        class="max-w-full h-auto rounded-lg shadow-lg">
                </div>

                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        LearnX, a place for students K-12 to strive and grow through their educational learning.
                        We strive to make every year count as your students grow through this program. At LearnX,
                        we take it upon ourselves to better our platform for students and for you. We teach kids
                        their 123's, all the way up to their f(x) = 3x^4 - 2x^3 + 5x^2 - 7x + 9 (The answer is
                        x≈0.5231), from their ABC's to full essays on complex topics our world faces. For this 
                        upcoming 2024-2025 school year, we hope to help teachers engage with their students more 
                        than they could. We also offer personalized learning sessions so students can get the most 
                        out of their learning. We make our system user-friendly so you can get the most out of our site.
                        <br><br>
                        We hope you enjoy LearnX!
                        <a href="{{ route('signin') }}" class="text-blue-600 hover:text-blue-800">Click here</a>
                        to make a new account.
                    </p>
                </div>
            </div>
            <br>
            <br>
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
                                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[480px] h-[480px] -z-10 pointer-events-none before:rounded-full rounded-full before:absolute before:inset-0 before:bg-gradient-to-b before:from-slate-400/20 before:to-transparent before:to-20% after:rounded-full after:absolute after:inset-0 after:bg-slate-900 after:m-px before:-z-20 after:-z-20">
                                    <!-- Alpine.js template for testimonial images: https://github.com/alpinejs/alpine#x-for -->
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
                                    <!-- Alpine.js template for testimonials: https://github.com/alpinejs/alpine#x-for -->
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
                                <!-- Alpine.js template for buttons: https://github.com/alpinejs/alpine#x-for -->
                                <template x-for="(item, index) in items" :key="index">
                                    <button
                                        class="btn-sm m-1.5 text-xs py-1.5 text-slate-300 transition duration-150 ease-in-out [background:linear-gradient(theme(colors.slate.900),_theme(colors.slate.900))_padding-box,_conic-gradient(theme(colors.slate.400),_theme(colors.slate.700)_25%,_theme(colors.slate.700)_75%,_theme(colors.slate.400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none"
                                        :class="active === index ? 'opacity-100' : 'opacity-30 hover:opacity-60'"
                                        @click="active = index; stopAutorotate();"
                                    >
                                        <span class="relative">
                                            <span class="text-slate-50" x-text="item.name"></span> <span class="text-slate-600">-</span> <span x-text="item.role"></span>
                                        </span>
                                    </button>
                                </template>
                            </div>
                        </div>
                        <!-- Carousel data and functionality: https://github.com/alpinejs/alpine -->
                        <script>
                            document.addEventListener('alpine:init', () => {
                                Alpine.data('carousel', () => ({
                                    active: 0,
                                    autorotate: true,
                                    autorotateTiming: 7000,
                                    items: [
                                        {
                                            img: './images/testimonial-01.jpg',
                                            quote: "The ability to capture responses is a game-changer. If a user gets tired of the sign up and leaves, that data is still persisted. Additionally, it's great to be able to select between formats.",
                                            name: 'Jessie J',
                                            role: 'Ltd Head of Product'
                                        },
                                        {
                                            img: './images/testimonial-02.jpg',
                                            quote: "I have been using this product for a few weeks now and I am blown away by the results. My skin looks visibly brighter and smoother, and I have received so many compliments on my complexion.",
                                            name: 'Mark Luk',
                                            role: 'Spark Founder & CEO'
                                        },
                                        {
                                            img: './images/testimonial-03.jpg',
                                            quote: "As a busy professional, I don't have a lot of time to devote to working out. But with this fitness program, I have seen amazing results in just a few short weeks. The workouts are efficient and effective.",
                                            name: 'Jeff Kahl',
                                            role: 'Appy Product Lead'
                                        },
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
            <!--Reviews Section-->
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6" id="reviews">
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <div class="text-xl font-sans m-4">
                        <h1 class="text-center text-2xl">What Students and Teachers Say About LearnX</h1>
                        <p class="text-xl">
                            <i>Olivia Smith(K-Student):</i> "I like the colorful pictures and fun stories on LearnX. It makes learning so much fun!"<br><br>
                            <i>Sarah Anderson (Teacher):</i> "LearnX provides a variety of teaching resources and lesson plans that make my job as a teacher easier. It helps me keep my students engaged."<br><br>
                            <i>Ethan Davis(3rd Grade Student):</i> "LearnX has interactive quizzes that help me understand the lessons better. It's not boring like some other stuff."<br><br>
                            <i>James Mitchell (Teacher):</i> "I appreciate the flexibility of LearnX in adapting to different learning styles. It allows me to tailor lessons to meet the unique needs of my students."<br><br>
                            <i>Sophia Roberts (High School Student):</i> "LearnX has a lot of great study materials and practice tests that help me prepare for my exams. It's a huge help for high school."<br><br>
                            <i>Emily Parker (Teacher):</i> "LearnX offers a wide range of educational tools and assessments that help me track my students' progress and adjust my teaching methods accordingly."<br><br>
                            <i>Ryan Lewis (High School Student):</i> "LearnX is my go-to resource for test preparation and self-study. It offers a wide range of study materials and practice tests that are helping me excel in high school."<br><br>
                            <i>Michael Turner (Teacher):</i> "The professional development resources on LearnX are invaluable. They keep me updated with the latest teaching strategies and techniques."<br><br>
                            <i>Ava Wilson (High School Student):</i> "LearnX is user-friendly and helps me manage my assignments and deadlines. It makes my high school life less stressful."<br><br>
                            <i>Lisa Johnson (Teacher):</i> "LearnX has a fantastic platform for creating and sharing educational content. It's a great tool for collaborating with other educators and sharing resources, making my teaching job more efficient."<br><br>
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <!--Why Us Section-->
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6" id="whyus">
                <!-- Quotes Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">                        
                        <p class="text-center underline text-3xl">Quotes</p>
                        <div class="border-solid border-5 border-amber-700">
                            <div class="text-2xl font-sans">
                                LearnX made learning in school so much easier for my child! -Larua Don<br><br>
                                School and LearnX equals success. - Kelly Hemp<br><br>
                                All schools should use LearnX! My child is so successful in school now! -Brooke Asher
                            </div>
                        </div>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="font-sans m-4">                        
                        <p class="text-center underline text-3xl">Why Us?</p>
                        <p class="text-2xl">
                        We offer revelent courses to suit the students needs. Our flashcards and small assignments will fit
                        what the student would learn during the course of that year. We run our assignments through our
                        employees and other teachers throughout the U.S. to ensure that every student gets the correct
                        information they will need to learn as best as they can. With LearnX students get the best education
                        they can get. Our website is easy to navigate and easy for teachers to help students. Teachers can
                        add their own assignments and eaisily put them into the gradebook. All of our assignments, quizzes,
                        and tests challenge and push students as they grow. We don't have any premium account because
                        of our belifs that every child deserves a fair and free education. We do ask for donations which you
                        can find at the bottom of the screen.
                        </p>
                    </p>
                </div>
            </div>
            <br>
            <br>
            <!--FAQ Section-->
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6" id="faq">
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <div class="text-xl font-sans m-4">
                        <div class="text-2xl font-serif">
                            <p class="text-center text-4xl">FAQ</p><br>
                            <p class="text-green-400">What is better about LearnX?</p>
                            <p class="text-violet-500">LearnX is a simple-to-use online website for K-12 to learn and grow. We offer class assignments and 
                            tailor to the students so we can best help their learning needs. We make learning fun by using a belt
                            system and as students go up grade levels, their belt colors will upgrade.</p>
                            <br>
                            <p class="text-green-400">How secure will my child's and the school's information be kept?</p>
                            <p class="text-violet-500">We encrypt all information we hold so students information can be kept safe and they can learn with no worry.</p>
                            <br>
                            <p class="text-green-400">What is the belt system?</p>
                            <p class="text-violet-500">The belt system gives a fun way for K-12 students to learn by color coding each grade. The color will become
                            more prominent as they get father into the grade.</p>
                            <br>
                            <p class="text-green-400">What will my kid be learning?</p>
                            <p class="text-violet-500">Any assignments on our site are the bare minimum for that grade level. Teachers are still responsible for most assignments. We
                            help teach concepts but do not provide assignments for anything extra the teacher might want to add.</p>
                            <br>
                            <p class="text-green-400">How can I contact LearnX if there is a problem?</p>
                            <p class="text-violet-500">LearnX can be contacted at learnxinfo@learnx.org for any problems regarding our site, assignments, or other technical problem
                            there may be with our site.</p>
                            <br>
                            <!--<p>What are the terms of service?</p>
                            <p>Dont be bad</p>
                            <br>-->
                            <p class="text-green-400">Is this site mobile-friendly?</p>
                            <p class="text-violet-500">We are currently working on our site becoming more mobile-friendly. We hope you enjoy the desktop version while you wait!</p>
                            <br>
                            <p class="text-green-400">Does this site cost money?</p>
                            <p class="text-violet-500">We do not have any "premium" accounts. We ask for donations only which you can find <a type="button" id="inText" value ="Yes" href={{ route("page.donate") }}>here</a></p>
                            <br>
                            <p class="text-green-400">Can I trust the information on this site?</p>
                            <p class="text-violet-500">Yes. We do research and run all problems through our employees and other teachers in the U.S. so you can always be assured 
                            that your students will never be given anything other than accuracy.</p>
                            <br>
                            <p class="text-green-400">Can I customize student's experience?</p>
                            <p class="text-violet-500">You can add assignments for your students to do but we do not offer a complete remodel of the system.</p>
                            <br>
                            <!--<p>Is there a helper forum?</p>
                            <p>There are resources to help you work through our site.</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-partials.Mainlayout>
