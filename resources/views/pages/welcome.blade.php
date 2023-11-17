@extends('layouts.app')

@section('body')


<style>


.containeredit {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 80vh;
    margin: 0;
  }

  .profile-card {
    width: 400px;
    text-align: center;
    border-radius: 8px;
    overflow: hidden;
  }

.card-header{
  background: #000000;
  padding: 60px 40px;
}

.pic{
  display: inline-block;
  padding: 8px;
  background: linear-gradient(130deg, #74b9ff, #e66767);
  margin: auto;
  border-radius: 50%;
  background-size: 200% 200%;
  animation: animated-gradient 2s linear infinite;
}

@keyframes animated-gradient{
  25%{
    background-position: left bottom;
  }
  50%{
    background-position: right bottom;
  }
  75%{
    background-position: right top;
  }
  100%{
    background-position: left top;
  }
}

.pic img{
  display: block;
  width: 100px;
  height: 100px;
  border-radius: 50%;
}

.name{
  color: #f2f2f2;
  font-size: 28px;
  font-weight: 600;
  margin: 10px 0;
}

.desc{
  font-size: 18px;
  color: #e66767;
}

.sm{
  display: flex;
  justify-content: center;
  margin: 20px 0;
  text-decoration: none;
}

.sm a{
  color: #f2f2f2;
  width: 56px;
  font-size: 22px;
  transition: .3s linear;
  text-decoration: none;
}

.sm a:hover{
  color: #e66767;
}

.contact-btn{
  display: inline-block;
  padding: 12px 50px;
  color: #e66767;
  border: 2px solid #e66767;
  border-radius: 6px;
  margin-top: 16px;
  transition: .3s linear;
}

.contact-btn:hover{
  background: #e66767;
  color: #f2f2f2;
}

.card-footer{
  background: #f4f4f4;
  padding: 60px 10px;
}

.numbers{
  display: flex;
  align-items: center;
}

.item{
  flex: 1;
  text-transform: uppercase;
  font-size: 13px;
  color: #e66767;
}

.item span{
  display: block;
  color: rgb(0, 0, 0);
  font-size: 30px;
}

.border{
  width: 1px;
  height: 30px;
  background: #bbb;
}
</style>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
  </head>

<div class="containeredit">
    <div class="profile-card">
        <div class="card-header">
          <div class="pic">
            <img src="https://lh3.googleusercontent.com/pw/ADCreHcZYbpGxpuCQz8XviVjAsBMcUbOeDmZsm2fxyQ0L2KUR6wlg7dBNMQB4GoMI3QW504xbNN4Ge_Jqu10q-cRJjbJ83jjAm-LtYeXz8Q4a808XFCGeR8sR7JP1fP_ILG3RCNddJTCclscq1oQW6mXVa2d=w640-h640-s-no-gm?authuser=0" alt="">
          </div>
          <div class="name">Ardian Wahyu Saputra</div>
          <div class="desc">Web Developer</div>
          <div class="sm">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-github"></a>
            <a href="#" class="fab fa-youtube"></a>
          </div>
          <a href="#" class="contact-btn" style="text-decoration: none;">Contact Me</a>
        </div>
        <div class="card-footer">
          <div class="numbers">
            <div class="item">
              <span>120</span>
              Posts
            </div>
            <div class="border"></div>
            <div class="item">
              <span>127</span>
              Following
            </div>
            <div class="border"></div>
            <div class="item">
              <span>120K</span>
              Followers
            </div>
          </div>
        </div>
    </div>
</div>







@endsection
