<!DOCTYPEhtml>
<html>
<head>
<title> mostafa mohamed ali</title>
<style>
body{background-color:rgb(172,217,223);; font-color:red}
</style>
<script>
var pos=0;
function change(){
var x=document.fname.img.selectedIndex;
document.fname.show.src=document.fname.img[x].value;
}
function changepre()
	 {
			var men=document.getElementById("m")
			var xs=document.getElementById("s")
			var sel=men.selectedIndex;
			sel=sel-1;
		    if(sel<0)
			sel=27;
			xs.src=men[sel].value;
			men.selectedIndex=sel;
	 }
	function changenext()
	 {
		var men=document.getElementById("m")
		var x=document.getElementById("s")
		var sel=men.selectedIndex
		sel=sel+1
		if(sel>27)
		sel=0;
		x.src=men[sel].value;
		men.selectedIndex=sel;
	 }
	 function start()
	 {
		var men=document.getElementById("m")
		var img=document.getElementById("s")
		var b =document.getElementById("b2")
		if(b.value == "stop")
			{	
				pos++;
				pos %= men.length
				
				img.src=men[pos].value
				window.setTimeout("start()",2000)
			}
	 }
	function stop()
     {
		var men=document.getElementById("m")
		var img=document.getElementById("s")
		var b =document.getElementById("b2")
		if(b.value == "stop")
				b.value="start"
			}
	function chang()
	 {
		var b =document.getElementById("b2")
		if(b.value == "start"){
		b.value ="stop"
					start()
				}
				else 
					b.value="start"
			}
</script>
</head>
<body>
<p class="s"><a href="index.php">back to home page</a></p>
<?php
  if(isset($_GET['formSubmit'])) {
	  $count=0;
  if($_GET['formSubmit']=="Submit") 
  {
   if ($_GET['a']=="1")
   {
	   $count++;
   }
    if ($_GET['b']=="2")
   {
	   $count++;
   }
       if ($_GET['c']=="2")
   {
	   $count++;
   }
       if ($_GET['d']=="1")
   {
	   $count++;
   }
       if ($_GET['e']=="2")
   {
	   $count++;
   }
    echo "<h1>"."result  =".$count."/5"."</h1>";
  }
  }
  ?>
<form name="fname">
      <img src="asd.jpg" id="s" name="show" width="400" height="400">
      <select id="m" name="img" onchange="change()">
		<option value="asd.jpg">أ</option>
		<option value="bata.jpg">ب</option>
		<option value="t.jpg">ت</option>
		<option value="th.jpg">ث</option>
		<option value="g.jpg">ج</option>
		<option value="h.jpg">ح</option>
		<option value="kh.jpg">خ</option>
		<option value="dd.jpg">د</option>
		<option value="zal.jpg">ذ</option>
		<option value="r.jpg">ر</option>
		<option value="z.jpg">ز</option>
		<option value="ss.jpg">س</option>
		<option value="sh.jpg">ش</option>
		<option value="sa.jpg">ص</option>
		<option value="dad.jpg">ض</option>
		<option value="tt.jpg">ط</option>
		<option value="za.jpg">ظ</option>
		<option value="ain.jpg">ع</option>
		<option value="gh.jpg">غ</option>
		<option value="f.jpg">ف</option>
		<option value="qaf.jpg">ق</option>
		<option value="k.jpg">ك</option>
		<option value="l.jpg">ل</option>
		<option value="m.jpg">م</option>
		<option value="n.jpg">ن</option>
		<option value="hh.jpg">ه</option>
		<option value="w.jpg">و</option>
		<option value="y.jpg">ي</option>
      </select>
	  <input type="button" value="<<" id="b1" onclick="changepre()">
		<input type="button" value=">>" id="b3" onclick="changenext()">
		<input type="button" value="start" id="b2" onclick="chang()">
  </form>
  <br/>
  <p>(simple quiz)</p>
  <form action="page4.php" method="get">
 اسم حيوان يبدأ بحرف الالف  
 <br>
 اسد<input type="radio" name="a" value="1" checked="checked"/><br>
 زرافه<input type="radio" name="a" value="2"/><br>
 فيل<input type="radio" name="a" value="3"/><br>
 <hr>
  اسم حيوان يبدأ بحرف ب
  <br>
 كلب<input type="radio" name="b" value="1"checked="checked"/><br>
 بطه<input type="radio" name="b" value="2"/><br>
 باب<input type="radio" name="b" value="3"/><br>
 <hr>
 اسم فاكهه تبدأ بحرف ت
 <br>
 تنين<input type="radio" name="c" value="1"checked="checked"/><br>
 تفاحه<input type="radio" name="c" value="2"/><br>
 تاجر<input type="radio" name="c" value="3"/><br>
 <hr>
 اسم جماد يبدأ بحرف ط
 <br>
 طائره<input type="radio" name="d" value="1"checked="checked"/><br>
 طائر<input type="radio" name="d" value="2"/><br>
 طريق<input type="radio" name="d" value="3"/><br>
 <hr>
 اسم حيوان يبدأ بحرف ز
 <br>
 اسد<input type="radio" name="e" value="1"checked="checked"/><br>
 زرافه<input type="radio" name="e" value="2"/><br>
 فيل<input type="radio" name="e" value="3"/><br>
<br> 
  <input type="submit" name="formSubmit" value="Submit"/>
  </form>
</body>
</html>