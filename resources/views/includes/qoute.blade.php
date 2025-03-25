<form action="{{ route('qoutesave') }}" method="post" id="quotform" class="row contact-form-style-01">    
    @csrf
    <div class="col-md-6 mb-30px sm-mb-20px">
        <div class="position-relative form-group mb-20px">
            <span class="form-icon"><i class="bi bi-person"></i></span>
            <input class="input-name box-shadow-double-large form-control required" type="text" name="name" placeholder="Your name" />
        </div>
        <div class="position-relative form-group mb-20px">
            <span class="form-icon"><i class="bi bi-envelope"></i></span>
            <input class="box-shadow-double-large form-control required" type="email" name="email" placeholder="Your email" />
        </div>
       
        <div class="position-relative form-group mb-20px">
            <span class="form-icon"><i class="bi bi-house-door"></i></span>
            <input class="input-name box-shadow-double-large form-control required" type="text" name="address_from" placeholder="FROM STREET ADDRESS(Required)" />
        </div>

        <div class="position-relative form-group mb-20px">
            <span class="form-icon"><i class="bi bi-calendar-check"></i></span>
            <input class="input-name box-shadow-double-large form-control required" type="date" name="move_date" placeholder="MOVING DATE" />
        </div>
        

      
    </div>
    <div class="col-md-6 mb-30px">
        <div class="position-relative form-group mb-20px">
            <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>
            <input class="input-name box-shadow-double-large form-control required" type="tel" name="phone" placeholder="Your mobile" />
        </div>
        <div class="position-relative form-group select mb-20px">
            <span class="form-icon"><i class="bi bi-box2"></i></span>
            <select class="form-control box-shadow-double-large" name="service_type" aria-label="select-city-booking">
                <option value="">TYPE OF SERVICE(Required)</option>
                <option value="Residential Moving">Residential Moving</option>
                <option value="Commercial Moving">Commercial Moving</option>
                <option value="Packing Services">Packing Services</option>
                <option value="Move-Out Cleaning">Move-Out Cleaning</option>
                
            </select>
        </div>
        <div class="position-relative form-group mb-20px">
            <span class="form-icon"><i class="bi bi-house-door"></i></span>
            <input class="input-name box-shadow-double-large form-control required" type="text" name="address_to" placeholder="TO STREET ADDRESS(Required)" />
        </div>
       
        <div class="position-relative form-group form-textarea">
            <span class="form-icon"><i class="bi bi-chat-left-dots"></i></span>
            <textarea class="box-shadow-double-large form-control" cols="40" rows="4" name="note" placeholder="Any thing else we need to know?"></textarea>
        </div>
    </div>
    <div class="col-auto text-center text-md-end sm-mt-20px lg-mb-15px">
        <input type="hidden" name="redirect" value="{{ URL::current() }}#quote">
        <input type="hidden" name="google_recaptcha_response" id="grecaptcharqoute">

        {{-- <button class="btn btn-dark-gray btn-switch-text btn-medium left-icon btn-round-edge btn-box-shadow" type="submit"> --}}
        <button class="btn btn-dark-gray btn-switch-text btn-medium left-icon btn-round-edge btn-box-shadow" type="button" onclick="onClickform(event,'grecaptcharqoute','quotform','qoutesave')">
            <span>
                <span><i class="feather icon-feather-mail"></i></span>
                <span class="btn-double-text" data-text="Get a quote">Get a quote</span> 
            </span>
        </button>
    </div>
    <div class="col-xl-7 align-self-center last-paragraph-no-margin">
        <p class="fs-16 lh-24 w-80 xxl-w-100">*We are committed to protecting your <a href="#" class="text-dark-gray text-decoration-line-bottom fw-500">privacy.</a> We will never collect information about you.</p>
    </div>
    <div class="col-12">
        <div class="form-results mt-20px d-none"></div>
    </div>
</form>