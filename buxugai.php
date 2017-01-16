

<html>
    <style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=button] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=text]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

    
<body
    “style="background-image:url(); background-repeat:repeat-y;"”>


<h3>Markov Chain</h3>
<form method="Post" action="">

<p>user name:</p><input type="text" name="Text1" id="myText1" value="">
<button id="But1" onclick="myFunction2()">Create</button>

<p>tweet text:</p><input type="text" name="Text2" id="myText2" name="ppp" value="">

<button style="background-color:lightgreen" id="But2" onclick="myFunction2()">Generate</button>

<p><br><br><br><br><br><br><br></p>




<p>user:</p><input type="text" name="Text4" id="myText4" value="">
<p>tweet:</p><input type="text" id="myText5" name="Text5" value="">
<p>Markov tweet:</p><input type="text" name="Text6" id="myText6" value="">

</form>


<script>


function myFunction2() {
    
    
    var x = document.getElementById("myText1").value;
    document.getElementById("myText4").value = x;
    var q = document.getElementById("myText2").value;
    document.getElementById("myText5").value = q;

}

  

</script>

  <?php
$myfile = fopen("tweet.txt", "w") or die("Unable to open file!");
      $dom5 =$_POST['Text5'];
      $dom4 = $_POST['Text4'];
      $dom2 = $_POST['Text2'];
      $dom1 = $_POST['Text1'];
      
fwrite($myfile,$dom5);
shell_exec ('./a.out');
$file = 'markov-tweet.txt';
$content = file_get_contents($file); 





?>


<script>
    var dom5 = "<?php echo $dom5 ?>";
    document.getElementById("myText5").value =dom5;
    var dom4 = "<?php echo  $dom4?>";
    document.getElementById("myText4").value =dom4;
     var dom1 = "<?php echo  $dom1?>";
    document.getElementById("myText1").value =dom1;
      var dom2 = "<?php echo  $dom2?>";
    document.getElementById("myText2").value =dom2;
      var myfile = "<?php echo  $content?>";
    document.getElementById("myText6").value = myfile;
    




  

</script>







</body>

</html>

