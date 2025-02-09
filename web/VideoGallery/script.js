/*
	Version 1.0
	01/19/2016
*/
//DOM
var myVideo = document.getElementById("customVideoPlayer");
var btnPlay = document.getElementById("btnPlay");
var btnReload = document.getElementById("btnReload");
var volumeSlider = document.getElementById("volumeSlider");
var volumeIcon = document.getElementById("volumeIcon");		
var videoProgressBar = document.getElementById("videoProgressBar");
var videoCurrentTime = document.getElementById("currentTime");
var videoDuration = document.getElementById("videoDuration");
var btnPrevious = document.getElementById("btnPrevious");
var btnNext = document.getElementById("btnNext");
var videoDescription = document.getElementById("videoDescription");
var videoTitle = document.getElementById("videoTitle");

//HUD Control		
var progressBar;	
var currentVideo = 0;		

btnPlay.addEventListener("click", playPauseVideo, false);
btnReload.addEventListener("click", reloadVideo, false);
volumeSlider.addEventListener("input", volumeControl, false);
volumeIcon.addEventListener("click", muteVideo, false);
myVideo.addEventListener("timeupdate", videoTime, false);
myVideo.addEventListener("ended", nextVideo, false);
btnPrevious.addEventListener("click", previousVideo, false);
btnNext.addEventListener("click", nextVideo, false);
window.addEventListener("load", onLoad, false);

function onLoad() {			
	volumeSlider.value = myVideo.volume;

	var list = document.getElementById("playlistVideos");
	for(var i = 0; i < videosData.length; i++) {
		list.innerHTML += "<li id='video" + i + "' onclick='loadSelectedVideo(this.id)'><figure><img src='" + videosData[i].poster + "'><figcaption><p>" + videosData[i].title + "</p></figcaption></figure></li>";
	}					

	myVideo.title = videosData[currentVideo % videosData.length].title;
	myVideo.src = videosData[currentVideo % videosData.length].source[0];
	myVideo.type = videosData[currentVideo % videosData.length].type[0];
	myVideo.poster = videosData[currentVideo % videosData.length].poster; 
	videoTitle.innerHTML = videosData[currentVideo % videosData.length].title;
	videoDescription.innerHTML = '<h3>Description:</h3> <p>' + videosData[0].description + '</p>';
}

function playPauseVideo() {
	if(myVideo.paused) {							
		myVideo.play();				
		btnPlay.innerHTML = "||";
		btnPlay.title = "Pause";									
	}		
	else {				
		myVideo.pause();
		btnPlay.innerHTML = "&#9658;";
		btnPlay.title = "Play";	
		clearInterval(progressBar);			
	}	
}		

function videoTime() {
	var curMins = Math.floor(myVideo.currentTime / 60);
	var curSecs = Math.floor(myVideo.currentTime - curMins * 60);
	var durMins = Math.floor(myVideo.duration / 60);
	var durSecs = Math.round(myVideo.duration - durMins * 60);			

	if(curSecs < 10)
		curSecs = "0" + curSecs;
	if(durSecs < 10)
		durSecs = "0" + durSecs;

	var durationTime = durMins + ":" + durSecs;

	videoCurrentTime.innerHTML = curMins + ":" + curSecs;
	videoDuration.innerHTML = durMins + ":" + durSecs;

	var progress = (myVideo.currentTime * 100) / myVideo.duration;
	videoProgressBar.style.width = progress + "%";	
}

function reloadVideo() {
	//Loads a video(starts to buffer it)
	//myVideo.load();
	myVideo.currentTime = 0;			
	videoProgressBar.style.width = "0%";			
}

function volumeControl() {				
	myVideo.volume = volumeSlider.value;				
}

function muteVideo() {					
	if(!myVideo.muted) {
		myVideo.muted = true;
		volumeSlider.value = 0;
		volumeIcon.innerHTML = "&#128263;";
		volumeIcon.title = "Enable Sound";				
	}
	else {				
		myVideo.muted = false;
		volumeSlider.value = myVideo.volume;
		volumeIcon.innerHTML = "&#128266;";
		volumeIcon.title = "Mute";				
	}
}	

function previousVideo() {		
	if(currentVideo == 0) 
		currentVideo = videosData.length - 1;
	else	
		currentVideo--;

	myVideo.title = videosData[currentVideo % videosData.length].title;
	myVideo.src = videosData[currentVideo % videosData.length].source[0];
	myVideo.type = videosData[currentVideo % videosData.length].type[0];
	myVideo.poster = videosData[currentVideo % videosData.length].poster; 
	videoTitle.innerHTML = videosData[currentVideo % videosData.length].title;
	videoDescription.innerHTML = '<h3>Description:</h3> <p>' + videosData[0].description + '</p>';
			
	myVideo.load();	
	btnPlay.innerHTML = "||";
	btnPlay.title = "Pause";	
	myVideo.play();	
}	

function nextVideo() {
	currentVideo++;

	myVideo.title = videosData[currentVideo % videosData.length].title;
	myVideo.src = videosData[currentVideo % videosData.length].source[0];
	myVideo.type = videosData[currentVideo % videosData.length].type[0];
	myVideo.poster = videosData[currentVideo % videosData.length].poster;
	videoTitle.innerHTML = videosData[currentVideo % videosData.length].title;
	videoDescription.innerHTML = '<h3>Description:</h3> <p>' + videosData[currentVideo % videosData.length].description + '</p>';		
			
	myVideo.load();	
	btnPlay.innerHTML = "||";
	btnPlay.title = "Pause";	
	myVideo.play();
}	

