function onDOMReady(fn, ctx){
    var ready, timer;
    var onChange = function(e){
        if(e && e.type == "DOMContentLoaded"){
            fireDOMReady();
        }else if(e && e.type == "load"){
            fireDOMReady();
        }else if(document.readyState){
            if((/loaded|complete/).test(document.readyState)){
                fireDOMReady();
            }else if(!!document.documentElement.doScroll){
                try{
                    ready || document.documentElement.doScroll('left');
                }catch(e){
                    return;
                }
                fireDOMReady();
            }
        }
    };
 
    var fireDOMReady = function(){
        if(!ready){
            ready = true;
            fn.call(ctx || window);
            if(document.removeEventListener)
                document.removeEventListener("DOMContentLoaded", onChange, false);
            document.onreadystatechange = null;
            window.onload = null;
            clearInterval(timer);
            timer = null;
        }
    };
 
    if(document.addEventListener)
        document.addEventListener("DOMContentLoaded", onChange, false);
    document.onreadystatechange = onChange;
    timer = setInterval(onChange, 5);
    window.onload = onChange;
};