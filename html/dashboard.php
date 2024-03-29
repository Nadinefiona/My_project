<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0"/> 
    <meta content="width=device-width,initial-scale=1" name="viewpoint" />
    <title>Dashboard</title>
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet"/>
<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style-type: none;
    text-decoration: none;
    font-family: Arial, Helvetica, sans-serif;
}
.header-title h2{
    display: flex;
}
.search-wrapper i{
    padding-left: .6rem;
}
.sidebar{
    width: 200px;
    position: fixed;
    height: 100%;
    left: 0;
    top: 0;
    background-color: rgb(16, 11, 88);
    z-index: 100;
    transition: width 300ms;
}
.sidebar-brand{
   height: 50px;
   padding: 2rem 0rem 4rem 2rem;
   color: #fff;
}
.sidebar-brand span{
    display: inline-block;
    padding-right: 1rem;
}
.sidebar-menu li{
   width: 100%;
   margin-bottom: .2rem;
   padding: .4rem;
   padding-right: 0;
}
.sidebar-menu a{
    padding-left: 1rem;
    display: block;
    color: #fff;
    font-size: 1.1rem;
}
.sidebar-menu a span:first-child{
    font-size: 1.5rem;
    padding-right: 1rem;
}
.active{
    background-color: #fff;
    padding-top: 1rem;
    padding-bottom: 1rem;
    color: rgb(40, 32, 150); 
    border-radius: 30px 0px  0px 30px;
    padding-right: 1px;
}
.main-content{
transition: margin-left 300ms;
   margin-left: 200px; 
}
header  {
    display: flex;
    justify-content: space-between;
    padding: 1rem;
    box-shadow: 2px  4px 5px rgb(40, 32, 150);
    z-index: 100;
     transition:left 300ms; 
}
.header-title{
    display: flex;
    justify-content: space-between;
}
header  label {
    font-size: 1.5rem;
    padding-right: .4rem;
    margin-bottom: 1rem;
    margin-left: 1px;
}
.sidebar-menu{
    margin-top: 1rem;
}
.search-wrapper input{
   padding: .5rem;
   height: 100%;
   border: none;
   outline: none;
}
.search-wrapper{
    border: 1px solid #ccc;
    border-radius: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    overflow-x: hidden;
   margin-left: 15rem;
}
.search-wrapper span {
    display: inline-block;
    padding: 0rem 1rem;
    font-size: 1.6rem; 
}
.user-wrapper{
    display: flex;
    align-items: center;
    padding-left: 18rem;
}
.user-wrapper img{
    border-radius: 50%;
    margin-right: 2px;
}
.user-wrapper small{
    display: inline-block;
    color: rgb(40, 32, 150);
}
main{
    margin-top: 25px;
    padding: 2rem 1.5rem;
    background: #ddddee;
    min-height: calc(100vh-90px);
}
.cards{
    display: grid;
    grid-template-columns: repeat(4,1fr);
    grid-gap: 2rem;
    margin-top: 2px;
}
.card-single{
    display: flex;
    justify-content: space-between;
    background: #fff;
    padding: 1.7rem;
    border-radius: 2px;
    padding-right: 0;
    font-size: 1rem;
}
.card-single div:first-child span{
   color: grey;
   /* font-size: 20rem; */
}
.card-single div:last-child span{
    font-size: 1.2rem;
    color:rgb(40, 32, 150) ;
}
/* .card-single span{
    padding-top: 10rem;
} */
table{
    border-collapse: collapse;
}
.recent-grid{
    margin-top: 3.5rem;
    display: grid;
    grid-gap: 2rem;
    grid-template-columns: 67%  auto;
}
.card{
    background: #fff;
    border-radius: 5px;
}
.card-header,
.card-body{
    padding: 1rem;
}
.card-header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid rgb(55, 45, 201);
}

