// main html5

	<H1>Please read the following<H1>
		
	<div class="speed-class">// main div set size of p to size you wish to view in css
		<p id='comptext' class = "WorkText "></p>
	</div>
	
	
	
	<p id='wpmtext' class="border-class" align="center" >20 words per minute</p>
	<button id="slowbtn" onclick="slower()" class="btn btn-primary " >Slower</button>
	<button id="stopbtn" onclick="stop()" class="btn btn-primary  " >Stop</button>
	<button id="startbtn" onclick="start()" class="btn btn-primary  " >Play</button>
	<button id="fastbtn" onclick="faster()" class="btn btn-primary " >Faster</button>
		
<script>
		
				
		var temptext1='<?php echo $temptext1 ?>';// temptext1 is string you wish to read.
		var wordindex=0;
		var timervalue=0;
		
		var wpm=20;
		var wpmdx=20;
		var stopped=1;
		timervalue=1000*60/20;
		
		document.getElementById('comptext').style.backgroundColor='green';
		
		var words = temptext1.split(" ");// use your own string here for passage to read
		var myVar = setInterval(myTimer, timervalue);
		clearInterval(myVar);
		document.getElementById('comptext').innerHTML="Click Start";
		
		function myTimer() {
			if (stopped==0)
			{
			wordindex++;
			if (wordindex>=words.length)
			{
				clearInterval(myVar);
			}
		
			document.getElementById('comptext').innerHTML=words[wordindex];
			}
		}
		
		function slower()
		{
			stopped=1;
			wpm=wpm-wpmdx;
			if (wpm<0) {wpm=wpmdx;}
			timervalue=1000*60/wpm;
			clearInterval(myVar);
			clearInterval(myVar);
			clearInterval(myVar);
			clearInterval(myVar);
			clearInterval(myVar);
			//myVar = setInterval(myTimer, timervalue);
			document.getElementById('comptext').style.backgroundColor='Red';
			document.getElementById('wpmtext').innerHTML=wpm+" woorde per minuut";
			console.log("wpm=",wpm);
		}
		
		function faster()
		{
			stopped=1;
			wpm=wpm+wpmdx;
			timervalue=1000*60/wpm;
			clearInterval(myVar);
			//myVar = setInterval(myTimer, timervalue);
			console.log("wpm=",wpm);
			document.getElementById('comptext').style.backgroundColor='Red';
			document.getElementById('wpmtext').innerHTML=wpm+" woorde per minuut";
		}
		
		function stop()
		{
			if (stopped==0)
			{
				stopped=1;
				clearInterval(myVar);
				clearInterval(myVar);
				clearInterval(myVar);
				clearInterval(myVar);
				clearInterval(myVar);
				clearInterval(myVar);
				console.log("stopped=",stopped);
				document.getElementById('comptext').style.backgroundColor='Red';
				return;
				
			}
		}
		function start()
		{
			if (stopped==1)
			{
				myVar = setInterval(myTimer, timervalue);
				stopped=0;
				console.log("stopped=",stopped);
				document.getElementById('comptext').style.backgroundColor='Green';
				return;
				
			}
		}
		
		
</script>
	
