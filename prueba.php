<html><head>
  <title>Natural Language Form Example</title>
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <style>
    @-ms-viewport{
      width: device-width;
    }
    body {
        background: #4BB5C1;
        font-family: 'Lato', sans-serif;
        font-size: 1.5em;
        line-height: 1.1em;
        letter-spacing: .05em;
        margin: 0;
    }
    header {
      background: #46ABB6;
      padding: 20px 0;
    }
    h1.heading {
        line-height: 1.1em;
        text-align: center;
        font-weight: 400;
        font-size: 1.7em;
        color: #EDF7F2;
    }
    div.naturallanguageform {
        width: 900px;
        margin: 2% auto;
        max-width: 95%;
        min-height: 400px;
        border-radius: 5px;
        color: #FFF;
        font-size: 1.5em;
    }
    div.nlfinner {
        width: 96%;  
        padding: 2%;
    }
    p.line {
        line-height: 1.5em;
        font-weight: 300;
    }
    span.textinput {
    }
    input.textinput {
        background: none;
        border: 0;
        border-bottom: 1px dashed #EEE;
        width: auto;
        font-size: 1em;
        color: #B5E655;
        font: inherit;
    }
    input.textinput:focus {
        outline: none;
        border-bottom: 1px dashed #DD0000;
    }
    ::-webkit-input-placeholder { /* WebKit browsers */
        color:    #B5E655;
        font-weight: 300;
    }
    :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
        color:    #B5E655;
        opacity:  1;
    }
    ::-moz-placeholder { /* Mozilla Firefox 19+ */
        color:    #B5E655;
        opacity:  1;
    }
    :-ms-input-placeholder { /* Internet Explorer 10+ */
        color:    #B5E655;
    }
    select.dropdown {
        font-size: 1em;
        color: #B5E655;
        border: none;
        border-bottom: 1px dashed #EFEFEF;
        -webkit-appearance: none;
        -moz-appearance: none;
        background: none;
        width: auto;
        text-indent: 0.01px;
        text-overflow: "";
        box-shadow: none;
        font: inherit;
    }
    select.dropdown:focus {
        outline: none;
        border-bottom: 1px dashed #DD0000;
    }
    button.button {
      background: #388891;
      border: none;
      padding: 10px 50px;
      font-size: 1em;
      color: #FFF;
      display: block;
      margin: 40px auto 0px auto;
      cursor: pointer;
      font: inherit;
    }
  </style>
</head>
<body>
  
  <header>
    <h1 class="heading">Encabezado imagen banner</h1>
  </header>

  <div class="naturallanguageform">
    <div class="nlfinner">
      <p class="line">
        <span class="copy">Hola Bacalar,</span>
      </p>
      <p class="line">
        <span class="copy">Soy</span>
        <span class="inputcontainer"><input class="textinput" name="name" value="" placeholder="nombre"></span> 
        <span class="copy">, tengo</span>
        <span class="inputcontainer"><input class="textinput" name="name" value="" placeholder="edad"></span>
        <span class="copy">a&ntilde;os y soy de</span>
        <select class="dropdown">
          <option>Japon</option>
          <option>M&eacute;xico</option>
        </select>
      </p>
      <p class="line">
        <span class="copy">Me enter&eacute; de ti a trav&eacute;s de </span>
        <select class="dropdown">
          <option>revista</option>
          <option>internet</option>
        </select>
        <span class="copy"> y te visito con </span>
        <span class="inputcontainer"><input class="textinput" name="name" value="" placeholder="tantos"></span>
        <select class="dropdown">
          <option>amigos</option>
          <option>familiares</option>
        </select>
        <span class="copy">.</span>
      </p>
      <p class="line">
        <button class="button">E N V I A R</button>
      </p>
    </div>
  </div>



</body></html>