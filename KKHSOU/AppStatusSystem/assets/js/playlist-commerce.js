    $(document).ready(function(){
        // ========= jPlayer config 1 ==========
        // Home player, Track player, Single post top player
        var myPlaylist = new jPlayerPlaylist({
            jPlayer: "#jquery_jplayer_N",
            cssSelectorAncestor: "#jp_container_N"
        }, [
            {
                artist: "Accounting Standard - A radio Discussion in English", // the artist name
					title:"Accounting Standard - A radio Discussion in English", // track title
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Commerce/Accounting%20Standard...-%20a%20Radio%20%20Discussion%20in%20English.mp3",// mp3 path
              
                poster: "images/cover.jpg",// poster image path
                duration: '21:03MB'// duration time in playlist
            },
            {
               artist: "Consumer Protection Act - A radio Discussion in English",
                title:"Consumer Protection Act - A radio Discussion in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Commerce/Consumer%20Protection%20Act-%20a%20Radio%20Discussion%20in%20English.mp3",
               
                poster: "images/cover.jpg",
                duration: '12.63MB'
            },
            {
                artist: "Enterpreneurship - A radio Discussion in English",
                title:"Enterpreneurship - A radio Discussion in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Commerce/Enterpreneurship%20-%20a%20Radio%20Discussion%20in%20English.mp3",
                poster: "images/cover.jpg",
                duration: '25:87'
            },
            {
                artist: "Enterpreneurship - A radio Discussion in English",
                title:"Enterpreneurship - A radio Discussion in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Commerce/Entrepreunership-a%20Radio%20Discussion%20in%20English.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Enterpreneurship - A radio Discussion in English",
                title:"Enterpreneurship - A radio Discussion in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Commerce/Entrepreunership-%20a%20Radio%20Discussion%20in%20English.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Management - A radio Discussion in English",
                title:"Management - A radio Discussion in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Commerce/Management-a%20Radio%20Discussion%20in%20English.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Talent Management - A radio Discussion in English",
                title:"Talent Management - A radio Discussion in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Commerce/Talent%20Management-a%20Radio%20Discussion%20in%20English.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Talent Management - A radio Discussion in English",
                title:"Talent Management - A radio Discussion in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Commerce/Talent%20Management-%20a%20Radio%20Discussion%20in%20English.mp3",
                
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

	
	