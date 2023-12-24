<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        Math:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.number') }}" class="hover:text-purple-300">Numbers</a><br>
                        <br>
                        {{-- <a href="{{ route('page.shapesncolors') }}" class="hover:text-purple-300">Shapes & Colors</a><br>
                        <br> --}}
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
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <span class="font-black">Math:</span><br>
                        <span class="font-bold">Geometry:</span><br>
                        <h2 class="font-semibold">Branches of Geometry:</h2>
                        <ul>
                            <li><span class="underline">Euclidean Geometry:</span> Based on the principles put forth by Euclid, it deals with the properties of flat or two-dimensional shapes and three-dimensional space.</li>
                            <li><span class="underline">Analytical Geometry:</span> Uses algebra and calculus to study geometric concepts by representing them with equations. It merges algebra and geometry, allowing for the exploration of shapes using coordinates.</li>
                            <li><span class="underline">Differential Geometry:</span> Focuses on smooth curves and surfaces using calculus techniques, particularly in relation to concepts like curvature and tangent spaces.</li>
                            <li><span class="underline">Topology:</span> Concerned with the properties of space that are preserved under continuous transformations, such as stretching, bending, or twisting, without tearing or gluing.</li>
                        </ul>

                        <h2 class="font-semibold">Key Elements:</h2>
                        <ul>
                            <li><span class="underline">Points and Lines:</span> Fundamental elements in geometry. A point has no dimension and represents a specific location. Lines are straight or curved and are composed of an infinite number of points.</li>
                            <li><span class="underline">Shapes and Figures:</span> Include polygons (like triangles, squares, pentagons), circles, spheres, cubes, cones, and more complex shapes.</li>
                            <li><span class="underline">Angles:</span> The measure of rotation between two intersecting lines. Measured in degrees or radians.</li>
                            <li><span class="underline">Transformations:</span> Operations like translations, rotations, reflections, and dilations that alter the position, orientation, or size of shapes while preserving their fundamental properties.</li>
                            <li><span class="underline">Area and Volume:</span> Measures of the amount of space enclosed by a shape (in two dimensions) or a solid (in three dimensions).</li>
                        </ul>

                        <h2 class="font-semibold">Applications:</h2>
                        <ul>
                            <li><span class="underline">Architecture and Design:</span> Architects use geometry to design structures, and artists apply geometric principles in their creations.</li>
                            <li><span class="underline">Physics and Engineering:</span> Understanding geometric principles is crucial in fields like mechanics, optics, and computer graphics.</li>
                            <li><span class="underline">Computer Science:</span> Geometry is used extensively in computer-aided design (CAD), computer graphics, and modeling.</li>
                        </ul>

                        <h2 class="font-semibold">Fundamental Theorems:</h2>
                        <ul>
                            <li><span class="underline">Pythagorean Theorem:</span> Relates to the sides of a right-angled triangle: a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup> (where a and b are the shorter sides, and c is the hypotenuse).</li>
                            <li><span class="underline">Thales' Theorem:</span> States that if A, B, and C are points on a circle where AB is a diameter, then angle ACB is a right angle.</li>
                            <li><span class="underline">Euler's Formula:</span> Relates the number of vertices, edges, and faces of a polyhedron: V - E + F = 2 (where V is vertices, E is edges, and F is faces).</li>
                        </ul>

                        <h2 class="font-semibold">Formulas:</h2>
                        <h2 class="font-semibold">Basic Shapes:</h2>
                        <h3 class="font-semibold">Rectangle:</h3>
                        <ul>
                            <li>Area = Length x Width</li>
                            <li>Perimeter = 2 x (Length + Width)</li>
                        </ul>
                        <h3 class="font-semibold">Square:</h3>
                        <ul>
                            <li>Area = Side x Side (or Side<sup>2</sup>)</li>
                            <li>Perimeter = 4 x Side</li>
                        </ul>
                        <h3 class="font-semibold">Triangle:</h3>
                        <ul>
                            <li>Area = (Base x Height) / 2</li>
                            <li>Perimeter = Sum of the lengths of all three sides</li>
                        </ul>
                        <h3 class="font-semibold">Circle:</h3>
                        <ul>
                            <li>Area = π x Radius<sup>2</sup></li>
                            <li>Circumference = 2 x π x Radius (or π x Diameter)</li>
                        </ul>
                        <h2 class="font-semibold">Three-Dimensional Shapes:</h2>

                        <h3 class="font-semibold">Cube:</h3>
                        <ul>
                            <li>Surface Area = 6 x Side<sup>2</sup></li>
                            <li>Volume = Side<sup>3</sup></li>
                        </ul>
                        <h3 class="font-semibold">Cylinder:</h3>
                        <ul>
                            <li>Surface Area = 2 x π x Radius x (Radius + Height)</li>
                            <li>Volume = π x Radius<sup>2</sup> x Height</li>
                        </ul>
                        <h3 class="font-semibold">Sphere:</h3>
                        <ul>
                            <li>Surface Area = 4 x π x Radius<sup>2</sup></li>
                            <li>Volume = (4/3) x π x Radius<sup>3</sup></li>
                        </ul>
                        <h2 class="font-semibold">Right-Angled Triangle:</h2>
                        <ul>
                            <li><span class="underline">Pythagorean Theorem:</span> c<sup>2</sup> = a<sup>2</sup> + b<sup>2</sup> (where 'c' is the hypotenuse, and 'a' and 'b' are the shorter sides)</li>
                        </ul>
                        <h2 class="font-semibold">Others:</h2>
                        <ul>
                            <li><span class="underline">Trapezoid:</span> Area = ((Base1 + Base2) x Height) / 2</li>
                            <li><span class="underline">Parallelogram:</span> Area = Base x Height</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>