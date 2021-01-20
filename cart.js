console.log("Adding to cart...");

let carts = document.querySelectorAll('addToCartBtn');
for(i=0;i<=carts.length;i++) {
    carts[i].addEventListener('click', () => {
        console.log('Added to cart');
    })
}