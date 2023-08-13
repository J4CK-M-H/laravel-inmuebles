import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone', {
  dictDefaultMessage: 'Imagen de la propiedad',
  acceptedFiles: '.png, .jpg',
  addRemoveLinks: true,
  dictRemoveFile: 'Borrar Archivo',
  maxFiles: 1,
  uploadMultiple: false,

  init: function(){
    if(document.querySelector('[name="imagen"]').value.trim()){
      const imagenPublicada = {};
      imagenPublicada.size = 1234;
      imagenPublicada.name = document.querySelector('[name="imagen"]').value;

      this.options.addedfile.call( this, imagenPublicada );
      this.options.thumbnail.call( this, imagenPublicada, `/uploads/${imagenPublicada.name}`);

      imagenPublicada.previewElement.classList.add('dz-success', 'dz-complete');
    }
  }
});

dropzone.on('sending', function(file, xhr, formData) {
    console.log(formData)
});

dropzone.on('success', function(file, response) {
  console.log(response.imagen);
  document.querySelector('[name="imagen"]').value = response.imagen;
});

dropzone.on('removedFile', function() {
  document.querySelector('[name="imagen"]').value = "";
});