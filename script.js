
var interviews;
var interviewVid = 0;
function displayInterview(i){//i is either -1 for previous; 1 for next; 0 for current
	interviews[interviewVid].pause();
	interviews[interviewVid].style.display = 'none';
	interviewVid += i;
	if(interviewVid < 0) interviewVid = interviews.length - 1;
	else if(interviewVid > interviews.length - 1) interviewVid = 0;
	interviews[interviewVid].style.display = 'inline-block';
}

window.onload = function(){
	
	var video = document.getElementById('videovideo');
	var videoEnded = false;
	
	//make button appear at end of video
	function onVideoEnd(e){
		videoEnded = true;
		document.getElementById('hiddenbutton').style.visibility = 'visible';
	}
	video.addEventListener('ended', onVideoEnd, false);

	//autoplay video when scrolling it in view
	function onScroll(){
		if(!videoEnded){
			let rect = video.getBoundingClientRect();
			
			if(rect.y+rect.height/2 > 0 && rect.y+rect.height/2 < window.innerHeight){//at least half the video is in view
				video.play();
			}else{
				video.pause();
			}
		}
	}
	window.addEventListener('scroll', onScroll, false);
	window.addEventListener('resize', onScroll, false);
	
	//hide all interview videos except for one
	interviews = document.getElementById('interviewvids').children;
	displayInterview(0);
	
}