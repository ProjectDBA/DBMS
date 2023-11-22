function gettext(event) {
    var selected = event.target.innerText;
    console.log(selected);

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log('�����κ����� ����:', xhr.responseText);
        }
    };

    // PHP ������ ��θ� ������ ����
    xhr.open('GET', 'create_tables.php?selected=' + encodeURIComponent(selected), true);
    xhr.send();
};