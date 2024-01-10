<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <span class="font-semibold">History:</span><br>
                        Interactive Learning:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.timeline.hist') }}" class="hover:text-purple-300">Timeline</a><br>
                        <br>
                        <a href="{{ route('page.learnfun.hist') }}" class="hover:text-purple-300">Learning Fun</a><br>
                        <br>
                        <a href="{{ route('page.writeout.hist') }}" class="hover:text-purple-300">Write It Out</a><br>
                        <br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear items-center text-2xl">
                            <span class="font-black">History:</span><br>
                            <b>Timeline</b>
                        </div>
                        <script>
                            function allowDrop(ev) {
                                ev.preventDefault();
                            }
                            
                            function drag(ev) {
                                ev.dataTransfer.setData("Text", ev.target.id);
                            }
                            
                            function drop(ev) {
                                let data = ev.dataTransfer.getData("Text");
                                ev.target.appendChild(document.getElementById(data));
                                ev.preventDefault();
                            }
                        </script>                  
                        <div id="div1" class="w-80 h-16 p-10 border-solid rounded-sm border-neutral-600" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                        <br>
                        <p id="drag1" draggable="true" ondragstart="drag(event)">This is a draggable paragraph. Drag this element into the rectangle.</p>
                         {{-- Drag boxes to correct place on timeline. Make sure to figure out a way to make it only accept correct answers
                            Links for help:
                            https://www.w3schools.com/howto/howto_js_draggable.asp
                            https://stackoverflow.com/questions/49113948/create-box-that-allows-draggable-elements-to-be-dropped-in-it-using-js
                            https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/draggable
                            https://mdbootstrap.com/docs/standard/plugins/drag-and-drop/
                            https://www.w3schools.com/TAGS/att_draggable.asp --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>