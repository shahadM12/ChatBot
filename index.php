<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">

<style>
body{
    
  background-image: url("./img/99.jpg");
  background-color: black;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position:left; 
  background-size:55rem;
  
}

</style>


</head>
<body>
    
    <div class="text-block">
        <h1>Welcome!</h1>
        <br>
        <br>
        <p> This page shows you two interfaces to control the robot arm remotely
            </p>
      </div>

    <div class="container">

    <a href="./arm/index.html" class="button">interface arm</a>
    <a href="./base/index.html" class="button">interface base</a>
    
  </div>
  <script>
  window.watsonAssistantChatOptions = {
      integrationID: "c4be0e91-0477-4630-8db1-26cf3f2b8b80", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "134abb9e-1d37-4631-848c-68bf5e88eaaa", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
  
  <footer>
    <br><p>Copyright @2021 | Designed With by: Shahad Alsady<br>
    <a href="mailto:shahad680.s6@gmail.com">shahad680.s6@gmail.com</a></p>
  </footer>
</body>
</html>
