<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact page</title>
    <link
    href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css"
    rel="stylesheet"
  />

  <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-style: normal;
}
h4{
    font-size: 1.4rem;
    text-align: center;
    color:white;
    padding-top: 2rem;
    font-style: normal;
    font-weight: 620;
}
.contact{
  background-color:  black;
  color: white;
}
.pagee{

  display: flex;
}
.message{
 font-size: medium;
 margin-left: 30px;
 font-weight: lighter;
 font-style: normal;
 font-family: Arial, Helvetica, sans-serif;
}
input[type=text],input[type=email]{
 width:30rem;
 margin: 10px 0;
 box-sizing:border-box;
 padding:0px 0px ;
 height:40px;
 margin-left: 30px;
 margin-right: 1px;
 border: none;
}
button{
 background-color: #FC1E1E;
 color: #e5e5e5;
 border-radius: 30px;
 width: 50%;
 height: 40px;
 padding: 10px;
 border: none;
 text-align: center;
 font-weight: bold;
 margin-left: 30px;
 margin-top: 1rem;
}
input[type=submit]  :hover{
 background-color: #FC1E1E;
}
input[type=text].subject{
 height: 10rem;

}
.formm{
margin-top: 5rem;
margin-left: 4rem;
}

.last{
  margin-top: 7rem;
  margin-left: 10rem;
  
}
.text5{
 margin-right: 15rem;
 font-weight: 610;
}

.me{
  width: 30%;
  height: 40%;
  border-radius: 100%;
  margin-bottom: 5rem;
}
.page{
  text-align: center;
  font-weight: bold;
  margin-bottom: 4rem;
  margin-top: 2rem;
  display: flex;
}
.icon{
    padding-left: 1.2rem;
    color: blue;
    font-size: 2rem;
}
.copyright{
  text-align: center;
  font-weight: lighter;
  margin-top: 30px;
}

</style>
</head>
<body>
    <div class="contact">
        <h4>Contact Us</h4>
        <div class="pagee">
            <div class="formm">
                <form class="form" id="form">
                    <label for="" class="message">Name</label></br>
                    <input type="text" name="" id="name"></br>
                    <label for="" class="message">Email</label></br>
                    <input type="email" name="" id="email"></br>
                    <label for="" class="message">Message</label></br>
                    <input type="text" class="subject"  id="body"></br>
                    <button type="submit">Submit</button>
                    </form>
            </div>
            <div class="last">
                <img src="nadine.jpg" alt="" class="me">
                <div class="text5">
                    Tel:+250787599080 
                    Email:nadinefiona9@gmail.com
                </div>
                <div class="page">
                    <div class="icon"><i class="fab fa-twitter"></i></div>
                    <div class="icon"><i class="fab fa-instagram"></i></div>
                    <div class="icon"><i class="fab fa-linkedin"></i></div>
                </div>
            </div>
        </div>
        <div class="copyright">
            @copyright Nadine Fiona
        </div>
    </div>
</body>
</html> 