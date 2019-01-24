var ageSlider = document.getElementById("ageRange");
var ageOutput = document.getElementById("ageOutput");
ageOutput.innerHTML = ageSlider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
ageSlider.oninput = function () {
    ageOutput.innerHTML = this.value;
};

var priceSlider = document.getElementById("priceRange");
var priceOutput = document.getElementById("priceOutput");
priceOutput.innerHTML = priceSlider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
priceSlider.oninput = function () {
    priceOutput.innerHTML = this.value;
};