
<!DOCTYPE html>
<html lang='en' class=''>

<head>

  <meta charset='UTF-8'>
  <title>BRAC DEMO</title>

  <meta name="robots" content="noindex">

  <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
  <link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
  <link rel="canonical" href="https://codepen.io/bertdida/pen/jemgbO">

  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <style class="INLINE_PEN_STYLESHEET_ID">
    .c-share {
  position: relative;
  width: 3.4375em;
  height: 3.4375em;
}

.c-share__input {
  display: none;
}
.c-share__input:checked ~ .c-share__toggler .c-share__icon {
  transition: 0s;
  width: 0;
  height: 0;
  color: #639eff;
}
.c-share__input:checked ~ .c-share__toggler .c-share__icon::before {
  transform: rotate(-45deg);
}
.c-share__input:checked ~ .c-share__toggler .c-share__icon::after {
  transform: rotate(45deg);
}
.c-share__input:checked ~ .c-share_options {
  width: 11.0625em;
  height: 12.5em;
  border-radius: 0.3125em;
}
.c-share__input:checked ~ .c-share_options::before,
.c-share__input:checked ~ .c-share_options li {
  transition: 0.3s 0.15s;
  opacity: 1;
  transform: translateY(0);
}

.c-share__toggler,
.c-share_options {
  position: absolute;
  right: 0;
  width: inherit;
  height: inherit;
  border-radius: 50%;
  background-color: #f2f2f2;
}

.c-share__toggler {
  cursor: pointer;
  z-index: 1;
  display: flex;
  justify-content: center;
  align-items: center;
}

.c-share__icon {
  position: relative;
  left: -0.3125em;
  width: 0.5em;
  height: 0.5em;
  border-radius: 50%;
  color: #029dfc;
  background-color: currentColor;
  box-shadow: 0.625em -0.625em, 0.625em 0.625em;
  transition: 0.1s 0.05s;
}
.c-share__icon::before, .c-share__icon::after {
  content: "";
  position: absolute;
  width: 1em;
  height: 0.125em;
  background-color: currentColor;
  transition: 0.1s;
}
.c-share__icon::before {
  top: 0.1875em;
  left: 0.1875em;
  transform-origin: bottom left;
  transform: rotate(45deg);
}
.c-share__icon::after {
  top: -0.125em;
  left: 0.03125em;
  transform-origin: center;
  transform: rotate(-45deg);
}

.c-share_options {
  list-style: none;
  margin: 0;
  padding: 1.0625em 1.25em;
  box-sizing: border-box;
  overflow: hidden;
  transition: 0.2s;
  box-shadow: 0 0.125em 0.125em rgba(0, 0, 0, 0.3);
}
.c-share_options::before {
  content: attr(data-title);
  display: block;
  margin-bottom: 1.25em;
  font-weight: 700;
}
.c-share_options li {
  font-size: 0.875em;
  color: #464646;
  cursor: pointer;
}
.c-share_options li:not(:last-child) {
  margin-bottom: 0.75em;
}
.c-share_options::before,
.c-share_options li {
  opacity: 0;
  transform: translateY(0.625em);
  transition: 0s;
}

body {
  font-family: "Roboto", sans-serif;
  background-color: white;
  margin: 0;
  display: grid;
  height: 100vh;
  margin: 0;
  place-items: center center;
}
  </style>

  
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeConsoleRunner-d8236034cc3508e70b0763f2575a8bb5850f9aea541206ce56704c013047d712.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-bb9a2ba1f03f6147732cb3cd52ac86c6b24524aa87a05ed0b726f11e46d7e277.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRuntimeErrors-4f205f2c14e769b448bcf477de2938c681660d5038bc464e3700256713ebe261.js"></script>
</head>

<body>
  <div class="c-share">
  <input class="c-share__input" type="checkbox" id="checkbox">
  <label class="c-share__toggler" for="checkbox">
            <span class="c-share__icon"></span>
        </label>

  <ul class="c-share_options" data-title="Share">
    <li>Public</li>
    <li>Only me</li>
    <li>Specific Person</li>
    <li>Division and Grade</li>
  </ul>
</div>
  
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
  <script  src="https://cdpn.io/cp/internal/boomboom/pen.js?key=pen.js-e1d8df93-2b1c-a40b-0828-4ecd39367487" crossorigin></script>
</body>

</html>


