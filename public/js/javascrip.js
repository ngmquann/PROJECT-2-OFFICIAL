var menu_c=document.querySelectorAll("menu_b > li");
//lap qua ttat ca menu cha, gan su kien click cho menu cha
for(var i=0;i<menu_c.length; i++)
{
     menu_c[i].addEventListener('click',function(){
        //lay tat ca menu con
        var menu=document.querySelectorAll("menu_b >li > ul");
        //lay tat ca menu con, ẩn menu con
        for(var j=0;j<menu.length; j++)
        {
            menu[j].style.display="none";
        }
        //children[0]: la menu cha
        //children[1]:la menu con
        this.children[1].style.display="block";
     })
}