document.querySelectorAll('.tab-button').forEach(button => {
    button.addEventListener('click', () => {
        document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
        document.getElementById(button.getAttribute('data-tab')).classList.add('active');
    });
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
  