(function () {
	var key = 'AIzaSyC6tPt3VAcC28Vv1cSBA4mzxSWphKM6E1o',
		apiUrl = "https://www.googleapis.com/youtube/v3/playlistItems",
		params = "?part=snippet&maxResults=12&playlistId=UUU3OMAQMsRi0RixSUNfC3aA&key=" + key,
		nextPage = null;

	function createVideoElement(item)
	{
		var videoId = item.snippet.resourceId.videoId,
			title = item.snippet.title,
			videoHtml = '<div class="col-md-4 col-sm-6 col-xs-12 el news_ t-videos">'
			+ '<div class="">'
            	+ '<div class="embed-responsive embed-responsive-16by9">'
					+ '<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/'+videoId+'" frameborder="0" allowfullscreen title="video"></iframe>'
				+ '</div>'
				+ '<h4><a title="'+title+'" href="https://www.youtube.com/watch?v='+videoId+'" target="_blank">'+title+'</a></h4>'
			+ '</div>'
        + '</div>';

        return videoHtml;
	}

	function getVideosPage(callback) {
		var requestParams = params;

		if (nextPage) {
			requestParams += "&pageToken=" + nextPage;
		}

		$.get(apiUrl + requestParams, function (response) {
			nextPage = response.nextPageToken;

			$.each(response.items, function (i, item) {
				$('.portfolio').append(createVideoElement(item));
			});

			if (callback) {
				callback();
			}
		});
	}

	getVideosPage();

	$('.load-more-youtube').on('click', function (e) {
		var __this = this;
		$(this).html("Loading");
		getVideosPage(function () {
			$(__this).html("Load More");
		});
	});
})();
