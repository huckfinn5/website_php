
master_id = "5035";


var total_stars = 0;
var bar_list = ["bar1","bar2","bar3","bar4","bar5","bar6"]
var progress_list = ["progress1","progress2","progress3","progress4","progress5","progress6"]

function opacity_setter(){
  var list1 = ["5000","5007","5010","5016","5022","5028"]
  var list2 = ["viz1","viz2","fireworks","corral","fill1","fill2"]
  for(var x = 0; x < list1.length;x++){
      if(list1[x] > master_id){
          document.getElementById(list2[x]).style.opacity = .25
          document.getElementById(list1[x]).style.opacity = .25
      }
  }
}


function viz_one(){
  if(master_id>=5000){
  document.location.href = "Viz_Fractions_One/index.php"
}
}

function viz_two(){
  if(master_id>=5007){
  document.location.href = "Viz_Fractions_Two/index.php"
}
}

function fireworks(){
  if(master_id>=5010){
  document.location.href = "Fireworks/index.php"
}
}

function corral(){
  if(master_id>=5016){
  document.location.href = "Corral/index.php"
}
}

function fill_one(){
  if(master_id>=5022){
  document.location.href = "Fill_Blanks_One/index.php"
}
}

function fill_two(){
  if(master_id>=5028){
  document.location.href = "Fill_Blanks_Two/index.php"
}
}

function instructions(){
  document.location.href = "instructions.php"
}

function return_index(){
  document.location.href = "index.php"
}

function frac(){
  document.getElementById("fractions1").style.color = "white"
  document.getElementById("fractions2").style.color = "transparent"
};

function fraction_runner(){
  setTimeout(frac,2000)
}

function adjuster(){
  var width = window.innerWidth
  var adjust = (9*width)/100
  document.getElementById("fractions2").style.marginLeft = +adjust
}


function on_one(){
  if("5000" < master_id){
  document.getElementById("viz1").style.color = "black" 
  document.getElementById("5000").style.backgroundColor = "black"
  }
}

function off_one(){
  document.getElementById("viz1").style.color = "white" 
  document.getElementById("5000").style.backgroundColor = "white"

}

function on_two(){
  if("5007" < master_id){
  document.getElementById("viz2").style.color = "black"
  document.getElementById("5007").style.backgroundColor = "black"
 
}
}

function off_two(){
  document.getElementById("viz2").style.color = "white" 
  document.getElementById("5007").style.backgroundColor = "white"

}

function on_three(){
  if("5010" < master_id){
  document.getElementById("fireworks").style.color = "black" 
  document.getElementById("5010").style.backgroundColor = "black"

}
}

function off_three(){
  document.getElementById("fireworks").style.color = "white" 
  document.getElementById("5010").style.backgroundColor = "white"

}

function on_four(){
  if("5016" < master_id){
  document.getElementById("corral").style.color = "black" 
  document.getElementById("5016").style.backgroundColor = "black"

}
}

function off_four(){
  document.getElementById("corral").style.color = "white" 
  document.getElementById("5016").style.backgroundColor = "white"

}

function on_five(){
  if("5022" < master_id){
  document.getElementById("fill1").style.color = "black"
  document.getElementById("5022").style.backgroundColor = "black"
 
}
}

function off_five(){
  document.getElementById("fill1").style.color = "white" 
  document.getElementById("5022").style.backgroundColor = "white"

}

function on_six(){
  if("5028" < master_id){
  document.getElementById("fill2").style.color = "black" 
  document.getElementById("5028").style.backgroundColor = "black"

}
}

function off_six(){
  document.getElementById("fill2").style.color = "white" 
  document.getElementById("5028").style.backgroundColor = "white"

}

function starter(){
  setTimeout(width_setter,0)
  setTimeout(star_finder,2500)
}

