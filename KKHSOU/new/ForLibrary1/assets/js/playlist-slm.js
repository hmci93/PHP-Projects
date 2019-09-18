    $(document).ready(function(){
        // ========= jPlayer config 1 ==========
        // Home player, Track player, Single post top player
        var myPlaylist = new jPlayerPlaylist({
            jPlayer: "#jquery_jplayer_N",
            cssSelectorAncestor: "#jp_container_N"
        }, [
            {
                artist: "Assamese Course", // the artist name
					title:"Assamese Course", // track title
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/DEGREE%20SLM%20STRUCTURE%202017/Assamese_Course.mp3",// mp3 path
              
                poster: "images/cover.jpg",// poster image path
                duration: '21:03MB'// duration time in playlist
            },
            {
               artist: "BA Structure",
                title:"BA Structure",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/DEGREE%20SLM%20STRUCTURE%202017/BA_Structure.mp3",
               
                poster: "images/cover.jpg",
                duration: '12.63MB'
            },
            {
                artist: "BBA English",
                title:"BBA English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/DEGREE%20SLM%20STRUCTURE%202017/BBA_English.mp3",
                poster: "images/cover.jpg",
                duration: '25:87'
            },
            {
                artist: "BCA English",
                title:"BCA English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/DEGREE%20SLM%20STRUCTURE%202017/BCA_English.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "BCom English",
                title:"BCom English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/DEGREE%20SLM%20STRUCTURE%202017/BCom_English.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "BMC Eng",
                title:"BMC Eng",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/DEGREE%20SLM%20STRUCTURE%202017/BMC_Eng.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Commerce Assamese",
                title:"Commerce Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/DEGREE%20SLM%20STRUCTURE%202017/CommerceAssamese.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Degree Structure Assamese",
                title:"Degree Structure Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/DEGREE%20SLM%20STRUCTURE%202017/DegreeStructureAssamese.mp3",
                
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

	
	