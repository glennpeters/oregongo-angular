function log(n){window.console&&window.console.log(n)}function init(){log("oregongo init"),$(".main-nav > li").hover(function(){var n=$(this),e=n.find(".submenu");e.addClass("active"),log("main-nav mouseover")},function(){var n=$(this),e=n.find(".submenu");e.removeClass("active"),log("main-nav mouseout")}),$("a[href=#]").click(function(){return log("Nullified"),!1}),$("a[data-nav]").click(function(){var n=$(this),e=n.data("nav");return log("Data-nav found, nav = "+e),!1})}!function(){for(var n=["assert","assert","cd","clear","count","countReset","debug","dir","dirxml","dirxml","dirxml","error","error","exception","group","group","groupCollapsed","groupCollapsed","groupEnd","info","info","log","log","markTimeline","profile","profileEnd","profileEnd","select","table","table","time","time","timeEnd","timeEnd","timeEnd","timeEnd","timeEnd","timeStamp","timeline","timelineEnd","trace","trace","trace","trace","trace","warn"],e=n.length,i=window.console=window.console||{},o,t=function(){};e--;)o=n[e],i[o]||(i[o]=t)}(),$(init);