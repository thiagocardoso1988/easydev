var url = "https://graph.facebook.com/v2.8/me?fields=posts.limit(5)&access_token=EAAIpd7YTg7gBABJL8B1MN7rxZBIZBvUQlpZAX42a9xBfKxACBVnOtZCKzZBZBSj0QTCFF51fLfjVcvSBmi3lWXpxueyE9rPXpAXZCHIMkZCWzQFLKgdZCJMvX3acrkwA9DeAr4LUatezBXohGohE3pZCoanNfu2wrbnPNU0hOZCd0k0PttNcHZAxYUiJO54Uv7JUHrEZD";


function getFbPosts(){
	$(" #fbposts .post").html("");
	$.getJSON(url, function(result){
        $.each(result.posts.data, function(i, post){
        	//console.log(i, post)
        	var message = post.message.split('\n')[0];
        	message = (message.length > 80) ? message.substr(0, 80) + "..." : message; 
        	var postID = post.id.split('_')
        	var link = "http://www.facebook.com/" + postID[0] + "/posts/" + postID[1];

        	var el = "<p><a target=\"_blank\" href=\"" + link + "\">" + message + "</a><span>" + parseFbDate(post.created_time) + "</span></p>";
        	//console.log(el);
            $(" #fbposts .post").append(el);
        });
    });
}

function parseFbDate(datestring){
	var d = new Date(datestring);
	var options = {
	    weekday: "long", year: "numeric", month: "short",
	    day: "numeric", hour: "2-digit", minute: "2-digit"
	};
	//return d.toLocaleString();
	//return d.toLocaleTimeString("en-us", options);
	return d.toLocaleTimeString("pt-br", options);
}

$(document).ready(function(){
	getFbPosts();
})


/*
<div class="post">
          <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
          <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
          <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
        </div>
*/