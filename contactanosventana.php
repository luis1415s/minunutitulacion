<link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/4.1.7/sweetalert2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/4.1.7/sweetalert2.css" />
<script src="https://cdn.jsdelivr.net/sweetalert2/4.1.7/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/sweetalert2/4.1.7/sweetalert2.js"></script>

<script type="text/javascript">
        $('document').ready(function(){
            $('.formulario').click(function(){
                ventana();
            });
        });

        function ventana(){
            swal({
      title: '¡Déjanos tus datos!',
      showCancelButton: true,            
      html: '<p>Pronto nos pondremos en contacto contigo para darte más información sobre MiNuNú.</p><label>Nombre:</label><input id="swal-input1" type="text" class="swal2-input" autofocus><label>Correo:</label><input id="swal-input2" type="email" class="swal2-input" required>',
      preConfirm: function() {
        return new Promise(function(resolve) {

                if($('#swal-input1').val()==""){            
                    return false;
                }else{
                    var nombre = $('#swal-input1').val();
                }

                if($('#swal-input2').val()==""){            
                    return false;
                }else{
                    var correo = $('#swal-input2').val();
                }
            
            

            jQuery.post("registerclients.php", {
            nom:nombre,
            maill:correo

          }, function(data, textStatus){
            console.log(data);
            console.log("-------------");

            if(data == 1){
              /*$('#res').html("Datos insertados.");
              $('#res').css('color','green');
              */
                sweetAlert(
                  '¡Gracias!',
                  'Pronto, nos pondremos en contacto contigo',
                  'success'
                )
             

            }
            else{
              console.log(data);
                sweetAlert(
                  '¡Ooops!',
                  'Ocurrió un error, inténtalo de nuevo',
                  'error'
                )
            }
          });




        });
      }
    }).then(function(result) {
        sweetAlert(
          'Datos insertados...',
          'ya se insertaron!',
          'success'
        )
    }).done();
        }

    </script>