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
                        <span class="font-extrabold">Geometry:</span><br><br>
                        <span class="font-bold">Branches of Geometry:</span><br><br>
                        
                        <span class="font-semibold">Euclidean Geometry:</span> Based on the principles put forth by Euclid, it deals with the properties of flat or two-dimensional shapes and three-dimensional space.<br><br>
                        <span class="font-semibold">Analytical Geometry:</span> Uses algebra and calculus to study geometric concepts by representing them with equations. It merges algebra and geometry, allowing for the exploration of shapes using coordinates.<br><br>
                        <span class="font-semibold">Differential Geometry:</span> Focuses on smooth curves and surfaces using calculus techniques, particularly in relation to concepts like curvature and tangent spaces.<br><br>
                        <span class="font-semibold">Topology:</span> Concerned with the properties of space that are preserved under continuous transformations, such as stretching, bending, or twisting, without tearing or gluing.<br><br>
                        <br>
                        <span class="font-bold">Key Elements:</span><br><br>
                        
                        <span class="font-semibold">Points and Lines:</span> Fundamental elements in geometry. A point has no dimension and represents a specific location. Lines are straight or curved and are composed of an infinite number of points.<br><br>
                        <span class="font-semibold">Shapes and Figures:</span> Include polygons (like triangles, squares, pentagons), circles, spheres, cubes, cones, and more complex shapes.<br><br>
                        <span class="font-semibold">Angles:</span> The measure of rotation between two intersecting lines. Measured in degrees or radians.<br><br>
                        <span class="font-semibold">Transformations:</span> Operations like translations, rotations, reflections, and dilations that alter the position, orientation, or size of shapes while preserving their fundamental properties.<br><br>
                        <span class="font-semibold">Area and Volume:</span> Measures of the amount of space enclosed by a shape (in two dimensions) or a solid (in three dimensions).<br><br>
                        <br>
                        <span class="font-bold">Applications:</span><br><br>
                        
                        <span class="font-semibold">Architecture and Design:</span> Architects use geometry to design structures, and artists apply geometric principles in their creations.<br><br>
                        <span class="font-semibold">Physics and Engineering:</span> Understanding geometric principles is crucial in fields like mechanics, optics, and computer graphics.<br><br>
                        <span class="font-semibold">Computer Science:</span> Geometry is used extensively in computer-aided design (CAD), computer graphics, and modeling.<br><br>
                        <br>
                        <span class="font-bold">Fundamental Theorems:</span><br><br>
                        
                        <span class="font-semibold">Pythagorean Theorem:</span> Relates to the sides of a right-angled triangle: a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup> (where a and b are the shorter sides, and c is the hypotenuse).<br><br>
                        <span class="font-semibold">Thales' Theorem:</span> States that if A, B, and C are points on a circle where AB is a diameter, then angle ACB is a right angle.<br><br>
                        <span class="font-semibold">Euler's Formula:</span> Relates the number of vertices, edges, and faces of a polyhedron: V - E + F = 2 (where V is vertices, E is edges, and F is faces).<br><br>
                        <br>
                        <span class="font-bold">Formulas:</span><br><br><br>
                        <span class="font-bold">Basic Shapes:</span><br><br>
                        <span class="font-bold">Rectangle:</span><br>
                        
                        Area = Length x Width<br>
                        Perimeter = 2 x (Length + Width)<br>
                        <br>
                        <span class="font-bold">Square:</span><br>
                        
                        Area = Side x Side (or Side<sup>2</sup>)<br>
                        Perimeter = 4 x Side<br>
                        <br>
                        <span class="font-bold">Triangle:</span><br>
                        
                        Area = (Base x Height) / 2<br>
                        Perimeter = Sum of the lengths of all three sides<br>
                        <br>
                        <span class="font-bold">Circle:</span><br>
                        
                        Area = π x Radius<sup>2</sup><br>
                        Circumference = 2 x π x Radius (or π x Diameter)<br><br>
                        <br>
                        <span class="font-bold">Three-Dimensional Shapes:</span><br><br>

                        <span class="font-bold">Cube:</span><br>
                        
                        Surface Area = 6 x Side<sup>2</sup><br>
                        Volume = Side<sup>3</sup><br>
                        <br>
                        <span class="font-bold">Cylinder:</span><br>
                        
                        Surface Area = 2 x π x Radius x (Radius + Height)<br>
                        Volume = π x Radius<sup>2</sup> x Height<br>
                        <br>
                        <span class="font-bold">Sphere:</span><br>
                        
                        Surface Area = 4 x π x Radius<sup>2</sup><br>
                        Volume = (4/3) x π x Radius<sup>3</sup><br>
                        <br>
                        <span class="font-bold">Right-Angled Triangle:</span><br>
                        
                        <span class="font-semibold">Pythagorean Theorem:</span> c<sup>2</sup> = a<sup>2</sup> + b<sup>2</sup> (where 'c' is the hypotenuse, and 'a' and 'b' are the shorter sides)<br><br>
                        <br>
                        <span class="font-bold">Others:</span><br>
                        
                        <span class="font-semibold">Trapezoid:</span> Area = ((Base1 + Base2) x Height) / 2<br>
                        <span class="font-semibold">Parallelogram:</span> Area = Base x Height<br>
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>