function loadSelectedVideo(video_id) {
	var videoIndex = "";

	for(var i = 5; i < video_id.length; i++) {
		videoIndex += video_id[i];
	}

	currentVideo = videoIndex;
	
	myVideo.title = videosData[videoIndex].title;
	myVideo.src = videosData[videoIndex].source[0];
	myVideo.type = videosData[videoIndex].type[0];
	myVideo.poster = videosData[videoIndex].poster;
	videoTitle.innerHTML = videosData[videoIndex].title;
	videoDescription.innerHTML = '<h3>Description:</h3> <p>' + videosData[videoIndex].description + '</p>';

	myVideo.load();
	btnPlay.innerHTML = "||";
	btnPlay.title = "Pause";
	myVideo.play();
}

var videosData = [	
	{
		"title": "Event Horizon ",
		"poster": "event_horizon_beginning_of_the_end.jpg",
		"source": ["EventHorizonBeginningOfTheEnd.mp4"],
		"type": ["video/mp4"],
		"description": "Event Horizon – Beginning of the end is a 3D first-person speed run game where the player needs to stay alive until the time runs out. By finishing the track you will move to the next one, the next track dificulty will be based on your previous performance. The final score is based on how many lights you collected and how long you took to finish the track (timer goes faster when turbo is being used). By collecting the blue lights you get money that can be spent buying upgrades for the ship. Keep in mind: Turbo accelerates the timer, the faster you go, higher your score will be, increasing the chances of getting to the higher difficulties, as long as you don’t stop collecting the lights."
	},		
	{
		"title": "Samurai Pizza Cats",
		"poster": "samurai pizza cats poster.jpg",
		"source": ["http://html5doctor.com/demos/video-canvas-magic/video.webm",
				   "http://html5doctor.com/demos/video-canvas-magic/video.ogg",
				   "http://html5doctor.com/demos/video-canvas-magic/video.mp4"],
		"type": ["video/webm", "video/ogg", "video/mp4"],
		"description": "Samurai Pizza Cats is an American animated television adaptation of the anime series Kyatto Ninden Teyandee (Cat Ninja Legend Teyandee), produced by Tatsunoko Productions and Sotsu Agency. Saban picked up the North American rights to the series, which originally aired in Japan on TV Tokyo from 1 February 1990 to 12 February 1991 for a total of 54 episodes, in 1991, and produced an English adaption for a total of 52 episodes. The English version of the series first aired on YTV in Canada (1993) and on first-run syndication in the United States (1994). The English version became a cult hit among anime fans due to its rapid-fire pop culture references and more farcical nature."
	},
	{
		"title": "Edream",
		"poster": "http://demo.jwplayer.com/html5-report/edream.jpg",
		"source": ["http://demo.jwplayer.com/html5-report/edream.mp4",
				   "http://demo.jwplayer.com/html5-report/edream.webm"],
		"type": ["video/mp4", "video/webm"],
		"description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
	},
	{
		"title": "Stones",
		"poster": "stones.jpg",
		"source": ["stones.mp4"],
		"type": ["video/mp4"],
		"description": "Jogo feito em C# + XNA ao estilo Candy Crush. Combine 3 pedras para destrui-las e derrubar as de cima."
	},
	{
		"title": "Zeerax Project",
		"poster": "zeerax_project.jpg",
		"source": ["zeerax_project.mp4"],
		"type": ["video/mp4"],
		"description": "Projeto em Unity 3D + C#. O personagem principal é Zeerax, um robô perdido em um labirinto que precisa coletar crânios espalhados pelo local e encontrar a saída o mais rápido possível. Sim isso não faz sentido nenhum! =)"
	},
	{
		"title": "DBZ Collision",
		"poster": "dbz_poster.jpg",
		"source": ["dbz_collision.mp4"],
		"type": ["video/mp4"],
		"description": "Nada melhor do que Dragon Ball Z como tema de um trabalho de física =D"
	},
	{
		"title": "Solar System",
		"poster": "solar_system_poster.jpg",
		"source": ["solar_system.mp4"],
		"type": ["video/mp4"],
		"description": "O Sistema Solar compreende o conjunto constituído pelo Sol e todos os corpos celestes que estão sob seu domínio gravitacional. A estrela central, maior componente do sistema, respondendo por mais de 99,85% da massa total,[5] gera sua energia através da fusão de hidrogênio em hélio, dois de seus principais constituintes. Os quatro planetas mais próximos do Sol (Mercúrio, Vênus, Terra e Marte) possuem em comum uma crosta sólida e rochosa, razão pela qual se classificam no grupo dos planetas telúricos, ou rochosos. Mais afastados, os quatro gigantes gasosos, Júpiter, Saturno, Urano e Netuno, são os componentes de maior massa do sistema logo após o próprio Sol. Dos cinco planetas anões, Ceres é o que se localiza mais próximo do centro do Sistema Solar, enquanto todos os outros, Plutão, Haumea, Makemake e Éris, se encontram além da órbita de Netuno."
	}
];			