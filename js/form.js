(function(){
    const form = document.getElementById('order-form');

    form.addEventListener('submit', (e)=>{
        e.preventDefault();        
        const formData = new FormData(form);

        const request = new XMLHttpRequest();
        request.open("POST", "./server/main.php");
        request.send(formData);
    });

})();