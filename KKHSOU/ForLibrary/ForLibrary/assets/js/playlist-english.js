    $(document).ready(function(){
        // ========= jPlayer config 1 ==========
        // Home player, Track player, Single post top player
        var myPlaylist = new jPlayerPlaylist({
            jPlayer: "#jquery_jplayer_N",
            cssSelectorAncestor: "#jp_container_N"
        }, [
            {
                artist: "A cup of tea by Katherine Mansfield - Radio talk in English", // the artist name
					title:"A cup of tea by Katherine Mansfield - Radio talk in English", // track title
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/English/A%20cup%20of%20tea%20by%20Katherine%20Mansfield-Radio%20Talk%20in%20English.mp3",// mp3 path
              
                poster: "images/cover.jpg",// poster image path
                duration: '21:03MB'// duration time in playlist
            },
            {
               artist: "An Irish Airman forsees has death - Radio talk in English",
                title:"An Irish Airman forsees has death - Radio talk in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/English/An%20Irish%20Airman%20forsees%20his%20death-Radio%20Talk%20in%20English.mp3",
               
                poster: "images/cover.jpg",
                duration: '12.63MB'
            },
            {
                artist: "English Remantic Poetry - Radio Discussion in English",
                title:"English Remantic Poetry - Radio Discussion in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/English/English%20romantic%20poetry%20-Radio%20Discussion%20in%20English.mp3",
                poster: "images/cover.jpg",
                duration: '25:87'
            },
            {
                artist: "English Remantic Poetry - Radio Discussion in English",
                title:"English Remantic Poetry - Radio Discussion in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/English/English%20romantic%20poetry%20-%20Radio%20Discussion%20in%20English.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Explanation of the poem 'The Tiger' - Radio Talk in English",
                title:"Explanation of the poem 'The Tiger' - Radio Talk in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/English/Explanation%20of%20the%20poem%20%27The%20Tiger%27-Radio%20Talk%20in%20English.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Explanation on the solitary Reaper - Radio Talk in English",
                title:"Explanation on the solitary Reaper - Radio Talk in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/English/Explanation%20on%20The%20solitary%20Reaper-Radio%20Talk%20in%20English.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Life and works of John Donne - Radio Talk in English",
                title:"Life and works of John Donne - Radio Talk in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/English/Life%20and%20works%20of%20John%20Donne%20-Radio%20Talk%20in%20English.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Life of Anton Chekov - Radio Talk in English",
                title:"Life of Anton Chekov - Radio Talk in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/English/Life%20of%20Anton%20Chekov-Radio%20Talk%20in%20English.mp3",
                
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

	
	