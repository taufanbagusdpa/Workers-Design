// Define text style
const text = new Blotter.Text('About', {
  family: "'Buenard', sans-serif",
  size: window.innerWidth / 8,
  fill: "#00BFFF",
  paddingLeft: 25,
  paddingRight: 50,
  size : 250,
});

// Use a material
// https://blotter.js.org/#/materials
let material = new Blotter.LiquidDistortMaterial();

// Set material opts
material.uniforms.uSpeed.value = 0.3;
material.uniforms.uVolatility.value = 0.10;
material.uniforms.uSeed.value = 0.1;

let blotter = new Blotter(material, {
  texts: text
});

// Apply to element
let scope = blotter.forText(text);
let elem = document.getElementById('distortion-text');
document.getElementById("distortion-text").style.transform = "rotate(-90deg) translateY(-50%)";
document.getElementById("distortion-text").style.width = "100%";
document.getElementById("distortion-text").style.height = "auto";
// document.getElementById("distortion-text").style.marginLeft = "5%";
document.getElementById("distortion-text").style.paddingLeft = "25%";
document.getElementById("distortion-text").style.marginTop = "25%";
document.getElementById("distortion-text").style.fontWeight = "900";
scope.appendTo(elem);

$(document).ready(function(){
    $('#desc').typewrite({
        actions: [
            {type: 'Hello. '},
            {type: '<br>'},
            {type: 'Weclome '},
            {delay: 1500},
            {remove: {num: 1, type: 'stepped'}},
            {select: {from: 11, to: 16}},
            {delay: 2000},
            {remove: {num: 5, type: 'whole'}},
            {delay: 300},
            {type: 'lcome to `Workers Design`. '},
            {type: '<br>'},
            {type: 'We\'re good, honest and awesome.'}
        ]
    });
});
