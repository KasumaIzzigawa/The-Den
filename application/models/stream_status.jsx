//Requests for OAuth App Access Token
$.ajax({
    async: false,
    type: "POST",
    url: "https://id.twitch.tv/oauth2/token?client_id=dmcv458z2jghddjoeqk9cpnm8wjvki&client_secret=kudo5449d9b42am11g0wy9uerwlxq1&grant_type=client_credentials",
    success: function(token) {
        console.log("Token received.");
    },
    error: function() {
        console.log("Request for token failed.");
    }
});
//Requests stream data for specified user
$.ajax({
    async: false,
    headers: {
        "Client-ID: dmcv458z2jghddjoeqk9cpnm8wjvki",
        "Authorization: Bearer "
    },
    type: "GET",
    url: "https://api.twitch.tv/helix/streams?user_id=54425578",
    success: function(data) {
        if(data["stream"] === null){

        }else{

        }
    },
    error: function() {
        console.log("Request for stream data failed.");
    }
});
