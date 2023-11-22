<script>
    function gettext(event) {
        var selected = event.innerText;

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log('Process:', xhr.responseText);
            }
        };

        xhr.open('POST', 'create_tables.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('selected=' + encodeURIComponent(selected));
    };
</script>
