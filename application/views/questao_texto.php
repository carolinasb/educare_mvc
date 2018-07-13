<html>
    <head>
        <title>Questão</title>

<!--        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"/>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet" />
        <link href="<?php echo base_url('richtext/external/google-code-prettify/prettify.css') ?>" rel='stylesheet'/>
        <script src="<?php echo base_url('richtext/external/jquery.hotkeys.js') ?>"></script>
        <script src="<?php echo base_url('richtext/external/google-code-prettify/prettify.js') ?>"></script>
        <link href="<?php echo base_url('richtext/css/style.css') ?>" rel="stylesheet">
        <script src="<?php echo base_url('richtext/src/bootstrap-wysiwyg.js') ?>"></script>-->
        <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
        <meta charset="UTF-8"/>
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo.png') ?>"/>
        <meta charset="utf-8">

        <script type="text/javascript">
//          $(function () {
//              function initToolbarBootstrapBindings() {
//                  var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
//                      'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
//                      'Times New Roman', 'Verdana'],
//                          fontTarget = $('[title=Font]').siblings('.dropdown-menu');
//                  $.each(fonts, function (idx, fontName) {
//                      fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
//                  });
//                  $('a[title]').tooltip({container: 'body'});
//                  $('.dropdown-menu input').click(function () {
//                return false;
//              })
//                          .change(function () {
//                        $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
//                      })
//                          .keydown('esc', function () {
//                        this.value = '';
//                        $(this).change();
//                      });
//
//                  $('[data-role=magic-overlay]').each(function () {
//                      var overlay = $(this), target = $(overlay.data('target'));
//                      overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
//                  });
//                  if ("onwebkitspeechchange"  in document.createElement("input")) {
//                      var editorOffset = $('#editor').offset();
//                      //$('#voiceBtn').css('position','absolute').offset({top: editorOffset.top, left: editorOffset.left+$('#editor').innerWidth()-35});
//                  } else {
//                      $('#voiceBtn').hide();
//                  }
//              }
//            ;
//              function showErrorAlert(reason, detail) {
//                  var msg = '';
//                  if (reason === 'unsupported-file-type') {
//                msg = "Unsupported format " + detail;
//              } else {
//                      console.log("error uploading file", reason, detail);
//                  }
//                  $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
//                          '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
//              }
//            ;
//              initToolbarBootstrapBindings();
//              $('#editor').wysiwyg({fileUploadError: showErrorAlert});
//              window.prettyPrint && prettyPrint();
//          });
          $(document).ready(function () {
              $("#outro").click(function () {
                  $("#texto").css("display","initial");
                  $("#questao").css("display","none");
                  $("#novoTexto").css("display","none");
                  
              });
              
              $("#outra").click(function () {
                  $("#novaAlternativa").css("display","initial");
              });
              
              
           
//              $("#btnGenerate").click(function(){
//		$("#form").css("display","initial");
//		$("#richbox").css("display","none");
//		$("#contenido").val($("#editor").cleanHtml(true));
//              });
//              
//              $("#btnEdit").click(function() {
//		$("#form").css("display","none");
//		$("#richbox").css("display","initial");
//              });
          });
        </script>
    </head>

    <body>
        
      <?php 

        if(isset($mensagem)){
          echo "<h3>$mensagem</h3>";
        }
      ?>       
        <main>
<!--            <div id="richbox">
                <?php //generate_rich_box("Insira o texto:"); ?>
                <button id="btnGenerate">Continuar</button>
            </div>
            
            <div id="form">
                <button id="btnEdit">Editar</button>
            </div>-->
            <div id="questao" style="display:initial;">
                <form action="salvarquestao" method="POST">
                    <h3>Nova questão:</h3>
                    <label>(*) Questão:</label><br>
                    <textarea name="questao" style="width:300px; height:150px;"></textarea><br><br>

                <label>(*) Alternativa A: </label><br>
                    <input type="text" name="alternativaA" required><br>
                <label>(*) Alternativa B: </label><br>
                    <input type="text" name="alternativaB" required><br>
                <label>(*) Alternativa C: </label><br>
                    <input type="text" name="alternativaC" required><br>
                <label>(*) Alternativa D: </label><br>
                    <input type="text" name="alternativaD" required><br>
                    
                    <label>(*)Assunto: <br></label>
                    <select id="assuntos" name="assunto">
                      <?php echo $options_assuntos; ?>
                    </select>
                    <br>
                    <br>
                    
                    <label>(*)Texto: <br></label>
                    <select id="assuntos" name="texto">
                      <?php echo $options_texto; ?>
                       <option value="">Não possui</option>
                    </select>
                    <br>
                    <input class="botao" type="submit" value="Enviar" name="Enviar" title="Enviar"/>
                </form>
            </div>

            <div id="novoTexto">
              Deseja cadastrar outro texto?
                <button id="outro">Clique aqui</button>
            </div>
            
            <div id="texto" style="display:none;">
                <form action="salvartexto" method="POST">
                    <h3> Novo texto: </h3>
                    <label>(*) Título:  </label><br>
                    <input type="text" name="titulo" required><br>
                    <label>(*) Autor:  </label><br>
                    <input type="text" name="autor" required><br>
                    <label>(*) Texto:  </label><br>
                    <textarea name="texto" style="width:300px; height:300px;"></textarea><br>
                    <input id="registrarTexto" type="submit" value="Registrar" name="Registrar"/>
                </form>
            </div>
        </main>
    </body>
</html>

