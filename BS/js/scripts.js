/*!
* Start Bootstrap - Landing Page v6.0.6 (https://startbootstrap.com/theme/landing-page)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-landing-page/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project


    // JavaScript �ڵ�
    const menu1 = document.getElementById('sub-menu1');
    const menu2 = document.getElementById('sub-menu2');
    const menu3 = document.getElementById('sub-menu3');

    const list = document.getElementById('list');
    const mainpage = document.getElementById('mainpage');
    const page1 = document.getElementById('page1');
    const page2 = document.getElementById('page2');
    const page3 = document.getElementById('page3');

    menu1.addEventListener('click', function() {
        // ������ ��ȯ
        mainpage.style.display = 'none';
        list.style.display = 'flex';
        page1.style.display = 'flex';
        page2.style.display = 'none';
        page3.style.display = 'none';
    });

    menu2.addEventListener('click', function() {
        // ������ ��ȯ
        mainpage.style.display = 'none';
        list.style.display = 'none';
        page1.style.display = 'none';
        page2.style.display = 'flex';
        page3.style.display = 'none';
    });

    menu3.addEventListener('click', function() {
        // ������ ��ȯ
        mainpage.style.display = 'none';
        list.style.display = 'none';
        page1.style.display = 'none';
        page2.style.display = 'none';
        page3.style.display = 'flex';
    });
