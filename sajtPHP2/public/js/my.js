let url =window.location.pathname

if(url.indexOf("/contact")!=-1){
    let buttonSend=document.getElementById('button');
    buttonSend.addEventListener('click',function (){
        submit()
    })

    function Validate(){
        document.getElementById("errors").html='';
        document.getElementById("success").html='';


        var name=document.getElementById('Name').value;
        var mail=document.getElementById('Email').value;
        var contact=document.getElementById('Mobile').value;
        var message=document.getElementById('Message').value;

        var nameReg=/^[a-zA-ZćčžšđĆČŽŠĐ]+(\s[a-zA-ZćčžšđĆČŽŠĐ]+)?$/;
        var mailReg=/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        var contactReg=/^06[0-9]{8}$/;

        var errorI=document.getElementById('errors');
        var errors='';

        if(!nameReg.test(name)){
            errors+='The name should be in the format for example Sara Nojkovic</br>';

        }
        if(!mailReg.test(mail)){
            errors+='Mail should be in the format, for example, nojkovicsara@gmail.com</br>';

        }

        if(!contactReg.test(contact)){
            errors+='Contact phone in the format 0655491086</br>';

        }

        if(message.length>100 || message.length<10){
            errors+='The message can have a maximum of 100 characters and a minimum of 10</br>';
        }

        if(errors.length){
            errorI.innerHTML=errors;
            return false;
        }
        else{
            errorI.innerHTML='';
            document.getElementById('success').innerHTML='You have successfully sent message';
        }
        return true;
    }
    function submit(){
        if(!Validate()){
            return false;
        }

        var name=document.getElementById('Name').value;
        var mail=document.getElementById('Email').value;
        var contact=document.getElementById('Mobile').value;
        var message=document.getElementById('Message').value;

        var csrf=document.head.querySelector('meta[name="csrf-token"]').content;

        var formData=new FormData();
        formData.append('_token',csrf);
        formData.append('name',name);
        formData.append('mail',mail);
        formData.append('contact',contact);
        formData.append('message',message);

        document.getElementById("contact").reset();

        fetch('/contact',{
            method:'POST',
            headers:{

                'X-CSRF-TOKEN':csrf
            },
            body:formData
        })
            .then(response=>response.json())
            .catch(error=>{

        });
        return false;
    }
}
if(url.indexOf("/home")!=-1 ) {
    let buttonNews = document.getElementById('buttonNews');
    buttonNews.addEventListener('click', function () {
        submit();
    });

    function validate() {
        document.getElementById("errors").innerHTML = '';
        document.getElementById("success").innerHTML = '';

        var email = document.getElementById('email').value;
        var emailReg = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        var errorI = document.getElementById('errors');
        var successI = document.getElementById('success');

        var errors = '';

        if (!emailReg.test(email)) {
            errors += 'Mail should be in the format, for example, nojkovicsara@gmail.com</br>';
        }

        if (errors.length) {
            errorI.innerHTML = errors;
        } else {
            errorI.innerHTML = '';
            successI.innerHTML = 'Checking if the email is already subscribed...';

            submit();
        }
    }

    function submit() {
        var email = document.getElementById('email').value;
        var csrf = document.head.querySelector('meta[name="csrf-token"]').content;

        var formData = new FormData();
        formData.append('_token', csrf);
        formData.append('email', email);

        document.getElementById("news").reset();

        fetch('/home', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrf
            },
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                var successI = document.getElementById('success');
                var errorI = document.getElementById('errors');

                successI.innerHTML = '';
                errorI.innerHTML = '';

                if (data.error) {
                    errorI.innerHTML = data.error;
                } else if (data.success) {
                    successI.innerHTML = data.success;
                } else {
                    console.error('Undefined response:', data);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
}
if(url.indexOf("/gallery")!=-1 || url.indexOf("/filter")!=-1){
    let filter=document.getElementById('dd');
    filter.addEventListener('change',function(){
         document.getElementById('filter').submit();
        }

    )
}
if(url.indexOf("/reservation")!=-1){
    document.addEventListener('DOMContentLoaded', function () {

        var filterSortDropdown = document.getElementById('sort');
        var searchInput = document.getElementById('searchReservation');
        var categoryCheckboxes = document.querySelectorAll('.form-check-input');

        searchInput.addEventListener('keyup', function () {
            var searchValue = searchInput.value;
            var selectedValue = filterSortDropdown.value;
            var selectedCategories = getSelectedCategories();

             sendAjaxRequest(selectedValue, searchValue, selectedCategories);
        });

        filterSortDropdown.addEventListener('change', function () {
            var searchValue = searchInput.value;
            var selectedValue = filterSortDropdown.value;
            var selectedCategories = getSelectedCategories();

             sendAjaxRequest(selectedValue, searchValue, selectedCategories);
        });

        categoryCheckboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                var searchValue = searchInput.value;
                var selectedValue = filterSortDropdown.value;
                var selectedCategories = getSelectedCategories();

                //console.log(selectedCategories)

                 sendAjaxRequest(selectedValue, searchValue, selectedCategories);
            });
        });

        function getSelectedCategories() {
            var selectedCategories = [];
            categoryCheckboxes.forEach(function (checkbox) {
                if (checkbox.checked) {
                    selectedCategories.push(checkbox.value);
                }
            });
            return selectedCategories;
        }


        function sendAjaxRequest(selectedValue, searchValue, selectedCategories) {

            var queryString = new URLSearchParams({
                filterSort: selectedValue,
                search: searchValue,
                categories: Array(selectedCategories),
                _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }).toString();

            fetch('/reservationFilter?' + queryString, {
                method: 'GET',

            })
                .then(response => response.json())
                .then(data => {

                    displayProducts(data.all);
                })

        }

        function displayProducts(products) {

            const prodContainer = document.getElementById('prod');
            if (products.length === 0) {
                prodContainer.innerHTML = '<div ><p class="alert alert-danger">No products found.</p></div>';
                return;
            }


            const productCards = products.map(product => {

                const reservationCard = `
            <div class="reservationCard flex">
                <div class="resImage">
                    <img src="/images/${product.image}">
                </div>
                <div class="content">
                    <h2 class="naslovMy">Category:</h2>
                    <p>${product.category.category}</p>
                    <h2 class="naslovMy">Age:</h2>
                    <p>${product.year} year ${product.month} month</p>
                    <div class="flex chairs">
                        <h2 class="naslovMy">Name:</h2>
                        <p>${product.name}</p>
                    </div>
                    <h2 class="naslovMy" id="nnn">Choose a date and time:</h2>
                    <input type="datetime-local" class="meeting-time" name="meeting-time" id="dateRes" data-id="${product.id}" data-idCat="${product.id_category}">
                    <input type="button" class="buttonCustom" id="reservation" data-gallery="${product.id}"  data-picture="${product.image}" data-idcat="${product.id_category}" value="RESERVE">
                    <h2 class="naslovMy">Description:</h2>
                    <p>${product.description}</p>
                </div>
            </div>`;

                return reservationCard;
            });

            prodContainer.innerHTML = productCards.join('');
        }

        //$(document).ready(function() {
            $(document).on('click','#reservation',function(){

                event.preventDefault();

                const parentCard = $(this).closest('.reservationCard');
                const dateTimeValue = parentCard.find('.meeting-time').val();

                const idCat=$(this).data('idcat');
                const picture=$(this).data('picture');
                const idGall=$(this).data('gallery');

                $.ajax({
                    url: "/reservationSession",
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        'idGall':idGall,
                        'idCat':idCat,
                        'time':dateTimeValue,
                        'picture':picture
                    },
                    success: function(data) {

                        console.log('Uspešno upisano u sesiju!');
                        modal.style.display = "block";
                        $("#unos").html(data.message)

                    },
                    error: function(error) {
                        console.error('Greška prilikom slanja Ajax zahteva:', error);
                    }
                });
            })

       // });



    });
}
if(url.indexOf("/checkout")!=-1){
    //let button=document.getElementById('remove');
    $(document).ready(function() {

        $('.remove').click(function() {
            var reservationId = $(this).data('id');
            $.ajax({
                url: "/delete/" + reservationId,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    console.log('Reservation removed successfully');
                    console.log(data);
                   location.reload()
                },
                error: function(error) {
                    console.error('Error removing reservation:', error);
                }
            });
        });
    });

    $(document).ready(function() {
        $('#resBtn').on('click', function() {
            $.ajax({
                url: '/reservationStore',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function(response) {
                    console.log('Uspešno upisano u sesiju!', response);
                    ispisPoruke();

                },
                error: function(error) {
                    console.error('Greška prilikom slanja AJAX zahteva:', error);

                }
            });
        });
        function ispisPoruke(){


            let div=document.getElementById('prod');
            div.innerHTML='<p class="alert alert-success message">Successfull.</p>';
        }

    });




}
