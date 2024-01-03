<x-partials.FlashCardLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <span class="font-semibold">Science:</span><br>
                        Interactive Learning:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.writeout.science') }}" class="hover:text-purple-300">Write it Out</a><br>
                        <br>
                        <a href="{{ route('page.learnfun.science') }}" class="hover:text-purple-300">Learning Fun</a><br>
                        <br>
                        <a href="{{ route('page.flashcards.science') }}" class="hover:text-purple-300">Flashcards</a><br>
                        <br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear items-center text-2xl">
                            <span class="font-black">Science:</span><br>
                            <b>Flash Cards</b>
                        </div>
                        {{-- Generate a quizlet essentially --}}
                        <div class="mt-24">
                            <script>
                              window.carousel = function () {
                                return {
                                  container: null,
                                  prev: null,
                                  next: null,
                                  init() {
                                    this.container = this.$refs.container
                          
                                    this.update();
                          
                                    this.container.addEventListener('scroll', this.update.bind(this), {passive: true});
                                  },
                                  update() {
                                    const rect = this.container.getBoundingClientRect();
                          
                                    const visibleElements = Array.from(this.container.children).filter((child) => {
                                      const childRect = child.getBoundingClientRect()
                          
                                      return childRect.left >= rect.left && childRect.right <= rect.right;
                                    });
                          
                                    if (visibleElements.length > 0) {
                                      this.prev = this.getPrevElement(visibleElements);
                                      this.next = this.getNextElement(visibleElements);
                                    }
                                  },
                                  getPrevElement(list) {
                                    const sibling = list[0].previousElementSibling;
                          
                                    if (sibling instanceof HTMLElement) {
                                      return sibling;
                                    }
                          
                                    return null;
                                  },
                                  getNextElement(list) {
                                    const sibling = list[list.length - 1].nextElementSibling;
                          
                                    if (sibling instanceof HTMLElement) {
                                      return sibling;
                                    }
                          
                                    return null;
                                  },
                                  scrollTo(element) {
                                    const current = this.container;
                          
                                    if (!current || !element) return;
                          
                                    const nextScrollPosition =
                                      element.offsetLeft +
                                      element.getBoundingClientRect().width / 2 -
                                      current.getBoundingClientRect().width / 2;
                          
                                    current.scroll({
                                      left: nextScrollPosition,
                                      behavior: 'smooth',
                                    });
                                  }
                                };
                              }
                            </script>
                            <style>
                              .scroll-snap-x {
                                scroll-snap-type: x mandatory;
                              }
                          
                              .snap-center {
                                scroll-snap-align: center;
                              }
                          
                              .no-scrollbar::-webkit-scrollbar {
                                display: none;
                              }
                          
                              .no-scrollbar {
                                -ms-overflow-style: none;
                                scrollbar-width: none;
                              }
                            </style>
                          
                            <h1 class="text-4xl">Carousel with AlpineJS</h1>
                          
                            <div class="mt-12 flex mx-auto items-center">
                              <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
                                <div x-ref="container"
                                     class="md:-ml-4 md:flex md:overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">
                                  <div
                                    class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                                    <div class="px-2 py-3 flex justify-between">
                                      <div class="text-lg font-semibold">Content Title</div>
                                      <time>3/6/2021</time>
                                    </div>
                                  </div>
                                  <div
                                    class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                                    <div class="px-2 py-3 flex justify-between">
                                      <div class="text-lg font-semibold">Content Title</div>
                                      <time>3/6/2021</time>
                                    </div>
                                  </div>
                                  <div
                                    class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                                    <div class="px-2 py-3 flex justify-between">
                                      <div class="text-lg font-semibold">Content Title</div>
                                      <time>3/6/2021</time>
                                    </div>
                                  </div>
                                  <div
                                    class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                                    <div class="px-2 py-3 flex justify-between">
                                      <div class="text-lg font-semibold">Content Title</div>
                                      <time>3/6/2021</time>
                                    </div>
                                  </div>
                                  <div
                                    class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                                    <div class="px-2 py-3 flex justify-between">
                                      <div class="text-lg font-semibold">Content Title</div>
                                      <time>3/6/2021</time>
                                    </div>
                                  </div>
                                  <div
                                    class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                                    <div class="px-2 py-3 flex justify-between">
                                      <div class="text-lg font-semibold">Content Title</div>
                                      <time>3/6/2021</time>
                                    </div>
                                  </div>
                                  <div
                                    class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                                    <div class="px-2 py-3 flex justify-between">
                                      <div class="text-lg font-semibold">Content Title</div>
                                      <time>3/6/2021</time>
                                    </div>
                                  </div>
                                  <div
                                    class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                                    <div class="px-2 py-3 flex justify-between">
                                      <div class="text-lg font-semibold">Content Title</div>
                                      <time>3/6/2021</time>
                                    </div>
                                  </div>
                                  <div
                                    class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                                    <div class="px-2 py-3 flex justify-between">
                                      <div class="text-lg font-semibold">Content Title</div>
                                      <time>3/6/2021</time>
                                    </div>
                                  </div>
                                  <div class="ml-4 flex-auto flex-grow-0 flex-shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div><img src="/assets/images/andy-holmes-4iapyjvm714-unsplash-sm.jpg"></div>
                                    <div class="px-2 py-3 flex justify-between">
                                            <div class="text-lg font-semibold">Content Title</div>
                                                <time>3/6/2021</time>
                                            </div>
                                        </div>
                                    </div>
                                    <div @click="scrollTo(prev)" x-show="prev !== null"
                                        class="hidden md:block absolute top-1/2 left-0 bg-white p-2 rounded-full transition-transform ease-in-out transform -translate-x-full -translate-y-1/2 group-hover:translate-x-0 cursor-pointer">
                                        <div>&lt;</div>
                                    </div>
                                    <div @click="scrollTo(next)" x-show="next !== null"
                                        class="hidden md:block absolute top-1/2 right-0 bg-white p-2 rounded-full transition-transform ease-in-out transform translate-x-full -translate-y-1/2 group-hover:translate-x-0 cursor-pointer">
                                        <div>&gt;</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 px-4 md:px-0 text-sm">
                                <span>Photo by <a class="underline" href="https://unsplash.com/@andyjh07?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Andy Holmes</a> on <a class="underline" href="https://unsplash.com/t/color-theory?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
                            </div>
                        </div>
                          
                        <div class="mt-12 flex max-w-md mx-auto items-center">
                            <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
                                <div x-ref="container"
                                    class="md:-ml-4 md:flex md:overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">
                                <div
                                    class="ml-4 px-2 py-4 flex-auto flex-grow-0 flex-shrink-0 w-12 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div class="text-3xl text-center">1</div>
                                </div>
                                <div
                                    class="ml-4 px-2 py-4 flex-auto flex-grow-0 flex-shrink-0 w-12 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div class="text-3xl text-center">2</div>
                                </div>
                                <div
                                    class="ml-4 px-2 py-4 flex-auto flex-grow-0 flex-shrink-0 w-12 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div class="text-3xl text-center">3</div>
                                </div>
                                <div
                                    class="ml-4 px-2 py-4 flex-auto flex-grow-0 flex-shrink-0 w-12 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div class="text-3xl text-center">4</div>
                                </div>
                                <div
                                    class="ml-4 px-2 py-4 flex-auto flex-grow-0 flex-shrink-0 w-12 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div class="text-3xl text-center">5</div>
                                </div>
                                <div
                                    class="ml-4 px-2 py-4 flex-auto flex-grow-0 flex-shrink-0 w-12 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div class="text-3xl text-center">6</div>
                                </div>
                                <div
                                    class="ml-4 px-2 py-4 flex-auto flex-grow-0 flex-shrink-0 w-12 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div class="text-3xl text-center">7</div>
                                </div>
                                <div
                                    class="ml-4 px-2 py-4 flex-auto flex-grow-0 flex-shrink-0 w-12 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div class="text-3xl text-center">8</div>
                                </div>
                                <div
                                    class="ml-4 px-2 py-4 flex-auto flex-grow-0 flex-shrink-0 w-12 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div class="text-3xl text-center">9</div>
                                </div>
                                <div
                                    class="ml-4 px-2 py-4 flex-auto flex-grow-0 flex-shrink-0 w-12 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                                    <div class="text-3xl text-center">10</div>
                                </div>
                                </div>
                                <div @click="scrollTo(prev)" x-show="prev !== null"
                                    class="hidden md:block absolute top-1/2 left-0 bg-white p-2 rounded-full transition-transform ease-in-out transform -translate-x-full -translate-y-1/2 group-hover:translate-x-0 cursor-pointer">
                                    <div>&lt;</div>
                                </div>
                                <div @click="scrollTo(next)" x-show="next !== null"
                                        class="hidden md:block absolute top-1/2 right-0 bg-white p-2 rounded-full transition-transform ease-in-out transform translate-x-full -translate-y-1/2 group-hover:translate-x-0 cursor-pointer">
                                    <div>&gt;</div>
                                </div>
                            </div>
                        </div>
                        <div id="1" x-data="{ flipped: false }" class="py-32 relative w-96 h-96 mx-auto mt-8 mb-8 cursor-pointer text-center font-bold tracking-light text-lg">
                            <div x-show.transition.scale.5.duration.400ms="!flipped" class="absolute text-center py-16 bg-gradient-to-br from-purple-500 via-violet-300 to-transparent overflow-hidden inset-0 rounded-lg shadow-lg" @click="flipped = true;" >
                                Front
                            </div>
                            <div x-show.transition.scale.5.duration.400ms="flipped" style="display: none;" class="absolute text-center py-16 bg-gradient-to-br from-white via-teal-200 to-green-500 bg-blue-300 overflow-hidden inset-0 rounded-lg shadow-lg" @click="flipped = false;" >
                                Back
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.FlashCardLayout>