.card-header  button{
    background: rgb(18, 10, 141);
    color: #fff;
    border-radius: 15px;
    font-size: .8rem;
    padding: .5rem 1rem;
    border: none;
    font-weight: bolder;
    font-style: normal;
    font-family: Arial, Helvetica, sans-serif;
}
.pic{
    width:40px;   
    border-radius:90%;
    height:40px ;
}

thead td{
    font-weight: 700;
}
td{
   padding: .5rem  1rem;
   font-size: .9rem;
  
}
tr td:last-child{
    display: flex;
    align-items: center;
}
td .status {
   height: 10px;
   width: 10px;
   border-radius: 50%;
   display: inline-block;
}

.status.purple{
    background: purple;
}
.status.pink{
    background: pink;
}
.status.orange{
    background: orange;
}
.status.red{
    background: red;
}
.status.blue{
    background: blue;
}
.status.black{
    background: black;
}

.People{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: .1rem .1rem;
}
.info{
    display: flex;
    align-items: center;
}
.info img{
    border-radius: 50%;
    margin-right: .2rem;
}
.info h5{
    font-size: .6rem;
    font-weight: 600;
    color: #222;
}
.info small{
    font-weight: 400;
    color: grey;
    font-size: .5rem;
}
.contact{
   font-size: 1rem;
   display: inline-block;
   margin-left: .3rem;
   color: rgb(40, 32, 150);
}
#nav-toggle:checked  +  .sidebar{
    width: 50px;
}
#nav-toggle:checked  +  .sidebar .sidebar-brand,
#nav-toggle:checked  +  .sidebar li  {
    padding-left: 1rem;
    text-align: center;
}
#nav-toggle:checked  +  .sidebar li a {
    padding-left: 0rem;
}
#nav-toggle:checked  +  .sidebar li a {
    padding-right: 1rem;
}

#nav-toggle:checked  +  .sidebar .sidebar-brand h2 span:last-child,
#nav-toggle:checked  +  .sidebar li a span:last-child{
  display: none;
}
#nav-toggle:checked  ~ .main-content{
    margin-left: 50px;
  } 
#nav-toggle:checked  ~  .main-content header{
    width: calc(100%  - 50px);
     left:50px;
  }


  .pcc{
      width:20px;  
      height:20px;
    }



@media  (max-width:760px){
    .sidebar{
        width: 50px;
    }
     .sidebar .sidebar-brand,
     .sidebar li  {
        padding-left: 1rem;
        text-align: center;
    }
     .sidebar li a {
        padding-left: 0rem;
    }
      .sidebar li a {
        padding-right: 1rem;
    }

    .pic{
    width:60px;   
    border-radius:90%;
    height:60px ;
     }
     .sidebar .sidebar-brand h2 span:last-child,
     .sidebar li a span:last-child{
      display: none;
    }
    .main-content{
    margin-left: 50px;
      } 
     .main-content header{
    width: calc(100%  - 50px);
     left:50px;
     } 
     
}
@media  (max-width:1000px){
    .cards{
        grid-template-columns: 100%;
    }
    h4{
        font-size: 1.2rem;
    }
    small{
        font-size: .9rem;
    }
     .user-wrapper{
        font-size: .8rem;
    padding-left: 9rem;
    
}
.iconi{
    margin-left:20rem ;
    
}
.pcc{
      width:90px;  
      height:90px;
    }

.pic{
    width:90px;   
    border-radius:90%;
    height:90px ;
}
.user-wrapper img{
    border-radius: 50%;
    margin-right: 13px;
}

   *{
    font-size: 1.8rem;
    width: 100%;
   }
   .recent-grid{
       grid-template-columns: 100%;
   }
   .search-wrapper{
       display: none;
   }
   .sidebar{
       left:-100% !important;
   }
   header h2 label{
       background: rgb(55, 45, 201);
       padding-left: .8rem;
       display: inline-block;
       margin-right: 1rem;
       justify-content: center !important;
       height: 90px;
       width: 90px;
       align-items: center;
       border-radius: 50%;
       color: #fff;
       display: flex;

   }
   header  h2 span{
    text-align: center;
    padding-right: 0rem;
   }
   .main-content{
     width: 100%;
     margin-left: 4px;
   }

   header{
       width: 100% !important;
       left: 0  !important;
   }
   header   h2{
      font-size: 1.5rem;
   }
   #nav-toggle:checked +.sidebar{
       left:0 !important;
       z-index: 100;
       width: 250px;
   }
