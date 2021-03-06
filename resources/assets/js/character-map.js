var svg, width, height, color, simulation;
var svgElement;

$(document).ready(function() {
    console.log('init character-map');

    svgElement = $('.character-map-svg');

    svg = d3.select(".character-map-svg");
    width = +svg.attr("width");
    height = +svg.attr("height");


    var url = svgElement.data('url');

    color = d3.scaleOrdinal(d3.schemeCategory20);

    simulation = d3.forceSimulation()
        .force("link", d3.forceLink().id(function(d) { return d.id; }).distance(function(d) { return d.distance }).strength(1))
        .force("charge", d3.forceManyBody())
        .force("center", d3.forceCenter(width / 2, height / 2))
    ;

    d3.json(url, function(error, graph) {
        if (error) throw error;

        var defs = svg.append("defs")
            .attr("class", "defs")
            .selectAll("pattern")
            .data(graph.nodes)
            .enter().append("pattern")
            .attr("id", function(d) { return "img-" + d.id})
            .attr("width", "1")
            .attr("height", "1")
            ;

        defs.append("image")
                .attr("xlink:href", function(d) { return d.image})
                .attr("height", "100")
                .attr("width", "100")
                .attr("x", -30)
                .attr("y", -20)
        ;

        var link = svg.append("g")
            .attr("class", "links")
            .selectAll("line")
            .data(graph.links)
            .enter().append("line")
            .attr("stroke-width", function(d) { return Math.sqrt(d.value); });

        var circles = svg.append("g")
            .attr("class", "nodes")
            .selectAll("circle")
            .data(graph.nodes)
            .enter().append("circle")
            .attr("r", 25)
            .attr("fill", function (d) { return "url(#img-" + d.id})
            .call(d3.drag()
                .on("start", dragstarted)
                .on("drag", dragged)
                .on("end", dragended))
        ;

        var label = svg.append("g")
            .attr("class", "texts")
            .selectAll("circle")
            .data(graph.nodes)
            .enter().append("a")
            .attr("xlink:href", function(d) { return d.link})
            .append("text")
            .text(function(d) { return d.name; })
        ;

        // node.data(graph.nodes)
        //     .enter().append("");

        simulation
            .nodes(graph.nodes)
            .on("tick", ticked);

        simulation.force("link")
            .links(graph.links);

        function ticked() {
            link
                .attr("x1", function(d) { return d.source.x; })
                .attr("y1", function(d) { return d.source.y; })
                .attr("x2", function(d) { return d.target.x; })
                .attr("y2", function(d) { return d.target.y; });

            circles
                .attr("cx", function(d) { return d.x; })
                .attr("cy", function(d) { return d.y; });

            label
                .attr("x", function(d) { return d.x })
                .attr("y", function(d) { return d.y + 40 });
        }
    });

});


function dragstarted(d) {
    if (!d3.event.active) simulation.alphaTarget(0.3).restart();
    d.fx = d.x;
    d.fy = d.y;
}

function dragged(d) {
    d.fx = d3.event.x;
    d.fy = d3.event.y;
}

function dragended(d) {
    if (!d3.event.active) simulation.alphaTarget(0);
    d.fx = null;
    d.fy = null;
}