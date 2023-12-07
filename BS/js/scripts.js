// JavaScript �ڵ�
const menu1 = document.getElementById('sub-menu1');
const menu2 = document.getElementById('sub-menu2');
const menu3 = document.getElementById('sub-menu3');

const list = document.getElementById('phonelist');
const mainpage = document.getElementById('mainpage');
const page1 = document.getElementById('page1');
const page2 = document.getElementById('page2');
const page3 = document.getElementById('page3');
const button = document.getElementById('button');
const inputbox = document.getElementById('inputbox');
const combutton = document.getElementById('combutton');
const comselect = document.getElementsByClassName('pdropbox');

function click1() {
    mainpage.style.display = 'none';
    list.style.display = 'flex';
    page1.style.display = 'flex';
    page2.style.display = 'none';
    page3.style.display = 'none';
}

button.addEventListener('click', function(){
    click1();
    var selected = inputbox.value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            page1.innerHTML= xhr.responseText;
            console.log('Process:', xhr.responseText);
        }
    };

    xhr.open('POST', './php/create_Perform_table.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('selected=' + encodeURIComponent(selected));
});

function form(a){
    click2();

    if(a == 1){
        var form = document.getElementById('form1');
        var selected = form.elements["p1name"].value;

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                page1.innerHTML= xhr.responseText;
                console.log('Process:', xhr.responseText);
            }
        };
    
        xhr.open('POST', './php/create_Compare_table_left.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('selected=' + encodeURIComponent(selected));
    }else if(a == 2){
        var form = document.getElementById('form2');
        var selected = form.elements["p2name"].value;

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                page1.innerHTML= xhr.responseText;
                console.log('Process:', xhr.responseText);
            }
        };
    
        xhr.open('POST', './php/create_Compare_table_right.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('selected=' + encodeURIComponent(selected));
    }
}

combutton.addEventListener('click', function(){
    click2();
    var selected = comselect.value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            page1.innerHTML= xhr.responseText;
            console.log('Process:', xhr.responseText);
        }
    };

    xhr.open('POST', './php/create_Perform_table.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('selected=' + encodeURIComponent(selected));
})

function click2() {
    mainpage.style.display = 'none';
    list.style.display = 'none';
    page1.style.display = 'none';
    page2.style.display = 'flex';
    page3.style.display = 'none';
}

function click3() {
    mainpage.style.display = 'none';
    list.style.display = 'none';
    page1.style.display = 'none';
    page2.style.display = 'none';
    page3.style.display = 'flex';
}

function gettext(event) {
    var selected = event.innerText;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            page1.innerHTML= xhr.responseText;
            console.log('Process:', xhr.responseText);
        }
    };

    xhr.open('POST', './php/create_Perform_table.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('selected=' + encodeURIComponent(selected));
};

