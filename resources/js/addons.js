(function (window, document) {

    // let request = new XMLHttpRequest();
    //
    // request.open('GET', REQUEST_ROOT_PATH + '/check', true);
    // request.setRequestHeader('Content-Type', 'application/json');
    //
    // let response = request.send(JSON.stringify({
    //     _token: CSRF_TOKEN,
    // }));

    const downloads = Array.from(
        document.querySelectorAll('[data-toggle="download"]')
    );

    downloads.forEach(function (toggle) {

        toggle.addEventListener('click', function (event) {

            event.preventDefault();

            NProgress.start();

            swal({
                buttons: false,
                closeOnEsc: false,
                closeOnClickOutside: false,
                text: toggle.dataset.message,
            });

            let request = new XMLHttpRequest();

            request.open('GET', event.target.href, true);
            request.setRequestHeader('Content-Type', 'application/json');

            request.send(JSON.stringify({
                _token: CSRF_TOKEN,
            }));

            request.addEventListener('readystatechange', function (event) {

                NProgress.inc();

                if (request.readyState == 4) {
                    NProgress.done();
                }

                if (request.readyState == 4 && request.status == 200) {

                    swal({
                        text: 'Done!',
                        icon: 'success',
                        closeOnEsc: false,
                        closeOnClickOutside: false,
                        buttons: {
                            confirm: {
                                text: 'Reload',
                                closeModal: false,
                            }
                        },
                    }).then((value) => {
                        window.location.reload();
                    });
                }

                if (request.readyState == 4 && request.status == 500) {

                    swal({
                        icon: 'error',
                        closeOnEsc: false,
                        closeOnClickOutside: false,
                        text: 'There was an error.\n\nPlease check your error logs!',
                        buttons: {
                            confirm: {
                                closeModal: false,
                            }
                        },
                    }).then((value) => {
                        window.location.reload();
                    });
                }
            }, false);
        });
    });


    const removals = Array.from(
        document.querySelectorAll('[data-toggle="remove"]')
    );

    removals.forEach(function (toggle) {

        toggle.addEventListener('click', function (event) {

            event.preventDefault();

            NProgress.start();

            swal({
                buttons: false,
                closeOnEsc: false,
                closeOnClickOutside: false,
                text: toggle.dataset.message,
            });

            let request = new XMLHttpRequest();

            request.open('GET', event.target.href, true);
            request.setRequestHeader('Content-Type', 'application/json');

            request.send(JSON.stringify({
                _token: CSRF_TOKEN,
            }));

            request.addEventListener('readystatechange', function (event) {

                NProgress.inc();

                if (request.readyState == 4) {
                    NProgress.done();
                }

                if (request.readyState == 4 && request.status == 200) {

                    swal({
                        text: 'Done!',
                        icon: 'success',
                        closeOnEsc: false,
                        closeOnClickOutside: false,
                        buttons: {
                            confirm: {
                                text: 'Reload',
                                closeModal: false,
                            }
                        },
                    }).then((value) => {
                        window.location.reload();
                    });
                }

                if (request.readyState == 4 && request.status == 500) {

                    swal({
                        icon: 'error',
                        closeOnEsc: false,
                        closeOnClickOutside: false,
                        text: 'There was an error.\n\nPlease check your error logs!',
                        buttons: {
                            confirm: {
                                closeModal: false,
                            }
                        },
                    }).then((value) => {
                        window.location.reload();
                    });
                }
            }, false);
        });
    });



    const updates = Array.from(
        document.querySelectorAll('[data-toggle="update"]')
    );

    updates.forEach(function (toggle) {

        toggle.addEventListener('click', function (event) {

            event.preventDefault();

            NProgress.start();

            swal({
                buttons: false,
                closeOnEsc: false,
                closeOnClickOutside: false,
                text: toggle.dataset.message,
            });

            let request = new XMLHttpRequest();

            request.open('GET', event.target.href, true);
            request.setRequestHeader('Content-Type', 'application/json');

            request.send(JSON.stringify({
                _token: CSRF_TOKEN,
            }));

            request.addEventListener('readystatechange', function (event) {

                NProgress.inc();

                if (request.readyState == 4) {
                    NProgress.done();
                }

                if (request.readyState == 4 && request.status == 200) {

                    swal({
                        text: 'Done!',
                        icon: 'success',
                        closeOnEsc: false,
                        closeOnClickOutside: false,
                        buttons: {
                            confirm: {
                                text: 'Reload',
                                closeModal: false,
                            }
                        },
                    }).then((value) => {
                        window.location.reload();
                    });
                }

                if (request.readyState == 4 && request.status == 500) {

                    swal({
                        icon: 'error',
                        closeOnEsc: false,
                        closeOnClickOutside: false,
                        text: 'There was an error.\n\nPlease check your error logs!',
                        buttons: {
                            confirm: {
                                closeModal: false,
                            }
                        },
                    }).then((value) => {
                        window.location.reload();
                    });
                }
            }, false);
        });
    });

})(window, document);
