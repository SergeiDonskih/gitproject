let btn =document.getElementById('btn');
let input = document.querySelector('input');

btn.addEventListener( 'click', function() {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', `/example_handler.php`);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(`data=${input.value}`);

    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            let data = JSON.parse(xhr.responseText);
            data.forEach(function(el){
                let div = document.createElement('div');
                div.innerHTML = `${el.name} - ${el.age}`;
                document.body.appendChild(div);
            });
        }
    }

})