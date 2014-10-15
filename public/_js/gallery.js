Gallery.prototype.next = function(){
    $(this.selector).attr("src", this.images[this.index]);
    if (++this.index > this.images.length - 1) this.index = 0;
};

function Gallery(selector, timing, images){
    this.selector = selector;
    this.images = images;
    this.index = 0;
    setInterval(this.next.bind(this), timing);
};

var CupcakeGallery = new Gallery("#gallery img", 3000, [
    "_images/cupcakes/vanilla-pink.jpg",
    "_images/cupcakes/halloween-cupcakes-e1288184827127.jpg",
    "_images/cupcakes/snowman.jpeg",
    "_images/cupcakes/Mini-mouse.jpg",
    "_images/cupcakes/graduation.jpg",
    "_images/cupcakes/Cookies-and-Cream-Cupcakes.jpg",
    "_images/cupcakes/pumpkin-patch-cupcake.jpg",
    "_images/cupcakes/red-velvet-cupcake.jpg"
]);
