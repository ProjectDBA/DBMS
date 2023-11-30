// JavaScript �ڵ�
const menu1 = document.getElementById('sub-menu1');
const menu2 = document.getElementById('sub-menu2');
const menu3 = document.getElementById('sub-menu3');

const list = document.getElementById('list');
const mainpage = document.getElementById('mainpage');
const page1 = document.getElementById('page1');
const page2 = document.getElementById('page2');
const page3 = document.getElementById('page3');
const button = document.getElementById('submitButton');
const inputbox = document.getElementById('emailAddress');

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

    xhr.open('POST', 'create_tables.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('selected=' + encodeURIComponent(selected));
});

menu1.addEventListener('click', click1());

menu2.addEventListener('click', function() {
    mainpage.style.display = 'none';
    list.style.display = 'none';
    page1.style.display = 'none';
    page2.style.display = 'flex';
    page3.style.display = 'none';
});

menu3.addEventListener('click', function() {
    mainpage.style.display = 'none';
    list.style.display = 'none';
    page1.style.display = 'none';
    page2.style.display = 'none';
    page3.style.display = 'flex';
});
