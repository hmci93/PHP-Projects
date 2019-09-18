    $(document).ready(function(){
        // ========= jPlayer config 1 ==========
        // Home player, Track player, Single post top player
        var myPlaylist = new jPlayerPlaylist({
            jPlayer: "#jquery_jplayer_N",
            cssSelectorAncestor: "#jp_container_N"
        }, [
            {
                artist: "Basic Computer Hardware - Radio Discussion in Assamese", // the artist name
					title:"Basic Computer Hardware - Radio Discussion in Assamese", // track title
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Computer/Basic%20Computer%20Harware-%20Radio%20Discussion%20in%20Assamese.mp3",// mp3 path
              
                poster: "images/cover.jpg",// poster image path
                duration: '21:03MB'// duration time in playlist
            },
            {
               artist: "Basic of Computer - Radio Talk in English",
                title:"Basic of Computer - Radio Talk in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Computer/Basic%20of%20Computer%20-%20Radio%20Talk%20in%20English.mp3",
               
                poster: "images/cover.jpg",
                duration: '12.63MB'
            },
            {
                artist: "Computer CPU & Memory - Radio Talk in Assamese",
                title:"Computer CPU & Memory - Radio Talk in Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Computer/Computer%20CPU%20%26%20Memory-%20Radio%20Talk%20in%20Assamese.mp3",
                poster: "images/cover.jpg",
                duration: '25:87'
            },
            {
                artist: "Computer Memory - Radio Talk in English",
                title:"Computer Memory - Radio Talk in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Computer/Computer%20Memory%20-%20%20Radio%20Talk%20in%20English.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Computer Software - Radio Talk in Assamese",
                title:"Computer Software - Radio Talk in Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Computer/Computer%20software%20-%20Radio%20Talk%20in%20Assamese.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "CPU Memory and Software - Radio Talk in Assamese",
                title:"CPU Memory and Software - Radio Talk in Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Computer/CPU%2C%20Memory%20and%20Software-%20Radio%20Talk%20in%20Assamese%20%282%29.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "CPU Memory and Software - Radio Talk in Assamese",
                title:"CPU Memory and Software - Radio Talk in Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Computer/CPU%2C%20Memory%20and%20Software-%20Radio%20Talk%20in%20Assamese.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "The Concept of computer Software - Radio Talk in English",
                title:"The Concept of computer Software - Radio Talk in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Computer/The%20Concept%20of%20computer%20Software-Radio%20Discussion%20in%20English.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            }
			
			
        ], {
            swfPath: "assets/jplayer/jplayer",
            supplied: "oga, mp3",
            wmode: "window",
            useStateClassSkin: true,
            autoBlur: false,
            smoothPlayBar: true,
            keyEnabled: true,
            size: {width: "80px", height: "80px"}
        });
        // Show The Current Track !!
        $("#jquery_jplayer_N").on($.jPlayer.event.ready, function (event) {
            var current = myPlaylist.current;
            var playlist = myPlaylist.playlist;       
            $.each(playlist, function (index, obj) {
                if (index == current) {
                    $("#nowPlaying").html("<span class='artist-name'>" + obj.artist + "</span>" + "<br>" + "<span class='track-name'>" + obj.title + "</span>");
                }
            });
        });
        $("#jquery_jplayer_N").on($.jPlayer.event.play, function (event) {
            var current = myPlaylist.current;
            var playlist = myPlaylist.playlist;       
            $.each(playlist, function (index, obj) {
                if (index == current) {
                    $("#nowPlaying").html("<span class='artist-name'>" + obj.artist + "</span>" + "<br>" + "<span class='track-name'>" + obj.title + "</span>");
                }
            });
        });
		
		
		
		
		
			
			
			
			
			
			
        });

	
	