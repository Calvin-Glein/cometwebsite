/*
Theme Name: LearningWordPress
Author: LearnWebCode
Version: 1.0
*/

names{
	font-size: 500px;
}
body {
    font-family: Arial, sans-serif;
    font-size: 14px;
    color: #333;

    /*min-height: 100% !important;*/
    margin: 0 0 200px !important; /* bottom = footer height */
}

html {
    position: relative !important;
    min-height: 100% !important;
    height: auto !important;
}

.footerlink {
    color: white;
}


a.whitelink:active, a.whitelink:hover, a.whitelink:visited, .whitelink{
    color: white !important;
}



.footer{
    padding-top: 50px !important;
    padding-bottom: 50px !important;
}

a, a:hover, a:active, a:visited {
    color: black;
}

p {
    line-height: 1.65em;
}

.menu {
    border-bottom: none !important;
    background-color: white !important;
    padding-bottom: 10px !important;
}

.coverpic {
    object-fit: cover !important;
    width: 100% !important;
    height: 400px !important;
    /*opacity: .5;*/
}

.smallcoverpic {
    object-fit: cover !important;
    width: 100% !important;
    height: 200px !important;
    /*opacity: .5;*/
}

.featuredpic{
    object-fit: cover !important;
    height: 300px !important;
    /*width: 100% !important;*/
}

.boxpic {
    object-fit: cover !important;
    width: 100% !important;
    height: 300px !important;
}

.card {
    width: 100% !important;
}

.boxcontent {
    padding: 30px !important;
}

#content {
    margin-top: 20px;
    margin-bottom: 50px;
}

.left {
    /*padding-right: 0px !important;*/
}

.right {
    /*padding-left: 0px !important;*/
}

.footer {
    background-color: #232323;
    padding: 20px;

    position: absolute !important;
    left: 0 !important;
    bottom: 0 !important;
    height: 200px !important;
    width: 100% !important;

    color: white;
}

.headerc {
    padding-bottom: 0px !important;
    padding-top: 0px !important;
    margin-bottom: 0px !important;
}

.headingc {
    padding-bottom: 0px !important;
    padding-top: 0px !important;
    padding-left: 0px !important;
    margin-bottom: 0px !important;
    margin-left: 0px !important;
    vertical-align: bottom !important;
}

.headingsubc {
    right: 0px !important;
    position: absolute !important;
    bottom: 0px !important;
}

.darkgreen {
   /* color: #01D279 !important; */
   /* color: #1A8438 !important; */
    color: #01D279 !important;

}

.activesub{
   /* color: #01D279 !important; */
   /* color: #1A8438 !important; */
    color: #01D279 !important;

}

.tooltip {
    position: relative;
    display: inline-block;
    /*border-bottom: 1px dotted black; !* If you want dots under the hoverable text *!*/
}

/* Tooltip text */
.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;

    /* Position the tooltip text - see examples below! */
    width: 120px;
    top: 100%;
    left: 50%;
    margin-left: -60px;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
    visibility: visible;
}

.tooltip .tooltiptext::after {
    content: " ";
    position: absolute;
    bottom: 100%; /* At the top of the tooltip */
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    /*border-style: solid;*/
    /*border-color: transparent transparent black transparent;*/
}

.custom-pagination span,
.custom-pagination a {
    display: inline-block;
    padding: 2px 10px;
}

.custom-pagination a {
    background-color: #ebebeb;
    color: #383838;
}

.custom-pagination a:hover {
    background-color: #383838;
    color: #fff;
}

.custom-pagination span.page-num {
    margin-right: 10px;
    padding: 0;
}

.custom-pagination span.dots {
    padding: 0;
    color: gainsboro;
}

.custom-pagination span.current {
    background-color: #383838;
    color: #fff;
}

.menu {
    background-color: black;
}

.uk-overlay-background{
    background: black !important;
}
.ui.dividing.header{
    border-bottom: 2px black solid !important;
}

.item:hover{
    font-weight: bold !important;
    /*color: #01D279 !important;*/
}

.ui.segment.strong{
    border: black 2px solid !important;
    border-radius: 0 !important;
    /*border-color: black;*/
}



.ui.segment.weak{
    border: black 1px solid !important;
    border-radius: 0 !important;
    /*border-color: black;*/
}

.ui.divider:not(.vertical):not(.horizontal){
    border-bottom: 1px solid black !important;

    border-top: 1px solid black !important;
}

.ui.divider.invisible{
    border: none !important;
}

.comethead{
    /*color: #01D279 !important;*/
    /*padding:0.1em;*/
    /*border-color: 0 !important;*/
}


.active{
    color: #01D279 !important;
    border-bottom-color: #01D279 !important;
}

.nospaces{
    margin: 0  !important;
    padding: 0 !important;
}

.noleftspace{
    padding-left: 0 !important;
    margin-left: 0 !important;
}

.heavybottom{
    margin-bottom: 40px !important;
}

.fillcolumn{
    /*position: absolute !important;*/
    /*top: 0 !important;*/
    /*left: 0 !important;*/
    /*bottom: 0 !important;*/
    /*right: 0 !important;*/
    /*margin-bottom: 100% !important;*/
    /*align-items: stretch !important;*/
}

.date{
    text-transform: uppercase !important;
    font-size: 0.7rem !important;
}

.checkpoint{
    text-transform: uppercase !important;
    font-size: 0.8rem !important;
    color: #01D279  !important;
}

.noverticalpad{
    padding-top: 0 !important;
    margin-top: 0 !important;
}


.ui.sub.header.mini{
    font-size: 0.95rem !important;
}

.greenhead{
    color: #01D279 !important;
    font-size: 50px !important;
}




img.alignright {float:right; margin:0 0 1em 1em}
img.alignleft {float:left; margin:0 1em 1em 0}
img.aligncenter {display: block; margin-left: auto; margin-right: auto}
a img.alignright {float:right; margin:0 0 1em 1em}
a img.alignleft {float:left; margin:0 1em 1em 0}
a img.aligncenter {display: block; margin-left: auto; margin-right: auto}








