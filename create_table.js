var list = document.getElementById("list");

list.addEventListener('click', function handleClick(event) {
    var selected = event.target.innerHTML;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log('�����κ����� ����:', xhr.responseText);
        }
    };

    // PHP ������ ��θ� ������ ����
    xhr.open('GET', 'create_tables.php?selected=' + encodeURIComponent(selected), true);
    xhr.send();
});