
$(document).ready(function(){
    $('#eye').click(function(){
        $(this).toggleClass('show');
        $(this).children('i').toggleClass('fa-eye-slash fa-eye');
        if($(this).hasClass('show')){
            let pass = document.getElementById('pass');
            pass.type = 'text'; 
        }else{
            let pass = document.getElementById('pass');
            pass.type = 'password'; 
        }
    });
    $('#home').click(function(){
        let ele = document.getElementById('home');
        /* thêm class*/
        ele.classList.add('nav_menu--list__active');
        let element = document.getElementById('quanly');
        /* xoá class  title*/
        element.classList.remove('nav_menu--list__active');
    });

    $('#quanly').click(function(){
        let ele = document.getElementById('quanly');
        /* thêm class*/
        ele.classList.add('nav_menu--list__active');
        let element = document.getElementById('home');
        /* xoá class  title*/
        element.classList.remove('nav_menu--list__active');
    });

    $('#thoat').click(function(){
        let element = document.getElementById('home');
        /* xoá class  title*/
        element.classList.remove('nav_menu--list__active');
        let element1 = document.getElementById('quanly');
        /* xoá class  title*/
        element1.classList.remove('nav_menu--list__active');
    });
});

