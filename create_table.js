function gettext(event) {
    var selected = event.innerText;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log('Process:', xhr.responseText);
        }
    };

    // PHP ������ ��θ�? ������ ����
    xhr.open('POST', 'main.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('selected=' + encodeURIComponent(selected));;
};