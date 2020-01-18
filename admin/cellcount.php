<?php include_once("../templates/header.php");?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-MML-AM_CHTML' async></script>
<br>
<main>
    <script type="text/x-mathjax-config;executed=true">
        MathJax.Hub.Config({ tex2jax: { inlineMath: [ ['$','$'], ["\\(","\\)"] ], processEscapes: true } });
    </script>
    <script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">


    </script>
    <script>
        function toggleDrawer(e) {
            document.getElementById(e.name).classList.toggle("drawer-closed");
        }

        var s1_total_1 = 0;
        var s1_viable_1 = 0;
        var s1_total_2 = 0;
        var s1_viable_2 = 0;
        var s1_total_3 = 0;
        var s1_viable_3 = 0;
        var s1_total_4 = 0;
        var s1_viable_4 = 0;
        var s1_total_5 = 0;
        var s1_viable_5 = 0;

        var s2_total_1 = 0;
        var s2_viable_1 = 0;
        var s2_total_2 = 0;
        var s2_viable_2 = 0;
        var s2_total_3 = 0;
        var s2_viable_3 = 0;
        var s2_total_4 = 0;
        var s2_viable_4 = 0;
        var s2_total_5 = 0;
        var s2_viable_5 = 0;

        function calcTotal(e) {
            eval(e.id + '=' + e.value + ';');
            document.getElementById("area_" + e.id).innerHTML = e.value;


            var s1_total_count = s1_total_1 + s1_total_2 + s1_total_3 + s1_total_4 + s1_total_5;
            var s1_viable_count = s1_viable_1 + s1_viable_2 + s1_viable_3 + s1_viable_4 + s1_viable_5;

            var s2_total_count = s2_total_1 + s2_total_2 + s2_total_3 + s2_total_4 + s2_total_5;
            var s2_viable_count = s2_viable_1 + s2_viable_3 + s2_viable_3 + s2_viable_4 + s2_viable_5;



            document.querySelectorAll(".area_s1_total_count").forEach(el => {
                el.innerHTML = s1_total_count;
            });
            document.querySelectorAll(".area_s1_viable_count").forEach(el => {
                el.innerHTML = s1_viable_count;
            });

            var cell_concentration = s1_total_count * 0.01 / 0.0005;

            document.querySelectorAll(".cell_concentration").forEach(el => {
                el.innerHTML = cell_concentration;
            });


            var viability = s1_viable_count / s1_total_count;
            document.getElementById("viability").innerHTML = Math.round(viability * 100);
            document.getElementById("viability_decimal").innerHTML = viability.toFixed(2);

            var avg_total_count = (s1_total_count + s2_total_count);
            var avg_viable_count = (s1_viable_count + s2_viable_count);

            yeastRequired();
        }

        function yeastRequired() {
            var viability = document.getElementById("viability_decimal").innerHTML;
            var conc = document.querySelector(".cell_concentration").innerHTML;
            var cells = document.querySelector(".cells_required").innerHTML;
            var yeastRequired = cells / (viability * conc);
            document.getElementById("yeastRequired").innerHTML = yeastRequired.toFixed(1);
        }

        function requiredCells(e) {


            var batch = document.getElementById("batch").value;
            var batch_unit = document.getElementById("batch_unit").value;
            if (batch_unit == "gallon") {
                batch = 3785 * batch;
            } else if (batch_unit == "liter") {
                batch = batch * 1000;
            } else if (batch_unit == "hectoliter") {
                batch = batch * 100000;
            } else if (batch_unit == "barrel") {
                batch = batch * 158987;
            }
            batch = batch - 0;
            document.getElementById("batch_value").innerHTML = batch;

            var gravity = document.getElementById("gravity").value;
            var gravity_unit = document.getElementById("gravity_unit").value;
            if (gravity_unit == "Plato") {
                gravity = gravity - 0;
            } else if (gravity_unit == "Brix") {
                gravity = (259 - (259 / gravity)).toFixed(2);
            }
            document.getElementById("gravity_value").innerHTML = gravity;

            var rate = document.getElementById("rate").value;
            rate = rate - 0;
            document.getElementById("rate_value").innerHTML = rate;


            var cells_required = batch * gravity * rate;

            document.querySelectorAll(".cells_required").forEach(el => {
                el.innerHTML = cells_required;
            });
            yeastRequired();

        }

    </script>
    <section>
        <p>Click <a href="#calculator">here</a> to skip to the calculator section of the page.</p><hr>
        <button class="drawer" name="stocksolution" type="button" onclick="toggleDrawer(this);">
        <img src="../img/pointing-hand-old.png" alt="pointing-hand">
            <h2>Stock Solution</h2>
        </button>
        <div id="stocksolution" class="drawer">
            <p>Note: <a href="https://www.carolina.com/pdf/msds/methyleneblughs.pdf" target="_blank">methylene blue is toxic</a>. Please wear nitrile gloves and safety glasses to avoid contact with skin or eyes.</p>
            <p>A stock solution of methylene blue does not need to be created every time cells are counted. The resulting stock solution outlined below can be stored for up to 1 year from mixing to be used for cell counting.</p>
            <h3>Materials</h3>
            <ul>
                <li><a href="https://www.carolina.com/catalog/detail.jsp?prodId=875684&utm_source=google&utm_medium=cpc&scid=scplp875684&sc_intid=875684&gclid=EAIaIQobChMI3qz9n6CB5wIVTD0MCh09tQA0EAkYCiABEgIsQvD_BwE">Methylene blue</a></li>
                <li>Distilled water</li>
                <li>Sodium citrate dihydrate</li>
                <li>0.2 micron filter paper (or similar)</li>
                <li>100 mL beaker</li>
                <li>100 mL volumetric flask</li>
                <li>stock solution storage container (some sort of glass bottle with a lid)</li>
                <li>small glass funnel</li>
                <li>10 mL micropipette</li>
            </ul>
            <h3>Procedure</h3>
            <ol>
                <li>In a small beaker, dissolve 0.01 g of methylene blue in 10 mL of distilled water.</li>
                <li>Dissolve 2 g of sodium citrate dihydrate in the methylene blue solution.</li>
                <li>Line the funnel with filter paper, and place the funnel into the volumetric flask.</li>
                <li>Pour the methylene blue solution through the filter paper and into the volumetric flask.</li>
                <li>Remove the filter paper from the funnel and set aside.</li>
                <li>Add distilled water to the volumetric flask to the 100 mL mark.</li>
                <li>Label the stock solution storage container with the date, your initials, and name of the solution, in this case "methylene blue stock solution 0.01%".</li>
                <li>Move the funnel to the stock solution storage container and pour the contents of the volumetric flask into the newly labeled stock solution bottle.</li>
                <li>Cap the bottle, throw away the filter paper, put away chemicals and clean up work area.</li>
            </ol>
        </div>
        <br>
        <hr>
        
          <button class="drawer" name="sample" type="button" onclick="toggleDrawer(this);">
            <img src="../img/pointing-hand-old.png" alt="pointing-hand"><h2>Sample Preparation</h2>
        </button>
        <div id="sample" class="drawer">


            <p>Note: Ideally, this procedure would be preformed in a ventilation chamber to avoid any contamination. However, since such a chamber is not accessible, please take exteeme caution to avoid any accidental contamination of the yeast species. Such contamination can lead to altered vitality and introduction of unwanted bacteria. As such, the following percautions to protect the yeast should be taken: </p>
            <ul>
                <li>nitrile gloves</li>
                <li>safety goggles/glasses</li>
                <li>face mask (to avoid breathing on the cells)</li>
            </ul>
            <div style="display:none;">
                <p>Would you like to pitch by weight or by volume?</p>
                <label for="weight" name="weight" value="weight">
            <input id="weight" type="radio" name="pitchtype" value="weight">
            weight
        </label><br>
                <label for="volume" name="weight" value="volume">
            <input id="volume" type="radio" checked="checked" name="pitchtype" value="volume">
            volume
        </label></div>

            <div id="weight" class="hidden">
                <p>Sample Size: 1 g</p>
                <p>Dilution: 1:100 (1 part yeast slurry, 99 part distilled water)</p>
                <h3>Procedure:</h3>
                <ol>
                    <li>Obtain a clean conical tube (and tube holder) and write the date, your initials, and the yeast being tested on it in sharpie.</li>
                    <li>Use the <code>tare</code> function on a balance to zero the weight of the conical tube and tube holder.</li>
                    <li>Use a small pipet to transfer 0.1 gram of yeast slurry from its holiding container to the conical tube on the balance.</li>
                    <li>Since the density of water at normal atmosphereic conditions is 1 gram = 1 mL, use a micropipette to transfer 9.8 mL of distilled water to the conical tube. </li>
                    <li>Cap the conical tube securely and shake the mixture vigirously to obtain a homologous solution.</li>
                    <li>With a different (read clean) pipette tip, add 0.1 mL of methylene blue stock solution to the conical tube.</li>
                    <li>Mix the resulting solution thoroughly but gently in order to not harm the cells. Do so by inserting the pipette tip into the conical tube and gently moving the plunger up and down to take in solution and then expell solution back into the tube. Repeate this 4-5 times to mix throroughly.</li>
                    <li>Cap the conical tube and set aside for 10 minutes.</li>
                </ol>

            </div>
            <div id="volume" class="">
                <p>Sample Size: 1 mL</p>
                <p>Dilution: 1:100 (1 part yeast slurry, 99 part distilled water)</p>
                <h3>Procedure:</h3>
                <ol>
                    <li>Obtain a clean conical tube (and tube holder) and write the date, your initials, and the yeast being tested on it in sharpie.</li>
                    <li>Use a small pipette to transfer 0.1 mL of yeast slurry from its holiding container to the conical tube.</li>
                    <li>Use a micropipette to transfer 9.8 mL of distilled water to the conical tube. </li>
                    <li>Cap the conical tube securely and shake the mixture vigirously to obtain a homologous solution.</li>
                    <li>With a different (read clean) pipette tip, add 0.1 mL of methylene blue stock solution to the conical tube.</li>
                    <li>Mix the resulting solution thoroughly but gently in order to not harm the cells. Do so by inserting the pipette tip into the conical tube and gently moving the plunger up and down to take in solution and then expell solution back into the tube. Repeate this 4-5 times to mix throroughly.</li>
                    <li>Cap the conical tube and set aside for 10 minutes.</li>
                </ol>

            </div>
        </div><br>
        <hr>
         <button class="drawer" name="counting" type="button" onclick="toggleDrawer(this);"><img src="../img/pointing-hand-old.png" alt="pointing-hand">
            <h2>Hemocytometer</h2>
        </button>
        <div id="counting" class="drawer">
            <img src="../img/hemocytometer-diagram.jpg" width="250px">
            <p>A hemocytometer works by providing an area of known volume in which cells of a known dilution can be manually counted. By counting the amount of cells in a given area, the overall concentration in the original solution can be estimated. Every hemocytometer will feature some sort of laser engraved grid similar to the one shown below. </p><img src="../img/hemocytometergrid.png" width="300px">
            <h3>Procedure</h3>
            <ol>
                <li>Place the glass cover slip on the hemocytometer.</li>
                <li>Pipette 10 &mu;L of sample into each of the "v" sections (also called the counting chambers) of the hemocytometer. Capilary action should draw the sample up into the counting chamber. You should not need to move the glass cover slip.</li><img src="https://www.nexcelom.com/wp-content/uploads/2018/05/pipette-sample-into-hemacytometer-1-1.gif">
                <li>Carefully place the hemocytometer on the microscope stage and adjust the focus knob in order to bring the cells and etched grid into focus. Once in focus, it should look something like this:</li>
                <img src="../img/hemocytometer-focused.jpg" width="300px">
                <li>Since we have already stained the cells, you should be able to distinguish between those that are alive, and those that are dead by looking for the dark blue spots (cells that are dead) and the transparent-ish spots (those that are alive).</li>
                <img src="../img/hemocytometer-stained.jpg" width="300px">
                <li>In order to get a (relatively) accurate count, we will need to count the amount of cells in multiple locations on the overall grid. The five different locations on the grid are highlighted in the picture below.</li>
                <img src="../img/hemocytometergrid-highlighted.png" width="300px">
                <p>if you look closely, you will notice that each of the highlighted areas is bounded by three lines.</p>
                <img src="../img/hemocytometergrid-highlighted-areazoom.png" width="250px" style="display:inline-block"> <img src="../img/hemocytometergrid-highlighted-areagridzoom.png" width="250px" style="display:inline-block">

                <p>It can be helpful to use these lines as a reference point as to where you are on the grid. If adjustment is needed, use the knob on the microscope to adjust the microscope stage instead of moving the hemocytometer with your finger.</p>
                <li>In order to count the number of viable (cells that are alive) and non-viable (cells that are dead) cells in the highlighted square, specific guidelines should be followed in order to be consistent with your counting.</li>
                <ol>
                    <li>If cells are on the line, only count those that are on the top or right edge of the box. Do NOT count cells that are touching the bottom or left lines of the box.</li>
                    <img src="../img/hemocytometergrid-highlighted-areagridzoom-edges.png">
                    <li>start at the top left box within the highlighted grid, and move to the right, snaking back and forth until you reach the bottom left-hand box within the highlighted grid.</li>
                    <img src="../img/hemocytometergrid-highlighted-areagridzoom-order.png">
                    <li>"Budding" cells (cells that are starting to divide but haven't yet divided completely) should only be counted if the bud is at least 1/2 the size of the mother.</li>
                    <li>Count highlighted grids from left to right as shown in the picture below.</li>
                    <img src="../img/hemocytometergrid-highlighted-areazoom-order.png">
                    <li>Don't actually count the number of cells--this seems counter-intuitive, but just use the counter while you're looking at the cells under the microscope in order to get an unbiased number.</li>
                </ol>
                <li>Count the number of viable (alive) cells then the number of total cells, taking care to record the final values between each count in the calculator section below.</li>
            </ol>
        </div><br>
        <hr>
        <button class="drawer" name="calculator" type="button" onclick="toggleDrawer(this);">
           <img src="../img/pointing-hand-old.png" alt="pointing-hand"> <h2>Calculator</h2>
        </button>
        <div id="calculator" class="drawer">
            <div id="grid" class="grid-container" class="countingchamber-one">
                <div class="grid-item" name="one">
                    <label>Live: <input oninput="calcTotal(this);" id="s1_viable_1" type="number" min="0"></label>
                    <label>Total: <input oninput="calcTotal(this);" id="s1_total_1" type="number" min="0"></label>

                </div>
                <div class="grid-item"></div>
                <div class="grid-item" name="two">
                    <label>Live: <input oninput="calcTotal(this);" id="s1_viable_2" type="number" min="0"></label>
                    <label>Total: <input oninput="calcTotal(this);" id="s1_total_2" type="number" min="0"></label>

                </div>
                <div class="grid-item"></div>
                <div class="grid-item" name="three">
                    <label>Live: <input oninput="calcTotal(this);" id="s1_viable_3" type="number" min="0"></label>
                    <label>Total: <input oninput="calcTotal(this);" id="s1_total_3" type="number" min="0"></label>
                </div>
                <div class="grid-item"></div>
                <div class="grid-item" name="four">
                    <label>Live: <input oninput="calcTotal(this);" id="s1_viable_4" type="number" min="0"></label>
                    <label>Total: <input oninput="calcTotal(this);" id="s1_total_4" type="number" min="0"></label>
                </div>
                <div class="grid-item"></div>
                <div class="grid-item" name="five">
                    <label>Live: <input oninput="calcTotal(this);" id="s1_viable_5" type="number" min="0"></label>
                    <label>Total: <input oninput="calcTotal(this);" id="s1_total_5" type="number" min="0"></label>
                </div>
            </div>
           
            <div class="math">
<h4>Cell Concentration</h4>
                $$\text{cell concentration} = \frac{\text{total cell count}\times\text{dilution factor}}{\text{total volume (mL)}}$$
                <div class="steps">
                    <br> $$\text{dilution factor} = \frac{\text{slurry volume}}{\text{slurry volume + water volume}}$$ $$\text{dilution factor} = \frac{0.1 \text{ mL slurry}}{0.1 \text{ mL slurry} + 0.1 \text{ mL methylene blue solution}+ 9.8 \text{ mL water}}$$ $$\text{dilution factor} = \frac{0.1 \text{ mL}}{10.0 \text{ mL}} = 0.01$$
                    <br> $$\text{total volume} = \text{grid volume}\times \text{number of grids}$$ $$ \text{grid volume} = \text{width} \times \text{height} \times \text{depth}$$ $$\text{grid volume} = 1 \text{ mm} \times 1\text{ mm} \times 0.1\text{ mm}$$ $$\text{grid volume}= 0.1\text{ mm}^3 = 0.0001\text{ mL} $$ $$\text{number of grids}= 5$$ $$\text{total volume} = \text{grid volume}\times \text{number of grids}$$ $$\text{total volume} = 0.0001\text{ mL}\times 5 = 0.0005\text{ mL}$$


                    <br> $$\text{total cell count} = \sum_{i=1}^5 \text{area count}_n$$

                    <div class="center"> \(\text{total cell count} =\) <span id="area_s1_total_1">0</span> \(+\) <span id="area_s1_total_2">0</span> \(+\) <span id="area_s1_total_3">0</span> \(+\) <span id="area_s1_total_4">0</span> \(+\) <span id="area_s1_total_5">0</span> \(=\) <span class="area_s1_total_count">0</span> \(\text{ cells}\)</div>
                    <br>
                    <br>
                </div>


                <div class="center">
                    \(\text{cell concentration} =\)
                    <span class="fraction">
                    <span class="numerator" >
                        <span class="area_s1_total_count">0</span> \(\text{ cells}\times \text{ 0.01}\)
                    </span>
                    <span class="denominator">\(0.0005\text{ mL}\)</span>
                    </span> \(=\) <span class="cell_concentration">0</span> \(\text{cells/mL}\)
                </div>
                
                <br>
                <h4>Cell Viability</h4>
                $$\text{% viability} = \frac{\text{live cells}}{\text{total cell count}}\times 100\%$$
                <div class="steps">

                    <div class="center"> \(\text{total cell count} =\) <span id="area_s1_viable_1">0</span> \(+\) <span id="area_s1_viable_2">0</span> \(+\) <span id="area_s1_viable_3">0</span> \(+\) <span id="area_s1_viable_4">0</span> \(+\) <span id="area_s1_viable_5">0</span> \(=\) <span class="area_s1_viable_count">0</span> \(\text{ cells}\)</div>
                </div>

                <div class="center">
                    \(\text{% viability} =\)
                    <span class="fraction">
                    <span class="numerator" >
                        <span class="area_s1_viable_count">0</span>
                    </span>
                    <span class="denominator"><span class="area_s1_total_count">0</span> </span>
                    </span> \(\times \text{ 100%} = \) <span id="viability">0</span>\(\%\)
                </div>

                <br> 
                <h4>Cell Pitching Rate</h4>$$\text{cells required} = \text{gravity} \times\text{batch size}\times \text{pitching rate}$$

                <div class="center"> \(\text{gravity} =\) <input id="gravity" type="number" min="0" value="" oninput="requiredCells(this);" onchange="requiredCells(this);">
                    <select id="gravity_unit" oninput="requiredCells(this);" onchange="requiredCells(this);">
                <option value="Plato">Plato scale (°P)</option>
                <option value="Brix">Brix scale</option>
            </select>
                </div>
                <br>

                <div class="center"> \(\text{batch size} =\) <input id="batch" type="number" min="0" value="" oninput="requiredCells(this);" onchange="requiredCells(this);">
                    <select id="batch_unit" oninput="requiredCells(this);" onchange="requiredCells(this);">
                <option value="gallon">gallon (gal)</option>
                <option value="liter">liter (L)</option>
                <option value="hectoliter">hectoliter (hL)</option>
                <option value="barrel">barrel (bbl)</option>
            </select></div>

                <br>

                <div class="center"> \(\text{pitching rate} =\) <input id="rate" type="number" min="0" value="" oninput="requiredCells(this);" onchange="requiredCells(this);"> \(\frac{\text{cells } \times \ \mathrm{^o}\text{P}}{\text{mL}}\)</div>


                <br>

                <div class="center">
                    \(\text{cells required} =\)
                    <span id="gravity_value">0</span>\(\mathrm{^oP }\text{ }\times\)
                    <span id="batch_value">0</span> \(\text{mL } \times\)
                    <span id="rate_value">0</span> \(\frac{\text{cells } \times \ \mathrm{^oP}}{\text{mL }}=\)
                    <span class="cells_required">0</span> \(\text{cells}\)
                </div>
                <br>
                <br>
                <h4>Yeast Required</h4>$$\text{yeast required} = \frac{\text{cells required}}{\text{cell concentration }\times\text{ % viability}} $$
                <div class="center">
                    yeast <span id="yeast_type"></span>\(\text{ required} = \)
                    <span class="fraction">
                    <span class="numerator" >
                        <span class="cells_required">0</span> \(\text{cells}\)
                    </span>
                    <span class="denominator"> <span class="cell_concentration">0</span> \(\text{cells/mL }\times \ \)<span id="viability_decimal">0</span></span>
                    </span> \( =\) <span id="yeastRequired">0</span> \( \text{mL}\)
                    <br>
                </div>

            </div>
        </div>

            <br>
            <hr>         <button class="drawer" name="references" type="button" onclick="toggleDrawer(this);"><img src="../img/pointing-hand-old.png" alt="pointing-hand">
            <h2>References</h2>
        </button>
        <div id="references" class="drawer">
        <?php include("PMW.html");?> 
        </div>
    </section>

</main>
<style>
    section {
        margin: 5px;
    }

    main {
        margin: auto;
        max-width: 600px;
        text-align: justify;
    }
    main img {
        max-width: 300px;
    }
    .hidden {
        display: none;
    }

    .calculator {
        display: grid;
    }

    .grid-container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 1fr 1fr 1fr;
        margin: 20px;
        width: -webkit-fill-available;
        border: double black 3px;
        justify-self: center;
    }

    .grid-item {
        border: double 3px;
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 1fr 1fr;
        justify-items: end;
    }

    input {
        max-width: 90px;
        margin: 0px 3px;
    }

    label {
        padding: 3px;
    }

    .center {
        text-align: center;
    }

    .math {
        font-family: STIXGeneral-Regular;

    }

    .fraction {
        display: inline-flex;
        flex-direction: column;
        padding: 0.5em;
        align-items: stretch;
        vertical-align: middle;
    }

    .numerator {
        border-bottom: 1.3px solid;
    }

    .denominator {
        padding-top: 3px;
    }

    .steps {
        display: none;
    }

    .drawer {
        height: auto;
        overflow: hidden;

    }

    div.drawer {
        transition: linear 3s;
        height: auto;
    }

    button.drawer {
        background: transparent;
        border: none;
        cursor: pointer;
        text-align: left;
        width: 100%;
    }
    button.drawer:focus {
        outline: none;
    }

    div.drawer-closed {
        height: 0px;
        display: none;
    }

    main img {
        display: block;
        margin: 0px auto 10px auto;
    }

    h2 {
        margin: 0px;
        display: inline-block;
    }

    button img {
            display: inline-block;
    max-width: 38px;
    }
    button:hover img {
            transform: rotate(10deg);

    } 
   li + ol{
        padding-bottom: 15px;
    }
</style>
