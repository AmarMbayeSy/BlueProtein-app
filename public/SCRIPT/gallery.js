function openModal(product) {
    var modal = document.getElementById("productModal");
    var modalTitle = document.getElementById("modalTitle");
    var modalImage = document.getElementById("modalImage");
    var modalDescription = document.getElementById("modalDescription");

    switch(product) {
        case 'product1':
            modalTitle.innerText = "Produit 1";
            modalImage.src = "./immmmage/pexels-goumbik-298696.jpg";
            modalDescription.innerText = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
            break;
        case 'product2':
            modalTitle.innerText = "Produit 2";
            modalImage.src = "./immmmage/pexels-goumbik-298696.jpg";
            modalDescription.innerText = "Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
            break;
        case 'product3':
            modalTitle.innerText = "Produit 3";
            modalImage.src = "./immmmage/pexels-goumbik-298696.jpg";
            modalDescription.innerText = "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.";
            break;
        case 'product4':
            modalTitle.innerText = "Produit 4";
            modalImage.src = "./immmmage/pexels-goumbik-298696.jpg";
            modalDescription.innerText = "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.";
            break;
        case 'product5':
            modalTitle.innerText = "Produit 5";
            modalImage.src = "./immmmage/pexels-goumbik-298696.jpg";
            modalDescription.innerText = "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.";
            break;
        case 'product6':
            modalTitle.innerText = "Produit 6";
            modalImage.src = "./immmmage/pexels-goumbik-298696.jpg";
            modalDescription.innerText = "Deserunt mollit anim id est laborum.";
            break;
        case 'product7':
            modalTitle.innerText = "Produit 7";
            modalImage.src = "./immmmage/pexels-goumbik-298696.jpg";
            modalDescription.innerText = "Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.";
            break;
        case 'product8':
            modalTitle.innerText = "Produit 8";
            modalImage.src = "./immmmage/pexels-goumbik-298696.jpg";
            modalDescription.innerText = "Donec ullamcorper nulla non metus auctor fringilla.";
            break;
        case 'product9':
            modalTitle.innerText = "Produit 9";
            modalImage.src = "./immmmage/pexels-goumbik-298696.jpg";
            modalDescription.innerText = "Cras justo odio, dapibus ac facilisis in, egestas eget quam.";
            break;
        case 'product10':
            modalTitle.innerText = "Produit 10";
            modalImage.src = "./immmmage/pexels-goumbik-298696.jpg";
            modalDescription.innerText = "Morbi leo risus, porta ac consectetur ac, vestibulum at eros.";
            break;
        case 'product11':
            modalTitle.innerText = "Produit 11";
            modalImage.src = "./immmmage/pexels-goumbik-298696.jpg";
            modalDescription.innerText = "Aenean lacinia bibendum nulla sed consectetur.";
            break;
        case 'product12':
            modalTitle.innerText = "Produit 12";
            modalImage.src = "./immmmage/pexels-goumbik-298696.jpg";
            modalDescription.innerText = "Etiam porta sem malesuada magna mollis euismod.";
            break;
        default:
            break;
    }

    modal.style.display = "block";
}

function closeModal() {
    document.getElementById("productModal").style.display = "none";
}

// Fermer le modal si l'utilisateur clique en dehors de celui-ci
window.onclick = function(event) {
    var modal = document.getElementById("productModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
}