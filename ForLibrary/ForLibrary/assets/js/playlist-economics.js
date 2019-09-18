    $(document).ready(function(){
        // ========= jPlayer config 1 ==========
        // Home player, Track player, Single post top player
        var myPlaylist = new jPlayerPlaylist({
            jPlayer: "#jquery_jplayer_N",
            cssSelectorAncestor: "#jp_container_N"
        }, [
            {
                artist: "Commercial Bank (Part I) - Radio Discussion in Assamese", // the artist name
					title:"Commercial Bank (Part I) - Radio Discussion in Assamese", // track title
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Economics/Commercial%20Bank%20%28Part-I%29-%20Radio%20Discussion%20in%20Assamese.mp3",// mp3 path
              
                poster: "images/cover.jpg",// poster image path
                duration: '21:03MB'// duration time in playlist
            },
            {
               artist: "Commercial Bank (Part II) - Radio Discussion in Assamese",
                title:"Commercial Bank (Part II) - Radio Discussion in Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Economics/Commercial%20Bank%20%28Part-II%29-%20Radio%20Discussion%20in%20Assamese.mp3",
               
                poster: "images/cover.jpg",
                duration: '12.63MB'
            },
            {
                artist: "Competitive Market by Prof. Srinath Baruah - Radio Discussion in Assamese",
                title:"Competitive Market by Prof. Srinath Baruah - Radio Discussion in Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Economics/Competitive%20Market%20by%20Prof.%20Srinath%20Baruah--%20Radio%20Talk%20in%20Assamese.mp3",
                poster: "images/cover.jpg",
                duration: '25:87'
            },
            {
                artist: "Demand Analysis by prof. Srinath Baruah - Radio Discussion in Assamese",
                title:"Demand Analysis by prof. Srinath Baruah - Radio Discussion in Assamese",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Economics/Demand%20Analysis%20by%20Prof.%20Srinath%20Baruah-Radio%20Talk%20in%20Assamese.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Economics of Education part I - Radio Discussion in English",
                title:"Economics of Education part I - Radio Discussion in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Economics/Economics%20of%20Education%20Part-I-Radio%20Talk%20in%20English.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Economics of Education part II - Radio Discussion in English",
                title:"Economics of Education part II - Radio Discussion in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Economics/Economics%20of%20Education%20Part-II-%20Radio%20Talk%20in%20English.mp3",
                
                poster: "images/cover.jpg",
                duration: '25.52MB'
            },
			
			{
                artist: "Economics of Education part III - Radio Discussion in English",
                title:"Economics of Education part III - Radio Discussion in English",
                mp3:"http://www.kkhsou.in/web/QuestionPaperRepository/AllFiles/Audio%20Lectures/Economics/Economics%20of%20Education%20Part-III-%20Radio%20Talk%20in%20English.mp3",
                
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

	
	