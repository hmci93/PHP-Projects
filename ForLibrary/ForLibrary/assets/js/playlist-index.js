    $(document).ready(function(){
        // ========= jPlayer config 1 ==========
        // Home player, Track player, Single post top player
        var myPlaylist = new jPlayerPlaylist({
            jPlayer: "#jquery_jplayer_N",
            cssSelectorAncestor: "#jp_container_N"
        }, [
            {
                artist: "Ancient Poetry of Assam I radio Talk in Assamese", // the artist name
					title:"Ancient Poetry of Assam I radio Talk in Assamese", // track title
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Assamese/Ancient%20poetry%20of%20Assam-I-Radio%20Talk%20in%20Assamese.mp3",// mp3 path
              
                poster: "images/cover.jpg",// poster image path
                duration: '21:03MB'// duration time in playlist
            },
            {
               artist: "Ancient Poetry of Assam II radio Talk in Assamese",
                title:"Ancient Poetry of Assam II radio Talk in Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Assamese/Ancient%20poetry%20of%20Assam-II-RadioTalk%20in%20Assamese.mp3",
               
                poster: "images/cover.jpg",
                duration: '12.63MB'
            },
            {
                artist: "An overview on Translation Radio talk in Assamese",
                title:"An overview on Translation Radio talk in Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Assamese/An%20overview%20on%20Translation-Radio%20Talk%20in%20Assamese.mp3",
                poster: "images/cover.jpg",
                duration: '25:87'
            },
            {
                artist: "Assamese Historical Novel (Part I) radio Discussion in Assamese",
                title:"Assamese Historical Novel (Part I) radio Discussion in Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Assamese/Assamese%20Historical%20Novel%28Part-I%29-Radio%20Discussion%20in%20Assamese.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Assamese Historical Novel (Part II) radio Discussion in Assamese",
                title:"Assamese Historical Novel (Part II) radio Discussion in Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Assamese/Assamese%20Historical%20Novel%28Part-II%29-Radio%20Discussion%20in%20Assamese.mp3",
                
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

	
	