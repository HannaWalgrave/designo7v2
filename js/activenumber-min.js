$(document).ready(function(){function e(){$home=$("#home").offset().top,$team=$("#team").offset().top,$cases=$("#cases").offset().top,$contact=$("#contact").offset().top,$distancewindow=$(window).scrollTop(),$activenumber=$(".active-number"),$distancewindow<$team?($activenumber.text("01"),$("header nav a").removeClass("active"),$("header nav a:nth-child(1)").addClass("active"),$("header").addClass("white-nav")):$distancewindow>=$team&&$distancewindow<$cases?($activenumber.text("02"),$("header nav a").removeClass("active"),$("header nav a:nth-child(2)").addClass("active"),$("header").removeClass("white-nav")):$distancewindow>=$cases&&$distancewindow<$contact?($activenumber.text("03"),$("header nav a").removeClass("active"),$("header nav a:nth-child(3)").addClass("active"),$("header").removeClass("white-nav")):($activenumber.text("04"),$("header nav a").removeClass("active"),$("header nav a:nth-child(4)").addClass("active"),$("header").removeClass("white-nav"))}e(),$(window).scroll(function(){e()})});