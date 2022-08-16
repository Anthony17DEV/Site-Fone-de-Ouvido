<html>
  <head>
    <title>PHP Test</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript">
    
    // Algumas variáveis úteis. Pode modificar livremente.

    valorBase = 700;

    corEscolhida = '';

    tamanhoCaboEscolhido = 0;

    

    function cor(cor){
	   $("#headphone").attr('src','images/'+cor)	
	   if(cor == "red.png"){
       $("#valorFinal").hmtl(700)
       valorBase = 700;
       corEscolhida = 'Vermelhão'
     }
     if(cor == "blue.png"){
       $("#valorFinal").html(710)
       valorBase = 710;
       corEscolhida = 'Azulão'
     }
	   if(cor == "black.png"){
       $("#valorFinal").html(720)
       valorBase = 720;
       corEscolhida = 'Pretão'
     }
    }
    function cabo(comprimento){
	  if(comprimento == "1"){
      $("#valorFinal").html(valorBase)
    }
    if(comprimento == "2"){
      $("#valorFinal").html(valorBase+15)
    }
    if(comprimento == "3"){
      $("#valorFinal").html(valorBase+25)
    }
    }
    
    // Essa é uma possibilidade de usar a função getQR. Pode modificar livremente.
    function getQR(){
      $.post('getQR.php',{cor : corEscolhida, tamanho: tamanhoCaboEscolhido}, function(data)
      {
        $('#qrcode').html(data);
      }
      )
    }
    </script>
  </head>
  <body>
<main class="container">

      <!-- Left Column / Headphones Image -->
      <div class="left-column">
        <img id="headphone" class="active" src="images/red.png" alt="">
      </div>


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Headphones</span>
          <h1>Beats EP</h1>
          <p>O fone de ouvido supra-auricular Beats EP oferece som da mais alta qualidade. Seu design sem bateria oferece reprodução ilimitada. E sua estrutura elegante e resistente é reforçada com aço inoxidável leve.</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
          <div class="product-color">
            <span>Cor</span>

            <div class="color-choose">
              <div>
                <input onclick="cor('red.png')" data-image="red" type="radio" id="red" name="color" value="red">
                <label for="red"><span></span></label>
              </div>
              <div>
                <input onclick="cor('blue.png')" data-image="blue" type="radio" id="blue" name="color" value="blue">
                <label for="blue"><span></span></label>
              </div>
              <div>
                <input onclick="cor('black.png')" data-image="black" type="radio" id="black" name="color" value="black">
                <label for="black"><span></span></label>
              </div>
            </div>

          </div>

          <!-- Cable Configuration -->
          <div class="cable-config">
            <span>Comprimento do cabo</span>
            <div class="cable-choose">
              <button onclick="cabo(1)">1m</button>
              <button onclick="cabo(2)">2m</button>
              <button onclick="cabo(3)">3m</button>
            </div>
          </div>
        </div>

        <!-- Product Pricing -->
        <div class="product-price">
          <span>R$</span><span id="valorFinal">700</span>
          <a href="javascript:getQR()" class="cart-btn">Gerar QRCode</a>
          <div id="qrcode"></div>
        </div>
      </div>
    </main>
  </body>
</html>
