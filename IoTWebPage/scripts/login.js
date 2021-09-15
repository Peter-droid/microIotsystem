var w = window.screen.availWidth;
var h = window.screen.availHeight;
document.documentElement.style.setProperty('--windowH', h/2 + "px")
document.documentElement.style.setProperty('--titleH', h/6 + "px")
w = w / 2;
document.documentElement.style.setProperty('--windowW', w + "px")

window.onload = function () {
            var wrap = document.querySelector(".wrap");
            var divs = wrap.getElementsByTagName('div');
            wrap.onmouseover = function () {
                divs[0].style.width = "100%";
                divs[1].style.width = "100%";
                wrap.style.backgroundColor = "#15afc7";
                wrap.style.color = "#105069";
            };
            wrap.onmouseout = function () {
                divs[0].style.width = 0;
                divs[1].style.width = 0;
                wrap.style.backgroundColor = "#105069";
                wrap.style.color = "#fff";
            }
        }

