<style>
/*
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
*/ 

#card-prof .card {
    padding-top: 20px;
    margin: 10px 0 20px 0;
    border-top-width: 0;
    border-bottom-width: 2px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

#card-prof .card .card-heading {
    padding: 0 20px;
    margin: 0;
}

#card-prof .card .card-heading.simple {
    font-size: 20px;
    font-weight: 300;
    color: #777;
    border-bottom: 1px solid #e5e5e5;
}

#card-prof .card .card-heading.image img {
    display: inline-block;
    width: 46px;
    height: 46px;
    margin-right: 15px;
    vertical-align: top;
    border: 0;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}

#card-prof .card .card-heading.image .card-heading-header {
    display: inline-block;
    vertical-align: top;
}

#card-prof .card .card-heading.image .card-heading-header h3 {
    margin: 0;
    font-size: 14px;
    line-height: 16px;
    color: #262626;
}

#card-prof .card .card-heading.image .card-heading-header span {
    font-size: 12px;
    color: #999999;
}

#card-prof .card .card-body {
    padding: 0 20px;
    margin-top: 20px;
}

#card-prof .card .card-media {
    padding: 0 20px;
    margin: 0 -14px;
}

#card-prof .card .card-media img {
    max-width: 100%;
    max-height: 100%;
}

#card-prof .card .card-actions {
    min-height: 30px;
    padding: 0 20px 20px 20px;
    margin: 20px 0 0 0;
}

#card-prof .card .card-comments {
    padding: 20px;
    margin: 0;
    background-color: #f8f8f8;
}

#card-prof .card .card-comments .comments-collapse-toggle {
    padding: 0;
    margin: 0 20px 12px 20px;
}

#card-prof .card .card-comments .comments-collapse-toggle a,
#card-prof .card .card-comments .comments-collapse-toggle span {
    padding-right: 5px;
    overflow: hidden;
    font-size: 12px;
    color: #999;
    text-overflow: ellipsis;
    white-space: nowrap;
}

#card-prof .card-comments .media-heading {
    font-size: 13px;
    font-weight: bold;
}

#card-prof .card.people {
    position: relative;
    display: inline-block;
    width: 170px;
    height: 300px;
    padding-top: 0;
    margin-left: 20px;
    overflow: hidden;
    vertical-align: top;
}

#card-prof .card.people:first-child {
    margin-left: 0;
}

#card-prof .card.people .card-top {
    position: absolute;
    top: 0;
    left: 0;
    display: inline-block;
    width: 170px;
    height: 150px;
    background-color: #ffffff;
}

#card-prof .card.people .card-top.green {
    background-color: #53a93f;
}

#card-prof .card.people .card-top.blue {
    background-color: #427fed;
}

#card-prof .card.people .card-info {
    position: absolute;
    top: 150px;
    display: inline-block;
    width: 100%;
    height: 101px;
    overflow: hidden;
    background: #ffffff;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

#card-prof .card.people .card-info .title {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 16px;
    font-weight: bold;
    line-height: 18px;
    color: #404040;
}

#card-prof .card.people .card-info .desc {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 12px;
    line-height: 16px;
    color: #737373;
    text-overflow: ellipsis;
}

#card-prof .card.people .card-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    display: inline-block;
    width: 100%;
    padding: 10px 20px;
    line-height: 29px;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

#card-prof .card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
}

#card-prof .card.hovercard .cardheader {
    /*background: url("../img/bg-i.jpg");*/
    background: #ddd;
    background-size: cover;
    height: 135px;
}

#card-prof .card.hovercard .avatar {
    position: relative;
    top: -50px;
    margin-bottom: -50px;
}

#card-prof .card.hovercard .avatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}

#card-prof .card.hovercard .info {
    padding: 4px 8px 10px;
}

#card-prof .card.hovercard .info .title {
    margin-bottom: 4px;
    font-size: 24px;
    line-height: 1;
    color: #262626;
    vertical-align: middle;
}

#card-prof .card.hovercard .info .desc {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}

#card-prof .card.hovercard .prof-nav {
    margin: 0 auto;
    margin-bottom: 40px;
}

#card-prof .card.hovercard .prof-nav li {
    margin: 2px;
    padding: 5px 10px;
    border-bottom: 1px solid #ddd;
}

#card-prof .card.hovercard .prof-nav li:hover {
    border-bottom: 1px solid #555;
}

#card-prof .card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}

#card-prof .btn {
    border-radius: 50%;
    width: 32px;
    height: 32px;
    line-height: 23px;
}


/*==============================================
                PROFILE-CONTENT
================================================*/

a:hover,
a:focus {
    outline: none;
    text-decoration: none;
}

.tab {
    text-align: center;
}

.tab .nav-tabs {
    position: relative;
    border-bottom: none;
}

.tab .nav-tabs li {
    margin: 0;
}

.tab .nav-tabs li a {
    display: block;
    padding: 80px 90px 10px;
    background: #fff;
    font-size: 17px;
    font-weight: 700;
    color: #999;
    text-transform: uppercase;
    text-align: center;
    border-radius: 0;
    border: none;
    margin-right: 0;
    overflow: hidden;
    z-index: 1;
    position: relative;
    transition: all 0.3s ease 0s;
}

.tab .nav-tabs li a span {
    display: block;
    width: 50px;
    height: 50px;
    line-height: 50px;
    background: #f2f2f2;
    margin: auto;
    font-size: 22px;
    color: #999;
    border-radius: 50%;
    position: absolute;
    top: 10px;
    left: 0;
    right: 0;
}

.tab .nav-tabs li a.active span {
    background: #29335c;
    color: #fff;
}

.tab .nav-tabs li a span i {}

.tab .nav-tabs li a.active,
.tab .nav-tabs li a:hover {
    color: #999;
    border: none;
    border-bottom: 2px solid #ddd;
}

.tab .nav-tabs li a.active {
    border-bottom: 2px solid #29335c;
}

.tab .tab-content {
    padding: 20px;
    margin-top: -2px;
    font-size: 15px;
    color: #757575;
    line-height: 26px;
    text-align: left;
    border-top: 2px solid #ddd;
}

.tab .tab-content h3 {
    font-size: 24px;
    margin-top: 0;
}

@media only screen and (max-width: 479px) {
    .tab .nav-tabs li {
        width: 100%;
        text-align: center;
        margin-bottom: 5px;
    }
    .tab .nav-tabs li:last-child {
        margin-bottom: 0;
    }
}
</style>