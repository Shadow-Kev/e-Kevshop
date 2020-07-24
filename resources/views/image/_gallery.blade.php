<style>
/*
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
*/ 

    .box-4{
        box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
        overflow: hidden;
        position: relative;
    }
    .box-4 img{
        width: 100%;
        height: auto;
    }
    .box-4 .box-4-content{
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        position: absolute;
        top: 0;
        left: 15%;
        opacity: 0;
        transition: all 0.4s ease 0s;
    }
    .box-4:hover .box-4-content{
        left: 0;
        opacity: 1;
    }
    .box-4 .title{
        padding: 7px 20px;
        margin: 0;
        font-size: 22px;
        font-weight: 700;
        color: #fff;
        letter-spacing: 8px;
        border-left: 5px solid #2196f3;
        opacity: 0;
        position: absolute;
        top: 80px;
        left: 80px;
        transition: all 0.5s ease 0s;
    }
    .box-4:hover .title{
        letter-spacing: 1px;
        left: 40px;
        opacity: 1;
        transition-delay: 0.3s;
    }
    .box-4 .icon{
        list-style: none;
        padding: 0;
        margin: 0;
        position: absolute;
        top: 140px;
        left: 120px;
        color: #fff;
        text-align: center;
        opacity: 0;
        transition: all 0.5s ease 0s;
    }
    .box-4:hover .icon{
        left: 60px;
        opacity: 1;
        transition-delay: 0.3s;
    }
    .box-4 .icon li{ display: inline-block; }
    .box-4 .icon li a{
        display: block;
        width: 35px;
        height: 35px;
        line-height: 35px;
        background: #2196f3;
        font-size: 20px;
        color: #fff;
        margin-right: 10px;
        transition: all 0.5s ease 0s;
    }
    .box-4 .icon li a:hover{ border-radius: 50%; }
    @media only screen and (max-width:990px){
        .box-4{ margin-bottom: 20px; }
    }
</style>