.info small{
    font-size: 1rem;
}
.info h5{
    font-size: 1rem;
} 
}
@media  (max-width:320px){
    .sidebar{
        width: 50px;
    }
     .sidebar .sidebar-brand,
     .sidebar li  {
        padding-left: 1rem;
        text-align: center;
    }
     .sidebar li a {
        padding-left: 0rem;
    }
      .sidebar li a {
        padding-right: 1rem;
    }
    
     .sidebar .sidebar-brand h2 span:last-child,
     .sidebar li a span:last-child{
      display: none;
    }
    .main-content{
    margin-left: 50px;
      } 
     .main-content header{
    width: calc(100%  - 50px);
     left:50px;
     } 
}
@media  (max-width:480px){
    .cards{
        grid-template-columns: 100%;
    }
   .recent-grid{
       grid-template-columns: 100%;
   }
   .search-wrapper{
       display: none;
   }
   .sidebar{
       left:-100% !important;
   }
   header h2 label{
       background: rgb(55, 45, 201);
       padding-left: 0rem;
       display: inline-block;
       margin-right: 1rem;
       justify-content: center !important;
       height: 40px;
       width: 40px;
       align-items: center;
       border-radius: 50%;
       color: #fff;
       display: flex;

   }
   header  h2 span{
    text-align: center;
    padding-right: 0rem;
   }
   .main-content{
     width: 100%;
     padding-left: 0rem;
   }

   header{
       width: 100% !important;
       left: 0  !important;
   }
   header   h2{
      font-size: 1.1rem;
   }
   #nav-toggle:checked +.sidebar{
       left:0 !important;
       z-index: 100;
       width: 250px;
   }
}
</style>

