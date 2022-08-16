var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];
var submit = document.getElementsByClassName("submit")[0];

document.querySelectorAll(".editable").forEach(field => {
    field.addEventListener('click', () => {
        modal.querySelector('#id').append(field.dataset.id)
        modal.querySelector('#comment').value = field.innerText

        for (let td of field.parentNode.children) {
            let data = modal.querySelector('#' + td.dataset.title)
            if (data) {
                data.append(td.innerText)
            }
        }

        modal.style.display = "block";
    });
});
span.addEventListener('click', () => {
    closeModal(modal);
})

window.onclick = function(event) {
    if (event.target == modal) {
        closeModal(modal);
    }
}

submit.addEventListener('click', () => {
    console.log('clicked')
    let id = modal.querySelector('#id').innerHTML.replace(/(<b>.*<\/b>)(.*)/, `$2`)
    let comment = modal.querySelector('#comment').value
    let method = document.querySelector('[name="_method"]').value
    let token = document.querySelector('[name="_token"]').value

    let data = new FormData();
    data.append('id', id);
    data.append('comment', comment);
    data.append('_method', method);
    data.append('_token', token);

    let request = new XMLHttpRequest();
    request.open("POST", "/admin/store", true);
    request.send(data);
    request.onload = function() {
        closeModal(modal);
        document.querySelector('[data-id="' + id + '"]').innerText = request.responseText;
    }
})

function closeModal(modal) {
    modal.style.display = "none";

    modal.querySelectorAll('.modal-content .input').forEach(div => {
        div.innerHTML = div.innerHTML.replace(/(<b>.*<\/b>)(.*)/, `$1`)
    })
}