function width_setter(){
  if( master_id >= "5007"){
    var variable = document.getElementById(bar_list[0])
    variable.style.width = "100%"

  }
  else{
    var newer = master_id - "5001"
    var percent = (newer/6)*100
    percent += "%"
    var variable = document.getElementById(bar_list[0])
    variable.style.width = percent
  }
  if( master_id >= "5010"){
    var variable = document.getElementById(bar_list[1])
    variable.style.width = "100%"
  }
  else if (master_id >= "5007"){
    var newer = master_id - "5007"
    var percent = (newer/3)*100
    percent += "%"
    var variable = document.getElementById(bar_list[1])
    variable.style.width = percent
  }
  if( master_id >= "5016"){
    var variable = document.getElementById(bar_list[2])
    variable.style.width = "100%"
  }
  else if (master_id >= "5010"){
    var newer = master_id - "5010"
    var percent = (newer/6)*100
    percent += "%"
    var variable = document.getElementById(bar_list[2])
    variable.style.width = percent
  }
  if( master_id >= "5022"){
    var variable = document.getElementById(bar_list[3])
    variable.style.width = "100%"
  }
  else if (master_id >= "5016"){
    var newer = master_id - "5016"
    var percent = (newer/6)*100
    percent += "%"
    var variable = document.getElementById(bar_list[3])
    variable.style.width = percent
  }
  if( master_id >= "5028"){
    var variable = document.getElementById(bar_list[4])
    variable.style.width = "100%"
  }
  else if (master_id >= "5022"){
    var newer = master_id - "5022"
    var percent = (newer/6)*100
    percent += "%"
    var variable = document.getElementById(bar_list[4])
    variable.style.width = percent
  }
  if( master_id >= "5034"){
    var variable = document.getElementById(bar_list[5])
    variable.style.width = "100%"
  }
  else if (master_id >= "5028"){
    var newer = master_id - "5028"
    var percent = (newer/6)*100
    percent += "%"
    var variable = document.getElementById(bar_list[5])
    variable.style.width = percent
  }
}

function loader(){
  setTimeout(width_setter,0)
  setTimeout(star_finder,100)
}

function star_finder(){
for(var x = 0; x < bar_list.length; x++){
  var variable = document.getElementById(bar_list[x])
  var stars = document.getElementById("stars")
  var show_star = document.getElementById("show_star")
  var width = variable.style.width
  var variable1 = document.getElementById(progress_list[x])
  if(x == 1){
    if(width.slice(0,1) == "0"){
      variable1.innerHTML = ''
      total_stars +=0
      stars.innerHTML = total_stars +"/33"
      show_star.innerHTML = "&#9733"
    }
    else if(width =="100%"){
      variable1.innerHTML = '     &#9733 &#9733 &#9733'
      total_stars +=3
      stars.innerHTML = total_stars +"/33"
      show_star.innerHTML = "&#9733"
    }
    else if(width.slice(0,2) < "50"){
      variable1.innerHTML = '     &#9733'
      total_stars +=1
      stars.innerHTML = total_stars +"/33"
      show_star.innerHTML = "&#9733"
    }
    else if(width.slice(0,2) < "80"){
      variable1.innerHTML = '     &#9733 &#9733'
      total_stars +=2
      stars.innerHTML =  total_stars +"/33"
      show_star.innerHTML = "&#9733"

  }
}
  else{
  if(width.slice(0,1) == "0"){
    variable1.innerHTML = ''
    total_stars +=0
    stars.innerHTML = total_stars +"/33"
    show_star.innerHTML = "&#9733"
  }
  else if(width =="100%"){
    variable1.innerHTML = '     &#9733 &#9733 &#9733 &#9733 &#9733 &#9733'
    total_stars +=6
    stars.innerHTML = total_stars +"/33"
    show_star.innerHTML = "&#9733"
  }
  else if(width.slice(0,2) < "20"){
    variable1.innerHTML = '     &#9733'
    total_stars +=1
    stars.innerHTML = total_stars +"/33"
    show_star.innerHTML = "&#9733"
  }
  else if(width.slice(0,2) < "40"){
    variable1.innerHTML = '     &#9733 &#9733'
    total_stars +=2
    stars.innerHTML =  total_stars +"/33"
    show_star.innerHTML = "&#9733"
  }
  else if(width.slice(0,2) < "60"){
    variable1.innerHTML = '     &#9733 &#9733 &#9733'
    total_stars +=3
    stars.innerHTML =  total_stars +"/33"
    show_star.innerHTML = "&#9733"
  }
  else if(width.slice(0,2) < "80"){
    variable1.innerHTML = '     &#9733 &#9733 &#9733 &#9733'
    total_stars +=4
    stars.innerHTML = total_stars +"/33"
    show_star.innerHTML = "&#9733"
  }
  else if(width.slice(0,2) < "90"){
    variable1.innerHTML = '     &#9733 &#9733 &#9733 &#9733 &#9733'
    total_stars +=5
    stars.innerHTML = total_stars +"/33"
    show_star.innerHTML = "&#9733"
  }
  else {
    variable1.innerHTML = '     &#9733 &#9733 &#9733 &#9733 &#9733 &#9733'
    total_stars +=6
    stars.innerHTML = total_stars +"/33"
    show_star.innerHTML = "&#9733"
    }
  }
}
}
