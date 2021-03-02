$(function() {
    var valorBarra = 0; //valor inicial en el cual empezaria
    var interval = setInterval(function() {
        valorBarra += 10; //aumenta de 10 en 10
        $("#dynamic")
        .css("width", valorBarra + "%")
        .attr("aria-valuenow", valorBarra)
        .text(valorBarra + "% donado");
        if (valorBarra >= 50) //limite al cual llegaria
            clearInterval(interval);
    }, 1000);
});