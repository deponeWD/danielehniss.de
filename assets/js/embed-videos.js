(function() {
  var videoLinks = Array.from(document.getElementsByClassName('youtube'));
  var vimeoLinks = Array.from(document.getElementsByClassName('vimeo'));
  videoLinks.push.apply(videoLinks, vimeoLinks);

  for (var i = 0; i < videoLinks.length; i++) {
    let thisVideoLink = videoLinks[i];
    let thisVideoSource = thisVideoLink.href;
    let thisVideoThumbnail = thisVideoLink.getElementsByTagName('img');

    thisVideoLink.addEventListener("click", function(e) {
      let thisIframe = createIframe(thisVideoSource, 640, 360);
      let videoContainer = document.createElement('div');
      videoContainer.setAttribute('class', 'video');

      thisVideoLink.parentNode.insertBefore(videoContainer, thisVideoLink);
      videoContainer.prepend(thisIframe);
      thisVideoLink.parentNode.removeChild(thisVideoLink);

      for (var i = 0; i < thisVideoThumbnail.length; i++) {
        thisVideoThumbnail[i].classList.add('hidden');
      }

      e.preventDefault();
    });
  }

  function parseVideo (url) {
      // - Supported YouTube URL formats:
      //   - http://www.youtube.com/watch?v=My2FRPA3Gf8
      //   - http://youtu.be/My2FRPA3Gf8
      //   - https://youtube.googleapis.com/v/My2FRPA3Gf8
      // - Supported Vimeo URL formats:
      //   - http://vimeo.com/25451551
      //   - http://player.vimeo.com/video/25451551
      // - Also supports relative URLs:
      //   - //player.vimeo.com/video/25451551

      url.match(/(http:|https:|)\/\/(player.|www.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com))\/(video\/|embed\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/);

      if (RegExp.$3.indexOf('youtu') > -1) {
          var type = 'youtube';
      } else if (RegExp.$3.indexOf('vimeo') > -1) {
          var type = 'vimeo';
      }

      return {
          type: type,
          id: RegExp.$6
      };
  }

  function createIframe (url, width, height) {
      // Returns an iframe of the video with the specified URL.
      var videoObj = parseVideo(url);

      var iframe = document.createElement('iframe');
      iframe.setAttribute("width", width);
      iframe.setAttribute("height", height);
      iframe.setAttribute("frameborder", "0");
      iframe.setAttribute("allowfullscreen", "allowfullscreen");
      if (videoObj.type == 'youtube') {
          iframe.setAttribute('src', '//www.youtube-nocookie.com/embed/' + videoObj.id + '?autoplay=1');
      } else if (videoObj.type == 'vimeo') {
          iframe.setAttribute('src', '//player.vimeo.com/video/' + videoObj.id + '?autoplay=1');
      }
      return iframe;
  }
}());
