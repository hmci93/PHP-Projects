    $(document).ready(function(){
        // ========= jPlayer config 1 ==========
        // Home player, Track player, Single post top player
        var myPlaylist = new jPlayerPlaylist({
            jPlayer: "#jquery_jplayer_N",
            cssSelectorAncestor: "#jp_container_N"
        }, [
            {
                artist: "Electronics Instrumentation - Radio Discussion in Assamese", // the artist name
					title:"Electronics Instrumentation - Radio Discussion in Assamese", // track title
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Electronics%20Instrumentation/Electronics%20Instrumentation%20-Radio%20Discussion%20in%20Assamese.mp3",// mp3 path
              
                poster: "images/cover.jpg",// poster image path
                duration: '21:03MB'// duration time in playlist
            },
            {
               artist: "Electronics Waste and its effects on Environment - Radio Discussion in English",
                title:"Electronics Waste and its effects on Environment - Radio Discussion in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Electronics%20Instrumentation/Electronic%20Waste%20and%20its%20effects%20on%20Environment-%20Radio%20Discussion%20in%20English.mp3",
               
                poster: "images/cover.jpg",
                duration: '12.63MB'
            },
            {
                artist: "Fundamentals of Electrical Circuit - Radio Discussion in English",
                title:"Fundamentals of Electrical Circuit - Radio Discussion in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Electronics%20Instrumentation/Fundamentals%20of%20Electrical%20circuit%20-%20Radio%20Discussion%20in%20English.mp3",
                poster: "images/cover.jpg",
                duration: '25:87'
            },
            {
                artist: "Fundamentals of Electrical Circuit - Radio Discussion in English",
                title:"Fundamentals of Electrical Circuit - Radio Discussion in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Electronics%20Instrumentation/Fundamentals%20of%20electronics%20circuits-%20Radio%20Discussion%20in%20English.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Mobile Phone Repairing - Radio Discussion in Assamese",
                title:"Mobile Phone Repairing - Radio Discussion in Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Electronics%20Instrumentation/Mobile%20phone%20repairing-%20Radio%20Talk%20in%20Assamese.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			
			
			
			
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

	
	