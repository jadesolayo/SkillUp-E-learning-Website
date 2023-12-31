<!DOCTYPE html>
<html class="no-js" lang="en">

<?php include("includes/head-tag.php") ?>

<body>

    <main class="main-wrapper">

        <!-- Header start -->
        <?php include("includes/header.php") ?>
        <!-- Header End -->



        <!-- Page Banner Section Start -->
        <div class="page-banner bg-color-05">
            <div class="page-banner__wrapper">
                <div class="container">

                    <!-- Page Breadcrumb Start -->
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ul>
                    </div>
                    <!-- Page Breadcrumb End -->

                    <!-- Page Banner Caption Start -->
                    <div class="page-banner__caption text-center">
                        <h2 class="page-banner__main-title">Checkout</h2>
                    </div>
                    <!-- Page Banner Caption End -->

                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->

        <!-- Offcanvas Start -->
        <?php include("includes/offcanvas.php") ?>
        <!-- Offcanvas End -->

        <!-- Checkout Section Start -->
        <div class="checkout-section section-padding-01">
            <div class="container custom-container">

                <div class="row gy-8">
                    <div class="col-lg-7">
                        <!-- Checkout Form Start -->
                        <div class="checkout-form">

                            <!-- Checkout Form Info Start -->
                            <div class="checkout-form__info">
                                <p>Returning customer? <button class="info-toggle" data-bs-toggle="modal" data-bs-target="#loginModal">Click here to login</button></p>
                            </div>
                            <!-- Checkout Form Info End -->

                            <!-- Checkout Form Info Start -->
                            <div class="checkout-form__info">
                                <p>Have a coupon? <button class="info-toggle" data-bs-toggle="collapse" data-bs-target="#collapseExample">Click here to enter your code</button></p>
                                <div class="collapse" id="collapseExample">
                                    <div class="checkout-form__item">
                                        <input type="text" class="form-control" placeholder="Coupon code">
                                        <button class="coupon-btn"><i class="fas  fa-gift"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkout Form Info End -->

                            <!-- Checkout Form Start -->
                            <div class="checkout-form__details">

                                <h4 class="checkout-form__title">Billing details</h4>

                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <!-- Checkout Form Input Start -->
                                        <div class="checkout-form__input">
                                            <label class="form-label">First name *</label>
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                        <!-- Checkout Form Input End -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Checkout Form Input Start -->
                                        <div class="checkout-form__input">
                                            <label class="form-label">Last name *</label>
                                            <input type="text" class="form-control" placeholder="Last name">
                                        </div>
                                        <!-- Checkout Form Input End -->
                                    </div>
                                    <div class="col-md-12">
                                        <!-- Checkout Form Input Start -->
                                        <div class="checkout-form__input">
                                            <label class="form-label">Company name *</label>
                                            <input type="text" class="form-control" placeholder="Company name">
                                        </div>
                                        <!-- Checkout Form Input End -->
                                    </div>
                                    <div class="col-md-12">
                                        <!-- Checkout Form Input Start -->
                                        <div class="checkout-form__input">
                                            <label class="form-label">Country / Region*</label>
                                            <select class="select2">
                                                <option value="01">option 01</option>
                                                <option value="01">option 01</option>
                                                <option value="01">option 01</option>
                                                <option value="01">option 01</option>
                                                <option value="01">option 01</option>
                                                <option value="01">option 01</option>
                                                <option value="01">option 01</option>
                                                <option value="01">option 01</option>
                                                <option value="01">option 01</option>
                                                <option value="01">option 01</option>
                                                <option value="01">option 01</option>
                                                <option value="01">option 01</option>
                                                <option value="01">option 01</option>
                                            </select>
                                        </div>
                                        <!-- Checkout Form Input End -->
                                    </div>
                                    <div class="col-md-8">
                                        <!-- Checkout Form Input Start -->
                                        <div class="checkout-form__input">
                                            <label class="form-label">Street address *</label>
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                        <!-- Checkout Form Input End -->
                                    </div>
                                    <div class="col-md-4">
                                        <!-- Checkout Form Input Start -->
                                        <div class="checkout-form__input">
                                            <label class="form-label">Apartment, suite, unit, etc. *</label>
                                            <input type="text" class="form-control" placeholder="Apartment, suite, unit, etc.">
                                        </div>
                                        <!-- Checkout Form Input End -->
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <!-- Checkout Form Input Start -->
                                        <div class="checkout-form__input">
                                            <label class="form-label">Town / City *</label>
                                            <input type="text" class="form-control" placeholder="Town / City">
                                        </div>
                                        <!-- Checkout Form Input End -->
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <!-- Checkout Form Input Start -->
                                        <div class="checkout-form__input">
                                            <label class="form-label">State *</label>
                                            <input type="text" class="form-control" placeholder="State">
                                        </div>
                                        <!-- Checkout Form Input End -->
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <!-- Checkout Form Input Start -->
                                        <div class="checkout-form__input">
                                            <label class="form-label">Zip *</label>
                                            <input type="text" class="form-control" placeholder="Zip">
                                        </div>
                                        <!-- Checkout Form Input End -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Checkout Form Input Start -->
                                        <div class="checkout-form__input">
                                            <label class="form-label">Phone *</label>
                                            <input type="text" class="form-control" placeholder="Phone">
                                        </div>
                                        <!-- Checkout Form Input End -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Checkout Form Input Start -->
                                        <div class="checkout-form__input">
                                            <label class="form-label">Email address *</label>
                                            <input type="email" class="form-control" placeholder="Email address">
                                        </div>
                                        <!-- Checkout Form Input End -->
                                    </div>
                                </div>

                                <!-- Checkout Form Input Start -->
                                <div class="checkout-form__input form-check mt-4">
                                    <input type="checkbox" id="account">
                                    <label for="account">Create an account?</label>
                                </div>
                                <!-- Checkout Form Input End -->

                                <!-- Checkout Form Account Start -->
                                <div class="checkout-form__account mt-4">
                                    <!-- Checkout Form Input Start -->
                                    <div class="checkout-form__input">
                                        <label class="form-label">Create account password *</label>
                                        <input type="password" class="form-control" placeholder="password">
                                    </div>
                                    <!-- Checkout Form Input End -->
                                </div>
                                <!-- Checkout Form Account End -->

                                <!-- Checkout Form Input Start -->
                                <div class="checkout-form__input form-check mt-4">
                                    <input type="checkbox" id="shipping">
                                    <label for="shipping"> Ship to a different address?</label>
                                </div>
                                <!-- Checkout Form Input End -->

                                <!-- Checkout Form Shipping Start -->
                                <div class="checkout-form__shipping mt-4">
                                    <div class="row gy-4">
                                        <div class="col-md-6">
                                            <!-- Checkout Form Input Start -->
                                            <div class="checkout-form__input">
                                                <label class="form-label">First name *</label>
                                                <input type="text" class="form-control" placeholder="Your Name">
                                            </div>
                                            <!-- Checkout Form Input End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Checkout Form Input Start -->
                                            <div class="checkout-form__input">
                                                <label class="form-label">Last name *</label>
                                                <input type="text" class="form-control" placeholder="Last name">
                                            </div>
                                            <!-- Checkout Form Input End -->
                                        </div>
                                        <div class="col-md-12">
                                            <!-- Checkout Form Input Start -->
                                            <div class="checkout-form__input">
                                                <label class="form-label">Company name *</label>
                                                <input type="text" class="form-control" placeholder="Company name">
                                            </div>
                                            <!-- Checkout Form Input End -->
                                        </div>
                                        <div class="col-md-12">
                                            <!-- Checkout Form Input Start -->
                                            <div class="checkout-form__input">
                                                <label class="form-label">Country / Region*</label>
                                                <select class="select2">
                                                    <option value="01">option 01</option>
                                                    <option value="01">option 01</option>
                                                    <option value="01">option 01</option>
                                                    <option value="01">option 01</option>
                                                    <option value="01">option 01</option>
                                                    <option value="01">option 01</option>
                                                    <option value="01">option 01</option>
                                                    <option value="01">option 01</option>
                                                    <option value="01">option 01</option>
                                                    <option value="01">option 01</option>
                                                    <option value="01">option 01</option>
                                                    <option value="01">option 01</option>
                                                    <option value="01">option 01</option>
                                                </select>
                                            </div>
                                            <!-- Checkout Form Input End -->
                                        </div>
                                        <div class="col-md-8">
                                            <!-- Checkout Form Input Start -->
                                            <div class="checkout-form__input">
                                                <label class="form-label">Street address *</label>
                                                <input type="text" class="form-control" placeholder="Your Name">
                                            </div>
                                            <!-- Checkout Form Input End -->
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Checkout Form Input Start -->
                                            <div class="checkout-form__input">
                                                <label class="form-label">Apartment, suite, unit, etc. *</label>
                                                <input type="text" class="form-control" placeholder="Apartment, suite, unit, etc.">
                                            </div>
                                            <!-- Checkout Form Input End -->
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <!-- Checkout Form Input Start -->
                                            <div class="checkout-form__input">
                                                <label class="form-label">Town / City *</label>
                                                <input type="text" class="form-control" placeholder="Town / City">
                                            </div>
                                            <!-- Checkout Form Input End -->
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <!-- Checkout Form Input Start -->
                                            <div class="checkout-form__input">
                                                <label class="form-label">State *</label>
                                                <input type="text" class="form-control" placeholder="State">
                                            </div>
                                            <!-- Checkout Form Input End -->
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <!-- Checkout Form Input Start -->
                                            <div class="checkout-form__input">
                                                <label class="form-label">Zip *</label>
                                                <input type="text" class="form-control" placeholder="Zip">
                                            </div>
                                            <!-- Checkout Form Input End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Checkout Form Input Start -->
                                            <div class="checkout-form__input">
                                                <label class="form-label">Phone *</label>
                                                <input type="text" class="form-control" placeholder="Phone">
                                            </div>
                                            <!-- Checkout Form Input End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Checkout Form Input Start -->
                                            <div class="checkout-form__input">
                                                <label class="form-label">Email address *</label>
                                                <input type="email" class="form-control" placeholder="Email address">
                                            </div>
                                            <!-- Checkout Form Input End -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Checkout Form Shipping End -->

                                <!-- Checkout Form Input Start -->
                                <div class="checkout-form__input mt-4">
                                    <label class="form-label">Order notes </label>
                                    <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                                <!-- Checkout Form Input End -->

                            </div>
                            <!-- Checkout Form End -->

                            <!-- Checkout Payment Method End -->
                            <div class="checkout-form__payment">
                                <h4 class="checkout-form__title">Payment information</h4>

                                <ul class="checkout-form__payment-methods">
                                    <li class="checkout-form__payment-method">
                                        <input class="payment-method" type="radio" id="cash" checked name="payment-method">
                                        <label class="checkout-form__payment-title" for="cash">
                                            <span class="payment-icon">
                                            <svg viewBox="0 0 511 511.99978" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m235.792969 347.265625c3.902343-3.910156 3.902343-10.238281 0-14.148437-3.90625-3.898438-10.234375-3.898438-14.144531 0-3.898438 3.910156-3.898438 10.238281 0 14.148437 3.910156 3.898437 10.238281 3.898437 14.144531 0zm0 0"></path><path d="m188.449219 109.96875c0 60.636719 49.332031 109.972656 109.96875 109.972656s109.96875-49.335937 109.96875-109.972656-49.332031-109.96875-109.96875-109.96875-109.96875 49.332031-109.96875 109.96875zm199.945312 0c0 49.613281-40.363281 89.976562-89.976562 89.976562s-89.976563-40.363281-89.976563-89.976562c0-49.609375 40.363282-89.972656 89.976563-89.972656s89.976562 40.363281 89.976562 89.972656zm0 0"></path><path d="m115.652344 509.042969c3.875 3.90625 10.183594 3.949219 14.109375.082031l48.46875-47.75c8.234375-8.234375 10.738281-20.425781 7.117187-31.023438l10.425782-10.054687c5.613281-5.421875 13.003906-8.410156 20.816406-8.410156h132.902344c23.578124 0 45.863281-9.054688 62.757812-25.496094.695312-.675781-5.277344 6.359375 90.667969-108.3125 14.230469-16.835937 12.101562-42.117187-4.75-56.363281-16.746094-14.113282-41.832031-12.085938-56.101563 4.460937l-58.992187 60.632813c-7.449219-9.167969-18.808594-14.882813-31.082031-14.882813h-111.480469c-15.863281-6.636719-32.695313-9.996093-50.0625-9.996093-48.140625 0-90.175781 22.234374-112.734375 63.921874-9.503906-1.800781-19.527344 1.074219-26.738282 8.285157l-47.558593 47.699219c-3.882813 3.894531-3.890625 10.195312-.015625 14.101562zm74.792968-227.121094c15.3125 0 30.117188 3.082031 44.011719 9.160156 1.265625.554688 2.628907.839844 4.007813.839844h113.527344c10.839843 0 19.996093 8.839844 19.996093 19.992187 0 11.027344-8.96875 19.996094-19.996093 19.996094h-81.566407c-5.519531 0-9.996093 4.476563-9.996093 9.996094 0 5.523438 4.476562 9.996094 9.996093 9.996094h81.566407c22.050781 0 39.988281-17.9375 39.988281-39.988282 0-1.757812-.125-3.5-.351563-5.226562 57.066406-58.660156 65.113282-66.902344 65.457032-67.3125 7.125-8.410156 19.773437-9.476562 28.1875-2.382812 8.421874 7.121093 9.488281 19.761718 2.34375 28.21875l-89.667969 107.195312c-13.09375 12.570312-30.285157 19.488281-48.457031 19.488281h-132.902344c-13.023438 0-25.351563 4.980469-34.703125 14.015625l-8.496094 8.199219-78.320313-78.316406c18.304688-34.339844 52.652344-53.871094 95.375-53.871094zm-125.320312 66.34375c3.296875-3.296875 8.359375-3.890625 12.378906-1.40625 1.730469 1.054687-3.238281-3.46875 86.589844 86.234375 3.996094 3.996094 3.78125 10.363281.054688 14.089844l-41.320313 40.707031-98.230469-98.980469zm0 0"></path><path d="m286.421875 49.988281v11.714844c-11.636719 4.125-19.996094 15.238281-19.996094 28.273437 0 16.535157 13.453125 29.992188 29.992188 29.992188 5.511719 0 9.996093 4.484375 9.996093 9.996094 0 5.511718-4.484374 9.996094-9.996093 9.996094-4.269531 0-8.882813-2.683594-12.980469-7.5625-3.554688-4.226563-9.859375-4.769532-14.085938-1.21875-4.226562 3.554687-4.773437 9.859374-1.21875 14.085937 5.34375 6.355469 11.628907 10.785156 18.289063 13.019531v11.667969c0 5.523437 4.476563 9.996094 9.996094 9.996094s9.996093-4.472657 9.996093-9.996094v-11.714844c11.636719-4.128906 19.996094-15.242187 19.996094-28.273437 0-16.539063-13.453125-29.992188-29.992187-29.992188-5.511719 0-9.996094-4.484375-9.996094-9.996094 0-5.511718 4.484375-10 9.996094-10 3.542969 0 7.28125 1.808594 10.8125 5.226563 3.96875 3.839844 10.296875 3.734375 14.136719-.230469 3.839843-3.96875 3.734374-10.296875-.230469-14.136718-5.074219-4.910157-10.152344-7.6875-14.722657-9.203126v-11.644531c0-5.523437-4.476562-10-9.996093-10s-9.996094 4.476563-9.996094 10zm0 0"></path>
                                            </svg>
                                        </span>
                                            <span class="payment-name">Cash on delivery</span>
                                        </label>

                                        <div class="payment-details">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </li>
                                    <li class="checkout-form__payment-method">
                                        <input class="payment-method" type="radio" id="bank" name="payment-method">
                                        <label class="checkout-form__payment-title" for="bank">
                                            <span class="payment-icon">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.16 512.16">
                                                <g>
                                                    <path d="M272.067,336.147H408.6c5.12,0,8.533-3.413,8.533-8.533v-76.8c0-5.12-3.413-8.533-8.533-8.533H272.067
                                                        c-5.12,0-8.533,3.413-8.533,8.533v76.8C263.533,332.733,266.947,336.147,272.067,336.147z M280.6,259.347h119.467v59.733H280.6
                                                        V259.347z"></path>
                                                    <path d="M41.667,225.213h68.267c5.12,0,8.533-3.413,8.533-8.533s-3.413-8.533-8.533-8.533H41.667
                                                        c-5.12,0-8.533,3.413-8.533,8.533S36.547,225.213,41.667,225.213z"></path>
                                                    <path d="M144.067,225.213h68.267c5.12,0,8.533-3.413,8.533-8.533s-3.413-8.533-8.533-8.533h-68.267
                                                        c-5.12,0-8.533,3.413-8.533,8.533S138.947,225.213,144.067,225.213z"></path>
                                                    <path d="M41.667,259.347H152.6c5.12,0,8.533-3.413,8.533-8.533s-3.413-8.533-8.533-8.533H41.667c-5.12,0-8.533,3.413-8.533,8.533
                                                        S36.547,259.347,41.667,259.347z"></path>
                                                    <path d="M212.333,242.28h-25.6c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533h25.6c5.12,0,8.533-3.413,8.533-8.533
                                                        S217.453,242.28,212.333,242.28z"></path>
                                                    <path d="M503.32,136.467c-5.973-7.68-13.653-11.947-23.04-12.8l-20.48-2.482V97.213V80.147c0-18.773-15.36-34.133-34.133-34.133
                                                        H33.133C14.36,46.013-1,61.373-1,80.147v17.067v68.267v187.733c0,15.413,10.357,28.518,24.453,32.718
                                                        c-0.43,17.262,12.631,32.248,30.161,33.842l394.24,44.373c0.853,0,2.56,0,3.413,0c17.067,0,32.427-12.8,34.133-29.013
                                                        l25.6-273.92C511.853,152.68,509.293,143.293,503.32,136.467z M16.067,105.747h426.667v22.187v29.013H16.067V105.747z
                                                         M33.133,63.08h392.533c9.387,0,17.067,7.68,17.067,17.067v8.533H16.067v-8.533C16.067,70.76,23.747,63.08,33.133,63.08z
                                                         M16.067,353.213v-179.2h426.667v179.2c0,9.387-7.68,17.067-17.067,17.067H33.987h-0.853
                                                        C23.747,370.28,16.067,362.6,16.067,353.213z M493.933,157.8l-25.6,273.92c-0.853,9.387-9.387,16.213-18.773,15.36
                                                        L56.173,402.707c-8.533-0.853-14.507-7.68-15.36-15.36h384.853c18.773,0,34.133-15.36,34.133-34.133V165.48v-28.16l19.627,1.707
                                                        c4.267,0,8.533,2.56,11.093,5.973C493.08,148.413,494.787,153.533,493.933,157.8z"></path>
                                                </g>
                                            </svg>
                                        </span>
                                            <span class="payment-name">Direct bank transfer</span>
                                        </label>

                                        <div class="payment-details">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </li>
                                    <li class="checkout-form__payment-method">
                                        <input class="payment-method" type="radio" id="check" name="payment-method">
                                        <label class="checkout-form__payment-title" for="check">
                                            <span class="payment-icon">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512">
                                                <path d="M313.583,134.372H87.111c-4.808,0-8.711,3.896-8.711,8.711c0,4.808,3.896,8.711,8.711,8.711h226.472
                                                        c4.808,0,8.711-3.902,8.711-8.711C322.294,138.268,318.391,134.372,313.583,134.372z"></path>
                                                <path d="M272.935,192.442H87.111c-4.808,0-8.711,3.896-8.711,8.711c0,4.808,3.896,8.711,8.711,8.711h185.824
                                                        c4.808,0,8.711-3.903,8.711-8.711C281.645,196.338,277.743,192.442,272.935,192.442z"></path>
                                                <path d="M180.022,250.511H87.111c-4.808,0-8.711,3.896-8.711,8.711c0,4.808,3.902,8.711,8.711,8.711h92.911
                                                        c4.808,0,8.711-3.903,8.711-8.711C188.733,254.409,184.83,250.511,180.022,250.511z"></path>
                                                <path d="M508.611,163.831l-35.771-35.765c-0.749-0.749-1.591-1.324-2.474-1.823V79.206c0-12.775-10.452-23.228-23.228-23.228
                                                        H23.228C10.452,55.978,0,66.43,0,79.206v278.735c0,12.775,10.452,23.228,23.228,23.228h182.078
                                                        c-2.282,3.624-4.251,7.497-5.308,10.662l-18.751,56.252c-1.62,4.854,0.174,7.939,4.07,7.939c0.964,0,2.062-0.192,3.269-0.593
                                                        l56.252-18.751c6.057-2.021,14.715-7.369,19.233-11.881l43.634-43.627h139.437c12.775,0,23.228-10.452,23.228-23.228V218.498
                                                        l38.244-38.245C513.129,175.741,513.129,168.349,508.611,163.831z M23.233,363.748c-3.147,0-5.807-2.66-5.807-5.807V79.206
                                                        c0-3.147,2.66-5.807,5.807-5.807h423.91c3.147,0,5.807,2.66,5.807,5.807v52.333l-13.472,13.472l-7.445-7.45
                                                        c-3.96-3.96-9.209-5.947-14.372-5.935c-5.168-0.006-10.418,1.98-14.378,5.947l-70.073,70.067c-3.403,3.403-3.403,8.919,0,12.317
                                                        c3.403,3.403,8.914,3.403,12.317,0l70.079-70.079c0.557-0.557,1.26-0.831,2.056-0.836c0.79,0.006,1.492,0.279,2.056,0.836
                                                        l7.445,7.445L220.735,363.748H23.233z M239.335,420.146l-34.209,11.405l11.4-34.221c0.715-2.137,2.416-5.273,4.233-7.996
                                                        l26.572,26.572C244.59,417.73,241.437,419.449,239.335,420.146z M260.142,404.09l-27.554-27.56L413.377,195.74l27.56,27.554
                                                        L260.142,404.09z M452.952,357.941L452.952,357.941c0,3.147-2.66,5.807-5.807,5.807H325.128l127.824-127.829V357.941z
                                                         M453.253,210.977l-27.56-27.554l38.936-38.936l27.56,27.554L453.253,210.977z"></path>
                                            </svg>
                                        </span>
                                            <span class="payment-name">Check payments</span>
                                        </label>

                                        <div class="payment-details">
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </li>
                                    <li class="checkout-form__payment-method">
                                        <input class="payment-method" type="radio" id="paypal" name="payment-method">
                                        <label class="checkout-form__payment-title" for="paypal">
                                            <span class="payment-icon">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999">
                                                <path d="M476.166,169.725c-9.687-35.524-34.838-60.946-72.909-73.865c-4.511-26.425-16.475-47.896-35.655-63.87
                                                    C342.131,10.778,304.354,0.022,255.321,0.022H143.825c-11.167-0.467-33.305,6.234-39.179,34.907L31.641,391.874
                                                    c-0.043,0.208-0.078,0.417-0.108,0.628c-0.22,1.572-1.905,15.638,6.632,25.457c3.382,3.889,9.651,8.525,20.308,8.525h49.602
                                                    c0.357,0.017,0.727,0.024,1.111,0.024c2.435,0,5.391-0.348,8.561-1.207L107.1,477.359c-0.043,0.208-0.079,0.417-0.108,0.628
                                                    c-0.22,1.572-1.905,15.639,6.632,25.457c3.382,3.889,9.651,8.525,20.308,8.525h49.593c0.407,0.02,0.828,0.03,1.261,0.03
                                                    c11.544,0,31.991-7.274,36.556-35.689l16.482-81.478c0.281-1.218,3.833-15.274,17.331-15.274c0.861,0,1.927,0.011,3.181,0.022
                                                    c16.557,0.162,60.545,0.605,105.734-14.622c25.951-8.744,48.038-21.327,65.645-37.4c21.542-19.664,36.531-44.676,44.549-74.336
                                                    C478.851,236.261,485.201,202.857,476.166,169.725z M379.115,162.413c-19.699,72.878-85.909,111.312-191.623,111.309
                                                    c-1.459,0-2.938-0.008-4.412-0.022c-1.335-0.013-2.469-0.023-3.384-0.023c-3.792,0-7.254,0.513-10.41,1.418l30.8-150.588
                                                    c3.589-17.517,15.475-18.609,18.368-18.609c0.042,0,0.083,0.001,0.121,0.001c0.217,0.017,0.208,0.009,0.474,0.009h111.73
                                                    c20.137,0,38.203,1.935,53.825,5.754C385.97,132.868,381.874,152.217,379.115,162.413z M108.925,406.101
                                                    c-0.263-0.023-0.269-0.014-0.577-0.014H58.474c-3.58,0-4.57-1.121-4.896-1.489c-1.735-1.961-2.128-6.501-1.869-9.045
                                                    l72.921-356.534c3.589-17.517,15.475-18.609,18.368-18.609c0.042,0,0.083,0.001,0.121,0.001c0.217,0.017,0.208,0.009,0.474,0.009
                                                    h111.728c71.327,0,113.574,23.397,125.842,69.599c-15.164-2.996-32.04-4.511-50.383-4.511H219.282
                                                    c-11.158-0.47-33.305,6.234-39.179,34.907l-55.935,273.485C120.005,405.589,110.961,406.17,108.925,406.101z M454.572,247.898
                                                    c-19.699,72.878-85.909,111.312-191.623,111.309c-1.459,0-2.938-0.008-4.412-0.022c-1.335-0.013-2.469-0.023-3.384-0.023
                                                    c-24.018,0-34.878,20.505-37.266,31.348c-0.013,0.057-0.024,0.113-0.037,0.171l-16.547,81.797
                                                    c-0.029,0.147-0.056,0.293-0.078,0.441c-2.808,17.886-14.247,18.699-16.838,18.668c-0.264-0.023-0.271-0.014-0.582-0.014h-49.874
                                                    c-3.58,0-4.57-1.121-4.896-1.489c-1.735-1.961-2.128-6.501-1.869-9.045l35.187-171.636c0.476-1.937,4.244-15.329,17.344-15.329
                                                    c0.861,0,1.927,0.011,3.181,0.022c16.558,0.163,60.545,0.605,105.734-14.622c25.951-8.744,48.038-21.327,65.645-37.4
                                                    c21.542-19.664,36.531-44.676,44.549-74.336c2.752-10.174,6.683-28.476,6.453-49.345
                                                    C473.273,147.034,462.784,217.544,454.572,247.898z"></path>
                                                <path d="M111.82,210.263c-5.517-1.126-10.905,2.434-12.032,7.953l-0.97,4.753c-1.126,5.518,2.434,10.905,7.953,12.032
                                                        c0.688,0.141,1.375,0.208,2.051,0.208c4.745,0,8.995-3.331,9.981-8.161l0.97-4.753C120.899,216.777,117.338,211.39,111.82,210.263
                                                        z"></path>
                                                <path d="M104.062,248.28c-5.517-1.126-10.905,2.434-12.032,7.953L66.231,382.638c-1.126,5.518,2.434,10.905,7.953,12.032
                                                        c0.688,0.141,1.375,0.208,2.051,0.208c4.745,0,8.995-3.331,9.981-8.161l25.798-126.405
                                                        C113.14,254.793,109.58,249.406,104.062,248.28z"></path>
                                            </svg>
                                        </span>
                                            <span class="payment-name">Cash on delivery</span>
                                        </label>

                                        <div class="payment-details">
                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                        </div>
                                    </li>
                                    <li class="checkout-form__payment-method">
                                        <input class="payment-method" type="radio" id="card" name="payment-method">
                                        <label class="checkout-form__payment-title" for="card">
                                            <span class="payment-icon">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 478.984 478.984">
                                                <g>
                                                    <rect x="344" y="319.492" width="48" height="16"></rect>
                                                    <rect x="280" y="319.492" width="48" height="16"></rect>
                                                    <rect x="216" y="319.492" width="48" height="16"></rect>
                                                    <path d="M471.896,165.916L313.6,7.596c-4.495-4.538-10.62-7.088-17.008-7.08h-0.072c-6.346,0.003-12.424,2.554-16.872,7.08
                                                        l-167.92,167.896H24c-13.255,0-24,10.745-24,24v224c0,13.255,10.745,24,24,24h118.528l23.872,23.896
                                                        c4.495,4.538,10.62,7.088,17.008,7.08h0.064c6.348-0.002,12.43-2.553,16.88-7.08l23.92-23.896H408c13.255,0,24-10.745,24-24
                                                        V239.764l39.856-39.856c4.549-4.453,7.117-10.547,7.128-16.912C479.008,176.582,476.454,170.428,471.896,165.916z
                                                         M370.128,86.772l-88.72,88.72h-67.936L336.16,52.804L370.128,86.772z M290.976,18.876c3.043-3.117,8.037-3.177,11.155-0.133
                                                        c0.045,0.044,0.09,0.088,0.133,0.133l22.584,22.616l-134.008,134h-56.488L290.976,18.876z M189.024,460.108
                                                        c-1.463,1.528-3.485,2.394-5.6,2.4c-2.144-0.005-4.196-0.869-5.696-2.4l-12.568-12.616h36.488L189.024,460.108z M416,423.492
                                                        c0,4.418-3.582,8-8,8H24c-4.418,0-8-3.582-8-8v-112h400V423.492z M416,295.492H16v-48h400V295.492z M416,231.492H16v-32
                                                        c0-4.418,3.582-8,8-8h384c4.418,0,8,3.582,8,8V231.492z M460.584,188.556L460.584,188.556L432,217.14v-17.648
                                                        c0-13.255-10.745-24-24-24H304l77.408-77.408l79.144,79.144c1.537,1.506,2.402,3.568,2.4,5.72
                                                        C462.95,185.06,462.096,187.082,460.584,188.556z"></path>
                                                    <path d="M76.728,415.708c1.168-1.01,2.262-2.104,3.272-3.272c10.579,12.322,28.756,14.663,42.112,5.424
                                                        c8.62-6.027,13.794-15.85,13.888-26.368c0-17.673-14.327-32-32-32c-1.588-0.022-3.174,0.112-4.736,0.4l-0.208,0.056
                                                        c-0.08,0-0.16,0-0.232,0c-7.329,1.218-13.994,4.979-18.824,10.624c-11.56-13.368-31.769-14.833-45.136-3.272
                                                        c-13.368,11.56-14.833,31.769-3.272,45.136C43.152,425.804,63.36,427.269,76.728,415.708z M101.976,375.66
                                                        c0.667-0.127,1.345-0.183,2.024-0.168c8.837,0,16,7.163,16,16c-0.008,3.385-1.111,6.677-3.144,9.384
                                                        c-0.288,0.392-0.512,0.8-0.84,1.208c-0.056,0.064-0.136,0.104-0.2,0.168c-3.022,3.337-7.314,5.241-11.816,5.24
                                                        c-8.835-0.151-15.876-7.435-15.725-16.27C88.409,383.377,94.211,376.786,101.976,375.66z M56,375.492c8.837,0,16,7.163,16,16
                                                        s-7.163,16-16,16s-16-7.163-16-16S47.163,375.492,56,375.492z"></path>
                                                </g>
                                            </svg>
                                        </span>
                                            <span class="payment-name">Cash on delivery</span>
                                        </label>

                                        <div class="payment-details">
                                            <p>Pay with your credit card via Stripe. TEST MODE ENABLED. In test mode, you can use the card number 4242424242424242 with any CVC and a valid expiration date or check the Testing Stripe documentation for more card numbers.</p>

                                            <ul class="payment-option">
                                                <li>
                                                    <div class="form-check">
                                                        <input class="card-option" type="radio" id="payment1" checked name="payment-option">
                                                        <label for="payment1">Visa ending in 4242 (expires 04/24)</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="card-option" type="radio" id="payment2" name="payment-option">
                                                        <label for="payment2">Use a new payment method</label>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="checkout-form__payment-card">
                                                <!-- Checkout Form Input Start -->
                                                <div class="checkout-form__input">
                                                    <label class="form-label">Credit or debit card</label>
                                                    <input type="text" class="form-control" placeholder="Credit or debit card">
                                                </div>
                                                <!-- Checkout Form Input End -->
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="checkout-form__place-order">
                                    <!-- Checkout Form Input Start -->
                                    <div class="checkout-form__input form-check">
                                        <input type="checkbox" id="conditions">
                                        <label for="conditions">I have read and agree to the website terms and conditions *</label>
                                    </div>
                                    <!-- Checkout Form Input End -->
                                    <button class="btn btn-primary btn-hover-secondary">Place order</button>
                                </div>
                            </div>
                            <!-- Checkout Payment Method End -->

                        </div>
                        <!-- Checkout Form End -->
                    </div>
                    <div class="col-lg-5">
                        <!-- Checkout Form Start -->
                        <div class="checkout-order">
                            <h4 class="checkout-order__title">Order summary</h4>

                            <div class="checkout-order__details table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr class="checkout-order__cart-item">
                                            <td class="checkout-order__info">

                                                <div class="checkout-order__product">
                                                    <div class="checkout-order__product-thumbnail">
                                                        <img src="assets/images/product/product-1.png" alt="Product" width="80" height="80">
                                                    </div>
                                                    <div class="checkout-order__product-caption">
                                                        <h3 class="checkout-order__name">Attached <span class="quantity">x1</span></h3>
                                                    </div>
                                                </div>

                                            </td>
                                            <td class="checkout-order__total">
                                                <span class="sale-price">$72<span class="separator">.00</span></span>
                                            </td>
                                        </tr>
                                        <tr class="checkout-order__cart-item">
                                            <td class="checkout-order__info">

                                                <div class="checkout-order__product">
                                                    <div class="checkout-order__product-thumbnail">
                                                        <img src="assets/images/product/product-2.png" alt="Product" width="80" height="80">
                                                    </div>
                                                    <div class="checkout-order__product-caption">
                                                        <h3 class="checkout-order__name">Awesome for Websites <span class="quantity">x1</span></h3>
                                                    </div>
                                                </div>

                                            </td>
                                            <td class="checkout-order__total">
                                                <span class="sale-price">$78<span class="separator">.00</span></span>
                                            </td>
                                        </tr>
                                        <tr class="checkout-order__cart-item">
                                            <td class="checkout-order__info">

                                                <div class="checkout-order__product">
                                                    <div class="checkout-order__product-thumbnail">
                                                        <img src="assets/images/product/product-3.png" alt="Product" width="80" height="80">
                                                    </div>
                                                    <div class="checkout-order__product-caption">
                                                        <h3 class="checkout-order__name">Business Administration <span class="quantity">x1</span></h3>
                                                    </div>
                                                </div>

                                            </td>
                                            <td class="checkout-order__total">
                                                <span class="sale-price">$89<span class="separator">.00</span></span>
                                            </td>
                                        </tr>
                                        <tr class="checkout-order__cart-item">
                                            <td class="checkout-order__info">

                                                <div class="checkout-order__product">
                                                    <div class="checkout-order__product-thumbnail">
                                                        <img src="assets/images/courses/courses-7.jpg" alt="Product" width="80" height="80">
                                                    </div>
                                                    <div class="checkout-order__product-caption">
                                                        <h3 class="checkout-order__name">Mechanical Engineering and Electrical Engineering Explained<span class="quantity">x1</span></h3>
                                                    </div>
                                                </div>

                                            </td>
                                            <td class="checkout-order__total">
                                                <span class="sale-price">$84<span class="separator">.00</span></span>
                                            </td>
                                        </tr>
                                        <tr class="checkout-order__cart-item">
                                            <td class="checkout-order__info">

                                                <div class="checkout-order__product">
                                                    <div class="checkout-order__product-thumbnail">
                                                        <img src="assets/images/courses/courses-28.jpg" alt="Product" width="80" height="80">
                                                    </div>
                                                    <div class="checkout-order__product-caption">
                                                        <h3 class="checkout-order__name">Digital Advertising & Marketing 101: Take The Complete Guide<span class="quantity">x1</span></h3>
                                                    </div>
                                                </div>

                                            </td>
                                            <td class="checkout-order__total">
                                                <span class="sale-price">$79<span class="separator">.00</span></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td>
                                                <span class="subtotal-price">$131<span class="separator">.00</span></span>
                                            </td>
                                        </tr>
                                        <tr class="cart-shipping">
                                            <th>Shipping</th>
                                            <td>Free shipping <span class="shipping-fee">$5<span class="separator">.00</span></span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <span class="total-price">$136<span class="separator">.00</span></span>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- Checkout Form End -->
                    </div>
                </div>

            </div>
        </div>
        <!-- Checkout Section End -->

        <!-- Footer Start -->
        <?php include("includes/footer.php") ?>
        <!-- Footer End -->

        <!--Back To Start-->
        <button id="backBtn" class="back-to-top backBtn">
            <i class="arrow-top fas fa-arrow-up"></i>
            <i class="arrow-bottom fas fa-arrow-up"></i>
        </button>
        <!--Back To End-->


    </main>

    





    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="./assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="./assets/js/plugins/aos.js"></script>
    <script src="./assets/js/plugins/parallax.js"></script>
    <script src="./assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/jquery.powertip.min.js"></script>
    <script src="./assets/js/plugins/nice-select.min.js"></script>
    <script src="./assets/js/plugins/glightbox.min.js"></script>
    <script src="./assets/js/plugins/jquery.sticky-kit.min.js"></script>
    <script src="./assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="./assets/js/plugins/masonry.pkgd.min.js"></script>
    <script src="./assets/js/plugins/flatpickr.js"></script>
    <script src="./assets/js/plugins/range-slider.js"></script>
    <script src="./assets/js/plugins/select2.min.js"></script>


    <!-- Activation JS -->
    <script src="./assets/js/main.js"></script>


</body>

</html>