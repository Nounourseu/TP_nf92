
var timeout;
var offset = 0;
var state = 0;

troll = document.getElementById("troll")


troll.onmouseover = function(e) {
    offset = 30-offset;
    troll.style.transition = "margin-top 1s";
    troll.style.marginTop = offset;
    //troll.style.marginTop = offset+"px";
};
troll.onmouseout = function(e) {
    console.log("hehe")
}; 