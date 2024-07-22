var swiper = new Swiper(".unique-swiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  loop: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 150,
    modifier: 2.5,
    slideShadows: true,
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".unique-swiper-button-next",
    prevEl: ".unique-swiper-button-prev",
  },
  pagination: {
    el: ".unique-pagination",
    clickable: true,
  },
});
function showProductModal(produit) {
  $('#nom_produit').val(produit.nom_produit);
  // Remplir les autres champs de manière similaire
  // $('#autre_champ').val(produit.autre_champ);
  
  // Définir l'action du formulaire avec l'URL correcte pour l'édition du produit
  $('#editProductForm').attr('action', `/produits/${produit.id}`);

  // Modifier le method de la requête en PUT
  $('#editProductForm').find('input[name="_method"]').val('PUT');
  
  // Afficher le modal
  $('#editProductModal').modal('show');
}

function deleteProduct() {
  if (confirm("Êtes-vous sûr de vouloir supprimer ce produit ?")) {
    // Modifier l'action du formulaire pour envoyer une requête DELETE
    $('#editProductForm').find('input[name="_method"]').val('DELETE');
    
    // Soumettre le formulaire
    $('#editProductForm').submit();
  }
}
