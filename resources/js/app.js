import './bootstrap';
let buttonlike = document.querySelectorAll('.likeButton');
buttonlike.forEach((elem) => {
    elem.addEventListener('click', () => {
        let id = elem.getAttribute('data-id');
        axios.post(`/posts/${id}/add/like`)
            .then(response => {
                document.getElementById('likeCount').textContent = response.data.likes;
            }).catch(error => {
                console.error('Error', response.data.message);
            });

    })
});
