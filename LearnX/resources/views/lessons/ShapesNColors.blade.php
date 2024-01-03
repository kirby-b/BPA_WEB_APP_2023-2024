<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                {{-- <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        Math:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.number') }}" class="hover:text-purple-300">Numbers</a><br>
                        <br>
                        <a href="{{ route('page.shapesncolors') }}" class="hover:text-purple-300">Shapes & Colors</a><br>
                        <br>
                        <a href="{{ route('page.probNstats') }}" class="hover:text-purple-300">Probability & Statistics</a><br>
                        <br>
                        <a href="{{ route('page.elementary') }}" class="hover:text-purple-300">Elementary Math</a><br>
                        <br>
                        <a href="{{ route('page.graphing') }}" class="hover:text-purple-300">Graphing</a><br>
                        <br>
                        <a href="{{ route('page.patterns') }}" class="hover:text-purple-300">Patterns</a><br>
                        <br> 
                        <a href="{{ route('page.FDP') }}" class="hover:text-purple-300">Fractions, Decimals, & Precentages</a><br>
                        <br>
                        <a href="{{ route('page.algebra') }}" class="hover:text-purple-300">Algebra</a><br>
                        <br>
                        <a href="{{ route('page.geometry') }}" class="hover:text-purple-300">Geometry</a><br>
                        <br>
                        <a href="{{ route('page.calculus') }}" class="hover:text-purple-300">Calculus</a><br>
                    </p>
                </div> --}}
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <span class="font-black">Math:</span><br>
                        <span class="font-bold">Shapes & Colors:</span><br>
                        <b>Shapes:</b><br>
                        <span class="font-semibold">Geometric Shapes:</span> These are the fundamental shapes with precise mathematical properties. Examples include circles, squares, triangles, rectangles, pentagons, hexagons, and more.<br>
                        <span class="font-semibold">2D Shapes:</span> These shapes exist on a flat plane and have two dimensions—length and width. They include squares, triangles, circles, and polygons.<br>
                        <span class="font-semibold">3D Shapes:</span> These shapes have three dimensions—length, width, and height. Examples include cubes, spheres, pyramids, cones, and cylinders.<br>
                        <span class="font-semibold">Irregular Shapes:</span> These shapes don't have regular outlines or specific formulas to describe them. They can be seen in nature or in objects that don't fit typical geometric definitions.<br>
                        <span class="font-semibold">Symmetry:</span> Shapes can exhibit different types of symmetry—like reflectional symmetry (mirror image), rotational symmetry (when a shape can be rotated and still look the same), or translational symmetry (when a shape can be shifted or translated in a direction without changing its overall appearance).<br>

                        <b>Colors:</b><br>
                        <span class="font-semibold">Color Spectrum:</span> Colors are part of the visible spectrum of light. When white light passes through a prism, it disperses into different wavelengths, creating the colors of the rainbow: red, orange, yellow, green, blue, indigo, and violet.<br>
                        <span class="font-semibold">Primary Colors:</span> These are the foundational colors that can't be created by mixing other colors together. In traditional color theory, the primary colors are red, blue, and yellow. These colors are used as the base to create other colors.<br>
                        <span class="font-semibold">Secondary Colors:</span> These colors are formed by mixing two primary colors together. For instance, mixing red and blue creates purple, red and yellow make orange, and blue and yellow create green.<br>
                        <span class="font-semibold">Color Models:</span> Various color models are used to represent and create colors. The RGB (Red, Green, Blue) model is used in digital displays where different intensities of these colors create a wide range of colors. The CMYK (Cyan, Magenta, Yellow, Key/Black) model is used in printing.<br>
                        <span class="font-semibold">Color Psychology:</span> Colors can evoke emotions and affect moods differently. For example, red might symbolize passion or energy, blue might represent calmness or trust, yellow could signify happiness or warmth, and green might denote nature or tranquility. However, cultural and personal associations can also influence how colors are interpreted.<br>
                        <span class="font-semibold">Color Harmony:</span> Combining colors in specific ways can create harmony or contrast in designs. Color harmony involves understanding how different colors work together, such as complementary colors (opposite on the color wheel), analogous colors (close to each other on the wheel), or triadic colors (evenly spaced on the wheel).<br>
                        <span class="font-semibold">Cultural and Symbolic Meanings:</span> Colors often carry symbolic meanings that vary across cultures. For example, while white might symbolize purity in some cultures, it can signify mourning in others.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>