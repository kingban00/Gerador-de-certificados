<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Gerador de certificados |</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <!-- <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" /> -->
  <!-- NProgress -->
  <!-- <link href="../vendors/nprogress/nprogress.css" rel="stylesheet" /> -->
  <!-- iCheck -->
  <!-- <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet" /> -->
  <!-- bootstrap-wysiwyg -->
  <!-- <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet" /> -->
  <!-- Select2 -->
  <!-- <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet" /> -->
  <!-- Switchery -->
  <!-- <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet" /> -->
  <!-- starrr -->
  <!-- <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet" /> -->
  <!-- bootstrap-daterangepicker -->
  <!-- <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" /> -->

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet" />



</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">


          <div class="clearfix"></div>


          <br />

        </div>
      </div>


      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Gerador de certificados</h3>
            </div>


          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="x_panel">

                <div class="x_content">
                  <br />
                  <form id="form" data-parsley-validate id="form" class="form-horizontal form-label-left" method="post" action="certificado.php" enctype="multipart/form-data" target="_blank">
                    <div style="display:flex; justify-content: center; " >
                      <div>

                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">

                          <!-- <label for=""><strong>Nome:</strong></label> <input type="text" id="nome" style="width:250px;"><br>
                          <label for=""><strong>Evento:</strong></label> <input type="text" id="evento" style="width:250px;"><br>
                          <label for=""><strong>Qualidade:</strong></label> <input type="text" id="qualidade" style="width:250px;"><br>
                          <label for=""><strong>Carga horária:</strong></label> <input type="text" id="carga" style="width:250px;"><br>
                          <label for=""><strong>Inicio:</strong></label> <input type="text" id="inicio" style="width:250px;"><br>
                          <label for=""><strong>Fim:</strong></label> <input type="text" id="fim" style="width:250px;"><br> -->

                          <textarea id="certificado_alt" class="form-control tinyEditor" name="certificado_alt" rows="16" style="height: 360px;  ">
                                      <p style="text-align: center;">&nbsp;</p>
                                      <p style="text-align: center;">&nbsp;</p>
                                      <p style="text-align: center;">&nbsp;</p>
                                      <p style="text-align:center">Certificamos que</p>
                                      <p style="text-align:center;text-transform:uppercase;"><strong>@nome</strong></p>
                                      <p style="text-align:center">participou do <strong>@evento</strong> na qualidade de <span style="text-transform:uppercase">@qualidade</span> com carga horário de @cargahoraria hora/aula, realizado em @inicio e @fim.</p>
                                      <p style="text-align:center">Petrolina, @hoje.</p>
                                    </textarea>

                        </div>
                      </div>

                      <!-- <div class="col-md-12 col-sm-12 col-xs-12 form-group" style="margin: auto; ">
                        <div id="certificado_preview_alt" style="width: 45%; margin: auto;">
                          <p style="text-align:center">Certificamos que</p>
                          <br>
                          <p style="text-align:center;text-transform:uppercase;"><strong>@nome</strong></p>
                          <p style="text-align:center">participou do <strong>@evento</strong> na qualidade de <span style="text-transform:uppercase">@qualidade</span> com carga horário de @cargahoraria hora/aula, realizado em @inicio e @fim.</p>
                          <br>
                          <p style="text-align:center">Petrolina, @hoje.</p>
                        </div>
                      </div> -->
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                      <div class="custom-file" style="margin: 30px 0px 1px;">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name" style="width: auto;">Imagem <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input type="file" id='imagem' name="imagem" >
                        </div>
                      </div>
                      <small>Dimensão recomendada(A4): 3508x2480px</small>

                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button class="btn btn-primary" type="button">
                            Cancel
                          </button>
                          <button class="btn btn-primary" type="reset">
                            Reset
                          </button>
                          <button type="submit" class="btn btn-success" onclick="emitir_certificado(this)">
                            Gerar Certificado
                          </button>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
      <!-- /page content -->

    </div>
  </div>

  <!-- jQuery -->
  <!-- <cript src="../vendors/jquery/dist/jquery.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.tiny.cloud/1/fl4gttdw3xjvpma2s74o8hadfhkufihn4ooxn3wwiplpo8w2/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->
  <script src="packages/vendor/tinymce/tinymce.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-jquery@1/dist/tinymce-jquery.min.js"></script>

  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <!-- <script src="../vendors/fastclick/lib/fastclick.js"></script> -->
  <!-- NProgress -->
  <!-- <script src="../vendors/nprogress/nprogress.js"></script> -->
  <!-- bootstrap-progressbar -->
  <!-- <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> -->
  <!-- iCheck -->
  <!-- <script src="../vendors/iCheck/icheck.min.js"></script> -->
  <!-- bootstrap-daterangepicker -->
  <!-- <script src="../vendors/moment/min/moment.min.js"></script> -->
  <!-- <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script> -->
  <!-- bootstrap-wysiwyg -->
  <!-- <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script> -->
  <!-- <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script> -->
  <!-- <script src="../vendors/google-code-prettify/src/prettify.js"></script> -->
  <!-- jQuery Tags Input -->
  <!-- <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script> -->
  <!-- Switchery -->
  <!-- <script src="../vendors/switchery/dist/switchery.min.js"></script> -->
  <!-- Select2 -->
  <!-- <script src="../vendors/select2/dist/js/select2.full.min.js"></script> -->
  <!-- Parsley -->
  <!-- <script src="../vendors/parsleyjs/dist/parsley.min.js"></script> -->
  <!-- Autosize -->
  <!-- <script src="../vendors/autosize/dist/autosize.min.js"></script> -->
  <!-- jQuery autocomplete -->
  <!-- <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script> -->
  <!-- starrr -->
  <!-- <script src="../vendors/starrr/dist/starrr.js"></script> -->
  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>


  <script>
    // $(document).ready(function() {
    //   iniciarTinyMCE();
    //   tinyMCE.get("certificado_alt").on('keyup', certificado_on_key_down);

    // }

    $('textarea#certificado_alt').tinymce({
      height: 500,
      menubar: true,
      plugins: [
        'a11ychecker', 'advlist', 'advcode', 'advtable', 'autolink', 'checklist', 'export',
        'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
        'powerpaste', 'fullscreen', 'formatpainter', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
      ],
      toolbar: 'undo redo | a11ycheck casechange blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist checklist outdent indent | removeformat | code table help'
    });



    function emitir_certificado(e) {
      // let nome = $("#nome").val();
      // let evento = $("#evento").val();
      // let qualidade = $("#qualidade").val();
      // let carga = $("#carga").val();
      // let inicio = $("#inicio").val();
      // let fim = $("#fim").val();

      // const date = new Date();
      // let day = date.getDate();
      // let month = date.getMonth() + 1;
      // let year = date.getFullYear();

      // let data = day + "/" + month + "/" + year

      // let texto = "<p style='text-align: center;'>&nbsp;</p><p style='text-align: center;'>&nbsp;</p><p style='text-align: center;'>&nbsp;</p><p style='text-align:center'>Certificamos que</p><p style='text-align:center;text-transform:uppercase;'><strong> " + nome + " </strong></p><p style='text-align:center'>participou do <strong> " + evento + " </strong> na qualidade de <span style='text-transform:uppercase'> " + qualidade + " </span> com carga horário de " + carga + " hora/aula, realizado em " + inicio + " e " + fim + ".</p><p style='text-align:center'>Petrolina, " + data + ".</p>"
      let html_text = preparar_html_para_pdf($("#certificado_alt").html());
      // let html_text = preparar_html_para_pdf(texto);
      // console.log("evento id", html_text);
      var form = document.getElementById("form");


      i = document.createElement("input");
      i.setAttribute("type", "hidden");
      i.setAttribute("name", "html_text");
      i.setAttribute("value", html_text);
      form.appendChild(i);
      

    }

    function preparar_html_para_pdf(html) {
      let html_jq = $("<div style='width:1000px; height:800px;'></div>");
      html_jq.append("<div style='margin:auto'></div>");
      html_jq.find("div").append(html);
      html_jq.find("p").css("font-size", "25vw");
      console.log('texto = ', $('#certificado_alt').text())

      return html_jq.html();
    }

    // function iniciarTinyMCE(size = null) {
    //   tinymce.init({
    //     selector: 'textarea.tinyEditor',
    //     paste_data_images: true,
    //     entity_encoding: "raw",
    //     language: 'pt_BR',
    //     height: size ? size : 200,
    //     plugins: [
    //       "advlist lists link media image code imagetools charmap print preview hr anchor pagebreak",
    //       "searchreplace wordcount visualblocks visualchars code fullscreen",
    //       "insertdatetime media nonbreaking save table contextmenu directionality",
    //       "emoticons template paste textcolor colorpicker textpattern"
    //     ],
    //     menubar: false,
    //     toolbar1: "undo redo | fontselect fontsizeselect formatselect | bold italic underline | alignleft aligncenter alignright alignjustify",
    //     image_advtab: true,
    //     content_css: [
    //       'assets/vendors/tinymce/css/codepen.min.css',
    //       'assets/vendors/tinymce/css/font.css'
    //     ],
    //     images_upload_url: 'ajax/tinyMCEUpload.php',
    //     convert_urls: false,
    //     images_upload_base_path: './uploads/simulado/imgs',

    //     style_formats: [{
    //         title: "Headers",
    //         items: [{
    //             title: "Header 1",
    //             format: "h1"
    //           },
    //           {
    //             title: "Header 2",
    //             format: "h2"
    //           },
    //           {
    //             title: "Header 3",
    //             format: "h3"
    //           },
    //           {
    //             title: "Header 4",
    //             format: "h4"
    //           },
    //           {
    //             title: "Header 5",
    //             format: "h5"
    //           },
    //           {
    //             title: "Header 6",
    //             format: "h6"
    //           }
    //         ]
    //       },
    //       {
    //         title: "Inline",
    //         items: [{
    //             title: "Bold",
    //             icon: "bold",
    //             format: "bold"
    //           }, {
    //             title: "Italic",
    //             icon: "italic",
    //             format: "italic"
    //           },
    //           {
    //             title: "Sublinhado",
    //             icon: "underline",
    //             format: "underline"
    //           }, {
    //             title: "Strikethrough",
    //             icon: "strikethrough",
    //             format: "strikethrough"
    //           }, {
    //             title: "Superscript",
    //             icon: "superscript",
    //             format: "superscript"
    //           }, {
    //             title: "Subscript",
    //             icon: "subscript",
    //             format: "subscript"
    //           }, {
    //             title: "Code",
    //             icon: "code",
    //             format: "code"
    //           }
    //         ]
    //       },
    //       {
    //         title: "Blocos",
    //         items: [{
    //           title: "Paragraph",
    //           format: "p"
    //         }, {
    //           title: "Blockquote",
    //           format: "blockquote"
    //         }, {
    //           title: "Div",
    //           format: "div"
    //         }, {
    //           title: "Pre",
    //           format: "pre"
    //         }]
    //       },
    //       {
    //         title: "Alinhamento",
    //         items: [{
    //           title: "À Esquerda",
    //           icon: "alignleft",
    //           format: "alignleft"
    //         }, {
    //           title: "Centralizado",
    //           icon: "aligncenter",
    //           format: "aligncenter"
    //         }, {
    //           title: "À Direita",
    //           icon: "alignright",
    //           format: "alignright"
    //         }, {
    //           title: "Justificado",
    //           icon: "alignjustify",
    //           format: "alignjustify"
    //         }]
    //       },
    //       {
    //         title: "Fonte",
    //         items: [{
    //             title: 'Arial',
    //             inline: 'span',
    //             styles: {
    //               'font-family': 'arial'
    //             }
    //           },
    //           {
    //             title: 'Book Antiqua',
    //             inline: 'span',
    //             styles: {
    //               'font-family': 'book antiqua'
    //             }
    //           },
    //           {
    //             title: 'Comic Sans MS',
    //             inline: 'span',
    //             styles: {
    //               'font-family': 'comic sans ms,sans-serif'
    //             }
    //           },
    //           {
    //             title: 'Courier New',
    //             inline: 'span',
    //             styles: {
    //               'font-family': 'courier new,courier'
    //             }
    //           },
    //           {
    //             title: 'Georgia',
    //             inline: 'span',
    //             styles: {
    //               'font-family': 'georgia,palatino'
    //             }
    //           },
    //           {
    //             title: 'Helvetica',
    //             inline: 'span',
    //             styles: {
    //               'font-family': 'helvetica'
    //             }
    //           },
    //           {
    //             title: 'Impact',
    //             inline: 'span',
    //             styles: {
    //               'font-family': 'impact,chicago'
    //             }
    //           },
    //           {
    //             title: 'Open Sans',
    //             inline: 'span',
    //             styles: {
    //               'font-family': 'Open Sans'
    //             }
    //           },
    //           {
    //             title: 'Symbol',
    //             inline: 'span',
    //             styles: {
    //               'font-family': 'symbol'
    //             }
    //           },
    //           {
    //             title: 'Tahoma',
    //             inline: 'span',
    //             styles: {
    //               'font-family': 'tahoma'
    //             }
    //           },
    //           {
    //             title: 'Terminal',
    //             inline: 'span',
    //             styles: {
    //               'font-family': 'terminal,monaco'
    //             }
    //           },
    //           {
    //             title: 'Times New Roman',
    //             inline: 'span',
    //             styles: {
    //               'font-family': 'times new roman,times'
    //             }
    //           },
    //           {
    //             title: 'Verdana',
    //             inline: 'span',
    //             styles: {
    //               'font-family': 'Verdana'
    //             }
    //           }
    //         ]
    //       },
    //       {
    //         title: "Tamanho da fonte",
    //         items: [{
    //             title: '8pt',
    //             inline: 'span',
    //             styles: {
    //               fontSize: '12px',
    //               'font-size': '8px'
    //             }
    //           },
    //           {
    //             title: '10pt',
    //             inline: 'span',
    //             styles: {
    //               fontSize: '12px',
    //               'font-size': '10px'
    //             }
    //           },
    //           {
    //             title: '12pt',
    //             inline: 'span',
    //             styles: {
    //               fontSize: '12px',
    //               'font-size': '12px'
    //             }
    //           },
    //           {
    //             title: '14pt',
    //             inline: 'span',
    //             styles: {
    //               fontSize: '12px',
    //               'font-size': '14px'
    //             }
    //           },
    //           {
    //             title: '16pt',
    //             inline: 'span',
    //             styles: {
    //               fontSize: '12px',
    //               'font-size': '16px'
    //             }
    //           },
    //           {
    //             title: '18pt',
    //             inline: 'span',
    //             styles: {
    //               fontSize: '18px',
    //               'font-size': '18px'
    //             }
    //           },
    //           {
    //             title: '20pt',
    //             inline: 'span',
    //             styles: {
    //               fontSize: '20px',
    //               'font-size': '20px'
    //             }
    //           },
    //           {
    //             title: '24pt',
    //             inline: 'span',
    //             styles: {
    //               fontSize: '24px',
    //               'font-size': '24px'
    //             }
    //           }
    //         ]
    //       }
    //     ],
    //   });
    // }
  </script>
</body>

</html>