// JavaScript �ڵ�
const menu1 = document.getElementById('sub-menu1');
const menu2 = document.getElementById('sub-menu2');
const menu3 = document.getElementById('sub-menu3');

const page1 = document.getElementById('page1');
const page2 = document.getElementById('page2');
const page3 = document.getElementById('page3');

menu1.addEventListener('click', function() {
    // ������ ��ȯ
    page1.style.display = 'flex';
    page2.style.display = 'none';
    page3.style.display = 'none';
});

menu2.addEventListener('click', function() {
    // ������ ��ȯ
    page1.style.display = 'none';
    page2.style.display = 'flex';
    page3.style.display = 'none';
});

menu3.addEventListener('click', function() {
    // ������ ��ȯ
    page1.style.display = 'none';
    page2.style.display = 'none';
    page3.style.display = 'flex';
});