import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

if(document.querySelector('#dropzone')) {

    const dropzone = new Dropzone("#dropzone", {
        dictDefaultMessage: "Sube aquí tu imagen",
        acceptedFiles: ".png,.jpg,.jpeg,.gif",
        addRemoveLinks: true,
        dictRemoveFile: "Borrar Archivo",
        maxFiles: 1,
        uploadMultiple: false,
    
        init: function () {
            if (document.querySelector('[name="imagen"]').value.trim()) {
                const imagenPublicada = {};
                imagenPublicada.size = 1234;
                imagenPublicada.name =
                    document.querySelector('[name="imagen"]').value;
    
                this.options.addedfile.call(this, imagenPublicada);
    
                this.options.thumbnail.call(
                    this,
                    imagenPublicada,
                    `/uploads/${imagenPublicada.name}`
                );
    
                imagenPublicada.previewElement.classList.add(
                    "dz-success",
                    "dz-complete"
                );
            }
        },
    });
    
    dropzone.on("success", function (file, response) {
        document.querySelector('[name="imagen"]').value = response.imagen;
    });
    
    dropzone.on("removedfile", function () {
        document.querySelector('[name="imagen"]').value = "";
    });
    
}

if(document.querySelector('#dropzone2')) {

    const dropzonebanner = new Dropzone("#dropzone2", {
        dictDefaultMessage: "Sube aquí tu banner",
        acceptedFiles: ".png,.jpg,.jpeg,.gif",
        addRemoveLinks: true,
        dictRemoveFile: "Borrar Archivo",
        maxFiles: 1,
        uploadMultiple: false,
    
        init: function () {
            if (document.querySelector('[name="banner"]').value.trim()) {
                const bannerPublicada = {};
                bannerPublicada.size = 1234;
                bannerPublicada.name =
                    document.querySelector('[name="banner"]').value;
    
                this.options.addedfile.call(this, bannerPublicada);
    
                this.options.thumbnail.call(
                    this,
                    bannerPublicada,
                    `/uploads/${bannerPublicada.name}`
                );
    
                bannerPublicada.previewElement.classList.add(
                    "dz-success",
                    "dz-complete"
                );
            }
        },
    });
    
    dropzonebanner.on("success", function (file, response) {
     
        document.querySelector('[name="banner"]').value = response.imagen;
    });
    
    dropzonebanner.on("removedfile", function () {
        document.querySelector('[name="banner"]').value = "";
    });
    
}