</head>
<body>
    <input type="checkbox"  id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2 ><i class="fab fa-accusoft"></i><span>FIONA</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href=""><i class="fas fa-address-book"></i>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href=""><i class="fas fa-users"></i>
                    <span>Applicant</span></a>
                </li>
                <li>
                    <a href=""><i class="fas fa-user-plus"></i>
                    <span>Add post</span></a>
                </li>
                <li>
                    <a href=""><i class="fas fa-user-plus"></i>
                    <span>Edit post</span></a>
                </li>
                <li>
                    <a href=""><i class="fas fa-book-reader"></i>
                    <span>Add Applicant</span></a>
                </li>
                <li>
                    <a href=""><i class="fas fa-book-reader"></i>
                    <span>S. Applicant</span></a>
                </li>

                <li style="margin-top: 15rem;">
                    <a href="index.php"><i class="fas fa-sign-out"></i>
                    <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <div class="header-title">
                <h2>
                    <label for="nav-toggle">
                        <i class="fas fa-bars"></i>
                    </label>
                    Dashboard
                </h2>
                <div class="search-wrapper">
                    <i class="fas fa-search"></i>
                    <input type="search" placeholder="search">
                </div>
                <div class="user-wrapper">
                    <img src="nadine.jpg" class="pic">
                    <div>
                        <h4 style="font-style: inherit;">Fiona</h4>
                        <small>Owner</small> 
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h4 style="padding-bottom: .5rem; font-size: 2rem;">100</h4>
                        <span>Available Position</span>
                    </div>    
                </div>
                <div class="card-single">
                    <div>
                        <h4 style="padding-bottom: .5rem; font-size: 2rem;">700</h4>
                        <span>Comments</span>
                    </div>  
                </div>
                <div class="card-single">
                    <div>
                        <h4 style="padding-bottom: .5rem; font-size: 2rem;">50</h4>
                        <span>S.Applicants</span>
                    </div>   
                </div>
                <div class="card-single">
                    <div>
                        <h4 style="padding-bottom: .5rem; font-size: 2rem;">500</h4>
                        <span> Applicants</span>
                    </div>   
                </div>

            </div>
            <div class="recent-grid">
                <div class="projects">
                     <div class="card">
                         <div class="card-header">
                           <h3>Recents</h3>
                           <button>See all<i class="fas fa-arrow-circle-right"></i></button>
                         </div>
                         <div class="card-body">
                          <table width="100%">
                             <thead>
                                <tr>
                                    <td style="font-size: 1.1rem;"> Available Job</td>
                                    <td style="font-size: 1.1rem;">Position</td>
                                    <td style="font-size: 1.1rem;">Status</td>
                                </tr>
                             </thead>
                             <tbody>
                                   <tr>
                                       <td>Internership</td>
                                       <td>internship</td>
                                       <td>
                                           <span class="status red"></span>
                                           review
                                       </td>
                                   </tr>
                                   <tr>
                                        <td>Data Entity</td>
                                        <td>Data entity</td>
                                       <td>
                                           <span class="status blue"></span>
                                           in progress
                                       </td>
                                   </tr>
                                   <tr>
                                    <td>Web Development</td>
                                    <td>Develop web</td>
                                   <td>
                                       <span class="status black"></span>
                                       pending
                                   </td>
                                   </tr>
                                   <tr>
                                    <td>Content & Script writing</td>
                                    <td>Script writing</td>
                                    <td>
                                        <span class="status purple"></span>
                                        review
                                    </td>
                                </tr>
                             </tbody>
                          </table> 
                        </div>

                     </div>
                </div>
                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                          <h3>Comments</h3>
                          <button>See all<i class="fas fa-arrow-circle-right"></i></button>
                        </div>

                        <div class="card-body">
                            <div class="People">
                                <div  class="info">
                                    <img src="nadine.jpg" alt="" class="pcc">
                                    <div>
                                    <h5>Ishimwe</h5>
                                    <small>CEO</small>
                                    </div>
                                </div>
                                <div class="iconi">
                                    <i class="fas fa-user-circle"></i>
                                    <i class="fas fa-comment"></i>
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <div class="People">
                                <div class="info">
                                    <img src="nadine.jpg" alt=""  class="pcc">
                                    <div>
                                    <h5>Ishimwe</h5>
                                    <small>CEO</small>
                                    </div>
                                </div>
                                <div class="iconi">
                                    <i class="fas fa-user-circle"></i>
                                    <i class="fas fa-comment"></i>
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <div class="People">
                                <div class="info">
                                    <img src="nadine.jpg" alt=""  class="pcc">
                                    <div>
                                    <h5>Ishimwe</h5>
                                    <small>CEO</small>
                                    </div>
                                </div>
                                <div class="iconi">
                                    <i class="fas fa-user-circle"></i>
                                    <i class="fas fa-comment"></i>
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <div class="People">
                                <div class="info">
                                    <img src="nadine.jpg" alt=""  class="pcc">
                                    <div>
                                    <h5>Ishimwe</h5>
                                    <small>CEO</small>
                                    </div>
                                </div>
                                <div class="iconi">
                                    <i class="fas fa-user-circle"></i>
                                    <i class="fas fa-comment"></i>
                                    <i class="fas fa-phone"></i>
                                </div>
                                
                            </div>
                            <div class="People">
                                <div class="info">
                                    <img src="nadine.jpg" alt="" class="pcc">
                                    <div>
                                    <h5>Ishimwe</h5>
                                    <small>CEO</small>
                                    </div>
                                </div>
                                <div class="iconi">
                                    <i class="fas fa-user-circle"></i>
                                    <i class="fas fa-comment"></i>
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>