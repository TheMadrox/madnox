<!DOCTYPE html>
<html>
<head>
  <style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

body {
  font-family: "Open Sans", "Arial";
  background: #D7EFD5;
}
div {
  background: #FFF;
  position: relative;
  width: 350px;
  margin: 50px auto;
  padding: 30px;
  box-shadow: 0 3px 5px rgba(0,0,0,0.2);
}
button {
  font-size: 28px;
  font-weight: bold;
  color: white;
  background: #31682F;
  border: none;
  position: relative;
  padding: 0.5em 1em;
  margin: 1.5em;
  border-radius: 0 5px 5px 5px;
  overflow: hidden;
  transition: border-radius 0s;
  filter: drop-shadow(0px 0px 5px red);
}
button:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  border-style: solid;
  box-shadow: 1px 1px 5px rgba(0,0,0,0.4);
  width: 0;
  border-width: 12px;
  border-color: #FFF rgba(255,255,255,0.3) rgba(255,255,255,0.3) #FFF;
  border-radius: 0 0 5px 0;
  transition: border-width .2s;
  
}
button:hover {
  border-radius: 5px;
  transition-delay: .1s;
}
button:hover:before {
  border-width: 0px;
}
footer {
  position: fixed;
  bottom: 0;
  right: 0;
  font-size: 13px;
  background: #DDD;
  padding: 5px 10px;
  margin: 5px;
}

  </style>
</head>
<body>
<div>
  <h2>CSS Animated Folding Corner</h2>
  <button>Call to Action</button>
</div>
<footer>
  An original pen by <a href="https://codepen.io/ejsado/">Eric</a>.
</footer>
</body>
</html>