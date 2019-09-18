    $(document).ready(function(){
        // ========= jPlayer config 1 ==========
        // Home player, Track player, Single post top player
        var myPlaylist = new jPlayerPlaylist({
            jPlayer: "#jquery_jplayer_N",
            cssSelectorAncestor: "#jp_container_N"
        }, [
            {
                artist: "Asom 2020 - Radio Talk in Assamese", // the artist name
					title:"Asom 2020 - Radio Talk in Assamese", // track title
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Education/Asom%202020%20-%20%20Radio%20Talk%20in%20Assamese.mp3",// mp3 path
              
                poster: "images/cover.jpg",// poster image path
                duration: '21:03MB'// duration time in playlist
            },
            {
               artist: "Basic unit on school & community - Radio Discussion in English",
                title:"Basic unit on school & community - Radio Discussion in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Education/Basic%20unit%20on%20school%20%26%20community%20-%20Radio%20Discussion%20in%20English.mp3",
               
                poster: "images/cover.jpg",
                duration: '12.63MB'
            },
            {
                artist: "Children and Education - Radio Discussion in Assamese",
                title:"Children and Education - Radio Discussion in Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Education/Children%20and%20Education%20-%20Radio%20Discussion%20in%20Assamese.mp3",
                poster: "images/cover.jpg",
                duration: '25:87'
            },
            {
                artist: "Definition and Objective of Education - Radio Discussion in Assamese",
                title:"Definition and Objective of Education - Radio Discussion in Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Education/Definition%20and%20Objective%20of%20Education-Radio%20Discussion%20in%20Assamese.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Education - Radio Talk in English",
                title:"Education - Radio Talk in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Education/Education%20-%20Radio%20Talk%20in%20English.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Importance of Education - Radio Talk in Assamese",
                title:"Importance of Education - Radio Talk in Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Education/Importance%20of%20Education-%20Radio%20Talk%20in%20Assamese.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Meaning of Education - Radio Talk in Assamese",
                title:"Meaning of Education - Radio Talk in Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Education/Meaning%20of%20Education-%20Radio%20Talk%20in%20Assamese.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Objectives of Education - Radio Discussion in Assamese",
                title:"Objectives of Education - Radio Discussion in Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Education/Objectives%20of%20Education-%20Radio%20Discussion%20in%20Assamese.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Significance and aims of Education - Radio Talk in Assamese",
                title:"Significance and aims of Education - Radio Talk in Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Education/Significance%20and%20aims%20of%20Education-Radio%20Talk%20in%20Assamese.mp3",
                
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

	
	