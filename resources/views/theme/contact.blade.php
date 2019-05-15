 <div class="form">
    @include('theme.message')
         {{--  <div id="sendmessage">Your message has been sent. Thank you!</div> --}}
          {{-- <div id="errormessage"></div> --}}
        <form action="{{action('guestqueryController@query')}}" method="Post" role="form" class="contactForm">
          @csrf
            <div class="form-row">
              <div class="form-group col-md-4">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-4">
                <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-4">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="your mobile" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="description" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>