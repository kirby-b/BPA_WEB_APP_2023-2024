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
                        <a href="{{ route('page.numbers') }}" class="hover:text-purple-300">Numbers</a><br>
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
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <span class="font-black">Math:</span><br>
                        <span class="font-bold">Geometry:</span><br>
                        <h2>Branches of Geometry:</h2>
                        <ul>
                            <li>Euclidean Geometry: Based on the principles put forth by Euclid, it deals with the properties of flat or two-dimensional shapes and three-dimensional space.</li>
                            <li>Analytical Geometry: Uses algebra and calculus to study geometric concepts by representing them with equations. It merges algebra and geometry, allowing for the exploration of shapes using coordinates.</li>
                            <li>Differential Geometry: Focuses on smooth curves and surfaces using calculus techniques, particularly in relation to concepts like curvature and tangent spaces.</li>
                            <li>Topology: Concerned with the properties of space that are preserved under continuous transformations, such as stretching, bending, or twisting, without tearing or gluing.</li>
                        </ul>

                        <h2>Key Elements:</h2>
                        <ul>
                            <li>Points and Lines: Fundamental elements in geometry. A point has no dimension and represents a specific location. Lines are straight or curved and are composed of an infinite number of points.</li>
                            <li>Shapes and Figures: Include polygons (like triangles, squares, pentagons), circles, spheres, cubes, cones, and more complex shapes.</li>
                            <li>Angles: The measure of rotation between two intersecting lines. Measured in degrees or radians.</li>
                            <li>Transformations: Operations like translations, rotations, reflections, and dilations that alter the position, orientation, or size of shapes while preserving their fundamental properties.</li>
                            <li>Area and Volume: Measures of the amount of space enclosed by a shape (in two dimensions) or a solid (in three dimensions).</li>
                        </ul>

                        <h2>Applications:</h2>
                        <ul>
                            <li>Architecture and Design: Architects use geometry to design structures, and artists apply geometric principles in their creations.</li>
                            <li>Physics and Engineering: Understanding geometric principles is crucial in fields like mechanics, optics, and computer graphics.</li>
                            <li>Computer Science: Geometry is used extensively in computer-aided design (CAD), computer graphics, and modeling.</li>
                        </ul>

                        <h2>Fundamental Theorems:</h2>
                        <ul>
                            <li>Pythagorean Theorem: Relates to the sides of a right-angled triangle: a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup> (where a and b are the shorter sides, and c is the hypotenuse).</li>
                            <li>Thales' Theorem: States that if A, B, and C are points on a circle where AB is a diameter, then angle ACB is a right angle.</li>
                            <li>Euler's Formula: Relates the number of vertices, edges, and faces of a polyhedron: V - E + F = 2 (where V is vertices, E is edges, and F is faces).</li>
                        </ul>

                        <h2>Formulas:</h2>
                        <h2>Basic Shapes:</h2>
                        <h3>Rectangle:</h3>
                        <ul>
                            <li>Area = Length x Width</li>
                            <li>Perimeter = 2 x (Length + Width)</li>
                        </ul>
                        <h3>Square:</h3>
                        <ul>
                            <li>Area = Side x Side (or Side<sup>2</sup>)</li>
                            <li>Perimeter = 4 x Side</li>
                        </ul>
                        <h3>Triangle:</h3>
                        <ul>
                            <li>Area = (Base x Height) / 2</li>
                            <li>Perimeter = Sum of the lengths of all three sides</li>
                        </ul>
                        <h3>Circle:</h3>
                        <ul>
                            <li>Area = π x Radius<sup>2</sup></li>
                            <li>Circumference = 2 x π x Radius (or π x Diameter)</li>
                        </ul>
                        <h2>Three-Dimensional Shapes:</h2>

                        <h3>Cube:</h3>
                        <ul>
                            <li>Surface Area = 6 x Side<sup>2</sup></li>
                            <li>Volume = Side<sup>3</sup></li>
                        </ul>
                        <h3>Cylinder:</h3>
                        <ul>
                            <li>Surface Area = 2 x π x Radius x (Radius + Height)</li>
                            <li>Volume = π x Radius<sup>2</sup> x Height</li>
                        </ul>
                        <h3>Sphere:</h3>
                        <ul>
                            <li>Surface Area = 4 x π x Radius<sup>2</sup></li>
                            <li>Volume = (4/3) x π x Radius<sup>3</sup></li>
                        </ul>
                        <h2>Right-Angled Triangle:</h2>
                        <ul>
                            <li>Pythagorean Theorem: c<sup>2</sup> = a<sup>2</sup> + b<sup>2</sup> (where 'c' is the hypotenuse, and 'a' and 'b' are the shorter sides)</li>
                        </ul>
                        <h2>Others:</h2>
                        <ul>
                            <li>Trapezoid: Area = ((Base1 + Base2) x Height) / 2</li>
                            <li>Parallelogram: Area = Base x Height</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>