window.onload = function () {

    $(document).ready(function () {
      // Handle image click event
      $('.img-thumbnail').click(function () {
        const imagePath = $(this).attr('src');
        $('#lightbox-img').attr('src', imagePath);
      });
  
      // Clear image source when the modal is closed
      $('#lightboxModal').on('hidden.bs.modal', function () {
        $('#lightbox-img').attr('src', '');
      });
    });
}

function setDeleteId(templateId) {
    document.getElementById('modalTemplateId').value = templateId;
}