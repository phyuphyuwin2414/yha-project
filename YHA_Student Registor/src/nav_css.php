<style>
     @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;500;900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}
:root{
    --maincolor: #ff6b01;
    --side-orange: #ff852d;
    --white: #ffffff;
    --sec-white: rgb(231, 231, 231);
    --bg: black;
    --ab_bg: rgba(233, 233, 233, 0.945);
  }
html{
    overflow-x: hidden;
    scroll-padding-top: 9px;
    scroll-behavior: smooth;
}
html::-webkit-scrollbar{
    width: 7px;
    background: var(--sec-white);
}
html::-webkit-scrollbar-track{
    background: transparent;
}
html::-webkit-scrollbar-thumb{
    background: var(--maincolor);
    border-radius: 5px;
}
a{
    text-decoration: none;
}
body{
    overflow-x: hidden;
    transform-style: preserve-3d;
}
/* #btn1{
    padding: 7px 15px;
    border: none;
    outline: none;
    background-color: var(--side-orange);
    color:var(--white);
    border-radius: 7px;
    transition: all .3s ease;
} */
#btn1 {
    width: 9em;
    height: 3em;
    border-radius: 10px;
    font-size: 15px;
    font-family: inherit;
    border: none;
    position: relative;
    overflow: hidden;
    z-index: 1;
    border: 2px solid var(--maincolor);
}
#btn1 a{
    color: var(--maincolor);
    z-index: 3;
    width: 100%;
} 
/* #btn1 a:hover{
    color: var(--white);
} */
#btn1::before {
    content: '';
    width: 0;
    height: 3em;
    border-radius: 0px;
    position: absolute;
    top: 0;
    left: 0;
    background-color: var(--maincolor);
    transition: .5s ease;
    display: block;
    z-index: -1;
}
#btn1:hover a{
    color: var(--white);
}
#btn1:hover::before {
    width: 9em;
}
/* #btn1:hover{
    background-color: #ff2b01;
} */
.container{
    width: 100%;
    height: 100%;
}
.row{
    width: 100%;
    height: 100%;
}

/* top section start */
.top{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 99;
    letter-spacing: 1px;
}
.top .container-fluid{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.top .row{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.top .col-12{
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.top .col-12 span{
    letter-spacing: 1px;
}
.search-input::-webkit-search-cancel-button,
.search-input::-webkit-search-decoration {
  display: none;
}
.top .search{
    background-color: #ff6b01;
    display: inline-block;
    border-radius: 10px;
    background: #fdfdfd;
    box-shadow:  -3px -3px 10px #ececec,
             3px 3px 10px #f3f3f3;
}
.top .search input{
    padding: 5px 10px;
    color: var(--maincolor);
}
.top .search input, button{
    border: none;
    outline: none;
    font-size: 15px;
    letter-spacing: 1px;
    border-radius: 10px;
}
.top .search input::placeholder{
    color: var(--side-orange);
}
.top .search button{
    background: transparent;
}
.top .search input:focus .top .search button{
    background-color: var(--maincolor);
    border-radius: 10px;
    color: var(--white);
}

/* top section end */

/* nav section start */

.nav{
    width: 100%;
    z-index: 99;
}
.nav .img{
    width: 100px;
}
.nav .img img{
    width: 100%;
}
.nav .col-xl-5, .col-xl-7{
    display: flex;
    justify-content: center;
    align-items: center;
}
.nav::before{
    content: '';
    width: 50%;
    position:absolute;
    box-sizing: border-box;
    border-right: 20vh solid transparent;
    border-top: 15vh solid var(--maincolor);
    z-index: -1;
}
.nav .col-xl-5 h4{
    background-color: transparent;
    color: var(--white);
    letter-spacing: 1px;
}
.nav .col-xl-7 a{
    padding: 10px;
    color: var(--bg);
    transition: all .3s ease;
    font-size: 15px;
    letter-spacing: 1px;
}
.nav .col-xl-7 i{
    color: orangered;
    background: var(--ab_bg);
    padding: 10px;
    border-radius: 50%;
}
.nav .col-xl-7 a:hover{
    color: var(--maincolor);
}
.nav .col-xl-7 .active{
    color: var(--maincolor);
}
.nav .rightmenu{
    display: none;
} 

/* nav section end */
</style>