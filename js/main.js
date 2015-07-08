var gifs = ["simpletrick.gif","eating.gif","objection.gif","4chan.gif","haystack.gif","goat.gif","chair.gif"];

window.onerror = function (errorMsg, url, lineNumber, column, errorObj) {
	alert('Error: ' + errorMsg + ' Script: ' + url + ' Line: ' + lineNumber + ' Column: ' + column + ' StackTrace: ' +  errorObj);
};

window.onload = function(){
	$("img").ready(function(){
		setBackgroundFromSrc($("img").attr("src"));	
	});

};

window.onresize = function(){

};

function showNextGif(){
	var next = Math.floor((Math.random() * gifs.length));
	$("img").attr("src","gifs/" + gifs[next]).ready(function(){
		setBackgroundFromSrc($("img").attr("src"));	
	});
	return false;
};

function setBackgroundFromSrc(src){
	var img = new Image();
	img.src = src;
	
	img.onload = function(){
		var rgba = getAvgRGBAFromImg(img);
		$("body").css("background-color","rgba(" + rgba[0] + "," + rgba[1] + "," + rgba[2] + "," + rgba[3] + ")");
	}
};

function getAvgRGBAFromImg(img){
	var canvas = document.createElement("canvas");
	var context = canvas.getContext("2d");
	context.drawImage(img,0,0);
	var w = canvas.width;
	var h = canvas.height;
	
	var rgba = [0,0,0,0];
	
	for (var y = 0; y < h; y++){
		for (var x = 0; x < w; x++){
			var data = context.getImageData(x,y,1,1).data;
			for (var i = 0; i < 4; i++)
				rgba[i] += data[i];
		}
	}
	
	for (var i = 0; i < 4; i++){
		rgba[i] = Math.floor(rgba[i]/h/w);
	}
	rgba[3] /= 255;
	
	return rgba;
};