
      <div class="container">
        <h2 class="my-md-5">Dejanos un comentario:</h2>
        <div class="row">
          <div class="col-md-12 order-2">
            <?php echo do_shortcode('[contact-form-7 id="469" title="comentarios"]'); ?>
          </div>
        </div>
      </div>
    <script>
     $(document).ready(function(){
            console.log("asd");
            var categoria = window.location.href;
            // categoria = categoria.substring(0, categoria.lastIndexOf('/'));
            categoria = basename(categoria);
            console.log(categoria);
     });
     function basename(path) {
          return path.split('/').reverse()[0];
      }
    </script>


    <style>
      textarea {
        width: 540px!important;
        height: 88px!important;
      }
    </style>