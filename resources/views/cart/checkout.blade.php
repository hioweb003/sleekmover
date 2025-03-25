﻿<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Checkout</title>
        <meta charset="utf-8">
        @include("includes.header-shop")
        <!-- start page title -->
        <section class="page-title-center-alignment cover-background top-space-padding" style="background-image: url({{ asset('images/demo-decor-store-title-bg.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <h1 class="alt-font d-inline-block fw-700 ls-minus-05px text-base-color mb-10px mt-3 md-mt-50px">Checkout</h1>
                    </div>
                    <div class="col-12 breadcrumb breadcrumb-style-01 d-flex justify-content-center">
                        <ul>
                            <li><a href="{{ route('shp') }}">Home</a></li> 
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section>
            <div class="container">
                {{-- <div class="row justify-content-center mb-8 lg-mb-10 align-items-center">
                    <div class="col-auto icon-with-text-style-08 lg-mb-10px">
                        <div class="feature-box feature-box-left-icon">
                            <div class="feature-box-icon me-5px">
                                <i class="feather icon-feather-user top-9px position-relative text-dark-gray icon-small"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-dark-gray align-middle alt-font fw-500">Returning customer? <a href="#" class="text-decoration-line-bottom fw-600 text-dark-gray">Click here to login</a></span> 
                            </div>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-inline-block">
                        <span class="w-1px h-20px bg-extra-medium-gray d-block"></span>
                    </div>
                    <div class="col-auto icon-with-text-style-08">
                        <div class="feature-box feature-box-left-icon">
                            <div class="feature-box-icon me-5px">
                                <i class="feather icon-feather-scissors top-9px position-relative text-dark-gray icon-small"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-dark-gray align-middle alt-font fw-500">Have a coupon? <a href="#" class="text-decoration-line-bottom fw-600 text-dark-gray">Click here to enter your code</a></span>
                            </div>
                        </div>
                    </div>
                </div>  --}}
                <div class="row align-items-start">
                    @if (Cart::count() > 0)
                    <div class="col-lg-7 pe-50px md-pe-15px md-mb-50px xs-mb-35px">
                        @include('includes.errors')
                        @include('includes.success')
                        <span class="fs-26 alt-font fw-600 text-dark-gray mb-20px d-block">Billing details</span>
                        <form action="" method="post" id="formactionoptin" class="">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-20px">
                                    <label class="mb-10px">First name <span class="text-red">*</span></label>
                                    <input class="border-radius-4px input-small text-dark" autocomplete="off" type="text" name="first_name" value="{{ old('first_name') }}" aria-label="text" required>
                                </div>
                                <div class="col-md-6 mb-20px">
                                    <label class="mb-10px">Last name <span class="text-red">*</span></label>
                                    <input class="border-radius-4px input-small text-dark" autocomplete="off" type="text" name="last_name" value="{{ old('last_name') }}" aria-label="text" required>
                                </div>
                              
                                <div class="col-12 mb-20px">
                                    <label class="mb-10px" for="contry1">Country <span class="text-red">*</span></label>
                                    <select  id="contry1" name="country" autocomplete="off" class="form-select select-small text-dark" required>
                                        <option value="">Select a country</option>
                                        <option value="Afganistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bonaire">Bonaire</option>
                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada" selected>Canada</option>
                                        <option value="Canary Islands">Canary Islands</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Channel Islands">Channel Islands</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Island">Cocos Island</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Curaco">Curacao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Ter">French Southern Ter</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Great Britain">Great Britain</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="India">India</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea North">Korea North</option>
                                        <option value="Korea Sout">Korea South</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Midway Islands">Midway Islands</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Nambia">Nambia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                        <option value="Nevis">Nevis</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau Island">Palau Island</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Phillipines">Philippines</option>
                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="St Barthelemy">St Barthelemy</option>
                                        <option value="St Eustatius">St Eustatius</option>
                                        <option value="St Helena">St Helena</option>
                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                        <option value="St Lucia">St Lucia</option>
                                        <option value="St Maarten">St Maarten</option>
                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                        <option value="Saipan">Saipan</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="Samoa American">Samoa American</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Tahiti">Tahiti</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                        <option value="United States of America">United States of America</option>
                                        <option value="Uraguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City State">Vatican City State</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                        <option value="Wake Island">Wake Island</option>
                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-20px">
                                    <label class="mb-10px">Street address <span class="text-red">*</span></label>
                                    <input class="border-radius-4px input-small mb-20px text-dark" autocomplete="off"  type="text" name="address" placeholder="House number and street name" value="{{ old('address') }}" required>
                                    {{-- <input class="border-radius-4px input-small" type="text" placeholder="Apartment,suite,unit etc. (optional)"> --}}
                                </div>
                                <div class="col-12 mb-20px">
                                    <label class="mb-10px">Town / City <span class="text-red">*</span></label>
                                    <input class="border-radius-4px input-small text-dark" autocomplete="off"  type="text" name="city" value="{{ old('city') }}" required>
                                </div>
                                {{-- <div class="col-12 mb-20px">
                                    <label class="mb-10px" for="state1">State <span class="text-red">*</span></label>
                                    <select name="state" id="state1" class="form-select select-small border-radius-4px">
                                        <option>Select a state</option>
                                    </select>
                                </div> --}}
                                <div class="col-12 mb-20px">
                                    <label class="mb-10px">State <span class="text-red">*</span></label>
                                    <input class="border-radius-4px input-small text-dark" autocomplete="off" type="text" name="state" value="{{ old('state') }}" required>
                                </div>
                                <div class="col-12 mb-20px">
                                    <label class="mb-10px">Phone <span class="text-red">*</span></label>
                                    <input class="border-radius-4px input-small text-dark" autocomplete="off" type="text" name="phone" value="{{ old('phone') }}" required>
                                </div>
                                <div class="col-12 mb-20px">
                                    <label class="mb-10px">Email address <span class="text-red">*</span></label>
                                    <input class="border-radius-4px input-small text-dark" autocomplete="off" type="email" name="email" value="{{ old('email') }}" required>
                                </div>
                              
                                <div class="col-12">
                                    <label class="mb-10px">Order notes (optional)</label>
                                    <textarea class="border-radius-4px textarea-small text-dark" autocomplete="off" name="note" rows="5" cols="5" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                       
                    </div>
                    <div class="col-lg-5">
                        <div class="bg-very-light-gray border-radius-6px p-50px lg-p-25px your-order-box">
                            <span class="fs-26 alt-font fw-600 text-dark-gray mb-5px d-block">Your order</span>
                            <table class="w-100 total-price-table your-order-table">
                                <tbody>
                                    <tr>
                                        <th class="w-60 lg-w-55 xs-w-50 fw-600 text-dark-gray alt-font">Product</th>
                                        <td class="fw-600 text-dark-gray alt-font">Total</td>
                                    </tr>
                                    @foreach ($checkoutcart as $cart)
                                    <tr class="product">
                                        <td class="product-thumbnail">
                                            <a href="javasript:void(0)" class="text-dark-gray fw-500 d-block lh-initial">{{ucwords($cart->name)}} x {{$cart->qty}}</a>
                                            {{-- <span class="fs-14 d-block">Color: Pink</span> --}}
                                        </td>
                                        <?php
                                        $pto = $cart->qty * $cart->price;
                                      ?>
                                        <td class="product-price" data-title="Price">CA$ {{number_format($pto,2)}}</td>
                                    </tr>
                                    @endforeach
                                   
                                    <tr>
                                        <th class="w-50 fw-600 text-dark-gray alt-font">Subtotal</th>
                                        <td class="text-dark-gray fw-600">CA$ {{Cart::subtotal()}}</td>
                                        <input type="hidden" name="subtotal" value="{{Cart::subtotal()}}">
                                    </tr>
                                    {{-- <tr class="shipping">
                                        <th class="fw-600 text-dark-gray alt-font">Shipping</th>
                                        <td data-title="Shipping">
                                            <ul class="p-0">
                                                <li class="d-flex align-items-center">
                                                    <input id="free_shipping" type="radio" name="shipping-option" class="d-block w-auto mb-0 me-10px p-0" checked="checked">
                                                    <label class="md-line-height-18px" for="free_shipping">Free shipping</label>
                                                </li>
                                                <li class="d-flex align-items-center">
                                                    <input id="flat" type="radio" name="shipping-option" class="d-block w-auto mb-0 me-10px p-0">
                                                    <label class="md-line-height-18px" for="flat">Flat: $12.00</label>
                                                </li>
                                                <li class="d-flex align-items-center">
                                                    <input id="local_pickup" type="radio" name="shipping-option" class="d-block w-auto mb-0 me-10px p-0">
                                                    <label class="md-line-height-18px" for="local_pickup">Local pickup</label>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>  --}}
                                    <tr class="total-amount">
                                        <th class="fw-600 text-dark-gray alt-font">Total</th>
                                        <td data-title="Total">
                                            <?php 
                                            $toprice = "0";
                                            foreach (Cart::content() as $cartitem){
                                                $toprice += $cartitem->price * $cartitem->qty;
                                              }
                                           ?>
                                            <h6 class="d-block fw-700 mb-0 text-dark-gray alt-font">CA$ {{number_format($toprice,2)}}</h6>
                                            {{-- <span class="fs-14">(Includes $19.29 tax)</span> --}}
                                        </td>
                                        <input type="hidden" name="amount" autocomplete="off" id="tottal" value="{{$toprice}}">
                                    </tr>
                                </tbody>
                            </table>
                            <div class="p-40px lg-p-25px bg-white border-radius-6px box-shadow-large mt-10px mb-30px sm-mb-25px checkout-accordion">
                                <div class="w-100" id="accordion-style-05">
                                    <!-- start tab content -->
                                    {{-- <div class="heading active-accordion">
                                        <label class="mb-5px">
                                            <input class="d-inline w-auto me-5px mb-0 p-0" type="radio" name="payment-option" checked="checked">
                                            <span class="d-inline-block text-dark-gray fw-500">Direct bank transfer</span>
                                            <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-style-05" href="#style-5-collapse-1"></a>
                                        </label> 
                                    </div>
                                    <div id="style-5-collapse-1" class="collapse show" data-bs-parent="#accordion-style-05">
                                        <div class="p-25px bg-very-light-gray mt-20px mb-20px fs-14 lh-24">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</div>
                                    </div>
                                    <!-- end tab content -->
                                    <!-- start tab content -->
                                    <div class="heading active-accordion">
                                        <label class="mb-5px">
                                            <input class="d-inline w-auto me-5px mb-0 p-0" type="radio" name="payment-option">
                                            <span class="d-inline-block text-dark-gray fw-500">Check payments</span>
                                            <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-style-05" href="#style-5-collapse-2"></a>
                                        </label>
                                    </div>
                                    <div id="style-5-collapse-2" class="collapse" data-bs-parent="#accordion-style-05">
                                        <div class="p-25px bg-very-light-gray mt-20px mb-20px fs-14 lh-24">Please send a check to store name, store street, store town, store state / county, store postcode.</div>
                                    </div> --}}
                                    <!-- end tab content -->
                                    <!-- start tab content -->
                                    <div class="heading active-accordion">
                                        <label class="mb-5px">
                                            <input class="d-inline w-auto me-5px mb-0 p-0" type="radio" name="payment" value="payondelivery" onchange="payoption('{{ route('paydelivery') }}')" autocomplete="off"> 
                                            <span class="d-inline-block text-dark-gray fw-500">Cash on delivery</span> 
                                            <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-style-05" href="#style-5-collapse-3"></a>
                                        </label>
                                    </div>
                                    <div id="style-5-collapse-3" class="collapse" data-bs-parent="#accordion-style-05">
                                        <div class="p-25px bg-very-light-gray mt-20px mb-20px fs-14 lh-24">Pay with cash upon delivery.</div>
                                    </div>
                                    <!-- end tab content -->
                                    <!-- start tab content -->
                                    <div class="heading active-accordion">
                                        <label class="mb-5px">
                                            <input class="d-inline w-auto me-5px mb-0 p-0" type="radio" name="payment" value="credit card" onchange="payoption('{{ route('stripepay') }}')" autocomplete="off">
                                            <span class="d-inline-block text-dark-gray fw-500">Pay with Stripe <img src="images/paypal-logo.jpg" class="w-120px ms-10px" alt=""/></span> 
                                            <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-style-05" href="#style-5-collapse-4"></a>
                                        </label>
                                    </div>
                                    <div id="style-5-collapse-4" class="collapse" data-bs-parent="#accordion-style-05">
                                        <div class="p-25px bg-very-light-gray mt-20px fs-14 lh-24">You can pay with your credit card.</div>
                                    </div>
                                    <!-- end tab content -->
                                </div> 
                            </div>
                            <p class="fs-14 lh-26">Your personal data will be used to process your order {{--<a class="text-decoration-line-bottom text-dark-gray fw-500" href="#">privacy policy.</a> --}}</p>
                            {{-- <div class="position-relative terms-condition-box text-start d-flex align-items-center">
                                <label>
                                    <input type="checkbox" name="terms_condition" id="terms_condition3" value="1" class="terms-condition check-box align-middle">
                                    <span class="box fs-14 lh-24">I have agree to the website <a href="#" class="text-decoration-line-bottom text-dark-gray fw-500">terms and conditions.</a></span>
                                </label>
                            </div> --}}
                            <button type="submit" class="btn btn-base-color btn-extra-large btn-switch-text btn-round-edge btn-box-shadow w-100 text-transform-none mt-30px" style="display: none" id="place-order">
                                <span>
                                    <span class="btn-double-text" data-text="Place order">Place order</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
                    @else
                    <div class="col-md-12 text-center">
                        <h3>Your Cart is Empty</h3>
                        
                        <a href="{{route('shp')}}" class="btn btn-dark-gray">Continue Shopping</a>
                    </div>
                   @endif
                </div>
            </div>
        </section>
        <!-- end section --> 

        <script>
            function payoption(val){
              
                document.getElementById('formactionoptin').setAttribute('action', val);           
                document.getElementById('place-order').style.display = 'block';           
             }
            </script>

        @include("includes.footer")
     