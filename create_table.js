var list = document.getElementById("list");

list.addEventListener('click', function handleClick(event) {
    var selected = event.target.innerHTML;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log('서버로부터의 응답:', xhr.responseText);
        }
    };

    // PHP 파일의 경로를 적절히 수정
    xhr.open('GET', 'create_tables.php?selected=' + encodeURIComponent(selected), true);
    xhr.send();
});