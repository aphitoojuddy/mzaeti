    <!-- Wrapper -->
    <div class="wrapper">

      <!-- Topic Header -->
      <div class="topic">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <ol class="breadcrumb hidden-xs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h3 class="headline"><span>Our Location</span></h3>
            <div class="embed-responsive embed-responsive-16by9">
              <!-- <iframe scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDTzDpocFQnD7w2vZiwihodbBidji972RI&q=CIMB+Niaga+Plaza,+Karet,+DKI Jakarta&zoom=15"></iframe><br /><small><a href="https://www.google.com/maps/embed/v1/place?key=AIzaSyDTzDpocFQnD7w2vZiwihodbBidji972RI&q=CIMB+Niaga+Plaza,+Karet,+DKI Jakarta" style="color:#0000FF;text-align:left">View Larger Map</a></small> -->
              <iframe scrolling="no" marginheight="0" marginwidth="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Sona%20Topas%20Tower%2C%20Jalan%20Jend.%20Sudirman%2C%20South%20Jakarta%2C%20Jakarta%2C%20Indonesia&key=AIzaSyDTzDpocFQnD7w2vZiwihodbBidji972RI&zoom=15"></iframe><br /><small><a href="https://www.google.com/maps/embed/v1/place?q=Sona%20Topas%20Tower%2C%20Jalan%20Jend.%20Sudirman%2C%20South%20Jakarta%2C%20Jakarta%2C%20Indonesia&key=AIzaSyDTzDpocFQnD7w2vZiwihodbBidji972RI&zoom=15" style="color:#0000FF;text-align:left">View Larger Map</a></small>
            </div>
          </div>
        </div>
        <div class="row mtop-40">
          <div class="col-sm-8">
            <h3 class="headline first-child"><span>Contact Us</span></h3>
            <p><?=$contactus_data['preemail']?></p>
            <form role="form">
              <div class="form-group">
                <label for="email">Your email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
                <input type="hidden" class="form-control" id="subject" value="contact-form">
              </div>
              <div class="form-group">
                <label for="name">Your name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name">
              </div>
              <div class="form-group">
                <label for="message">Your message</label>
                <textarea class="form-control" rows="3" id="message" placeholder="Enter message"></textarea>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Send a copy to myself
                </label>
              </div>
              <button type="submit" class="btn btn-lg btn-theme-primary">Send Email</button>
            </form>
          </div>
          <div class="col-sm-4">
            <h3 class="headline second-child"><span>Contact Info</span></h3>
            <ul class="contact-info">
              <li>
                <i class="fa fa-map-marker"></i>
                <div class="contact-info-content">
                  <div class="title">Address:</div>
                  <div class="description"><?=$contactus_data['address']?></div>
                </div>
              </li>
              <li>
                <i class="fa fa-phone"></i>
                <div class="contact-info-content">
                  <div class="title">Telephone:</div>
                  <div class="description"><?=$contactus_data['phone']?></div>
                </div>
              </li>
              <li>
                <i class="fa fa-fax"></i>
                <div class="contact-info-content">
                  <div class="title">Fax:</div>
                  <div class="description"><?=$contactus_data['fax']?></div>
                </div>
              </li>
              <li>
                <i class="fa fa-twitter"></i>
                <div class="contact-info-content">
                  <div class="title">Twitter:</div>
                  <div class="description"><a href="https://www.twitter.com/<?=$contactus_data['twitter_id']?>">https://www.twitter.com/<?=$contactus_data['twitter_id']?></a></div>
                </div>
              </li>
            </ul>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->