themeNum = 0;
themes = ["#F9FFFF","#FFFFF9","#FFF9FF","#F9FFF9","#FFF9F9","#F9F9FF"];
themes2 = ["#a61015","#050086","#1D5B01","#561056","#105656","#565610"];
themes3 = ["#D64045","#3530c6","#4D8B31","#860086","#008686","#868600"];
function theme()
{
    themeNum+=1;
    localStorage.setItem("index", themeNum);
    document.querySelector(':root').style.setProperty('--pri',themes[themeNum]);
    document.querySelector(':root').style.setProperty('--sec',themes2[themeNum]);
    document.querySelector(':root').style.setProperty('--sec2',themes3[themeNum]);
    if(themeNum==5)
    {themeNum=-1;}
}
if(localStorage.getItem("index")<6 && localStorage.getItem("index")>0)
{
    themeNum=parseInt(localStorage.getItem("index"))-1;
    theme();
}


var menu = document.querySelector('.menu');
var menuBtn = document.querySelector('.menu button');
var elements = document.getElementsByClassName('quiz');
var opened = false;
menuBtn.addEventListener('click', () => {
    menu.classList.toggle('opened');
    if(opened){
        for (var i in elements){
            elements[i].style.transitionDuration = '1s';
            elements[i].style.zIndex = 0;
            opened = false;
        }
    }
    else{
        for (var i in elements){
            elements[i].style.transitionDuration = '0s';
            elements[i].style.zIndex = -1;
            opened = true;
        }
    }
});


var questionNumber=2;
function addQuestion(){
    if(questionNumber<=10){
        document.getElementById("questionsContainer").innerHTML+=`<p class="questioned">Enter question number ${questionNumber}</p>
        <input type="text" name="q${questionNumber}" placeholder="Question ${questionNumber}" class="txt">`;
        questionNumber++;
    }else{
        alert("Max number of questions reached");
    }
}