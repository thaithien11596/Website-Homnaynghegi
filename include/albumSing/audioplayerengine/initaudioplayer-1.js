jQuery(document).ready(function(){
    var scripts = document.getElementsByTagName("script");
    var jsFolder = "";
    for (var i= 0; i< scripts.length; i++)
    {
        if( scripts[i].src && scripts[i].src.match(/initaudioplayer-1\.js/i))
            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);
    }
    jQuery("#amazingaudioplayer-1").amazingaudioplayer({
        jsfolder:jsFolder,
        skinsfoldername:"",
        tracklistarrowimage:"tracklistarrow-16-16-0.png",
        timeformatlive:"%CURRENT% / LIVE",
        volumeimagewidth:24,
        barbackgroundimage:"",
        tracklistarrowimageheight:16,
        showtime:true,
        titleinbarwidth:80,
        showprogress:true,
        random:false,
        titleformat:"%TITLE%",
        height:600,
        loopimage:"loop-24-24-0.png",
        prevnextimage:"prevnext-24-24-0.png",
        showinfo:false,
        imageheight:100,
        skin:"BarTitle",
        responsive:true,
        loopimagewidth:24,
        showstop:false,
        prevnextimageheight:24,
        infoformat:"By %ARTIST% %ALBUM%<br />%INFO%",
        tracklistbackgroundimage:"",
        showloading:true,
        forcefirefoxflash:false,
        tracklistscroll:true,
        preloadaudio:true,
        showvolumebar:true,
        imagefullwidth:false,
        width:765,
        showimage:false,
        showloop:true,
        volumeimage:"volume-24-24-0.png",
        playpauseimagewidth:24,
        loopimageheight:24,
        tracklistitemformat:"%ID%. %TITLE% <span style='position:absolute;top:0;right:0;'><a href='%AUDIOURL%' onclick='event.stopPropagation();' download='%TITLE%.mp3' target='_blank'>Download</a></span>",
        prevnextimagewidth:24,
        titleinbarwidthmode:"fixed",
        forceflash:false,
        tracklistarrowimagewidth:16,
        playpauseimageheight:24,
        showbackgroundimage:false,
        stopimage:"stop-24-24-0.png",
        showvolume:true,
        playpauseimage:"playpause-24-24-0.png",
        forcehtml5:true,
        showprevnext:true,
        backgroundimage:"",
        loadingformat:"Loading...",
        progressheight:8,
        showtracklistbackgroundimage:false,
        titleinbarscroll:true,
        showtitle:false,
        defaultvolume:100,
        showtitleinbar:true,
        heightmode:"auto",
        titleinbarformat:"%TITLE%",
        showtracklist:true,
        stopimageheight:24,
        volumeimageheight:24,
        stopimagewidth:24,
        volumebarheight:80,
        noncontinous:false,
        stopotherplayers:true,
        showbarbackgroundimage:false,
        volumebarpadding:8,
        imagewidth:100,
        timeformat:"%CURRENT% / %DURATION%",
        autoplay:true,
        fullwidth:true,
        loop:1,
        tracklistitem:10
    });
});