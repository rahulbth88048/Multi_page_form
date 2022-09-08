<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Multi_Step_Form</title>
    <style>
        .float-right {
            float: right;
            margin-left: 5px;
        }

        section {
            padding-top: 100px;
        }

        .form-section {
            padding-left: 15px;
            display: none;
        }

        .form-section.current {
            display: inherit;
        }

        .btn-primary,
        .btn-success {
            margin-top: 10px;
        }

        .parsley-errors-list {
            margin: 2px 0px 3px;
            padding: 0;
            list-style-type: none;
            color: red;
        }
    </style>
</head>

<body>

    <section class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header text-white bg-primary">
                        <h5>
                            Multi-Step-Form
                        </h5>
                    </div>
                    <div class="card-body">
                        <form class="contact-form" method="POST" action="{{route('form.formsubmit')}}">
                            @csrf
                            <div class="form-section">
                                <div class="row g-3">
                                    <div class="col">
                                        <label for="first_name">First Name:</label>
                                        <input type="text" name="firstname" id="first_name" class="form-control" placeholder="First Name" required />
                                    </div>
                                    <div class="col">
                                        <label for="last_name">Last Name:</label>
                                        <input type="text" name="lastname" id="last_name" class="form-control" placeholder="Last Name" required />
                                    </div>
                                </div>

                                <label for="email">Email:</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email" required />

                                <label for="phone">Phone:</label>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" required>
                            </div>
                            <div class="form-section">
                                <div class="col-12">
                                    <label for="Address" class="form-label">Address 1:</label>
                                    <input type="text" class="form-control" id="Address" placeholder="Address 1">
                                </div>
                                <div class="col-12">
                                    <label for="Address2" class="form-label">Address 2:</label>
                                    <input type="text" class="form-control" id="Address2" placeholder="Address 2">
                                </div>
                                <div class="row g-3">
                                    <div class="col-5">
                                        <label for="City" class="form-label">City:</label>
                                        <input type="text" class="form-control" id="City" placeholder="City">
                                    </div>
                                    <div class="col-4">
                                        <label for="inputState" class="form-label">State:</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>Punjab</option>
                                            <option>Bihar</option>
                                            <option>Delhi</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label for="Zip" class="form-label">Zip Code:</label>
                                        <input type="text" class="form-control" id="Zip" placeholder="Zip Code">
                                    </div>
                                </div>
                            </div>
                            <div class="form-section mt-2">
                                <div class="col-12">
                                    <label for="cardnumber" class="form-label">Card Number:</label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" placeholder="Valid Card Number" aria-label="Card_Number" aria-describedby="basic-addon1">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-4">
                                        <label for="expiredate">Expire Month</label>

                                            <input type="text" class="form-control col-6" name="month" id="month" placeholder="MM">
                                            
                                    </div>
                                    <div class="col-4">
                                        <label for="expiredate">Expire Year</label>

                                        <input type="text" class="form-control col-6" name="year" id="year" placeholder="YYYY">
                                            
                                    </div>
                                    <div class="col-4">
                                        <label for="cvv">CVV</label>
                                        <input type="text" class="form-control" name="cvv" id="cvv" placeholder="CVV">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="holdername" class="form-label">Holder Name:</label>
                                    <input type="text" name="holdername"  class="form-control" id="holdername" placeholder="Account Holder Name">
                                </div>
                            </div>
                            <div class="form-navigation">
                                <button type="button" class="previous btn btn-primary float-left">Previous</button>
                                <button type="button" class="next btn btn-primary float-right">Next</button>
                                <button type="submit" class="btn btn-success float-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.1/parsley.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(function () {
            var $section = $('.form-section');
            function navigateTo(index) {
                $section.removeClass('current').eq(index).addClass('current');
                $('.form-navigation .previous').toggle(index > 0);
                var atTheEnd = index >= $section.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [type=submit]').toggle(atTheEnd);
            }
            function curIndex() {
                return $section.index($section.filter('.current'));
            }
            $('.form-navigation .previous').click(function () {
                navigateTo(curIndex() - 1);
            });
            $('.form-navigation .next').click(function () {
                $('.contact-form').parsley().whenValidate({
                    group: 'block-' + curIndex()
                }).done(function () {
                    navigateTo(curIndex() + 1);
                });
            });
            $section.each(function (index, sections) {
                $(sections).find(':input').attr('data-parsley-group', 'block-' + index);
            });
            navigateTo(0);
        });
    </script>

</body>

</html>