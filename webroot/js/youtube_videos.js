(function () {
	var key = 'AIzaSyBzmUqV8vu-0jQ6y26PuF8w1N4dNf_Z45E',
		apiUrl = "https://www.googleapis.com/youtube/v3/playlistItems",
		params = "?part=snippet&maxResults=12&playlistId=UUU3OMAQMsRi0RixSUNfC3aA&key=" + key,
		nextPage = null;

	function getVideosPage(pageToken) {
		if (pageToken) {
			params = params + "&pageToken=" + pageToken;
		}

		$.get(apiUrl + params, function (response) {
			nextPage = response.nextPageToken;

			$.each(response.items, function (i, item) {
				var videoId = item.snippet.resourceId.videoId,
					title = item.snippet.title,
					videoHtml = '<div class="col-md-4 col-sm-6 col-xs-12 el news_ t-videos">'
					+ '<div class="">'
                    	+ '<div class="embed-responsive embed-responsive-16by9">'
							+ '<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/'+videoId+'" frameborder="0" allowfullscreen></iframe>'
						+ '</div>'
						+ '<h4><a title="'+title+'" href="https://www.youtube.com/watch?v='+videoId+'" target="_blank">'+title+'</a></h4>'
					+ '</div>'
                + '</div>';

                $('.portfolio').append(videoHtml);
			});
		});
	}

	getVideosPage();

	$('.load-more-youtube').on('click', function (e) {
		getVideosPage(nextPage);
	});
})();
