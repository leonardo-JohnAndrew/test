<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src = "https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script  type ="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type  = "text/javascript" src ="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <title>Document</title>
</head>
<body>
 <video id = "preview" width="40%"></video>
 <label >QR SCAN</label>
<input type="text" name ="text" id  ="text" readonly>
</body>
<script>
 let scanner = new Instascan.Scanner({video: document.getElementById('preview')});
 Instascan.Camera.getCameras().then(function(cameras){
    if(cameras.length>0){
        scanner.start(cameras[1]);
    }else{
        alert('not Found camera');
    }
 }).catch(function(e){
    console.error(e);
 });
 scanner.addListener('scan',function(c){
    document.getElementById('text').value = c;
    alert("'"+c+"'");
 });

</script>
</html>